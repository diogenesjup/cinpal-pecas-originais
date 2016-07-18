<?php 

require("conexao.php");

$titulo = $_POST["titulo"];
$codigo = $_POST["codigo"];

$sql = "INSERT INTO modelos(titulo,codigo) VALUES(:titulo, :codigo)";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':titulo', $titulo );
$stmt->bindParam( ':codigo', $codigo );
 
$result = $stmt->execute();

$sql = "SELECT * FROM modelos ORDER BY id DESC LIMIT 1";
$result = $PDO->query( $sql );
$modelos = $result->fetchAll( PDO::FETCH_ASSOC );

$idModelo = $modelos[0]["id"];
 
header("Location: ver-modelo.php?id=$idModelo");

?>