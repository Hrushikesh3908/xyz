<?php
class CategoryModel extends CI_Model{
    
    public function get_category(){
        return $this->db->get('category')->result();
        //select * from category
       // $this->db->select('*')->from('category')->get()->result();
    }   
}
?>