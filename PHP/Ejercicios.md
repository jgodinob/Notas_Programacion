**Ejercicio 1.** Crea dos variables cuyo nombre sea “uno” y “dos” he imprímelas por pantalla. Pon un comentario con el tipo de dato que contienen.
```php
$frist = "Variable's content 1"; // String
$second = 245; // Integer
echo "FRIST VARIABLE: ".$frist."<br/>";
echo "SECOND VARIABLE: ".$second."<hr/>";
?>
```

**Ejercicio 2.** Escribe un programa que imprima por pantalla los cuadrados (el número multiplicado por sí mismo) de los 30 primeros números naturales.
```php
<?php
for($i = 1; $i <= 30; $i++){
	echo "The square of ".$i." is ".($i*$i)."<br/>";
}
?>
```

**Ejercicio 3.** Modifica el ejercicio anterior para que muestre al lado de cada cuadrado si es un número par o impar.
```php
for($i = 1; $i <= 30; $i++){
	$cuadrado = $i*$i;
	echo "The square of ".$i." is ".$cuadrado;
	if($cuadrado%2 == 0){
		echo " and is even";
	}else{
		echo " and is odd";
	}
	echo "<br/>";
}
?>
```

**Ejercicio 4.1.** Escribe un programa que multiplique los 20 primeros números naturales. Utiliza el bucle While.
```php
<meta charset="utf-8" />
<?php
$number = 1;
$counter = 1;
$limit=4;
while($counter <= $limit){
	// $number = $number * $counter;
	$number *= $counter;
	echo $number."<br/>";
	$counter++;
}
echo "The result of multiplying the first ".$limit." numbers is: ".$number;
?>
```

**Ejercicio 4.2.** Escribe un programa que recoja un número pasado en un parámetro GET por la URL, y lo multiplique por todos los números naturales anteriores a él. Utiliza el bucle While.
```php
<meta charset="utf-8" />
<?php
if(isset($_GET["limit"]) && is_numeric($_GET["limit"])){
	$limit = $_GET["limit"];
}
$number = 1
$counter = 1;
while($counter <= $limit){
	// $number = $number * $counter;
	$number *= $counter;
	echo $number."<br/>";
	$counter++;
}
echo "The result of multiplying the first ".$limit." numbers is: ".$number;
?>
```

**Ejercicio 5.** Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL.
*Nota:* Las variables tipo `GET`se pueden pasar mediante url como en el siguiente ejemplo: `ejercicio5.php?variable=Hola&numero=5`. Se puede apreciar que el comienzo de variables se inicia conel caracter cierre de interrogación `?`, y continua introduciendo la variable igualada a su valor separando las variables mediante `&`.

|**index.html**  |
|----------------|
```php
<!DOCTYPE html>
<html>
<head>
  <head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
</head>
<body>
<?php include 'Ej5.php';?>
</body>
</html>
```

|**Ej5.php**   |
|--------------|
```php
<?php
function multiply($num1, $num2)
{
    $result = $num1 * $num2;
    return $result;
}
if(isset($_GET["num"]) && is_numeric($_GET["num"])){
	$number = $_GET["num"];
}else{
	$number = 5; //defecto
	echo '<p>Default number</p>';
};
echo '<div style="width:120px;">';
echo '	<p style="text-align:center;margin:0px;">'.$number.' Multiplication table</p>';
echo '	<table class="table" >';
for($i = 1; $i <= 10; $i++){
	echo '<tr>';
	$result=multiply($i,$number);
	echo '<th>'.$number.' x '.$i.'</th>';
	echo '<th>'.$result.'</th>';
	echo '</tr>';
}
echo '	</table>';
echo '</div>';
?>
```

**Ejercicio 6.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOR para mostrar por pantalla los doce nombres.
```php
<?php
$months = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
for($i = 0; $i < count($months); $i++ ){
	echo $months[$i]."<br/>";
}
?>
```
**Ejercicio 7.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOREACH para mostrar por pantalla los doce nombres.
```php
<?php
$months = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
foreach ($months as $month) {
	echo $month."<br/>";
}
?>
```

