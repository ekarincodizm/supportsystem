<?php
Class LoginModel extends CI_Model
{

	var $id; //รหัสผู้ใช้งานเข้าสู่ระบบ
	var $username; //ชื่อผู้ใช้งานเข้าสู่ระบบ
	var $password; //รหัสผ่านผู้ใช้งานเข้าสู่ระบบ
	var $position; //กำหนดตำแหน่งผู้ใช้งานเข้าสู่ระบบ

function __construct()
{
parent::__construct();
}
	###### SET : id () ######
	function setId($id)
	{
		$this->id = $id;
	}

	###### GET : id () ######
	function getId()
	{
		return $this->id;
	}
	###### SET : username (ชื่อผู้ใช้งานเข้าสู่ระบบ) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (ชื่อผู้ใช้งานเข้าสู่ระบบ) ######
	function getUsername()
	{
		return $this->username;
	}

	###### SET : password (รหัสผ่านผู้ใช้งานเข้าสู่ระบบ) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (รหัสผ่านผู้ใช้งานเข้าสู่ระบบ) ######
	function getPassword()
	{
		return $this->password;
	}
		###### SET : position (กำหนดตำแหน่งผู้ใช้งานเข้าสู่ระบบ) ######
	function setPosition($position)
	{
		$this->position = $position;
	}

	###### GET : position (กำหนดตำแหน่งผู้ใช้งานเข้าสู่ระบบ) ######
	function getPosition()
	{
		return $this->position;
	}

 function login()
 {
   $this -> db -> select('*');
   $this -> db -> from('member');
   $this -> db -> where('memberusername', $this->getUsername());
   $this -> db -> where('memberpassword',$this->getPassword());
   $this -> db -> limit(1);
   
   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->row();
   }
   else
   {
     return false;
   }
 }
}
?>

