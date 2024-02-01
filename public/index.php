<?php

require_once __DIR__.'/../vendor/autoload.php';

use App\Core\Application;
use App\Core\MessageDTO;
use App\Core\Router;

error_reporting(E_ALL);
ini_set("display_errors", 1);
ini_set('session.cookie_httponly', 1);

(new Application([
        'uri' => $_SERVER['REQUEST_URI'],
        'method' => $_SERVER['REQUEST_METHOD']
    ],
    new Router(),
    new MessageDTO(author: $_POST['author'], msg: $_POST['msg'])
));