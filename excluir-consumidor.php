<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM consumidores WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: consumidores.php?status=sucesso");

?>