<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 
	$sumAA[0] = 0;
	 $sumA[0]= 0;
	  $sumB[0] = 0;
	 $sumC[0]= 0;
	 	$sumAA[1] = 0;
	 $sumA[1]= 0;
	  $sumB[1] = 0;
	 $sumC[1]= 0;
	 
	 $sumW[0]= 0;
	 $sumM[0]= 0;
	 $sumW[1]= 0;
	 $sumM[1] = 0;
for($a=0 ; $a<count($invoice) ; $a++){

	if($invoice[$a]){
		$data = $invoice[$a];

	?>
<table width="1029" height="123" border="5" align="center">
  <tr bgcolor="#FFE7CE">
    <th width="66" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>วันที่</h4></th>
    <th width="133" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>ชื่อลูกค้า</h4></th>
    <th width="75" height="35" bgcolor="#FFCC99" scope="col"><h4>AA</h4></th>
    <th width="68" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#FFCC99" scope="col"><h4>A</h4></th>
    <th width="69" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="72" bgcolor="#FFCC99" scope="col"><h4>B</h4></th>
    <th width="70" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#FFCC99" scope="col"><h4>C</h4></th>
    <th width="69" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="83" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>นำหนักรวม    (กิโลกรัม)</h4></th>
    <th width="100" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงินรวม    (บาท)</h4></th>
  </tr>
  <tr>
    <td height="24" bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
  </tr>
  <?php 
  	$sumInAA[0]	= 0;
	 $sumInA[0] =0;
	 $sumInB[0] =0;
	 $sumInC[0]	 = 0;
	 $sumInAA[1] = 0;
	 $sumInA[1] =0;
	 $sumInB[1] =0;
	 $sumInC[1] = 0;
	 
	 $sumInW[0] = 0;
	 $sumInM[0] = 0;
	 
	 $sumInW[1] = 0;
	 $sumInM[1] = 0;
  foreach($data as $i){
	 $sumAA[0] = $sumAA[0]+$i['AA']*27;
	 $sumA[0] = $sumA[0]+$i['A']*27;
	 $sumB[0] = $sumB[0]+$i['B']*27;
	 $sumC[0] = $sumC[0]+$i['C']*27;
	
	 $sumInAA[0] = $sumInAA[0]+$i['AA']*27;
	 $sumInA[0] = $sumInA[0]+$i['A']*27;
	 $sumInB[0] = $sumInB[0]+$i['B']*27;
	 $sumInC[0] = $sumInC[0]+$i['C']*27;
	 
	 $sumAA[1] =  $sumAA[1]+$i['ratesaa']*$i['AA']*27;
	 $sumA[1]=  $sumA[1]+$i['ratesa']*$i['A']*27;
	 $sumB[1] = $sumB[1]+$i['ratesb']*$i['B']*27;
	 $sumC[1]= $sumC[1]+$i['ratesc']*$i['C']*27;
	 $sumInAA[1] = $sumInAA[1]+$i['ratesaa']*$i['AA']*27;
	 $sumInA[1] = $sumInA[1]+$i['ratesa']*$i['A']*27;
	 $sumInB[1] =$sumInB[1]+$i['ratesb']*$i['B']*27;
	 $sumInC[1] = $sumInC[1]+$i['ratesc']*$i['C']*27;
	 
	 $sumInW[0] = $sumInW[0]+($i['AA']*27)+($i['A']*27)+($i['B']*27)+($i['C']*27);
	 $sumInM[0] = $sumInM[0]+($i['ratesaa']*$i['AA']*27)+($i['ratesa']*$i['A']*27)+($i['ratesb']*$i['B']*27)+($i['ratesc']*$i['C']*27);
	 
	 $sumInW[1] = $sumInW[1]+($i['AA']*27)+($i['A']*27)+($i['B']*27)+($i['C']*27);
	 $sumInM[1] = $sumInM[1]+($i['ratesaa']*$i['AA']*27)+($i['ratesa']*$i['A']*27)+($i['ratesb']*$i['B']*27)+($i['ratesc']*$i['C']*27);
	 
	 $sumW[0] = $sumW[0]+($i['AA']*27)+($i['A']*27)+($i['B']*27)+($i['C']*27);
	 $sumM[0] = $sumM[0]+($i['ratesaa']*$i['AA']*27)+($i['ratesa']*$i['A']*27)+($i['ratesb']*$i['B']*27)+($i['ratesc']*$i['C']*27);
	 
	 $sumW[1] = $sumW[1]+($i['AA']*27)+($i['A']*27)+($i['B']*27)+($i['C']*27);
	 $sumM[1] = $sumM[1]+($i['ratesaa']*$i['AA']*27)+($i['ratesa']*$i['A']*27)+($i['ratesb']*$i['B']*27)+($i['ratesc']*$i['C']*27);
	  ?>
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
    <td align="right"><h5><strong><?php echo number_format(($i['ratesaa']*$i['AA']*27)+($i['ratesa']*$i['A']*27)+($i['ratesb']*$i['B']*27)+($i['ratesc']*$i['C']*27),2,'.',',');?></strong></h5></td>
 
  <?php } ?>
   </tr>
    <tr bgcolor="#FFECD9">
    <td height="22">&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><?php echo $sumInAA[0];?></td>
    <td align="right"><?php echo $sumInAA[1];?></td>
    <td align="center"><?php echo $sumInA[0];?></td>
   <td align="right"><?php echo $sumInA[1];?></td>
    <td align="center"><?php echo $sumInB[0];?></td>
   <td align="right"><?php echo $sumInB[1];?></td>
    <td align="center"><?php echo $sumInC[0];?></td>
    <td align="right"><?php echo $sumInC[1];?></td>
    <td align="center"><?php echo $sumInW[0]?></td>
    <td align="right"><?php echo $sumInM[1]?></td>
  </tr>
 
</table>
<br><br>
 <?php }} ?>
 <table width="1029" height="123" border="5" align="center">
  <tr bgcolor="#FFE7CE">
    <!--<th width="66" rowspan="2" bgcolor="#BA7474" scope="col"><h4>วันที่</h4></th>-->
    <th width="133" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>รวมทั้งหมด</h4></th>
    <th width="75" height="35" bgcolor="#FFCC99" scope="col"><h4>AA</h4></th>
    <th width="68" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#FFCC99" scope="col"><h4>A</h4></th>
    <th width="69" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="72" bgcolor="#FFCC99" scope="col"><h4>B</h4></th>
    <th width="70" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="70" bgcolor="#FFCC99" scope="col"><h4>C</h4></th>
    <th width="69" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงิน    (บาท)</h4></th>
    <th width="83" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>นำหนักรวม    (กิโลกรัม)</h4></th>
    <th width="100" rowspan="2" bgcolor="#FFCC99" scope="col"><h4>จำนวนเงินรวม    (บาท)</h4></th>
  </tr>
  <tr>
    <td height="24" bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
    <td bgcolor="#FFCC99"><h4>ขนาด/กก.</h4></td>
  </tr>
   <tr bgcolor="#FFECD9">
    <!--<td height="22">&nbsp;</td>-->
    <td><center>รวมทั้งหมด</center></td>
    <td align="center"><?php echo $sumAA[0];?></td>
    <td align="right"><?php echo $sumAA[1];?></td>
    <td align="center"><?php echo $sumA[0];?></td>
    <td align="right"><?php echo $sumA[1];?></td>
    <td align="center"><?php echo $sumB[0];?></td>
    <td align="right"><?php echo $sumB[1];?></td>
    <td align="center"><?php echo $sumC[0];?></td>
    <td align="right"><?php echo $sumC[1];?></td>
       <td align="center"><?php echo $sumW[0];?></td>
       <td align="right"><?php echo $sumM[1];?></td>
  </tr>
</table>
  <br>
  <center><input type="submit" name="button" id="button" value="พิมพ์" /></center>
   <br>
   <br>
</body>
</html>