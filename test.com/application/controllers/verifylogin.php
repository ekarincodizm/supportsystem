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
		
	   //This method will have the credentials validation
	   $this->load->library('form_validation');

	   $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');

	   if($this->form_validation->run() == FALSE)
	   {
		 //Field validation failed.&nbsp; User redirected to login page
		 //echo ('434343');
		 $this->load->view('loginshow');
	   }
	   else
	   {
			 //Go to private area
			$username = $this->input->post('username');
			$password = $this->input->post('password');

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
		   else
		   {
		    
			 $this->form_validation->set_message('check_database', 'Invalid username or password');
			 	 
			 $this->load->view('errorview');

			 return false;
		   }
	   }
	}
}
?>
