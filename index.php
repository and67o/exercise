<?php

function missingNumber($nums) {
	sort($nums);
	for ($i = 0; $i <= count($nums); $i++) {
		if ($i != $nums[$i]) {
			return $i;
		}
	}
}

//var_dump(countPrimes(10));exit;
var_dump(missingNumber([3,0,1]));
exit;


use Router\Router;

require_once 'router.php';

ini_set('display_errors', 1);
require_once 'vendor/autoload.php';

$Router = new Router();
$Router->run();
