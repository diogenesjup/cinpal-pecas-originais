<?php

/* Diretorio que deve ser lido */
require("conexao.php");
$dir = 'server/php/files';
$id = $_GET["id"];

/* Abre o diretório */

$pasta= opendir($dir);

/* Loop para ler os arquivos do diretorio */

while ($arquivo = readdir($pasta)){

/* Verificacao para exibir apenas os arquivos e nao os caminhos para diretorios superiores */

if ($arquivo != '.' && $arquivo != '..' && $arquivo!= ".gitignore" && $arquivo!= ".htaccess" && $arquivo!= "thumbnail"){
$data_nome = date("dmY-his-");
/* Escreve o nome do arquivo na tela */

//echo $arquivo . '<br />';
rename("server/php/files/".$arquivo, "server/php/files/".$data_nome.$arquivo);
$arquivo2 = $data_nome.$arquivo;
$arquivo3 = "images/".$arquivo2;
$status = "R";

$sql = "INSERT INTO fotos(id_origem,foto) VALUES(:id_origem, :foto)";

$stmt = $PDO->prepare( $sql );

$stmt->bindParam( ':id_origem', $id);
$stmt->bindParam( ':foto', $arquivo3);

$result = $stmt->execute();

copy("server/php/files/".$arquivo2, $arquivo3);

unlink("server/php/files/".$arquivo2);

}

}


?>