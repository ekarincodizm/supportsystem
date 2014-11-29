<table width="80%" class="CSSTableGenerator">
 <tr>
    <th nowrap="nowrap">รหัสลูกค้า</th>
    <th nowrap="nowrap">ชื่อ</th>
    <th nowrap="nowrap">นามสกุล</th>
    <th nowrap="nowrap">ที่อยู่</th>
    <th nowrap="nowrap">เบอร์โทร</th>
    <th nowrap="nowrap">QR-CODE</th>
    <th nowrap="nowrap">แก้ไข</th>
    <th nowrap="nowrap">ลบ</th>
  </tr>
  <?php foreach($listcustomer as $V){?>
  <tr>
 		 <td>
       <?php echo $V['cusid']?> 
        </td> 
  		<td>
       <?php echo $V['cusname']?> 
        </td>
      
       <td>
       <?php echo $V['cuslname']?> 
        </td>     
         <td>
       <?php echo $V['cusaddress']?> 
        </td> 
        <td>
       <?php echo $V['custel']?> 
        </td>      
        <td>
       <?php echo $V['cusqrcodeid']?> 
        </td>   
        <td>
       <a class="link" href="<?php echo base_url()."index.php/HomeCustomer/getPKData/".$V['cusid']?>">Edit</a>
        </td>
         <td>
        <a class="menu" href="<?php echo base_url()."index.php/HomeCustomer/deleteData/".$V['cusid']?>">Delete</a>
       </td>
  </tr>
  <?php }?>
  </table>