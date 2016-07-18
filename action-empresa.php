<?php 

require("conexao.php");

$chave = 1;
$idioma = $_POST["idioma"];
$texto = $_POST["texto"];
$seo = $_POST["seo"];


if($idioma=="pt"):

	$sql = "UPDATE empresa set texto = :texto, seo = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	
    $stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();

endif;


if($idioma=="en"):

	$sql = "UPDATE empresa set texto_en = :texto, seo_en = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	
    $stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();

endif;

if($idioma=="es"):

	$sql = "UPDATE empresa set texto_es = :texto, seo_es = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	
    $stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();

endif;



?>