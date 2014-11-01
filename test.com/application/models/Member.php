<?php
/*
#########################
Model: EmpModel
ผู้พัฒนา: วิภารตัน์  ชัยยวง
พัฒนาเมื่อ: 2014-10-23 
ภายในประกอบด้วย
========
	- titleid;
	- memberid;
	- membername;
	- memberlname;
	- membersex; 
	- memberaddress; 
	- membertel; 
	- memberusername; 
	- memberpassword; 
	- memberstatus
#########################
*/
class Member extends CI_Model
{
	var $titleid;
	var $memberid;
	var $membername;
	var $memberlname;
	var $membersex; 
	var $memberaddress; 
	var $membertel; 
	var $memberusername; 
	var $memberpassword; 
	var $memberstatus;
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
###### SET : titleid (อักษรย่อ) ######
	function setTitleid($titleid)
	{
		$this->titleid = $titleid;
	}

	###### GET : titleid (อักษรย่อ) ######
	function getTitleid()
	{
		return $this->titleid;
	}
	###### SET : memberid (รหัส) ######
	function setMemberid($memberid)
	{
		$this->memberid = $memberid;
	}

	###### GET : memberid (รหัส) ######
	function getMemberid()
	{
		return $this->memberid;
	}
		###### SET : membername (ชื่อสมาชิก) ######
	function setMembername($membername)
	{
		$this->membername = $membername;
	}

	###### GET : membername (ชื่อสมาชิก) ######
	function getMembername()
	{
		return $this->membername;
	}
	###### SET : memberlname (นามสกุลสมาชิก) ######
	function setMemberlname($memberlname)
	{
		$this->memberlname = $memberlname;
	}

	###### GET : memberlname (นามสกุลสมาชิก) ######
	function getMemberlname()
	{
		return $this->memberlname;
	}
##### SET : memberaddress (ที่อยู่สมาชิก) ######
	function setMemberaddress($memberaddress)
	{
		$this->memberaddress = $memberaddress;
	}

	###### GET : memberaddress (ที่อยู่สมาชิก) ######
	function getMemberaddress()
	{
		return $this->memberaddress;
	}
	###### SET : membersex (เพศ) ######
	function setMembersex($membersex)
	{
		$this->membersex = $membersex;
	}

	###### GET : membersex (เพศ) ######
	function getMembersex()
	{
		return $this->membersex;
	}
		###### SET : membertel (เบอร์โทร) ######
	function setMembertel($membertel)
	{
		$this->membertel = $membertel;
	}

	###### GET : membertel (เบอร์โทร) ######
	function getMembertel()
	{
		return $this->membertel;
	}
	###### SET : memberusername (Username) ######
	function setMemberusername($memberusername)
	{
		$this->memberusername = $memberusername;
	}

	###### GET : memberusername (Username) ######
	function getMemberusername()
	{
		return $this->memberusername;
	}
	###### SET : memberpassword (Password) ######
	function setMemberpassword($memberpassword)
	{
		$this->memberpassword = $memberpassword;
	}

	###### GET : memberpassword (Password) ######
	function getMemberpassword()
	{
		return $this->memberpassword;
	}
#### SET : memberstatus (สถานะ) ######
	function setMemberstatus($memberstatus)
	{
		$this->memberstatus = $memberstatus;
	}

	###### GET : memberstatus (สถานะ) ######
	function getMemberstatus()
	{
		return $this->memberstatus;
	}
	#############เพิ่มข้อมูลพนักงาน##################
	function add()
	{
	$data = array(							
							'membername' => $this->getMembername(),
							'memberlname' => $this->getMemberlname(),
							'membersex' => $this->getMembersex(),
							'memberaddress' => $this->getMemberaddress(),
							'membertel' => $this->getMembertel(),
							'memberusername' => $this->getMemberusername(),
							'memberpassword' => $this->getMemberpassword()
						);
		$this->db->insert('member', $data);
		return $this->db->insert_id();
	}
	#############Show##################
	function getAllData ()
	{
		return $this->db->get('member')->result_array();
	}
	#############แก้ไขข้อมูลพนักงาน##################
	function updateData()
	{
	$data = array(							
					'membername' => $this->getMembername(),
					'memberlname' => $this->getMemberlname(),
					'membersex' => $this->getMembersex(),
					'memberaddress' => $this->getMemberaddress(),
					'membertel' => $this->getMembertel(),
					'memberusername' => $this->getMemberusername(),
					'memberpassword' => $this->getMemberpassword()
				  );
		$this->db->where('memberid',$this->getMemberid());
		$this->db->update('member', $data);
		return $this->db->insert_id();
	}
	function getKPData()
	{
		$this->db->where('memberid',$this->getMemberid());
		return $this->db->get('member')->result_array();
	}
	function deleteData()
	{
		$this->db->where('memberid',$this->getMemberid());
		$this->db->delete('member');
	}
}
?>