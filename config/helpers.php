<?php

/**
 * Helper functions
 */

namespace config;

class Helpers{
    public static function returView($url){
        $data = str_replace('/', '\\', $url);
        $path = '../resources\views\auth'. $data. '.php';
            if (file_exists($path)) {
                include $path;
            }else {
                include '../resources\views\errors\404.php';
            }
    }
};

?>