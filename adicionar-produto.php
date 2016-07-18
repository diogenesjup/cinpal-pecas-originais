<?php require("header.php"); ?>
<style>
  .form-group label{
    font-weight: bold;
  }
</style>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Produtos <small>Adicionar produto</small></h1>
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
          
<?php 

require("conexao.php");

//PEGAR O ULTIMO ID
$titulo = "NNN";
$sql = "INSERT INTO produtos(denominacao) VALUES(:titulo)";
$stmt = $PDO->prepare( $sql );
$stmt->bindParam( ':titulo', $titulo );
 
$result = $stmt->execute();

$sql = "SELECT * FROM produtos ORDER BY id DESC LIMIT 1";
$result = $PDO->query( $sql );
$produto = $result->fetchAll( PDO::FETCH_ASSOC );
$id = $produto[0]["id"];

?>
             

<div style="padding:20px;">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Informações</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Fotos</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Videos</a></li>
    <li role="presentation"><a href="#messages2" aria-controls="messages2" role="tab" data-toggle="tab">Artigos de aplicação</a></li>
  </ul>

<div class="tab-content" style="padding:20px;">
  <!-- PORTUGUES -->
  <div role="tabpanel" class="tab-pane fade in active" id="home">
  	
                  <form method="post" action="action-editar-produto.php" onSubmit="return ajaxSubmit(this);">                       
                        

                        <input type="hidden" name="id" value="<?php echo $id; ?>" />



<div class="form-group">
  <label>Origem:</label>
  <select name="origem" class="form-control">
      <option value="1">selecione uma origem</option>
      <?php 
      
      $sql = "SELECT * FROM origem ORDER BY origem ASC";
      $result = $PDO->query( $sql );
      $origens = $result->fetchAll( PDO::FETCH_ASSOC );
      $tot_origem = count($origens);
      $i = 0;

      while($i<$tot_origem):
      ?>
      <option value="<?php echo $origens[$i]["id"]; ?>"><?php echo $origens[$i]["descricao"]; ?></option>
      <?php 
      $i++;
      endwhile;
      ?>
  </select>
</div>



<div class="form-group">
  <label>Agregado:</label>
  <select name="agregado" class="form-control">
      <option value="1">selecione um agregado</option>
      <?php 
      
      $sql = "SELECT * FROM agregado ORDER BY numero ASC";
      $result = $PDO->query( $sql );
      $origens = $result->fetchAll( PDO::FETCH_ASSOC );
      $tot_origem = count($origens);
      $i = 0;

      while($i<$tot_origem):
      ?>
      <option value="<?php echo $origens[$i]["id"]; ?>"><?php echo $origens[$i]["descricao"]; ?></option>
      <?php 
      $i++;
      endwhile;
      ?>
  </select>
</div>



<div class="form-group">
   <label>Número original</label>
   <input type="text" name="num_original" class="form-control" placeholder="Número original" />
</div>



<div class="form-group">
   <label>Número Cinpal</label>
   <input type="text" name="num_cinpal" class="form-control" placeholder="Número cinpal" />
</div>


<div class="form-group">
   <label>Denominação</label>
   <input type="text" name="denominacao" class="form-control" placeholder="Denominação" />
</div>


<div class="form-group">
   <label>Modelo</label>
   <input type="text" name="modelo" class="form-control" placeholder="Modelo" />
</div>
<div class="form-group">
   <label>Número da peça dentro do desenho da figura</label>
   <input type="text" name="numero_peca" class="form-control" placeholder="Número do item dentro do desenho da figura" />
</div>

<div class="form-group">
   <label>Posição</label>
   <input type="text" name="posicao" class="form-control" placeholder="Posição" />
</div>


<div class="form-group">
   <label>Nota</label>
   <textarea name="nota" class="form-control" rows="6"></textarea>
</div>


<div class="form-group">
  <label>Substituição:</label>
  <input type="text" name="substituicao[]" class="form-control" placeholder="Número original do produto" />
  <div id="moreSubs"></div>
  <p class="help-block" style="text-align:right;">
    <span id="addSubs" class="btn btn-primary btn-xs">adicionar mais</span>
  </p>
  <p>&nbsp;</p>
</div>

<div class="form-group">
  <label>Adicionais:</label>
  <input type="text" name="adicionais[]" class="form-control" placeholder="Número original do produto" />
  <div id="moreAdd"></div>
  <p class="help-block" style="text-align:right;">
    <span id="addAdcionais" class="btn btn-primary btn-xs">adicionar mais</span>
  </p>
  <p>&nbsp;</p>
</div>


<div class="form-group">
  <label>Opicionais:</label>
  <input type="text" name="opicionais[]" class="form-control" placeholder="Número original do produto" />
  <div id="moreOpt"></div>
  <p class="help-block" style="text-align:right;">
    <span id="addOpcionais" class="btn btn-primary btn-xs">adicionar mais</span>
  </p>
  <p>&nbsp;</p>
