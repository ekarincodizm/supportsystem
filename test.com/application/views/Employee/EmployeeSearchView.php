<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php echo form_open_multipart('EmployeeCon/searchMember');?>
<body style="text-align: center">
<label for="textfield"></label>
<input type="text" name="membermane" id="membermane">
<input type="submit" name="search" id="search" value="ค้นหา">
 <div class="content">
<table width="100%">
  <tr>
    <th nowrap="nowrap">รหัสลูกค้า</th>
    <th nowrap="nowrap">ชื่อ</th>
    <th nowrap="nowrap">นามสกุล</th>
    <th nowrap="nowrap">เพศ</th>
    <th nowrap="nowrap">ที่อยู่</th>
    <th nowrap="nowrap">เบอร์โทร</th>
	  <th nowrap="nowrap">Username</th>
    <th nowrap="nowrap">Password</th>
    <th nowrap="nowrap">แก้ไข</th>
    <th nowrap="nowrap">ลบ</th>
  </tr>
  
  <?php foreach($listmember as $V){?>
  <tr>
 		 <td>
       <?php echo $V['memberid']?> 
        </td>    
  		<td>
       <?php echo $V['membername']?> 
        </td>    
       <td>
       <?php echo $V['memberlname']?> 
        </td>
     
         <td>
       <?php echo $V['membersex']?> 
        </td>
        <td>
       <?php echo $V['memberaddress']?> 
        </td>    
        <td>
       <?php echo $V['membertel']?> 
        </td>
		 <td>
       <?php echo $V['memberusername']?> 
        </td>    
        <td>
       <?php echo $V['memberpassword']?> 
        </td>
        <td>
       <a class="link" href="<?php echo base_url()."index.php/MemberCon/getPKData/".$V['memberid']?>">Edit</a>
        </td>
         <td>
        <a class="link" href="<?php echo base_url()."index.php/MemberCon/deleteData/".$V['memberid']?>">Delete</a>
        </td>
  </tr>
  <?php }?>
</table>
</body>
</html>