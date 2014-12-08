<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/fancy/source/jquery.fancybox.js?v=2.1.5"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>js/fancy/source/jquery.fancybox.css?v=2.1.5" media="screen" />
    <script>
    	$(document).ready(function() 
		{
            $('#textSearch').keyup(function(){

				$.post("<?php echo base_url()?>index.php/homeCustomer/showInvoiceResult",
				{
					textSearch:$('#textSearch').val()
				},
				function(data)
					{
						$('#invoiceDetia').html(data);
					});
			});
        });
    </script>
 <script>
  $('.link').fancybox({
	  			height :	'100%',
				width :	'100%',
				autoSize : false,
				scrolling : 'auto',
				arrows : false,
				type				: 'iframe',
				
	
});
 </script>
 <br>
<p style="text-align: center">
  <label for="textfield"></label>
  <input type="text" name="textSearch" id="textSearch" placeholder="กรุณากรอกชื่อลูกค้า" style="height:25px" >
</p>
<div id="invoiceDetia">
<?php foreach($listcustomer as $V){if($V['invoicedate']==date('Y-m-d')){?>
<center><table width="410" height="329" border="5">
  <tr bgcolor="#FFCC99">
    <td colspan="2" style="text-align: center; font-weight: bold; font-size: 24px;">ใบส่งของ</td>
  </tr>
  <tr>
    <td width="225" bgcolor="#FFCC99"><strong>โรงอบลำไยศรีเจริญ</strong> 7/3 ม.2 ต.สันทราย อ.สารภี จ.เชียงใหม่ โทร.053-429188</td>
    <td width="161" bgcolor="#FFCC99" style="font-weight: bold">เลขที่ใบส่งของ:<?php echo $V['invoiceid']?> </td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99" style="font-weight: bold">ชื่อ:<?php echo $V['cusname']?> </td>
    <td bgcolor="#FFCC99" style="font-weight: bold">วันที่:<?php echo $V['invoicedate']?> </td>
  </tr>
  <tr>
    <td bgcolor="#FFCC99" style="text-align: center; font-weight: bold;">ขนาด</td>
   <td bgcolor="#FFCC99" style="text-align: center; font-weight: bold;">จำนวน/ตะกร้า</td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">AA</td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $V['sizeAA']?> </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">A </td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $V['sizeA']?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">B </td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $V['sizeB']?></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">C </td>
    <td align="center" bgcolor="#FFFFCC"><?php echo $V['sizeC']?></td>
  </tr>
  <tr bgcolor="#FFCC99">
    <td colspan="2" style="font-weight: bold">ชื่อผู้รับ:<?php echo $V['memberid']?> </td>
  </tr>
</table></center>
<p>&nbsp;</p>
<?php } } ?>

</div>
