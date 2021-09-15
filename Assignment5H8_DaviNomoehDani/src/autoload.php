<?php
defined('ROOT') or die();

// Dummy user data logged in
if (!@$_SESSION['auth']){
  $_SESSION['auth'] = [
    'user_id' => 1,
    'status' => true,
  ];
}

/**
 * AUTOLOAD
 */
define('SRC_PATH', __DIR__);
require_once(SRC_PATH.'/router.php');
require_once(SRC_PATH.'/config.php');

require_once(SRC_PATH.'/Lib/Database.php');
require_once(SRC_PATH.'/Controller/ProfileController.php');
require_once(SRC_PATH.'/Controller/ProductController.php');
require_once(SRC_PATH.'/Controller/BlogController.php');
require_once(SRC_PATH.'/Controller/InventoryController.php');
require_once(SRC_PATH.'/Controller/GalleryController.php');

/**
 * GLOBAL FUNCTIONS
 */
// die dump
function dd(...$args){
  foreach($args as $arg){
    echo '<pre style="background: black;color: white;">';
    print_r($arg);
    echo '</pre>';
  }
  die();
}

// fetch request info
function parsedRequest(){
  // Overriding method
  $method = $_SERVER['REQUEST_METHOD'];
  if ( $method === 'POST' && @$_POST['_method'] ){
    $_SERVER['REQUEST_METHOD'] = $method = strtoupper($_POST['_method']);
    unset( $_POST['_method'] );
  }

  $path = @$_SERVER['REQUEST_URI'] ?? '/';
  $route = strtolower("{$method}:{$path}");
  return [
    'method' => strtolower($method),
    'route' => $route,
    'get' => $_GET,
    'post' => $_POST
  ];
}

// execute route
function executeRouter($route, $request){
  if ( !class_exists(@$route[0]) ) die('Not Found!');
  $class = @new $route[0];
  $func = @$route[1] ?? 'index';
  $class->$func($request);
}

// get user logged in
function userLoggedIn(){
  return @$_SESSION['auth'] ?? null;
}

// include view
define('VIEW_PATH', SRC_PATH.'/View/');
function view($path, $data = null){
  $path = "{$path}.php";
  
  $viewPath = VIEW_PATH.$path;
  if ( !file_exists($viewPath) ) die("View not found: {$viewPath}");
  $templatePath = VIEW_PATH.'template.php';

  if ($data){
    foreach (@$data as $key => $value) {
      $$key = $value;
    }
  }
  
  include_once($templatePath);
}

// flash message with session
function flash_message($key, $value = null)
{
  if (!@$value){
    if (@$_SESSION[$key]){
      $value = $_SESSION[$key];
      unset($_SESSION[$key]);
      return $value;
    }
  }else{
    $_SESSION[$key] = $value;
  }
}