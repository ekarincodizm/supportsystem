<?php 
class ฺBillDetial extends CI_Model {
    function __construct(){
	   parent::__construct();
    }
	var $billDetialId ; 
    var $billid ;
    var $priceid ; 
    var $sizeAA ;
    var $sizeA ;
	var $sizeB ;
    var $sizeC ;
	###### SET : billDetialId (รหัสรายละเอียดบิล) ######
	function setBillDetialId($billDetialId)
	{
		$this->billDetialId = $billDetialId;
	}
	###### GET : billDetialId (รหัสรายละเอียดบิล) ######
	function getBillDetialId()
	{
		return $this->billDetialId;
	}
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
		###### SET : priceid (รหัสราคา) ######
	function setPriceid($priceid)
	{
		$this->priceid = $priceid;
	}
	###### GET : priceid (รหัสราคา) ######
	function getPriceid()
	{
		return $this->priceid;
	}
	###### SET : sizeAA (ขนาดAA) ######
	function setSizeAA($sizeAA)
	{
		$this->sizeAA = $sizeAA;
	}
	###### GET : sizeAA (ขนาดAA) ######
	function getSizeAA()
	{
		return $this->sizeAA;
	}
		###### SET : sizeA (ขนาดA) ######
	function setSizeA($sizeA)
	{
		$this->sizeA = $sizeA;
	}
	###### GET : sizeA (ขนาดA) ######
	function getSizeA()
	{
		return $this->sizeA;
	}
	###### SET : sizeB (ขนาดB) ######
	function setSizeB($sizeB)
	{
		$this->sizeB = $sizeB;
	}
	###### GET : sizeB (ขนาดB) ######
	function getSizeB()
	{
		return $this->sizeB;
	}
	###### SET : sizeC (ขนาดC) ######
	function setSizeC($sizeC)
	{
		$this->sizeC = $sizeC;
	}
	###### GET : sizeC (ขนาดC) ######
	function getSizeC()
	{
		return $this->sizeC;
	}

}?>