<?php

// Pastikan folder yang dibutuhkan Laravel tersedia di /tmp (direktori writable pada serverless)
$tmpDirs = [
    '/tmp/views',
    '/tmp/cache',
    '/tmp/sessions',
    '/tmp/logs',
];

foreach ($tmpDirs as $dir) {
    if (! is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Forward request ke public/index.php Laravel
require __DIR__.'/../public/index.php';
