<!--
#
# SYSTEM-DREAMS
# CRIAÇÃO E OTIMIZAÇÃO DE SITES
# WWW.SYSTEM-DREAMS.COM
# 
-->
<?php 

require("area-restrita/conexao.php");

$sql = "SELECT * FROM empresa";
$result = $PDO->query( $sql );
$home = $result->fetchAll( PDO::FETCH_ASSOC );


if($home[0]["seo"]==""):
?>
<!DOCTYPE html>
<html lang="pt-br"><head>
<title>Cinpal Peças Originais - Catálogo Online</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   

<?php endif; 
if($home[0]["seo"]!=""):
?>
<!DOCTYPE html>
<html lang="pt-br"><head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 

<?php echo $home[0]["seo"]; ?>   

<?php endif; ?>

<?php require("head.php"); ?>

<link rel="stylesheet" type="text/css" href="area-restrita/css/dataTables.bootstrap.css?v=2" media="all" />  

</head>
<body> 


<?php require("header.php"); ?>

<div class="container" style="padding:0;">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titulo-pagina-interna" style="background:url('images/capa.jpg') no-repeat;background-size:cover;background-position:center center;">
		<h1>Catálogo Online Cinpal</h1>
		<p><a href="index.php">Home</a> &raquo; Catálogo Online Cinpal</p>
	</div>
</div>



<div class="container work">
	
<div class="row">
	
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	


 <table id="dataSelect" data-order='[[ 0, "asc" ]]' class="table table-hover">
                  <thead>
                 
             
                    <th style="padding-left:8px;"><b>Número Cinpal</b></th>   
                    <th style="padding-left:8px;"><b>Código</b></th>   
                    <th style="padding-left:8px;"><b>Tipo Aplicação</b></th>
                    <th style="padding-left:8px;"><b>Aplicação</b></th>  
                    <th style="padding-left:8px;"><b>Montadora</b></th>  
                    <th style="padding-left:8px;"><b>Veículo</b></th>   
                    <th style="padding-left:8px;"><b>Nº Referência</b></th>  
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>

<?php 

$sql = "SELECT * FROM produtos";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):
if($linha[$i]["num_cinpal"]!="n/a"):
?>

<tr>


   <td><?php echo $linha[$i]["num_cinpal"]; ?></td>
   <td><?php echo $linha[$i]["codigo"]; ?></td>
   <td><?php echo $linha[$i]["tipo_aplicacao"]; ?></td>
   <td><?php echo $linha[$i]["aplicacao"]; ?></td>
   <td><?php echo $linha[$i]["montadora"]; ?></td>
   <td><?php echo $linha[$i]["viuculo"]; ?></td>
   <td><?php echo $linha[$i]["num_referencia"]; ?></td>
   <td style="text-align:right !important;">
      <button id="verProduto<?php echo $linha[$i]["id"]; ?>" class="btn btn-primary btn-xs" >ver detalhes</button>
   </td>

</tr>

<?php 
endif;
$i++;
endwhile;

?>

                  </tbody>                  
                  </table>   




</div>

</div>

</div>

<!-- Modal -->
<div id="modalProduto" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="conteudoProduto">


      
       <p style="text-align:center;margin-top:10px;">
        <img src="images/loading.bax-shop.nl.gif" />
       </p>  
    

    </div>
  </div>
</div>


<?php require("footer.php"); ?>





<?php require("script.php"); ?>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="area-restrita/js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({"order": [[ 0, "asc" ]],"language": {"url": "area-restrita/ptbr.json"} });
	           } );
	    </script>

<?php $h = 0; 

while($h<$tot_cliente):

?>
	    <script type="text/javascript">

			 $('#verProduto<?php echo $linha[$h]["id"]; ?>').click(function (e) {

					 $('#modalProduto').modal("show");


                     $("#conteudoProduto").html("<p style='text-align:center;'><img src='images/loading.bax-shop.nl.gif' /></p>");
					 

setTimeout('$.get("produto-catalogo.php?id=<?php echo $linha[$h]["id"]; ?>",  function(html){ $("#conteudoProduto").html(html);}); ', 2500);

					 

			 });

	    </script>

<?php 

$h++;

endwhile;

?>


</body>
</html>