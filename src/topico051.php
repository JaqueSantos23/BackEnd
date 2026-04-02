<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Par - Imapr</h1>
    <form method="post" action="">
        Digite um numero <input type="number" id="num" name="num" required><br>
        <input type="submit" value="Verficar!">
    </form>
</body>
<?php
if(count($_POST)==0) exit;
$num=$_POST["num"];
$res=($num%2==0)?"PAR":"IMPAR";

echo "$num é $res";
?>
</html>