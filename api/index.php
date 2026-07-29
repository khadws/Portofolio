<?php

// Paksa Laravel menggunakan /tmp untuk storage di Vercel
$_ENV['APP_STORAGE'] = '/tmp';

require __DIR__ . '/../public/index.php';