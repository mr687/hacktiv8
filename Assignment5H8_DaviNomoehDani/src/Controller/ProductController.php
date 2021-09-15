<?php
defined('ROOT') or die();

class ProductController{
  public function index($request)
  {
    view('product');
  }
}