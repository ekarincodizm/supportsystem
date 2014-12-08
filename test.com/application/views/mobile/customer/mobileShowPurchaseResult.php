<table width="80%" align="center"  class="CSSTableGenerator ">
  <tr>
    <th nowrap="nowrap" bgcolor="#996633">รหัสลูกค้า</th>
    <th nowrap="nowrap" bgcolor="#996633">ชื่อ</th>
    <th nowrap="nowrap" bgcolor="#996633">นามสกุล</th>
    <th nowrap="nowrap" bgcolor="#996633">ที่อยู่</th>
    <th nowrap="nowrap" bgcolor="#996633">เบอร์โทร</th>
    <th nowrap="nowrap" bgcolor="#996633">QR-CODE</th>
    <th nowrap="nowrap" bgcolor="#996633">เพิ่มข้อมูลการรับซื้อ</th>
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
       <img src="<?php echo base_url().'qrcode/'.$V['cusid'].'.png'?>" width="100" />
        </td>
   
        <td>
       <a class="popup" href="<?php echo base_url()."index.php/mobileCustomer/getPK/".$V['cusid']?>">เพิ่มข้อมูลการรับซื้อ</a>
        </td>
  </tr>
  <?php }?>
</table>