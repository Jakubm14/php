<html lang="pl">
<head>
<title>zadanie</title>
<meta charset="utf-8">
<link rel="steelsheet" href="st.css">
</head>
<body>
<a href="plik1.php">zadaniedomowe</a><br>

<?php
$d=fopen('dane.txt','r');
while(!feof($d)) {
    $wiersz=fgets($d, 256);
    echo $wiersz."<br>";
}
fclose($d);
?>
</body>
</html>