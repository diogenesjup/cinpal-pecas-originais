<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM noticias_site WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: noticias.php?status=sucesso");

?>