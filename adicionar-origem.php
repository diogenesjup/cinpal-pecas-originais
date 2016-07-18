<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Adicionar nova origem de produto</h1>
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
		<div class="container">

            <div class="row margin-top-10">
          
              <div class="col-md-8 portlet light">
                  <?php 
                  
                  require("conexao.php");

                ?>
                  <p>&nbsp;</p>
                  <a href="adicionar-origem.php" class="btn btn-primary">adicionar nova origem</a>
                  <p>&nbsp;</p>
                  <form method="post" action="action-add-origem.php" onSubmit="return ajaxSubmit(this);">                    


                      <div class="form-group">
                        <label>Nº Origem:</label>
                        <input type="text" name="num_origem" class="form-control" placeholder="Exemplo: 1, 2 etc" />
                      </div>

                      <div class="form-group">
                        <label>Descrição:</label>
                        <input type="text" name="descricao" class="form-control" placeholder="Descrição do nome da origem, exemplo: Scannia" />
                      </div>

                                
                      
                      <button class="btn btn-primary" type="submit">salvar informações</button>
                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <div id="sucesso"></div>
                  
                  
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
<script src="js/jquery-2.1.4.js" type="text/javascript"></script>


<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="js/sweetalert.min.js"></script>        

 <script type="text/javascript">
           // 
            // SCRIPT PARA ATUALIZAÇÂO DE URL SLIDE 1
            //
            var ajaxSubmit = function(form) {
                // fetch where we want to submit the form to
                var url = $(form).attr('action');
                var flag = 9;
                // fetch the data for the form
                var data = $(form).serializeArray();

                // setup the ajax request
                $.ajax({
                    url: url,
                    data: data,
                    dataType: 'json',
                    type:'POST'
                });
                swal("Bom trabalho!", 'Informações cadastradas com sucesso', "success");
                //$('#sucesso').html('<div class="alert alert-success"><b>Informações atualizadas com sucesso</b></div>');
                //$("#basic").fadeOut(0);
                //$("#form_image").fadeIn(0);
                // return false so the form does not actually
                // submit to the page
                return false;
            }
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