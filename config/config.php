<?php

ini_set('display_errors', 1);

define('DSN', 'mysql:host=localhost;dbname=dotinstall_sns_php');
define('DB_USERNAME', 'dbuser');
define('DB_PASSWARD', 'htmr821');

define('SITE_URL', 'http://' . $_SERVER['HTTP_HOST']);

require_once(__DIR__ . '/../lib/functions.php');
require_once(__DIR__ . '/autoload.php');
// autoloadが機能していないため応急処置 ↓
require_once(__DIR__ . '/../lib/Controller/index.php');
require_once(__DIR__ . '/../lib/Exception/InvalidEmail.php');
require_once(__DIR__ . '/../lib/Exception/InvalidPassword.php');

session_start();
