<?php

declare(strict_types=1);

$files = glob(__DIR__.'/*');

echo 'paginas de teste! <br>';
foreach ($files as $file) {
    $fileName = str_replace(substr($file, 0, 40), '', $file);
    if ($fileName === 'index.php' || $fileName === 'image.jpg') {
        continue;
    }
    echo sprintf('<a href="/%s">%s</a><br>', $fileName, $fileName);
}
