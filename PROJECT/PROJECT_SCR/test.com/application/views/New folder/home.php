<?php
	if(preg_match('/android|blackberry|ipad|iphone|ipod/i', $_SERVER['HTTP_USER_AGENT'])){
		header("location:".base_url()."index.php/Mobile");
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
    <script type="text/javascript" src="<?php echo base_url()?>js/ui/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/ui/jquery-ui.theme.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/ui/jquery-ui.structure.css" />
    <script type="text/javascript">
		$(document).ready(function() {
			$('.fancybox').fancybox({
				height :	'100%',
				width :	'90%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				centerOnScroll :true,
				onStart : function(){
 			$("body").css({'overflow-y':'hidden'});
                },
				onClosed	:	function() {
			 $("body").css({'overflow-y':'visible'});
					  
				}
				});
				$('.img').fancybox({
					onStart : function(){
 			$("body").css({'overflow-y':'hidden'});
                },
				onClosed	:	function() {
			 $("body").css({'overflow-y':'visible'});
					  
				}
					});
		});
		 $(function() {
			$( "input[type=submit], a.fancybox, button" )
			.button()
			.click(function( ) {
	
			});
		});
	</script>
	</head>
    <body>
    <a class="img" href="<?php echo base_url()?>img/1_b.jpg"><img src="<?php echo base_url()?>img/1_b.jpg" alt="" /></a><br><br>
     <a class="fancybox" href="<?php echo base_url()?>index.php/home/index">55555</a><br><br>
    <form name="form1" method="post" action="">
      <input type="text" name="textfield" id="textfield" required><br><br>
      <input type="number" name="textfield2" id="textfield2" required><br><br>
      <input type="email" name="textfield3" id="textfield3" required><br><br>
      <input type="submit" name="button" id="button" value="Submit">
    </form>
</body>
</html>