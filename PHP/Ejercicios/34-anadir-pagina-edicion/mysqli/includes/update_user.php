<?php 
//VALIDAR FORMULARIO
$errors=array();
if(isset($_POST["submit"])){
/*
	if(!empty($_POST["password"]) && strlen($_POST["password"])<=6){ 
	//ciframos la contraseña mediante sha1
		$password_validate=true;
	}else{
		$errors["password"] = "El password no es válido.";
		$password_validate = false ;
	}
*/
	// Insertar usuario en la BD, la variable $db viene heredada de connect.php que se encuentra en header.php
	if(count ($errors)==0){
		$sql="UPDATE users SET  
			name='{$_POST["name"]}',  
			surname='{$_POST["surname"]}',  
			bio='{$_POST["bio"]}',
			email='{$_POST["email"]}', ";
			if(isset($_POST["password"]) && !empty($_POST["password"])){
				$sql.="password='".sha1($_POST["password"])."', ";
			}
			$sql.="role='{$_POST["role"]}'
			WHERE user_id={$user["user_id"]});";
//			echo $sql;
//			die();
		$update_user=mysqli_query($db, $sql);
	}else{
		$update_user=false;
	}
}
//mediante este condicional infomaremos del que el usuario se introdujo correctamente.
	if(isset($_POST["submit"]) && count ($errors)==0  && $update_user != false){ 
?>
		<div class="alert alert-success">
			El usuario se ha actualizado correctamente
		</div>
<?php	} 
//var_dump($errors);	
?>