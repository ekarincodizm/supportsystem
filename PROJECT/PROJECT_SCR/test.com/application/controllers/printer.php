<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Printer extends CI_Controller {
	function __construct()
	{		
		parent::__construct();
		$this->load->library('mpdf/mpdf');
		
	}
	function index()
	{
		$this->load->view('general/customer/home');
	}
	function Printers(){
		$data=$this->Invoice->getInvoicesPKssss();
		$a = '({"cusname":"'.$data[0]['cusname'].'", "cuslname":"'.$data[0]['cuslname'].'" ,"invoicedate":"'.$data[0]['invoicedate'].'" ,"sizeAA":"'.$data[0]['sizeAA'].'","sizeA":"'.$data[0]['sizeA'].'","sizeB":"'.$data[0]['sizeB'].'","sizeC":"'.$data[0]['sizeC'].'"})';
		echo $_GET['callback'].$a;

	}
}
?>
