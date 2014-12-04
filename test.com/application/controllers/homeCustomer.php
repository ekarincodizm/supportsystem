<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HomeCustomer extends CI_Controller {
	function __construct()
	{		
		parent::__construct();
		$this->load->library('mpdf/mpdf');
		$this->load->library('Ciqrcode');
		
	}
	var $hostLocal = "http://naykaitoon.me/kratae";
	function index()
	{
		$this->load->view('general/customer/home');
	}
	////////////////////////เพิ่มข้อมูลลูกค้า//////////////////////////
	function add()
	{
		$cusname=$this->input->post('cusname');//รับค่าcusnameจากหน้าview
		$cuslname = $this->input->post('cuslname');//รับค่าcuslnameจากหน้าview
		$cusaddress=$this->input->post('cusaddress');//รับค่าcusaddressจากหน้าview
		$custel=$this->input->post('custel');//รับค่าcustelจากหน้าview
		$cusqrcodeid=$this->input->post('cusqrcodeid');//รับค่าcusqrcodeidจากหน้าview
			
		$this->Customer->setCusname($cusname);//ส่ง setCusname ไปหน้า Model 
		$this->Customer->setCuslname($cuslname);//ส่ง setCuslname ไปหน้า Model 
		$this->Customer->setCusaddress($cusaddress);//ส่ง setCusaddress ไปหน้า Model 
		$this->Customer->setCustel($custel);//ส่ง setCustel ไปหน้า Model 
		$this->Customer->setCusqrcodeid($cusqrcodeid);//ส่ง setCusqrcodeid ไปหน้า Model 
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
			for($i=0;$i<count($data['listcustomer']);$i++){
				if(file_exists('qrcode/show'.$data['listcustomer'][$i]['cusid'])==FALSE){
					$params['level'] = 'L';
					$params['size'] = 10;
					$params['savename'] = FCPATH.'qrcode/show'.$data['listcustomer'][$i]['cusid'].'.png';
					$params['data'] = $this->hostLocal.'/index.php/homeCustomer/getPK/'.$data['listcustomer'][$i]['cusid'];
					$this->ciqrcode->generate($params);
				}
			}
		$this->load->view('general/customer/CustomerShowViewResult',$data);
	}
	////////////////////////ดึง ข้อมูลลูกค้า โชว์ โดยค้นหาจากชื่อลูกค้า//////////////////////////
	function searchCustomer()
    { 
		$cusname = $this->input->post('textSearch');
		$data['listcustomer']=$this->Customer->search($cusname);
		$this->load->view('general/customer/CustomerShowViewSearch',$data);		
    }
	////////////////////////แก้ไขข้อมูลลูกค้า//////////////////////////
	function updateData()
	{
		$cusid=$this->input->post('cusid');//รับค่าจาcusidกหน้าview
		$cusname=$this->input->post('cusname');//รับค่าcusnameจากหน้าview
		$cuslname = $this->input->post('cuslname');//รับค่าcuslnameจากหน้าview
		$cusaddress=$this->input->post('cusaddress');//รับค่าcusaddressจากหน้าview
		$custel=$this->input->post('custel');//รับค่าcustelจากหน้าview
		$cusqrcodeid=$this->input->post('cusqrcodeid');//รับค่าcusqrcodeidจากหน้าview
		
		$this->Customer->setCusid($cusid);//ส่ง setCusid ไปหน้า Model 
		$this->Customer->setCusname($cusname);//ส่งsetCusname ไปหน้า Model 
		$this->Customer->setCuslname($cuslname);//ส่งsetCuslname ไปหน้า Model 
		$this->Customer->setCusaddress($cusaddress);//ส่งsetCusaddress ไปหน้า Model 
		$this->Customer->setCustel($custel);//ส่งsetCustel ไปหน้า Model 
		$this->Customer->setCusqrcodeid($cusqrcodeid);//ส่งsetCusqrcodeid ไปหน้า Model 
		$this->Customer->updateData();// ส่งข้อมูลไปยัง ModelCustomer ที่ฟังก์ชั่น updateData
         echo 'แก้ไขข้อมูลแล้ว';
	}
	function getPKData($cusid)
	{
		$this->Customer->setCusid($cusid);
		$data['listcustomer']=$this->Customer->getKPData();
		for($i=0;$i<count($data['listcustomer']);$i++){
				if(file_exists('qrcode/getPKData'.$data['listcustomer'][$i]['cusid'])==FALSE){
					$params['level'] = 'L';
					$params['size'] = 10;
					$params['savename'] = FCPATH.'qrcode/getPKData'.$data['listcustomer'][$i]['cusid'].'.png';
					$params['data'] = $this->hostLocal.'/index.php/homeCustomer/getPK/'.$data['listcustomer'][$i]['cusid'];
					$this->ciqrcode->generate($params);
				}
			}
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
					$data['listcustomersum']['cusid']=$data['listcustomer'][0]['cusid'];
						$data['listcustomersum']['cusname']=$data['listcustomer'][0]['cusname'];
						$data['listcustomersum']['invoicedate']=$data['listcustomer'][0]['invoicedate'];
						$data['listcustomersum']['invoiceid']=$data['listcustomer'][0]['invoiceid'];

						$data['listcustomersum']['sizeAA']=$sizeAA;
						$data['listcustomersum']['sizeA']=$sizeA;
						$data['listcustomersum']['sizeB']=$sizeB;
						$data['listcustomersum']['sizeC']=$sizeC;
						$this->load->view('general/customer/invoiceShowSearchDetial',$data);
			}
		else
			{
				echo 'ไม่พบข้อมูล';
			}
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
		var_dump($priceid );
	}
	#############ดึงข้อมูลการรับซื้อมาโชว์##################
	function PurShow()
	{
		$data['listcustomer'] = $this->Customer->getAllPurchase();
		for($i=0;$i<count($data['listcustomer']);$i++){
			if(file_exists('qrcode/'.$data['listcustomer'][$i]['cusid'])==FALSE){
				$params['level'] = 'L';
				$params['size'] = 10;
				$params['savename'] = FCPATH.'qrcode/'.$data['listcustomer'][$i]['cusid'].'.png';
				$params['data'] = $this->hostLocal.'/index.php/homeCustomer/getPK/'.$data['listcustomer'][$i]['cusid'];
				$this->ciqrcode->generate($params);
			}
		}
		$this->load->view('general/customer/ShowPurchase', $data);		
	}
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
				$this->load->view('general/customer/InvoiceAdd', $data);		
			}else{
		echo'กรุณากำหนดราคารายวันก่อน';
		}
	}
	#############ค้นหาข้อมูลการรับซื้อ##################
	function searchPurchase()
    { 
		$cusid = $this->input->post('textSearch');
		$data['listcustomer'] = $this->Customer->search($cusid);
		$this->load->view('general/customer/ShowPurchaseResult', $data);	
    }
	function bill($cusid)
	{
		$this->Invoice->setCusid($cusid);
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
			}
		else
			{
				echo 'ไม่พบข้อมูล';
			}
	}
	
}
?>
