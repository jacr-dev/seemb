<?php
include_once("../../modelos/Tipo.php");

$tipo=$_POST['tipo'];
$turno=$_POST['turno'];


if((empty($tipo)) || (empty($turno)) ){
	$msgError="todos los campos son obligatorios";
	echo $msgError;
}
else{

		$crear_tipo= new Tipo();

		$mensaje=$crear_tipo->Crear($tipo,$turno);
		echo "<script  type='text/javascript' charset='utf-8' >alert('$mensaje');
		window.location.assign('../../vistas/vista_listar_tipos.php');
		</script>";		 
	} 



?>