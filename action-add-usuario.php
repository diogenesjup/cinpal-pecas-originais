<?php 

require("conexao.php");


$nome = $_POST["nome"];
$username = $_POST["username"];
$password = $_POST["password"];
$grupo = $_POST["grupo"];


	if($grupo=="admin"):

		$sql = "INSERT INTO usuarios(login, senha, nome, grupo) VALUES(:login, :senha, :nome, :grupo)";
		$stmt = $PDO->prepare( $sql );

		$stmt->bindParam( ':login', $username );
		$stmt->bindParam( ':senha', $password );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':grupo', $grupo );
		 
		$result = $stmt->execute();

	endif;


	if($grupo=="representantes"):

		$grupo = "representantes";

		$sql = "INSERT INTO usuarios(login, senha, nome, grupo) VALUES(:login, :senha, :nome, :grupo)";
		$stmt = $PDO->prepare( $sql );

		$stmt->bindParam( ':login', $username );
		$stmt->bindParam( ':senha', $password );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':grupo', $grupo );

		$result = $stmt->execute();

	endif;

	if($grupo=="representante_comerciais"):

		$grupo = "representantes_comerciais";

		$sql = "INSERT INTO usuarios(login, senha, nome, grupo) VALUES(:login, :senha, :nome, :grupo)";
		$stmt = $PDO->prepare( $sql );

		$stmt->bindParam( ':login', $username );
		$stmt->bindParam( ':senha', $password );
		$stmt->bindParam( ':nome', $nome );
		$stmt->bindParam( ':grupo', $grupo );		
		 
		$result = $stmt->execute();

	endif;


?>