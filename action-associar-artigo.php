<?php 

require("conexao.php");

$id = $_POST["id"];

$artigos = "";

foreach($_POST["artigos"] as $nome_projeto_base) {

   $artigos = $artigos.$nome_projeto_base."###";

}

$sql = "UPDATE produtos set artigos = :artigos WHERE id = :id";
$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':artigos', $artigos );
$stmt->bindParam( ':id', $id );
 
$result = $stmt->execute();



?>