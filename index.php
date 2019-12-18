<?php

use Router\Router;

require_once 'router.php';

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$Router = new Router();
$Router->run();
