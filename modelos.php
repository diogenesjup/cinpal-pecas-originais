<?php require("header.php"); ?>





	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Modelos</h1>
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
<form method="post" action="cadastrar-modelo.php">

    <div class="form-group">
    	<label>Título do código</label>
    	<input type="text" name="titulo" class="form-control input-md" style="width:400px" placeholder="Título do novo código" />
    </div>
	<div class="form-group">
		<label>Cadastrar novo código</label>
		<textarea class="form-control input-md" name="codigo" rows="6" style="width:400px;"></textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-primary">adicionar novo modelo</button>
	</div>

</form>

<p>&nbsp;</p>
<table id="dataSelect" data-order='[[ 0, "asc" ]]' class="table table-hover">
                  <thead>
                 
                    <th style="padding-left:8px;"><b>Título</b></th> 
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>

<?php 
require("conexao.php");

$sql = "SELECT * FROM modelos ORDER BY titulo DESC";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>

<tr>

   <td><?php echo $linha[$i]["titulo"]; ?></td>
   <td>
      <a href="ver-modelo.php?id=<?php echo $linha[$i]["id"]; ?>" class="btn btn-primary btn-xs" target="_blank">preview</a>
      <a href="excluir-modelo.php?id=<?php echo $linha[$i]["id"]; ?>" class="btn btn-danger btn-xs">excluir</a>
   </td>

</tr>

<?php 

$i++;
endwhile;

?>

                  </tbody>                  
                  </table>   

                  <p>&nbsp;</p>



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

<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<!-- END PAGE LEVEL SCRIPTS -->
 <script src="js/sweetalert.min.js"></script>

<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({"order": [[ 0, "asc" ]],"language": {"url": "ptbr.json"} });
	           } );
	    </script>


	    <?php if($_GET["status"]=="sucesso"): ?>
        <script type="text/javascript">
            swal("Muito bem!", 'Modelo apagado com sucesso', "success");
        </script>
	    <?php endif; ?>




<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>