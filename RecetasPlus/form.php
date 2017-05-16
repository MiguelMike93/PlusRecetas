<?php
	include 'DataDb.php';

	class form {

		function saveRecipe($usuario,$NOMBRE_RECETA, $INGREDIENTE, $IMAGEN_RECETA, $PREPARACION, $TIPO_RECETA){
			$dataDb=new DataDb();
			$conn = new mysqli($dataDb->getHost(),$dataDb->getUsername(),$dataDb->getPass(),$dataDb->getDB())or die("Error en la conexion");
			
			$queryUser = "INSERT INTO USUARIOS (NOMBRE_USUARIO) VALUES('$usuario')";
			$queryRecipe = "INSERT INTO RECETAS (NOMBRE_RECETA,INGREDIENTE,IMAGEN_RECETA,PREPARACION,TIPO_RECETA) VALUES ('$receta','$ingredientes','$imagen','$preparacion','$categoria')";
				$insertarReceta = conn->query($queyUser);
				$insertarUsuario = conn->query($queryRecipe);
				if (!$insertarReceta) {
					$mensaje = mysql_error();
					die($mensaje);
				}if (!$insertarUsuario) {
					$mensaje2 = mysql_error();
					die($mensaje2);
					}header("Location: http://www.recetas.epizy.com");
				
	 } 


	 function returnRecipe(){
	 	$dataDb=new DataDb();
		$conn = new mysqli($dataDb->getHost(),$dataDb->getUsername(),$dataDb->getPass(),$dataDb->getDB())or die("Error en la conexion");
		$query = "SELECT ID_RECETA,NOMBRE_RECETA FROM RECETAS LIMIT 20 OFFSET 4";
	 	$registro=$conn->query($query) or die("No canciona" .mysql_error());
	 	return $registro;
	 	
	 }

	}
?>