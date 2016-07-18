<?php 

require("conexao.php");

$num_origem = $_POST["num_origem"];
$descricao = $_POST["descricao"];

$sql = "INSERT INTO origem(origem, descricao) VALUES(:origem, :descricao)";
$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':origem', $num_origem );
$stmt->bindParam( ':descricao', $descricao );
 
$result = $stmt->execute();

?>