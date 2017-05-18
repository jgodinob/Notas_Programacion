<?php 
//función que mostrará los errores producidos al introducir los datos en el formulario
function showError($errors, $field){
	if(isset($errors[$field]) && !empty($errors[$field])){
		$alert='<div class="alert alert-danger" style="margin-top:5px;">'.$errors[$field].'</div>';
	}else{
		$alert='';
	}
	return $alert;
}
//función guardará el dato introducido en el formulario cuando este no sea valido
function setValueField($errors, $field, $textarea=false){
	if (isset($errors) && count($errors) >= 1 && isset($_POST[$field])){
		if($textarea !=false){
			echo $_POST[$field];
		}else{
			echo "value='{$_POST[$field]}'";
		}
	} 
}
//VALIDAR FORMULARIO
$errors=array();
if(isset($_POST["submit"])){

	if(!empty($_POST["name"]) && strlen($_POST["name"])<=20 && !is_numeric($_POST["name"]) && !preg_match("/[0-9]/",$_POST["name"])){
		$name_validate=true;
	}else{
		$errors["name"] = "El nombre no es válido.";
		$name_validate = false ;
	}
	if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"]) && !preg_match("/[0-9]/",$_POST["surname"])){
		$surname_validate=true;
	}else{
		$errors["surname"] = "El apellido no es válido.";
		$surname_validate = false ;
	}
	if(!empty($_POST["bio"])){ 	
		$bio_validate=true;
	}else{
		$errors["bio"] = "La biografía no puede estar vacía.";
		$bio_validate = false ;
	}
	if(!empty($_POST["email"]) && filter_var(($_POST["email"]), FILTER_VALIDATE_EMAIL)){
		$email_validate=true;
	}else{
		$errors["email"] = "El email no es válido.";
		$email_validate = false ;
	}
	if(!empty($_POST["password"]) && strlen($_POST["password"])<=6){ 
	//ciframos la contraseña mediante sha1
		$password_validate=true;
	}else{
		$errors["password"] = "El password no es válido.";
		$password_validate = false ;
	}
	if(isset($_POST["role"]) && is_numeric($_POST["role"])){ 
		$role_validate=true;
	}else{
		$errors["role"] = "El role no es válido.";
		$role_validate = false ;
	}
//	var_dump($_FILES["image"]);
	if(isset($_FILES["image"]) && !empty($_FILES["image"])){
		$role_validate=true;
	}

	// var_dump($errors);
	// Insertar usuario en la BD, la variable $db viene heredada de connect.php que se encuentra en header.php
	if(count ($errors)==0){
		$sql="INSERT INTO users VALUES (
			NULL,
			'{$_POST["name"]}',
			'{$_POST["surname"]}',
			'{$_POST["bio"]}',
			'{$_POST["email"]}',
			'".sha1($_POST["password"])."',
			'{$_POST["role"]}',
			NULL
			);";
		$insert_user=mysqli_query($db, $sql);
	}else{
		$insert_user=false;
	}
}
//mediante este condicional infomaremos del que el usuario se introdujo correctamente.
	if(isset($_POST["submit"]) && count ($errors)==0  && $insert_user != false){ 
?>
		<div class="alert alert-success">
			El usuario se ha enviado correctamente
		</div>
<?php	} 
//var_dump($errors);	
?>