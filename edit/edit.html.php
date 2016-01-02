<?php 
	
	require_once $base_path . 'templates/header.php';

?>

	<h5>Editar mensaje:</h5>
		<form action="?update" method="post" role="form">
			<div class="row">
				<div class="col-lg-12">
				 	<div class="form-group">
						<textarea name="message" class="form-control" cols="25" rows="5"><?=$mensaje['texto']?></textarea>
						<?php if (!empty($error['texto']['vacio'])): ?>
								<p class="help-block">Por favor, introduzca un mensaje.</p>
						<?php endif; ?>
						<?php if (!empty($error['texto']['longitud'])): ?>
								<p class="help-block">El mensaje no debe ser superior a 140 caracteres.</p>
						<?php endif; ?>
					</div>
					<input type="hidden" name="idmessage" value="<?=$mensaje['id']?>">
					<button type="submit" class="btn btn-primary col-lg-offset-5">Actualizar</button>
				</div>
			</div>
		</form>