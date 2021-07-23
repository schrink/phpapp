<?php
session_start();

require_once 'vendor/autoload.php';

use App\Core\App;
use App\Core\Router;
use App\Core\Request;


App::set('db', require 'core/bootstrap.php' );

var_dump($_SESSION);

Router::load('routes.php')
    ->loadController(Request::uri(), Request::method());


