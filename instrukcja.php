<html lang="pl">
<head>
<title>kurs PHP</title>
<meta charset="utf-8">

</head>

<body>
<a href="index.php">index</a><br>
<center>
<h2>Instrukcje sterujace</h2>
</center>
<h4>instrukcja warunkowa</h4>

<form action=' ' method="POST">
<p>Oceń remont w skali od 0 - 5 <input type="naumber" name="rem"</p>
<p><input type="reset" value="Wyczyść"> <input type="submit" value= "Wyślij"></p>
</form>
<?php

$remont=$_POST["rem"];
if($remont<0 || $remont>5){
	echo"wprowadź poprawną wartość";
}
else if($remont>3){
	echo"Chłopakom udało się naprawić gniazdko";
	
}
else if($remont>1 && $remont<5){
	echo"Remont poszedł tak sobie ;\ co działało to działa ..... ";
}
else{
	echo"Gniazdka dalej niesprawne. :(";
}


?>

<h4>instrukcje switch</h4>
<p>instrukcja <b>switch</b> makonstrukcje i działanie nanologiczne do JS. Patrz pliki JS.</p>

<h4>Operator warunkowy</h4>
<p>Operator warunkowy działa na podobieństwo instrukcji if...else; Zwraca jedna z dwóch wartości. Jego konstrukcja to:
<br>Warunek? wartość1:wartość2;
przykład:</p>

<pre>
$w=5;
$wynik=($w<0) ? "liczba ujemna" :"liczba dodatnia";
echo $w." to ".$wynik;
</pre>

<?php
$w=5;
$wynik=($w<0) ? "liczba ujemna" :"liczba dodatnia";
echo $w." to ".$wynik;
?>

<h4>Pętla for</h4>
<p>Konstrukcja pętli for w PHP jest taka sama jak w JS:<br>
for(wyrażenie początkowe;warunek;wyraznie modyfikujące){
	instrukcje;
}<br />
W pętlach jako dodatowe narzędzia, często wykorzystuje się instrukcje if...else.
</p>

<pre>
$p=2;
for($i=1; $i<=15; $i++;){
	echo "2< sup>".$i."</ sup> = ".$p."< br>";
	$p=($p*2);
}
</pre>

<?php
$p=2;
for($i=1; $i<=15; $i++){
	echo "2<sup>".$i."</sup> = ".$p."<br>";
	$p=($p*2);
}
?>

<p>trójkąt</p>
<pre>
for($a=0;$a<10; $a++){
	echo"* ";
}
</pre>

<?php
for($a=0;$a<10; $a++){
	for($b=0;$b<$a; $b++){
echo"* ";
	}
	echo"<br>";
}
?>
<br>
<?php
for($a=0;$a<10; $a++){
	for($b=0;$b<=10; $b++){
echo"* ";
	}
	echo"<br>";
}
?>
<br>

<?php
$l=rand(1, 50);
echo"losowa $l<br>";
?>
<br>
<?php
$t=0;
for($s=0; $s<=10; $s++)
{
	if($t>0){
		echo"liczba dodatnia ";
	}else{
		echo"liczba ujemna ";
	}
	$l=rand(-10, 20);
	echo"losowa $l<br>";
	$t=$t+$l;
}
echo"suma wylosowanych liczb= " .$t;

?>

<h3>Pętla While</h3>
<p>Pętla ma taką samą konstrukcje jak w JS.</p>

<pre>
x=0;
while(x<120){
echo"x wynosi: ".x.'<br>';
x+=6;
}
</p>

<?php
$x = 0;
while($x<120){
echo"x wynosi: ".$x.'<br>';
$x+=6;
}
?>

<h4>petla do....while</h4>

<?php
$los=rand(1,15);
$z=rand(1,15);
$i=1;
if($los==$z){
	echo"trafiony zatopiony!!";
}else{
do{
	echo "trafione za: ".$i.' razem.<br>';
	$z=rand(1, 15);
	$i++;
}while($los!=$z);
}

?>
<p>Zad 1</p>
<p>a)</p>
<?php
$nauka = array("j.polski", "j.angielski", "j.niemiecki", "matematyka", "informatyka", "aplikacje klienckie", "aplikacje serwerowe", "sieci komp.", "utk", "wf", "praktyka zawodowa", "systemy operacyjne", "tw. stat. stron internetowych");
$dl = count($nauka);
for($i = 0; $i < $dl; $i++){
	if(($i%2)!=1){
		echo $nauka[$i], ", ";
	}
}
?>
<p>b)</p>
<?php
$nauka = array("j.polski", "j.angielski", "j.niemiecki", "matematyka", "informatyka", "aplikacje klienckie", "aplikacje serwerowe", "sieci komp.", "utk", "wf", "praktyka zawodowa", "systemy operacyjne", "tw. stat. stron internetowych");
foreach($nauka as $przedmiot){
	echo $przedmiot;
	echo "<br>";
}
?>

<p>Zad 2</p>

<?php
$city = array(
	"Warszawa" => "1,7mln",
	"Berlin" => "3,8mln",
	"Paryż" => "2,2mln",
	"Madryt" => "3,2mln",
	"Praga" => "1,3mln",
	"Bratysława" => "420tys",
	"Oslo" => "670tys",
	"Sztokholm" => "980tys"
	);
foreach($city as $klucz => $wartosc){
	echo "$klucz - $wartosc";
	echo "<br>";
}
?>

</body>
</html>