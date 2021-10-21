<?php
class studentModel1 extends CI_Model{
    
    public function store_student_info(){ 

            $data = array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'mobile'=>$this->input->post('mobile'),
                'course_id' => $this->input->post('course_id')
            );

            return $this->db->insert('student', $data);
        
       
    }   
    

    
}
?>