<?php 

require("conexao.php");

$id = $_GET["id"];
$id_produto = $_GET["id_produto"];

$sql = "DELETE FROM videos WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: editar-produto.php?id=$id_produto&video=apagado");

?>