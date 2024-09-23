<?php
$Folder = 'C:Ketsman/hw4/files' . DIRECTORY_SEPARATOR;
$newFolder = 'C:\Ketsman\hw4\files_new' . DIRECTORY_SEPARATOR;
function copyFiles($Folder, $newFolder) {
    $files = scandir($Folder);
    foreach ($files as $file) {
        if ($file !== '.' && $file !== '..') {
            $startfile = $Folder . $file;
            $finishfile = $newFolder . $file;
            copy($startfile, $finishfile);
            $newName = $newFolder . 'new_' . $file;
            rename($finishfile, $newName);
        }
    }
}
copyFiles($Folder, $newFolder);
return 0;
