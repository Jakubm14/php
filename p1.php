<html>
<head>
<body>
<h2> PHP </h2>
<?php
$los = 0;
$lotto = [];
for ($i=1; $i<=6; $i++)
{
  do
  {
    $x = rand(1, 49);
    $nastepna = true;
    for ($j=1; $j<=$los; $j++)
    {
      if ($x == $lotto[$j]) $nastepna = false;
    }
    if ($nastepna == true)
    {
      $los++;
      $lotto[$los] = $x;
    }
  }
  while($nastepna!=true);
}
for ($i=1; $i<=6; $i++) echo $lotto[$i].",";
?>

<br>
<br>
<h2> HTML </h2>
<script>
<center>
los = 0
lotto = []
for (i=1; i<=6; i++)
{
  do
  {
    x = Math.floor((Math.random()*49)+1);
    nastepna = true;
    for (j=1; j<=los; j++)
    {
      if (x == lotto[j]) nastepna = false;
    }
    if (nastepna == true)
    {
      los++;
      lotto[los] = x;
    }
  }
  while(nastepna!=true);
}
for (i=1; i<=6; i++) document.write(lotto[i]+",");
</center>
</script>
</body>
</html>