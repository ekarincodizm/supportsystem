<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
 <link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<form action="<?php echo base_url();?>index.php/HomeEmployee/add" method="post">
<table class="CSSTableGenerator ">
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
      <select name="membersex" size="1" id="select">
        <option value="หญิง">หญิง</option>
        <option value="ชาย">ชาย</option>
      </select></td>
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
      <label for="select2"></label>
      <select name="select2" size="1" id="select2">
        <option value="memberstatus">Owner</option>
        <option value="memberstatus">Employee</option>
      </select></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
    </tr>
</table>
<label for="select"></label>
</form>
</body>
</html>


