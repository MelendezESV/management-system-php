<?php

/**
 * System imports
 */

use config\RoutingService;

/**
 * Autoload file
 */

require_once '../config/autoload.php';

/**
 * System entry point
 */

$index = (new RoutingService)->Routing();

?>