**Ejercicio 8.1.** Devuelve los divisores de un número introducido mediante la url.
```php
<?php
if(isset($_GET["number"]) && is_numeric($_GET["number"])){
	$number = $_GET["number"];
}
$nDividers=0;	//Numbers dividers
$dividers=[1];	//Dividers
for( $i = 1; $i < $number; $i++ ){
	if ( ($number % $i) == 0 ){
		$dividers[$nDividers]=$i;
		$nDividers++;
		echo $i." is a divider of ".$number."</br>";
	} 
}
?>
```
**Ejercicio 8.2.** Elabora una función que devuelva un array separado por comas (*,*), menos el último elemento separado por *y*.
```php
<?php
$numbers=[1, 3, 4, 7, 8, 9];	
function return_list_elements ($array){
	if(!isset($array) || !is_array($array)){
		echo "Error return_list_elements: no se ha introducido un array.</br>";
	}
	$array_elements_number=count($array);
	echo "El array contiene ".$array_elements_number." elementos, que son: ";
	foreach ($array as $i=>$numbers){
		if($i ==($array_elements_number-2)){
			$next=" y ";
		}elseif($i ==($array_elements_number-1)){
			$next=".";
		}else{
			$next=", ";
		}
		echo $numbers.$next;
	}
}
return_list_elements($number);
?>
```
**Ejercicio 8.3.** Elabora una función que devuelva un array usando las funciones creadas en el ejercicio 8.1. y 8.2..
```php
<?php
if(isset($_GET["number"]) && is_numeric($_GET["number"])){
	$number = $_GET["number"];
}
function dividers_in_array ($number){
	$nDividers=0;	//Numbers dividers
	$array_dividers=[1];	//Dividers
	for( $i = 1; $i < $number; $i++ ){
		if ( ($number % $i) == 0 ){
			$array_dividers[$nDividers]=$i;
			$nDividers++;
		} 
	}
	return $array_dividers;
}
function return_list_elements ($array){
    if(!isset($array) || !is_array($array)){
          echo "Error return_list_elements: no se ha introducido un array.</br>";
    }
    $array_elements_number=count($array);
    echo "El array contiene ".$array_elements_number." elementos, que son: ";
    foreach ($array as $i=>$numbers){
      if($i ==($array_elements_number-2)){
              $next=" y ";
      }elseif($i ==($array_elements_number-1)){
              $next=".";
      }else{
              $next=", ";
      }
      echo $numbers.$next;
    }
}
$array_dividers=dividers_in_array ($number);
return_list_elements($array_dividers);
?>
```

**Ejercicio 8.5.** Escribir un programa que calcule el factorial de 5. El factorial de un número entero N es una operación matemática que consiste en multiplicar todos los factores N x (N-1) x (N-2) x ... x 1.
Así, el factorial de 5 (escrito como 5!) es igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120
```php
$factorial = 1;
$number = $_GET["number"];
for($counter = 1; $counter <= $number; $counter++){
	// $factorial = $factorial * $counter;
	$factorial *= $counter;
}
echo "The factorial of ".$number." is ".$factorial;
?>
```

