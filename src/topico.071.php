<?php
echo "<h1>while</h1>";
$i=0;
while($i<10){
    echo " $i";
      $i+=2;
}

/*
saída:
1) qual é o valor inicial? 0
2) condição?  $i<5
3)contador? $i++
4) quantas vezes o looping foi executado? 5 vezes
5)qual o valor que tornou a condição como falsa? 5
--------------------
saida: 11 12 13 14
1) qual é o valor inicial? 11
2) condição?  $i<15
3)contador? $i++
4) quantas vezes o looping foi executado? 4 vezes
5)qual o valor que tornou a condição como falsa? 15
--------------------
saida: 4 3 2 1 0
1) qual é o valor inicial? 4
2) condição?  $i>=0
3)contador? $i--
4) quantas vezes o looping foi executado? 5
5)qual o valor que tornou a condição como falsa? false -1
--------------------
saida: 0
1) qual é o valor inicial? 4
2) condição?  $i<=10
3)contador? $i+=2
4) quantas vezes o looping foi executado? 6
5)qual o valor que tornou a condição como falsa? false 12
*/
echo "<h1>Do While</h1>";
$i=7;
   do{
    echo " $i";
    $i++;
   }while($i<5);

echo "<h1>For</h1>";
      for($i=0;$i<5;$i++)  echo " $i";
/*
echo "<h1>Looping aninhado</h1>";
       for($i=0;$i<3;$j++){
        for($j=0;$j<2;$j++)
        echo "$i $j<br>";
       }
*/

echo "<h1>Looping aninhado</h1>";
       for($i=4;$i<7;$j++){
        for($j=0;$j<3;$j++)
        echo "$i $j<br>";
       }




?>

