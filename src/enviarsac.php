<h1>Recebe</h1>
<?php

echo "<pre>"; print_r($_POST); echo "</pre>";

$Nome=$_POST["nome"];
$Email=$_POST["email"];
$Assunto=$_POST["assunto"];
$Mensagem=$_POST["mensagem"];

echo "Nome: <b>$nome</b><br>";
echo "Email: <b>$email</b><br>";
echo "Assunto: <b>$assunto</b><br>";
echo "Mensagem: <b>$mensagem</b><br>";
?>

