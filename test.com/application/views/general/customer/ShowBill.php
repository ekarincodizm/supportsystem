<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<p>&nbsp;</p>
<table width="70%" height="296" border="1" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <th colspan="5" nowrap="nowrap" style="font-weight: bold; text-align: center; font-size: 36px;">ใบเสร็จ</th>
  </tr>
  <tr>
    <td colspan="3" style="font-size: 18px"><p><strong>โรงอบลำไยศรีเจริญ</strong> 7/3 ม.2 ต.สันทราย อ.สารภี จ.เชียงใหม่ 50140 โทร.053-429188</p></td>
    <td colspan="2" style="font-size: 18px">เลขที่ใบเสร็จ&nbsp;:&nbsp;<?php echo $listcustomersum['invoiceid']?></td>
  </tr>
  <tr>
    <td colspan="3" style="font-size: 18px">ชื่อ&nbsp;:&nbsp;<?php echo $listcustomersum['cusname']?></td>
    <td colspan="2" style="font-size: 18px">วันที่&nbsp;:&nbsp;<?php echo date('D-M-Y');?></td>
  </tr>
  <tr>
    <th width="37" align="center" bgcolor="#666666" style="font-size: 18px; color: #FFF;">ขนาด</th>
    <th width="66" align="center" bgcolor="#666666" style="font-size: 18px; color: #FFF;">จำนวน/ตะกร้า</th>
    <th width="66" align="center" bgcolor="#666666" style="font-size: 18px; color: #FFF;">จำนวนน้ำหนัก</th>
    <th width="45" align="center" bgcolor="#666666" style="font-size: 18px; color: #FFF;"> ราคา</th>
    <th width="77" align="center" bgcolor="#666666" style="font-size: 18px; color: #FFF;">จำนวนเงิน</th>
  </tr>
  <tr>
    <td style="font-size: 18px">AA</td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeAA'],0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeAA']*27,0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['ratesaa'],2,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format(($listcustomersum['sizeAA']*27)*$listcustomersum['ratesaa'],2,'.',',');?></td>
  </tr>
  <tr>
    <td style="font-size: 18px">A</td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeA'],0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeA']*27,0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['ratesa'],2,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format(($listcustomersum['sizeA']*27)*$listcustomersum['ratesa'],2,'.',',');?></td>
  </tr>
  <tr>
    <td style="font-size: 18px">B</td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeB'],0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeB']*27,0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['ratesb'],2,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format(($listcustomersum['sizeB']*27)*$listcustomersum['ratesb'],2,'.',',');?></td>
  </tr>
  <tr>
    <td style="font-size: 18px">C</td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeC'],0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeC']*27,0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['ratesc'],2,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format(($listcustomersum['sizeC']*27)*$listcustomersum['ratesc'],2,'.',',');?></td>
  </tr>
  <tr>
    <td style="font-size: 18px">รวม</td>
    <td align="right" style="font-size: 18px"><?php echo number_format($listcustomersum['sizeAA']+$listcustomersum['sizeA']+
	$listcustomersum['sizeB']+$listcustomersum['sizeC'],0,'.',',');?></td>
    <td align="right" style="font-size: 18px"><?php echo number_format(($listcustomersum['sizeAA']*27)+($listcustomersum['sizeA']*27)+
	($listcustomersum['sizeB']*27)+($listcustomersum['sizeC']*27),0,'.',',');?></td>
    <td colspan="2" align="right" style="font-size: 18px"><font color="#FF0000"><?php 
	echo number_format( 
	(($listcustomersum['sizeAA']*27)*$listcustomersum['ratesaa'])
	+(($listcustomersum['sizeA']*27)*$listcustomersum['ratesa'])
	+(($listcustomersum['sizeB']*27)*$listcustomersum['ratesb'])
	+(($listcustomersum['sizeC']*27)*$listcustomersum['ratesc'])
	,2,'.',',');?></font>    </td>
  </tr>
   <tr>
    <td style="font-size: 18px">จำนวนเงิน</td>
    <td colspan="4" style="font-size: 18px">&nbsp;</td>
  </tr>
  <tr>
    <td style="font-size: 18px">ผู้จ่าย</td>
    <td colspan="4" style="font-size: 18px">&nbsp;</td>
  </tr>
</table>
</body>
</html>