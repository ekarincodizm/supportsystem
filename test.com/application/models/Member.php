<?php
/*
#########################
Model: EmpModel
���Ѳ��: ����õѹ�  ����ǧ
�Ѳ�������: 2014-10-23 
���㹻�Сͺ����
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
###### SET : titleid (�ѡ�����) ######
	function setTitleid($titleid)
	{
		$this->titleid = $titleid;
	}

	###### GET : titleid (�ѡ�����) ######
	function getTitleid()
	{
		return $this->titleid;
	}
	###### SET : memberid (����) ######
	function setMemberid($memberid)
	{
		$this->memberid = $memberid;
	}

	###### GET : memberid (����) ######
	function getMemberid()
	{
		return $this->memberid;
	}
		###### SET : membername (������Ҫԡ) ######
	function setMembername($membername)
	{
		$this->membername = $membername;
	}

	###### GET : membername (������Ҫԡ) ######
	function getMembername()
	{
		return $this->membername;
	}
	###### SET : memberlname (���ʡ����Ҫԡ) ######
	function setMemberlname($memberlname)
	{
		$this->memberlname = $memberlname;
	}

	###### GET : memberlname (���ʡ����Ҫԡ) ######
	function getMemberlname()
	{
		return $this->memberlname;
	}
##### SET : memberaddress (���������Ҫԡ) ######
	function setMemberaddress($memberaddress)
	{
		$this->memberaddress = $memberaddress;
	}

	###### GET : memberaddress (���������Ҫԡ) ######
	function getMemberaddress()
	{
		return $this->memberaddress;
	}
	###### SET : membersex (��) ######
	function setMembersex($membersex)
	{
		$this->membersex = $membersex;
	}

	###### GET : membersex (��) ######
	function getMembersex()
	{
		return $this->membersex;
	}
		###### SET : membertel (������) ######
	function setMembertel($membertel)
	{
		$this->membertel = $membertel;
	}

	###### GET : membertel (������) ######
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
#### SET : memberstatus (ʶҹ�) ######
	function setMemberstatus($memberstatus)
	{
		$this->memberstatus = $memberstatus;
	}

	###### GET : memberstatus (ʶҹ�) ######
	function getMemberstatus()
	{
		return $this->memberstatus;
	}
	#############���������ž�ѡ�ҹ##################
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
	#############��䢢����ž�ѡ�ҹ##################
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