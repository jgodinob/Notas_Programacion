<?php 
include 'includes/redirect.php';
require_once 'includes/header.php'; 							// incrustamos el header del archivo
require_once 'includes/function_showerror_setValueField.php'; 	// incrustamos la lógica de obtención de los datos del usuario
require_once 'includes/get_user.php'; 							// incrustamos la lógica de obtención de los datos del usuario
require_once 'includes/validate_form.php'; 						// incrustamos la lógica de validación de los datos del formulario
require_once 'includes/validate_image.php'; 					// incrustamos la lógica de validación de la imagen del formulario
require_once 'includes/update_user.php'; 						// incrustamos la lógica para subir archivos

//Para restringir el acceso a edición a sólo los perfiles de administrador
if(!isset($_SESSION["logged"]) || $_SESSION["logged"]["role"] != 1){
	header("Location: index.php");
}
?>

<h2>Editar usuarios <?php echo $user["user_id"]."-".$user["name"]." ".$user["surname"]; ?></h2>
<form action="" method="POST" enctype="multipart/form-data">

	<label for="name">Nombre:
		<input type="text" name="name" class="form-control" <?php setValueField($user, "name"); ?>/> 
		<?php echo showError($errors, "name"); ?>
	</label>
	<br/>

	<label for="surname">
		Apellidos:
		<input type="text" name="surname" class="form-control" <?php setValueField($user, "surname"); ?>/> 
		<?php echo showError($errors, "surname"); ?>
	</label>
	<br/>

	<label for="bio">
		Biografia:
		<textarea name="bio" class="form-control"><?php setValueField($user, "bio", true); ?></textarea>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<br/>

	<label for="email">
		Correo:
		<input type="email" name="email" class="form-control" <?php setValueField($user, "email"); ?>/> 
		<?php echo showError($errors, "email"); ?>
	</label>
	<br/>

	<label for="image">
	<?php 
		//comprueba si el campo imagen está vacio o no para mostrarlo
		if($user["image"] != null){ ?>
		Imagen de perfil:<img src="uploads/<?php echo $user["image"] ?>" width="120"/><br/>
	<?php } ?>
		Actualizar imagen de perfil:
		<input type="file" name="image" class="form-control" /> 
	</label>
	<br/>

	<label for="password">
		Contraseña:
		<input type="password" name="password" class="form-control" />
		<?php echo showError($errors, "password"); ?>
	</label>
	<br/>

	<label for="role">
		Rol:
		<select name="role" class="form-control">
<?php
// para mostrar la opción seleccionada usamos el siguiente código php
?>
			<option value="0" <?php if($user["role"] == 0){ echo "selected='selected'"; } ?>>Normal</option>
			<option value="1" <?php if($user["role"] == 1){ echo "selected='selected'"; } ?>>Administrador</option>
		</select>
		<?php echo showError($errors, "role"); ?>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-success" />
</form>
<?php require_once 'includes/footer.php'; ?>
```