<?php
Class LoginModel extends CI_Model
{

	var $id; //���ʼ����ҹ�������к�
	var $username; //���ͼ����ҹ�������к�
	var $password; //���ʼ�ҹ�����ҹ�������к�
	var $position; //��˹����˹觼����ҹ�������к�

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
	###### SET : username (���ͼ����ҹ�������к�) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (���ͼ����ҹ�������к�) ######
	function getUsername()
	{
		return $this->username;
	}

	###### SET : password (���ʼ�ҹ�����ҹ�������к�) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (���ʼ�ҹ�����ҹ�������к�) ######
	function getPassword()
	{
		return $this->password;
	}
		###### SET : position (��˹����˹觼����ҹ�������к�) ######
	function setPosition($position)
	{
		$this->position = $position;
	}

	###### GET : position (��˹����˹觼����ҹ�������к�) ######
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

