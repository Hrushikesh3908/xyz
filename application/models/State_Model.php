<?php
class State_Model extends CI_Model{
    
    public function get_state(){ 

       return $this->db->get('state')->result();
       
    }   
    
    public function get_state_name($con_id) {
        
        return $this->db->where('country_id',$con_id)
                        ->get('state')
                        ->result();
                        
    } 


    
}
?>