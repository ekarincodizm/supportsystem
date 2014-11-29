<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Mobile extends CI_Controller {
function __construct()
{
	parent::__construct();
}
	function index($error = '')
	{
		$data['error']= $error;
		$this->session->unset_userdata('sessionData');
		$this->load->view('CUS/home_mobile_login',$data);
	}
	function home(){
		$this->checkLogining();
		$this->load->view('CUS/home_mobile');
	}
	function logout(){
		$this->session->unset_userdata('sessionData');
		 header( "location: ".base_url()."index.php/Mobile" );
	}
	function checkLogining(){
				if(!$this->session->userdata('sessionData')){
							 header( "location: ".base_url()."index.php/Mobile" );
				}
	}
	 function checkLogin() {
			$username = $this->input->post('user');
			$password = $this->input->post('pass');

		   $this->LoginModel->setUsername($username);
		   $this->LoginModel->setPassword($password);
		   $result = $this->LoginModel->login();

		   if($result)
		   {
				$sess_array['sessionData'] = array(
				 'memberid' => $result->memberid,
				 'memberusername' => $result->memberusername,
				 'membername' => $result->membername,
				 'memberlname' => $result->memberlname,
			   );
			   
				 $this->session->set_userdata($sess_array);
					 header( "location: ".base_url()."index.php/Mobile/home" );

				 return TRUE;
		   }
		   else
		   {
				$data['error']= 'ไม่มีผู้ใช้งานนี้อยู่ในระบบ';
				$this->load->view('CUS/home_mobile_login',$data);
			 return false;   
	   }
	}
}
?>
