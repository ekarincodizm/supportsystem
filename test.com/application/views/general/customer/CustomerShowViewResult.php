 <script>
  $('#cusmane').keyup(function(){

				$.post("<?php echo base_url()?>index.php/HomeCustomer/searchCustomer",
				{
					textSearch:$('#cusmane').val()
				},
				function(data)
					{
						$('.content').html(data);
					});
			});
			  $('.link').fancybox({
	  			height :	'450',
				width :	'700',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				afterClose : function() {		
       		$('#content').load("<?php echo base_url()?>index.php/HomeCustomer/show");

    }
	
});
			</script>
<body style="text-align: center">
<br>
<center><label for="textfield"></label>
<input type="text" name="cusmane" id="cusmane" onKeyUp="return false;"> 
<a href="<?php echo base_url()?>index.php/HomeCustomer/addView" class="fancyboxMagChildent">
	<input type="button"  value="เพิ่ม">
</a></center>
 <center><div class="content">
<table width="80%" class="CSSTableGenerator">
  <tr>
    <th nowrap="nowrap">รหัสลูกค้า</th>
    <th nowrap="nowrap">ชื่อ</th>
    <th nowrap="nowrap">นามสกุล</th>
    <th nowrap="nowrap">ที่อยู่</th>
    <th nowrap="nowrap">เบอร์โทร</th>
    <th nowrap="nowrap">QR-CODE</th>
    <th nowrap="nowrap">แก้ไข</th>
    <th nowrap="nowrap">ลบ</th>
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
       <a class="link" href="<?php echo base_url()."index.php/HomeCustomer/getPKData/".$V['cusid']?>">Edit</a>
        </td>
         <td>
        <a class="link" href="<?php echo base_url()."index.php/HomeCustomer/deleteData/".$V['cusid']?>">Delete</a>
        </td>
  </tr>

  <?php }?> 
  </table>
</div></center>
  