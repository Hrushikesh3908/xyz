<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website1 extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
     // $this->load->model('ProductsModel');         
   }

   public function index()
   {  
    //    $this->load->view('templates/header');       
       $this->load->view('web/index');
    //    $this->load->view('templates/footer');
   }
   
}