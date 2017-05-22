<?php 
//función que mostrará los errores producidos al introducir los datos en el formulario
function showError($errors, $field){
	 if(isset($errors[$field]) && !empty($field)){
		$alert = '<div class="alert alert-danger" style="margin-top:5px;">'.$errors[$field].'</div>';
	 }else{
		 $alert = '';
	 }
	 return $alert;
}
//función guardará el dato introducido en el formulario cuando este no sea valido
function setValueField($data, $field, $textarea = false){
	if(isset($data) && count($data)>=1){ 
		if($textarea != false){
			echo $data[$field];
		}else{
			echo "value='{$data[$field]}'"; 
		}
	}
}
?>
