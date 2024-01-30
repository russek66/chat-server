<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Core\Application;

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('session.cookie_httponly', 1);

(new Application())->run();