<?php
/*
#########################
Model: EmpModel
ผู้พัฒนา: วิภารตัน์  ชัยยวง
พัฒนาเมื่อ: 2014-10-23 
ภายในประกอบด้วย
========
- cusid
- cusname
- cuslname
- cusdaaress
- custel
- cusqrcodeid
#########################
*/
class Customer extends CI_Model
{
	var $cusid;
	var $cusname;
	var $cuslname;
	var $cusdaaress; 
	var $custel; 
	var $cusqrcodeid; 

	function __construct()
	{
		parent::__construct();
		$this->load->database();
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
	###### SET : cusname (ชื่อลูกค้า) ######
	function setCusname($cusname)
	{
		$this->cusname = $cusname;
	}

	###### GET : cusname (ชื่อลูกค้า) ######
	function getCusname()
	{
		return $this->cusname;
	}
	###### SET : cuslname (นามสกุลลูกค้า) ######
	function setCuslname($cuslname)
	{
		$this->cuslname = $cuslname;
	}

	###### GET : cuslname (นามสกุลลูกค้า) ######
	function getCuslname()
	{
		return $this->cuslname;
	}
	###### SET : cusaddress (ที่อยู่ลูกค้า) ######
	function setCusaddress($cusaddress)
	{
		$this->cusaddress = $cusaddress;
	}

	###### GET : cusaddress (ที่อยู่ลูกค้า) ######
	function getCusaddress()
	{
		return $this->cusaddress;
	}
		###### SET : custel (เบอร์โทรลูกค้า) ######
	function setCustel($custel)
	{
		$this->custel = $custel;
	}

	###### GET : custel (เบอร์โทรลูกค้า) ######
	function getCustel()
	{
		return $this->custel;
	}
	###### SET : cusqrcodeid (รหัส QR-Code) ######
	function setCusqrcodeid($cusqrcodeid)
	{
		$this->cusqrcodeid = $cusqrcodeid;
	}

	###### GET : cusqrcodeid (รหัส QR-Code) ######
	function getCusqrcodeid()
	{
		return $this->cusqrcodeid;
	}
#############เพิ่มข้อมูลพนักงาน##################
	function add()
	{
	$data = array(							
					'cusname' => $this->getCusname(),
					'cuslname' => $this->getCuslname(),
					'cusaddress' => $this->getCusaddress(),
					'custel' => $this->getCustel(),
					'cusqrcodeid' => $this->getCusqrcodeid()
				  );
		$this->db->insert('customer', $data);
		return $this->db->insert_id();
	}
#############Show##################
	function getAllData ()
	{
		return $this->db->get('customer')->result_array();
	}
	
#############แก้ไขข้อมูลพนักงาน##################
	function updateData()
	{
	$data = array(							
					'cusname' => $this->getCusname(),
					'cuslname' => $this->getCuslname(),
					'cusaddress' => $this->getCusaddress(),
					'custel' => $this->getCustel(),
					'cusqrcodeid' => $this->getCusqrcodeid()
				  );
		$this->db->where('cusid',$this->getCusid());
		$this->db->update('customer', $data);
		return $this->db->insert_id();
	}
	function getKPData()
	{
		$this->db->where('cusid',$this->getCusid());
		return $this->db->get('customer')->result_array();
	}
	function deleteData()
	{
		$this->db->where('cusid',$this->getCusid());
		$this->db->delete('customer');
	}
	#############Showการรับซื้อ##################
	function getPurchase ()
	{
		$this->db->where('customer.cusid',$this->getCusid());
		return $this->db->get('customer')->result_array();
	}
	function search($cusname)
	{
		$this->db->like('cusname',$cusname);		
		return $this->db->get('customer')->result_array();
	}
	function getAllPurchase ()
	{
		return $this->db->get('customer')->result_array();
	}
	#############ค้นหาข้อมูลพนักงานการรับซื้อ##################
	 function getCusIdSearch($cusid)
	{
		$this->db->like('cusid',$cusid);
		$query  =  $this->db->get('customer');
		return	$query;
	}

}
?>