</div>








                       <button class="btn btn-primary" type="submit">salvar informações</button>                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <div id="sucesso"></div>

  </div>

  <!-- INGLES -->
  <div role="tabpanel" class="tab-pane fade" id="profile">
  	






 <!-- AREA DO UPLOAD -->


    <div class="panel panel-default">
      <div class="panel-heading">
        <h4>Selecione um ou vários arquivos que deseja fazer upload</h4> ou
        <a href="editor.php" class="btn btn-primary" target="_blank">Construir modelo</a>

        <div class="panel-ctrls">
        </div>
      </div>
      <div class="panel-body">
            
         



             <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
        <!-- Redirect browsers with JavaScript disabled to the origin page -->
        <noscript><input type="hidden" name="redirect" value="https://blueimp.github.io/jQuery-File-Upload/"></noscript>
        <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
        <div class="row fileupload-buttonbar">
            <div class="col-lg-12">
                <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span>Adicionar imagens...</span>
                    <input type="file" name="files[]" multiple>
                </span>
                <button type="submit" class="btn btn-primary start">
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Iniciar upload</span>
                </button>
               <!-- <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Apagar fotos</span>
                </button>
                <input type="checkbox" class="toggle">-->
                <!-- The global file processing state -->
                <span class="fileupload-process"></span>
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
            </form>
        <br><br>        
        

                     
                      <button id="salvar_fotos" class="btn btn-primary">Salvar imagens</button>
                      <div id="div"></div>

        

      </div>
    </div>



<!-- AREA DO UPLOAD -->

<p>&nbsp;</p>
<h2>Fotos já cadastradas:</h2>
<p>&nbsp;</p>



 <table id="dataSelect" data-order='[[ 1, "desc" ]]' class="table table-hover">
                  <thead>
                    <th style="padding-left:8px;"><b>#</b></th>
                    <th style="padding-left:8px;"><b>foto</b></th>
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>

<?php 


$sql = "SELECT * FROM fotos WHERE id_origem = '$id'";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>

<tr>
   <td><?php echo $linha[$i]["id"]; ?></td>
   <td><img src="<?php echo $linha[$i]["foto"]; ?>" style="width:165px;padding:4px;border:1px solid #efefef;" /></td>
   <td>
     <a href="excluir-foto.php?id=<?php echo $linha[$i]["id"]; ?>&id_produto=<?php echo $id; ?>" class="btn btn-danger btn-xs">excluir</a>
   </td>

</tr>

<?php 

$i++;
endwhile;

?>

                  </tbody>                  
                  </table>   














  </div>

  <!-- ESPANHOL -->
  <div role="tabpanel" class="tab-pane fade" id="messages">
  	
                        <form method="post" action="action-adicionar-video.php" onSubmit="return ajaxSubmitB(this);">                       
                        
                        <input type="hidden" name="id" value="<?php echo $id; ?>" />

                        <div class="form-group">
                          <label>Título do video</label>
                          <input type="text" name="titulo" class="form-control" />
                        </div>

                        <div class="form-group">
                            <label>iframe de incorporação</label>
                            <textarea name="iframe" class="form-control" rows="8"></textarea>
                        </div>

                       <button class="btn btn-primary" type="submit">adicionar vídeo</button>                      
                      
                  </form>
                  <p>&nbsp;</p>
                  <p>&nbsp;</p>


 <table id="dataSelect2" class="table table-hover">
                  <thead>
                 
                    <th style="padding-left:8px;"><b>#</b></th>
                    <th style="padding-left:8px;"><b>Título do vídeo</b></th>   
                    <th style="padding-left:8px;"><b>Preview</b></th>   
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>


<?php 

$sql = "SELECT * FROM videos WHERE id_origem = '$id'";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>

                  <tr>
                     <td><?php echo $linha[$i]["id"]; ?></td>
                     <td><?php echo $linha[$i]["tipo"]; ?></td>
                     <td><?php echo $linha[$i]["iframe"]; ?></td>      
                     <td>  
                      <a href="excluir-video.php?id=<?php echo $linha[$i]["id"]; ?>&id_produto=<?php echo $id; ?>" class="btn btn-danger btn-xs">excluir</a>  
                     </td>    
                  </tr>
<?php 

$i++;

endwhile;


?>

                  </tbody>

  </table>                

                  

  </div>











  <!-- ESPANHOL -->
  <div role="tabpanel" class="tab-pane fade" id="messages2">
    
                        <form method="post" action="action-associar-artigo.php" onSubmit="return ajaxSubmit(this);">                       
                        
                       
<input type="hidden" name="id" value="<?php echo $id; ?>" />

 <table id="dataSelect3" class="table table-hover">
                  <thead>
                 
                    <th style="padding-left:8px;"><b>#</b></th>
                    <th style="padding-left:8px;"><b>Título do artigo</b></th>
                    <th style="padding-left:8px;"><b>Resumo</b></th>   
                    <th style="padding-left:8px;"><b>Ações</b></th>                  
                  </thead>
                 
                  <tbody>


<?php 

$sql = "SELECT * FROM artigos";
$result = $PDO->query( $sql );
$linha = $result->fetchAll( PDO::FETCH_ASSOC );

$tot_cliente = count($linha);

$i = 0;

while($i<$tot_cliente):

