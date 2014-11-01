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
	var $size;
	var $value;
	var $priceid;
	var $invoiceid;

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	###### SET : size (ขนาด) ######
	function setSize($size)
	{
		$this->size = $size;
	}

	###### GET : size (ขนาด) ######
	function getSize()
	{
		return $this->size;
	}
	###### SET : value (จำนวน) ######
	function setValue($value)
	{
		$this->value = $value;
	}

	###### GET : value (จำนวน) ######
	function getValue()
	{
		return $this->value;
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
							'size' => $this->getSize(),
							'value' => $this->getValue(),
							'priceid' => $this->getPriceid(),
							'invoiceid' => $this->getInvoiceid()

						);
		$this->db->insert('invoicedetial', $data);
		return $this->db->insert_id();
	}
	function addBillDetial()
	{
	$data = array(							
							'size' => $this->getSize(),
							'value' => $this->getValue(),
							'priceid' => $this->getPriceid(),
							'billid' => $this->getInvoiceid()

						);
		$this->db->insert('billdetial', $data);
		return $this->db->insert_id();
	}

}
?>