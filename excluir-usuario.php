<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM usuarios WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: todos-usuarios.php?status=sucesso");

?>