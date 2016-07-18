<?php 

session_start();

require("conexao.php");

$username = $_POST["username"];
$password = $_POST["password"];

$aux=FALSE;

$sql = "SELECT * FROM usuarios";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_usuarios = count($linha);

$i = 0;

while($i<$tot_usuarios):

	if($linha[$i]["login"]==$username && $linha[$i]["senha"]==$password):

		$aux=TRUE;

		$_SESSION["admin"]="logado";
		$_SESSION["nome"]=$linha[$i]["nome"];
		$_SESSION["grupo"]=$linha[$i]["grupo"];
		$_SESSION["id_usuario"]=$linha[$i]["id"];

	endif;

	$i++;

endwhile;


if($aux==FALSE):
        $sql = "SELECT * FROM representantes";
		$result = $PDO->query( $sql );
		$linha = $result->fetchAll( PDO::FETCH_ASSOC );
         
        $tot_representates = count($linha);

        $i = 0;

        while($i<$tot_representates):

				if($linha[$i]["login"]==$username && $linha[$i]["senha"]==$password):

					$aux=TRUE;

					$_SESSION["admin"]="logado";
					$_SESSION["nome"]=$linha[$i]["nome"];
					$_SESSION["grupo"]="representantes";
					$_SESSION["id_usuario"]=$linha[$i]["id"];

				endif;

				$i++;

		endwhile;
endif;

if($aux==FALSE):
        $sql = "SELECT * FROM representantes_comerciais";
		$result = $PDO->query( $sql );
		$linha = $result->fetchAll( PDO::FETCH_ASSOC );

		$tot_representates_comerciais = count($linha);

		$i = 0;

		while($i<$tot_representates_comerciais):


				if($linha[$i]["login"]==$username && $linha[$i]["senha"]==$password):

					$aux=TRUE;

					$_SESSION["admin"]="logado";
					$_SESSION["nome"]=$linha[$i]["nome"];
					$_SESSION["grupo"]="representantes_comerciais";
					$_SESSION["id_usuario"]=$linha[$i]["id"];

				endif;

				$i++;

		endwhile;
endif;


if($aux==FALSE):
        $sql = "SELECT * FROM consumidores";
		$result = $PDO->query( $sql );
		$linha = $result->fetchAll( PDO::FETCH_ASSOC );

		$tot_representates_comerciais = count($linha);

		$i = 0;

		while($i<$tot_representates_comerciais):


				if($linha[$i]["login"]==$username && $linha[$i]["senha"]==$password):

					$aux=TRUE;

					$_SESSION["admin"]="logado";
					$_SESSION["nome"]=$linha[$i]["nome"];
					$_SESSION["grupo"]="representantes_comerciais";
					$_SESSION["id_usuario"]=$linha[$i]["id"];

				endif;

				$i++;

		endwhile;
endif;


if($aux==FALSE):
     Header("Location: index.php?login=invalido");
endif;
if($aux==TRUE):
     Header("Location: dashboard.php");
endif;


?>