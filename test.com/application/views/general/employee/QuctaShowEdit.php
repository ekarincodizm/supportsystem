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

</style>
<body onLoad="savevalue();">
<form action="<?php echo base_url() ?>index.php/homeEmployee/updateQucta" method="post" >

<table width="522" height="77" border="1" align="center">
  <tr>
    <td width="96">เพิ่มน้ำหนัก</td>
    <td width="146">
    <input type="hidden" name="id" id="id" value="<?php echo $now[0]['sumweightid'];?>"  />
    <input type="text" name="sumwage" id="sumwage" value="<?php echo $now[0]['quctaweight'];?>"  />
    <input type="button" name="button2" id="button2" value="ยืนยัน" onClick="savevalue();">
</td>
    <td width="56">กิโลกรัม</td>
    <td><a id="result"></a><input type="hidden" name="sumwagesave" id="sumwagesave" value="<?php echo $now[0]['quctaweight'];?>"  /></td>
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
    <td width="100" style="text-align: center"> ชื่อลูกค้า</td>
    <th width="134" scope="col">จำนวนโค้วต้าที่ผ่านมา</th>
    <th scope="col">จำนวนที่ได้</th>
    <th scope="col">โควต้ารายวัน</th>
  </tr>
  <?php foreach ($cus as $c){ ?>
  <tr>
    <td>
	
<?php echo $c['cusname'];?>
 <input type="hidden" name="cusid[]" class="cusid" value="<?php echo $c['cusid'];?>" />
 <?php foreach($now as $n){ 
 
 		if($n['cusid']==$c['cusid']){?>
        
 <input type="hidden" name="quctaid[]" class="quctaid" value="<?php echo $n['quctaid'];?>" />
 
 <?php }
 }?>
 
 </td>
    <td>
    	<?php
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
					
						$sum= $inIn['sizeAA'];
						$sum= $sum+$inIn['sizeA'];
						$sum= $sum+$inIn['sizeB'];
						$sum= $sum+$inIn['sizeC'];
						
					}
			 }
			 if($inIn['quctaid']==$y['quctaid']){
			
			 }
	
	} echo $sum;
	?>
    </td>
    <td> 
     <?php foreach($now as $n){ 
 
 		if($n['cusid']==$c['cusid']){?>
        
 <input name="cuswage[]" type="text" class="cuswage" onKeyUp="calsum();" value="<?php echo $n['buyweight'];?>" size="5"  />
 
 <?php } 
	 }?>
 </td>
  </tr>
  <?php }?>
  </table>

 <tr>
    <td colspan="4" style="text-align: center"><input type="button" name="button" id="button" value="บันทึก" disabled/>
    <input type="submit" name="submit" id="submit" value="บันทึก" style="display:none"/>
    </td>
  </tr>
</table>
</form>
<p>&nbsp;</p>
</body>