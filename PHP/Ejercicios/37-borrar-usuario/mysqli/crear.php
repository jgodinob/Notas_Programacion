<?php 
include 'includes/redirect.php';
include 'includes/header.php';
require_once 'includes/header.php'; 				// incrustamos el header del archivo
require_once 'includes/function_showerror_setValueField.php'; 	// incrustamos la lógica de obtención de los datos del usuario
require_once 'includes/validate_form.php'; 			// incrustamos la lógica de validación de los datos del formulario
require_once 'includes/validate_image.php'; 		// incrustamos la lógica de validación de la imagen del formulario
require_once 'includes/insert_user.php'; 			// incrustamos la lógica parasubir archivos
?>

<h2>Crear usuarios</h2>
<!--Al usar en el formulario <form> el atributo enctype="multipart/form-data" 
indicamos aque ademas de la información queremos enviar archivos adjuntos
-->
<form action="crear.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control" <?php setValueField($errors, "name") ?>/>
		<?php echo showError($errors, "name"); ?>
	</label>
	<br/>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control" <?php setValueField($errors, "surname") ?> />
		<?php echo showError($errors, "surname"); ?>
	</label>
	<br/>
	<label for="bio">Biografia
		<textarea name="bio" class="form-control" > <?php setValueField($errors, "bio", $textarea=true) ?> </textarea>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<br/>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control" <?php setValueField($errors, "email") ?> />
		<?php echo showError($errors, "email"); ?>
	</label>
	<br/>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control">
	</label>
	<br/>
	<label for="password" <?php setValueField($errors, "password") ?> >Password
		<input type="password" name="password" class="form-control"/>
		<?php echo showError($errors, "password"); ?>
	</label>
	<br/>
	<label for="select">select
		<select name="role" class="form-control">
		    <option value="0">Normal</option>
		    <option value="1">Administrador</option>
		</select>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-sucess"/>
</form>
<?php 
// incrustamos el footer del archivo
require_once 'includes/footer.php'; 
?>
```