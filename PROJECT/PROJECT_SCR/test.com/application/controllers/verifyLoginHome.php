<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class VerifyLoginHome extends CI_Controller 
{

	 function __construct()
	 {
	   parent::__construct();
	   $this->load->model('loginModel','',TRUE);
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
		 $this->load->view('general/employee/login');
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
				 'memberstatus' => $result->memberstatus,
			   );
			   
			   $this->session->set_userdata($sess_array);
			
				if($result->memberstatus == 'Owner')
				{
					 //header( "location: ".base_url()."index.php/SupportSystem" );
					  $this->load->view('general/employee/home');
					  //$this->load->view('home');
				}
				else if($result->memberstatus == 'Employee')
				{
					// header( "location: ".base_url()."index.php/CusControl" );
					 $this->load->view('general/customer/home');
				}
			
				 return TRUE;
		   }
		   else
		   {
		    
			 $this->form_validation->set_message('check_database', 'Invalid username or password');
			 //$this->load->view('general/employee/home');
			$this->load->view('errorview');
			 return false;
		   }
	   }
	}
}
?>
