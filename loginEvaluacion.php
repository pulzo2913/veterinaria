<?
   session_start();
   $idmiembro=$_POST["idmiembro"];
   $password=$_POST["password"];
   //echo "idmiembro: ".$idmiembro;
   //echo "<br> password: ".$password;
   $conexion=mysql_connect("localhost","root","12345678") or die("Error en la conexión");
   mysql_select_db("veterinaria",$conexion) or die("Error en la base de datos");
   $sql="Select * from miembros where idmiembro='$idmiembro' and password='$password'";
   $recordSet=mysql_query($sql,$conexion) or die("Error en la sentencia SQL");
   $reg=mysql_fetch_array($recordSet);
   mysql_close($conexion);  
   $num=mysql_num_rows($recordSet);
   $ns=$reg["nivel"];
   if($num==1)
   {
	  $_SESSION['idmiembro']=$reg['idmiembro'];
	  $_SESSION["password"]=$reg["password"];
	 }
   else
   {
	echo '<script>alert("Ususario y/o contraseña incorrecto(s)");</script>';
	header("location:index.php");
	}
  if($ns==1)
  {
	  header("location:indexAdm.php");
	  }
	  else
   {
	header("location:Inicio.php");
   } 
?>