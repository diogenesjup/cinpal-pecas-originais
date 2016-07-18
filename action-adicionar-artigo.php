<?php 

require("conexao.php");

$idioma = $_POST["idioma"];
$titulo = $_POST["titulo"];
$resumo = $_POST["resumo"];
$texto = $_POST["texto"];
$seo = $_POST["seo"];
$data = date("d F Y");

if($idioma=="pt"):

	$sql = "INSERT INTO artigos(titulo,resumo,texto,seo,data) VALUES(:titulo,:resumo,:texto,:seo,:data)";
	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':data', $data );
	 
	$result = $stmt->execute();

endif;


if($idioma=="en"):

	$sql = "INSERT INTO artigos(titulo_en,resumo_en,texto_en,seo_en,data) VALUES(:titulo,:resumo,:texto,:seo,:data)";
	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':data', $data );
	 
	$result = $stmt->execute();

endif;

if($idioma=="es"):

	$sql = "INSERT INTO artigos(titulo_es,resumo_es,texto_es,seo_es,data) VALUES(:titulo,:resumo,:texto,:seo,:data)";
	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':data', $data );
	 
	$result = $stmt->execute();

endif;

?>