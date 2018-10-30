<?php
 
 class Login extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('Login_model');

 	}
 	public function index()
 	{
 		
       
        

 		$this->load->view('login');
 	}

    

 	public function login()
 	{
 		$username=$_POST['username'];
 		$password=md5($_POST['password']);
		$array= [
          'username'=>$username,
          'password'=>$password

 		];
 		$query=$this->Login_model->login($array);
 		if ($query->num_rows()>0) {
 		    $this->session->set_userdata('user',$array);
 			redirect('Login/show');
 			
 		}
 		else
 		{
 			redirect('Login');
 		}

 		
 	}
 	
 	public function logout()
 	{
 		$this->session->unset_userdata('user');

 		redirect('login');

 	}


 	public function show()
 	{
 		$this->load->view('home');
 	}
 }
?>