<?php

/**
 * System - RoutingService
 */

namespace config;

class RoutingService{
    public function Routing(){
        if (strpos($_SERVER['REQUEST_URI'], 'api')) {
            include '../routes/api.php';
        }else {
            include '../routes/web.php';
        }
    }
}

?>
