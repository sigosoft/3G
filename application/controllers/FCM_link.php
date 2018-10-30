<?php
 
 class FCM_link extends CI_Controller {

 	public function __construct()
 	{
 		parent::__construct();
		$this->load->helper('url');
		$this->load->model('FCMlink_model');
		$this->load->model('FCM_model');

 	}
 	public function link()
 	{

     $link=$this->input->post('link');
     $data['link']=$link;
     $fcm=$this->FCMlink_model->insertfcm($data);
     
     if($fcm)
     {
    $SERVER_API_KEY = "AIzaSyBMm2nJMyeHZAUIraijXzSAjlV1lsdfjuw";
            
            $result =$this->FCM_model->fcm_msg();
            $token = [$result];
    	//	$token =  ['fdnVoaaRfu8:APA91bFI1p4_9tsxaY_ViAsXFJWtxlmp_AvtPxKLPp-bghaAX9MvwvRC7gEb0Ryp4VC2xywQFhbTR_8suDN_saQxSl1wwV-TJvO904VSrpZlgrh9Qdmwur3irdh0YHxiTVeoqdyeFA9I'];
    		$header = [
    			'Authorization: key='. $SERVER_API_KEY,
    			'Content-Type: Application/json'
    		];
    		
    		
    		$result1 =$this->FCMlink_model->fcm_msg1();
    		$msg1=$result1;
    		$msg = [
    			'title' => 'Testing notification',
    			'body' => $msg1,
    			'icon' => '',
    			'image' => '',
    			'message' => ''
    		];
    		$payload = [
    			'registration_ids' => $token,
    			'data' => $msg
    		];
    		$url = 'https://fcm.googleapis.com/fcm/send';
    
    		$curl = curl_init();
    
    		curl_setopt_array($curl, array(
    		  CURLOPT_URL => "https://fcm.googleapis.com/fcm/send",
    		  CURLOPT_RETURNTRANSFER => true,
    		  CURLOPT_CUSTOMREQUEST => "POST",
    		  CURLOPT_POSTFIELDS => json_encode($payload),
    		  CURLOPT_HTTPHEADER => $header,
    		));
    
    		$response = curl_exec($curl);
    		$err = curl_error($curl);
            
            echo $response.'<br>';
            echo $err;
            
    		curl_close($curl); 


        /*    $result =$this->FCM_model->fcm_msg();
            $token = $result;
            	
    		$result1 =$this->FCMlink_model->fcm_msg1();
    		$msg1=$result1;*/

     $return=[
      'message'=>'success',
     
      
     ];
    print_r(json_encode($return));
 	}
 	
}
 
 }
?>