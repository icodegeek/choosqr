<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido a Choosqr</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?=$home?>css/styles.css">
</head>
<body>
	<div class="container">
		<?php if (isset($_SESSION['user'])): ?>
			<div class="row">
				<form action="?logout" method="post">
					<button type="submit" class="btn btn-primary btnlogout col-lg-offset-11">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout
					</button>
				</form>
			</div>
		<?php endif; ?>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Choosqr</h1>