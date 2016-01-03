<?php 

require_once '../location/url.php';
require_once $base_path.'db/connectdb.php';

session_start();

//Muestro información de cada mensaje según su id

if (isset($_POST['idsms'])) {
	
	$id = $_POST['idsms'];

	try{
		$sql = "SELECT id, texto FROM tb_messages WHERE id = :id";
		$ps = $pdo->prepare($sql);
		$ps->bindValue(':id', $id);
		$ps->execute();
	
	}catch(PDOException $e){
		
		die('No se puede extraer información del mensaje. Error: '.$e->getMessage() );
	}

	$mensaje = $ps->fetch(PDO::FETCH_ASSOC);
}

//Actualizar mensaje

if (isset($_GET['update'])) {
	
	$id = htmlspecialchars($_POST['idmessage'], ENT_QUOTES, 'UTF-8');
	$texto = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
	$error = [];

	if ($texto == "") {
		
		$error['texto']['vacio'] = true;
	}

	if (strlen($texto) > 140) {
		
		$error['texto']['longitud'] = true;
	}

	if(empty($error)){

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
		exit();
	
	}else{

		require_once 'edit.html.php';
		exit();
	}
}

require_once 'edit.html.php';

