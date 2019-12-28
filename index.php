<?php

use Router\Adapter\NamesJson;
use Router\Router;
use Router\Adapter\DataLoader;
use Router\Adapter;

require_once 'router.php';

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$Router = new Router();
$Router->run();


//$book = new Adapter\PaperBook();
//$book->open();
//$book->turnPage();
//var_dump($book->getPage());
//
//$kindle = new Adapter\Kindle();
//$book1 = new Adapter\EBookAdapter($kindle);
//
//$book1->open();
//$book1->turnPage();
//var_dump($book1->getPage());
////////////////////////////////////////////////


$xmlObj = new DataLoader(file_get_contents('src/adapter/data/file.xml'));
$names1 = new Adapter\AdapterJSON($xmlObj);
$data1 = $names1->handleNames();
$result1 = $names1->getCountNames($data1);

$names = new NamesJson('src/adapter/data/file.json');
$data = $names->handleNames();
$result = $names->getCountNames($data);


var_dump($result, $result1);exit;
