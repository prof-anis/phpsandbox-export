<?php

require 'vendor/autoload.php';
require 'pages.html';


use Tobexkee\Reloadly\Reloadly;

$reloadly = new Reloadly("86133gvHVz2iqr4lgETPZNHTRwj013Gg", "kWc5GK3IoZ-3l5NQiBuOZ8Mv639Gm7-i99Noa0lgbM6SbO6INPmBNpBd5lmDJBE");

/** Fetch all operators **/

//print_r($reloadly->operators()->fetch());

/** Fetch Operator by ID **/
//print_r($reloadly->operators()->fetchById("729"));

/** Fetch Operators by ISO **/
//print_r($reloadly->operators()->fetchByIso('NG'));

/** Fetch Operators by phone **/
print_r($reloadly->operators()->fetchByPhone('+2347060953859', 'NG'));