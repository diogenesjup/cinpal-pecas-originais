<?php
	require("conexao.php");

	$titulo_banner = $_POST["titulo_banner"];
	$titulo_banner_en = $_POST["titulo_banner_en"];
	$titulo_banner_es = $_POST["titulo_banner_es"];
	$subtitulo_banner = $_POST["subtitulo_banner"];
	$subtitulo_banner_en = $_POST["subtitulo_banner_en"];
	$subtitulo_banner_es = $_POST["subtitulo_banner_es"];
	$link_destino = $_POST["link_destino"];

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
			
			if($tamanho < 10240){ //se imagem for até 1MB envia
				$nome_atual = md5(uniqid(time())).$ext; //nome que dará a imagem
				$tmp = $_FILES['imagem']['tmp_name']; //caminho temporário da imagem
				
				/* se enviar a foto, insere o nome da foto no banco de dados */
				if(move_uploaded_file($tmp,$pasta.$nome_atual)){

                    $sql = "INSERT INTO banners(foto,titulo,titulo_en,titulo_es,subtitulo,subtitulo_en,subtitulo_es,link_destino) VALUES(:foto,:titulo,:titulo_en,:titulo_es,:subtitulo,:subtitulo_en,:subtitulo_es,:link_destino)";
					$stmt = $PDO->prepare( $sql );
					
                    $stmt->bindParam( ':foto', $nome_atual );
                    $stmt->bindParam( ':titulo', $titulo_banner );
                    $stmt->bindParam( ':titulo_en', $titulo_banner_en );
                    $stmt->bindParam( ':titulo_es', $titulo_banner_es );
                    $stmt->bindParam( ':subtitulo', $subtitulo_banner );
                    $stmt->bindParam( ':subtitulo_en', $subtitulo_banner_en );
                    $stmt->bindParam( ':subtitulo_es', $subtitulo_banner_es );
                    $stmt->bindParam( ':link_destino', $link_destino );
					 
					$result = $stmt->execute();
                    
                    echo "<img src='images/".$nome_atual."' id='previsualizar' style='margin-bottom:10px;width:50%;padding:5px;border:1px solid #efefef;'>"; //imprime a foto na tela
                    echo "<br><div class='alert alert-success'><b>Imagem do Banner cadastrada com sucesso!</b></div>";
					
				}else{
					echo "Falha ao enviar";
				}
			}else{
				echo "A imagem deve ser de no máximo 50MB";
			}
		}else{
			echo "Somente são aceitos arquivos do tipo Imagem";
		}
	}else{
		echo "Selecione uma imagem";
		exit;
	}	
	
?>