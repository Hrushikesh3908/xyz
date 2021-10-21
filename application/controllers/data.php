<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      
      $this->load->model('Employee_Model'); 
//       $this->load->model('CategoryModel');         
   }

   public function index()
   {  
    $employee=new Employee_Model;
    $data['employee']=$employee->get_employee();
   // print_r ($data['employee']); die;
        $this->load->view('templates/header');       
       $this->load->view('data/index',$data);
        $this->load->view('templates/footer');
   }
   public function update()
   {

        //print_r($this->input->post('recipient-id'));die;
        if ($this->input->post('recipient-id')) {
                     

            $employee=new Employee_Model;
            $employee->update_employee();
            redirect(base_url('data'));
        }
     
   }
   public function store()
   {
    //    echo 'asdfasdf'; die();
          $employee=new Employee_Model; 
          $employee->insert_employee();
          redirect(base_url('data'));
    }

  public function empDetails()
  {
     $emp_id= $this->input->post('emp_id'); 
     $employee= $this->Employee_Model->get_employeeData($emp_id);
     echo json_encode($employee);
  }


  public function delete($id)
  {
    //  echo $id; die();
      $this->db->where('eid', $id);
      $this->db->delete('employee');
      redirect(base_url('data'));
  }

}