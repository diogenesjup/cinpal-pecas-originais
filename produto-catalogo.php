<?php 

require("area-restrita/conexao.php");

$id = $_GET["id"];


$sql = "SELECT * FROM produtos WHERE id = '$id'";
$result = $PDO->query( $sql );
$produto = $result->fetchAll( PDO::FETCH_ASSOC );

?>

<div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
 <h4 style="font-family: 'Open Sans', sans-serif; font-weight: 700;">Produto: <?php echo $produto[0]["titulo"]; ?></h4>
      </div>

<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:30px;">


<table class="table table-hover table-striped">
	

<tr>
	<td style="text-align:right;padding-left:12px;width:320px !important;">
		 <b>Número Cinpal</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["num_cinpal"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Código</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["codigo"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Descrição</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["descricao"]; ?>
	</td>
</tr>





<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Grupo</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["grupo"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Lançamento</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["lancamento"]; ?>
	</td>
</tr>

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Data Lançamento</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["data_lancemento"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Lançamento válido até:</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["lancamento_valido"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Tipo Aplicação</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["tipo_aplicacao"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Montadora</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["montadora"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Veículo</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["viuculo"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Número de referência</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["num_referencia"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Descrição curta</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["descricao_curta"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Referência fabricante</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["fabricante_de_referencia"]; ?>
	</td>
</tr>

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Data de cadastro</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["data_cadastro"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Data de atualização</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["data_atualizacao"]; ?>
	</td>
</tr>




<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Artigos de Aplicação</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		

<?php 

$artigos = explode("###",$produto[0]["artigos"]);

$tot_artigos = count($artigos);


$k = 0;

while($k<$tot_artigos):

$id_artigo = $artigos[$k];

$sql = "SELECT * FROM artigos WHERE id = '$id_artigo'";
$result = $PDO->query( $sql );
$geral = $result->fetchAll( PDO::FETCH_ASSOC );
if($geral[0]["titulo"]!=""):
	?>

<p>
	<a href="artigo.php?id=<?php echo $geral[0]["id"]; ?>" style="color:#353535;text-decoration:none;" target="_blank">
	   <b><?php echo $geral[0]["titulo"];  ?></b> <br><small><?php echo $geral[0]["resumo"]; ?></small>
	</a>
</p>
<hr />

<?php
endif;

$k++;
endwhile;




?>



	</td>
</tr>




<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Vídeos</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		


<?php 

$sql = "SELECT * FROM videos WHERE id_origem = '$id'";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>
<p><b>
<?php echo $linha[$i]["tipo"]; ?>
</b></p>
<?php echo $linha[$i]["iframe"]; ?>  
              
<hr />

<?php $i++; endwhile; ?>



	</td>
</tr>

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Imagens</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
<?php 


$sql = "SELECT * FROM fotos WHERE id_origem = '$id'";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>


<img src="area-restrita/<?php echo $linha[$i]["foto"]; ?>" style="width:100%;padding:4px;border:1px solid #efefef;margin:10px;" />

<?php 

$i++;
endwhile;

?>
	</td>
</tr>

</table>

 <p>&nbsp;</p>

 </div>
  </div>