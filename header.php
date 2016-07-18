<?php 
error_reporting(E_ERROR | E_PARSE);
ini_set("display_errors", 1 );
session_start();
if($_SESSION["admin"]!="logado")
Header("Location: index.php?login=invalido");    
$id_usuario = $_SESSION["id_usuario"];
$grupo_usuario = $_SESSION["grupo"];
?>
<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.2
Version: 3.6.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8">
<title>Cinpal Peças Originais</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1" name="viewport">
<meta content="" name="description">
<meta content="" name="author">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css">

<link href="assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css">
<!-- END GLOBAL MANDATORY STYLES -->


<!-- BEGIN PAGE STYLES -->
<link href="assets/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE STYLES -->
<!-- BEGIN THEME STYLES -->
<!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
<link href="assets/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css">
<link href="assets/global/css/plugins.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/layout.css" rel="stylesheet" type="text/css">
<link href="assets/admin/layout3/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color">
<link href="assets/admin/layout3/css/custom.css" rel="stylesheet" type="text/css">
<link href="css/sweetalert.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

<!-- MEDIUM EDITOR -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/medium-editor/latest/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">

<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico">


 <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.css?v=2" media="all" />  
<link rel="stylesheet" type="text/css" media="screen" href="css/jQuery.iPicture.css"/>
<style>
.btn-default{
  width: 100%;
  margin-bottom: 5.5px;
}
p.help-block{
	margin-bottom: 35px;
}
th *{
	color:#444D58 !important;
}
.breadcrumbs{
	margin-top: 15px;
	margin-bottom: 25px;
}
.editor{
	outline: none;
    margin: 0 0 20px 0;
    padding: 0 0 20px 0;
    padding-left: 20px;
    padding-top: 20px;
    border-bottom: 1px solid #dbdbdb;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 16px;
    line-height: 22px;
    background: #fff;
}

.medium-toolbar-arrow-under:after {
  border-color: #242424 transparent transparent transparent;
  top: 50px; }

.medium-toolbar-arrow-over:before {
  border-color: transparent transparent #242424 transparent;
  top: -8px; }