**Ejercicio 9.** Mostrar todos los números pares que hay entre el 1 y el 100.
```php
<?php
for($i = 1; $i <= 100; $i++){
	if($i%2 == 0){
		echo $i." is even<br/>";
	}
}
?>
```
**Ejercicio 10.** Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100.
```php
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Numeros multiplos</title>
	</head>
	<body>
		<?php if (isset($_GET["numero"]) && is_numeric($_GET["numero"])) { ?>
			<h1>Números multiplos de <?= $_GET["numero"]; ?></h1>
			<?php
/* Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100. */
			for ($i = 1; $i <= 100; $i++) {
				if (isset($_GET["numero"]) && $i % $_GET["numero"] == 0) {
					echo $i . " es multiplo de " . $_GET["numero"] . "<br/>";
				}
			}
		} else {
			?>
			<p>Introduce un número correcto por la url</p>
		<?php } ?>
	</body>
</html>
```
**Ejercicio 11.** Un número es bueno si y solo si la suma de sus divisores sin contarse el mismo da ese número. Programa que calcule si un número es bueno o no.
```php
<?php
if(isset($_GET["number"]) && is_numeric($_GET["number"])){
	$number = $_GET["number"];
}
// Función devuelve los divisores de un array de números
function dividers_in_array ($number){
	$nDividers=0;	//Numbers dividers
	$array_dividers=[1];	//Dividers
	for( $i = 1; $i < $number; $i++ ){
		if ( ($number % $i) == 0 ){
			$array_dividers[$nDividers]=$i;
			$nDividers++;
		}
	}
	return $array_dividers;
}
// Función devuelve el listado de elementos de un array
function return_elements_list($array){
    if(!isset($array) || !is_array($array)){
          echo "Error return_list_elements: no se ha introducido un array.</br>";
    }
    foreach ($array as $i=>$numbers){
      if($i ==(count($array)-2)){
              $next=" y ";
      }elseif($i ==(count($array)-1)){
              $next="";
      }else{
              $next=", ";
      }
      echo $numbers.$next;
    }
}
// Función devuelve la suma de números de un array
function add_numbers_array($numbers_array){
		$result=0;
		foreach($numbers_array as $i=>$numbers){
			$result+=$numbers;
		}
		return $result;
}
// Función devuelve true o false si es bueno el número
function is_good($number){
	$dividers_array = dividers_in_array($number);
	$add_dividers = add_numbers_array($dividers_array);
	if($add_dividers==$number){
		return true;
	}else{
		return false;
 }
}
// Bucle for que recorre el listado buscando números buenos
for ($i = 1; $i <= 1000; $i++){
	$dividers_list=dividers_in_array ($i);
	$add=add_numbers_array($dividers_list);
	if(is_good($i)){
		echo $i." es un número bueno, porque la suma de sus divisores ( ";
		echo return_elements_list($dividers_list)." ) es: ".$add.".</br>";
	}
}
?>
```

**Ejercicio 12.** Hacer un programa que tenga un array de 5 números enteros y hacer lo siguiente con él:
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector.
```php
<meta charset="utf-8" />
<?php
$numeros = array(30,20,40,50,10,5);
echo "<h2>Recorrer y mostrar:</h2>";
foreach ($numeros as $numero) {
	echo $numero."<br/>";
}
echo "<h2>Ordenar y mostrar</h2>";
//ordenar
sort($numeros);
foreach ($numeros as $numero) {
	echo $numero."<br/>";
}
echo "<h2>Longitud del array o número de elementos: ".sizeof($numeros)."</h2>";
echo "<h2>Buscar en el array:</h2>";
if(!array_search(11, $numeros)){
	echo "<p>El número no existe en el array</p>";
}else{
	echo "<p>El número SI EXISTE en el array</p>";
}
?>
```

**Ejercicio 13.** Recibe una cadena de texto y conviertela en los distintos formatos de salida (UpperCase, LowerCase, CamelCase, TitleCase)
```php
<?php
$string= '¿cómo están ustedes?';
echo mb_strtolower($string)."</br>"; //¿cómo están ustedes?
echo mb_strtoupper($string)."</br>"; //¿CÓMO ESTÁN USTEDES?
echo strtolower($string)."</br>";    //¿cómo están ustedes?
echo strtoupper($string)."</br>";    //¿CóMO ESTáN USTEDES?
echo ucfirst($string)."</br>";       //¿cómo están ustedes?
echo ucwords($string)."</br>";       //¿cómo Están Ustedes?
?>
```
**Ejercicio 13.** Escribe un programa que muestre la dirección IP del usuario que visita nuestra web y si usa Firefox darle la enhorabuena.
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
**Ejercicio 14.** Escribe un programa que añada valores a un array mientras que su longitud sea menor a 100 y después que se muestre la información del array por pantalla.
```php
<?php
$array=[1,3,"hola",4];
echo "El array incluye inicialmente: ".var_dump($array)."</br>";
$length=count($array);
echo $length;
for ($length;$length<=(100-1);$length++){
	if($length%2==0){
   		array_push($array,"valor número {$length}");
	}else{
   		$array[$length]="valor número {$length}";
	}
}
var_dump($array);
?>
```
**Ejercicio 16.** Escribe un programa que compruebe si una variable esta vacía y si está vacía, rellenarla con texto en minúsculas y mostrarlo convertido a mayúsculas en negrita.
```php
<?php
$string="";
if ( empty($string)){
	$string=strtoupper("Texto de relleno");
	echo "<strong>{$string}</strong>";
}else{
	echo "Esta rellena";
}
?>
```
**Ejercicio 17.** Crea un script PHP que tenga tres variables, una tipo array, otra tipo string y otra boleana y que imprima un mensaje según el tipo de variable que sea.
```php
<?php
$data="Hola";
function data_type($data){
	echo "El tipo de dato es: ";
$data_type=gettype($data);
switch ($data_type){
	case integer:
		echo "NÚMERO ENTERO";
		break;
	case string:
		echo "CADENA";
		break;
        case boolean:
		echo "BOOLEANO";
		break;
	case double:
		echo "NÚMERO FLOTANTE";
		break;
	}
};
$is_number=is_numeric($data);
if($is_number){
	echo "El dato introducido es un número, "; 
}else{
	echo "El dato introducido NO es un número, "; 
};
data_type ($data);
?>
```
**Ejercicio 18.** Crea un array con el contenido de la siguiente tabla:

