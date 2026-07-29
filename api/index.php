<?php

// Prepare storage directory in /tmp for Vercel Serverless
$storageDirectories = [
    '/tmp/storage/app',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($storageDirectories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

// Forward to public/index.php
require __DIR__ . '/../public/index.php';