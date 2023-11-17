<?php

require_once 'conn.php';

$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmSenha = $_POST['confirmarSenha'];

if($senha == $confirmSenha){
    $sql = "INSERT INTO usuarios (email,senha) VALUES (?,?)";
    $resultSql = $conn->prepare($sql);
    $resultSql->bindParam(1,$email);
    $resultSql->bindParam(2,$senha);
    $resultSql->execute();
    header("Location:login.php?fail=0");
}
 else{
    header("Location:cadastro.php?fail=1");
}