<?php
class Country_Model extends CI_Model{
    
    public function get_country(){ 

       return $this->db->get('country')->result();
       
    }   
    

    
}
?>