?>

                  <tr>
                     <td><?php echo $linha[$i]["id"]; ?></td>
                     <td><?php echo $linha[$i]["titulo"]; ?></td>
                     <td><?php echo $linha[$i]["resumo"]; ?></td>      
                     <td>  
                      <div class="checkbox">
                            <label>
                              <input type="checkbox" name="artigos[]" value="<?php echo $linha[$i]["id"]; ?>"

                              <?php 

                              $base_artigos = explode("###",$artigos_produto);
                              $tot_artigos = count($base_artigos);
                              $s = 0;
                              while($s<$tot_artigos):
                                if($base_artigos[$s]==$linha[$i]["id"]) echo " checked"; 
                                $s++;
                              endwhile;                                

                              ?>

                              > associoar
                            </label>
                          </div>
                     </td>    
                  </tr>
<?php 

$i++;

endwhile;


?>

                  </tbody>

  </table> 




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











<!-- CANVAS UPLOAD DE IMAGENS -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Iniciar</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancelar</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-success">Upload completo</span></div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
              
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancelar</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- CANVAS UPLOAD DE IMAGENS -->
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/global/plugins/respond.min.js"></script>
<script src="assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="js/jquery-2.1.4.js" type="text/javascript"></script>

<!-- APPEND ITENS -->

<script>

      jQuery(document).ready(function ($) {

          // ADCIONAR SUBSTITUTOS 
          //
          //$('body').on("click", '#addSubs', function () {
          $('#addSubs').click(function(){  
              $('#moreSubs').append('<p>&nbsp;</p><input type="text" name="substituicao[]" class="form-control" placeholder="Número original do produto" />')
              
          });
          

          // ADICIONAR ADICIONAIS
          //
          //$('body').on("click", '#addAdcionais', function () {
          $('#addAdcionais').click(function(){  
              $('#moreAdd').append('<p>&nbsp;</p><input type="text" name="adicionais[]" class="form-control" placeholder="Número original do produto" />')
              
          });
          
          // ADICIONAR OPCIONAIS
          // 
          //$('body').on("click", '#addOpcionais', function () {
          $('#addOpcionais').click(function(){  
              $('#moreOpt').append('<p>&nbsp;</p><input type="text" name="opicionais[]" class="form-control" placeholder="Número original do produto" />')
              
          });

      });



  </script>





<script src="js/jqueryui-1.9.2.min.js" type="text/javascript"></script>

<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="js/vendor/jquery.ui.widget.js"></script>
<!-- The Templates plugin is included to render the upload/download listings -->
<script src="js/tmpl.min.js"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script src="js/bootstrap.min.js"></script>
<!-- blueimp Gallery script -->
<script src="js/jquery.blueimp-gallery.min.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="js/jquery.fileupload.js"></script>
<!-- The File Upload processing plugin -->
<script src="js/jquery.fileupload-process.js"></script>
<!-- The File Upload image preview & resize plugin -->
<script src="js/jquery.fileupload-image.js"></script>
<!-- The File Upload audio preview plugin -->
<script src="js/jquery.fileupload-audio.js"></script>
<!-- The File Upload video preview plugin -->
<script src="js/jquery.fileupload-video.js"></script>
<!-- The File Upload validation plugin -->
<script src="js/jquery.fileupload-validate.js"></script>
<!-- The File Upload user interface plugin -->
<script src="js/jquery.fileupload-ui.js"></script>
<!-- The main application script -->
<script src="js/main.js"></script>
<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->

<script type="text/javascript">
// SALVAR FOTOS ENVIADAS
 $(function($){
            $('#salvar_fotos').click(function(){
            $.get("salvar-fotos.php?id=<?php echo $id; ?>",  function(html){ $("#div").html(html);});   
            //location.href="editar-imagens-upload.php";
            //setTimeout("location.href='editar-imagens-upload.php'", 2000);
            swal("Bom trabalho!", "Fotos foram cadastradas com sucesso! A página será atualizada automaticamente", "success");
            setTimeout("location.href='editar-produto.php?id=<?php echo $id; ?>'", 2500);
            });
        });
</script>


<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10-dev/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
          $('#dataSelect').dataTable({ordering: false,"language": {"url": "ptbr.json"} });
          $('#dataSelect2').dataTable({ordering: false,"language": {"url": "ptbr.json"} });
          $('#dataSelect3').dataTable({ordering: false,"language": {"url": "ptbr.json"} });
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
                swal("Bom trabalho!", 'Produto atualizado com sucesso', "success");
                //$('#sucesso').html('<div class="alert alert-success"><b>Informações atualizadas com sucesso</b></div>');
                //$("#basic").fadeOut(0);
                //$("#form_image").fadeIn(0);
                // return false so the form does not actually
                // submit to the page
                return false;
            }

             var ajaxSubmitB = function(form) {
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
                swal("Bom trabalho!", 'Vídeo cadastrado com sucesso', "success");
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

<?php 

if($_GET["foto"]=="apagada"||$_GET["video"]=="apagado"):

?>
<script type="text/javascript">
   swal("Bom trabalho!", 'Registro foi apagado com sucesso', "success");
</script>
<?php 

endif;

?>


<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>