<?php 
	
	require_once $base_path . 'templates/header.php';

 ?>

	<h5>Editar mensaje <?=$_POST['idsms']?>:</h5>
		<form action="?updatesms" method="post" role="form">
			<div class="row">
				<div class="col-lg-12">
				 	<div class="form-group">
						<textarea name="message" class="form-control" cols="30" rows="10"><?php if(isset($texto)) echo $texto;?></textarea>
					</div>
				</div>
			</div>
		</form>