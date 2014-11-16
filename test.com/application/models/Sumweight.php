<?php 
class Sumweight extends CI_Model {

    function __construct(){
	   parent::__construct();
    }
    var $sumweightid ; 
    var $sumweightdate ;
    var $quctaweight ; 
	###### SET : sumweightid () ######
	function setSumweightid($sumweightid)
	{
		$this->sumweightid = $sumweightid;
	}
	###### GET : sumweightid () ######
	function getSumweightid()
	{
		return $this->sumweightid;
	}
		###### SET : sumweightdate () ######
	function setSumweightdate($sumweightdate)
	{
		$this->sumweightdate = $sumweightdate;
	}
	###### GET : sumweightdate () ######
	function getSumweightdate()
	{
		return $this->sumweightdate;
	}
	###### SET : quctaweight () ######
	function setQuctaweight($quctaweight)
	{
		$this->quctaweight = $quctaweight;
	}
	###### GET : quctaweight () ######
	function getQuctaweight()
	{
		return $this->quctaweight;
	}
	function addSumweight()
	{
		$data=array(
			'sumweightdate'=>date ('Y-m-d'),
			'quctaweight'=>$this->getQuctaweight()
		);
		$this->db->insert('sumweight',$data);
		return $this->db->insert_id();
	}
}
?>