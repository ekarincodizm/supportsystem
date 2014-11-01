<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">

<form action="<?php echo base_url();?>index.php/MemberCon/addPrice" method="post">
<table>
<tr>
  <td colspan="2"><center><h2>เพิ่มข้อมูลราคารายวัน</h2></center></td>
</tr>
  <tr>
    <td>AA
      <input type="text" name="ratesaa" required></td>
  </tr>
  <tr>
    <td>A
      <input type="text" name="ratesa"></td>
  </tr>
  <tr>
    <td>B
      <input type="text" name="ratesb"></td>
  </tr>
  <tr>
    <td>C
      <input type="text" name="ratesc"></td>
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="add" value="เพิ่ม"></td>
    </tr>
</table>
</form>
</body>
</html>


