<?php 

require("conexao.php");

$id = $_POST["id"];
$origem = $_POST["origem"];
$agregado = $_POST["agregado"];
$num_original = $_POST["num_original"];
$num_cinpal = $_POST["num_cinpal"];
$denominacao = $_POST["denominacao"];
$modelo = $_POST["modelo"];
$numero_peca = $_POST["numero_peca"];
$posicao = $_POST["posicao"];
$nota = $_POST["nota"];



$data_atualizacao = date("d/m/Y");


$sql = "UPDATE produtos set origem = :origem,
                          agregado = :agregado,
                      num_original = :num_original,
                        num_cinpal = :num_cinpal,
                       denominacao = :denominacao,
                              nota = :nota,
                            modelo = :modelo,
                       numero_peca = :numero_peca,
                           posicao = :posicao  
                          WHERE id = :id";

$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':origem', $origem );
$stmt->bindParam( ':agregado', $agregado );
$stmt->bindParam( ':num_original', $num_original );
$stmt->bindParam( ':num_cinpal', $num_cinpal );
$stmt->bindParam( ':denominacao', $denominacao );
$stmt->bindParam( ':nota', $nota );
$stmt->bindParam( ':modelo', $modelo );
$stmt->bindParam( ':numero_peca', $numero_peca );
$stmt->bindParam( ':posicao', $posicao );
$stmt->bindParam( ':id', $id );


$result = $stmt->execute();

if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}


// VAMOS APROVEITAR QUE ESTAMOS AQUI, E VAMOS LIMPAR A TABELA OS REGISTRO SEM NOME
$proibido = "NNN";
$sql = "DELETE FROM produtos WHERE denominacao = :proibido";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':proibido', $proibido );
 
$result = $stmt->execute();
 



?>