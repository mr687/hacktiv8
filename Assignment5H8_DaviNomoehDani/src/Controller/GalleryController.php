<?php
defined('ROOT') or die();

class GalleryController{
  public function index($request)
  {
    view('gallery');
  }
}