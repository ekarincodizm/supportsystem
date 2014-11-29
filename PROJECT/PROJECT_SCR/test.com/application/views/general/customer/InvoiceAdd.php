<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>บันทึกการรับซื้อ</title>	
	 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
</head>
<body>
<?php echo form_open_multipart('HomeCustomer/addInvoice');?>
<br>
<br>
<center><table class="CSSTableGenerator ">
<!--
	<tr>

		<td colspan="2"><b>เลขที่ใบเสร็จ</b></td>
        <td> <input type="hidden" name="invoiceid" value="" readonly></td>
	</tr>
    -->
    <?php foreach($listcustomer as $s){?>
	<tr>
		<td width="35"><b>ชื่อ</b></td><input type="hidden" name="cusid" value="<?php echo $s['cusid'];?> " ><input type="hidden" name="quctaid" value="<?php echo $qucta[0]['quctaid'];?> " ><input type="hidden" name="priceid" value="<?php echo $priceid;?> " >
		<td width="144"><input type="text" name="cusname" value="<?php echo $s['cusname'];?> <?php echo $s['cuslname'];?>"readonly ></td>
        <td width="49" colspan="2"><b>วันที่</b><?php echo date('d-m-Y');?></td>
    </tr>
	<tr>
		<td><b>AA</b></td>
		<td colspan="3"><input type="text" name="aa"> </td>
    </tr>
	<tr>
		<td><b>A</b></td>
		<td colspan="3"><input type="text" name="a"></td>
    </tr>
		<tr>
		<td><b>B</b></td>
		<td colspan="3"><input type="text" name="b"></td>
    </tr>
		<tr>
		<td><b>C</b></td>
		<td colspan="3"><input type="text" name="c"></td>
    <tr>
		 <td><b>ชื่อผู้รับ</b></td>
        <td colspan="3"><input type="hidden" name="empname" value=""readonly></td>
    </tr>
	<tr>
		<td colspan="4" ><center><input type="submit" value="บันทึก">	<input type="reset" value="ยกเลิก"></center></td>
	</tr>
    <?php }?>
</table></center>
	<!--<a href='/index.php/CusControl/index'>กลับหน้าหลัก</a></center>-->
</body>
</html>
