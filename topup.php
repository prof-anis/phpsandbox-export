<?php

require 'vendor/autoload.php';
require 'pages.html';


use Tobexkee\Reloadly\Reloadly;

$reloadly = new Reloadly("86133gvHVz2iqr4lgETPZNHTRwj013Gg", "kWc5GK3IoZ-3l5NQiBuOZ8Mv639Gm7-i99Noa0lgbM6SbO6INPmBNpBd5lmDJBE");

print_r($reloadly->topup()->send([]));