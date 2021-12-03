<?php
include ('conexao.php');

$nome = $_POST['nome'];
$data = $_POST['data'];
$data = date('Y-d-m', strtotime($data));
$peso = $_POST['peso'];
$altura = $_POST['altura'];
$resultsexo = $_POST['genero'];

// echo "seu nome $nome sua data de nascimento $data seu peso $peso e $altura de sexo  ";

function calcula_obesidade_h($peso, $altura)
{
    return $peso / ($altura ^ 2);
};

$massa = number_format(calcula_obesidade_h($peso, $altura));

if ($massa <= 17) {
    $mensagem = "Muito abaixo do peso";
} elseif (($massa > 17) and ($massa <= 18.49)) {
    $mensagem = "Abaixo do peso";
} elseif (($massa > 18.49) and ($massa <= 24.99)) {
    $mensagem = "Peso Normal";
} elseif (($massa > 24.99) and ($massa <= 29.99)) {
    $mensagem = "Acima do Peso";
} elseif (($massa > 29.99) and ($massa <= 34.99)) {
    $mensagem = "Obesidade I";
} elseif (($massa > 34.99) and ($massa <= 39.99)) {
    $mensagem = "Obesidade II (severa)";
} else {
    $mensagem = "Obesidade III (mórbida)";
};



// echo "Sua Massa Corporal é: <b> $massa </b><br>";
// echo "Estado Atual: <b> $mensagem</b><br>";
// echo $resultsexo;

$resultcadastro = "INSERT INTO usuarios (nome , nascimento , sexo, peso, altura,imc) VALUES ('$nome','$data','$resultsexo','$peso','$altura','$massa')";
$resultBanco = mysqli_query($conn, $resultcadastro);

// require_once "resultado.php";

?>
