<?php
/*
#########################
Model: EmpModel
���Ѳ��: ����õѹ�  ����ǧ
�Ѳ�������: 2014-10-23 
���㹻�Сͺ����
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
	###### SET : ratesaa (�Ҥ� AA) ######
	function setRatesaa($ratesaa)
	{
		$this->ratesaa = $ratesaa;
	}

	###### GET : ratesaa (�Ҥ� AA) ######
	function getRatesaa()
	{
		return $this->ratesaa;
	}
	###### SET : ratesa (�Ҥ� A) ######
	function setRatesa($ratesa)
	{
		$this->ratesa = $ratesa;
	}

	###### GET : ratesa (�Ҥ� A) ######
	function getRatesa()
	{
		return $this->ratesa;
	}
	###### SET : ratesb (�Ҥ� B) ######
	function setRatesb($ratesb)
	{
		$this->ratesb = $ratesb;
	}

	###### GET : ratesb (�Ҥ� B) ######
	function getRatesb()
	{
		return $this->ratesb;
	}
	###### SET : ratesc (�Ҥ� C) ######
	function setRatesc($ratesc)
	{
		$this->ratesc = $ratesc;
	}

	###### GET : ratesc (�Ҥ� C) ######
	function getRatesc()
	{
		return $this->ratesc;
	}
	#############�����Ҥ�##################
	function addPice()
	{
	$data = array(	
							'pricedate' => date('Y-m-d'),
							'ratesaa' => $this->getRatesaa(),
							'ratesa' => $this->getRatesa(),
							'ratesb' => $this->getRatesb(),
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
		echo date('Y-m-d');
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