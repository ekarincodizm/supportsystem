<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>jQuery Mobile page</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url()?>css/yess.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.3/jquery.mobile.structure-1.4.3.min.css" /> 
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
  <script src="http://code.jquery.com/mobile/1.4.3/jquery.mobile-1.4.3.min.js"></script> 
  <script>
  $( "#panel" )
    .panel( "open" , optionsHash )
    .then( function( options ){
        $( "#panel" ).panel( "open" , options );
		 $( "#close" ).panel( "close" , options );
    });
  </script>
</head>
<body>
	<div data-role="page" data-theme="a">
     
		<div data-role="header" data-position="inline">
			<h1 >Mobile Support</h1>
		</div>
		<div data-role="content" data-theme="a" align="left">
        
        
        
		  <h2>&nbsp;</h2>
            <form action="<?php echo base_url();?>index.php/mobileCustomer/addInvoiceViewCus" method="post" data-ajax="false" ><table width="61%" height="269" align="center" >
	<tr>
		<td width="9%"><h3>ชื่อ </h3></td>
		<td width="91%"><input name="cusname" type="text" size="60" >
	    <input type="submit" name="search" value="ค้นหา" ></td>
		</tr>
</table>
</form>







</div>
	</div>
</body>
</html>