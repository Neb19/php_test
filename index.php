<?php

use Doc\Core\MySQLDatabase;
use Doc\View\AppView;

// return $config
require 'app/bootstrap.php';

// Composer Autoloader
require 'vendor/autoload.php';

// Custom Autoloader
require 'core/Autoloader.php';
Autoloader::registerAutoload();

// Database
$db = new \Doc\Core\MySQLDatabase($config['Database']);
$db = $db->getPdo();

// View

