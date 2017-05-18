<?php 
require_once 'includes/connect.php'; 
$sql ='CREATE TABLE IF NOT EXISTS users  (
	user_id int(255) auto_increment not null,
	name varchar(50),
	surname varchar(255),
	bio text,
	email varchar(255),
	password varchar(255),
	role varchar(20),
	image varchar(255),
	CONSTRAINT pk_users PRIMARY KEY(user_id)
)';


$create_user_table= $db->prepare($sql);
$create_user_table->execute();
if($create_user_table){
	echo "La tabla users se ha creado correctamente!!";
}

$sql="INSERT INTO users VALUES(NULL,'Victor','Robles','Web Developer 1', 'victor@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user1=$db->prepare($sql);
$insert_user1->execute();
if($insert_user1){
	echo "Usuario introducido";
}
$sql="INSERT INTO users VALUES(NULL,'Antonio','Robles','Web Developer 2', 'antonio@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user2=$db->prepare($sql);
$insert_user2->execute();
if($insert_user2){
	echo "Usuario introducido";
}

?>

