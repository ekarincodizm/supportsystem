<?php 
class MemberCon extends CI_Controller 
{
function __construct()
	{		
		parent::__construct();
	}
	
	function index()
	{
		$this->load->view('Employee/home');		
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
		$this->load->view('Employee/EmployeeAddView');
	}
	function show()
	{
	$data['listmember']=$this->Member->getAllData();
		$this->load->view('Employee/EmployeeShowView',$data);
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
	function getPKData($memberid)
	{
		$this->Member->setMemberid($memberid);
		
		$data['listmember']=$this->Member->getKPData();
		$this->load->view('Employee/EmployeeEditView',$data);
	}
	function deleteData($memberid)
	{
		$this->Member->setMemberid($memberid);
		$this->Member->deleteData();
		echo 'สำเร็จ' ;	
	}
	#############ค้นหาข้อมูล##################
	function searchMember()
    { 
		$membername = $this->input->post('textSearch');
		$data['listmember']=$this->Member->search($membername);
		$this->load->view('Employee/EmployeeShowViewResult',$data);		
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
		$idpice=$this->Price->addPrice();
		echo "<script>parent.$.fancybox.close();</script>";
	}
	function addPriceView()
	{
		$this->load->view('Employee/PriceAddView');
	}
}
?>