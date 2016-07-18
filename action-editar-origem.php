<?php 

require("conexao.php");

$id_origem = $_POST["id_origem"];
$num_origem = $_POST["num_origem"];
$descricao = $_POST["descricao"];

$sql = "UPDATE origem set origem = :origem, descricao = :descricao WHERE id = :id";
$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':origem', $num_origem );
$stmt->bindParam( ':descricao', $descricao );
$stmt->bindParam( ':id', $id_origem );
 
$result = $stmt->execute();
?>