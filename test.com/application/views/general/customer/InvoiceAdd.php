<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>บันทึกการรับซื้อ</title>	
	 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
</head>
<body>
<?php echo form_open_multipart('homeCustomer/addInvoice');?>
<br>
<br>
<center>
  <table width="432" height="345" class="CSSTableGenerator ">
	<tr>

		<td colspan="3" align="center"><h2><b>ใบส่งของ</b></h2></td>
	</tr>
    <tr>
		<td colspan="2"><strong>โรงอบลำไยศรีเจริญ</strong> 7/3 ม.2 ต.สันทราย อ.สารภี จ.เชียงใหม่ โทร.053-429188</td>
        <td align="left"><strong>เลขที่ใบส่งของ</strong>:          <input type="hidden" name="invoiceid" value="" readonly></td>
	</tr>
    <?php foreach($listcustomer as $s){?>
    
	<tr>
		<td width="66" align="center"><b>ชื่อ</b></td><input type="hidden" name="cusid" value="<?php echo $s['cusid'];?> " ><input type="hidden" name="quctaid" value="<?php echo $qucta[0]['quctaid'];?> " ><input type="hidden" name="priceid" value="<?php echo $priceid;?> " >
		<td width="196"><input type="text" name="cusname" value="<?php echo $s['cusname'];?> <?php echo $s['cuslname'];?>"readonly ></td>
        <td width="154" colspan="2" align="left"><b>วันที่:</b><?php echo date('d-m-Y');?></td>
    </tr>
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
        <td colspan="3">   <?php echo $this->session->userdata('memberusername');
		?>
        <input type="hidden" name="memberid" value=" <?php echo $this->session->userdata('memberid');
		?>"readonly></td>
    </tr>
	<tr>
		<td colspan="4" ><center><input type="submit" value="บันทึก">	<input type="reset" value="ยกเลิก"></center></td>
	</tr>
    <?php }?>
</table></center>
	<!--<a href='/index.php/CusControl/index'>กลับหน้าหลัก</a></center>-->
</body>
</html>
