<?php 
class ฺBill extends CI_Model {

    function __construct(){
	   parent::__construct();
    }
    var $billid ; 
    var $billdate ;
    var $cusid ; 
    var $memberid ;
	###### SET : billid (รหัสใบเสร็จ) ######
	function setBillid($billid)
	{
		$this->billid = $billid;
	}
	###### GET : billid (รหัสใบเสร็จ) ######
	function getBillid()
	{
		return $this->billid;
	}
		###### SET : billdate (วันที่ออกใบเสร็จ) ######
	function setBilldate($billdate)
	{
		$this->billdate = $billdate;
	}
	###### GET : billdate (วันที่ออกใบเสร็จ) ######
	function getBilldate()
	{
		return $this->billdate;
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
?>