<?php session_start()?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ReadBook | <?php echo $_SESSION['name']; ?></title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/responsive.css">      
    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="css/flexslider.css">    	
    <link rel="stylesheet" href="css/parallax-slider.css">
    <link rel="stylesheet" href="css/default.css">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/ospb.css">
    <link rel="stylesheet" href="css/horizontal.css">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
	<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
	
   
    </head>	

<body style="background-color: #FFF">
<!--=== Top ===-->    
<div class="top">
    <div class="container">   
        <ul class="loginbar pull-right">
               <?php 
               if(!isset($_SESSION['name'])) { 
                    echo '<li><a href="login.php">Iniciar sesión</a></li> 
                    <li class="devider"></li>
                    <li><a href="reg.php">Registrarse</a></li>';
                }else{ 
                    echo "<li> <a href='cuenta.php'>".$_SESSION['name'].'</a></li>
                    <li class="devider"></li>
                    <li><a href="logout.php">  Cerrar Sesión</a></li>'; 
                }
                ?>
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->     

<!--=== Header ===-->    
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo-header" src="img/logo.png" alt="Logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="index.php">
                            INICIO
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="quiz.php">
                            QUIZ
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="libros.php">
                            VER LIBROS
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="about.php">
                            ACERCA DE
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                </ul>     
            </div><!-- /navbar-collapse -->
        </div>    
    </div>    
</div><!--/header--> 

<!--=== Breadcrumbs ===-->
<style>
	h1.aux{
		font-size:1.3em;
		float:right;
	}
</style>
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Perfil</h1>
        <?php echo '<h1 class="aux"><a href="reg.php">Modificar información de la cuenta</a></h1>'; 
	?>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->


<!--=== Content Part ===-->
<div class="container">	
<h1>Favoritos</h1>
<?php
	
	include_once("infousuario.php");
    if ($res!=false) {
           $cont=1;
           $grid="";
           foreach ($res as $key => $value) {
               if($cont==1){
                    $grid.='<div class="row service-v1 margin-bottom-40">';
               }

               $grid.='<div class="col-md-3 md-margin-bottom-40" id="'.$value['ISBN'].'">
                            <img src="img/'.$value['ISBN'].'.png" alt="'.$value['titulo'].'.png">
                            <h3>'.$value['titulo'].'</h3><a href="javascript:void(0)" class="favorito" id="'.$value['ISBN'].'"><img src="img/delete.png" style="width: 32px; height: 32px; margin-bottom: 10px" > </a>
                            <p class="resume">'.addslashes($value['descripcion']).'</p>
                        </div>';
                        $cont++;
                if($cont==5){
                  $grid.="</div>";
                  $cont=1;
               }
            }
            if($cont!=1){
                  $grid.="</div>";
                  $cont=1;
            }

            echo $grid;
        
    }?>

</div><!--/container-->		

<!--=== Copyright ===-->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">						
	            <p class="copyright-space">
                    ReadBook &copy; 2014. Todos los derechos reservados.
                </p>
			</div>
			<div class="col-md-6">	
				<a href="index.php">
                    <img id="logo-footer" src="img/logo.png" class="pull-right" alt="" />
                </a>
			</div>
		</div><!--/row-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="js/hover-dropdown.min.js"></script> 
<script type="text/javascript" src="js/back-to-top.js"></script>
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="js/flexslider-min.js"></script>
<script type="text/javascript" src="js/modernizr.js"></script>
<script type="text/javascript" src="js/cslider.js"></script> 
<!-- JS Page Level -->           
<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<script src="js/plugins.js"></script>
<script src="js/sly.min.js"></script>
<script src="js/readmore.js"></script>
<script src="js/horizontal.js"></script>

 <script>
    $('.resume').readmore({maxHeight: 150});
  </script>

 <script>
    $('.desc').readmore({maxHeight: 200});

    $(".favorito").click(function(){
        var isbn=$(this).attr("id");
        $.ajax({
            method:"POST",
            url: "deletefav.php",
            data:{'isbn': isbn},
            success:function(cosas){
                if(cosas==1){
                   $("#"+isbn).css("display","none");
                }
                
             
            }

            });
    });
  </script>


</body>
</html>	
