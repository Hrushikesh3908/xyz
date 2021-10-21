<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
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
      $students=new StudentsModel;
      $data['data']=$students->get_students();
       $this->load->view('templates/header');       
       //$this->load->view('students/list',$data);
       $this->load->view('stud/page1',$data);
       $this->load->view('templates/footer');
   }
   public function create()
   {
     $universities=new UniversityModel;
     $data['universities']= $universities->get_universities();
      $this->load->view('templates/header');
      $this->load->view('stud/create1',$data);
      $this->load->view('templates/footer');        
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $students=new StudentsModel; 
       $students->insert_student();
       redirect(base_url('students'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */

   public function edit1($id)
   {
    //echo $id;exit;
    // $categories=new CategoryModel;
    //$data['category']= $categories->get_category();
    // $category = $this->db->get_where('category', array('id' => $id))->row();
    //$product = $this->db->get_where('products', array('id' => $id))->row();
       $students=new StudentsModel;
       $data['student']=$students->get_student($id);
       
       $universities=new UniversityModel;
       $data['universities']=$universities->get_universities();
    //    print_r($data['universities']);
    //    exit();
       $this->load->view('templates/header');
       $this->load->view('stud/edit1',$data);
       $this->load->view('templates/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update1($id)
   {
       $students=new StudentsModel;
       $students->update_student($id);
       redirect(base_url('students'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete1($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('student');
       redirect(base_url('students'));
   }
}