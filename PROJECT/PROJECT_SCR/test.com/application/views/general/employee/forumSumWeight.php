<html>
  <head>
    <script type="text/javascript" src="/js/jsapi.js"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
		//var i=1500;
		//var res = arra.split(" ");
		var sizetx = size.split(" ");//ตัดคำจากตัวแปร day โดยช่องว่าง" "แล้วเก็บให้อยู่ในรูปแบบ Array ในตัวแปร dayTh
		var arrsum = sum.split(" ");//ตัดคำจากตัวแปร amount โดยช่องว่าง" "แล้วเก็บให้อยู่ในรูปแบบ Array ในตัวแปร arrAmount
		
        var arr4 = parseInt(arrsum[4]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrAmount[4] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr4
        var arr3 = parseInt(arrsum[3]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrAmount[3] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr3
		var arr2 = parseInt(arrsum[2]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrAmount[2] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr2
		var arr1 = parseInt(arrsum[1]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrAmount[1] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr1
		var arr0 = parseInt(arrsum[0]);//แปลงข้อมูลตัวหนังสือจากตัวแปรอาร์เรย์ arrAmount[0] ให้เป็นตัวเลข แล้วเก็บไว้ในตัวแปร arr0
		
        var data = google.visualization.arrayToDataTable([//เรียกใช้ google.visualization โดยกำหนดให้ arrayToDataTable มีข้อมูล ตามที่กำหนด
          ['วัน', 'จำนวนที่ได้'],//กำหนดข้อมูล รายการ ที่จะใช้แสดง
          [sizetx[0],  	arr0,     ],
          [sizetx[1],  	arr1,     ],
		  [sizetx[2],  	arr2,     ],
		  [sizetx[3], 	arr3,     ],
		  [sizetx[4],  	arr4,     ],
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
		echo "var size = '$size';";// ส่งค่า $day จาก PHP ไปยังตัวแปร day ของ Javascrip
		echo "var title = '$title';";// ส่งค่า $day จาก PHP ไปยังตัวแปร day ของ Javascrip
		echo "var sum = '$sum';";// ส่งค่า $amount จาก PHP ไปยังตัวแปร amount ของ Javascript
		//echo "var buyAmount = '$buyAmount';";// ส่งค่า $buyAmount จาก PHP ไปยังตัวแปร buyAmount ของ Javascript
  		echo '</script>';
		?>
  </body>
</html>