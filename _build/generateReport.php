<?php
require_once __DIR__.'/vendor/autoload.php';
\date_default_timezone_set('UTC');

$DATA_FILE=$argv[1];
$OUTPUT_DIR=$argv[2];

$fn = fopen($DATA_FILE,"r");

$data = [];

while(!feof($fn)){
    $line = trim(fgets($fn));
    $line = str_replace("\xEF\xBB\xBF",'',$line);
    if(!$line || strlen($line)<2) continue;
    $lineData = json_decode($line, true);
    if(!$lineData) continue;

    $data = $data + $lineData;
}
fclose($fn);

// Gather coverage percentage
foreach($data as $langCode => $langData){
    $totalMissing = 0;
    $totalWords = 0;
    foreach($langData as $category => $categoryData){
        $total = $categoryData["count"];
        $missing = count($categoryData["missing"]);
        $data[$langCode][$category]["cov"] = round(($total-$missing)/($total/100), 2);

        $totalWords+=$total;
        $totalMissing+=$missing;
    }
    $data[$langCode]["cov"] = round(($totalWords-$totalMissing)/($totalWords/100), 2);
}

// Write coverage json
file_put_contents($OUTPUT_DIR."/coverage.json", \json_encode($data));

// Create document
$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$index = $twig->render('index.twig', ['data' => $data, 'genDate'=>\date("r")]);
file_put_contents($OUTPUT_DIR.'/index.md', $index);

foreach($data as $langCode => $langData){
    $langReport = $twig->render('lang.twig', ['data' => $langData, 'langCode'=>$langCode]);
    file_put_contents($OUTPUT_DIR."/${langCode}.md", $langReport);
}
