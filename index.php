<?php
	session_start();
	?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <script language="JavaScript" src="../Veterinaria/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../Veterinaria/sammy-0.5.4.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Inicio| CARE PET</title>
	
	<!-- core CSS -->
    <link href="../Veterinaria/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/animate.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Veterinaria/css/main.css" rel="stylesheet">
    <link href="../Veterinaria/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="../Veterinaria/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Veterinaria/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Veterinaria/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Veterinaria/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../Veterinaria/images/ico/apple-touch-icon-57-precomposed.png">
  <script type="text/javascript">
  $(document).ready(function(){ });
        var ratPack = $.sammy(function() {
          this.element_selector = '#contenido'; 
		  	 
			
		this.get('#/Glosario', function(context) {
 			  $("#contenido").load('Glosario.php');
          });
			
		this.get('#/Consultas', function(context) {
 			  $("#contenido").load('Consultas.php');
          });
		
		this.get('#/formulario', function(context) {
			  $("#contenido").load('Registro.php');
          });
		
		
  		  			  
        });
        $(function() {
          ratPack.run('#/inicio');
        });
    </script>
  
  
</head><!--/head-->

<body class="homepage">

    <header id="header">
     
        <nav class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../Veterinaria/index.php"><img src="../Veterinaria/images/logo.jpg" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
        			 <li><a href="../Veterinaria/index.php">Inicio</a></li>
                       <li><a href="Glosario.php">Glosario</a></li>
                       <li><a href="Consultar.php">Consultar</a></li>
         <li class="active"><a href="Registro.php">Registro | Login</a></li>
						 <?php
						 echo $_SESSION["idmiembro"];
						 ?>
                         
                        
                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
     <div id="contenido">  <!-- CONTENIDO DIV CLASE UPVM-->
     
    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(../Veterinaria/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Aqui encontraras las mejores recomendaciones para el cuidado de tu mascota!</h1>
                                    <h2 class="animation animated-item-2">Por el amor a nustras mascotas</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="../Veterinaria/images/slider/img1.jpg" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(../Veterinaria/images/slider/bg2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Descubre el mejor cuidado para el mejor amigo del hombre</h1>
                                    <h2 class="animation animated-item-2">Disfruta cada momento en compañia de tu mascota</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="../Veterinaria/images/slider/img2.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(../Veterinaria/images/slider/bg3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 class="animation animated-item-1">Ejercitate diario en compañia de tu mascota</h1>
                                    <h2 class="animation animated-item-2">Los animales mas fieles del mundo</h2>
                                    <a class="btn-slide animation animated-item-3" href="#">Read More</a>
                                </div>
                            </div>
                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="../Veterinaria/images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->
	</div>

   
      
            
    
    
   
    
    
    
    
    

    <section id="bottom">
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Meet the team</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Support</h3>
                        <ul>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Forum</a></li>
                            <li><a href="#">Documentation</a></li>
                            <li><a href="#">Refund policy</a></li>
                            <li><a href="#">Ticket system</a></li>
                            <li><a href="#">Billing system</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Developers</h3>
                        <ul>
                            <li><a href="#">Web Development</a></li>
                            <li><a href="#">SEO Marketing</a></li>
                            <li><a href="#">Theme</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Email Marketing</a></li>
                            <li><a href="#">Plugin Development</a></li>
                            <li><a href="#">Article Writing</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6">
                    <div class="widget">
                        <h3>Our Partners</h3>
                        <ul>
                            <li><a href="#">Adipisicing Elit</a></li>
                            <li><a href="#">Eiusmod</a></li>
                            <li><a href="#">Tempor</a></li>
                            <li><a href="#">Veniam</a></li>
                            <li><a href="#">Exercitation</a></li>
                            <li><a href="#">Ullamco</a></li>
                            <li><a href="#">Laboris</a></li>
                        </ul>
                    </div>    
                </div><!--/.col-md-3-->
            </div>
        </div>
    </section><!--/#bottom-->

    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

  <!--UPVM-->
   
   <!--FIN-->
    <script src="../Veterinaria/js/jquery.js"></script>
    <script src="../Veterinaria/js/bootstrap.min.js"></script>
    <script src="../Veterinaria/js/jquery.prettyPhoto.js"></script>
    <script src="../Veterinaria/js/jquery.isotope.min.js"></script>
    <script src="../Veterinaria/js/main.js"></script>
    <script src="../Veterinaria/js/wow.min.js"></script>
</body>
</html>