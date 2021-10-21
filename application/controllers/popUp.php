<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class popUp extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('StudentsModel'); 
      $this->load->model('UniversityModel'); 
      
   }

   public function index() {    
     $this->load->view('templates/header');       
     $this->load->view('popup/popup_modal');
     $this->load->view('templates/footer');
 }


  

}