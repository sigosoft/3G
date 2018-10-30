<?php

class Product extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Product_model');
		$this->load->model('Brand_model');
         $this->load->library('session');
	}

public function index()
	{
      $data['brands'] = $this->Brand_model->getBrands();
		$this->load->view('create_product',$data);
      //print_r($data);
	}	
public function insert()
 	{



	    $UID=$_POST['UID'];
 		$productname=$_POST['Productname'];
 		$modelno=$_POST['modelno'];
 		$price=$_POST['Price'];
 	    $brand=$_POST['brand'];


        $file1 = $_FILES['image'];
        $tar1 = "upload/";
        $rand1=date('Ymd').mt_rand(1001,9999);
        $tar_file1 = $tar1 . $rand1 . basename($file1['name']);
 		
 		
 	/*   $file = $_FILES['video'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        if(move_uploaded_file($file["tmp_name"], $tar_file) && move_uploaded_file($file1["tmp_name"], $tar_file1))*/
        
        
       $file = $_FILES['video'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        $file_name=$rand . basename($file['name']);
            $configVideo['upload_path'] = 'upload/'; # check path is correct
            $configVideo['max_size'] = '102400';
            $configVideo['allowed_types'] = 'mp4|avi|flv'; # add video extenstion on here
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
           // $video_name = random_string('numeric', 5);
           $configVideo['file_name'] = $file_name;
            $this->load->library('upload', $configVideo);
            $this->upload->initialize($configVideo);
           
        if(move_uploaded_file($file1["tmp_name"], $tar_file1) && $this->upload->do_upload('video'))
        {
            
            $array= [
 		       'UID'=>$UID,
          'product_name'=>$productname,
          'model_no'=>$modelno,
          'brand_id'=>$brand,
          'price'=>$price,
          'video'=>$tar_file,
          'image'=>$tar_file1
        ];

       $query1=$this->Product_model->getuid($array);
       print_r($query1->result());
       if ($query1->num_rows()==0) {  
          $query=$this->Product_model->insertproduct($array);
       		if ($query)
       		{
       			redirect('Product/show');
       		}
      }
      else
      {
      $this->session->set_flashdata('errorr','UID already exists');
     redirect('Product/index');
      }
           // $data['status'] = 'Active';
           //$this->Product_model->insertproduct($data);

           // $this->db->insert('product',$data);
            //redirect('product');
        }
   else{
    $this->session->set_flashdata('error','unsupported file format');
     redirect('Product/index');
    }

  


  
 	}
public function show()
 	{
 		$data['products'] = $this->Product_model->getProducts();
 		//print_r($data);
		$this->load->view('manage_product',$data);
 	}
public function edit($param)
	{
		$data['brands'] =   $this->Brand_model->getBrands();
        $data['products'] = $this->Product_model->getProductsbyid($param);
		$this->load->view('edit_product.php',$data);
		//print_r($data);
	}
public function videoedit($product_id)
	{
		 $data['products'] = $this->Product_model->getProductsbyid($product_id);
		$this->load->view('editvideo.php',$data);
	}

public function update_video($product_id)
{
 	 
    /*    $file = $_FILES['video'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        if(move_uploaded_file($file["tmp_name"], $tar_file))
        {
            
            $array= [
 		   
          'video'=>$tar_file
           ];

      $query=$this->Product_model->updatevideo($array,$product_id);
 		if ($query)
 		{
 			redirect('Product/show');
 		}	 


          }*/
          
          

        $$file = $_FILES['video'];
        $tar = "upload/";
        $rand=date('Ymd').mt_rand(1001,9999);
        $tar_file = $tar . $rand . basename($file['name']);
        $file_name=$rand . basename($file['name']);
            $configVideo['upload_path'] = 'upload/'; # check path is correct
            $configVideo['max_size'] = '102400';
            $configVideo['allowed_types'] = 'mp4|avi|flv'; # add video extenstion on here
            $configVideo['overwrite'] = FALSE;
            $configVideo['remove_spaces'] = TRUE;
           // $video_name = random_string('numeric', 5);
           $configVideo['file_name'] = $file_name;
            $this->load->library('upload', $configVideo);
            $this->upload->initialize($configVideo);
           
        if(move_uploaded_file($file1["tmp_name"], $tar_file1) && $this->upload->do_upload('video'))
        {
            
            $array= [
 		       'UID'=>$UID,
          'product_name'=>$productname,
          'model_no'=>$modelno,
          'brand_id'=>$brand,
          'price'=>$price,
          'video'=>$tar_file,
          'image'=>$tar_file1
        ];

      $query=$this->Product_model->insertproduct($array);
 		if ($query)
 		{
 			redirect('Product/show');
 		}

 
           // $data['status'] = 'Active';
           //$this->Product_model->insertproduct($data);

           // $this->db->insert('product',$data);
            //redirect('product');
        }
   else{
    $this->session->set_flashdata('error','unsupported file format');
       redirect('Product/videoedit/'.$product_id);
    }

  
            
          
    
}

    
public function imageedit($product_id)
  {
     $data['products'] = $this->Product_model->getProductsbyid($product_id);
    $this->load->view('editimage.php',$data);
  }


public function update_image($product_id)
{
   
        $file1 = $_FILES['image'];
        $tar1 = "upload/";
        $rand1=date('Ymd').mt_rand(1001,9999);
        $tar_file1 = $tar1 . $rand1 . basename($file1['name']);
        if(move_uploaded_file($file1["tmp_name"], $tar_file1))
        {
            
            $array= [
       'image'=>$tar_file1
           ];

      $query=$this->Product_model->updateimage($array,$product_id);
    if ($query)
    {
      redirect('Product/show');
    }  


          }
          else
          {
              $this->session->set_flashdata('error','unsupported file format');
               redirect('Product/imageedit/'.$product_id);
          }
    }


public function update($product_id)
	{
		$UID=$this->input->post('UID');
 		$productname=$this->input->post('Productname');
 		$modelno=$this->input->post('modelno');
 		$price=$this->input->post('Price');
 	    $brand=$this->input->post('brand');

 		$array= [
 		   'UID'=>$UID,
          'product_name'=>$productname,
          'model_no'=>$modelno,
          'brand_id'=>$brand,
          'price'=>$price

 		];
         
 		$query=$this->Product_model->updateproduct($array,$product_id);
 		if ($query) 
 		{
 			redirect('Product/show');
 		}

	}
public function delete($product_id)
  {
          
    $query=$this->Product_model->deleteproduct($product_id);
    if ($query)
     {
      redirect('Product/show');
    }
  }



}

?>