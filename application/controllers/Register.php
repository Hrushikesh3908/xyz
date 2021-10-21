<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('RegisterModel'); 
      $this->load->model('UniversityModel'); 
      $this->load->model('Course_Model'); 
      $this->load->model('Course_Model'); 
      $this->load->model('CourseModel1'); 
      $this->load->model('studentModel1'); 

      $this->load->model('Country_Model'); 
      $this->load->model('State_Model'); 
      $this->load->model('City_Model'); 
    
   }

   public function emailSent() {
          
      // $registerObj=new RegisterModel;
      // $data['register']=$registerObj->get_students();
      $this->load->view('registration/indexEmail');

   }


   
   public function saveLead() {
         
      $saveLead=new RegisterModel;
      $saveLead->store_email_data();
      redirect(base_url('register/emailSent'));

   }

   
   public function index() {
          
       $registerObj=new RegisterModel;
       $data['register']=$registerObj->get_students();

       $universities=new UniversityModel;
       $data['universities']=$universities->get_universities();

       $course=new Course_Model;
       $data['courses']=$course->get_courses(); 

       $country=new Country_Model;
       $data['country']=$country->get_country();

       $state=new State_Model;
       $data['state']=$state->get_state();
 
       $city=new City_Model;
       $data['city']=$city->get_city();
         
      //   print_r($data['city']); die('asfsadf');
      //     exit();
     $this->load->view('registration/index',$data);
   }

   public function create()
   {
     $universities=new UniversityModel;
     $data['universities']= $universities->get_universities();
      $this->load->view('templates/header');
      $this->load->view('stud/create1',$data);
      $this->load->view('templates/footer');        
   }


   
   public function chatBox()
   {
     // $this->load->view('templates/header');
      $this->load->view('stud/lp_chatBox');
      //                      $this->load->view('templates/footer');        
   }


   
   public function alagappa_mcom_lp()
   {  //for this we use db tev_test3
      $course=new CourseModel1; 
      
       $data['courses']=$course->get_courses_name();
      // print_r($data['courses']); exit();
      $this->load->view('stud/lp_alagappa_lp',$data);
   }

   public function store_student(){
            $student=new studentModel1; 
             $student->store_student_info();
          redirect(base_url('register/alagappa_mcom_lp'));

   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
          $register=new RegisterModel; 
          $register->insert_student();
          redirect(base_url('register'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */

   public function edit($id)
   {
       $register=new RegisterModel;
       $data['register']=$register->get_register($id);
       
       $universities=new UniversityModel;
       $data['universities']=$universities->get_universities();
       
       $course=new Course_Model;
       $data['course']=$course->get_course();
      //  print_r($data['course']);
      //  exit();
       
        $this->load->view('templates/header');
       $this->load->view('registration/edit',$data);
       $this->load->view('templates/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $students=new RegisterModel;
       $students->update_registration($id);
       redirect(base_url('register'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete1($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('registration');
       redirect(base_url('register'));
   }
   public function result()
   {
      $uni_id= $this->input->post('university_id');
      $uni_courses= $this->Course_Model->get_uni_courses($uni_id);
      echo json_encode($uni_courses);
   }
   public function country_dropdown()
   {
      $con_id= $this->input->post('country_id');
      $state_name= $this->State_Model->get_state_name($con_id);
      echo json_encode($state_name);
   }
   
   public function stateDropdown()
   {
      //echo('dfsdfsdfsdfsf');
      $state_id = $this->input->post('state_id');
      
      $cities_name= $this->City_Model->get_city_name($state_id);
     // print_r($cities_name); exit();
      echo json_encode($cities_name);
   }

}