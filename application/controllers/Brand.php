<?php
 
 class Brand extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Brand_model');

 	}
 	public function index()
 	{
 		$this->load->view('create_brand');
 	}

  public function insert()
 	{
 		$brandname=$_POST['brandname'];
 		
 		$array= [
          'brand_name'=>$brandname
 		];
 		$query=$this->Brand_model->insertbrand($array);
 		if ($query) {
 			redirect('Brand/show');
 		}
 	}

 	public function show()
 	{
 		$data['brands'] = $this->Brand_model->getBrands1();
		$this->load->view('manage_brand',$data);
 	}
 	public function edit($param)
	{
        $data['brands'] = $this->Brand_model->getBrandsbyid($param);
		$this->load->view('edit_brand.php',$data);
	}
	public function update ($brand_id)
	{
		$brandname=$this->input->post('brandname');
 		$status=$this->input->post('status');
 		$array= [
          'brand_name'=>$brandname,
          'status'=>$status
 		];
         //echo $brand_id;
 		 //print_r($array);
 		$query=$this->Brand_model->updatebrand($array,$brand_id);
 		if ($query) {
 			redirect('Brand/show');
 		}

	}

/*	public function delete($brand_id)
	{
   
 		
 		
         
 		$query=$this->Brand_model->deletebrand($brand_id);
 		if ($query) {
 			redirect('Brand/show');
 		}
	}*/
 }
?>