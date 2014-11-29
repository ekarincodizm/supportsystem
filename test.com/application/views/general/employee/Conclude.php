<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php for($a=0 ; $a<count($invoice) ; $a++){
	if($invoice[$a]){
		$data = $invoice[$a];
	?>
<table width="1029" height="91" border="5" align="center">
  <tr bgcolor="#FFE7CE">
    <th width="66" rowspan="2" bgcolor="#BA7474" scope="col"><h4>วันที่</h4></th>
    <th width="133" rowspan="2" bgcolor="#BA7474" scope="col"><h4>ชื่อลูกค้า</h4></th>
    <th width="75" height="35" bgcolor="#BA7474" scope="col"><h4>AA</h4></th>
    <th width="68" rowspan="2" bgcolor="#BA7474" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#BA7474" scope="col"><h4>A</h4></th>
    <th width="69" rowspan="2" bgcolor="#BA7474" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="72" bgcolor="#BA7474" scope="col"><h4>B</h4></th>
    <th width="70" rowspan="2" bgcolor="#BA7474" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#BA7474" scope="col"><h4>C</h4></th>
    <th width="69" rowspan="2" bgcolor="#BA7474" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="83" rowspan="2" bgcolor="#BA7474" scope="col"><h4>นำหนักรวม    (กิโลกรัม)</h4></th>
    <th width="100" rowspan="2" bgcolor="#BA7474" scope="col"><h4>จำนวนเงินรวม    (บาท)</h4></th>
  </tr>
  <tr>
    <td height="24" bgcolor="#BA7474"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#BA7474"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#BA7474"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#BA7474"><h4>ขนาด/กก.</h4></td>
  </tr>
  <?php foreach($data as $i){?>
  <tr bgcolor="#FFECD9">
    <td height="22"><h5><strong><?php echo $i['invoicedate'];?></strong></h5></td>
    <td><h5><strong><?php echo $i['cusname'].' '.$i['cuslname'];?></strong></h5></td>
    <td align="center"><h5><strong><?php echo $i['AA']*27;?></strong></h5></td>
    <td align="right"><h5><strong><?php echo  number_format($i['ratesaa']*$i['AA']*27,2,'.',',');?></strong></h5></td>
    <td align="center"><h5><strong><?php echo $i['A']*27;?></strong></h5></td>
    <td align="right"><h5><strong><?php echo  number_format($i['ratesa']*$i['A']*27,2,'.',',');?></strong></h5></td>
    <td align="center"><h5><strong><?php echo $i['B']*27;?></strong></h5></td>
    <td align="right"><h5><strong><?php echo  number_format($i['ratesb']*$i['B']*27,2,'.',',');?></strong></h5></td>
    <td align="center"><h5><strong><?php echo $i['C']*27;?></strong></h5></td>
    <td align="right"><h5><strong><?php echo 	number_format($i['ratesc']*$i['C']*27,2,'.',',');?></strong></h5></td>
    <td align="center"><h5><strong><?php echo($i['AA']*27)+($i['A']*27)+($i['B']*27)+($i['C']*27);?></strong></h5></td>
    <td align="right"><h5><strong><?php echo number_format(
	
	($i['ratesaa']*$i['AA'])+($i['ratesa']*$i['A'])+($i['ratesb']*$i['B'])+($i['ratesc']*$i['C']),2,'.',',');?></strong></h5></td>
  </tr>
  <?php } ?>
</table>
<br><br>
 <?php }} ?>
</body>
</html>