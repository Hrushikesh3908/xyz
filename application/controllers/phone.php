<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class phone extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel'); 
      $this->load->model('CategoryModel');         
   }

   public function index()
   {  
    //    $this->load->view('templates/header');       
       $this->load->view('phone/index');
    //    $this->load->view('templates/footer');
   }
   
}