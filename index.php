<?php 

require_once 'location/url.php';
require_once $base_path.'db/connectdb.php';

//Muestro mensaje y usuario que existe en la base de datos

try {

	$sql = "SELECT * FROM tb_messages ORDER BY create_at DESC";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	
} catch (PDOException $e) {
	
	die("No se puede mostrar la información: ".$e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	
	$mensajes[] = $row;
}

//Si se realiza una publicación

if (isset($_GET['publish'])) {
	
	//Filtro los datos de texto y usuario

	$texto = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
	$usuario = htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');

	//Creo un array errores para validar el formulario

	$errores = [];

	//Reglas de validación de los campos del formulario

	if ($texto == "") {
		
		$errores['texto']['vacio'] = true;
	}

	if (strlen($texto) > 140) {
		
		$errores['texto']['longitud'] = true;
	}

	if (strlen($usuario) < 3) {
		
		$errores['usuario']['longitud'] = true;
	}

	//Si el formulario no contiene errores de validación, guardo en la base de datos la información

	if (empty($errores)) {
		
		try {

			$sql = "INSERT INTO tb_messages (texto, autor) VALUES (:texto, :usuario)";
			$ps = $pdo->prepare($sql);
			$ps->bindValue(':texto', $texto);
			$ps->bindValue(':usuario', $usuario);
			$ps->execute();

		} catch (PDOException $e) {
			
			die("No se ha podido guardar la tarea en la base de datos:". $e->getMessage());
		}

		header("Location: .");
		exit();
	
	}else{

		require_once 'home.html.php';
		exit();
	}

}

require_once 'home.html.php';