| Frutas   | Deportes   | Idiomas   |
|----------|------------|-----------|
| Manzana  |Futbol      |Español    |
| Naranja  |Tenis       |Inglés     |
| Sandia   |Baloncesto  |Francés    |
| Fesa     |Beisbol     |Italiano   |

Recórrelo y muestra la tabla en HTML con el contenido del array.
```php
<?php
$table= array(
    "Fruits"=>array("Apple","Orange","Watermelon","Strawberry"),
    "Sports"=>array("Futbol","Tennis","Basket","Beisbol"),
    "Languages"=>array("Spanish","English","French","Italian")
);
function file_column_max($array_multi){
    $i=0;
    foreach ($array_multi as $key => $category){
        $file_colum_max[$i]=count($array_multi);   
        $i++;
    }
    return $file_colum_max;
}
function column_name($array_multi){
    $i=0;
    foreach ($array_multi as $key => $category){
        $column_name[$i]=$key;
        $i++;
    }
    return $column_name;
}
$max_column=max(file_column_max($table));
echo "<table><tr>";
$column_name=column_name($table);
//Imprime los títulos
foreach($column_name as $key=>$content){
    echo "<th>{$content}</th>";
}
echo "</tr>";
for ($i=0;$i<=$max_column-1;$i++){
    echo "<tr>";
    foreach($column_name as $key=>$content){
        echo "<th>".$table[$content][$i]."</th>";
    }
    echo "</tr>";
}
echo "</table>";
?>
```

**Ejercicio 19.** El cálculo del factorial se realiza en un bucle que va disminuyendo el valor de una variable y multiplicando todos los valores entre sí, como ya hemos visto anteriormente.
Aprovechando este patrón puede crear una función que realice la factorial del número que le pasemos por parámetro, ahorrando así líneas de código.

**Ejercicio 20.** Utiliza una función de PHP para mostrar la fecha actual por pantalla.
```php
echo "<p>Fecha actual: </p>";
echo date("d-m-Y");
```
**Ejercicio 21.** Utiliza los includes de PHP para tener una estructura html básica y separar el código por el header, body y footer.

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


**Ejercicio 22.1.** Utiliza la función filter_var para comprobar si el email que nos llega por la URL es un email valido.
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

**Ejercicio 22.2.** Utiliza la función filter_var para comprobar si una url que nos llega por la URL es una url valida.
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

