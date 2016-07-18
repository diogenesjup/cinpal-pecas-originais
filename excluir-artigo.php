<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM artigos WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: artigos.php?status=sucesso");

?>