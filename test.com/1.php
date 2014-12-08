<!doctype html>
<html><head>
<meta charset="utf-8">
<title>Untitled Document</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
var text='';
var check=0;
var a='';

function dd(){

   $.ajax({
     url:'http://128.199.184.20/index.php/printer/Printers?callback',
   type:'GET',
   dataType:'jsonp', //ตรงนี้ทำให้สามารถ cross domain ได้
   dataCharset:'jsonp',
     success:function(e){
		
		
			
		 a = e.cusname+e.cuslname+e.invoicedate+e.sizeAA+e.sizeA+e.sizeB+e.sizeC;
			
		if(check!=a){	
					$.post( "/tcpdf/index.php", { htmls:a })
						.done(function( data ) {
									$('#l').append('<br>'+data+'<br>');
									
						});
						
						
						
							
				
		}
				
				check=a;

	  }
   })
   				
	  	
	
	
}
setInterval(function(){
	dd();

},5000);
</script>
<style>	 	
.bodys{
	width:1800px;
	margin-top:0;
	margin-left:0;
	margin-right:0;
	margin-bottom:0;
	overflow:hidden;
	-webkit-transition: all ease-in-out 1s; /* Safari 3.1 to 6.0 */
     transition: all ease-in-out 1s;
}

</style>
</head>

<body>

<div class="list">file</div>
<div id="l"></div>
</body>
</html>
