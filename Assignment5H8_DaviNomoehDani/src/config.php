<?php
defined('ROOT') or die();

$config = [
  'database' => [
    'db_host' => '127.0.0.1',
    'db_port' => 8889,
    'db_username' => 'root',
    'db_password' => 'root',
    'db_name' => 'h8_portfolio'
  ]
];

function config($name = null){
  global $config;
  
  return @$config[$name] ?? null;
}