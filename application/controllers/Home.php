<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
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
       $this->load->view('Home/index');
    //    $this->load->view('templates/footer');
   }
      public function  formValidate()
   {  
    //    $this->load->view('templates/header');       
       $this->load->view('Home/formValidation');
    //    $this->load->view('templates/footer');
   }
   
}