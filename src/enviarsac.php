<h1>Recebe</h1>
<?php

echo "<pre>"; print_r($_POST); echo "</pre>";

$nome=$_POST["nome"];
$email=$_POST["email"];
$assunto=$_POST["assunto"];
$mensagem=$_POST["mensagem"];

echo "Nome: <b>$nome</b><br>";
echo "Email: <b>$email</b><br>";
echo "Assunto: <b>$assunto</b><br>";
echo "Mensagem: <b>$mensagem</b><br>";
?>

