<!DOCTYPE html>
<html>
<head>
	<title>Teste import</title>
</head>
<body>


<?php
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);
require("conexao.php");
include 'Classes/PHPExcel.php';
include 'Classes/PHPExcel/IOFactory.php' ;

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objReader->setReadDataOnly(true);
$objPHPExcel = $objReader->load("images/edi.xlsx");
$objWorksheet = $objPHPExcel->getActiveSheet();
$highestRow = $objWorksheet->getHighestRow();
$highestColumn = $objWorksheet->getHighestColumn();
$highestColumnIndex = PHPExcel_Cell::columnIndexFromString($highestColumn);

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
?>

</body>
</html>