<?php

require 'core/Autoloader.php';
Autoloader::registerAutoload();

new Doc\Core\Database('localhost', 'php');

require 'webroot' . DIRECTORY_SEPARATOR . 'layout.php';
