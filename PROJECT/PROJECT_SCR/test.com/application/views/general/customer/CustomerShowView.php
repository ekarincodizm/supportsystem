<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
 <script>
  $('.link').fancybox({
	  			height :	'500',
				width :	'450',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {		
       		$('.content').load("<?php echo base_url()?>index.php/CustomerCon/show");

    }
	
});
 </script>
 <div class="content">
<table width="80%" align="center" class="CSSTableGenerator">
  <tr>
    <th nowrap="nowrap" bgcolor="#996633">รหัสลูกค้า</th>
    <th nowrap="nowrap" bgcolor="#996633">ชื่อ</th>
    <th nowrap="nowrap" bgcolor="#996633">นามสกุล</th>
    <th nowrap="nowrap" bgcolor="#996633">ที่อยู่</th>
    <th nowrap="nowrap" bgcolor="#996633">เบอร์โทร</th>
    <th nowrap="nowrap" bgcolor="#996633">QR-CODE</th>
    <th nowrap="nowrap" bgcolor="#996633">แก้ไข</th>
    <th nowrap="nowrap" bgcolor="#996633">ลบ</th>
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
       <?php echo $V['cusaddress']?> 
        </td>
      
        <td>
       <?php echo $V['custel']?> 
        </td>
      
        <td>
       <?php echo $V['cusqrcodeid']?> 
        </td>
   
        <td>
       <a class="link" href="<?php echo base_url()."index.php/CustomerCon/getPKData/".$V['cusid']?>">Edit</a>
        </td>
         <td>
        <a class="link" href="<?php echo base_url()."index.php/CustomerCon/deleteData/".$V['cusid']?>">Delete</a>
        </td>
  </tr>
  <?php }?>
</table>
</div>
</body>
</html>