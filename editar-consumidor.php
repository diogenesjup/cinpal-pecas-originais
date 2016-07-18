<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Editar Consumidor</h1>
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

                  $id = $_GET["id"];

                  $sql = "SELECT * FROM consumidores WHERE id = '$id'";
                  $result = $PDO->query( $sql );
                  $usuario = $result->fetchAll( PDO::FETCH_ASSOC );

                ?>
                  <p>&nbsp;</p>
                  <form method="post" action="action-editar-consumidores.php" onSubmit="return ajaxSubmit(this);">                    

                      <input type="hidden" name="id" value="<?php echo $id; ?>" />

                      <div class="form-group">
                        <label>Nome da oficina:</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $usuario[0]["nome"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>E-mail:</label>
                        <input type="text" name="email" class="form-control" value="<?php echo $usuario[0]["email"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>Telefone de contato:</label>
                        <input type="text" name="telefone" class="form-control" value="<?php echo $usuario[0]["telefone"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>CPF / CNPJ:</label>
                        <input type="text" name="cpf" class="form-control" value="<?php echo $usuario[0]["cpf"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>Endereço:</label>
                        <input type="text" name="endereco" class="form-control" value="<?php echo $usuario[0]["endereco"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>Cidade:</label>
                        <input type="text" name="cidade" class="form-control" value="<?php echo $usuario[0]["cidade"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>Estado:</label>
                        <input type="text" name="estado" class="form-control" value="<?php echo $usuario[0]["estado"]; ?>" />
                      </div>

                      <div class="form-group">
                        <label>País:</label>
                        <input type="text" name="pais" class="form-control" value="<?php echo $usuario[0]["pais"]; ?>" />
                      </div>
                      
                      <div class="form-group">
                          <label>Usuario de acesso ao sistema</label>
                          <input type="text" class="form-control" name="username" value="<?php echo $usuario[0]["login"]; ?>" />
                      </div>
                      
                      <div class="form-group">
                          <label>Senha de acesso ao sistema</label>
                          <input type="password" class="form-control" name="password" value="<?php echo $usuario[0]["senha"]; ?>" />
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
                swal("Bom trabalho!", 'Informações atualizadas com sucesso', "success");
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