<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>theme</title>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	 <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
	  <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
      
<title>User Login</title>

<style type="text/css">
<!--
#apDiv1 {
position: absolute;
top: 50%;
left: 50%;
width: 300px;
height: 200px;
margin-left: -250px;
margin-top: -150px;
background-color: #468879;
border-radius:5px;
-khtml-border-radius:5px;
-moz-border-radius:5px;
}
.style1 {color: #FFFFFF}
.style4 {color: #F5F5F5}
-->
</style>
</head>
<body bgcolor="#F0F0F0" >
 <?php echo validation_errors(); ?>
 <?php echo form_open('verifyLoginHome'); ?>
<form id="form1" name="form1" method="post" action="">
<div id="apDiv1">
<h1 align="center" class="style4">USER LOGIN</h1>
<table width="284" border="0" align="center">
<tr>
<td width="124"><span class="style1">User Name</span></td>
<td width="144" colspan="2">
<label>
<input type="text" name="username" id="username" autofocus />
</label> </td>
</tr>
<tr>
<td><span class="style1">Password</span></td>
<td colspan="2"><input type="password" name="password" id="password" /></td>
</tr>
<tr>
<td><div align="right"></div></td>
<td>

<div align="left">
<input type="reset" name="reset" id="reset" value="Reset" />
</div></td>
<td><div align="right">
<input type="submit" name="button" id="button" value="LOGIN" />
</div></td>
</tr>
</table>

<label></label>
<p>&nbsp;</p>
</div>
</form>
<div id="content"></div>
</body>
</html>