<?php
class tablaUsuario{

	var $matricula;
	var $contra;
	var $nombre;
	var $tipo;
	var $estatus;

	function __construct($mat, $con, $nom, $tip, $est){
			$this->matricula=$mat;
			$this->contra=$con;
			$this->nombre=$nom;
			$this->tipo=$tip;
			$this->estatus=$est;


	}

	function tablaUsuarioInsertar(){
		$mat=$this->matricula;
		$con=$this->contra;
		$nom=$this->nombre;
		$tip=$this->tipo;
		$est=$this->estatus;

		mysql_query("INSERT INTO usuarios(matricula, contra, nombre, tipo, estatus) VALUES ('$mat','$con','$nom','$tip','$est') ");

	}
}

?>