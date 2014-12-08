<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
  <script>
  $('#cusmane').keyup(function(){

				$.post("<?php echo base_url()?>index.php/HomeCustomer/searchPurchase",
				{
					textSearch:$('#cusmane').val()
				},
				function(data)
					{
						$('.content').html(data);
					});
	});
	 
			</script>
			<br>
<center><label for="textfield"></label>
<input type="text" name="cusmane" id="cusmane" style="height:25px" onKeyUp="return false;" placeholder="ค้นหา"> 
<a href="<?php echo base_url()?>index.php/HomeCustomer/formAddPurchase" class="link">
</a></center>
 <div class="content">
<table width="80%" align="center" class="CSSTableGenerator ">
  <tr>
    <th nowrap="nowrap" bgcolor="#996633">รหัสลูกค้า</th>
    <th nowrap="nowrap" bgcolor="#996633">ชื่อ</th>
    <th nowrap="nowrap" bgcolor="#996633">นามสกุล</th>
    <th nowrap="nowrap" bgcolor="#996633">กราฟแสดงสถิติโควต้า</th>
  </tr>
  <?php foreach($listcustomer as $V){?>
  <tr>
 		 <td>
       <?php echo $V['cusid']?> 
        </td>
        
  		<td>
       <?php echo $V['cusname']?> 
        </td>
      
       <td>
       <?php echo $V['cuslname']?> 
        </td>
     
        <td>
       <a class="fancyboxMagChildent" href="<?php echo base_url()."index.php/homeEmployee/forumQucta/".$V['cusid']?>">กราฟแสดงสถิติโควต้า<img src="<?php echo base_url()?>img/9.jpg" width="25" style="margin-top:-10px;margin-bottom:-5px"/></a>
        </td>
  </tr>
  <?php }?>
</table>
</div>
</body>
</html>