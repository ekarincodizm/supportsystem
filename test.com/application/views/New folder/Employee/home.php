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
  <script>
	$(document).ready(function() {
		$('#content').load('/index.php/MemberCon/show');
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

$('#addView').fancybox({
			height :	'500',
				width :	'65%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {
					
       		$('#content').load('/index.php/MemberCon/show');

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
   <li><a href='<?php echo base_url()?>index.php/MemberCon/addView' id="addView" class="menu"><span>จัดการข้อมูลพนักงาน</span></a></li>
  
   <li><a href='<?php echo base_url()?>index.php/MemberCon/test' class="fancyboxMagChildent"><span>จัดการโควต้า</span></a></li>
    <li class='active has-sub'><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>สรุปการรับซื้อ</span></a>
      <ul>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/MemberCon/addPriceView' class="fancyboxMagChildent"><span>กำหนดราคา</span></a>
          
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>แสดงรายงานสรุป</span></a>
         
         </li>
          <li class='has-sub'><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>กราฟ</span></a>
            <ul>
               <li><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>แสดงน้ำหนักแต่ละขนาดและรวมต่อวัน</span></a></li>
               <li><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>แสดงจำนวนเงินแต่ละขนาดและรวมต่อวัน</span></a></li>
                <li  class='last'><a href='<?php echo base_url()?>index.php/MemberCon/test' class="menu"><span>น้ำหนักรวมทั้งหมด</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
</ul>
</div>
<div id="content"></div>
</body>
</html>
