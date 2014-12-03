<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
function __construct()
	{			
		parent::__construct();
		$this->load->library('Ciqrcode');

	}
	function index()
	{
		$a=file_exists('qrcode/sfhyrduf.png');
		var_dump($a);
		
	}

}
?>
