<!DOCTYPE HTML>
<HTML Lang='id-ID'>
	<head>
		<!--Title-->
			<title>Web_Blog</title>
		<!--end!-->
		<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
			<!--url_icon-->
		  <link href='img/icon.png' rel='SHORTCUT ICON'/>
		  <!--end!-->
		  
		
		<!--Style-->
			<link href="style/stylelog.css" rel="stylesheet" type="text/css"/>
			<link href="style/menu.css" rel="stylesheet" type="text/css"/>
		<!--end!-->
		<!--Js-->
		<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
		<!--Ajax!-->
		<script type="text/javascript" src="js/ajax.js"></script>
		<!--end!-->
		
		<script type="text/javascript">
		$(document).ready(function() {
		$(".s").click(function(){
		$(".s2").fadeToggle();
		});
		});
		</script> 

		
		<!--end-->
	</head>
		<!--Main-->
			<body onload="sendRequest('php/beranda.php','konten');">
				<div id="wrapper">
					
					<div id="head">
					
								<div class="headicon">
									<img src="img/Blog-WeBlog.png" class="icon"/>
								</div>
								
								<?php include"php/menu.php"?>
								<div id="clear" style="clear:both"></div>
					</div>
					<div class="s">
				</div>
				<div class="s2">
				<?php include"php/menukat.php"?>
				</div>
					<div id="tengah">
						<div id="konten">
							
						</div>
					</div>
					
					
					<div id="clear" style="clear:both"></div>
				</div>
				</div>
			</body>
		<!--end!-->
</HTML>
