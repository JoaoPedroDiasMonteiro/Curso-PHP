<?php

require "./biblioteca/lib1/lib1.php";
require "./biblioteca/lib2/lib2.php";

use B\Client;
use A\Client as AClient;

$ew = new AClient;
print_r($ew);
echo $ew->name;


$c = new Client;
print_r($c);
echo $c->name;