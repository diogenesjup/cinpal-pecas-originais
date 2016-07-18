<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Site <small>Artigos > Adicionar artigo</small></h1>
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
          

             

<div style="padding:20px;">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Português</a></li>

  </ul>

<div class="tab-content" style="padding:20px;">
  <!-- PORTUGUES -->
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  	
                  <form method="post" action="action-adicionar-artigo.php" onSubmit="return ajaxSubmit(this);">                       
                        
                        <input type="hidden" name="idioma" value="pt" />

                        <div class="form-group">
                          <label>Título do artigo</label>
                          <input type="text" name="titulo" class="form-control" placeholder="Título do artigo" />
                        </div>

                        <div class="form-group">
                            <label>Resumo do artigo</label>
                            <textarea name="resumo" class="form-control" rows="8"></textarea>
                        </div>

                        <div class="form-group">
                           <label>Texto do artigo</label>
                           <textarea class="form-control tx" name="texto" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label>SEO</label>
                            <textarea name="seo" class="form-control" rows="8"></textarea>
                        </div>

                       <button class="btn btn-primary" type="submit">salvar informações</button>                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <div id="sucesso"></div>

  </div>

  <!-- INGLES -->
  <div role="tabpanel" class="tab-pane fade" id="profile">
  	
                   <form method="post" action="action-adicionar-noticia.php" onSubmit="return ajaxSubmit(this);">                       
                        
                        <input type="hidden" name="idioma" value="en" />

                        <div class="form-group">
                          <label>Título da notícia <b>em inglês</b></label>
                          <input type="text" name="titulo" class="form-control" placeholder="Título da notícia" />
                        </div>

                        <div class="form-group">
                            <label>Resumo da notícia <b>em inglês</b></label>
                            <textarea name="resumo" class="form-control" rows="8"></textarea>
                        </div>

                        <div class="form-group">
                           <label>Texto da notícia <b>em inglês</b></label>
                           <textarea class="form-control tx" name="texto" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label>SEO</label>
                            <textarea name="seo" class="form-control" rows="8"></textarea>
                        </div>

                       <button class="btn btn-primary" type="submit">salvar informações</button>                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <div id="sucesso"></div>

  </div>

  <!-- ESPANHOL -->
  <div role="tabpanel" class="tab-pane fade" id="messages">
  	
                        <form method="post" action="action-adicionar-artigo.php" onSubmit="return ajaxSubmit(this);">                       
                        
                        <input type="hidden" name="idioma" value="es" />

                        <div class="form-group">
                          <label>Título da notícia <b>em espanhol</b></label>
                          <input type="text" name="titulo" class="form-control" placeholder="Título da notícia" />
                        </div>

                        <div class="form-group">
                            <label>Resumo da notícia <b>em espanhol</b></label>
                            <textarea name="resumo" class="form-control" rows="8"></textarea>
                        </div>

                        <div class="form-group">
                           <label>Texto da notícia <b>em espanhol</b></label>
                           <textarea class="form-control tx" name="texto" rows="20"></textarea>
                        </div>

                        <div class="form-group">
                            <label>SEO</label>
                            <textarea name="seo" class="form-control" rows="8"></textarea>
                        </div>

                       <button class="btn btn-primary" type="submit">salvar informações</button>                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <div id="sucesso"></div>

  </div>
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


<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
	    <script type="text/javascript">
	           $(document).ready(function() {
	                $('#dataSelect').dataTable({ordering: false,"language": {"url": "ptbr.json"} });
	           } );
	    </script>




 <script src="js/sweetalert.min.js"></script>    
    <script type="text/javascript">
           // 
            // SCRIPT PARA ATUALIZAÇÂO DE URL SLIDE 1
            //
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;
                tinymce.triggerSave();
                // fetch the data for the form
                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
                swal("Bom trabalho!", 'Artigo adicionado com sucesso', "success");
                //$('#sucesso').html('<div class="alert alert-success"><b>Informações atualizadas com sucesso</b></div>');
                //$("#basic").fadeOut(0);
                //$("#form_image").fadeIn(0);
                // return false so the form does not actually
                // submit to the page
                return false;
            }
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
    toolbar2: "print preview media | forecolor backcolor emoticons sizeselect fontsizeselect",
    fontsize_formats: '4pt 8pt 10pt 12pt 14pt 18pt 20pt 22pt 24pt 28pt 30pt 32pt 34pt 36pt 48pt',
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