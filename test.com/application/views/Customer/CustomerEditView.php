<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">

<form action="<?php echo base_url();?>index.php/CustomerCon/updateData" method="post">
<?php foreach($listcustomer as $V){?>
<table>
<tr>
  <td colspan="2"><center><h2>เพิ่มข้อมูลลูกค้า</h2></center></td>
</tr>
  <tr>
 	 <input type="hidden" name="cusid" required value="<?php echo $V ['cusid']?>"></td>
    <td>นามสกุล:
    <td>ชื่อ:
      <input type="text" name="cusname" required value="<?php echo $V ['cusname']?>"></td>
    <td>นามสกุล:
      <input type="text" name="cuslname" value="<?php echo $V ['cuslname']?>"></td>
  </tr>
  <tr>
    <td>ที่อยู่:
      <input type="text" name="cusaddress" value="<?php echo $V ['cusaddress']?>"></td>
    <td>เบอร์โทร
      <input type="text" name="custel" value="<?php echo $V ['custel']?>"></td>
  </tr>
  <tr>
    <td>รหัส QR-Code
      <input type="text" name="cusqrcodeid" value="<?php echo $V ['cusqrcodeid']?>"></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
    </tr>
</table>
<?php }?>
</form>
</body>
</html>


