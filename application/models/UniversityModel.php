<?php
class UniversityModel extends CI_Model{
    
    public function get_universities(){ 

       return $this->db->get('university')->result();
       
    }   
    

    
}
?>