**Ejercicio 23.1.** Crea una función a la que le pases un número y te saque su tabla de multiplicar.
```php
<?php
function tabla($numero){
	$tabla = "";
	for($i = 1; $i <= 10; $i++){
		$cuenta = $i*$numero;
		$tabla .= "{$i} x {$numero} = {$cuenta} <br/>";
	}
	
	return $tabla;
}

echo "<h1>Tablas de multiplicar</h1>";

for($i = 1; $i <= 10; $i++){
	echo "<h3>Tabla del {$i}</h3>";
	echo tabla($i);
}
?>
```
**Ejercicio 23.2.** Modifica el ejercicio anterior para pasarle un parámetro opcional que nos permita imprimir directamente la tabla en HTML.
```php
<?php
function tabla($numero, $html=null){
	$tabla = "";
	if($html!=null){
		$tabla.="<h3>Tabla del {$numero}</h3>";
	}
	for($i = 1; $i <= 10; $i++){
		$cuenta = $i*$numero;

		$tabla .= "{$i} x {$numero} = {$cuenta} <br/>";
	}
	if($html!=null){
		echo $tabla;
	}	
	return $tabla;
}
echo "<h1>Tablas de multiplicar</h1>";
for($i = 1; $i <= 10; $i++){
	tabla($i,true);
}
?>
```

**Ejercicio 25.** Crea una sesión que vaya aumentando su valor en uno o disminuyendo en uno en función de si el parámetro GET “counter” está a uno a cero.
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
**Ejercicio 26.** Crea un formulario HTML con los siguientes campos:
- Nombre
- Apellidos
- Biografía
- Email
- Contraseña
- Imagen

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
	<hr>
	<?php $variable="Contenido";?>
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
	<label for="bio">Biografia
		<textarea name="bio" class="form-control">
	</label>
	<label for="email">Email:	
		<input type="text" name="email" class="form-control"><br/>
	</label>
	<label for="image">Foto:
		<input type="file" name="image" class="form-control"><br/>
	</label>
	<label for="password">Password
		<input type="password" name="password" class="form-control">
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
**Ejercicio 27.** Recoge los datos de las variables POST y muéstralos por pantalla en el caso de que existan y no estén vacíos.

