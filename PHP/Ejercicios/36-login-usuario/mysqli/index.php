<?php
include 'includes/redirect.php';
include 'includes/header.php';

$users = mysqli_query($db, "SELECT * FROM users");
?>

<table class="table">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>Ver/Editar</th>
	</tr>
	<?php while ($user = mysqli_fetch_assoc($users)) { ?>
	<tr>
		<td><?=$user["name"]?></td>
		<td><?=$user["surname"]?></td>
		<td><?=$user["email"]?></td>
		<td>
			<a href="ver.php?user_id=<?=$user["user_id"]?>" class="btn btn-success">Ver</a>
			<a href="editar.php?user_id=<?=$user["user_id"]?>" class="btn btn-warning">Editar</a>
			<?php if(isset($_SESSION["logged"]) && $_SESSION["logged"]["role"] == 1){ ?>
				<a href="borrar.php?id=<?=$user["user_id"]?>" class="btn btn-danger">Borrar</a>
			<?php } ?>
		</td>
	</tr>
	<?php } ?>
</table>

<?php
include 'includes/footer.php';
?>