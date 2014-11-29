<!DOCTYPE HTML>
<html>
   <head>
	<title>Welcome Employee</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link href="css/style.css" rel="stylesheet" type="text/css" />
	  <link rel="stylesheet" href="/styles/layout.css" type="text/css" />
	  

</head>    
<body>
	<li><a href="<?=base_url()?>index.php"> Log-out</a></li>

	<h2>Welcome : <?php echo $this->session->userdata('memberusername'); ?></h2><br>
	
</body>
	<a href="CustomerCon/show">Show</a>
</html>