| **recibir.php**  |
|------------------|
```js
<?php 
//Recibiendo el campo submit sabemos que el formulario se envió
if(isset($_POST["submit"])){
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
**Ejercicio 28.** Valida el formulario con las siguientes reglas:
- Nombre: Solo puede estar formado por letras y tener una longitud máxima de 20 caracteres.
- Apellidos: Solo puede estar formado por letras.
- Biografía: No puede estar vacío.
- Email: tiene que ser un email válido.
- Contraseña: Debe tener una longitud mayor que 6 caracteres.
- Imagen: Puede estar vacía.

| **recibir.php**  |
|------------------|
```js
<?php
if(!empty($_POST["name"]) && strlen($_POST["name"])<=20 && !is_numeric($_POST["name"] && !preg_math("/[0-9]/",_POST["name"])){
	echo $_POST["name"]."<br/>";
}
if(!empty($_POST["surname"]) && !is_numeric($_POST["surname"] && !preg_math("/[0-9]/",_POST["surname"])){
	echo $_POST["surname"]."<br/>";
}
if(!empty($_POST["bio"])){ 	
	echo $_POST["bio"]."<br/>"; 	
}
if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){
	echo $_POST["email"]."<br/>"; 	
}
if(!empty($_POST["password"]) && && strlen($_POST["password"])<=6){ 
//ciframos la contraseña mediante sha1
	echo sha1($_POST["password"])."<br/>";
}
if(!empty($_POST["role"])){ 
	echo $_POST["role"]."<br/>";
}
var_dump($_FILES["image"]);
if(isser($_FILES["image"]) && !empty($_FILES["image"])){
	echo "La imagen nos ha llegado";
}
?>
```
**Ejercicio 29.** Conéctate a una base de datos MySQL y crea la siguiente tabla usuarios con los mismos campos que el formulario anterior.
El archivo `install.php` crearía una tabla llamada `users` con los elementos descritos si esta no existiera previamente.

| **install.php**  |
|------------------|
```php
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

$create_usuarios_table=mysqli_query($db, $sql);

if($create_usuarios_table){
	echo "La tabla users se ha creado correctamente!!";
}
?>
```
Para conectar con la base de datos creamos el sigueinte archivo en sus dos distintas versiones, `mysqli` y `PDO`.

| **includes/connect.php**  |
|---------------------------|
```php
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="cursophp";

$db = new mysqli( $servername , $username , $password , $dbname );
//para codificar caracteres latinos usamos la siguiente línea
msqli_query($db, "SET NAMES 'utf8'");
?>
```

**Nota:** Para conectar con la base de datos PDO usaríamos: 

| **includes/connect.php**  |
|---------------------------|
```php
try {
    $db = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
```
*Nota:Para mantener la coneccion en todos los archivos sería necesario incluir connect.php en dentro del header, usando* `<?php require_once 'includes/connect.php'; ?>`

**Ejercicio 30.** Crea un script PHP que inserte 4 registros en la tabla que creaste en el ejercicio anterior.

| **install.php**  |
|------------------|
```php
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

$create_usuarios_table=mysqli_query($db, $sql);

$sql="INSERT INTO users VALUES(NULL,'Victor','Robles','Web Developer 1', 'victor@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user1=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'Antonio','Robles','Web Developer 2', 'antonio@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user2=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'Manuel','Robles','Web Developer 3', 'Manuel@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user3=mysqli_query($db,$sql);

$sql="INSERT INTO users VALUES(NULL,'David','Robles','Web Developer 4', 'David@victor.com', '".sha1("password")."', '1', NULL)";
$insert_user4=mysqli_query($db,$sql);

if($create_usuarios_table){
	echo "La tabla users se ha creado correctamente!!";
}
?>
```
*Nota 1:Puede dar fallo a la hora de incluir el nuevo registro, para ello buscaríamos los datos insertados mediante `var_dump` de la siguiente manera: `$insert_user=mysqli_query($db,$sql);` seguido de `var_dump=($insert_user);`. O imprimiendo `mysqli_error($db)` el cual mediante `echo mysqli_error($db)` mostrará información sobre los errores de sintaxis.*

*Nota 2: Usando `DELETE FROM users WHERE user_id=5;`eliminará el registro con id número 5. En cambio si no indicamos condición eliminará todos los registros. Usando `SELECT * FROM users;` veremos que el registro 5 ya no está disponible.
Posteriormente si hacemos un `DELETE FROM users;`eliminará todo el contenido de la tabla.

**Ejercicio 31.** Haz un listado de los registros de la tabla de la base de datos mostrando solo el nombre y los apellidos del usuario.

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
<?php
include 'includes/footer.php';
?>
```

*Nota incluyendo el siguiente código podríamos ver el contenido de cada uno de los registros.*

```php
<?php 
//así podríamos ver los registros dentro de user con sus datos
while ($user=mysqli_fetch_assoc($users)){
	var_dump($user);
};?>
```

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
			<a href="Ver.php" class="btn btn-success">Ver</a>
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>
```
**Ejercicio 32.** Crea una página dinámica para mostrar el detalle completo del registro pasándole por GET el ID.

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
			<a href="Ver.php?id=<?php $user["user_id"]?>" class="btn btn-success">Ver</a>
		</td>
	</tr>
	<?php	}; ?>
<?php
include 'includes/footer.php';
?>
```

| **ver.php**  |
|----------------|
```php
<?php require_once 'includes/header.php'; ?>
<?php 
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

<h3>Usuario:<strong><?php echo $user["name"]." ".$user["surname"];</strong></h3>
<p><strong>Datos:</strong></p>
<p> Email: <?php echo $user["emial"];?>	</p>
<p> Biografía: <?php echo $user["bio"];?> </p>
<a href="index.php" class="btn btn-success">Volver al listado</a>
</p> 

<?php require_once 'includes/footer.php'; ?>
?>
```
**Ejercicio 33.** Crea una página de edición del usuario.
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
**Ejercicio 34.** Haz que cuando creamos o editamos un usuario se puedan subir imágenes y guardarlas en el directorio uploads del servidor.

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
|----------------|
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
**Ejercicio 35.** Crea un login de usuarios.

**Ejercicio 36.** Crea una paginación para el listado de usuarios.

**Ejercicio 37.** Crea una función PHP que realice una búsqueda en la BBDD.
[webreunidos.es](https://www.webreunidos.es/blog/crear-buscador-php-web-sencillo/)

**Ejercicio 38.** Crear una función que imprima en pdf.
[FPDF.ORG](http://www.fpdf.org/)
