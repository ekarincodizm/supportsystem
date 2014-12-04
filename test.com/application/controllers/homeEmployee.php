<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class HomeEmployee extends CI_Controller {
	function __construct()
	{		
		parent::__construct();
	}
	function index()
	{
		$this->load->view('general/employee/home');
	}
	#############เพิ่มข้อมูล##################
	function add()
	{	
		$membername = $this->input->post('membername');
		$memberlname = $this->input->post('memberlname');
		$membersex = $this->input->post('membersex');
		$memberaddress = $this->input->post('memberaddress');
		$membertel = $this->input->post('membertel');
		$memberusername = $this->input->post('memberusername');
		$memberpassword = $this->input->post('memberpassword');

		$this->Member->setMembername($membername);
		$this->Member->setMemberlname($memberlname);
		$this->Member->setMembersex($membersex);
		$this->Member->setMemberaddress($memberaddress);
		$this->Member->setMembertel($membertel);
		$this->Member->setMemberusername($memberusername);
		$this->Member->setMemberpassword($memberpassword);
		$id=$this->Member->add();
		echo "เพิ่มข้อมูลสำเร็จ";
	}
	function addView()
	{
		$this->load->view('general/employee/EmployeeAddView');
	}
	#############โชว์ข้อมุล##################
	function show()
	{
	$data['listmember']=$this->Member->getAllData();
		$this->load->view('general/employee/EmployeeShowViewResult',$data);
	}
	#############แก้ไขข้อมูล##################
	function updateData()
	{
		$memberid = $this->input->post('memberid');
		$membername = $this->input->post('membername');
		$memberlname = $this->input->post('memberlname');
		$membersex = $this->input->post('membersex');
		$memberaddress = $this->input->post('memberaddress');
		$membertel = $this->input->post('membertel');
		$memberusername = $this->input->post('memberusername');
		$memberpassword = $this->input->post('memberpassword');

		$this->Member->setMemberid($memberid);
		$this->Member->setMembername($membername);
		$this->Member->setMemberlname($memberlname);
		$this->Member->setMembersex($membersex);
		$this->Member->setMemberaddress($memberaddress);
		$this->Member->setMembertel($membertel);
		$this->Member->setMemberusername($memberusername);
		$this->Member->setMemberpassword($memberpassword);
		$id=$this->Member->updateData();

	}
	#############ค้นหาข้อมูล##################
	function searchMember()
    { 
		$membername = $this->input->post('textSearch');
		$data['listmember']=$this->Member->search($membername);
		$this->load->view('general/employee/EmployeeShowView',$data);		
    }
	#############ดึงข้อมูลมาโชว์##################
	function getPKData($memberid)
	{
		$this->Member->setMemberid($memberid);
		
		$data['listmember']=$this->Member->getKPData();
		$this->load->view('general/employee/EmployeeEditView',$data);
	}
	#############ลบข้อมูล##################
	function deleteData($memberid)
	{
		$this->Member->setMemberid($memberid);
		$this->Member->deleteData();
		echo 'สำเร็จ' ;	
	}
	#############เพิ่มราคารายวัน##################
	function addPrice()
	{
		$ratesaa = $this->input->post('ratesaa');
		$ratesa = $this->input->post('ratesa');
		$ratesb = $this->input->post('ratesb');
		$ratesc = $this->input->post('ratesc');

		$this->Price->setRatesaa($ratesaa);
		$this->Price->setRatesa($ratesa);
		$this->Price->setRatesb($ratesb);
		$this->Price->setRatesc($ratesc);
		$id=$this->Price->addPice();
		echo'เพิ่มราคาเรียบร้อยแล้ว';

		//echo "<script>parent.$.fancybox.close();
	}
    
	function addPriceView()
	{
		$date=$this->Price->getPriceMaxDate();
			if($date[0]['pricedate']<date('Y-m-d'))
				{
					$this->load->view('general/employee/PriceAddView');
				}
			else
				{
					echo 'ท่านได้ทำการกำหนดราคาของวันนี้เรียบร้อยแล้วค่ะ';
				}
	}
	/////////////////แสดงข้อมูลโควต้า////////////////////
	function showQucta()
		{
		
		 	$data['yesterday']=$this->Qucta->getQuctayesterday();//ให้ yesterday เท่ากับการเรียกใช้ฟังก์ชั่น getQuctayesterday ใน model Qucta
		  	$data['now']=$this->Qucta->getQuctaNow();//ให้ now เท่ากับการเรียกใช้ฟังก์ชั่น getQuctaNow ใน model Qucta
		  	$data['all']=$this->Qucta->getQuctaAll();//ให้ all เท่ากับการเรียกใช้ฟังก์ชั่น getQuctaAll ใน model Qucta
		   	$data['cus']=$this->Qucta->getAllDataCustomerQucta();//ให้ cus เท่ากับการเรียกใช้ฟังก์ชั่น getAllDataCustomerQucta ใน model Qucta
			$data['buy']=$this->Qucta->getBuyweights();
			$data['invoid']=$this->Qucta->getInvoidByQuta();//ให้ invoid เท่ากับการเรียกใช้ฟังก์ชั่น getInvoidByQuta ใน model Qucta
			if(count($data['now'])==0)//ถ้า วันที่ปัจจุบันยังไม่มีข้อมูล
				{
					$this->load->view('general/employee/QuctaEdit',$data);//ให้แสดงหน้าQuctaEdit
						 //var_dump($data);
				}
			else if(count($data['now'])>0)//ถ้า วันที่ปัจจุบันยังมีข้อมูล
				{
					$this->load->view('general/employee/QuctaShowEdit',$data);//ให้แสดงหน้า QuctaShowEdit
				}
			else //ถ้าไม่มีทั้งสองฟังก์ชั่น
				{
					$this->load->view('general/employee/QuctaEdit',$data);//ให้แสดงหน้า QuctaEdit
				}
		}
	/////////////////เพิ่มข้อมูลโควต้า////////////////////
	function addQucta()
	{
		$sumwagesave = $this->input->post('sumwagesave');
		$cusid = $this->input->post('cusid');
		$cuswage = $this->input->post('cuswage');

		$this->Sumweight->setQuctaweight($sumwagesave);
		$id=$this->Sumweight->addSumweight();
		
		for($i=0;$i<count($cusid);$i++)
			{
					$this->Qucta->setSumweightid($id);
					$this->Qucta->setBuyweight($cuswage[$i]);
					$this->Qucta->setCusid($cusid[$i]);
					$this->Qucta->addQucta();
			}
		 	$data['yesterday']=$this->Qucta->getQuctayesterday();//ให้ yesterday เท่ากับการเรียกใช้ฟังก์ชั่น getQuctayesterday ใน model Qucta
		  	$data['now']=$this->Qucta->getQuctaNow();//ให้ now เท่ากับการเรียกใช้ฟังก์ชั่น getQuctaNow ใน model Qucta
		  	$data['all']=$this->Qucta->getQuctaAll();//ให้ all เท่ากับการเรียกใช้ฟังก์ชั่น getQuctaAll ใน model Qucta
		   	$data['cus']=$this->Qucta->getAllDataCustomerQucta();//ให้ cus เท่ากับการเรียกใช้ฟังก์ชั่น getAllDataCustomerQucta ใน model Qucta
			$data['buy']=$this->Qucta->getBuyweights();
			$data['invoid']=$this->Qucta->getInvoidByQuta();//ให้ invoid เท่ากับการเรียกใช้ฟังก์ชั่น getInvoidByQuta ใน model Qucta
		$this->load->view('general/employee/QuctaShow',$data);
	}
	function updateQucta()
	{
		$sumwageId = $this->input->post('id');
		$sumwagesave = $this->input->post('sumwagesave');
		$cusid = $this->input->post('cusid');

		$quctaid = $this->input->post('quctaid');
		$cuswage = $this->input->post('cuswage');

		$this->Sumweight->setSumweightid($sumwageId);
		$this->Sumweight->setQuctaweight($sumwagesave);
		$this->Sumweight->updateSumweight();
		
		for($i=0;$i<count($cusid);$i++)
			{
				$this->Qucta->setQuctaid($quctaid[$i]);
				$this->Qucta->setSumweightid($sumwageId);
				$this->Qucta->setBuyweight($cuswage[$i]);
				$this->Qucta->setCusid($cusid[$i]);
				$this->Qucta->updateQucta();
			}
		$data['yesterday']=$this->Qucta->getQuctayesterday();
		$data['now']=$this->Qucta->getQuctaNow();
		$data['all']=$this->Qucta->getQuctaAll();
		$data['cus']=$this->Qucta->getAllDataCustomerQucta();
		$data['invoid']=$this->Qucta->getInvoidByQuta();			
		$this->load->view('general/employee/QuctaShow',$data);
	}
	function showSelectreportInvoice()
	{
		$this->load->view('general/employee/selectDate');
	}
	function reportInvoice()
	{
		$date = $this->input->post('date');
		$day = $this->input->post('day');
		  for($i=-1;$i!=$day;$day--)
		  {
			$realDate = date('Y-m-d', strtotime("-".$day." day", strtotime($date)));
			$this->Invoice->setInvoicedate($realDate);

			$data['invoice'][$day] = $this->Invoice->reportInvoice($day);
		
		  }	

		$this->load->view('general/employee/Conclude',$data);
	}
	function a()
	{
		echo date ('Y-m-d', strtotime("-1 day"));
	}
	////////////////กราฟจำนวนน้ำหนักรายวัน//////////////////
	function incomeDay()
	{	
		$date = date('Y-m-d');
		$this->Invoice->setInvoicedate($date);
		$invoicedata = $this->Invoice->forumInvoice()->result_array();

		$aa=0;
		$a=0;
		$b=0;
		$c=0;
		foreach($invoicedata as $row)
		{
			$aa=$aa+$row['sizeAA']*27;
			$a=$a+$row['sizeA']*27;
			$b=$b+$row['sizeB']*27;
			$c=$c+$row['sizeC']*27;
		}
		$sum = $aa+$a+$b+$c;
		
		$data['size']= 'AA A B C รวม';
		$data['sum']=$aa.' '.$a.' '.$b.' '.$c.' '.$sum;
		$data['title']='กราฟแสดงจำนวนน้ำหนักแต่ละขนาดและรวมต่อวัน';
		
		$this->load->view('general/employee/forum',$data);
		
	}
	////////////////กราฟจำนวนเงินรายวัน//////////////////
	function incomeDayMoney()
	{	
		$date = date('Y-m-d');
		//$date = '2014-11-27';
		$this->Invoice->setInvoicedate($date);
		$invoicedata = $this->Invoice->forumInvoice()->result_array();

		$aa=0;
		$a=0;
		$b=0;
		$c=0;
		foreach($invoicedata as $row)
		{
			$aa=$aa+$row['sizeAA']*$row['ratesaa']*27;
			$a=$a+$row['sizeA']*$row['ratesa']*27;
			$b=$b+$row['sizeB']*$row['ratesb']*27;
			$c=$c+$row['sizeC']*$row['ratesc']*27;
		}
		$sum = $aa+$a+$b+$c;
		
		$data['size']= 'AA A B C รวม';
		$data['sum']=$aa.' '.$a.' '.$b.' '.$c.' '.$sum;
		$data['title']='กราฟแสดงจำนวนเงินแต่ละขนาดและรวมต่อวัน';
		
		$this->load->view('general/employee/forum',$data);
		
	}
	////////////////กราฟจำนวนน้ำหนักรวมทั้งหมด//////////////////
	function incomeWeightAll()
	{	
		$date = date('Y-m-d');
		//$date = '2014-11-27';
		$this->Invoice->setInvoicedate($date);
		$invoicedata = $this->Invoice->forumInvoiceSum()->result_array();

		$aa=0;
		$a=0;
		$b=0;
		$c=0;
		foreach($invoicedata as $row)
		{
			$aa=$aa+$row['sizeAA']*27;
			$a=$a+$row['sizeA']*27;
			$b=$b+$row['sizeB']*27;
			$c=$c+$row['sizeC']*27;
		}
		$sum = $aa+$a+$b+$c;
		
		$data['size']= 'AA A B C รวม';
		$data['sum']=$aa.' '.$a.' '.$b.' '.$c.' '.$sum;
		$data['title']='กราฟแสดงน้ำหนักรวมแต่ละขนาดและทั้งหมด';
		
		$this->load->view('general/employee/forum',$data);
		
	}
	////////////////กราฟจำนวนเงินรวมทั้งหมด//////////////////
	function incomeMoneyAll()
	{	
		$date = date('Y-m-d');
		//$date = '2014-11-27';
		$this->Invoice->setInvoicedate($date);
		$invoicedata = $this->Invoice->forumInvoiceSum()->result_array();

		$aa=0;
		$a=0;
		$b=0;
		$c=0;
		foreach($invoicedata as $row)
		{
			$aa=$aa+$row['sizeAA']*$row['ratesaa']*27;
			$a=$a+$row['sizeA']*$row['ratesa']*27;
			$b=$b+$row['sizeB']*$row['ratesb']*27;
			$c=$c+$row['sizeC']*$row['ratesc']*27;
		}
		$sum = $aa+$a+$b+$c;
		
		$data['size']= 'AA A B C รวม';
		$data['sum']=$aa.' '.$a.' '.$b.' '.$c.' '.$sum;
		$data['title']='กราฟแสดงจำนวนเงินรวมแต่ละขนาดและและทั้งหมด';
		
		$this->load->view('general/employee/forum',$data);
		
		
	}
	
	#############ดึงข้อมูลการรับซื้อมาโชว์##################
	function QuctaForum()
	{
		$data['listcustomer'] = $this->Customer->getAllPurchase();
		$this->load->view('general/employee/ShowQuctaForum', $data);		
	}
	function getPk($cusid)
	{	
		$this->Qucta->setCusid($cusid);
		$data['qucta']=$this->Qucta->getQuctaBycus();
	
		/*$result=$this->Price->findPiceToDay();
		if($result&&$data['qucta'])
			{
				$this->Customer->setCusid($cusid);
				$data['priceid']=$result[0]['priceid'];
				$data['listcustomer'] =$this->Customer->getPurchase() ;
				$this->load->view('general/customer/InvoiceAdd', $data);		
			}else{
		echo'กรุณากำหนดราคารายวันก่อน';
		}*/
	}
	#############ค้นหาข้อมูลการรับซื้อ##################
	function searchQuctaForum()
    { 
		$cusid = $this->input->post('textSearch');
		$data['listcustomer'] = $this->Customer->search($cusid);
		$this->load->view('general/employee/ShowQuctaForumResult', $data);	
    }
	////////////////กราฟแสดงสถิติการส่งลำไยตามโควต้าที่กำหนด//////////////////
	function forumQucta($cusid)
	{	
		$date = date('Y-m-d');
		for($i=0;$i<15;$i++)
		{
			$this->Sumweight->setSumweightdate(date('Y-m-d',strtotime(-$i.'day',strtotime($date))));
			$arrdata = $this->Sumweight->forumQucta($cusid)->result_array();
			
			foreach($arrdata as $row)
			{
				$cusid = $row['cusid'];
				$cusname= $row['cusname'];
				$cuslname = $row['cuslname'];
				$buyweight[]= $row['buyweight']+0;
				$sumweightdate[] = $row['sumweightdate'];
				$weigthAll[]=$row['sizeAA']+$row['sizeA']+$row['sizeB']+$row['sizeC'];
			}
			$arrdate[] = date('Y-m-d',strtotime(-$i.'day',strtotime($date)));
			
		}

		$strweigthAll=implode(',',$weigthAll);
		$strbuyweight=implode(',',$buyweight);
		$strsumweightdate=implode(',',$arrdate);
		
		$data['strcusid']=$cusid;
		$data['title']=$cusname.' '.$cuslname;
		$data['strweigthAll']=$strweigthAll;
		$data['strbuyweight']=$strbuyweight;
		$data['strsumweightdate']=$strsumweightdate;
		$this->load->view('general/employee/ForumQucta',$data);
	
	}
}
?>
