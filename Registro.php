<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro| BUY COMPU </title>
       <!--sCRIPTS  UPVM-->
   <script language="JavaScript" src="js/jquery-1.10.2.min.js"></script>
   <script language="JavaScript" src="js/md5.js"></script>

<script>
 $(document).ready(function() {
	$("#enviar").click(function (){
		
	 var hash = calcMD5($("#password").val());
	//document.form.hash.value=hash;
	$("#password").val(hash);
    	   var idmiembro=$("#idmiembro").val();
	   var password=$("#password").val();
	   var nombre=$("#nombre").val();
	   var apellidos=$("#apellidos").val();
	   var correo=$("#correo").val();
	   var ciudad=$("#ciudad ").val();
	   $.post("registroMiembro.php",
      {idmiembro:idmiembro, password:password, nombre:nombre, apellidos:apellidos, correo:correo,ciudad:ciudad}, 
      function(datos){
		   if(datos=="ok")
		   {
		  	alert("Gracias por Registrarte"); 
			window.history.back();
			$("#idmiembro").val('');
				 $("#password").val('');
				 $("#nombre").val('');
				 $("#apellidos").val('');
				 $("#correo").val('');
				 $("#ciudad").val('');
		   }
	   });
	   return false;
    });
 });
</script>
<script language="javascript">
  function encriptar()
  {
    hash = calcMD5(document.getElementById('password').value);
	//document.form.hash.value=hash;
	document.getElementById('hash').value=hash;
    alert(hash);
	document.form1.submit();
	return 0;
  }
  

</script>
    
    <!-- core CSS -->
    <link href="../Veterinaria/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/font-awesome.min.css" rel="stylesheet">
    <link href="../Veterinaria/css/prettyPhoto.css" rel="stylesheet">
    <link href="../Veterinaria/css/animate.min.css" rel="stylesheet">
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
    <style type="text/css">
    body,td,th {
	font-family: "Open Sans", sans-serif;
}
body {
	
}
    </style>
</head><!--/head-->

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
                    <a class="navbar-brand" href="../Veterinaria/index.html"><img src="../Veterinaria/images/icono.jpg" alt width="100"></a>
                </div>
			
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
        			 <li><a href="../Veterinaria/index.html">Inicio</a></li>
                      
                       <li><a href="Consultar.html">Consultar</a></li>
         <li class="active"><a href="Registro.php">Registro | Login</a></li>
						 <?php
						 echo $_SESSION["idmiembro"];
						 ?>
                         
                        
                   
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
    
    <section id="contact-info">  <!--F O R M U L A R I O-->
        <div class="center">                
            <h2>¡ R E G I S T R A T E !</h2>
            <p class="lead">Para conocer todos los consejos o recomendaciones para tu mascota</p>
        </div>
        
        <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                
 <form id="form1" class="form1" name="form1" method="post" action="">
                   
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
     <label>Usuario*</label> <input type="text" name="idmiembro" id="idmiembro" class="form-control" required>
                        </div>
                        <div class="form-group">
     <label>Password*</label> <input type="password" name="password" id="password" class="form-control" required>
                        </div>
                        <div class="form-group">
     <label>Correo*</label><input type="email" name="correo" id="correo" class="form-control" required>
                        </div>   
                             <div class="form-group">
     <label>Nombre*</label> <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
     <label>Apellidos</label><input type="text" name="apellidos" id="apellidos" class="form-control" required>
                        </div>    
                        <div class="form-group">
     <label>Ciudad*</label><input type="text" name="ciudad" id="ciudad" class="form-control" required>
                        </div>   
                        
                                             <div class="form-group">
 <button type="submit" name="enviar" id="enviar" value="enviar"  class="btn btn-primary btn-lg" required="required">R E G I S T R A R</button>                       <input name="hash" type="hidden" id="hash">
                        </div>   
                            
                    </div>
                    
                    </form> 
                    
                    
                    <div class="col-sm-5">
                       
                      
                       
                         <div class="get-started center wow fadeInDown">
                <h2>Ingresa a tu Sesión</h2>
                   <form id="form2" class="form2" name="form2" method="post" action="../veterinaria/loginEvaluacion.php">
                   <div class="form-group">
   <label>Usuario*</label> <input type="text" name="idmiembro" id="idmiembro" class="form-control" required>
                        </div>
                       <div class="form-group">
   <label>Password*</label> <input type="password" name="password1" id="password1" class="form-control" required>
                        </div> 
                        
                        <button type="submit" name="enviar" id="enviar" value="enviar"  class="btn btn-primary btn-lg" required="required">Iniciar Sesion</button>
						   </form>
                    	
                    </div>
                    
                
                
            </div><!--/.row-->
            
            
            
        
    </section>  <!--/FIN DE F O R M U L A R I O  -->

    

    
   

      <!--sCRIPTS  UPVM-->

   
    <script src="../Veterinaria/js/jquery.js"></script>
    <script src="../Veterinaria/js/bootstrap.min.js"></script>
    <script src="../Veterinaria/js/jquery.prettyPhoto.js"></script>
    <script src="../Veterinaria/js/jquery.isotope.min.js"></script>
    <script src="../Veterinaria/js/main.js"></script>
    <script src="../Veterinaria/js/wow.min.js"></script>
</body>
</html>