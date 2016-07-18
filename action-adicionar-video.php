<?php 

require("conexao.php");

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$iframe = $_POST["iframe"];

$sql = "INSERT INTO videos(id_origem,tipo,iframe) VALUES(:id_origem, :tipo, :iframe)";

$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':id_origem', $id );
$stmt->bindParam( ':tipo', $titulo );
$stmt->bindParam( ':iframe', $iframe );
 
$result = $stmt->execute();

?>