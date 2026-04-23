<?php
$idade = 16;

if ($idade >= 18) {
    echo "Você é maior de idade.";
} else {
    echo "Você é menor de idade.";
}
?>

<hr>
<?php
      
    $semaforo="Verde";

      if($semaforo == "Verde")
       echo "Verde - siga";
      elseif($semaforo == "Amarelo")
        echo "amarelo - atenção";
        elseif($semaforo =="Vermelho") echo "Vermelho - Pare";
      else echo "Cor Desconhecida";
      

echo "<hr>";
       
switch ($semaforo) {
    case "Verde":
        echo "Verde - siga";
        break;
    case "Amarelo":
        echo "Amarelo - Atenção";
        break;
    case "Vermelho":
        echo "Vermelho - Pare";
        break;
        default:
        echo "Cor desconhecida";
}
echo "<hr>";    
$diaSemana = date('w');      // Retorna o dia da semana em número (0-6)

switch ($diaSemana) {
    case 0:
        echo "Domingo";
        break;
    case 1:
        echo "Segunda-feira";
        break;
    case 2:
        echo "Terça-feira";
        break;
    case 3:
        echo "Quarta-feira";
        break;
    case 4:
        echo "Quinta-feira";
        break;
    case 5:
        echo "Sexta-feira";
        break;
    case 6:
        echo "Sábado";
        break;
    default:
        echo "Dia inválido";
}

echo "<hr>";

date_default_timezone_set('America/Sao_Paulo');//(definir) o fuso horário
echo date("d/m/y H:i:s");


?>


<hr>
<?php
      $nome="u";
      echo "nome = $nome";
      echo "<br>MD5 = ".md5($nome);
      $hash = password_hash($nome, PASSWORD_DEFAULT);
      echo "<br>Hash = $hash";
?>