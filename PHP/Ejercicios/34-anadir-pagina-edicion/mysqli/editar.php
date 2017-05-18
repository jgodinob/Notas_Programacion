<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/update_user.php'; ?>
<?php require_once 'includes/validate_form.php'; ?>

<?php 
//CONSEGUIR USUARIO
// si el parámetro está no existe o está vacio o no es un número, me llevas a index.php
if(!isset($_GET["user_id"]) || empty($_GET["user_id"]) || !is_numeric($_GET["user_id"])){
	header("Location:index.php");
}

$id=$_GET["user_id"];
$user_query=mysqli_query ($db,"SELECT * FROM users WHERE user_id={$id}");
//var_dump (mysqli_fethc_assoc($user)); 
//muestra los datos del usuario sin necesidad de recorrer toda la tabla, es un array asociativo
$user=mysqli_fetch_assoc($user_query);
// si el parámetro está no existe o está vacio dentro del array asociativo me llevas a index.php
if(!isset($user["user_id"])|| empty ($user["user_id"])){
	header("Location:index.php");
}
?>
<h2>Editar usuarios <?php echo $user["user_id"]."-".$user["name"]." ".$user["surname"]; ?></h2>
<form action="index.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control" <?php setValueField($user, "name") ?>/>
		<?php echo showError($errors, "name"); ?>
	</label>
	<br/>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control" <?php setValueField($user, "surname") ?> />
		<?php echo showError($errors, "surname"); ?>
	</label>
	<br/>
	<label for="bio">Biografia
		<textarea name="bio" class="form-control" > <?php setValueField($user, "bio", $textarea=true) ?> </textarea>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<br/>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control" <?php setValueField($user, "email") ?> />
		<?php echo showError($errors, "email"); ?>
	</label>
	<br/>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control">
	</label>
	<br/>
	<label for="password" <?php setValueField($user, "password") ?> >Password
		<input type="password" name="password" class="form-control"/>
		<?php echo showError($errors, "password"); ?>
	</label>
	<br/>
	<label for="select">select
		<select name="role" class="form-control">
<?php
// para mostrar la opción seleccionada usamos el siguiente código php
?>
		    <option value="0" <?php if ($user["role"]==0){ echo "selected='selected'";} ?> >Normal</option>
		    <option value="1" <?php if ($user["role"]==1){ echo "selected='selected'";} ?> >Administrador</option>
		</select>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-sucess"/>
</form>
<?php require_once 'includes/footer.php'; ?>
```