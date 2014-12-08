<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginMobile extends CI_Controller {

 function __construct()
 {
   parent::__construct();

 }

 function index($error='')
 {
	 $data['error']=$error;
   $this->load->helper(array('form'));
   $this->load->view('mobile/employee/login',$data);
 }
}
?>

