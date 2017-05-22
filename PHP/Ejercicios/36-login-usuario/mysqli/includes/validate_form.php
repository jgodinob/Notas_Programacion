<?php 
//VALIDAR FORMULARIO
if(isset($_POST["submit"])){

	if(!empty($_POST["name"]) && strlen($_POST["name"])<=20
		&& !is_numeric($_POST["name"]) && !preg_match("/[0-9]/", $_POST["name"])){
		$name_validate = true;
	}else{
		$name_validate = false;
		$errors["name"] = "El nombre no es válido.";
	}
	
	if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"]) && !preg_match("/[0-9]/", $_POST["surname"])){
		$surname_validate = true;
	}else{
		$surname_validate = false;
		$errors["surname"] = "Los apellidos no son válidos.";
	}
	
	if(!empty($_POST["bio"])){
		$bio_validate = true;
	}else{
		$bio_validate = false;
		$errors["bio"] = "La biografia no puede estar vacía";
	}
	
	if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		$email_validate = true;
	}else{
		$email_validate = false;
		$errors["email"] = "Introduce un email correcto";
	}
	if(isset($_POST["role"]) && is_numeric($_POST["role"])){
		$role_validate = true;
	}else{
		$role_validate = false;
		$errors["role"] = "Selecciona un rol de usuario";
	}

}
