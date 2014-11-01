<?php 
class CustomerCon extends CI_Controller 
{
function __construct()
	{		
		parent::__construct();
	}
	
	function index()
	{
		$this->load->view('test');		
	}
	function add()
	{
		$cusname=$this->input->post('cusname');
		$cuslname = $this->input->post('cuslname');//รับค่าจากหน้าview
		$cusaddress=$this->input->post('cusaddress');
		$custel=$this->input->post('custel');
		$cusqrcodeid=$this->input->post('cusqrcodeid');
		
		var_dump($_POST);
		
		$this->Customer->setCusname($cusname);
		$this->Customer->setCuslname($cuslname);
		$this->Customer->setCusaddress($cusaddress);//ส่งset ไปหน้า Model 
		$this->Customer->setCustel($custel);
		$this->Customer->setCusqrcodeid($cusqrcodeid);
		$id=$this->Customer->add();
		echo "<script>parent.$.fancybox.close();</script>";
	}
	function addView()
	{
		$this->load->view('Customer/CustomerAddView');
	}
	function show()
	{
	$data['listcustomer']=$this->Customer->getAllData();
		$this->load->view('Customer/CustomerShowView',$data);
	}
	function updateData()
	{
		$cusid=$this->input->post('cusid');
		$cusname=$this->input->post('cusname');
		$cuslname = $this->input->post('cuslname');//รับค่าจากหน้าview
		$cusaddress=$this->input->post('cusaddress');
		$custel=$this->input->post('custel');
		$cusqrcodeid=$this->input->post('cusqrcodeid');
		
		var_dump($_POST);
		
		$this->Customer->setCusid($cusid);
		$this->Customer->setCusname($cusname);
		$this->Customer->setCuslname($cuslname);
		$this->Customer->setCusaddress($cusaddress);//ส่งset ไปหน้า Model 
		$this->Customer->setCustel($custel);
		$this->Customer->setCusqrcodeid($cusqrcodeid);
		$id=$this->Customer->updateData();

	}
	function getPKData($cusid)
	{
		$this->Customer->setCusid($cusid);
		$data['listcustomer']=$this->Customer->getKPData();
		$this->load->view('Customer/CustomerEditView',$data);
	}
	function deleteData($cusid)
	{
		$this->Customer->setCusid($cusid);
		
		$this->Customer->deleteData();
		echo 'สำเร็จ' ;
		
	}
	 function showInvoice()
	{
	$textSearch =	 $this->input->post('textSearch');
	$data['listcustomer']=$this->Invoicedetial->searchInvoice($textSearch);
	$this->load->view('Customer/invoiceShow',$data);
	}
	
	function showInvoiceResult()
	{
	$textSearch =	 $this->input->post('textSearch');
	$data['listcustomer']=$this->Invoicedetial->searchInvoice($textSearch);
	$this->load->view('Customer/invoiceShowSearchResult',$data);
	}
	
	function addInvoiceViewCus($cusid){
		$this->Customer->setCusid($cusid);
		$data['listcustomer'] = $this->Customer->getKPData();
		$this->load->view('Customer/invoiceAdd',$data);
	}
	
	function addInvoice()
	{
		$size[0] = 'AA';
		$size[1] = 'A';
		$size[2] =  'B';
		$size[3] =  'C';
		$cusid=$this->input->post('cusid');
		$value[0] = $this->input->post('aa');//รับค่าจากหน้าview
		$value[1] = $this->input->post('a');
		$value[2]= $this->input->post('b');
		$value[3] =$this->input->post('c');
		$memberid=$this->input->post('memberid');
		
		$priceid = $this->Price->getPriceForDay();
		
		$this->Invoice->setInvoicedate(date('Y-m-d'));
		$this->Invoice->setCusid($cusid);
		$this->Invoice->setMemberid($memberid);
		
		$invoiceId = $this->Invoice->addInvoice();
		$billId = $this->Invoice->addBill();
		var_dump($invoiceId);
		for($i=0;$i<4;$i++){
			$this->Invoicedetial->setPriceid($priceid[0]['priceid']);
			$this->Invoicedetial->setSize($size[$i]);
			$this->Invoicedetial->setValue($value[$i]);
			$this->Invoicedetial->setInvoiceid($invoiceId);
			$this->Invoicedetial->addDetial();
			$this->Invoicedetial->setInvoiceid($billId);
			$this->Invoicedetial->addBillDetial();
		}
		
		
		
		var_dump($priceid );
	}
	
	function getAllInvoid(){
		$data = $this->Invoice->getInvoices();

		for($i=0;$i<count($data);$i++){
			$data[$i]['valueResult'] = $data[$i]['value']*27;
			$data[$i]['monneyRateAA'] = $data[$i]['valueResult']*$data[$i]['ratesaa'];
			$data[$i]['monneyRateA'] = $data[$i]['valueResult']*$data[$i]['ratesa'];
			$data[$i]['monneyRateB'] = $data[$i]['valueResult']*$data[$i]['ratesb'];
			$data[$i]['monneyRateC'] = $data[$i]['valueResult']*$data[$i]['ratesc'];
		}
		var_dump($data);
	}
	
}
?>