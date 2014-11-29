
<table width="100%" height="34" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <th width="52%" align="center" valign="top" scope="col"><center><table width="288" height="329" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-weight: bold; font-size: 24px;">ใบส่งของรวม</td>
  </tr>
  <tr>
    <td style="font-weight: bold">ชื่อ<?php echo $listcustomersum['cusname']?> </td>
    <td style="font-weight: bold">วันที่<?php echo $listcustomersum['invoicedate']?> </td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">AA</td>
    <td><?php echo $listcustomersum['sizeAA']?> </td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">A </td>
    <td><?php echo $listcustomersum['sizeA']?></td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">B </td>
    <td><?php echo $listcustomersum['sizeB']?></td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">C </td>
    <td><?php echo $listcustomersum['sizeC']?></td>
  </tr>
  <tr>
    <td colspan="2"><center><a class="popupbill" href="<?php echo base_url()?>index.php/homeCustomer/bill/<?php echo $listcustomersum['invoiceid']?>"><input type="button" name="button" id="button" value="ออกใบเสร็จ" /></a></center></td>
   
  </tr>
</table></center></th>
    <th width="48%" align="center" valign="top" scope="col"><?php foreach($listcustomer as $V){?>
<center><table width="288" height="329" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-weight: bold; font-size: 24px;">ใบส่งของ</td>
  </tr>
  <tr>
    <td width="175">&nbsp;</td>
    <td width="191" style="font-weight: bold">เลขที่ใบส่งของ<?php echo $V['invoicedetialid']?> </td>
  </tr>
  <tr>
    <td style="font-weight: bold">ชื่อ<?php echo $V['cusname']?> </td>
    <td style="font-weight: bold">วันที่<?php echo $V['invoicedate']?> </td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">AA</td>
    <td><?php echo $V['sizeAA']?> </td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">A </td>
    <td><?php echo $V['sizeA']?></td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">B </td>
    <td><?php echo $V['sizeB']?></td>
  </tr>
  <tr>
    <td style="text-align: center; font-weight: bold;">C </td>
    <td><?php echo $V['sizeC']?></td>
  </tr>
  <tr>
    <td colspan="2" style="font-weight: bold">ชื่อผู้รับ<?php echo $V['memberid']?> </td>
  </tr>
</table></center>
<p>&nbsp;</p>
<?php } ?></th>
  </tr>
</table>

