<?php

/**
 * Autoload - Configuration
 */
 
spl_autoload_register(function($class){
    $path = '../' . str_replace("\\", "/", $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }else {
        header("Location:/resources/views/errors/404.php");
    }
});

?>