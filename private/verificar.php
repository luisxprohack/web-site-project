<?php
//verificacion del ADMIN a la DB

require_once("conexion.php");

$user=$_POST['user'];
$password=$_POST['password'];
$bandera=0;
$client = 2;
$admin = 1;


$sql="SELECT *FROM usuarios";

$resultado=$conexion->query($sql);


while ($fila=$resultado->fetch_array(MYSQLI_ASSOC)){
	if ($fila["privilegios"] == 1) {
		if($fila["user"] == $user){
			if($fila["password"] == $password){

				session_start();
				$_SESSION["adminValid"] = $fila;
				$bandera = 1;
				break;
			}else{
				$bandera = 2;
				break;
			} 
		}else{
			$bandera = 3;
			break;
		} 
	}else{
		if($fila["user"] == $user){
			if($fila["password"] == $password){

				session_start();
				$_SESSION["adminClient"] = $fila;
				$bandera = 4;
				break;
			}else{
				$bandera = 2;
				break;
			}
		}else{
			$bandera = 3;
			break;
		} 
	}
}


$ruta="";

switch ($bandera) {
	case 1://todo correcto
		$ruta = "Location: admin.php";
		break;
	
	case 2://error en la password
		$ruta = "Location: login.php?v=2";
		break;

	case 3://error en el usuario
		$ruta = "Location: login.php?v=3";
		break;
	case 4:
		$ruta = "Location: ../index.php";
}

header($ruta);//redireccion segun ruta

?>