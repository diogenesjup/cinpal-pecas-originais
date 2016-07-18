<?php 
session_start();
require("conexao.php");


$id_usuario = $_POST["id_usuario"];
$grupo_usuario = $_POST["grupo_usuario"];
$nome = $_POST["nome"];

$username = $_POST["username"];
$password = $_POST["password"];



		$sql = "UPDATE usuarios set login = :login, senha = :senha, nome = :nome WHERE id = :id";
		$stmt = $PDO->prepare( $sql );

		$stmt->bindParam( ':login', $username );
		$stmt->bindParam( ':senha', $password );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':id', $id_usuario );
		 
		$result = $stmt->execute();



?>