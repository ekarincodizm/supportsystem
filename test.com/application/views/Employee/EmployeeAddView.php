<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">

<form action="<?php echo base_url();?>index.php/MemberCon/add" method="post">
<table>
<tr>
  <td colspan="2"><center><h2>เพิ่มข้อมูลพนักงาน</h2></center></td>
</tr>
  <tr>
    <td>ชื่อ:
      <input type="text" name="membername" required></td>
    <td>นามสกุล:
      <input type="text" name="memberlname"></td>
  </tr>
   <tr>
    <td>เพศ
     <input type="text" name="membersex"></td>
	 <td>ที่อยู่:
     <input type="text" name="memberaddress"></td>
  </tr>
  <tr>
  <td>เบอร์โทร
      <input type="text" name="membertel"></td>
    <td>Username:
      <input type="text" name="memberusername"></td>
  </tr>
   <tr>
   <td>Password
      <input type="text" name="memberpassword"></td>
    <td>Status:
      <input type="text" name="memberstatus"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
    </tr>
</table>
</form>
</body>
</html>


