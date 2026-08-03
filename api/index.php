<?php

// 1. Ubah direktori kerja ke folder root project
chdir(__DIR__ . '/../');

// 2. Jalankan autoloader Composer
require __DIR__ . '/../vendor/autoload.php';

// 3. Panggil file entry point asli milik Laravel
require __DIR__ . '/../public/index.php';