<?php
// Load Config
require_once 'config/config.php';

// Load Libraries
// require_once 'libraries/core.php';
// require_once 'libraries/controller.php';
// require_once 'libraries/database.php';

// Autolaod Core Libraries
spl_autoload_register(function($classname){
    require_once 'libraries/'. $classname .'.php';
});