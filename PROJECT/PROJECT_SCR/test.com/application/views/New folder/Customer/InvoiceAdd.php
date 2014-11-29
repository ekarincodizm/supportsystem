<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<title>บันทึกการรับซื้อ</title>	
</head>
<body>
<?php echo form_open_multipart('CustomerCon/addInvoice');?>
<center><table >
<!--
	<tr>

		<td colspan="2"><b>เลขที่ใบเสร็จ</b></td>
        <td> <input type="hidden" name="invoiceid" value="" readonly></td>
	</tr>
    -->
    <?php foreach($listcustomer as $s){?>
	<tr>
		<td><b>ชื่อ</b></td><input type="hidden" name="cusid" value="<?php echo $s['cusid'];?> " >
		<td><input type="text" name="cusname" value="<?php echo $s['cusname'];?> <?php echo $s['cuslname'];?>"readonly ></td>
        <td><b>วันที่</b></td>
        <td><?php echo date('d-m-Y');?></td>
	</tr>
	<tr>
		<td><b>AA</b></td>
		<td><input type="text" name="aa"> </td>
        <td></td>
	</tr>
	<tr>
		<td><b>A</b></td>
		<td><input type="text" name="a"></td>
        <td></td>
	</tr>
		<tr>
		<td><b>B</b></td>
		<td><input type="text" name="b"></td>
        <td></td>
	
    </tr>
		<tr>
		<td><b>C</b></td>
		<td><input type="text" name="c"></td>
        <td></td>
	
	<tr>
		 <td><b>ชื่อผู้รับ</b></td>
        <td><input type="hidden" name="memberid" value=""readonly><input type="text" name="membername" value="<?php echo $s['membername'];?> " ></td>
        <td></td>
	</tr>
	<tr>
		<td colspan="3" ><center><input type="submit" value="บันทึก">	<input type="reset" value="ยกเลิก"></center></td>
	</tr>
    <?php }?>
</table></center>
	<!--<a href='/index.php/CusControl/index'>กลับหน้าหลัก</a></center>-->
</body>
</html>
