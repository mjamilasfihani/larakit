<?php

declare(strict_types=1);

$helperDirs = [
    // helpers location
    // 'app/Helpers',
];

foreach ($helperDirs as $dir) {
    $dir = __DIR__ . '/' . $dir;
    if (! is_dir($dir)) {
        continue;
    }

    chdir($dir);

    foreach (glob('*.php') as $filename) {
        $filePath = realpath($dir . '/' . $filename);

        require_once $filePath;
    }
}

chdir(__DIR__);
