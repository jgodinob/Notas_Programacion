<?php require_once 'connect.php'; ?>

<!DOCTYPE HTML>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Web con PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
</head>
<body>
	<div class="container">
		<h1>Web con php</h1>
		<hr/>
<?php
		//idenficamos si existe sesión iniciada para mostrar el header y footer
		if(isset($_SESSION["logged"])){ ?>
		<div class="col-lg-10">
			<a href="index.php" class="btn btn-success">Home</a>
			<a href="crear.php" class="btn btn-primary">Crear nuevo usuario</a>
		</div>
		<div class="col-lg-2">
			<?php 
				echo "Bienvenido ".$_SESSION["logged"]["name"]." "
				. $_SESSION["logged"]["surname"]." "
				. $_SESSION["logged"]["role"] ; ?>
				<a href="logout.php">Cerrar sesión</a>
		</div>
		<div class="clearfix"></div>
		<hr/>
		<?php } ?>
			
		<?php $variable = "Contenido"; ?>