<?php 

require("conexao.php");

$id = $_POST["id_usuario"];
$nome = $_POST["nome"];
$username = $_POST["username"];
$password = $_POST["password"];
$grupo = $_POST["grupo"];

		$sql = "UPDATE usuarios set login = :login, senha = :senha, nome = :nome, grupo = :grupo WHERE id = :id";
		$stmt = $PDO->prepare( $sql );

		$stmt->bindParam( ':login', $username );
		$stmt->bindParam( ':senha', $password );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':grupo', $grupo );
		$stmt->bindParam( ':id', $id );
		 
		$result = $stmt->execute();
?>