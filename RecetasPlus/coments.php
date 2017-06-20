<?php
	if (isset($_POST['Comentario'])) {	
		$host = "sql313.epizy.com";
	$username = "epiz_19830617";
	$db = "epiz_19830617_recetasPlusdb";
	$pass = "miguel1993";
		// Create connection
		$conn= mysql_connect($host, $username, $pass) or die("Error en la conexion");
		mysql_select_db($db, $conn) or die("Base de datos sin seleccionar");
	 	$usuario = $_POST['Comentario']['usuario'];
	 	$descripcion = $_POST['Comentario']['descripcion'];
	 	$receta=$_POST['Comentario']['receta'];
	 	$dificultad= $_POST['select1'];
	 	$precio=$_POST['select'];
	 	if($dificultad=="1"){
	 		$sqlqueryetiquetadif = "UPDATE RECETAS SET ETIQUETA_FACIL=IFNULL(ETIQUETA_FACIL,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($dificultad=="2"){
	 		$sqlqueryetiquetadif = "UPDATE RECETAS SET ETIQUETA_DIFICIL=IFNULL(ETIQUETA_DIFICIL,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($precio=="4"){
	 		$sqlqueryetiqueta = "UPDATE RECETAS SET ETIQUETA_COSTOSO=IFNULL(ETIQUETA_COSTOSO,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	if($precio=="3"){
	 		$sqlqueryetiqueta = "UPDATE RECETAS SET ETIQUETA_ECONOMICO=IFNULL(ETIQUETA_ECONOMICO,0) + 1  WHERE ID_RECETA=".$receta."";
	 	}
	 	$sqlqueryreceta = "INSERT INTO COMENTARIOS (DESCRIPCION, NOMBRE_USUARIO, ID_RECETA) VALUES ('$descripcion', '$usuario', ".$receta.")";
		$insertarComentarios = mysql_query($sqlqueryreceta);
		$insertarEtiqueta = mysql_query($sqlqueryetiqueta);
		$insertarEtiquetadif = mysql_query($sqlqueryetiquetadif);
		if (!$insertarComentarios) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		if (!$insertarEtiqueta) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		if (!$insertarEtiquetadif) {
			$mensaje = mysql_error();
			die($mensaje);
		}
		header("Location: recipe1.php?variable=".$receta);
	} 
	else{
		require("/PHPMailer_5.2.0/class.phpmailer.php");
		$mail = new phpMailer();
//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "smtp.gmail.com"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "menibapi@gmail.com"; // Correo completo a utilizar
$mail->Password = "Meguitan1995"; // Contraseña
$mail->Port = 465; // Puerto a utilizar

//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
$mail->From = "menibapi@gmail.com"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Nombre";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
$mail->AddAddress("megan.ibague@uptc.edu.co"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Titulo"; // Este es el titulo del email.
$body = "Hola mundo. Esta es la primer línea<br />";
$body .= "Acá continuo el <strong>mensaje</strong>";
$mail->AltBody = "Hola mundo. Esta es la primer línean Acá continuo el mensaje"; // Texto sin html
$mail->Body = $body; // Mensaje a enviar
$exito = $mail->Send(); // Envía el correo.

//También podríamos agregar simples verificaciones para saber si se envió:
if($exito){
echo 'El correo fue enviado correctamente.';

}else{
echo 'Hubo un inconveniente. Contacta a un administrador.';

}
		header("Location: index.php");
	}
?>