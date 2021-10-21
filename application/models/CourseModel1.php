<?php
class CourseModel1 extends CI_Model{
    
    public function get_courses_name(){

       return $this->db->get('course')->result();
    
    }   

   
}
?>