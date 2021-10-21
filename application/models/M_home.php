<?php
class M_home extends CI_Model{
    
    public function get_products(){
        if(!empty($this->input->get("search"))){
          $this->db->like('title', $this->input->get("search"));
          $this->db->or_like('description', $this->input->get("search")); 
        }
       // $query = $this->db->get("products");
        return  $this->db->select("products.*,category.cat_name")
                          ->from('products')
                          ->join('category','category.id=products.cat_id','left')
                          ->get()
                          ->result();
        //return $query->result();
    }
    public function insert_product()
    {   
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'price' => $this->input->post('price'),
            'cat_id' => $this->input->post('cat_id')

        );
        return $this->db->insert('products', $data);
    }
    public function update_product($id) 
    {
        $data=array(
            'title' => $this->input->post('title'),
            'description'=> $this->input->post('description'),
            'price'=> $this->input->post('price')
            
        );
        print_r($data);
        if($id==0){
            return $this->db->insert('products',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('products',$data);
        }        
    }
}
?>