<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Produtos (Catálogo)</h1>
			</div>
			<!-- END PAGE TITLE -->
			<!-- BEGIN PAGE TOOLBAR -->
			<div class="page-toolbar">
				<p>&nbsp;</p>
				Bem vindo, hoje é <?php echo date("d/m/Y"); ?>
			</div>
			<!-- END PAGE TOOLBAR -->
		</div>
	</div>
	<!-- END PAGE HEAD -->

	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container portlet light">

            <div class="row margin-top-10">
          
              <div class="col-md-12">
              


 <p>&nbsp;</p>
                 <a href="adicionar-produto.php" class="btn btn-primary">Adicionar produto</a>
                 <p>&nbsp;</p>


                 <table id="dataSelect" data-order='[[ 0, "asc" ]]' class="table table-hover">
                  <thead>
                 
                    <th style="padding-left:8px;"><b>Origem</b></th>
                    <th style="padding-left:8px;"><b>Agregado</b></th>   
                    <th style="padding-left:8px;"><b>Número Original</b></th>   
                    <th style="padding-left:8px;"><b>Número Cinpal</b></th>
                    <th style="padding-left:8px;"><b>Denominação</b></th>  
                    <th style="padding-left:8px;"><b>Modelo</b></th> 
                    <th style="padding-left:8px;"><b>Nº peça</b></th> 
                    <th style="padding-left:8px;"><b>Posição</b></th> 
                    <th style="padding-left:8px;"><b>Nota</b></th>   
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>

<?php 
require("conexao.php");

$sql = "SELECT * FROM produtos";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):
if($linha[$i]["denominacao"]!="NNN" && $linha[$i]["denominacao"]!=""):
?>

<tr>

   <td><?php echo $linha[$i]["origem"]; ?></td>
   <td><?php echo $linha[$i]["agregado"]; ?></td>
   <td><?php echo $linha[$i]["num_original"]; ?></td>
   <td><?php echo $linha[$i]["num_cinpal"]; ?></td>
   <td><?php echo $linha[$i]["denominacao"]; ?></td>
   <td><?php echo $linha[$i]["modelo"]; ?></td>
   <td><?php echo $linha[$i]["numero_desenho"]; ?></td>
   <td><?php echo $linha[$i]["posicao"]; ?></td>
   <td><?php echo $linha[$i]["nota"]; ?></td>
   <td>
      <a href="ver-produto.php?id=<?php echo $linha[$i]["id"]; ?>" class="btn btn-primary btn-xs" >ver</a>
     <!-- <a href="editar-produto.php?id=<?php echo $linha[$i]["id"]; ?>" class="btn btn-warning btn-xs" >editar</a>
      <a href="listar-produtos.php?id=<?php echo $linha[$i]["id"]; ?>" class="btn btn-danger btn-xs">excluir</a> -->
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
<!-- END PAGE CONTAINER -->


<!-- BEGIN FOOTER -->

<div class="scroll-to-top">
	<i class="icon-arrow-up"></i>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

<script src="assets/global/scripts/metronic.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/layout.js" type="text/javascript"></script>
<script src="assets/admin/layout3/scripts/demo.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/index3.js" type="text/javascript"></script>
<script src="assets/admin/pages/scripts/tasks.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
 <script src="js/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({"order": [[ 0, "asc" ]],"language": {"url": "ptbr.json"} });
	           } );
	    </script>

<script>
jQuery(document).ready(function() {    
   Metronic.init(); // init metronic core componets
   Layout.init(); // init layout
   Demo.init(); // init demo(theme settings page)
   Index.init(); // init index page
   Tasks.initDashboardWidget(); // init tash dashboard widget
});
</script>
<?php 
if($_GET["id"]): 
?>
<script type="text/javascript">


    swal({   title: "Confirma a exclusão do produto?",   text: "Essa ação não pode ser revertida",   type: "warning",   showCancelButton: true,   confirmButtonColor: "#DD6B55",   confirmButtonText: "Sim, apagar",   cancelButtonText: "Não, cancelar!",   closeOnConfirm: false,   closeOnCancel: false }, function(isConfirm){   if (isConfirm) {   swal("Apagado!", "Produto apagado com sucesso.", "success");  location.href="excluir-produto.php?id=<?php echo $_GET['id']; ?>" } else {     swal("Cancelado", "Pedido cancelado", "error");   } });

  

</script>
<?php endif; ?>
<?php 

// ALERTA DE CONFIRMAÇÃO DE EXCLUSÃO DE CLIENTE
if($_GET["status"]=="sucesso"): echo '<script type="text/javascript">swal("Muito bem!", "Produto foi removido com sucesso", "success");</script>'; endif; ?>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>