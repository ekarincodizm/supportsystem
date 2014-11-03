<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">

 <script>
  $('#membermane').keyup(function(){

				$.post("<?php echo base_url()?>index.php/MemberCon/searchMember",
				{
					textSearch:$('#membermane').val()
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
       		$('.content').load("<?php echo base_url()?>index.php/MemberCon/show");

    }
	
});
 </script>
 <?php echo form_open_multipart('EmployeeCon/searchMember');?>
<body style="text-align: center">
<label for="textfield"></label>
<input type="text" name="membermane" id="membermane">
 <div class="content">

</div>
</body>
</html>