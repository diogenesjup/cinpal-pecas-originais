<?php
	require("conexao.php");
    
    $id = $_POST["id"];
	$titulo_marca = $_POST["titulo_marca"];
	
	$pasta = "images/";
	/* formatos de imagem permitidos */
	$permitidos = array(".jpg",".jpeg",".gif",".png", ".bmp");
	
	if(isset($_POST)){
		$nome_imagem    = $_FILES['imagem']['name']; 
		$tamanho_imagem = $_FILES['imagem']['size'];
		
		/* pega a extensão do arquivo */
		$ext = strtolower(strrchr($nome_imagem,"."));
		
		/*  verifica se a extensão está entre as extensões permitidas */
		if(in_array($ext,$permitidos)){
			
			/* converte o tamanho para KB */
			$tamanho = round($tamanho_imagem / 10240);
			
			if($tamanho_imagem>0){ //se imagem for até 1MB envia
				$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
				$tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem
				
				/* se enviar a foto, insere o nome da foto no banco de dados */
				if(move_uploaded_file($tmp,$pasta.$nome_atual)){

                   $sql = "UPDATE marcas set nome = :nome,
											 foto = :foto	
								   		 WHERE id = :id";

					$stmt = $PDO->prepare( $sql );
					
					$stmt->bindParam( ':nome', $titulo_marca );
                    $stmt->bindParam( ':foto', $nome_atual );
                    $stmt->bindParam( ':id', $id );
					 
					$result = $stmt->execute();
                    
                    echo "<img src='images/".$nome_atual."' id='previsualizar' style='margin-bottom:10px;max-width:50%;padding:5px;border:1px solid #efefef;'>"; //imprime a foto na tela
                    echo "<br><div class='alert alert-success'><b>Informações atualizadas com sucesso!</b></div>";
					
				}else{
					echo "Falha ao enviar";
				}
			}else{
				



			}
		}else{
			

                    $sql = "UPDATE marcas set nome = :nome	
					  			   		  WHERE id = :id";

					$stmt = $PDO->prepare( $sql );
					
					$stmt->bindParam( ':nome', $titulo_marca );
                    $stmt->bindParam( ':id', $id );
					 
					$result = $stmt->execute();
                    
                    echo "<br><div class='alert alert-success'><b>Informações atualizadas com sucesso!</b></div>";

		}
	}else{
		echo "Selecione uma imagem";
		exit;
	}	
	
?>