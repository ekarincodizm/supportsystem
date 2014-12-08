
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="52%" align="center" valign="top" scope="col"><center><table width="288" height="329" border="5">
  <tr bgcolor="#9999FF">
    <td colspan="2" style="text-align: center; font-weight: bold; font-size: 24px;">ใบส่งของรวม</td>
  </tr>
  <tr bgcolor="#FFECF5">
    <td bgcolor="#9999FF" style="font-weight: bold">ชื่อ:<?php echo $listcustomersum['cusname']?> </td>
    <td bgcolor="#9999FF" style="font-weight: bold">วันที่:<?php echo $listcustomersum['invoicedate']?> </td>
  </tr>
  <tr>
    <td bgcolor="#9999FF" style="text-align: center; font-weight: bold;">ขนาด</td>
   <td bgcolor="#9999FF" style="text-align: center; font-weight: bold;">จำนวน/ตะกร้า</td>
  </tr>
  <tr bgcolor="#FFECF5">
    <td style="text-align: center; font-weight: bold;">AA</td>
    <td align="center"><?php echo $listcustomersum['sizeAA']?> </td>
  </tr>
  <tr bgcolor="#FFECF5">
    <td style="text-align: center; font-weight: bold;">A </td>
    <td align="center"><?php echo $listcustomersum['sizeA']?></td>
  </tr>
  <tr bgcolor="#FFECF5">
    <td style="text-align: center; font-weight: bold;">B </td>
    <td align="center"><?php echo $listcustomersum['sizeB']?></td>
  </tr>
  <tr bgcolor="#FFECF5">
    <td style="text-align: center; font-weight: bold;">C </td>
    <td align="center"><?php echo $listcustomersum['sizeC']?></td>
  </tr>
  <tr bgcolor="#9999FF">
    <td colspan="2"><center><a class="popupbill" href="<?php echo base_url()?>index.php/homeCustomer/bill/<?php echo $listcustomersum['cusid']?>"><input type="button" name="button" id="button" value="ออกใบเสร็จ" /></a></center></td>
   
  </tr>
</table></center></th>
    <th width="48%" align="center" valign="top" scope="col"><?php foreach($listcustomer as $V){?>
<center><table width="406" height="329" border="1">
  <tr bgcolor="#FFCC99">
    <td colspan="2" style="text-align: center; font-weight: bold; font-size: 24px;">ใบส่งของ</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td width="244" bgcolor="#FFCC99"><strong>โรงอบลำไยศรีเจริญ</strong> 7/3 ม.2 ต.สันทราย อ.สารภี จ.เชียงใหม่ โทร.053-429188</td>
    <td width="146" bgcolor="#FFCC99" style="font-weight: bold">เลขที่ใบส่งของ:<?php echo $V['invoicedetialid']?> </td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td bgcolor="#FFCC99" style="font-weight: bold">ชื่อ:<?php echo $V['cusname']?> </td>
    <td bgcolor="#FFCC99" style="font-weight: bold">วันที่:<?php echo $V['invoicedate']?> </td>
  </tr>
  <tr>
    <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">ขนาด</td>
   <td bgcolor="#FFFFCC" style="text-align: center; font-weight: bold;">จำนวน/ตะกร้า</td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td style="text-align: center; font-weight: bold;">AA</td>
    <td align="center"><?php echo $V['sizeAA']?> </td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td style="text-align: center; font-weight: bold;">A </td>
    <td align="center"><?php echo $V['sizeA']?></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td style="text-align: center; font-weight: bold;">B </td>
    <td align="center"><?php echo $V['sizeB']?></td>
  </tr>
  <tr bgcolor="#FFFFCC">
    <td style="text-align: center; font-weight: bold;">C </td>
    <td align="center"><?php echo $V['sizeC']?></td>
  </tr>
  <tr bgcolor="#FFCC99">
    <td colspan="2" style="font-weight: bold">ชื่อผู้รับ:<?php echo $V['memberid']?> </td>
  </tr>
</table></center>
<p>&nbsp;</p>
<?php } ?></th>
  </tr>
</table>

