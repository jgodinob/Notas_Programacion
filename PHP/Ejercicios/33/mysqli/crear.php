<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/validate_form.php'; ?>

<h2>Crear usuarios</h2>

<?php //mediante este condicional infomaremos del que el usuario se introdujo correctamente.
	if(isset($_POST["submit"] && count ($errors)==0  && $insert_user != false){ ?>
		<div class="alert alert-success">El usuario se ha enviado correctamente</div>
<?php	} ?>
<form action="crear.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control" <?php setValueField($errors, "name")/><br/>
		<?php echo showError($errors, "name"); ?>
	</label>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control"<?php setValueField($errors, "surname")/><br/>
		<?php echo showError($errors, "surname"); ?>
	</label>
	<label for="bio">Biografia
		<textarea name="bio" class="form-control"<?php setValueField($errors, "bio", true)/><br/>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control"<?php setValueField($errors, "email")/><br/>
		<?php echo showError($errors, "email"); ?>
	</label>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control"><br/>
	</label>
	<label for="password">Password
		<input type="password" name="password" class="form-control"/><br/>
		<?php echo showError($errors, "password"); ?>
	</label>
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