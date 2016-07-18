<?php require("header.php"); ?>

<?php 

require("conexao.php");

$id = $_GET["id"];

$sql = "SELECT * FROM produtos WHERE id = '$id'";
$result = $PDO->query( $sql );
$produto = $result->fetchAll( PDO::FETCH_ASSOC );


?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Ver produto: <small><?php echo $produto[0]["denominacao"]; ?></small></h1>
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
          
              <div class="col-md-10">
                 <h2>Produto: <?php echo $produto[0]["denominacao"]; ?></h2>
                 <p>&nbsp;</p>




<table class="table table-hover table-striped">
	

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Origem</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["origem"]; ?>
	</td>
</tr>

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Agregado</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["agregado"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Número original</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["num_original"]; ?>
	</td>
</tr>

<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Número cinpal</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["num_cinpal"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Denominação</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["denomincao"]; ?>
	</td>
</tr>


<tr>
	<td style="text-align:right;padding-left:12px;">
		 <b>Nota</b>
	</td>
	<td style="text-align:left;padding-right:12px;">
		<?php echo $produto[0]["nota"]; ?>
	</td>
</tr>


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


<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({ordering: false,"language": {"url": "ptbr.json"} });
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
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>