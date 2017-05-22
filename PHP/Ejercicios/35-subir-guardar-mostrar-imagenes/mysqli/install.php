<?php require_once 'includes/connect.php'; 
$sql ="CREATE TABLE IF NOT EXISTS users(
	usuario_id int(255) auto_increment not null,
	name varchar(50),
	surname varchar(255),
	bio text,
	email varchar(255),
	password varchar(255),
	role varchar(20),
	image varchar(255),
	CONSTRAINT pk_users PRIMARY KEY(user_id)
);";

$create_users_table=mysqli_query($db, $sql);

$sql="INSERT INTO users VALUES(NULL,'Victor','Robles','Web Developer 1', 'victor@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user1=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'Antonio','Robles','Web Developer 2', 'antonio@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user2=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'Manuel','Robles','Web Developer 3', 'Manuel@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user3=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'David','Robles','Web Developer 4', 'David@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user4=mysqli_query($db,$sql);

if($create_users_table){
	echo "La tabla users se ha creado correctamente!!";
}
?>