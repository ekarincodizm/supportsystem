<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>css/yess.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script> 
  <script>
  $( "#panel" )
    .panel( "open" , optionsHash )
    .then( function( options ){
        $( "#panel" ).panel( "open" , options );
		 $( "#close" ).panel( "close" , options );
    });
  </script>
</head>
<body>
	<div data-role="page" data-theme="a">
      <div data-role="panel" id="panel"  data-theme="a">
 <ul data-role="listview" data-theme="a">
	<li><a href="#popup" data-rel="dialog" data-transition="pop">ค้นหาข้อมูล</a></li>
    <li><a><?php 
	$data = $this->session->userdata('sessionData');
	echo 'สวัสดีคุณ : '.$data['membername'];?></a></li>
        <li><a href="<?php echo base_url();?>index.php/Mobile/logout">ลงชื่อออก</a></li>
    <a href="#" data-role="button" data-rel="close" id="close" data-role="button" data-inline="true"  >Cancel</a>
</ul>
    </div><!-- /panel -->
		<div data-role="header" data-position="inline">
        <a href="#panel" data-icon="grid" data-iconpos="notext"></a>
			<h1>Mobile Support</h1>
		</div>
		<div data-role="content" data-theme="a" align="left">

		</div>
	</div>
	<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="a">
		<h1>Dialog</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="d">	
		<h2>ค้นหา</h2>
		<form action="<?php echo base_url()?>index.php/Mobile/Search" method="post" data-ajax="false">
		ค้นหา : <input type="text" name="search">
		<br />
		<input type="submit" value="ค้นหา">
		</form>

		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Close</a></p>	
	</div><!-- /content -->
	
</div><!-- /page popup -->

</body>
</html>