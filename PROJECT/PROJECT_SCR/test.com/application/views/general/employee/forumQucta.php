<html>
  <head>
    <script type="text/javascript" src="/js/jsapi.js"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
		//var i=1500;
		//var res = arra.split(" ");
		var weigthAll = strweigthAll.split(",");//ตัดคำจากตัวแปร day โดยช่องว่าง" "แล้วเก็บให้อยู่ในรูปแบบ Array ในตัวแปร dayTh
		var buyweight = strbuyweight.split(",");//ตัดคำจากตัวแปร amount โดยช่องว่าง" "แล้วเก็บให้อยู่ในรูปแบบ Array ในตัวแปร arrAmount
		var sumweightdate = strsumweightdate.split(",");
		
		var arr14 = parseInt(weigthAll[14]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr13 = parseInt(weigthAll[13]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr12 =  parseInt(weigthAll[12]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr11 = parseInt(weigthAll[11]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr10 = parseInt(weigthAll[10]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr9 = parseInt(weigthAll[9]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr8 = parseInt(weigthAll[8]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr7 = parseInt(weigthAll[7]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr6 = parseInt(weigthAll[6]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var arr5 = parseInt(weigthAll[5]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
        var arr4 = parseInt(weigthAll[4]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
        var arr3 = parseInt(weigthAll[3]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[3] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr3
		var arr2 = parseInt(weigthAll[2]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[2] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr2
		var arr1 = parseInt(weigthAll[1]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[1] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr1
		var arr0 = parseInt(weigthAll[0]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[0] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr0
		
		
		var line14 = parseInt(buyweight[14]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line13 = parseInt(buyweight[13]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line12 =  parseInt(buyweight[12]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line11 = parseInt(buyweight[11]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line10 = parseInt(buyweight[10]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line9 = parseInt(buyweight[9]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line8 = parseInt(buyweight[8]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line7 = parseInt(buyweight[7]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line6 = parseInt(buyweight[6]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
		var line5 = parseInt(buyweight[5]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
        var line4 = parseInt(buyweight[4]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
        var line3 = parseInt(buyweight[3]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[3] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr3
		var line2 = parseInt(buyweight[2]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[2] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr2
		var line1 = parseInt(buyweight[1]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[1] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr1
		var line0 = parseInt(buyweight[0]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrnow[0] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr0
        var data = google.visualization.arrayToDataTable([//เรียกใช้ google.visualization โดยกำหนดให้ arrayToDataTable มีข้อมูล ตามที่กำหนด
          ['วัน', 'จำนวนที่ได้','โควต้า'],//กำหนดข้อมูล รายการ ที่จะใช้แสดง
          [sumweightdate[14],  	arr14,     line14],
          [sumweightdate[13],  	arr13,     line13],
		  [sumweightdate[12],  	arr12,     line12],
		  [sumweightdate[11], 	arr11,     line11],
		  [sumweightdate[10],  	arr10,     line10],
		  [sumweightdate[9],  	arr9,     line9],
		  [sumweightdate[8],  	arr8,     line8],
		  [sumweightdate[7],  	arr7,     line7],
		  [sumweightdate[6],  	arr6,     line6],
		  [sumweightdate[5],  	arr5,     line5],
		  [sumweightdate[4],  	arr4,     line4],
		  [sumweightdate[3],  	arr3,     line3],
		  [sumweightdate[2],  	arr2,     line2],
		  [sumweightdate[1],  	arr1,     line1],
		  [sumweightdate[0],  	arr0,     line0],
        ]);

        var options = {
        title: title//title
        };

        var chart = new google.visualization.LineChart(document.getElementById('chart_div'));//เก็บ div ที่จะใช้แสดงที่ชื่อว่า chart_div อยู่ในตัวแปร chart
		
        chart.draw(data, options);//เรียกใช้ chart
      }
    </script>
  </head>
  <body>
  <table>
  	<tr>
   		<td><div id="chart_div" style="width: 900px; height: 500px;"></div></td>
    </tr>
    </table>
    <?php
    	echo '<script type="text/javascript">';
		echo "var title = '$title';";// ส่งค่า $day จาก PHP ไปยังตัวแปร day ของ Javascrip
		echo "var strweigthAll = '$strweigthAll';";// ส่งค่า $day จาก PHP ไปยังตัวแปร day ของ Javascrip
		echo "var strbuyweight = '$strbuyweight';";// ส่งค่า $amount จาก PHP ไปยังตัวแปร amount ของ Javascript
		echo "var strsumweightdate = '$strsumweightdate';";// ส่งค่า $amount จาก PHP ไปยังตัวแปร amount ของ Javascript
		//echo "var buyAmount = '$buyAmount';";// ส่งค่า $buyAmount จาก PHP ไปยังตัวแปร buyAmount ของ Javascript
  		echo '</script>';
		?>
  </body>
</html>