<?php
defined('ROOT') or die();

class ProfileController{
  private $db;
  public function __construct()
  {
    $this->db = new Database(config('database'));
  }

  public function index($request)
  {
    if (!userLoggedIn()) header('Location: /');
    
    $profile = $this->db
      ->where('user_id', userLoggedIn()['user_id'])
      ->getOne('profiles');
    view('index', ['profile' => $profile]);
  }

  public function update($request)
  {
    if (!userLoggedIn()) header('Location: /');
    $profileId = @$request['post']['id'];
    if ($profileId){
      unset($request['post']['id']);
      unset($request['post']['user_id']);
      $result = $this->db
        ->where('id', $profileId)
        ->update('profiles', $request['post']);
      if ($result){
        flash_message('success_message', 'Profile has been updated successfuly. 👍🏼');
      }else{
        flash_message('error_message', 'Oh no something wrong. 🚫');
      }
      header('Location: /');
    }
  }
}