<?php
$REF=$argv[1];
$LANG=$argv[2];
$res = [];
$refFiles = scandir($REF);
foreach($refFiles as $key => $name){
    if(!preg_match('/^.*\.php$/', $name))
        continue;

    $coverageData = fileCoverage($name);

    $translationCategory = stripExtension($name);
    $res[$translationCategory] = $coverageData;
}

$output = [];
$output[getLanguageTagFromPath($LANG)] = $res;
print(json_encode($output) . "\n");

// returns coverage data for specified file name
function fileCoverage(string $name){
    global $REF, $LANG;

    $refData = require $REF."/".$name;

    $targetFile = $LANG."/".$name;

    if (is_file($targetFile)) {
        $testData = require $targetFile;
    }else{
        $testData = [];
    }

    $missing = findMissing($refData, $testData);
    return $missing;
}

// compares 2 translations
function findMissing(array $ref, array $test){
    $notTranslated = array_diff_key($ref, $test);
    $obsolete = array_diff_key($test, $ref);
    return [
        "missing" => $notTranslated,
        "obsolete" => $obsolete,
        "count" => count($ref)
    ];
}

// remove file extension
function stripExtension(string $filename){
    $arr = explode('.',$filename,2);
    return $arr[0];
}

// remove file extension
function getLanguageTagFromPath(string $dirname){
    return substr($dirname,2);
}