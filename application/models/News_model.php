<?php
class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }

    public function get_news()
    {
        //SELECT * FROM `news` 

    return  $this->db->select('*')
                ->from('news')
                ->get()
                ->result();
    }
}