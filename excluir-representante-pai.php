<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "DELETE FROM representantes WHERE id = :id";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();

header("Location: representantes-pai.php?status=sucesso");

?>