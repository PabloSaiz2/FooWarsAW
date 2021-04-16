<?php
	require_once('bootup.php');
    require_once('validation.php');
    include_once('mensaje.php');
    include_once('conexion.php')
?>
<?php
	$nombre=$_SESSION['username'];
	$busqueda = "SELECT id FROM comentarios WHERE usuario = '$nombre' ";
	$id_user = $conexion->query($busqueda);
	$ids =$id_user->fetch_assoc();
	$is=$ids['id'];
	$hilo = $_POST['comentario'];
	$info = $_POST['informacion'];
	$m= new Mensaje('$hilo','','true','$info');
	$fecha=date("Y-m-d");
	if($m->insertMensaje('$fecha')){
		header('Location: ./forum.php?pag=1')
	}
?>