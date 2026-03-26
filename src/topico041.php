<?php
$a=10;
$b=2;
echo "Adição:".($a + $b);
echo "<br>Subtração:".($a - $b);
echo "<br>Multiplicação:".($a * $b);
echo "<br>Divisão:".($a / $b);
echo "<br>Módulo:".($a % $b);
echo "<br>Exponenciação:".($a ** $b);
?>

<hr>
<?php
$a=10;
$b=2;
$a+=$b;
$b-=5;
echo "a = ".$a;
echo "<br>b = ".$b;
$c=11;
$d=6;
$c%=$d; // 11/por 6 da 1, 1*6=6, 6 pra chegar a 11 resta 5. 
$d+=$a;
echo "<br>c = ".$c;
echo "<br>d = ".$d;
$n= "cinco";
$n.=$c;
echo "<br>n = ".$n;
?>
<hr>
<?php
$x = 100;
echo "x ".++$x;
echo "<br>x final =".$x;
echo "<hr>";
$i=10;
// $i+=3; (se colocar assim , o 10 soma e vai direto pro 13)
 $i++;
 $i++;
 ++$i;
echo "<br>i = $i";
$i--;
--$i;
echo "<br>i = $i";
?>
