<?php 

require_once '../app/models/User.php';

class Profile extends Controller {

  protected $profile;
 
  public function __construct() {
    $this->profile = $this->model('User');
    
  }

  public function index($name = '') {
    $profile = $this->profile;
    $profile->name = $name;
    
    $this->view('profile/index', ['name' => $profile->name]);
  
  }

  public function getProfile() {
    $profiles = $this->profile->allProfiles();
    
    $this->view('profile/index', ['profiles' => $profiles]); 
  }

  
}

 