<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cursophp";

//conectamos con el servidor
$connect_server = new mysqli( $servername , $username , $password );
//comprobamos si existe la base de datos $dbname, en caso de no existir la creamos y conectamos
$create_DB_sql ="CREATE DATABASE IF NOT EXISTS ".$dbname;
$create_dbname=mysqli_query($connect_server, $create_DB_sql);
// var_dump($create_dbname); devuelve true si estaba creada la base de datos
//condicional comprueba si exste la base de datos
/*
if($create_dbname){
	echo "Existe la Base de Datos";
}else{
	echo "Base de Datos Creada";
}
*/
$db = new mysqli( $servername , $username , $password , $dbname );
mysqli_query($db, "SET NAMES 'utf8'");
?>