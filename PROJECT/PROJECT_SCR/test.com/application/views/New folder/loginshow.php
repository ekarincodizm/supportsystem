<!DOCTYPE HTML>
 <html>
<head>

<title>Login</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="/styles/layout.css" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	margin-top: 100px;
	margin-bottom: 100px;
	background-repeat: repeat;
	text-shadow: 2px 1px 0px #fff, 3px 2px 0px rgba(0,0,0,0.15);
	
}
body,td,th {
	color: #000;
	font-family: "Times New Roman", Times, serif;
	cursor: crosshair;
	page-break-before: always;
	page-break-after: always;
	font-size: large;
	
}
</style>
</head>
<body>
   <center>
   <?php echo validation_errors(); ?>
   <?php echo form_open('VerifyLoginHome'); ?>
	</table>
    <table width="248" border="1">
  <tr>
    <th height="35" bgcolor="#3399FF" scope="col">Login</th>
    </tr>
     <div>
  <tr>
    <td width="177" height="143" bgcolor="#CCCCCC"><label for="username">Username :</label>      <input name="username" type="text" id="username" size="15"/>
      <label for="password"><br>
        <br>
        Password :</label>      <input name="password" type="password" id="passowrd" size="15"/>      <center>
          <p>
            <input name="Submit" type="submit" style="width:120px;" value="Login"/ >
          </p>
        </center></td>
  </tr>
  </div>
</table>
</center>
 </body>

</html>
