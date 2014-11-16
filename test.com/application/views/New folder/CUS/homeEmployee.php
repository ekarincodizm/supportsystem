<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>theme</title>
		<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" href="<?php echo base_url()?>css/styles.css">
  <script>
	$(document).ready(function() {
  		$('.menu').click(function(event) {
				 event.preventDefault();

				 var href = $(this).attr('href');
				 $('#content').load(href);
	
               
	});
	});
	</script>
</head>

<body>
<div id="header">
<div id="title"><img src="<?php echo base_url()?>img/logo.jpg" class="logo" alt=""/></div><div id="loginBox"></div>
</div>
<div id='cssmenu'>
<ul>
   <li><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการข้อมูลพนักงาน</span></a></li>
  
   <li><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>จัดการโควต้า</span></a></li>
    <li class='active has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>สรุปการรับซื้อ</span></a>
      <ul>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>กำหนดราคา</span></a>
          
         </li>
         <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>แสดงรายงานสรุป</span></a>
         
         </li>
          <li class='has-sub'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>กราฟ</span></a>
            <ul>
               <li><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>แสดงน้ำหนักแต่ละขนาดและรวมต่อวัน</span></a></li>
               <li><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>แสดงจำนวนเงินแต่ละขนาดและรวมต่อวัน</span></a></li>
                <li  class='last'><a href='<?php echo base_url()?>index.php/home/test' class="menu"><span>น้ำหนักรวมทั้งหมด</span></a></li>
            </ul>
         </li>
      </ul>
   </li>
</ul>
</div>
<div id="content"></div>
</body>
</html>
