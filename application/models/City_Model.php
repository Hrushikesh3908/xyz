<?php
class City_Model extends CI_Model{
    
    public function get_city(){ 

       return $this->db->get('city')->result();
       
    }   
    
        public function get_city_name($state_id) {
        
        return $this->db->where('state_id',$state_id)
                        ->get('city')
                        ->result();
                        
    } 

}
?>