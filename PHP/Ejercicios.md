PHP - Introducción
=========================
INDICE
------
1. [ESTRUCTURA Y CARACTERÍSTICAS](#1estructura-y-caracterÍsticas)
	1. [PHP y HTML](#11php-y-html)
	2. [Los Caractéres de Escape](#12los-caractéres-de-escape)
	3. [Comentarios en PHP](#13comentarios-en-php)
2. [VARIABLES](#2variables)
	1. [Concepto de Variables](#21concepto-de-variables)
	2. [Variables Dinámicas](#22variables-dinámicas)
3. [Tipos de Datos](#3tipos-de-datos)
	1. [Introducción a los tipos de datos](#31introducción-a-los-tipos-de-datos)
	2. [Boleanos](#boleanos)
	3. [Entero](#entero)
	4. [Coma Flotante](#coma-flotante)
	5. [Cadena](#cadena)
	6. [Matrices](#matrices)
4. [HACIENDO CÁLCULOS EN PHP: EXPRESIONES ARITMÉTICAS Y OPERADORES](#4haciendo-cÁlculos-en-php-expresiones-aritmÉticas-y-operadores)
	1. [Introducción a los operadores](#41introducción-a-los-operadores)
	2. [Operadores de asignación](#42operadores-de-asignación)
	3. [Operadores para concatenar cadenas](#43operadores-para-concatenar-cadenas)
	4. [Operadores aritméticos](#44operadores-aritméticos)
	5. [Incremento y decremento](#45incremento-y-decremento)
	
----

**Ejercicio 1.** Escribe un programa que muestre la dirección IP del usuario que visita nuestra web y si usa Firefox darle la enhorabuena.
```php
<?php
$ip = $_SERVER["REMOTE_ADDR"];
$browser = $_SERVER["HTTP_USER_AGENT"];
echo "Tu IP es ".$ip;
if(strstr($browser, "Firefox") == true){
	echo "<h1>El navegador que usas es Firefox ENHORABUENA</h1>";
}else{
	echo "<p>NO USAS FIREFOX</p>";
}
```

**Ejercicio 2.** El cálculo del factorial se realiza en un bucle que va disminuyendo el valor de una variable y multiplicando todos los valores entre sí, como ya hemos visto anteriormente.
Aprovechando este patrón puede crear una función que realice la factorial del número que le pasemos por parámetro, ahorrando así líneas de código.

**Ejercicio 3.** Utiliza una función de PHP para mostrar la fecha actual por pantalla.
```php
echo "<p>Fecha actual: </p>";
echo date("d-m-Y");
```

**Ejercicio 3.1.** Sacar información función introducida.
```php
<?php
$hoy=date("d.m.y");
function datosHoy($date){
	// día del mes 
	$days2 = date ( "d", strtotime ($date) );
	// día del mes sin cero a la izquierda
	$days1 = date ( "j", strtotime ($date) );
	// día de la semana de la fecha 
	$dayWeekDate = date ( "l", strtotime ($date) );
	// número de días que tiene el mes dado
	$numberDaysMonth = date ( "t", strtotime ($date) );
	// días que faltan para finalizar el mes
	$remainsDays = $numberDaysMonth - $days1;
	// número mes del año
	$monthN = date ( "m", strtotime ($date) );
	// tres primeras letras del mes
	$monthL = date ( "F", strtotime ($date) );
	// año número dos dígitos
	$year2 = date ( "y", strtotime ($date) );
	// año número 4 dígitos
	$year4 = date ( "Y", strtotime ($date) );
	
	// Día de la semana del primer día del mes
	$firstDayMonth=date("l",mktime(0, 0, 0, $monthN, 1, $year4));
}
datosHoy($hoy);
```
**Ejercicio 3.2.** Sacar información función introducida.
```php
<?php
<?php
$datos=
	[
		0=>
			[
				'id'			=>	13,
				'date'			=>	'30-08-2012',
				'nombre'		=>	'pepe',
				'horaentrada'	=>	'8:50',
				'horasalida'	=>	'14:35'
			],
		1=>
			[
				'id'			=>	84,
				'date'			=>	'22-12-2012',
				'nombre'		=>	'pepe',
				'horaentrada'	=>	'8:50',
				'horasalida'	=>	'14:35'
			],
		2=>
			[
				'id'			=>	75,
				'date'			=>	'25-01-2013',
				'nombre' 		=>	'pepe',
				'horaentrada'	=>	'8:50',
				'horasalida'	=>	'14:35'
			],
		3=>
			[
				'id'			=>	75,
				'date'			=>	'25-01-2013',
				'nombre' 		=>	'pepe',
				'horaentrada'	=>	'8:50',
				'horasalida'	=>	'14:35'
			]
	];
var_dump($datos);
echo "<br>";
foreach ($datos as $clave=>$value) {
	echo "La fecha de la fila ".$clave." es: ".$datos[$clave]['date']."<br>";
	
};

function orderOldestFirst( $a, $b ) {
    return strtotime($a['date']) - strtotime($b['date']);
};

function orderOldestLast( $a, $b ) {
    return strtotime($b['date']) - strtotime($a['date']);
};
 
function showArray($datos) {
	foreach($datos as $dato) 
		echo "{$dato['date']} -> {$dato['nombre']}<br/>";
};
 
echo "FECHAS ANTIGUAS PRIMERAS<br>"; 
usort($datos, 'orderOldestFirst');
showArray($datos);

echo "FECHAS ANTIGUAS ÚLTIMAS<br>";
usort($datos, 'orderOldestLast');
showArray($datos);

echo "<br>";
var_dump($datos);

function datesArray ($datos){
	$length=count($datos)-1;
	for( $clave=0 ; $clave<=$length ; $clave++ ){
		echo $datos[$clave]['date']."<br>";
		$datesArray[$clave]['date']=$datos[$clave]['date'];
		$datesArray[$clave]['month']=date('F', strtotime($datos[$clave]['date']));
		$datesArray[$clave]['weekday']=date('l', strtotime($datos[$clave]['date']));	
	};
	
	return $datesArray;
};
$result=datesArray ($datos);
var_dump($result);
	/*
$result = datesArray($datos);
$result=array_unique($result);
*/
```
**Ejercicio 4.** Utiliza los includes de PHP para tener una estructura html básica y separar el código por el header, body y footer.

|**index.php**   |
|----------------|
```php
<?php
include 'includes/header.php';
?>
<p>Texto del Body en el index </p>
<?php
include 'includes/footer.php';
?>
```
|**includes/header.php**   |
|--------------------------|
```php
<?php
<!DOCTYPE HTML>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Web con PHP</title>
</head>
<body>
?>
```
|**includes/footer.php**   |
|--------------------------|
```php
<?php
	<hr/>
	<footer>
		&copy; Víctor Robles <?php echo date("Y"); ?> <?php echo $variable; ?>
	</footer>
</div>
</body>
</html>
?>
```

**Ejercicio 5.1.** Utiliza la función filter_var para comprobar si el email que nos llega por la URL es un email valido.
```php
<?php
function validateEmail($email){
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$status="VALIDO";
	}else{
		$status="MO VALIDO";
	}
	return $status;
}
if(isset ($_GET["email"])){
	$email=$_GET["email"];	
}
echo validateEmail($email);
?>
```

**Ejercicio 5.2.** Utiliza la función filter_var para comprobar si una url que nos llega por la URL es una url valida.
```php
<?php
function validateURL($url){
	if(!empty($url) && filter_var($url, FILTER_VALIDATE_URL)){
		$status="VALIDO";
	}else{
		$status="MO VALIDO";
	}
	return $status;
}
if(isset ($_GET["url"])){
	$url=$_GET["url"];	
}
echo validateURL($url);
?>
```



**Ejercicio 6.** Crea una sesión que vaya aumentando su valor en uno o disminuyendo en uno en función de si el parámetro GET “counter” está a uno a cero.
```php
<?php
session_start();
if(!isset($_SESSION["numero"])){
	$_SESSION["numero"]=0;
}
$_SESSION["numero"]=0;
if(isset($_GET("counter") && $_GET["counter"]==1){
	$_SESSION["numero"]++;
}elseif(isset($_GET("counter") && $_GET["counter"]==0){
	$_SESSION["numero"]--;
}
echo "Sesión número: ".$_SESSION["numero"];
?>
```
**Ejercicio 7.** Crea un formulario HTML con los siguientes campos:
- Nombre
- Apellidos
- Biografía
- Email
- Contraseña
- Imagen

|**includes/header.php**   |
|--------------------------|
```php
<!DOCTYPE HTML>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Web con PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
</head>
<body>
	<div class="container">
	<h1>Web con php</h1>
	<hr>
	<?php $variable="Contenido";?>
```

|**includes/footer.php**   |
|--------------------------|
```php
	<hr/>
	<footer>
		&copy; Víctor Robles <?php echo date("Y"); ?> <?php echo $variable; ?>
	</footer>
</div>
</body>
</html>
```

|**crear.php**  |
|---------------|
```php
<?php require_once 'includes/header.php'; ?>
<h2>Crear usuarios</h2>
<form action="recibir.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control"><br/>
	</label>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control"><br/>
	</label>
	<label for="bio">Biografia:
		<textarea name="bio" class="form-control"></textarea><br/>
	</label>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control"><br/>
	</label>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control"><br/>
	</label>
	<label for="password">Password
		<input type="password" name="password" class="form-control"><br/>
	</label>
	<label for="select">select
		<select name="role" class="form-control">
		    <option value="0">Normal</option>
		    <option value="1">Administrador</option>
		</select>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-sucess"/>
</form>
<?php require_once 'includes/footer.php'; ?>
```
**Ejercicio 8.** Recoge los datos de las variables POST y muéstralos por pantalla en el caso de que existan y no estén vacíos.

Archivos Ejercicio anterior.

|**includes/header.php**   | **includes/footer.php**  | **crear.php**  |
|--------------------------|--------------------------|----------------|

| **recibir.php**  |
|------------------|
```php
<?php 
//Recibiendo el campo submit sabemos que el formulario se envió
if(isset($_POST["submit"])){
	//usamos var_dump para ver los datos introducidos metodo POST
	var_dump($_POST);
	//vemos si llegan o no vacios cada entrada del formulario
	if(!empty($_POST["name"])){ 	
		echo $_POST["name"]."<br/>"; 	}	
	if(!empty($_POST["surname"])){ 	
		echo $_POST["surname"]."<br/>"; }
	if(!empty($_POST["bio"])){ 	
		echo $_POST["bio"]."<br/>"; 	}
	if(!empty($_POST["email"])){ 	
		echo $_POST["email"]."<br/>"; 	}
	if(!empty($_POST["password"])){ 
	//ciframos la contraseña mediante sha1
		echo sha1($_POST["password"])."<br/>";}
	if(!empty($_POST["role"])){ 
		echo $_POST["role"]."<br/>";}
}
?>
```
**Ejercicio 9.** Valida el formulario con las siguientes reglas:
- Nombre: Solo puede estar formado por letras y tener una longitud máxima de 20 caracteres.
- Apellidos: Solo puede estar formado por letras.
- Biografía: No puede estar vacío.
- Email: tiene que ser un email válido.
- Contraseña: Debe tener una longitud mayor que 6 caracteres.
- Imagen: Puede estar vacía.

Archivos Ejercicio anterior.

|**includes/header.php**   | **includes/footer.php**  | **crear.php**  |
|--------------------------|--------------------------|----------------|

| **recibir.php**  |
|------------------|
```php
<?php
//Recibiendo el campo submit sabemos que el formulario se envió
if(isset($_POST["submit"])){
	//usamos var_dump para ver los datos introducidos metodo POST
	var_dump($_POST);
	if(!empty($_POST["name"]) && strlen($_POST["name"])<=20 && !is_numeric($_POST["name"]) && !preg_match("/[0-9]/",$_POST["name"])){
		echo $_POST["name"]."<br/>";
	}
	if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"]) && !preg_match("/[0-9]/",$_POST["surname"])){
		echo $_POST["surname"]."<br/>";
	}
	if(!empty($_POST["bio"])){ 	
		echo $_POST["bio"]."<br/>"; 	
	}
	if(!empty($_POST["email"]) && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
		echo $_POST["email"]."<br/>"; 	
	}
	if(!empty($_POST["password"]) && strlen($_POST["password"])<=6){ 
	//ciframos la contraseña mediante sha1
		echo sha1($_POST["password"])."<br/>";
	}
	if(!empty($_POST["role"])){ 
		echo $_POST["role"]."<br/>";
	}
	var_dump($_FILES["image"]);
	if(isset($_FILES["image"]) && !empty($_FILES["image"])){
		echo "La imagen nos ha llegado";
	}
}
?>
```
**Ejercicio 10.** Conéctate a una base de datos MySQL y crea la siguiente tabla usuarios con los mismos campos que el formulario anterior.
El archivo `install.php` crearía una tabla llamada `users` con los elementos descritos si esta no existiera previamente.
*Nota:* Para conectar con la base de datos creamos el sigueinte archivo en sus dos distintas versiones, `mysqli` y `PDO`.

|MySQLi | **includes/connect.php**  |
|-------|---------------------------|
```php
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
if($create_dbname){
	echo "Existe la Base de Datos";
}else{
	echo "Base de Datos Creada";
}
$db = new mysqli( $servername , $username , $password , $dbname );
mysqli_query($db, "SET NAMES 'utf8'");
?>
```

|MySQLi | **install.php**  |
|-------|------------------|
```php
<?php 
require_once 'includes/connect.php'; 
$sql ="CREATE TABLE IF NOT EXISTS users  (
	user_id int(255) auto_increment not null,
	name varchar(50),
	surname varchar(255),
	bio text,
	email varchar(255),
	password varchar(255),
	role varchar(20),
	image varchar(255),
	CONSTRAINT pk_users PRIMARY KEY(user_id)
);";
$create_usuarios_table=mysqli_query($db, $sql);
if($create_usuarios_table){
	echo "La tabla users se ha creado correctamente!!";
}
?>
```

**Nota:** Para conectar con la base de datos PDO usaríamos: 

|PDO | **includes/connect.php**  |
|----|---------------------------|

```php
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cursophp";
try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
```

|PDO | **install.php**  |
|----|------------------|

```php
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
?>
```
*Nota:Para mantener la conexión en todos los archivos sería necesario incluir connect.php en dentro del header, usando* `<?php require_once 'includes/connect.php'; ?>`

**Ejercicio 11.** Crea un script PHP que inserte 4 registros en la tabla que creaste en el ejercicio anterior.

|MySQLi | **install.php**  |
|-------|------------------|

```php
<?php 
require_once 'includes/connect.php'; 
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
if($create_users_table){
	echo "La tabla users se ha creado correctamente!!";
}

$sql="INSERT INTO users VALUES(NULL,'Victor','Robles','Web Developer 1', 'victor@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user1=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'Antonio','Robles','Web Developer 2', 'antonio@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user2=mysqli_query($db,$sql);

?>
```
**Nota:** Para conectar con la base de datos PDO usaríamos: 

|PDO | **install.php**  |
|----|------------------|

```php
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
```
**Nota 1:** Puede dar fallo a la hora de incluir el nuevo registro, para ello buscaríamos los datos insertados mediante `var_dump` de la siguiente manera: `$insert_user=mysqli_query($db,$sql);` seguido de `var_dump=($insert_user);`. O imprimiendo `mysqli_error($db)` el cual mediante `echo mysqli_error($db)` mostrará información sobre los errores de sintaxis.*

**Nota 2:** Usando `DELETE FROM users WHERE user_id=5;`eliminará el registro con id número 5. En cambio si no indicamos condición eliminará todos los registros. Usando `SELECT * FROM users;` veremos que el registro 5 ya no está disponible.
Posteriormente si hacemos un `DELETE FROM users;`eliminará todo el contenido de la tabla.

**Ejercicio 12.** Haz un listado de los registros de la tabla de la base de datos mostrando solo el nombre y los apellidos del usuario.

*Nota incluyendo el siguiente código podríamos ver el contenido de cada uno de los registros.*

```php
<?php 
//así podríamos ver los registros dentro de user con sus datos
while ($user=mysqli_fetch_assoc($users)){
	var_dump($user);
};?>
```
Archivos Ejercicio anterior.

|Myqli |**includes/header.php**   | **includes/footer.php**  | **includes/connect.php**  | **install.php**  |
|------|--------------------------|--------------------------|---------------------------|------------------|

|Myqli | **index.php**  |
|------|----------------|

```php
<?php
include 'includes/header.php';
include 'includes/connect.php';
$users=mysqli_query($db, "SELECT * FROM users");
//	var_dump($users);	//
?>
<table class="table">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>Ver/editar</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($users)){ 
//	var_dump($row);		//
	?>
	<tr>
		<td> <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["surname"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
		<td>
			<a href="ver.php?user_id={$row["user_id"]}" class="btn btn-success">Ver</a>
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>
```
**Ejercicio 13.** Crea una página dinámica para mostrar el detalle completo del registro pasándole por GET el ID.

Archivos Ejercicio anterior.

|Myqli |**includes/header.php**   | **includes/footer.php**  | **includes/connect.php**  | **install.php**  |
|------|--------------------------|--------------------------|---------------------------|------------------|

|Myqli | **index.php**  |
|------|----------------|

```php
<?php
include 'includes/header.php';
include 'includes/connect.php';
$users=mysqli_query($db, "SELECT * FROM users");
//	var_dump($users);	//
?>
<table class="table">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>Ver/editar</th>
	</tr>
	<?php while ($row=mysqli_fetch_assoc($users)){ 
//	var_dump($row);		//
	?>
	<tr>
		<td> <?php echo $row["name"]; ?> </td>
		<td> <?php echo $row["surname"]; ?> </td>
		<td> <?php echo $row["email"]; ?> </td>
		<td>
			<a href="ver.php?user_id=<?php echo $row["user_id"]; ?>" class="btn btn-success">Ver</a>
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>
```

|Myqli | **ver.php**  |
|------|--------------|

```php
<?php 
require_once 'includes/header.php'; 
include 'includes/connect.php';
?>
<?php 
// si el parámetro está no existe o está vacio o no es un número, me llevas a index.php
if(!isset($_GET["user_id"]) || empty($_GET["user_id"]) || !is_numeric($_GET["user_id"])){
	header("Location:index.php");
}

$id=$_GET["user_id"];
$user_query=mysqli_query ($db,"SELECT * FROM users WHERE user_id={$id}");
//var_dump (mysqli_fethc_assoc($user)); 
//muestra los datos del usuario sin necesidad de recorrer toda la tabla, es un array asociativo
$user=mysqli_fetch_assoc($user_query);
// si el parámetro está no existe o está vacio dentro del array asociativo me llevas a index.php
if(!isset($user["user_id"])|| empty ($user["user_id"])){
	header("Location:index.php");
}
?>

<h3>Usuario:<strong><?php echo $user["name"]." ".$user["surname"];?></strong></h3>
<p><strong>Datos:</strong></p>
<p> Email: <?php echo $user["email"];?>	</p>
<p> Biografía: <?php echo $user["bio"];?> </p>
<a href="index.php" class="btn btn-success">Volver al listado</a>
</p> 

<?php 
require_once 'includes/footer.php'; ?>
?>
```

**Ejercicio 14.** Crea una página de edición del usuario.
*Nota: Deberemos recoger los datos que llegan al formulario y hacer `insert` en la base de datos.*
* El archivo `validate_form.php`comprobará y advertirá cuando los datos introducidos dentro del formulario son incorrectos. Mediante la función `showError` la cual recibirá el nombre del parámetro introducido en el formulario mostraremos el erro adaptado.
* Para mejorar la aplicación mediante la función `setValueField` mantendremos el valor introducido en el `input`.
* Posteriormente al usar `require_once 'includes/validate_form.php';` dentro de `crear.php`podremos mostrar en la plantilla creada dichas advertencias de errores. 

|**includes/validate_form.php**  |
|--------------------------------|
```php
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
	if(!empty($_POST["name"]) && strlen($_POST["name"])<=20 && !is_numeric($_POST["name"] && !preg_math("/[0-9]/",_POST["name"])){
		$name_Validate=true;
	}else{
		$errors["name"] = "El nombre no es válido.";
		$name_Validate = false ;
	}
	if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"] && !preg_math("/[0-9]/",_POST["surname"])){
		$surname_Validate=true;
	}else{
		$errors["surname"] = "El apellido no es válido.";
		$surname_Validate = false ;
	}
	if(!empty($_POST["bio"])){ 	
		$bio_Validate=true;
	}else{
		$errors["bio"] = "La biografía no puede estar vacía.";
		$bio_Validate = false ;
	}
	if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$email_Validate=true;
	}else{
		$errors["email"] = "El email no es válido.";
		$email_Validate = false ;
	}
	if(!empty($_POST["password"]) && && strlen($_POST["password"])<=6){ 
	//ciframos la contraseña mediante sha1
		$password_Validate=true;
	}else{
		$errors["password"] = "El password no es válido.";
		$password_Validate = false ;
	}
	if(isset($_POST["role"] && is_numeric($_POST["role"])){ 
		$role_Validate=true;
	}else{
		$errors["role"] = "El role no es válido.";
		$role_Validate = false ;
	}
	var_dump($_FILES["image"]);
	if(isser($_FILES["image"]) && !empty($_FILES["image"])){
		$role_Validate=true;
	}
	// Insertar usuario en la BD, la variable $db viene heredada de connect.php que se encuentra en header.php
	if(count ($errors)==0){
		$sql="INSERT INTO users VALUES (
			NULL,
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
//var_dump($errors);	
?>
```

Requerimos mediante `require_once 'includes/validate_form.php';` el archivo que validará los datos introducidos en el formulario mediante la función `showError`.

|**crear.php**  |
|---------------|

```php
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/validate_form.php'; ?>

<h2>Crear usuarios</h2>

<?php //mediante este condicional infomaremos del que el usuario se introdujo correctamente.
	if(isset($_POST["submit"] && count ($errors)==0  && $insert_user != false){ ?>
		<div class="alert alert-success">El usuario se ha enviado correctamente</div>
<?php	} ?>
<form action="crear.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control" <?php setValueField($errors, "name")/><br/>
		<?php echo showError($errors, "name"); ?>
	</label>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control"<?php setValueField($errors, "surname")/><br/>
		<?php echo showError($errors, "surname"); ?>
	</label>
	<label for="bio">Biografia
		<textarea name="bio" class="form-control"<?php setValueField($errors, "bio", true)/><br/>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control"<?php setValueField($errors, "email")/><br/>
		<?php echo showError($errors, "email"); ?>
	</label>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control"><br/>
	</label>
	<label for="password">Password
		<input type="password" name="password" class="form-control"/><br/>
		<?php echo showError($errors, "password"); ?>
	</label>
	<label for="select">select
		<select name="role" class="form-control">
		    <option value="0">Normal</option>
		    <option value="1">Administrador</option>
		</select>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-sucess"/>
</form>
<?php require_once 'includes/footer.php'; ?>
```
En el header creamos un botón que nos lleve directamente hacia `crear.php`. 

|**includes/header.php**   |
|--------------------------|

```php
<?php
<!DOCTYPE HTML>
<html>
<head lang="es">
	<meta charset="utf-8" />
	<title>Web con PHP</title>
	<link type="text/css" rel="stylesheet" href="../assets/components/bootstrap/dist/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../assets/components/bootstrap/dist/css/bootstrap-theme.min.css"/>
	<script type="text/javascript" src="../assets/components/bootstrap/dist/js/bootstrap.min.js"/>
	<script type="text/javascript" src="../assets/components/jquery/jquery.min.js"/>
</head>
<body>
	<div class="container">
	<h1>Web con php</h1>
	<hr/>
	</a href="crear.php" class="btn btn-primary">Crear nuevo usuario</a>
	<hr/>
	<?php $variable="Contenido";?>
?>
```
**Ejercicio 15.** Haz que cuando creamos o editamos un usuario se puedan subir imágenes y guardarlas en el directorio uploads del servidor.

| **index.php**  |
|----------------|

```php
<?php
include 'includes/header.php';
$users=mysqli_query($db, "SELECT*FROM users");
?>
<table class="table">
	<tr>
		<th>Nombre</th>
		<th>Apellidos</th>
		<th>Email</th>
		<th>Ver/editar</th>
	</tr>
	<?php while ($user=mysqli_fetch_assoc($users)){ ?>
	<tr>
		<td> <?php $user["name"]; ?> </td>
		<td> <?php $user["surname"]; ?> </td>
		<td> <?php $user["email"]; ?> </td>
		<td>
			<a href="Ver.php?id= <?php $user["user_id"]?>" class="btn btn-success">Ver</a>
			<a href="editar.php?id= <?php $user["user_id"]?>" class="btn btn-warning">Editar</a>			
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>
```

|**editar.php**  |
|----------------|

```php
<?php require_once 'includes/header.php'; ?>
<?php require_once 'includes/validate_form.php'; ?>
<?php require_once 'includes/ver_bd.php'; ?>

<h2>Crear usuarios</h2>

<?php //mediante este condicional infomaremos del que el usuario se introdujo correctamente.
	if(isset($_POST["submit"] && count ($errors)==0  && $insert_user != false){ ?>
		<div class="alert alert-success">El usuario se ha enviado correctamente</div>
<?php	} ?>
<form action="crear.php" method="POST" enctype="multipart/form-data">
	<label for="name">Nombre:	
		<input type="text" name="name" class="form-control" <?php setValueField($errors, "name")/><br/>
		<?php echo showError($errors, "name"); ?>
	</label>
	<label for="firstname">Apellidos:
		<input type="text" name="surname" class="form-control"<?php setValueField($errors, "surname")/><br/>
		<?php echo showError($errors, "surname"); ?>
	</label>
	<label for="bio">Biografia
		<textarea name="bio" class="form-control"<?php setValueField($errors, "bio", true)/><br/>
		<?php echo showError($errors, "bio"); ?>
	</label>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control"<?php setValueField($errors, "email")/><br/>
		<?php echo showError($errors, "email"); ?>
	</label>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control"><br/>
	</label>
	<label for="password">Password
		<input type="password" name="password" class="form-control"/><br/>
		<?php echo showError($errors, "password"); ?>
	</label>
	<label for="select">select
		<select name="role" class="form-control">
		    <option value="0">Normal</option>
		    <option value="1">Administrador</option>
		</select>
	</label>
	<br/>
	<input type="submit" value="Enviar" name="submit" class="btn btn-sucess"/>
</form>
<?php require_once 'includes/footer.php'; ?>
```

| **includes/ver_bd.php**  |
|--------------------------|

```php
<?php require_once 'includes/header.php'; ?>
<?php 
//CONSEGUIR USUARIO
if(isset($_GET["id"] || !empty("_GET["id"]) || is_numeric($_GET["id"])){
	header("Location:index.php");
}

//echo $_GET["id"];
$id=$_GET["id"];
$user_query=mysqli_query ($db,"SELECT * FROM users WHERE user_id={$id}");
//var_dump ($users);
//var_dump (mysqli_fethc_assoc($user)); //muestra los datos del usuario sin necesidad de recorrer toda la tabla.
$user=mysqli_fetch_assoc($user_query);

if(!isset($user["user_id"])|| empty ($user["user_id"])){
	header("Location:index.php");
}
?>
```

| **ver.php**  |
|--------------|

```php
<?php require_once 'includes/ver_bd.php'; ?>
<h3>Usuario:<strong><?php echo $user["name"]." ".$user["surname"];</strong></h3>
<p><strong>Datos:</strong></p>
<p> Email: <?php echo $user["emial"];?>	</p>
<p> Biografía: <?php echo $user["bio"];?> </p>
<a href="index.php" class="btn btn-success">Volver al listado</a>
</p> 

<?php require_once 'includes/footer.php'; ?>
?>
```
**Ejercicio 16.** Crea un login de usuarios.

**Ejercicio 17.** Crea una paginación para el listado de usuarios.

BASES DE DATOS: MySQLi y PHP
============================

Trabajando con Varias Tablas
----------------------------
Es habitual que queramos acceder a datos que se encuentran en más de una tabla y mostrar información mezclada de todas ellas como resultado de una consulta.
Vamos a partir de un ejemplo práctico: Tenemos una base de datos con dos tablas Una, llamada Clientes, recopila información personal de mis clientes....
La otra, llamada pedidos, recopila los pedidos efectuados por cada uno de esos clientes. 
Hay un campo que relaciona ambas tablas. El campo Id de la Tabla Clientes tiene un homólogo en la tabla Pedidos, IdCliente, que nos permite identificar quien ha hecho los pedidos. 
El campo que relaciona ambas tablas debe contener la misma clase de datos, las dos de tipo texto, de tipo fecha etc... Los campos numéricos deben ser de tipos similares.
Podemos realizar consultas que realicen combinaciones de campos de tablas diferentes.
Imaginemos que deseamos ver en una consulta los nombres de nuestros clientes (guardados en la tabla clientes) y los conceptos y precios de los productos que han adquirido (guardados en la tabla Pedidos)
* Tras el `SELECT`, indicando los campos que vamos a usar en nuestra consulta.
* Si el nombre de algún campo está presente en las dos tablas, hay que concretar a cual pertenece el que vamos a usar
* Después especificaremos Las tablas relacionadas en la cláusula `FROM`,
* Finalmente, tendremos que hacer coincidir los valores que relacionan las columnas de las tablas en la claúsula `WHERE`
Veamos el ejemplo en código:
```php
SELECT concepto, precio, nombre, clientes.idcliente
FROM pedidos, clientes
WHERE clientes.idcliente = pedidos.idcliente
```
Por supuesto, podemos agregar a este `WHERE` todos los filtros que nos apetezca, como hemos visto en temas anteriores
Podemos abreviar un poco este código. Podemos otorgar un alias a cada tabla para no tener que escribir su nombre completo cada vez que necesitamos usarlas. Veamos como:
```php
SELECT concepto, precio, nombre, C.idcliente
FROM pedidos P, clientes C
WHERE C.idcliente = P.idcliente
```
Una forma más eficiente de cara a la programación es realizar estas consultas empleando la instrucción `INNER JOIN`.
```php
SELECT concepto, precio, nombre, clientes.idcliente
FROM pedidos INNER JOIN clientes
WHERE pedidos.idcliente = clientes.idcliente
```

**Ejercicio 18.** Crea una función PHP que realice una búsqueda en la BBDD.
[webreunidos.es](https://www.webreunidos.es/blog/crear-buscador-php-web-sencillo/)

**Ejercicio 19.** Crear una función que imprima en pdf.
[FPDF.ORG](http://www.fpdf.org/)
