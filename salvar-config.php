<?php 
session_start();
require("conexao.php");

$username = $_POST["username"];
$password = $_POST["password"];

$id = 1;

$sql = "UPDATE usuarios set username = :login, password = :senha WHERE id = $id";
$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':login', $username );
$stmt->bindParam( ':senha', $password );
 
$result = $stmt->execute();

?>