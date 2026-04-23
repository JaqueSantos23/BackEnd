<?php
 $clima2 = "frio";

  print ("Prefiro o calor do que frio<br/>");
  print "Prefiro o calor do que $clima2<br/>";

   echo "<hr>";

$pessoa_fisica = "João Antonio";
$nomeCompleto = "Alfredo Maciel";
$valor = 123456;
$nota = 7.5;
 
echo "<hr>";

#estudar mais sobre este código.
$int1=10;
$int2=010;
$int3=0b10;
$int4=0x10;    

echo"int1=$int1<br>";
echo"int2=$int2<br>";
echo"int3=$int3<br>";
echo"int4=$int4<br>";

echo "<hr>";

$nota=9.75;
$preco=100.50;

echo"Nota = ".$nota;
echo"<br>";
echo"Preço = ".$preco;

echo "<hr>";


$nome="Claudete";
$sobrenome="Maria";

echo"$nome$sobrenome";
echo"<br>";

echo'$nome $sobrenome';

echo "<hr>";


$nome="Bete ";
$sobrenome="de Almeida ";
$idade=25;

$nomeCompleto=$nome.$sobrenome;

echo$nomeCompleto.", você tem ".$idade." anos";


echo "<hr>";
$a = "Bete ";
echo "$a <br>";
$b = "Leo ";
echo "$b <br>";
echo $a . $b;
$b .= $a;
echo "<br>$b"; 

echo "<hr>";
$idade = 22;


if ($idade >= 18) {
    echo "Você é maior de idade.";
}else{
    echo "Voce é menor de idade.";
    }
echo "<hr>";
$idade = 22;
$mensagem = ($idade >= 18) ? "Maior de idade" : "Menor de idade";
echo $mensagem;

echo "<hr>";
$senha = 'minhaSenhaSecreta';
$hash = password_hash($senha, PASSWORD_DEFAULT);
echo $hash;

echo "<hr>";
$senha = 'minhaSenhaSecreta';

// Hash armazenado no banco de dados
$hash_armazenado = password_hash($senha, PASSWORD_DEFAULT);

// Usuário digita a senha
$senha_digitada = 'minhaSenhaSecreta';

// Verifica se a senha está correta
if (password_verify($senha_digitada, $hash_armazenado)) {
    echo 'Senha correta!';
} else {
    echo 'Senha incorreta!';
}
?>
