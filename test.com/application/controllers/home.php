<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start();
class Home extends CI_Controller {

	function index()
	{
		$this->load->view('home');
	}
}

