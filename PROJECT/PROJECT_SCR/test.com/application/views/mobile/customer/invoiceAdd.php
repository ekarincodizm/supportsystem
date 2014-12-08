<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>css/yess.min.css" />
 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script> 
  <script>
  $( "#panel" )
    .panel( "open" , optionsHash )
    .then( function( options ){
        $( "#panel" ).panel( "open" , options );
		 $( "#close" ).panel( "close" , options );
    });
  </script>
</head>
<body>
	<div data-role="page" data-theme="a">
     
		<div data-role="header" data-position="inline">
			<h1 >Mobile Support</h1>
		</div>
		<div data-role="content" data-theme="a" align="left">
<form action="<?php echo base_url();?>index.php/mobileCustomer/addInvoice" method="post"  data-ajax="false" ><br>
<center>

  <table width="271" height="312" class="CSSTableGenerator ">
	<tr>

		<td colspan="3" align="center"><h2><b>ใบส่งของ</b></h2></td>
	</tr>
    <tr>
		<td colspan="3"><strong>โรงอบลำไยศรีเจริญ</strong> 7/3 ม.2 ต.สันทราย อ.สารภี จ.เชียงใหม่ โทร.053-429188</td>
	</tr>
    <tr>
        <td colspan="3" align="left"><strong>เลขที่ใบส่งของ</strong>:<input type="hidden" name="invoiceid" value="" readonly></td>
	</tr>
    <tr>
        <td width="154" colspan="2" align="left"><b>วันที่:</b><?php echo date('d-m-Y');?></td>
	</tr>
    <?php foreach($listcustomer as $s){?>
    
	<tr>
		<td width="66" align="center"><b>ชื่อ</b></td>
        <input type="hidden" name="cusid" value="<?php echo $s['cusid'];?> " >
        <input type="hidden" name="quctaid"value="<?php echo $qucta[0]['quctaid'];?> " >
        <input type="hidden" name="priceid" value="<?php echo $priceid;?> " >
		<td width="196">
        <input type="text" name="cusname" value="<?php echo $s['cusname'];?> <?php echo $s['cuslname'];?>"readonly ></td>
    </tr>
        <?php }?>
	<tr>
		<td align="center"><b>AA</b></td>
		<td colspan="3"><input type="text" name="aa"> </td>
    </tr>
	<tr>
		<td align="center"><b>A</b></td>
		<td colspan="3"><input type="text" name="a"></td>
    </tr>
		<tr>
		<td align="center"><b>B</b></td>
		<td colspan="3"><input type="text" name="b"></td>
    </tr>
		<tr>
		<td align="center"><b>C</b></td>
		<td colspan="3"><input type="text" name="c"></td>
    <tr>
		 <td align="center"><b>ชื่อผู้รับ</b></td>
        <td colspan="3">
        <?php echo $this->session->userdata('memberusername');
		?>
        <input type="hidden" name="memberid" value=" <?php echo $this->session->userdata('memberid');
		?>"readonly></td>
    </tr>
	<tr>
		<td colspan="4" ><center><input type="submit" value="บันทึก">	<input type="reset" value="ยกเลิก"></center></td>
	</tr>

</table></center>
</form>
	<!--<a href='/index.php/CusControl/index'>กลับหน้าหลัก</a></center>-->
</div>
	</div>
</body>
</html>
