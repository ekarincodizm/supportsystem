<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
 <script>
	$(document).ready(function(){
		$('.content').load("<?php echo base_url()?>index.php/CustomerCon/addView");
	 $(".submenu").click(function(event) {
		 event.preventDefault();
 		var href = $(this).attr('href');
         $('.content').load( href );
	 });
 });
  $('.fancyboxMini').fancybox({
	  			height :	'100%',
				width :	'100%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {		
       		$('.content').load("<?php echo base_url()?>index.php/CustomerCon/addView");

    }
	
});
 </script>
 </head>
 <body>
 <p class="ss">
<a class="submenu" href="<?php echo base_url();?>index.php/CustomerCon/addView">ADD</a><br>
<a class="fancyboxMini" href="<?php echo base_url();?>index.php/CustomerCon/addView">ADDPOPUP</a>
DELETE

EDIT

SEARCH
</p>
<div class="content"></div>
</body>
</body>
</html>