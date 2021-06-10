<?php

$allFiles = [];
$allRenamedFiles = [];
$allJPGfiles = [];
$mainDirName = 'folderForTask4';
listFolderFiles($mainDirName, $allFiles);
findAndRenameAllFiles($allFiles, $allRenamedFiles, $allJPGfiles);

print_r($allJPGfiles);

function findAndRenameAllFiles($allFiles, &$allRenamedFiles, &$allJPGfiles)
{
    $numbers = [
        "1" => "0",
        "2" => "0",
        "3" => "0",
        "4" => "0",
        "5" => "0",
        "6" => "0",
        "7" => "0",
        "8" => "0",
        "9" => "0",
    ];

    foreach ($allFiles as $file) {
        $oldPath = $file;
        $oldFileName = basename($file);
        $newFileName = strtolower($oldFileName);
        $newFileName = strtr($newFileName, $numbers);
        $newPath = str_replace($oldFileName, $newFileName, $oldPath);

        $allRenamedFiles[$oldPath] = $newPath;

        rename($oldPath,$newPath);

        if (pathinfo($newPath, PATHINFO_EXTENSION) == 'jpg') {
            $allJPGfiles[] = $newPath;
        }
    }
}


function listFolderFiles($dir,&$allFiles) {
    $ffs = scandir($dir);

    unset($ffs[array_search('.', $ffs, true)]);
    unset($ffs[array_search('..', $ffs, true)]);

    // prevent empty ordered elements
    if (empty($ffs)) {
        return $allFiles;
    }

    foreach($ffs as $ff){
        if(is_dir($dir.'/'.$ff)) {
            $allFiles = listFolderFiles($dir.'/'.$ff, $allFiles);
        } else{
            $allFiles[] = $dir.'/'.$ff;
        }
    }
    return $allFiles;
}


