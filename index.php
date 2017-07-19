<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Kurs Mata Uang</title>

<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Form kurs mata uang indonesia,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>



<!-- Meta tag Keywords -->

<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->

<script src="jquery-1.11.1.min.js"></script>

<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Play:400,700&amp;subset=cyrillic,cyrillic-ext,greek,latin-ext" rel="stylesheet">
<!--//online-fonts -->

<!--import java script-->
<script type="text/javascript" src="https://localhost/web/js/jq-cilbut.js"></script>

</head>
<body>

<!--header-->
<div class="agileheader">
	<h1>FORM KURS MATA UANG INDONESIA</h1>
</div>
<!--//header-->

<!--main-->
<div class="main-w3l">
	<div class="w3layouts-main">
		<h2>Kurs nilai tukar uang</h2>
		<h6>___________________________</h6>
		<p>Kurs mata uang untuk mengetahui nilai tukar uang dolar kedalam mata uang rupiah .</p>
		<div class="grid-icons">
		</div>
	</div>
	<div class="banner-right-agile">
			<div class="banner-text">
				<h3>Kurs Mata Uang Indonesia</h3>
				<form action="http://localhost/web/json/json.php" method="POST">
					<select id="bank" name="bank" onchange="kursUang();" onclick="tes();">
						
					</select>
				</form>

				<div id="loading"><img src="http://localhost/web/images/loading.gif" /></div>

				<div id="banktampil" > </div>
			</div>

			
	</div>
	<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3l">
	<p>&copy; 2017 Pemrograman Platform. All rights reserved | Design by <a href="http://w3layouts.com">Kelompok 4</a></p>
</div>
<!--//footer-->

<script>

	
	
function tes(){
		$.ajax({
			url:"json/json.php",
			method:"POST",
			data:"bank="+$("#bank").val(),
			success:function(response){
				$("#loading").hide();

				$("#banktampil").html(response);
			}
		});
}
	function kursUang(){
		var url = $("#bank").val();
		$.ajax({
			url:url,
			method:"POST",
			data:"",
			success:function(response){
				console.log(response);

			},
			beforeSend:function(){
							$("#loading").show();

			 console.log(" Memuat data");
			}
		});
	}
	
	//memilih pilihan bank
	$.ajax({
		url:"json/",
		method:"POST",
		data:"",
		success:function(response){
			$("#loading").hide();

			var pilihanbank="";
				var data = response.data;
				for(var i=0;i<data.length;i++){
					pilihanbank += '<option value="'+data[i].bank+'">'+data[i].bank+'</option>';
				}
				$("#bank").html(pilihanbank);	
				console.log(response);
				//tes();
//$("#banktampil").html(pilihanbank);  
		},
		beforeSend:function(){
			$("#loading").hide();

		 console.log("Sedang Memuat ");
		}
	});

</script>
</body>
</html>