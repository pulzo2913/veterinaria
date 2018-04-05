<style type="text/css">
body {
	background-image: url(images/slider/15TDIuslhd_NOTHelios048.png.ximg.l_full_m.smart.png);
}
body,td,th {
	font-family: "Comic Sans MS", cursive;
	color: #FFF;
	font-weight: bold;
}
</style>
<?
  $idmiembro=$_POST[idmiembro];
  $password=$_POST[password];
  $nombre=$_POST[nombre];
  $apellidos=$_POST[apellidos];
  $correo=$_POST[correo];
  $ciudad=$_POST[ciudad];
  $nivel=$_POST[nivel];


  $conexion=mysql_connect("localhost","root","12345678") or die("Error en la conexion");
  mysql_select_db("veterinaria",$conexion) or die("Error en la base de datos");
  $sql="insert into miembros(idmiembro,password,nombre, apellidos, correo, ciudad) 
  values('$idmiembro','$password','$nombre','$apellidos','$correo', '$ciudad' )";
  
  mysql_query($sql, $conexion) or die("Error de SQL, checa la Sintaxis");
  
  mysql_close($conexion);
  echo "ok";
?>