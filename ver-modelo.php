<?php require("header2.php"); 

$id = $_GET["id"];

require("conexao.php");

$sql = "SELECT * FROM modelos WHERE id = '$id'";
$result = $PDO->query( $sql );
$modelo = $result->fetchAll( PDO::FETCH_ASSOC );
?>





	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>ver Modelo: <?php echo $modelo[0]["titulo"]; ?></h1>
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
                


<div id="image-map-pro-container"></div>


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


<script src="js/image-map-pro.min.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<script type="text/javascript">	

;(function ($, window, document, undefined) {
    $(document).ready(function() {

<?php 



echo $modelo[0]["codigo"];

?>

    	});
})(jQuery, window, document);

</script>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>