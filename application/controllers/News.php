<?php 

 class News extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }
    
    public function index()
	{
        $data['title']="News111";
        $data['all_news']=$this->news_model->get_news();
        $this->load->view('templates/header');
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer');
	}
 }
?>