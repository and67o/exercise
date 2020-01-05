<?php

use Router\Adapter\DataLoader;
use Router\Adapter\NamesJson;
use Router\Router;
use Router\Adapter;
use \Router\TemplateMethod\Parents;
use \Router\TemplateMethod\Children;

require_once 'router.php';

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$Router = new Router();
$Router->run();

//////////////////////////////////////////////////

//$xmlObj = new DataLoader(file_get_contents('src/adapter/data/file.xml'));
//$names1 = new Adapter\AdapterJSON($xmlObj);
//$data1 = $names1->handleNames();
//$result1 = $names1->getCountNames($data1);
//
//$names = new NamesJson('src/adapter/data/file.json');
//$data = $names->handleNames();
//$result = $names->getCountNames($data);
//
//var_dump($result1, $result);

//////////////////////////////////////////////////

//$parent = new Parents();
//$parent->allDay();
//
//$child = new Children();
//$child->allDay();

//////////////////////////////////////////////////

