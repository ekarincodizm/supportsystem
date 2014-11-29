<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<form action="<?php echo base_url();?>index.php/HomeEmployee/updateData" method="post">
<?php foreach($listmember as $V){?>
<table class="CSSTableGenerator ">
<tr>
  <td colspan="2"><center><h2>แก้ไขข้อมูลพนักงาน</h2></center></td>
</tr>
	 <input type="hidden" name="memberid" required value="<?php echo $V ['memberid']?>"></td>
  <tr>
    <td>ชื่อ:
      <input type="text" name="membername" required value="<?php echo $V ['membername']?>"></td>
    <td>นามสกุล:
      <input type="text" name="memberlname" value="<?php echo $V ['memberlname']?>"></td>
  </tr>
   <tr>
    <td>เพศ
     <input type="text" name="membersex" value="<?php echo $V ['membersex']?>"></td>
	 <td>ที่อยู่:
     <input type="text" name="memberaddress" value="<?php echo $V ['memberaddress']?>"></td>
  </tr>
  <tr>
  <td>เบอร์โทร
      <input type="text" name="membertel" value="<?php echo $V ['membertel']?>"></td>
    <td>Username:
      <input type="text" name="memberusername" value="<?php echo $V ['memberusername']?>"></td>
  </tr>
   <tr>
   <td>Password
      <input type="text" name="memberpassword" value="<?php echo $V ['memberpassword']?>"></td>
    <td>Status:
      <input type="text" name="memberstatus" value="<?php echo $V ['memberstatus']?>"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
    </tr>
</table>
</form>
<?php }?>
</form>
</body>
</html>


