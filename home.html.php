<?php 

	if (!empty($errores['texto'])) {

		$errores_texto = 'has-error';	
	
	}else{
		
		$errores_texto = '';
	}

	if (!empty($errores['usuario'])) {
		
		$errores_usuario = 'has-error';
	
	}else{

		$errores_usuario = '';
	}

 ?>

 <!-- HEADER -->

<?php 
	
	require_once $base_path.'templates/header.php';
?>
				
				<form action="?publish" method="post" role="form">
					<div class="row">
					<div class="col-lg-12">
						<div class="form-group <?=$errores_texto?>">
							<textarea name="message" class="form-control" cols="25" rows="5"><?php if(isset($texto))echo$texto;?></textarea>
							<?php if (!empty($errores['texto']['vacio'])): ?>
								<p class="help-block">Por favor, introduzca un mensaje.</p><br>
							<?php endif; ?>
							<?php if (!empty($errores['texto']['longitud'])): ?>
								<p class="help-block">El mensaje no debe ser superior a 140 caracteres.</p><br>
							<?php endif; ?>
						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-lg-10">
							<div class="form-group <?=$errores_usuario?>">
								<input type="text" class="form-control" name="user" placeholder="Nombre de usuario"  value="<?php echo (isset($usuario))?$usuario:'';?>">
								<?php if (!empty($errores['usuario']['longitud'])): ?>
									<p class="help-block">El nombre de usuario debe tener al menos 3 caracteres.</p>
								<?php endif; ?>
							</div>
						</div>
						<button type="submit" class="btn btn-primary btnpublish">Publicar</button>
					</div>
				</form>
				<hr>
				<div class="row">
					<div class="col-lg-12">
					<?php if (!empty($mensajes)): ?>
						<?php foreach ($mensajes as $mensaje):?>
							<p><?=$mensaje['texto']?></p>
							<div class="row">
								<div class="col-lg-10 author">
									<small>por: <strong><?=$mensaje['autor']?></strong></small>
								</div>
								<div class="col-lg-1 col-lg-offset-10">
									<form action="<?=$home?>edit/" method="post" role="form">
										<input type="hidden" name="idsms" value="<?=$mensaje['id']?>">
										<button type="submit" class="btn btn-link btn-sm iconbutton"><i class="glyphicon glyphicon-pencil"></i></button>
									</form>
								</div>
								<div class="col-lg-1">
									<form action="?delete" method="post" role="form">
										<input type="hidden" name="idsms" value="<?=$mensaje['id']?>">
										<button type="submit" class="btn btn-link btn-sm iconbutton"><i class="glyphicon glyphicon-trash"></i></button>
									</form>
								</div>
							</div>
							<hr>
						<?php endforeach; ?>
					<?php else: ?>
						<h3>No existe ningún mensaje en la plataforma.</h3>
					<?php endif ?>
					</div>
				</div>

	<!-- FOOTER -->

<?php 
	require_once $base_path . 'templates/footer.php';
