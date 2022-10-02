
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
		#buttons{ float: left; text-align: center;  padding: 30px; font-size: 24px; margin-left: 50px;}
		#inputcss{ padding: 25px;  font-size: 18px;}
		#sonuc{ float: left; margin-left: 75px; }
		#degerler{ margin-left: 65px; margin-top: 20px; padding: 5px; font-size: 16px;		}
	
	</style>
</head>
<body>

	<div class="form1"><form method="post">
		<input type="text" name="sayi1" placeholder="sayı 1" style="width:50px;" id="inputcss" value="">
		<label id="topla"></label>
		<input type="text" name="sayi2" placeholder="sayı 2" style="width:50px;" id="inputcss" value="">
		<br />
		 <select name="islem" id="degerler">
    <option value="toplama">Toplama</option>
    <option value="cikarma">Çıkarma</option>
    <option value="carpma">Çarpma</option>
    <option value="bolme">Bölme</option>
  </select>
		<br /> <br />
		<button type="submit" name="add" value="topla" id="buttons">Sonuç</button>
		<br />		<br />
		<br />		<br />
		<br />		<br />
		<br />
				<label id="sonuc">Sonuç:</label>

	</form></div>

</body>
</html>