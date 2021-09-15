<?php 
defined('ROOT') or die();

$routes = [

  'get:/' => ['ProfileController', 'index'],
  'patch:/' => ['ProfileController', 'update'],
  
  'get:/product' => ['ProductController', 'index'],
  'get:/gallery' => ['GalleryController', 'index'],
  'get:/blog' => ['BlogController', 'index'],
  'get:/inventory' => ['InventoryController', 'index'],
];