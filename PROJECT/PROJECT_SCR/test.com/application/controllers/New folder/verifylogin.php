<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLogin extends CI_Controller 
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
	var_dump($_POST);
		   //query the database
		   $result = $this->LoginModel->login($username, $password);

		   if($result)
		   {
				$sess_array = array(
				 'memberid' => $result->memberid,
				 'memberusername' => $result->memberusername,
				 'membername' => $result->membername,
				 'memberlname' => $result->memberlname,
			   );
			   
			   $this->session->set_userdata($sess_array);
			
				if($result->memberstatus == 'Owner')
				{
					 header( "location: ".base_url()."index.php/SupportSystem" );
				}
				else if($result->memberstatus == 'Employee')
				{
					 header( "location: ".base_url()."index.php/CusControl" );
				}
			
				 return TRUE;
		   }
		  
	}
}
?>
