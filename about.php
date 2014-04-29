<?php session_start()?>
<html lang="es">
<head>
    <title>READBOOK | Acerca de</title>

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
    <!-- CSS Style Page -->    
    <link rel="stylesheet" href="css/login.css">
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="css/default.css" id="style_color">
    <link rel="stylesheet" href="css/app.css">
    
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head> 

<body> 
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
<!--=== End Header ===-->    

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Acerca de</h1>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">     
    <div class="row margin-bottom-30">
        <div class="col-md-6 md-margin-bottom-40">
            <p>Readbook es un sitio dedicado a mejorar el indice de alfabetismo de nuestro país, creado por estudiantes del Tecnológico de Monterrey campus Querétaro. Creemos que apoyar
            con un grano de arena a la educación en México en conjunto puede cambiar nuestra nación por completo. Somos un equipo conformado por ingenieros en sistemas computacionales de 6to semestre. el sitio
            actual es parte del curso de Desarrollo Web, impartido por Eduardo Juárez.<br/> El sitio cuenta con las siguientes tecnologías:</p>
            <ul class="list-unstyled">
                <li><i class="icon-ok color-green"></i> PHP</li>
                <li><i class="icon-ok color-green"></i> AJAX</li>
                <li><i class="icon-ok color-green"></i> JAVASCRIPT</li>
                <li><i class="icon-ok color-green"></i> HTML5</li>
                <li><i class="icon-ok color-green"></i> CSS</li>
            </ul><br />

            <blockquote>
                <p>Un libro abierto es un cerebro que habla, cerrado un amigo que espera, olvidado un alma que perdona, destruido un corazón que llora.</p>
                <small>Anónimo</small>
            </blockquote>
        </div>

        <div class="col-md-6 md-margin-bottom-40">
            <div class="responsive-video">
                <iframe src="http://player.vimeo.com/video/38681202" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
            </div>
        </div>
    </div><!--/row-->

    <!-- Meer Our Team -->
    <div class="headline"><h2>Equipo</h2></div>
    <div class="row team">
        <div class="col-sm-3">
            <div class="thumbnail-style">
                
                <h3><a>Gregory Villicaña</a> <small>Database manager</small></h3>
                <p>Deportista dévoto y aficionado de las computadoras y la tecnología en general, con la meta de superarse a sí mismo y emprender un negocio por su cuenta. Actualmente desarrolla aplicaciones
                móviles, las cuales considera como una posible opción de trabajo en un futuro.</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail-style">
                <h3><a>Ana González</a> <small>Project manager</small></h3>
                <p>Excelente organizadora de equipos, además de contar con experiencia de trabajo en desarrollo web. Tiene la meta de conseguir un puesto de alta jerarquía en una de las
                empresas internacionales de software más reconocidas.</p>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="thumbnail-style">
                <h3><a>Jorge Hernández</a> <small>Design manager</small></h3>
                <p>Indispensable miembro de equipo, que siempre da un paso más que los demás. Actualmente trabaja en desarrollo móvil para en un futuro abrir un negocio propio dedicado al desarrollo de software integral
                desde los sitios web hasta el desarrollo de aplicaciones móviles.</p>
            </div>
        </div>
    </div><!--/team-->
    <!-- End Meer Our Team -->
</div><!--/container-->     

<!--=== Copyright ===-->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">                      
                <p class="copyright-space">
                    2013 &copy; READBOOK. ALL Rights Reserved.
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
<script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<!-- JS Page Level -->           
<script type="text/javascript" src="js/app.js"></script>


</body>
</html> 