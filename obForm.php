<html lang="pl">
<head>
<title>formularze</title>
<meta charset="utf-8">
<link rel="steelsheet" href="st.css">
</head>
<body>
<a href="poletroj.php">zad</a><br>
<h2>Obsługa formularzy</h2>
<form action="" method="POST">
<p>Nazwisko:</p>
<input type="text" name="naz"><br>
<p>Imię:</p>
<input type="text" name="im"><br>
<p>Płeć:</p>
<input type="radio" name="pl" value="Kobieta"> Kobieta <br>
<input type="radio" name="pl" value="Mężczyzna"> Mężczyzna <br>
<br>
<input type="submit" value="Wyślij dane">&nbsp&nbsp&nbsp
<input type="reset" value="Anuluj">

</form> 

<?php
$na=$_POST['naz'];
$i=$_POST['im'];
$p=$_POST['pl'];
 
echo "Wprowadziłeś dane:<br>";
echo "Nazwisko: $na <br>";
echo "Imię: $i <br>";
echo "Płeć: $p";
?>																			   

<h4>Obliczanie pola trójkąta</h4>
<form action="poletroj.php" method="POST">

<p>Podstawa Trójkąta</p>
<input type="number" name="pod"><br>
<p>Wysokość trójkąta: </p>
<input type="number" name="h"><br>
<input type="submit" value="Wyślij dane">&nbsp&nbsp&nbsp
<input type="reset" value="Anuluj">

</form>




</body>
</html>