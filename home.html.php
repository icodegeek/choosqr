<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Bienvenido a Choosqr</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.css">
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/styles.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<h1>Choosqr</h1>
				<form action="?publish" method="post" role="form">
					<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<textarea name="message" class="form-control" cols="25" rows="5"></textarea>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-lg-10">
							<div class="form-group">
								<input type="text" class="form-control" name="user" placeholder="Nombre de usuario">
							</div>
						</div>
						<button type="submit" class="btn btn-primary">Publicar</button>
					</div>
				</form>
				<hr>
				<div class="row">
					<div class="col-lg-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam expedita, quidem tempore ullam nesciunt sunt, enim necessitatibus officiis dolorem quod reiciendis molestias nobis nemo vero commodi velit at mollitia fuga!</p>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10 author">
						<small>por: <strong>UsuarioX</strong></small>
					</div>
					<div class="col-lg-1 col-lg-offset-10">
						<form action="?edit" method="post" role="form">
							<input type="hidden" name="idsms" value="">
							<button type="submit" class="btn btn-link btn-sm iconbutton"><i class="glyphicon glyphicon-pencil"></i></button>
						</form>
					</div>
					<div class="col-lg-1">
						<form action="?delete" method="post" role="form">
							<input type="hidden" name="idsms" value="">
							<button type="submit" class="btn btn-link btn-sm iconbutton"><i class="glyphicon glyphicon-trash"></i></button>
						</form>
					</div>
				</div>
				<hr>	
			</div>
		</div>
	</div>
</body>
</html>