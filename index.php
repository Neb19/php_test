<?php

use Doc\Core\MySQLDatabase;
use Doc\Core\Request;
use Doc\Controller\AppController;

// return $config
require 'app/bootstrap.php';

// Composer Autoloader
require 'vendor/autoload.php';

// Custom Autoloader
require 'core/Autoloader.php';
Autoloader::registerAutoload();

// Database
$db = new MySQLDatabase($config['Database']);
$db = $db->getPdo();

$request = new Request();

AppController::initialize($request);
