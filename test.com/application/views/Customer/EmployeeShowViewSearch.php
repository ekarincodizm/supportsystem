<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">

 <script>
  $('#cusmane').keyup(function(){

				$.post("<?php echo base_url()?>index.php/CustomerCon/searchCustomer",
				{
					textSearch:$('#cusmane').val()
				},
				function(data)
					{
						$('.content').html(data);
					});
			});
  $('.link').fancybox({
	  			height :	'100%',
				width :	'100%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {		
       		$('.content').load("<?php echo base_url()?>index.php/CustomerCon/show");

    }
	
});
 </script>
 <?php echo form_open_multipart('CustomerCon/searchCustomer');?>
<body style="text-align: center">
<label for="textfield"></label>
<input type="text" name="cusmane" id="cusmane">
 <div class="content">

</div>
</body>
</html>