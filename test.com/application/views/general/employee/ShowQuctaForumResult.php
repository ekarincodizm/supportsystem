<table width="80%" align="center"  class="CSSTableGenerator ">
  <tr>
    <th nowrap="nowrap" bgcolor="#996633">รหัสลูกค้า</th>
    <th nowrap="nowrap" bgcolor="#996633">ชื่อ</th>
    <th nowrap="nowrap" bgcolor="#996633">นามสกุล</th>
    <th nowrap="nowrap" bgcolor="#996633">กราฟแสดงสถิติโควต้า</th>
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
       <a class="fancyboxMagChildent" href="<?php echo base_url()."index.php/HomeEmployee/forumQucta/".$V['cusid']?>">กราฟแสดงสถิติโควต้า<img src="<?php echo base_url()?>img/9.jpg" width="25" style="margin-top:-10px;margin-bottom:-5px"/></a>
        </td>
  </tr>
  <?php }?>
</table>