<?php
//VALIDAR FORMULARIO
$errors=array();
if(isset($_POST["submit"])){
	if(!empty($_POST["password"]) && strlen($_POST["password"])<=6){ 
	//ciframos la contraseña mediante sha1
		$password_validate=true;
	}else{
		$errors["password"] = "El password no es válido.";
		$password_validate = false ;
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
			'{$image}'
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