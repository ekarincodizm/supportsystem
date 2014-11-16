<table width="80%" class="CSSTableGenerator ">
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
       <a class="link" href="<?php echo base_url()."index.php/homeEmployee/getPKData/".$V['memberid']?>">Edit</a>
        </td>
         <td>
        <a class="link" href="<?php echo base_url()."index.php/homeEmployee/deleteData/".$V['memberid']?>">Delete</a>
        </td>
  </tr>
  <?php }?>
</table>