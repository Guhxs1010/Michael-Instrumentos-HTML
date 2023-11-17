<?php
require_once'conn.php';
$dir = "imagens-carregar/";
$file = $_FILES['imagem'];
$destino = "$dir".$file["name"];

move_uploaded_file($file["tmp_name"],$destino );
echo $email = $_POST['email'];

$sql = "UPDATE usuarios SET  imagem=? WHERE email=?";
$resultsql = $conn->prepare($sql);
$resultsql->bindParam(1,$destino);
$resultsql->bindParam(2,$email);
$resultsql->execute();
header("Location:index.php");

?>