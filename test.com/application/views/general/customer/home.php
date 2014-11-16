<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>theme</title>

	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
 <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
  <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
  <script>
		$(document).ready(function() {
		$('#content').load('/index.php/HomeCustomer/show');
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);            
	});
	});
	$('.fancyboxMagChildent').fancybox({
			height :	'500',
				width :	'65%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('.content').load('/index.php/boss/chillentInArea');

    }
});

$('.popupbill').fancybox({
			height :	'500',
				width :	'80%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe'
});

$('#addView').fancybox({
			height :	'500',
				width :	'65%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('#content').load('/index.php/CustomerCon/show');

    }
});
 $('.popup').fancybox({
	  			height :	'450',
				width :	'400',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {		
       		$('#content').load("<?php echo base_url()?>index.php/HomeCustomer/PurShow");

    }
	
});
	</script>
</head>

<body>
<div id="header">
<div id="title"><img src="<?php echo base_url()?>img/logo.jpg" class="logo" alt=""/></div><div id="loginBox"></div>
</div>
<div id='cssmenu'>
<ul>
   <li><a href='<?php echo base_url()?>index.php/homeCustomer/show' class="menu"><span>จัดการข้อมูลลูกค้า</span></a></li>
  
   <li><a href='<?php echo base_url()?>index.php/homeCustomer/showInvoice' class="menu"><span>ออกใบเสร็จ</span></a></li>
    <li class='active has-sub'><a href='<?php echo base_url()?>index.php/homeCustomer/PurShow' class="menu"><span>จัดการการรับซื้อ</span></a>
   </li>
</ul>
</div>
<div id="content"></div>
</body>
</html>
