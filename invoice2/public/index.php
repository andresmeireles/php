<?php

$files = glob(__DIR__.'/*');

foreach($files as $file) {
    $fileName = str_replace(substr($file, 0, 41), '', $file);
    if ($fileName === 'index.php') {
        continue;
    }
    echo '<a href="'. $fileName .'">'. $fileName .'</a>';
}