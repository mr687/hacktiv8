<?php
defined('ROOT') or die();

class InventoryController{
  public function index($request)
  {
    view('inventory');
  }
}