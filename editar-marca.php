<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Editar banner</h1>
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
<?php 

require("conexao.php");

$id = $_GET["id"];


$sql = "SELECT * FROM marcas WHERE id = '$id'";
$result = $PDO->query( $sql );
$banner = $result->fetchAll( PDO::FETCH_ASSOC );


?>



	<!-- BEGIN PAGE CONTENT -->
	<div class="page-content">
		<div class="container">

            <div class="row margin-top-10">
          
              <div class="col-md-12 portlet light">

                      <form id="form_image" method="post" enctype="multipart/form-data" action="upload-marca-editar.php">   

                             <input type="hidden" name="id" value="<?php echo $id; ?>" />                          

                             <div class="row">
                                
                                 <div class="form-group col-md-12">
                                   <label>Título da Marca</label>
                                   <input type="text" class="form-control" name="titulo_marca" value="<?php echo $banner[0]["nome"]; ?>" />
                                 </div>
                                
                             </div>

                          

                             <div class="form-group">
                                <label>Logo da marca</label>
                                <input type="file" id="imagem" name="imagem">
                                <p class="help-block">Selecione apenas JPG ou PNG com no máximo 5MB.</p>
                              </div>


                              <div class="form-group">
                                <button id="atualizar" class="btn btn-primary">atualizar informações</button>
                              </div>

                      </form> 
                            <div id="visualizar">         
                            <img src="images/<?php echo $banner[0]["foto"]; ?>" style='margin-bottom:10px;width:50%;padding:5px;border:1px solid #efefef;' />                 
                            </div>

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
 <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript">
     jQuery(document).ready(function ($) {
       $('#atualizar').click(function(){
         $('#visualizar').html('Enviando...');
         /* Efetua o Upload */
         $('#form_image').ajaxForm({
          target:'#visualizar' // o callback será no elemento com o id #visualizar
         }).submit();
       });
     });
    </script>
<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({"order": [[ 1, "asc" ]],"language": {"url": "ptbr.json"} });
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
 <script type="text/javascript" src="js/jquery.form.js"></script>
    <script type="text/javascript">
     jQuery(document).ready(function ($) {
       $('#imagem').live('change',function(){
         $('#visualizar').html('Enviando...');
         /* Efetua o Upload */
         $('#form_image').ajaxForm({
          target:'#visualizar' // o callback será no elemento com o id #visualizar
         }).submit();
       });
     });
    </script>
       <script src="tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea.tx",
    theme: "modern",
    plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern imagetools"
    ],
    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
    toolbar2: "print preview media | forecolor backcolor emoticons",
    image_advtab: true,
    templates: [
        {title: 'Test template 1', content: 'Test 1'},
        {title: 'Test template 2', content: 'Test 2'}
    ],
    external_filemanager_path:"tinymce/plugins/filemanager/",
    filemanager_title:"Upload de Imagens" ,
    external_plugins: { "filemanager" : "plugins/filemanager/plugin.min.js"}
});
</script> 


<?php 

// ALERTA DE CONFIRMAÇÃO DE EXCLUSÃO DE CLIENTE
if($_GET["status"]=="sucesso"): echo '<script type="text/javascript">swal("Muito bem!", "Banner foi removido com sucesso", "success");</script>'; endif; ?>

?>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>