<?php

/**
 * Helper functions
 */

namespace config;

class Helpers{
    public static function returView($url){

        $uri = (array_values(array_filter(explode('/', $url))));
        
        if (!empty($uri[0]) && !empty($uri[1])) {
            $path = '../resources\views\\' . $uri[0] . '\\' . $uri[1] . '.php';

            if (file_exists($path)) {
                include $path;
            }else {
                include '../resources\views\errors\404.php';
            }
        }elseif ($uri[0] == 'index') {
            $path = '../resources\views\welcome.php';

            if (file_exists($path)) {
                include $path;
            }else {
                include '../resources\views\errors\404.php';
            }
        }else {
            include '../resources\views\errors\404.php';
        }
    }
};

?>