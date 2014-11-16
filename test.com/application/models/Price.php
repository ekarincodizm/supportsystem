<?php
/*
#########################
Model: EmpModel
ผู้พัฒนา: วิภารตัน์  ชัยยวง
พัฒนาเมื่อ: 2014-10-23 
ภายในประกอบด้วย
========
	- priceid;
	- pricedate;
	- ratesaa;
	- ratesa;
	- ratesb; 
	- ratesc; 
#########################
*/
class Price extends CI_Model
{
	var $priceid;
	var $pricedate;
	var $ratesaa;
	var $ratesa; 
	var $ratesb; 
	var $ratesc; 

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
		###### SET : priceid () ######
	function setPriceid($priceid)
	{
		$this->priceid = $priceid;
	}

	###### GET : priceid () ######
	function getPriceid()
	{
		return $this->priceid;
	}

		###### SET : pricedate () ######
	function setPricedate($pricedate)
	{
		$this->pricedate = $pricedate;
	}

	###### GET : pricedate () ######
	function getPricedate()
	{
		return $this->pricedate;
	}
	###### SET : ratesaa (ราคา AA) ######
	function setRatesaa($ratesaa)
	{
		$this->ratesaa = $ratesaa;
	}

	###### GET : ratesaa (ราคา AA) ######
	function getRatesaa()
	{
		return $this->ratesaa;
	}
	###### SET : ratesa (ราคา A) ######
	function setRatesa($ratesa)
	{
		$this->ratesa = $ratesa;
	}

	###### GET : ratesa (ราคา A) ######
	function getRatesa()
	{
		return $this->ratesa;
	}
	###### SET : ratesb (ราคา B) ######
	function setRatesb($ratesb)
	{
		$this->ratesb = $ratesb;
	}

	###### GET : ratesb (ราคา B) ######
	function getRatesb()
	{
		return $this->ratesb;
	}
	###### SET : ratesc (ราคา C) ######
	function setRatesc($ratesc)
	{
		$this->ratesc = $ratesc;
	}

	###### GET : ratesc (ราคา C) ######
	function getRatesc()
	{
		return $this->ratesc;
	}
	#############เพิ่มราคา##################
	function addPice()
	{
	$data = array(	
							'pricedate' => date('Y-m-d'),
							'ratesaa' => $this->getRatesa(),
							'ratesa' => $this->getRatesb(),
							'ratesb' => $this->getRatesc(),
							'ratesc' => $this->getRatesc()
						);
		$this->db->insert('price', $data);
	}
	function getPrice(){

		return $this->db->get('price')->result_array();

	}
		function getMember(){

		return $this->db->get('invoicedetial')->result_array();

	}
	function findPiceToDay(){
	$this->db->where('pricedate',date('Y-m-d'));
	return $this->db->get('price')->result_array();
	}
	function getPriceMaxDate()
	{
	$this->db->select_max('pricedate');
	return $this->db->get('price')->result_array();
	}
}
?>