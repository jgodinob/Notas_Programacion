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
function setValueField($data, $field, $textarea=false){
	if (isset($data) && count($data) >= 1 ){
		if($textarea !=false){
			echo $data[$field];
		}else{
			echo "value='{$data[$field]}'";
		}
	} 
}
//VALIDAR FORMULARIO
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
}
