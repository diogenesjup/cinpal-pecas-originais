<?php 

require("conexao.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$pais = $_POST["pais"];
$username = $_POST["username"];
$password = $_POST["password"];

$data_cadastro = date("d/m/Y");

$sql = "INSERT INTO representantes_comerciais(nome, email, telefone, cpf,endereco,cidade,estado,pais,login,senha,data_cadastro) VALUES(:nome, :email, :telefone, :cpf, :endereco, :cidade, :estado, :pais, :login, :senha, :data_cadastro)";

$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':nome', $nome);
$stmt->bindParam( ':email', $email);
$stmt->bindParam( ':telefone', $telefone);
$stmt->bindParam( ':cpf', $cpf);
$stmt->bindParam( ':endereco', $endereco);
$stmt->bindParam( ':cidade', $cidade);
$stmt->bindParam( ':estado', $estado);
$stmt->bindParam( ':pais', $pais);
$stmt->bindParam( ':login', $username);
$stmt->bindParam( ':senha', $password);
$stmt->bindParam( ':data_cadastro', $data_cadastro);

$result = $stmt->execute();

?>