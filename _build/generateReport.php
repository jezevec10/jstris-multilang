<?php
require_once __DIR__.'/vendor/autoload.php';

$DATA_FILE=$argv[1];

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

echo $twig->render('index.twig', ['data' => $data]);
