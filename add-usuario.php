<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Adicionar novo usuário</h1>
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
                  <form method="post" action="action-add-usuario.php" onSubmit="return ajaxSubmit(this);">

                    


                      <div class="form-group">
                        <label>Nome do usuário:</label>
                        <input type="text" name="nome" class="form-control" placeholder="Exemplo: João da Silva" />
                      </div>
                      
                      <div class="form-group">
                          <label>Usuario de acesso ao sistema</label>
                          <input type="text" class="form-control" name="username" placeholder="Login que será usado para acesso ao sistema" />
                      </div>
                      
                      <div class="form-group">
                          <label>Senha de acesso ao sistema</label>
                          <input type="password" class="form-control" name="password" placeholder="Senha que será usada para acesso ao sistema" />
                      </div>

                      <div class="form-group">
                        <label>Grupo de acesso</label>
                        <select class="form-control" name="grupo">
                          <option value="representante">-- selecione uma opção --</option>
                          <option value="admin">-- Administrador --</option>
                          <option value="representantes">-- Representante / Colaborador --</option>
                          <option value="representantes_comerciais">-- Representante Comercial --</option>
                        </select>
                        <p class="help-block">Essa página destina-se apenas para cadastros para acesso ao sistema, se preferir, é melhor cadastrar representantes ou representantes comerciais em seeus respectivos menus na parte superior.</p>
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