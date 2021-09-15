<?php

error_reporting(E_ALL);
session_start();

define('ROOT', 'mr687');

require_once('../src/autoload.php');

$request = parsedRequest();
executeRouter( @$routes[ $request['route'] ], $request );