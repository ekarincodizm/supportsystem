<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class HomeEmp extends CI_Controller {

	function index()
	{
		$this->load->view('loginshow');
	}
}

