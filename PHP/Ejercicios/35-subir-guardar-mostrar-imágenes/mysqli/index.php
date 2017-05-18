<?php
include 'includes/header.php';
include 'includes/connect.php';
$users=mysqli_query($db, "SELECT * FROM users");
//	var_dump($users);	//
?>
<table class="table">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>Ver / Añadir</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($users)){ 
//	var_dump($row);		//
	?>
	<tr>
		<td> <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["surname"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
		<td>
			<a href="ver.php?user_id=<?php echo $row["user_id"]; ?>" class="btn btn-success">Ver</a>
			<a href="editar.php?user_id=<?php echo $row["user_id"]; ?>" class="btn btn-warning">Editar</a>
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>