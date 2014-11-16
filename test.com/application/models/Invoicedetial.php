<?php
/*
#########################
Model: EmpModel
ผู้พัฒนา: วิภารตัน์  ชัยยวง
พัฒนาเมื่อ: 2014-10-23 
ภายในประกอบด้วย
========
-size;
-value;
-priceid;
-invoiceid;
#########################
*/
class Invoicedetial extends CI_Model
{
	var $sizeAA;
	var $sizeA;
	var $sizeB;
	var $sizeC;
	var $priceid;
	var $invoiceid;

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	###### SET : sizeAA () ######
	function setSizeAA($sizeAA)
	{
		$this->sizeAA = $sizeAA;
	}

	###### GET : sizeAA () ######
	function getSizeAA()
	{
		return $this->sizeAA;
	}
	###### SET : sizeA () ######
	function setSizeA($sizeA)
	{
		$this->sizeA = $sizeA;
	}

	###### GET : sizeA () ######
	function getSizeA()
	{
		return $this->sizeA;
	}
		###### SET : sizeB () ######
	function setSizeB($sizeB)
	{
		$this->sizeB = $sizeB;
	}

	###### GET : sizeB () ######
	function getSizeB()
	{
		return $this->sizeB;
	}
	###### SET : sizeC () ######
	function setSizeC($sizeC)
	{
		$this->sizeC = $sizeC;
	}
	###### GET : sizeC () ######
	function getSizeC()
	{
		return $this->sizeC;
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
		###### SET : invoiceid (รหัสใบส่งของ) ######
	function setInvoiceid($invoiceid)
	{
		$this->invoiceid = $invoiceid;
	}

	###### GET : invoiceid (รหัสใบส่งของ) ######
	function getInvoiceid()
	{
		return $this->invoiceid;
	}
	#############searchInvoice##################
	function searchInvoice ($text)
	{
		$this->db->like('cusname',$text);
		$this->db->or_like('cuslname',$text);
		return $this->db->get('customer')->result_array();
	}
	#############เพิ่มข้อมูลการรับซื้อ##################
	function addDetial()
	{
	$data = array(							
							'sizeAA' => $this->getSizeAA(),
							'sizeA' => $this->getSizeA(),
							'sizeB' => $this->getSizeB(),
							'sizeC' => $this->getSizeC(),
							'priceid' => $this->getPriceid(),
							'invoiceid' => $this->getInvoiceid()

						);
			$data2 = array(							
							'sizeAA' => $this->getSizeAA(),
							'sizeA' => $this->getSizeA(),
							'sizeB' => $this->getSizeB(),
							'sizeC' => $this->getSizeC(),
							'priceid' => $this->getPriceid(),
							'billid' => $this->getInvoiceid()

						);
		$this->db->insert('billdetial', $data2);
		$this->db->insert('invoicedetial', $data);
		return $this->db->insert_id();
	}
	function addBillDetial()
	{
	$data = array(							
							'sizeAA' => $this->getSizeAA(),
							'sizeA' => $this->getSizeA(),
							'sizeB' => $this->getSizeB(),
							'sizeC' => $this->getSizeC(),
							'priceid' => $this->getPriceid(),
							'billid' => $this->getInvoiceid()

						);
		$this->db->insert('billdetial', $data);
		return $this->db->insert_id();
	}
}
?>