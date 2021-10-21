<?php
class StudentsModel extends CI_Model{
    public function get_students(){
         // $query = $this->db->get("products");
         return  $this->db->select("student.*,university.uni_name")
                          ->from('student')
                          ->join('university','university.id=student.uni_id','left')
                          ->get()
                          ->result();
         
    }
    public function insert_student()
    {   
        $data = array(
            'id' => $this->input->post('id'),
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'mobile'=>$this->input->post('mobile'),
            'uni_id' => $this->input->post('uni_id')
        );
        return $this->db->insert('student', $data);
    }
    public function update_student($id) 
    {
        $data=array(
            'name' => $this->input->post('name'),
            'email'=> $this->input->post('email'),
            'mobile'=> $this->input->post('mobile'),
            'uni_id' => $this->input->post('uni_id')            
        );
        if($id==0){
            return $this->db->insert('student',$data);
        }else{
            $this->db->where('id',$id);
            return $this->db->update('student',$data);
        }        
    }

    function get_student($id){
            return $this->db->where('id',$id)->get('student')->row();
    }
}
?>