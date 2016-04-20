<?php
	require("conexao.php");
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

include 'Classes/PHPExcel.php';
include 'Classes/PHPExcel/IOFactory.php' ;


	$pasta = "images/";
	/* formatos de imagem permitidos */
	$permitidos = array(".xlsx");
	
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


						$objReader = PHPExcel_IOFactory::createReader('Excel2007');
						$objReader->setReadDataOnly(true);
						$objPHPExcel = $objReader->load("images/".$nome_atual);
						$objWorksheet = $objPHPExcel->getActiveSheet();
						$highestRow = $objWorksheet->getHighestRow();
						$highestColumn = $objWorksheet->getHighestColumn();
						$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);
                        

						// 2 = Montadora
						// 3 = Veículo			
						// 5 = Número Cinpal
						// 6 = Código
						

						for ($row = 2; $row < $highestRow; $row++) {
                            
							for($coluna=0; $coluna<=13; $coluna++){			
                                        
                                        

										
										$param_3 = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
										$param_4 = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
										
										$param_6 = $objWorksheet->getCellByColumnAndRow(5, $row)->getValue();
										$param_7 = $objWorksheet->getCellByColumnAndRow(6, $row)->getValue();
										

										
										if($param_3 == ""): $param_3 = "n/a"; endif;
										if($param_4 == ""): $param_4 = "n/a"; endif;
										
										if($param_6 == ""): $param_6 = "n/a"; endif;
										if($param_7 == ""): $param_7 = "n/a"; endif;
										

										$data_cadastro = date("d/m/Y");

										$sql = "UPDATE produtos set montadora = :montadora,
																      viuculo = :viuculo,																
															 data_atualizacao = :data_atualizacao	
															 WHERE num_cinpal = :num_cinpal AND codigo = :codigo";

																$stmt = $PDO->prepare( $sql );																
																
																$stmt->bindParam( ':montadora', $param_3 );
																$stmt->bindParam( ':viuculo', $param_4 );
																$stmt->bindParam( ':num_cinpal', $param_6 );
																$stmt->bindParam( ':codigo', $param_7 );
																$stmt->bindParam( ':data_atualizacao', $data_cadastro );

						    }

						    $result = $stmt->execute();

						    if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}



						}

                    
                    echo "<br><div class='alert alert-success'><b>Tabela enviada, produtos cadastrados com sucesso!</b></div><p><a href='importar-produtos-3.php' class='btn btn-primary'>importar tabela <b>Produtos x Número de referência</b></a></p>";
					//print_r($objWorksheet);
				}else{
					echo "Falha ao enviar";
				}
			}else{
				echo "O arquivo deve ser de no máximo 50MB";
			}
		}else{
			echo "Somente são aceitos arquivos do tipo <b>.xlsx</b>";
		}
	}else{
		echo "Selecione um arquivo .xlsx";
		exit;
	}	
	
?>