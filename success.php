<?php ob_start(); ?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title>ReadBook | Home</title>

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

<script type="text/javascript" src="https://colo.cachefly.net/js/min.inject.js?id=PjwsPSI&ad_label=Admedia"></script> 

    </head>	

<body style="background-color: #FFF">   
<?php session_start()?>
<!--=== Top ===-->    
<div class="top">
    <div class="container">   
        <ul class="loginbar pull-right">
        <?php if( !isset($_SESSION['name']) ) { 
                    echo " <li><a href='login.php'>Iniciar sesión</a></li>";
                    }else{ echo "<li> <a href='cuenta.php'>".$_SESSION['name']."</a></li>"; }?>           
            <li class="devider"></li>
            <li><a href="reg.php">Registrarse</a></li>
            <li><a href="logout.php"> |  Cerrar Sesión</a></li>
        </ul>
    </div>      
</div><!--/top-->
<!--=== End Top ===-->    

<!--=== Header ===-->    
<div class="header">
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img id="logo-header" src="img/logo.png" alt="Logo">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown active">
                        <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Inicio
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="quiz.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Quiz
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="libros.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Ver libros
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="acerca.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">
                            Acerca de
                            <i class="icon-angle-down"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>    
    </div>    
</div>
<!--=== End Header ===-->    

<div class="purchase" style="background-color:#eee">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <span>¡REGISTRO EXITOSO!</span>
                <p>Ya eres parte de la comunidad, ahora inicia sesión para comenzar.</p>
            </div>
        </div>
    </div>
</div>	

<!--=== Copyright ===-->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-md-6">						
	            <p class="copyright-space">
                    ReadBook &copy; 2014. Todos los derechos reservados.
                </p>
			</div>
			<div class="col-md-6">	
				<a href="index.html">
                    <img id="logo-footer" src="img/logo.png" class="pull-right" alt="" />
                </a>
			</div>
		</div><!--/row-->
	</div><!--/container-->	
</div><!--/copyright-->	
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->			
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
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
<script src="js/horizontal.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
      	App.init();
        App.initSliders();
        Index.initParallaxSlider();


    });
</script>

</body>
</html>	