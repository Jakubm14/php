<html lang="pl">
<head>
<title>zadanie</title>
<meta charset="utf-8">
</head>
<body>



<p>Formularz: </p>
<form action ="" method = "post">
Imię: <br>
<input type="text" name="Imie" value=" " size="25"><br>
Wzrost: <br>
<input type="text" name="Wzrost" value=" " size="25"><br>
Waga: <br>
<input type="text" name="Waga" value=" " size="25"><br>
Wiek: <br>
<input type="text" name="Wiek" value=" " size="25"><br>
<input type="submit" value="wyślij"><br>
<input type="reset" value="odśwież"><br>
</form>

<?php
$x=$_POST['Imie'];
$y=$_POST['Wzrost'];
$z=$_POST['Waga'];
$c=$_POST['Wiek'];
fwrite($x,  );
fwrite($y, );
fclose($x);
fclose($y);

?>

</body>
</html>