<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Seu perfil</h1>
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


                 

                if($_SESSION["grupo"]=="admin"):

                    $sql = "SELECT * FROM usuarios WHERE id = '$id_usuario'";
                    $result = $PDO->query( $sql );
                    $linha = $result->fetchAll( PDO::FETCH_ASSOC );                
                    
                    $nome = $linha[0]["nome"];
                    $username = $linha[0]["login"];
                    $password = $linha[0]["senha"];  

                endif;

                if($_SESSION["grupo"]=="representantes"):

                    $sql = "SELECT * FROM representantes WHERE id = '$id_usuario'";
                    $result = $PDO->query( $sql );
                    $linha = $result->fetchAll( PDO::FETCH_ASSOC );                
                    
                    $nome = $linha[0]["nome"];
                    $username = $linha[0]["login"];
                    $password = $linha[0]["senha"];  

                endif;



                if($_SESSION["grupo"]=="representantes_comerciais"):
                     
                    $sql = "SELECT * FROM representantes_comerciais WHERE id = '$id_usuario'";
                    $result = $PDO->query( $sql );
                    $linha = $result->fetchAll( PDO::FETCH_ASSOC );                
                    
                    $nome = $linha[0]["nome"];
                    $username = $linha[0]["login"];
                    $password = $linha[0]["senha"];  

                endif;
                
                  
                  ?>
                  
                  <form method="post" action="salvar-usuario.php" onSubmit="return ajaxSubmit(this);">

                      
                      <input type="hidden" name="id_usuario" value="<?php echo $id_usuario; ?>" />

                      <input type="hidden" name="grupo_usuario" value="<?php echo $grupo_usuario; ?>" />


                      <div class="form-group">
                        <label>Seu nome:</label>
                        <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>" />
                      </div>
                      
                      <div class="form-group">
                          <label>Usuario de acesso ao sistema</label>
                          <input type="textp" class="form-control" name="username" value="<?php echo $username; ?>" />
                      </div>
                      
                      <div class="form-group">
                          <label>Senha de acesso ao sistema</label>
                          <input type="password" class="form-control" name="password" value="<?php echo $password; ?>" />
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