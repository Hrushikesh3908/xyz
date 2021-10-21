<?php
class Course_Model extends CI_Model{
    
    public function get_courses(){
       // return $this->db->get('university')->result();
       return $this->db->get('course')->result();
    // print_r($this->db->get('course')->result() );
    //echo "HRllosdfsa"; exit();
    }   

    public function get_course() {
        return $this->db->get('course')->result();
    } 

    public function get_uni_courses($uni_id) {
        
        return $this->db->where('uni_id',$uni_id)
                        ->get('course')
                        ->result();
    } 

}
?>