.medium-editor-toolbar {
  background-color: #242424;
  background: -webkit-linear-gradient(top, #242424, rgba(36, 36, 36, 0.75));
  background: linear-gradient(to bottom, #242424, rgba(36, 36, 36, 0.75));
  border: 1px solid #000;
  border-radius: 5px;
  box-shadow: 0 0 3px #000; }
  .medium-editor-toolbar li button {
    background-color: #242424;
    background: -webkit-linear-gradient(top, #242424, rgba(36, 36, 36, 0.89));
    background: linear-gradient(to bottom, #242424, rgba(36, 36, 36, 0.89));
    border: 0;
    border-right: 1px solid #000;
    border-left: 1px solid #333;
    border-left: 1px solid rgba(255, 255, 255, 0.1);
    box-shadow: 0 2px 2px rgba(0, 0, 0, 0.3);
    color: #fff;
    height: 50px;
    min-width: 50px;
    -webkit-transition: background-color 0.2s ease-in;
            transition: background-color 0.2s ease-in; }
    .medium-editor-toolbar li button:hover {
      background-color: #000;
      color: yellow; }
  .medium-editor-toolbar li .medium-editor-button-first {
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px; }
  .medium-editor-toolbar li .medium-editor-button-last {
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px; }
  .medium-editor-toolbar li .medium-editor-button-active {
    background-color: #000;
    background: -webkit-linear-gradient(top, #242424, rgba(0, 0, 0, 0.89));
    background: linear-gradient(to bottom, #242424, rgba(0, 0, 0, 0.89));
    color: #fff; }

.medium-editor-toolbar-form {
  background: #242424;
  border-radius: 5px;
  color: #999; }
  .medium-editor-toolbar-form .medium-editor-toolbar-input {
    background: #242424;
    box-sizing: border-box;
    color: #ccc;
    height: 50px; }
  .medium-editor-toolbar-form a {
    color: #fff; }

.medium-editor-toolbar-anchor-preview {
  background: #242424;
  border-radius: 5px;
  color: #fff; }

.medium-editor-placeholder:after {
  color: #b3b3b1; }

</style>
<link rel="stylesheet" href="css/medium-editor-insert-plugin.min.css">

    <style>
        .medium-insert-images-slideshow figure {
            width: 100%;
        }

        .medium-insert-images-slideshow figure img {
            margin: 0;
        }

        .medium-insert-images.medium-insert-images-grid.small-grid figure {
            width: 10%;
        }

        @media (max-width: 750px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 20%;
            }
        }

        @media (max-width: 450px) {
            .medium-insert-images.medium-insert-images-grid.small-grid figure {
                width: 25%;
            }
        }
    </style>
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="css/jquery.fileupload.css">
<link rel="stylesheet" href="css/jquery.fileupload-ui.css">
<!-- CSS adjustments for browsers with JavaScript disabled -->
<noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
<noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>

</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<body>
<!-- BEGIN HEADER -->
<div class="page-header">
	<!-- BEGIN HEADER TOP -->
	<div class="page-header-top">
		<div class="container">
			<!-- BEGIN LOGO -->
			<div class="page-logo">
				<img src="../images/logo.jpg" alt="CINPAL LOGO" style="margin-top:5px;width:150px;" />
			</div>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER -->
			<a href="javascript:;" class="menu-toggler"></a>

			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->

			<div class="top-menu">
				<ul class="nav navbar-nav pull-right">
					
					
					<li class="droddown dropdown-separator" style="padding-right:0;">
						<p style="padding-top:10px;"><i>Logado como: <?php echo $_SESSION["nome"]; ?></i></p>
					</li>
					
					

				</ul>
			</div>
			<!-- END TOP NAVIGATION MENU -->
		</div>
	</div>
	<!-- END HEADER TOP -->
	<!-- BEGIN HEADER MENU -->
	<div class="page-header-menu">
		<div class="container">
			

			<!-- BEGIN MEGA MENU -->
			<!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
			<!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
			<div class="hor-menu ">
				<ul class="nav navbar-nav">

					<li>
						<a href="dashboard.php">Dashboard</a>
					</li>



<?php 

if($grupo_usuario=="admin"):

?>

          
          <!-- USUARIOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Usuários <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="seu-perfil.php">Seu perfil</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="add-usuario.php">Adicionar usuário</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="todos-usuarios.php">Todos os usuários</a>
                        </li>
                        
                        <!--
                        <li style="list-style:none;">
                          <a href="grupos-usuarios.php">Grupos de usuários</a>
                        </li>
                        -->                      

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- USUARIOS -->


          <!-- SITE -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Site <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="homepage.php">Homepage</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="banners.php">Banners rotativos</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="marcas.php">Marcas</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="empresa.php">Empresa</a>
                        </li>
                        
                        <!--
                        <li style="list-style:none;">
                          <a href="#">Produtos (site)</a>
                        </li>  
                        -->

                        <li style="list-style:none;">
                          <a href="noticias.php">Notícias</a>
                        </li> 
                        
                        <!--
                        <li style="list-style:none;">
                          <a href="trabalhe-conosco.php">Trabalhe Conosco</a>
                        </li>    

                        <li style="list-style:none;">
                          <a href="contato.php">Contato</a>
                        </li>
                        -->                     

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- SITE -->


          <!-- REPRESENTANTES -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Representantes <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="representantes-pai.php">Representantes</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="representantes.php">Distribuidores</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="oficinas.php">Oficinas</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="consumidores.php">Consumidores</a>
                        </li>                  

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- REPRESENTANTES -->



        <!-- PRODUTOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Produtos (Catálogo) <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="adicionar-produto.php">Adicionar Produto</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="listar-produtos.php">Listar Produtos</a>
                        </li> 

                        <li style="list-style:none;">
                          <a href="artigos.php">Artigos de Aplicação</a>
                        </li> 


                        <li style="list-style:none;">
                          <a href="origem.php">Origem</a>
                        </li>  

                        <li style="list-style:none;">
                          <a href="agregado.php">Agregado</a>
                        </li>


                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- PRODUTOS -->


          <li>
            <a href="modelos.php">Modelos</a>
          </li>
          <li>
            <a href="editor.php">Construir Modelo</a>
          </li>


<?php endif; ?>


















<?php 

if($grupo_usuario=="representantes"):

?>

          
          <!-- USUARIOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Usuários <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="seu-perfil.php">Seu perfil</a>
                        </li>
                        
                        <!--
                        <li style="list-style:none;">
                          <a href="grupos-usuarios.php">Grupos de usuários</a>
                        </li>
                        -->                      

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- USUARIOS -->


         


          <!-- REPRESENTANTES -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Representantes <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                       
                        <li>
                          <a href="oficinas.php">Oficinas</a>
                        </li>

                        <li style="list-style:none;">
                          <a href="consumidores.php">Consumidores</a>
                        </li>           

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- REPRESENTANTES -->



        <!-- PRODUTOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Produtos (Catálogo) <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        <!--
                        <li style="list-style:none;">
                          <a href="add-produto.php">Cadastrar produto</a>
                        </li>
                        -->

                       <!-- <li style="list-style:none;">
                          <a href="importar-produtos.php">Importar produtos</a>
                        </li> --> 

                        <li style="list-style:none;">
                          <a href="listar-produtos.php">Listar Produtos</a>
                        </li> 
<!--
                        <li style="list-style:none;">
                          <a href="artigos.php">Artigos de Aplicação</a>
                        </li>                  
-->
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- PRODUTOS -->


<?php endif; ?>





<?php 

if($grupo_usuario=="representantes_comerciais"):

?>

          
          <!-- USUARIOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Usuários <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        
                        <li style="list-style:none;">
                          <a href="seu-perfil.php">Seu perfil</a>
                        </li>
                        
                        <!--
                        <li style="list-style:none;">
                          <a href="grupos-usuarios.php">Grupos de usuários</a>
                        </li>
                        -->                      

                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- USUARIOS -->


         


       



        <!-- PRODUTOS -->
          <li>
            <a data-hover="megamenu-dropdown" data-close-others="true" data-toggle="dropdown" href="javascript:;" class="dropdown-toggle">Produtos (Catálogo) <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu" style="min-width: 300px">
              <li>
                <div class="mega-menu-content">
                  <div class="row">
                    <div class="col-md-12">
                      <ul class="mega-menu-submenu" style="padding-top:6px;padding-bottom:6px;">
                        <!--
                        <li style="list-style:none;">
                          <a href="add-produto.php">Cadastrar produto</a>
                        </li>
                        -->

                       <!-- <li style="list-style:none;">
                          <a href="importar-produtos.php">Importar produtos</a>
                        </li> --> 

                        <li style="list-style:none;">
                          <a href="listar-produtos-c.php">Catálogo Cinpal</a>
                        </li> 
<!--
                        <li style="list-style:none;">
                          <a href="artigos.php">Artigos de Aplicação</a>
                        </li>                  
-->
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <!-- PRODUTOS -->


<?php endif; ?>


					<li>
						<a href="logoff.php">Logoff</a>
					</li>
					
				</ul>
			</div>
			<!-- END MEGA MENU -->
		</div>
	</div>
	<!-- END HEADER MENU -->
</div>
<!-- END HEADER -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
