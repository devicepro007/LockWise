<?php
/*
 * Licensed under the GNU AGPLv3
 * Copyright (C) 2026 DPro7
 */

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

// Safely read env values
define('DB_HOST', $_ENV['DB_HOST']);
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASS', $_ENV['DB_PASSWORD']);
define('DB_CHARSET', $_ENV['DB_CHARSET']);