<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="522" height="77" border="1">
  <tr>
    <th colspan="2" style="text-align: left" scope="col">เพิ่มน้ำหนัก:
      <label for="textfield8"></label>
    <input type="text" name="textfield4" id="textfield8" /></th>
    <th width="126" style="text-align: left" scope="col">กิโลกรัม</th>
    <th width="134" style="text-align: left" scope="col">วันที่</th>
  </tr>
  <tr>
    <td width="100" style="text-align: center"> ชื่อลูกค้า</td>
    <th width="134" scope="col">จำนวนโค้วต้าที่ผ่านมา</th>
    <th scope="col">จำนวนที่ได้</th>
    <th scope="col">โควต้ารายวัน</th>
  </tr>
  <?php foreach ($listmember as $l){ ?>
  <tr>
    <td><?php echo $l['cusname'];?></td>
    <td><?php echo $l['buyweightNow'];?></td>
    <td>&nbsp;</td>
    <td><?php
	if($l['buyweight']){
	 echo $l['buyweight'];
	}else{
		echo 'ไม่พบข้อมูล';
	}
	?></td>
  </tr>
  <?php }?>
  </table>
   <tr>
    <td colspan="4" style="text-align: center"><input type="submit" name="button" id="button" value="พิมพ์" /></td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>