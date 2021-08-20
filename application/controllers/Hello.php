<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hello extends CI_Controller {

  public function index() //oop private, public
  {
    echo "Hello World";
  }

  public function coba(){
    echo "ini function coba";
  }

}


?>