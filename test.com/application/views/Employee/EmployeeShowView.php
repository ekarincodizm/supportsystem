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
 <div class="content">
<table width="100%">
  <tr>
    <th nowrap="nowrap">รหัสลูกค้า</th>
    <th nowrap="nowrap">ชื่อ</th>
    <th nowrap="nowrap">นามสกุล</th>
    <th nowrap="nowrap">เพศ</th>
    <th nowrap="nowrap">ที่อยู่</th>
    <th nowrap="nowrap">เบอร์โทร</th>
	  <th nowrap="nowrap">Username</th>
    <th nowrap="nowrap">Password</th>
    <th nowrap="nowrap">แก้ไข</th>
    <th nowrap="nowrap">ลบ</th>
  </tr>
  
  <?php foreach($listmember as $V){?>
  <tr>
 		 <td>
       <?php echo $V['memberid']?> 
        </td>    
  		<td>
       <?php echo $V['membername']?> 
        </td>    
       <td>
       <?php echo $V['memberlname']?> 
        </td>
     
         <td>
       <?php echo $V['membersex']?> 
        </td>
        <td>
       <?php echo $V['memberaddress']?> 
        </td>    
        <td>
       <?php echo $V['membertel']?> 
        </td>
		 <td>
       <?php echo $V['memberusername']?> 
        </td>    
        <td>
       <?php echo $V['memberpassword']?> 
        </td>
        <td>
       <a class="link" href="<?php echo base_url()."index.php/MemberCon/getPKData/".$V['memberid']?>">Edit</a>
        </td>
         <td>
        <a href="<?php echo base_url()."index.php/MemberCon/deleteData/".$V['memberid']?>">Delete</a>
        </td>
  </tr>
  <?php }?>
</table>
</div>
</body>
</html>