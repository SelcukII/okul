	<?php
$sayi1=0;
$sayi2=0;
$topla=0;
 
if(isset($_POST["add"]))
{
	$sayi1=$_POST["sayi1"];
	$sayi2=$_POST["sayi2"];
	$topla=$sayi1+$sayi2;
}
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP HAFTA 1 </title>

	<style type="text/css">
		body{
			background-color: #f1f1f1;
		}
		.form1{ float: left; margin-top:2%; margin-left:38.5%; border: 5px dotted #f1f1f1;  padding: 50px; background-color: #fff;}
		#topla{ font-size: 24px; font-weight:bold;}
		#buttons{ float: left; text-align: center;  padding: 30px; font-size: 24px; margin-left: 60px;}
		#inputcss{ padding: 25px;  font-size: 18px;}
		#sonuc{ float: left; margin-left: 75px; }
	
	</style>
</head>
<body>

	<div class="form1"><form method="post">
		<input type="text" name="sayi1" placeholder="sayı 1" style="width:50px;" id="inputcss" value="<?=$sayi1?>">
		<label id="topla">+</label>
		<input type="text" name="sayi2" placeholder="sayı 2" style="width:50px;" id="inputcss" value="<?=$sayi2?>">
		<br /> <br />
		<button type="submit" name="add" value="topla" id="buttons">Topla</button>
		<br />		<br />
		<br />		<br />
		<br />		<br />
		<br />
				<label id="sonuc">Sonuç: <?=$topla?></label>

	</form></div>

</body>
</html>