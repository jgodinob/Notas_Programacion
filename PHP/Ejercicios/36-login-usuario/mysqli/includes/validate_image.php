<?php 
//VALIDAR FORMULARIO
if(isset($_POST["submit"])){
	//Lógica validación de la imagen
	$image=null;
	if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])){
		/*
		comprobamos que existe el directorio upload dónde se alojaran las imágenes, si no existe se crea
		si existiera damos como true la variable $dir 
		*/
		if(!is_dir("uploads")){
			$dir=mkdir("uploads",0777,true);
		}else{
			$dir=true;
		}
		/*
		
		*/
		if($dir){
			// $filename determinará el nombre del archivo
			$filename=time()."_".$_FILES["image"]["name"];
			// movemos el archivo de su ubicación temporal en $_FILES al directorio con su nombre
			$muf=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/".$filename);
			$image=$filename;
			if($muf){
				$image_upload=true;
			}else{
				$image_upload=false;
				$errors["image"]="La imagen no se ha subido correctamente";
			}
		}
//		var_dump($_FILES["image"]);
//		die();
	}
}
