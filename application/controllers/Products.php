<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends CI_Controller {
   /**
    * Get All Data from this method.
    * @return Response
   */
   public function __construct() {
    //load database in autoload libraries 
      parent::__construct(); 
      $this->load->model('ProductsModel'); 
      $this->load->model('CategoryModel');         
   }

   public function index() {    
       $products=new ProductsModel;
       $data['data']=$products->get_products();
    //    $categories=new CategoryModel;
    //    $data['category']= $categories->get_category();   
    //  print_r($data['category']); die("Error");
       $this->load->view('templates/header');       
       $this->load->view('products/list',$data);
       $this->load->view('templates/footer');
   }
   public function create()
   {
      $categories=new CategoryModel;
      $data['category']= $categories->get_category();
      $this->load->view('templates/header');
      $this->load->view('products/create',$data);
      $this->load->view('templates/footer');        
   }
   /**
    * Store Data from this method.
    *
    * @return Response
   */
   public function store()
   {
       $products=new ProductsModel;
       $products->insert_product();
       
       redirect(base_url('products'));
    }
   /**
    * Edit Data from this method.
    *
    * @return Response
   */

   public function edit($id)
   {
//echo $id;exit;
   // $categories=new CategoryModel;
    //$data['category']= $categories->get_category();
      // $category = $this->db->get_where('category', array('id' => $id))->row();
        //$product = $this->db->get_where('products', array('id' => $id))->row();
        $data['product']=$this->ProductsModel->get_product($id);
        $data['categories']=$this->CategoryModel->get_category();
        $this->load->view('templates/header');
        $this->load->view('products/edit',$data);
        $this->load->view('templates/footer');   
   }
   /**
    * Update Data from this method.
    *
    * @return Response
   */
   public function update($id)
   {
       $products=new ProductsModel;
       $products->update_product($id);
       redirect(base_url('products'));
   }
   /**
    * Delete Data from this method.
    *
    * @return Response
   */
   public function delete($id)
   {
       $this->db->where('id', $id);
       $this->db->delete('products');
       redirect(base_url('products'));
   }
}