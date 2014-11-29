<script type="text/javascript" src="<?php echo base_url()?>js/jquery-1.11.1.min.js"></script>
<script>
function calsum(thisValue){
		var sumwage = document.getElementById('sumwagesave').value;
		var cuswage = document.getElementsByClassName('cuswage');
	 var sum = 0;
for (var i = 0; i < cuswage.length; ++i) {
    if (typeof cuswage[i].value !== "undefined") {

		 
		  sum += parseFloat(cuswage[i].value);
      }
    }

	if(sumwage-sum>=0){
	   document.getElementById('sumwage').value = sumwage-sum;
	  $('#sumwagecus').val(sum);
	}else{
		alert('กรุณาใส่จำนวนที่ถูกต้อง');
	}
	
	if(sum==sumwage){
		$('#button').css('display','none');
		$('#submit').css('display','block');
	}else{
		$('#button').css('display','block');
		$('#submit').css('display','none');
	}
	

		
	}
function savevalue(){
	 document.getElementById('sumwagesave').value =  document.getElementById('sumwage').value;
	
	 if(document.getElementById('sumwage').value>0){
	 $('#result').html(document.getElementById('sumwage').value+" กิโลกรัม");
	 }else{
		  $('#tablecus').css('display','none'); 
		  $('#result').html("");
	 	alert('กรุณาใส่ค่าที่มากว่า 0');
	 }
	
}
</script>
<style>
#tablecus{
	display:none;
}
</style>
<body onload="savevalue();">
<form action="<?php echo base_url() ?>index.php/homeEmployee/addQucta" method="post" >

<table width="522" height="77" border="1" align="center">
  <tr>
    <td width="96">เพิ่มน้ำหนัก</td>
    <td width="146">
    <input type="text" name="sumwage" id="sumwage" value="<?php echo $sumWage[0]['quctaweight'];?>" />
    <input type="button" name="button2" id="button2" value="ยืนยัน" onClick="savevalue();">
</td>
    <td width="56">กิโลกรัม</td>
    <td><a id="result"></a><input type="hidden" name="sumwagesave" id="sumwagesave"  /></td>
  </tr>
  <tr>
    <td>จำนวนที่ได้</td>
    <td>
    <input type="text" name="sumwagecus" id="sumwagecus" readonly/></td>
    <td>กิโลกรัม</td>
    <td>วันที่&nbsp;<?php echo date('d-m-Y')?></td>
  </tr>
</table>
<table width="522" height="77" border="1" align="center" id="tablecus">
  <tr>
    <th width="100" scope="col">ชื่อลูกค้า</th>
    <th width="125" scope="col">จำนวนโค้วต้าที่ผ่านมา</th>
    <th width="125" scope="col">จำนวนที่ได้</th>
    <th width="144" scope="col">โควต้ารายวัน</th>
  </tr>
  <?php foreach ($listmember as $l){ ?>
  <tr>
    <td><input type="hidden" name="cusid[]" class="cusid" value="<?php echo $l['cusid'];?>" /><?php echo $l['cusname'];?></td>
    <td><?php
	if($l['weighty']){
	 echo $l['weighty'];
	}else{
		echo '0';
	}
	?></td>
    <td></td>
    <td>
    <input type="number" name="cuswage[]" class="cuswage" onKeyUp="calsum();" value="0"  /></td>
  </tr>
  <?php }?>
   <tr>
    <td colspan="4" style="text-align: center"><input type="button" name="button" id="button" value="บันทึก" disabled/>
    <input type="submit" name="submit" id="submit" value="บันทึก" style="display:none"/>
    </td>
  </tr>
</table>
</form>
</body>