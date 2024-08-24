<head>
<title>formularze</title>
<meta charset="utf-8">
<link rel="steelsheet" href="st.css">
</head>
<body>
<a href="plik2.php">zad</a><br>
<form action="" method="POST">
<p>Imię:</p>
<input type="text" name="naz"><br>
<p>Nazwisko:</p>
<input type="text" name="im"><br>
<p>wiek:</p>
<input type="text" name="wi"><br>
<br>
<input type="submit" value="Wyślij dane">&nbsp&nbsp&nbsp
<input type="reset" value="Anuluj">

</form> 

<?php
$i=$_POST['im'];
$na=$_POST['naz'];
$wiek=$_POST['wi'];
 
echo "Wprowadziłeś dane:<br>";
echo "Nazwisko: $na <br>";
echo "Imię: $i <br>";
echo "Wiek: $wiek";
?>																			   

</body>
</html>