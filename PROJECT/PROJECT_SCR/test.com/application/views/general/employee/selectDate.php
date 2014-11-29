
<style type="text/css">
#selectCon{
	text-align: center;
	width:100%;
	height:*;
}
body,td,th {
	color: #000;
	font-weight: bold;
}
</style>
<script>
$('#selected').click(function(event) {
				 event.preventDefault();

				$.post( "<?php echo base_url();?>index.php/homeEmployee/reportInvoice",
				{ date: $('#date').val(),day: $('#day').val() }).done(
				function(data){
					$('#selectConContent').html(data);
				});
				
               
	});
</script>
<div id="selectCon">
<p>&nbsp;</p>
<form id="forms">
<h1><U><font color="#0000FF">เลือกวันที่</font></U></h1>
<h2><font color="#0000FF">วันที่ : 
  <input type="text" name="date" id="date" value="<?php echo date ('Y-m-d');?>"/>
  ย้อนหลัง : 
  <input type="number" name="day" id="day" style="width:30px;" /> 
  วัน  </h2></font>
  <p>
    <input type="button" name="selected" id="selected" value="ยืนยัน">
  </p>
  </form>
</div>
<div id="selectConContent">
</div>