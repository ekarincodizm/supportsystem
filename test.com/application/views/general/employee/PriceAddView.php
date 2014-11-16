<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="<?php echo base_url()?>css/table.css">
<form action="<?php echo base_url();?>index.php/HomeEmployee/addPrice" method="post">
<center><table width="264" border="1" class="CSSTableGenerator ">
<tr>
  <td height="23" colspan="2"><font color="#FFFFFF"><center><h3>เพิ่มข้อมูลราคารายวัน</h3></center></font></td>
</tr>
  <tr>
  <td width="24" style="font-weight: bold">AA</td>
    <td width="224"> <input type="text" name="ratesaa" required size="15">
    บาท</td>
  </tr>
  <tr>
  <td style="font-weight: bold">A</td>
    <td><span style="text-align: center"></span><input type="text" name="ratesa" size="15">
      <span style="text-align: right">บาท</span></td>
  </tr>
  <tr>
  <td style="font-weight: bold">B</td>
    <td> <input type="text" name="ratesb" size="15">
      บาท</td>
  </tr>
  <tr>
  <td style="font-weight: bold">C</td>
    <td><input type="text" name="ratesc" size="15">
      บาท</td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><input type="submit" name="add" value="เพิ่ม" class="fancyboxMagChildent"></td>
    </tr>
</table></center>
</form>
</body>
</html>


