<?php
class Employee_Model extends CI_Model{
    
    public function get_employee(){ 

       return $this->db->get('employee')->result();
       
    }   
    

        
    public function get_employeeData($emp_id) {
        
        return $this->db->where('eid',$emp_id)
            ->get('employee')
            ->row();
                        
    } 
    
    public function insert_employee()
    {   
        // echo '12312'; die;
        $data = array(
            'eid' => $this->input->post('recipient-id'),
            'ename' => $this->input->post('recipient-name'),
            'edept' => $this->input->post('recipient-dept'),
            'eaddress' => $this->input->post('recipient-address')
        );
        return $this->db->insert('employee', $data);
    }

    public function update_employee()
     {
            //  echo 'asdfsad';
            //  exit();
             $id = $this->input->post('recipient-id');
        $data=array(
           
            'ename' => $this->input->post('recipient-name'),
            'edept' => $this->input->post('recipient-dept'),
            'eaddress' => $this->input->post('recipient-address')
        );
        if($id==0){
            return $this->db->insert('employee',$data);
        }else{
            $this->db->where('eid',$id);
            return $this->db->update('employee',$data);
        }     
     }


}
?>