<?php
/*
#########################
Model: EmpModel
���Ѳ��: ����õѹ�  ����ǧ
�Ѳ�������: 2014-10-23 
���㹻�Сͺ����
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
	###### SET : size (��Ҵ) ######
	function setSize($size)
	{
		$this->size = $size;
	}

	###### GET : size (��Ҵ) ######
	function getSize()
	{
		return $this->size;
	}
	###### SET : value (�ӹǹ) ######
	function setValue($value)
	{
		$this->value = $value;
	}

	###### GET : value (�ӹǹ) ######
	function getValue()
	{
		return $this->value;
	}
	###### SET : priceid (�����Ҥ�) ######
	function setPriceid($priceid)
	{
		$this->priceid = $priceid;
	}

	###### GET : priceid (�����Ҥ�) ######
	function getPriceid()
	{
		return $this->priceid;
	}
		###### SET : invoiceid (������觢ͧ) ######
	function setInvoiceid($invoiceid)
	{
		$this->invoiceid = $invoiceid;
	}

	###### GET : invoiceid (������觢ͧ) ######
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
	#############���������š���Ѻ����##################


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