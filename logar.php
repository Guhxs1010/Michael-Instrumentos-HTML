<?php
require_once'conn.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$resultSql = $conn->prepare($sql);
$resultSql->bindParam(1,$email);
$resultSql->execute();

if($resultSql->rowCount() > 0){
    $user = $resultSql->fetch();

    if($senha == $user['senha']){
        session_start();
        $_SESSION['email'] = $user;
        header("Location:perfil.php");
    }
 

} 
?>