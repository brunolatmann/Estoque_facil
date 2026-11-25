<?php

include "config/conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$senha = password_hash($senha, PASSWORD_DEFAULT);

$sql = "Select * from  usuarios
WHERE email = '$email'";

$resultado = $conexao->query($sql);

if ($resultado->rowCount() > 0) {
    echo "Erro: este e-mal já está cadastrado";
}
else{
    $sql= "INSERT INTO usuarios (nome, email, senha)
    VALUES ('$nome','$email', '$senha')";
}
?>