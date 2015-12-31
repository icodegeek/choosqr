<?php 

require_once '../location/url.php';
require_once $base_path.'db/connectdb.php';

if (isset($_POST['idsms'])) {
	
	$id = $_POST['idsms'];

	try{
		$sql = "SELECT id, texto FROM tb_messages WHERE id = :id";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':id', $id);
		$ps->execute();
	
	}catch(PDOException $e){
		
		die('No se puede extraer información de la tarea. Error: '.$e->getMessage() );
	}

	$mensaje = $ps->fetch(PDO::FETCH_ASSOC);
}

if (isset($_GET['update'])) {
	
	$id = htmlspecialchars($_POST['idmessage'], ENT_QUOTES, 'UTF-8');
	$texto = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');

	try{
		$sql = "UPDATE tb_messages SET texto = :texto WHERE id = :id";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':texto', $texto);
		$ps->bindValue(':id', $id);
		$ps->execute();
	
	}catch(PDOException $e){
		
		die('No se pudo actualizar el mensaje. Error: '.$e->getMessage() );
	}

	header( 'Location: '.$home);

}


require_once 'edit.html.php';

