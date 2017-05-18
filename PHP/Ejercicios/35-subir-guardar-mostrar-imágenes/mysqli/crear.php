<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/insert_user.php'; ?>
<?php require_once 'includes/validate_form.php'; ?>

<h2>Crear usuarios</h2>
<form action="index.php" method="POST" enctype="multipart/form-data">
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
<?php require_once 'includes/footer.php'; ?>
```