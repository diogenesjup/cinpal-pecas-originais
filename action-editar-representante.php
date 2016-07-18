<?php 

require("conexao.php");


$id = $_POST["id"];
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


$sql = "UPDATE representantes set nome = :nome,
                                 email = :email,
                              telefone = :telefone,
                                   cpf = :cpf,
                              endereco = :endereco,
                                cidade = :cidade,
                                estado = :estado,
                                  pais = :pais,
                                 login = :login,
                                 senha = :senha
                              WHERE id = :id";

$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':nome', $nome );
$stmt->bindParam( ':email', $email );
$stmt->bindParam( ':telefone', $telefone );
$stmt->bindParam( ':cpf', $cpf );
$stmt->bindParam( ':endereco', $endereco );
$stmt->bindParam( ':cidade', $cidade );
$stmt->bindParam( ':estado', $estado );
$stmt->bindParam( ':pais', $pais );
$stmt->bindParam( ':login', $username );
$stmt->bindParam( ':senha', $password );
$stmt->bindParam( ':id', $id );

$result = $stmt->execute();

?>