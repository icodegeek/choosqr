<?php 

require_once 'location/url.php';
require_once 'home.html.php';

if (isset($_GET['publish'])) {
	
	$texto = htmlspecialchars($_POST['message'], ENT_QUOTES, 'UTF-8');
	$usuario = htmlspecialchars($_POST['user'], ENT_QUOTES, 'UTF-8');

	

}