<?php
require_once __DIR__.'/vendor/autoload.php';

$DATA_FILE=$argv[1];
$OUTPUT_DIR=$argv[2];

$fn = fopen($DATA_FILE,"r");

$data = [];

while(!feof($fn)){
    $line = trim(fgets($fn));
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

// Create document

$loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$index = $twig->render('index.twig', ['data' => $data]);
file_put_contents($OUTPUT_DIR.'/index.md', $index);

foreach($data as $langCode => $langData){
    $langReport = $twig->render('lang.twig', ['data' => $langData, 'langCode'=>$langCode]);
    file_put_contents($OUTPUT_DIR."/${langCode}.md", $langReport);
}