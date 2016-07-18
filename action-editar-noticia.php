<?php 

require("conexao.php");

$id = $_POST["id"];
$idioma = $_POST["idioma"];
$titulo = $_POST["titulo"];
$resumo = $_POST["resumo"];
$texto = $_POST["texto"];
$seo = $_POST["seo"];

if($idioma=="pt"):

	$sql = "UPDATE noticias_site set titulo = :titulo,
                                     resumo = :resumo,
                                      texto = :texto,
                                        seo = :seo
	                               WHERE id = :id";

	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $id );
	 
	$result = $stmt->execute();

endif;


if($idioma=="en"):

	$sql = "UPDATE noticias_site set titulo_en = :titulo,
                                     resumo_en = :resumo,
                                      texto_en = :texto,
                                        seo_en = :seo
	                                  WHERE id = :id";
	                               
	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $id );
	 
	$result = $stmt->execute();

endif;

if($idioma=="es"):

	$sql = "UPDATE noticias_site set titulo_es = :titulo,
                                     resumo_es = :resumo,
                                      texto_es = :texto,
                                        seo_es = :seo
	                                  WHERE id = :id";
	                               
	$stmt = $PDO->prepare( $sql );

	$stmt->bindParam( ':titulo', $titulo );
	$stmt->bindParam( ':resumo', $resumo );
	$stmt->bindParam( ':texto', $texto );
	$stmt->bindParam( ':seo', $seo );
	$stmt->bindParam( ':id', $id );
	 
	$result = $stmt->execute();

endif;

?>