<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="522" height="77" border="1" align="center">
  <tr>
    <th colspan="2" style="text-align: left" scope="col">น้ำหนักรวมวันนี้้:
     <?php echo $now[0]['quctaweight'];?></th>
    <th width="126" style="text-align: left" scope="col">กิโลกรัม</th>
    <th width="134" style="text-align: left" scope="col">วันที่ <?php echo $now[0]['sumweightdate'];?></th>
  </tr>
  <tr>
    <td width="100" style="text-align: center"> ชื่อลูกค้า</td>
    <th width="134" scope="col">จำนวนโค้วต้าที่ผ่านมา</th>
    <th scope="col">จำนวนที่ได้</th>
    <th scope="col">โควต้ารายวัน</th>
  </tr>
  <?php foreach ($cus as $c){ ?>
  <tr>
    <td><?php echo $c['cusname'];?>
      <input type="hidden" name="cusid[]" class="cusid" value="<?php echo $c['cusid'];?>" />
      <?php foreach($now as $n){ 
 
 		if($n['cusid']==$c['cusid']){?>
      <input type="hidden" name="quctaid[]" class="quctaid" value="<?php echo $n['quctaid'];?>" />
      <?php }
 }?></td>
    <td>    	<?php
	if(count($yesterday)>0){
	 foreach($yesterday as $y){ 
	 	if($y['cusid']==$c['cusid']){
			echo $y['buyweight'];
		 }
		}
	}else{
		echo 'ไม่มีข้อมูล';
	}
	?>
    </td>
    <td>    
<?php
			$sum=0;
	foreach($yesterday as $y){ 
		
			foreach($buy as $inIn){
					if($inIn['quctaid']==$y['quctaid']&&$inIn['cusid']==$c['cusid']){
						$s=0;
						$s=$s+$inIn['sizeAA'];
				
						$s=$s+$inIn['sizeA'];
					
						$s=$s+$inIn['sizeB'];
					
						$s=$s+$inIn['sizeC'];
				
						$sum= $sum+$s;
				
					}
			 }
			 if($inIn['quctaid']==$y['quctaid']){
			
			 }
	
	} echo $sum;
	?></td>
    <td><?php foreach($now as $n){ 
 
 		if($n['cusid']==$c['cusid']){?>
     <?php echo $n['buyweight'];?>
      <?php } 
	 }?></td>
  </tr>
  <?php }?>
  </table>
   <tr>
    <td colspan="4" style="text-align: center"><center><br><input type="submit" name="button" id="button" value="พิมพ์" /></center></td>
</tr>
</table>
<p>&nbsp;</p>
</body>
</html>