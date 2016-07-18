<?php 

require("conexao.php");

$idioma = $_POST["idioma"];
$seo = $_POST["seo"];


$chave = 1;



if($idioma=="pt"):

	$sql = "UPDATE homepage set seo = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();

endif;


if($idioma=="en"):

	$sql = "UPDATE homepage set seo_en = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();
	
endif;


if($idioma=="es"):

	$sql = "UPDATE homepage set seo_es = :seo WHERE id = :id";
	$stmt = $PDO->prepare( $sql );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $chave );
	 
	$result = $stmt->execute();
	
endif;



?>