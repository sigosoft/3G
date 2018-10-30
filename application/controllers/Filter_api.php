<?php
 
 class Filter_api extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Filterapi_model');

 	}
 	public function getbrand()
 	{

     $brand_id=$_POST['brand'];
    

     $product=$this->Filterapi_model->getProductbybrand($brand_id);

     $return=[
      'message'=>'success',
      'products'=>$product
     ];
    print_r(json_encode($return));
 	}

 	public function getProduct()
 	{
 		$from=$_POST['from'];
 		$to=$_POST['to'];
        
 		$products=$this->Filterapi_model->getProductbyprice($from,$to);
 		 $return=[
       'message'=>'success',
       'products'=>$products
     ];
    print_r(json_encode($return));

 	}
 }
?>