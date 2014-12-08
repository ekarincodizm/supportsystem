<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class MobileCustomer extends CI_Controller {
function __construct()
	{		
		parent::__construct();
	}
	function index()
	{
		$data['listcustomer'] =$this->Customer->getPurchase() ;
		$this->load->view('mobile/customer/mobileShowPurchase',$data);
	}
	/*function addInvoiceViewCus()
		{
		$cusname = $this->input->post('cusname');
		$data['listcustomer'] = $this->Customer->searchwhere($cusname);
		if($data['listcustomer']){
			$data['qucta']=$this->Qucta->getQuctaBycus();
			$cusid = $data['listcustomer'][0]['cusid'];
			$result=$this->Price->findPiceToDay();

				if($result&&$data){
						$this->Customer->setCusid($cusid);
						$data['priceid']=$result[0]['priceid'];
						$data['listcustomer'] =$this->Customer->getPurchase() ;
						$this->load->view('mobile/customer/invoiceAdd', $data);		
					}else{
						echo '<script>alert("กรุณากำหนดราคารายวันก่อน");</script>';
					$this->index();
					}
				}else{
					echo '<script>alert("ไม่พบข้อมูล");</script>';
					$this->index();
				}
		}*/
		function getPk($cusid)
	{	
		$this->Qucta->setCusid($cusid);
		$data['qucta']=$this->Qucta->getQuctaBycus();
	
		$result=$this->Price->findPiceToDay();
		if($result&&$data['qucta'])
			{
				$this->Customer->setCusid($cusid);
				$data['priceid']=$result[0]['priceid'];
				$data['listcustomer'] =$this->Customer->getPurchase() ;
				$this->load->view('mobile/customer/invoiceAdd', $data);		
			}else{
		echo'กรุณากำหนดราคารายวันก่อน';
		}
	}
	function addInvoice()
	{
		$cusid=$this->input->post('cusid');
		$value[0] = $this->input->post('aa');//รับค่าจากหน้าview
		$value[1] = $this->input->post('a');
		$value[2]= $this->input->post('b');
		$value[3] =$this->input->post('c');
		$priceid =$this->input->post('priceid');
		$memberid=$this->input->post('memberid');
		$quctaid=$this->input->post('quctaid');

		$priceid = $this->Price->findPiceToDay();//เรียกใช้ฟังก์ชั่น

		//var_dump($priceid);

		$this->Invoice->setInvoicedate(date('Y-m-d'));
		$this->Invoice->setCusid($cusid);
		$this->Invoice->setMemberid($memberid);
		$this->Invoice->setQuctaid($quctaid);
		
		$invoiceId = $this->Invoice->addInvoice();
		$billId = $this->Invoice->addBill();
	//	var_dump($invoiceId);
		$this->Invoicedetial->setPriceid($priceid[0]['priceid']);
		$this->Invoicedetial->setSizeAA($value[0]);
		$this->Invoicedetial->setSizeA($value[1]);
		$this->Invoicedetial->setSizeB($value[2]);
		$this->Invoicedetial->setSizeC($value[3]);
		$this->Invoicedetial->setInvoiceid($invoiceId);
		$this->Invoicedetial->addDetial();
		$this->Invoicedetial->setInvoiceid($billId);
		$this->PurShow();
	}
	#############ดึงข้อมูลการรับซื้อมาโชว์##################
	function PurShow()
	{
		$data['listcustomer'] = $this->Customer->getAllPurchase();
		$this->load->view('mobile/customer/mobileShowPurchase', $data);		
	}
	#############ค้นหาข้อมูลการรับซื้อ##################
	function searchPurchase()
    { 
		$cusid = $this->input->post('textSearch');
		$data['listcustomer'] = $this->Customer->search($cusid);
		$this->load->view('mobile/customer/mobileShowPurchaseResult', $data);	
    }
}
?>
