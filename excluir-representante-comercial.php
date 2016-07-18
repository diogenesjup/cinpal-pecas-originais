<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM representantes_comerciais WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: representantes-comerciais.php?status=sucesso");

?>