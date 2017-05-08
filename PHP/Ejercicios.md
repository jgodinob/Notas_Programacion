**Ejercicio 1.** Crea dos variables cuyo nombre sea “uno” y “dos” he imprímelas por pantalla. Pon un comentario con el tipo de dato que contienen.
```js
$frist = "Variable's content 1"; // String
$second = 245; // Integer
echo "FRIST VARIABLE: ".$frist."<br/>";
echo "SECOND VARIABLE: ".$second."<hr/>";
?>
```

**Ejercicio 2.** Escribe un programa que imprima por pantalla los cuadrados (el número multiplicado por sí mismo) de los 30 primeros números naturales.
```js
<?php
for($i = 1; $i <= 30; $i++){
	echo "The square of ".$i." is ".($i*$i)."<br/>";
}
?>
```

**Ejercicio 3.** Modifica el ejercicio anterior para que muestre al lado de cada cuadrado si es un número par o impar.
```js
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
```js
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
```js
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
```html
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
```js
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
```js
<?php
$months = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
for($i = 0; $i < count($months); $i++ ){
	echo $months[$i]."<br/>";
}
?>
```
**Ejercicio 7.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOREACH para mostrar por pantalla los doce nombres.
```js
<?php
$months = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
foreach ($months as $month) {
	echo $month."<br/>";
}
?>
```

**Ejercicio 8.1.** Devuelve los divisores de un número introducido mediante la url.
```js
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
```js
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
```js
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
```js
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
```js
<?php
for($i = 1; $i <= 100; $i++){
	if($i%2 == 0){
		echo $i." is even<br/>";
	}
}
?>
```
**Ejercicio 10.** Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100.
```js
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
```js
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
```js
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
```js
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
```js
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
```js
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
```js
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
```js
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
```js
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
```js
echo "<p>Fecha actual: </p>";
echo date("d-m-Y");
```
**Ejercicio 21.** Utiliza los includes de PHP para tener una estructura html básica y separar el código por el header, body y footer.

|**index.php**   |
|----------------|
```js
<?php
include 'includes/redirect.php';
?>
<p>Texto del Body en el index </p>
<?php
include 'includes/footer.php';
?>
```
|**includes/header.php**   |
|--------------------------|
```html
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
```html
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
```js
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
```js
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
```js
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
```js
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
```js
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
```html
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
```html
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
<form action="welcome.php" method="post" enctype="multipart/form-data">
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
	<input type="submit" value="Enviar" class="btn btn-sucess"/>
</form>
<?php require_once 'includes/footer.php'; ?>
```
**Ejercicio 27.** Recoge los datos de las variables POST y muéstralos por pantalla en el caso de que existan y no estén vacíos.

**Ejercicio 28.** Valida el formulario con las siguientes reglas:
- Nombre: Solo puede estar formado por letras y tener una longitud máxima de 20 caracteres.
- Apellidos: Solo puede estar formado por letras.
- Biografía: No puede estar vacío.
- Email: tiene que ser un email válido.
- Contraseña: Debe tener una longitud mayor que 6 caracteres.
- Imagen: Puede estar vacía.
```js
function validateEmail($email){
	if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
		$status = "VALIDO";
	}else{
		$status = "NO VALIDO";
	}
	
	return $status;
}

$email = "";
if(isset($_GET["email"])){
	$email = $_GET["email"];
}

echo validateEmail($email);
```
**Ejercicio 29.** Conéctate a una base de datos MySQL y crea la siguiente tabla usuarios con los mismos campos que el formulario anterior.

**Ejercicio 30.** Crea un script PHP que inserte 4 registros en la tabla que creaste en el ejercicio anterior.

**Ejercicio 31.** Haz un listado de los registros de la tabla de la base de datos mostrando solo el nombre y los apellidos del usuario.

**Ejercicio 32.** Crea una página dinámica para mostrar el detalle completo del registro pasándole por GET el ID.

**Ejercicio 33.** Crea una página de edición del usuario.

**Ejercicio 34.** Haz que cuando creamos o editamos un usuario se puedan subir imágenes y guardarlas en el directorio uploads del servidor.

**Ejercicio 35.** Crea un login de usuarios.

**Ejercicio 36.** Crea una paginación para el listado de usuarios.
