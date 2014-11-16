<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HomeCustomer extends CI_Controller {
	function __construct()
	{		
		parent::__construct();
		$this->load->library('mpdf/mpdf');
	}
	function index()
	{
		$this->load->view('general/customer/home');
	}
	////////////////////////เพิ่มข้อมูลลูกค้า//////////////////////////
	function add()
	{
		$cusname=$this->input->post('cusname');
		$cuslname = $this->input->post('cuslname');//รับค่าจากหน้าview
		$cusaddress=$this->input->post('cusaddress');
		$custel=$this->input->post('custel');
		$cusqrcodeid=$this->input->post('cusqrcodeid');
			
		$this->Customer->setCusname($cusname);
		$this->Customer->setCuslname($cuslname);
		$this->Customer->setCusaddress($cusaddress);//ส่งset ไปหน้า Model 
		$this->Customer->setCustel($custel);
		$this->Customer->setCusqrcodeid($cusqrcodeid);
		$this->Customer->add();
		echo 'สำเร็จ' ;
	}
	function addView()
	{
		$this->load->view('general/customer/CustomerAddView');
	}
	////////////////////////ดึง ข้อมูลลูกค้า โชว์//////////////////////////
	function show()
	{
		$data['listcustomer']=$this->Customer->getAllData();
		$this->load->view('general/customer/CustomerShowViewResult',$data);
	}
		function searchCustomer()
    { 
		$cusname = $this->input->post('textSearch');
		$data['listcustomer']=$this->Customer->search($cusname);
		$this->load->view('general/customer/CustomerShowViewSearch',$data);		
    }
	////////////////////////แก้ไขข้อมูลลูกค้า//////////////////////////
	function updateData()
	{
		$cusid=$this->input->post('cusid');
		$cusname=$this->input->post('cusname');
		$cuslname = $this->input->post('cuslname');//รับค่าจากหน้าview
		$cusaddress=$this->input->post('cusaddress');
		$custel=$this->input->post('custel');
		$cusqrcodeid=$this->input->post('cusqrcodeid');
		
		$this->Customer->setCusid($cusid);
		$this->Customer->setCusname($cusname);
		$this->Customer->setCuslname($cuslname);
		$this->Customer->setCusaddress($cusaddress);//ส่งset ไปหน้า Model 
		$this->Customer->setCustel($custel);
		$this->Customer->setCusqrcodeid($cusqrcodeid);
		$this->Customer->updateData();
         echo 'แก้ไขข้อมูลแล้ว';
	}
	function getPKData($cusid)
	{
		$this->Customer->setCusid($cusid);
		$data['listcustomer']=$this->Customer->getKPData();
		$this->load->view('general/customer/CustomerEditView',$data);
	}
	////////////////////////ลบข้อมูลลูกค้า//////////////////////////
	function deleteData($cusid)
	{
		$this->Customer->setCusid($cusid);
		
		$this->Customer->deleteData();
		echo 'สำเร็จ' ;
	}
	////////////////////////แสดงข้อมูลใบส่งของ//////////////////////////
	 function showInvoice()
	{
	$data['listcustomer']=$this->Invoice->getInvoices();
	$this->load->view('general/customer/invoiceShow',$data);
	}
	function showInvoiceResult()
	{
	$textSearch =	 $this->input->post('textSearch');
	$this->Invoice->setTextSearch($textSearch);
	$data['listcustomer']=$this->Invoice->getInvoicesSearch();
if($data['listcustomer'])
	{

	$sizeAA=0;
	$sizeA=0;
	$sizeB=0;
	$sizeC=0;

		for($i=0;$i<count($data['listcustomer']);$i++)
			{
				$sizeAA=$sizeAA+$data['listcustomer'][$i]['sizeAA'];
				$sizeA=$sizeA+$data['listcustomer'][$i]['sizeA'];
				$sizeB=$sizeB+$data['listcustomer'][$i]['sizeB'];
				$sizeC=$sizeC+$data['listcustomer'][$i]['sizeC'];
		
			}
			$data['listcustomersum']['cusname']=$data['listcustomer'][0]['cusname'];
			$data['listcustomersum']['invoicedate']=$data['listcustomer'][0]['invoicedate'];
			$data['listcustomersum']['invoiceid']=$data['listcustomer'][0]['invoiceid'];

				$data['listcustomersum']['sizeAA']=$sizeAA;
				$data['listcustomersum']['sizeA']=$sizeA;
				$data['listcustomersum']['sizeB']=$sizeB;
				$data['listcustomersum']['sizeC']=$sizeC;
				$this->load->view('general/customer/invoiceShowSearchDetial',$data);
	}else
	{
		echo 'ไม่พบข้อมูล';
	}
	//var_dump ($data);
		//die ();
	
	}
////////////////////////เพิ่มข้อมูลการรับซื้อ//////////////////////////	
	function addInvoiceViewCus($cusid)
		{
		$this->Customer->setCusid($cusid);
		$data['listcustomer'] = $this->Customer->getKPData();
		$this->load->view('general/customer/invoiceAdd',$data);
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

		$priceid = $this->Price->findPiceToDay();//เรียกใช้ฟังก์ชั่น

		var_dump($priceid);

		$this->Invoice->setInvoicedate(date('Y-m-d'));
		$this->Invoice->setCusid($cusid);
		$this->Invoice->setMemberid($memberid);
		
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
		var_dump($priceid );
	}
	#############ดึงข้อมูลการรับซื้อมาโชว์##################
	function PurShow()
	{
		$data['listcustomer'] = $this->Customer->getAllPurchase();
		$this->load->view('general/customer/ShowPurchase', $data);		
	}
	function getPk($cusid)
	{
		$result=$this->Price->findPiceToDay();
		if($result)
			{
				$this->Customer->setCusid($cusid);
				$data['priceid']=$result[0]['priceid'];
				$data['listcustomer'] =$this->Customer->getPurchase() ;
				$this->load->view('general/customer/InvoiceAdd', $data);		
			}else{
		echo'ไม่มีข้อมูล';
		}
	}
	#############ค้นหาข้อมูลการรับซื้อ##################
	function searchPurchase()
    { 
		$cusid = $this->input->post('textSearch');
		$data['listcustomer'] = $this->Customer->search($cusid);
		$this->load->view('general/customer/ShowPurchaseResult', $data);	
    }
	function bill($invoiceid)
		{
	$this->Invoice->setInvoiceid($invoiceid);
	$data['listcustomer']=$this->Invoice->getInvoicesPK();

if($data['listcustomer'])
	{

	$sizeAA=0;
	$sizeA=0;
	$sizeB=0;
	$sizeC=0;
	$sumAA=0;
	$sumA=0;
	$sumB=0;
	$sumC=0;

		for($i=0;$i<count($data['listcustomer']);$i++)
			{
				$sizeAA=$sizeAA+$data['listcustomer'][$i]['sizeAA'];
				$sizeA=$sizeA+$data['listcustomer'][$i]['sizeA'];
				$sizeB=$sizeB+$data['listcustomer'][$i]['sizeB'];
				$sizeC=$sizeC+$data['listcustomer'][$i]['sizeC'];
			}
			$data['listcustomersum']['cusname']=$data['listcustomer'][0]['cusname'];
			$data['listcustomersum']['invoicedate']=$data['listcustomer'][0]['invoicedate'];
			$data['listcustomersum']['invoiceid']=$data['listcustomer'][0]['invoiceid'];
			$data['listcustomersum']['ratesaa']=$data['listcustomer'][0]['ratesaa'];
			$data['listcustomersum']['ratesa']=$data['listcustomer'][0]['ratesa'];
			$data['listcustomersum']['ratesb']=$data['listcustomer'][0]['ratesb'];
			$data['listcustomersum']['ratesc']=$data['listcustomer'][0]['ratesc'];

				$data['listcustomersum']['sizeAA']=$sizeAA;
				$data['listcustomersum']['sizeA']=$sizeA;
				$data['listcustomersum']['sizeB']=$sizeB;
				$data['listcustomersum']['sizeC']=$sizeC;

				$html = $this->load->view('general/customer/ShowBill',$data,TRUE);
		$mpdf=new mPDF('th','A4',0,'',10,10,20,10,10,'');
		$mpdf->setHTMLHeader($header);
        $file = $mpdf->WriteHTML($html); // สั่งให้ mPDF เขียนไฟล์ pdf
        $mpdf->Output();
	}else
	{
		echo 'ไม่พบข้อมูล';
	}


	}
}
?>
