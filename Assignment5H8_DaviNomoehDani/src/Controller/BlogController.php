<?php
defined('ROOT') or die();

class BlogController{
  public function index($request)
  {
    view('blog');
  }
}