<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLoginMobile extends CI_Controller 
{

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('LoginModel','',TRUE);
	 }

	 function index()
	 {
		
			 //Go to private area
			$username = $this->input->post('username');
			$password = $this->input->post('password');
	//
		   //query the database
		   $result = $this->LoginModel->login($username, $password);

		   if($result)
		   {
				$sess_array = array(
				 'memberid' => $result->memberid,
				 'memberusername' => $result->memberusername,
				 'memberstatus' => $result->memberstatus,
			   );
			   
			   $this->session->set_userdata($sess_array);
			
				if($result->memberstatus == 'Employee')
				{
					 header( "location: ".base_url()."index.php/mobileCustomer/PurShow" );
					
				}
				else if($result->memberstatus == 'Owner')
				{
					// header( "location: ".base_url()."index.php/mobileCustomer/addInvoice" );
					echo('ไม่สามารถ Login ได้ กรุณาตรวจสอบสถานะ');
				}
			
				 return TRUE;
		   }else{
		  echo('ไม่สามารถ Login ได้ กรุณาตรวจสอบสถานะ');}
	}
}
?>
