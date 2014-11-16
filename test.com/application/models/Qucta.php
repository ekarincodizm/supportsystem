<?php
/*
#########################
Model: EmpModel
ผู้พัฒนา: วิภารตัน์  ชัยยวง
พัฒนาเมื่อ: 2014-10-23 
ภายในประกอบด้วย
========
quctaid
newly
buyweight
sumweightid 
cusid
memberid
#########################
*/
class Qucta extends CI_Model
{
	var $quctaid;
	var $newly;
	var $buyweight;
	var $sumweightid; 
	var $cusid; 
	var $memberid; 

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	###### SET : quctaid (รหัสโควต้า) ######
	function setQuctaid($quctaid)
	{
		$this->quctaid = $quctaid;
	}
	###### GET : quctaid (รหัสโควต้า) ######
	function getQuctaid()
	{
		return $this->quctaid;
	}
		###### SET : newly (น้ำหนักใหม่) ######
	function setNewly($newly)
	{
		$this->newly = $newly;
	}
	###### GET : newly (น้ำหนักใหม่) ######
	function getNewly()
	{
		return $this->newly;
	}
	###### SET : buyweight (น้ำหนักที่ต้องการซื้อ) ######
	function setBuyweight($buyweight)
	{
		$this->buyweight = $buyweight;
	}
	###### GET : buyweight (น้ำหนักที่ต้องการซื้อ) ######
	function getBuyweight()
	{
		return $this->buyweight;
	}
	###### SET : sumweightid (รหัสน้ำหนักรวม) ######
	function setSumweightid($sumweightid)
	{
		$this->sumweightid = $sumweightid;
	}
	###### GET : sumweightid (รหัสน้ำหนักรวม) ######
	function getSumweightid()
	{
		return $this->sumweightid;
	}
	###### SET : cusid (รหัสลูกค้า) ######
	function setCusid($cusid)
	{
		$this->cusid = $cusid;
	}
	###### GET : cusid (รหัสลูกค้า) ######
	function getCusid()
	{
		return $this->cusid;
	}
	###### SET : memberid (รหัสพนักงาน) ######
	function setMemberid($memberid)
	{
		$this->memberid = $memberid;
	}
	###### GET : memberid (รหัสพนักงาน) ######
	function getMemberid()
	{
		return $this->memberid;
	}
	function addQucta()
	{
		$data = array(	
							'buyweight' => $this->getBuyweight(),
							'sumweightid' => $this->getSumweightid(),
							'cusid' => $this->getCusid()
						);
		$this->db->insert('qucta', $data);
	}
	function getQucta()
	{
		$this->db->join('customer','customer.cusid = qucta.cusid');
		$this->db->join('sumweight','sumweight.sumweightid = qucta.sumweightid');
		$this->db->where('sumweight.sumweightdate',date ("Y-m-d", strtotime("-1 day")));
		return $this->db->get('qucta')->result_array();
	}
	function getBuyweights()
	{
		$this->db->join('customer','customer.cusid = qucta.cusid');
		$this->db->join('sumweight','sumweight.sumweightid = qucta.sumweightid');
		$this->db->where('sumweight.sumweightdate',date ("Y-m-d"));
		return $this->db->get('qucta')->result_array();
	}
}
?>