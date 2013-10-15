<?php
include_once("ckeygen.php");
$xpto=new ckeygen;
?>
<html>
	
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
		<title>
			EuroMilhoes
		</title>
		<link rel="stylesheet" href="em-style.css"/>
	</head>
	
	<body>
		<h1>EuroMilhões - KEY</h1>
		<?php 
		echo "<h1>olá</h1>";
		?>	
		<!--<ul class="number">
			
			  
			 <?php
			echo $xpto->key2UL("numbers",$xpto->numbers);
			
			?>
	
	    </ul>	
		<ul class="stars">
			<?php
			//echo $xpto->key2UL("stars",$xpto->stars);
			?>
			
		</ul>
		-->
		
		<?php
		echo $xpto->keyAsHTML();
		$xpto->genKey();
		echo $xpto->keyAsHTML();
		?>
		
	</body>
	
	</html>