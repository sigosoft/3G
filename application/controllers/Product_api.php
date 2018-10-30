<?php
 
 class Product_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Productapi_model');

 	}
 	public function getproduct()
 	{
     $products=$this->Productapi_model->getProduct();
     $min = $this->Productapi_model->getProductLowest();
     $max = $this->Productapi_model->getProductHighest();
     $return=[
      'message'=>'success',
      'products'=>$products,
      'min' => $min,
      'max' => $max
     ];
    print_r(json_encode($return));
 	}
 }
?>