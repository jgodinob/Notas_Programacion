<?php require_once 'includes/connect.php'; ?>
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
	<a href="crear.php" class="btn btn-primary">Crear nuevo usuario</a>
	<a href="index.php" class="btn btn-success">Listado</a>
	<hr/>
	<?php $variable="Contenido";?>