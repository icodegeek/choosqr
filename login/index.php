<?php 

require_once '../location/url.php';
require_once $base_path.'db/connectdb.php';

session_start();

try {
	
	$sql = "SELECT * FROM tb_authors";
	$ps = $pdo->prepare($sql);
	$ps->execute();
	
} catch (PDOException $e) {
	
	die("No se puede mostrar la información: ".$e->getMessage());
}

while ($row = $ps->fetch(PDO::FETCH_ASSOC) ) {
	
	$authors[] = $row;
}

if (isset($_GET['login'])) {
	
	$email = htmlspecialchars($_POST['email'], ENT_QUOTES, 'UTF-8');
	$password = htmlspecialchars($_POST['password'], ENT_QUOTES, 'UTF-8');

	foreach ($authors as $author) {

		if (strcmp($author['email'], $email) == 0 && strcmp($author['password'], $password) == 0) {
			
			$_SESSION['user'] = $email;
			header('Location: '.$home);
			exit();
		}
	}

	$error = [];
}

require_once 'login.html.php';