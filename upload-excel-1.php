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
                        
                        // 0 = Tipo de Aplicação 
						// 1 = Aplicação
						// 2 = Item Figura
						// 3 = Nº Cinpal
						// 4 = Código
						// 5 = Descrição
						// 6 = Grupo
						// 7 = Arquivo Foto
						// 8 = Lançamento
						// 9 = Data Lançamento
						// 10 = Lançamento Válido Até

						for ($row = 2; $row < $highestRow; $row++) {
                            
							for($coluna=0; $coluna<=13; $coluna++){			
                                        
                                        

										$param_1 = $objWorksheet->getCellByColumnAndRow(0, $row)->getValue();
										$param_2 = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue();
										$param_3 = $objWorksheet->getCellByColumnAndRow(2, $row)->getValue();
										$param_4 = $objWorksheet->getCellByColumnAndRow(3, $row)->getValue();
										$param_5 = $objWorksheet->getCellByColumnAndRow(4, $row)->getValue();
										$param_6 = $objWorksheet->getCellByColumnAndRow(5, $row)->getValue();
										$param_7 = $objWorksheet->getCellByColumnAndRow(6, $row)->getValue();
										$param_8 = $objWorksheet->getCellByColumnAndRow(7, $row)->getValue();
										$param_9 = $objWorksheet->getCellByColumnAndRow(8, $row)->getValue();
										$param_10 = $objWorksheet->getCellByColumnAndRow(9, $row)->getValue();
										$param_11 = $objWorksheet->getCellByColumnAndRow(10, $row)->getValue();		

										if($param_1 == ""): $param_1 = "n/a"; endif;
										if($param_2 == ""): $param_2 = "n/a"; endif;
										if($param_3 == ""): $param_3 = "n/a"; endif;
										if($param_4 == ""): $param_4 = "n/a"; endif;
										if($param_5 == ""): $param_5 = "n/a"; endif;
										if($param_6 == ""): $param_6 = "n/a"; endif;
										if($param_7 == ""): $param_7 = "n/a"; endif;
										if($param_8 == ""): $param_8 = "n/a"; endif;
										if($param_9 == ""): $param_9 = "n/a"; endif;
										if($param_10 == ""): $param_10 = "n/a"; endif;
										if($param_11 == ""): $param_11 = "n/a"; endif;

										$data_cadastro = date("d/m/Y");

										$sql = "INSERT INTO produtos(num_cinpal,codigo,descricao,grupo,lancamento,data_lancemento,lancamento_valido,tipo_aplicacao,aplicacao,data_cadastro) 
										VALUES(:num_cinpal,:codigo,:descricao,:grupo,:lancamento,:data_lancemento,:lancamento_valido,:tipo_aplicacao,:aplicacao,:data_cadastro)";

										$stmt = $PDO->prepare( $sql );

					                    $stmt->bindParam( ':num_cinpal', $param_4);
					                    $stmt->bindParam( ':codigo', $param_5);
					                    $stmt->bindParam( ':descricao', $param_6);
					                    $stmt->bindParam( ':grupo', $param_7);
					                    $stmt->bindParam( ':lancamento', $param_9);
					                    $stmt->bindParam( ':data_lancemento', $param_10);
					                    $stmt->bindParam( ':lancamento_valido', $param_11);
					                    $stmt->bindParam( ':tipo_aplicacao', $param_1);
					                    $stmt->bindParam( ':aplicacao', $param_2);
					                    $stmt->bindParam( ':data_cadastro', $data_cadastro);	

						    }

						    $result = $stmt->execute();

						    if ( ! $result )
{
    var_dump( $stmt->errorInfo() );
    exit;
}



						}

                    
                    echo "<br><div class='alert alert-success'><b>Tabela enviada, produtos cadastrados com sucesso!</b></div><p><a href='importar-produtos-2.php' class='btn btn-primary'>importar tabela <b>Produtos x Aplicações x Veículos</b></a></p>";
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