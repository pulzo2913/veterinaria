<?php
	session_start();
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="../Veterinaria/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" src="../Veterinaria/sammy-0.5.4.min.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Diccionario| CARE PET</title>
<!-- core CSS -->
    <link href="../Veterinaria/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/animate.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Veterinaria/css/main.css" rel="stylesheet">
    <link href="../Veterinaria/css/responsive.css" rel="stylesheet">
    <link rel="shortcut icon" href="../Veterinaria/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../Veterinaria/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../Veterinaria/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../Veterinaria/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../Veterinaria/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css">
    body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	background-image: url(images/slider/bg5.jpg);
}
    </style>
</head>
<body>
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
        			 <li><a href="../Veterinaria/Inicio.php">Inicio</a></li>
                       <li><a href="../Veterinaria/Diccionario.php">Diccionario interactivo</a></li>
                       <li><a href="../Veterinaria/Consultas.php">Consultas</a></li>
                         <li><a href="../Veterinaria/actuUsu.php">Configuración</a></li>
    					 <li>
						 <?php
						 echo $_SESSION["idmiembro"];
						 ?>
                         </li>
                         <li>
                         <a href="../Veterinaria/logout.php">Cerrar Sesión</a></li>
                         </li>
                         <li>
                         <a href="../Veterinaria/Opinar.php">Comentarios</a></li>
                         </li>
                        
                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
<p>
  <MARQUEE BGCOLOR="orange">
   "Conoce cada detalle de tu mascota favorita a traves de nuestro diccionario interactivo y se parte de esta gran comunidad"
  </MARQUEE>
</p> 
<p align="center">Escribe el nombre del animalito que quieras consultar</p>
<table width="343" height="40" border="0" align="center">
  <tr> 
  
    <td width="46" height="25"> Estado</td>
    <td width="144">
    <form id="busc" action="procesoBuscar.php" method="post">
    <input type=text id="Estado" name="Estado" />
    
    <td><input type="submit" name="Buscar" id="buscar" value="Buscar" /></td>
   <p><a href="estados.html"></a>
  
   
    <td width="0">&nbsp;</td> 
   <p><a href="estados.html"></a>
   
   
      <td width="131"><input type="reset" name="reset" id="reset" value="Limpiar" />
    </form>
  </tr>
</table> 
 <tr>
  <td>&nbsp;</td>
    <td>&nbsp;</td>
</tr> 
</table>

</body>
</html>