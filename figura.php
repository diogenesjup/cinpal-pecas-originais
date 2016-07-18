<?php require("header.php"); ?>
	<!-- BEGIN PAGE HEAD -->
	<div class="page-head">
		<div class="container">
			<!-- BEGIN PAGE TITLE -->
			<div class="page-title">
				<h1>Painel <small>administrativo</small></h1>
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
          
              <div class="col-md-6">
              
                 <p>&nbsp;</p>
<div id="iPicture">
    <div class="slide"><div id="picture1" style="background: url('images/figura.jpg') no-repeat scroll 0 0 #393737; width: 900px; height: 528px;position: relative; margin:0 auto;"></div></div><br/>
  </div>	
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
                 <p>&nbsp;</p>
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
<script src="js/jquery-1.6.2.min.js" type="text/javascript"></script>
<script src="assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>


<script type="text/javascript" src="js/jQuery.iPicture.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.js"></script>

<script>
jQuery(document).ready(function(){
	$( "#iPicture" ).iPicture({
		animation: true,
		animationBg: "bgblack",
		animationType: "ltr-slide",
		pictures: ["picture1","picture2","picture3","picture4","picture5"],
		button: "moreblack",
		moreInfos:{"picture1":[{"id":"tooltip1","descr":"furniture: 299$","top":"185px","left":"393px"},{"id":"tooltip2","descr":"sofa: 199$","top":"346px","left":"483px"},{"id":"tooltip3","descr":"silver candle: 2.99$","top":"461px","left":"556px"}],"picture2":[{"id":"tooltip4","descr":"window","top":"71px","left":"423px"},{"id":"tooltip5","descr":"basket","top":"438px","left":"192px"},{"id":"tooltip6","descr":"hoven","top":"460px","left":"673px"}],"picture3":[{"id":"tooltip7","descr":"Organize the kitchen!","top":"391px","left":"560px"},{"id":"tooltip8","descr":"Hoven: 399$","top":"160px","left":"268px"},{"id":"tooltip9","descr":"chest of drawers","top":"386px","left":"180px"}],"picture4":[{"id":"tooltip10","descr":"pasta maker","top":"277px","left":"672px"},{"id":"tooltip11","descr":"stool","top":"291px","left":"281px"},{"id":"tooltip12","descr":"shelf","top":"144px","left":"579px"},{"id":"tooltip13","descr":"Dishes","top":"183px","left":"181px"}],"picture5":[{"id":"tooltip14","descr":"bed: 199$","top":"398px","left":"351px"},{"id":"tooltip15","descr":"asian style lamp","top":"146px","left":"380px"},{"id":"tooltip16","descr":"console: 105$","top":"273px","left":"567px"}]}
	});
	//set animation false and uncomment this block for a different animation effect
/*	$('.descr').css("display","none");
	$('.more').mouseover(function(){  
		$(this).find('.descr').css("display","");
	}).mouseout(function(){  
		$(this).find('.descr').css("display","none");
	});*/
});
</script>

<!-- END PAGE LEVEL SCRIPTS -->

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>