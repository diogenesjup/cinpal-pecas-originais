<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM produtos WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: listar-produtos.php?status=sucesso");

?>