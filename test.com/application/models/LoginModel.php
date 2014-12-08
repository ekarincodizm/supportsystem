<?php
Class LoginModel extends CI_Model
{

	var $id; //ÃËÑÊ¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº
	var $username; //ª×èÍ¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº
	var $password; //ÃËÑÊ¼èÒ¹¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº
	var $position; //¡ÓË¹´µÓáË¹è§¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº

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
	###### SET : username (ª×èÍ¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function setUsername($username)
	{
		$this->username = $username;
	}

	###### GET : username (ª×èÍ¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function getUsername()
	{
		return $this->username;
	}

	###### SET : password (ÃËÑÊ¼èÒ¹¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function setPassword($password)
	{
		$this->password = $password;
	}

	###### GET : password (ÃËÑÊ¼èÒ¹¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function getPassword()
	{
		return $this->password;
	}
		###### SET : position (¡ÓË¹´µÓáË¹è§¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function setPosition($position)
	{
		$this->position = $position;
	}

	###### GET : position (¡ÓË¹´µÓáË¹è§¼Ùéãªé§Ò¹à¢éÒÊÙèÃÐºº) ######
	function getPosition()
	{
		return $this->position;
	}

 function login($username, $password)
 {
   $this -> db -> select('memberid, memberusername, memberpassword, memberstatus');
   $this -> db -> from('member');
   $this -> db -> where('memberusername', $username);
   $this -> db -> where('memberpassword', $password);
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

