<?php
class RegisterModel extends CI_Model{
    
        public function get_students(){
        
          if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
          }
        
        return  $this->db->select("registration.*,course.courseName,university.uni_name")
        ->from('registration')
        ->join('course','registration.course_id=course.courseID','left')
        ->join('university','registration.uni_id=university.id','left')
        ->get()
        ->result();
     }


     public function update_registration($id)
     {
            // echo $this->input->post('course_id');
            // exit();
        $data=array(
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'mobile'=> $this->input->post('mobile'),
            'uni_id' => $this->input->post('uni_id') ,        
            'course_id' => $this->input->post('course_id')
        );
        if($id==0){
            return $this->db->insert('registration',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('registration',$data);
        }     
     }
     
    public function insert_student()
    {   
      //  echo $this->input->post('university_ID'); die('dsfas');
      // exit();
        $data = array(
            'name' => $this->input->post('firstName')." ".$this->input->post('lastName'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'password' => $this->input->post('password'),
            'uni_id' => $this->input->post('university_ID'),
            'course_id' => $this->input->post('course_ID')
        );
        return $this->db->insert('registration', $data);
    }

    public function store_email_data()
    {       
    //     print_r( $this->input->post()); die('dsfas');
    //    exit();
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'contactno' => $this->input->post('contactno'),
            'enquiry' => $this->input->post('enquiry')
        );

        return $this->db->insert('emailDemo', $data);
    }

    

    
    public function get_cust_emails(){
        
      
        
        return  $this->db->select("emailDemo.*")
        ->from('emaildemo') 
        ->get()
        ->result();
     }









    
    public function update_product($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description'),
            'price'=> $this->input->post('price'),
            'cat_id' => $this->input->post('cat_id')            
        );
        if($id==0){
            return $this->db->insert('products',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('products',$data);
        }        
    }

    function get_register($id){

            return $this->db->where('id',$id)->get('registration')->row();
    }
}
?>