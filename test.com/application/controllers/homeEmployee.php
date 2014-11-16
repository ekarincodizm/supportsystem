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
	function show()
	{
	$data['listmember']=$this->Member->getAllData();
		$this->load->view('general/employee/EmployeeShowViewResult',$data);
	}
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
	function getPKData($memberid)
	{
		$this->Member->setMemberid($memberid);
		
		$data['listmember']=$this->Member->getKPData();
		$this->load->view('general/employee/EmployeeEditView',$data);
	}
	function deleteData($memberid)
	{
		$this->Member->setMemberid($memberid);
		$this->Member->deleteData();
		echo 'สำเร็จ' ;	
	}
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

		//echo "<script>parent.$.fancybox.close();</script>";
	}
	function addPriceView()
	{
		$date=$this->Price->getPriceMaxDate();
		if($date[0]['pricedate']<date('Y-m-d')){
		$this->load->view('general/employee/PriceAddView');
		}else{
		echo 'ท่านได้ทำการกำหนดราคาของวันนี้เรียบร้อยแล้วค่ะ';
		}
	}

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
				$data['listmemberNow']=$this->Qucta->getQucta();
				$data['listmember']=$this->Qucta->getBuyweights();

	if($data['listmemberNow']){
					for($i=0;$i<count($data['listmember']);$i++){
							$data['listmember'][$i]['buyweightNow'] = $data['listmemberNow'][$i]['buyweight'];
					}
		}else{

				for($i=0;$i<count($data['listmember']);$i++){
							$data['listmember'][$i]['buyweightNow'] = $data['listmember'][$i]['buyweight'];
							$data['listmember'][$i]['buyweight'] =FALSE;

				}
		}
			
		$this->load->view('general/employee/QuctaShow',$data);
	}
		function showQucta()
	{

		$data['listmemberNow']=$this->Qucta->getBuyweights();
		$data['listmember']=$this->Qucta->getQucta();
		if($data['listmember']){
					for($i=0;$i<count($data['listmember']);$i++){
							$data['listmember'][$i]['buyweightNow'] = $data['listmember'][$i]['buyweight'];
					}
		}else{
			$data['listmember']=$this->Customer->getAllData();
				for($i=0;$i<count($data['listmember']);$i++){
							$data['listmember'][$i]['buyweightNow'] = $data['listmember'][$i]['buyweight'];
							$data['listmember'][$i]['buyweight'] =FALSE;
					}
		}
		$this->load->view('general/employee/QuctaEdit',$data);
	}
	function getBuyweight()
	{
	$data['listmember']=$this->Qucta->getBuyweights();
	$this->load->view('general/employee/QuctaShow',$data);
	}
}
?>
