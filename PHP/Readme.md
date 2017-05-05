**Ejercicio 1.** Crea dos variables cuyo nombre sea “uno” y “dos” he imprímelas por pantalla. Pon un comentario con el tipo de dato que contienen.
```javascript
$frist = "Variable's content 1"; // String
$second = 245; // Integer
echo "FRIST VARIABLE: ".$frist."<br/>";
echo "SECOND VARIABLE: ".$second."<hr/>";
?>
```

**Ejercicio 2.** Escribe un programa que imprima por pantalla los cuadrados (el número multiplicado por sí mismo) de los 30 primeros números naturales.
```javascript
<?php
for($i = 1; $i <= 30; $i++){
	echo "The square of ".$i." is ".($i*$i)."<br/>";
}
?>
```

**Ejercicio 3.** Modifica el ejercicio anterior para que muestre al lado de cada cuadrado si es un número par o impar.
```javascript
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
```javascript
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
```javascript
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
|**index.html** |
|---------------|
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
echo
'<div style="width:120px;">
  <p style="text-align:center;margin:0px;">'.$number.' Multiplication table</p>
  <table class="table" >';
for($i = 1; $i <= 10; $i++){
	echo '<tr>';
	$result=multiply($i,$number);
	echo '<th>'.$number.' x '.$i.'</th>';
	echo '<th>'.$result.'</th>';
	echo '</tr>';
}
echo
  '</table>
</div>';
?>
```

**Ejercicio 6.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOR para mostrar por pantalla los doce nombres.
```javascript
<?php
$meses = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
for($i = 0; $i < count($meses); $i++ ){
	echo $meses[$i]."<br/>";
}
?>
```
**Ejercicio 7.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOREACH para mostrar por pantalla los doce nombres.
```javascript
<?php
$meses = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
foreach ($meses as $mes) {
	echo $mes."<br/>";
}
?>
```

**Ejercicio 8.** Escribir un programa que calcule el factorial de 5. El factorial de un número entero N es una operación matemática que consiste en multiplicar todos los factores N x (N-1) x (N-2) x ... x 1.
Así, el factorial de 5 (escrito como 5!) es igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120
```javascript
$factorial = 1;
$numero = $_GET["numero"];
for($cont = 1; $cont <= $numero; $cont++){
	// $factorial = $factorial * $cont;
	$factorial *= $cont;
}
echo "El factorial de ".$numero." es ".$factorial;
?>
```

**Ejercicio 9.** Mostrar todos los números pares que hay entre el 1 y el 100.
```javascript
<?php
for($i = 1; $i <= 100; $i++){
	if($i%2 == 0){
		echo $i." es par <br/>";
	}
}
?>
```
**Ejercicio 10.** Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100.
```javascript
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
```javascript
```

**Ejercicio 12.** Hacer un programa que tenga un array de 5 números enteros y hacer lo siguiente con él:
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector.
```javascript
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

**Ejercicio 13.** Escribe un programa que muestre la dirección IP del usuario que visita nuestra web y si usa Firefox darle la enhorabuena.

**Ejercicio 14.** Escribe un programa que añada valores a un array mientras que su longitud sea menor a 100 y después que se muestre la información del array por pantalla.

**Ejercicio 16.** Escribe un programa que compruebe si una variable esta vacía y si está vacía, rellenarla con texto en minúsculas y mostrarlo convertido a mayúsculas en negrita.

**Ejercicio 17.** Crea un script PHP que tenga tres variables, una tipo array, otra tipo string y otra boleana y que imprima un mensaje según el tipo de variable que sea.

**Ejercicio 18.** Crea un array con el contenido de la siguiente tabla:

| Frutas   | Deportes   | Idiomas   |
|----------|------------|-----------|
| Manzana  |Futbol      |Español    |
| Naranja  |Tenis       |Inglés     |
| Sandia   |Baloncesto  |Francés    |
| Fesa     |Beisbol     |Italiano   |

Recórrelo y muestra la tabla en HTML con el contenido del array.

**Ejercicio 19.** El cálculo del factorial se realiza en un bucle que va disminuyendo el valor de una variable y multiplicando todos los valores entre sí, como ya hemos visto anteriormente.
Aprovechando este patrón puede crear una función que realice la factorial del número que le pasemos por parámetro, ahorrando así líneas de código.

**Ejercicio 20.** Utiliza una función de PHP para mostrar la fecha actual por pantalla.

**Ejercicio 21.** Utiliza los includes de PHP para tener una estructura html básica y separar el código por el header, body y footer.

**Ejercicio 22.** Utiliza la función filter_var para comprobar si el email que nos llega por la URL es un email valido.

**Ejercicio 23.** Crea una función a la que le pases un número y te saque su tabla de multiplicar.

**Ejercicio 24.** Modifica el ejercicio anterior para pasarle un parámetro opcional que nos permita imprimir directamente la tabla en HTML.

**Ejercicio 25.** Crea una sesión que vaya aumentando su valor en uno o disminuyendo en uno en función de si el parámetro GET “counter” está a uno a cero.

**Ejercicio 26.** Crea un formulario HTML con los siguientes campos:
- Nombre
- Apellidos
- Biografía
- Email
- Contraseña
- Imagen

**Ejercicio 27.** Recoge los datos de las variables POST y muéstralos por pantalla en el caso de que existan y no estén vacíos.

**Ejercicio 28.** Valida el formulario con las siguientes reglas:
- Nombre: Solo puede estar formado por letras y tener una longitud máxima de 20 caracteres.
- Apellidos: Solo puede estar formado por letras.
- Biografía: No puede estar vacío.
- Email: tiene que ser un email válido.
- Contraseña: Debe tener una longitud mayor que 6 caracteres.
- Imagen: Puede estar vacía.

**Ejercicio 29.** Conéctate a una base de datos MySQL y crea la siguiente tabla usuarios con los mismos campos que el formulario anterior.

**Ejercicio 30.** Crea un script PHP que inserte 4 registros en la tabla que creaste en el ejercicio anterior.

**Ejercicio 31.** Haz un listado de los registros de la tabla de la base de datos mostrando solo el nombre y los apellidos del usuario.

**Ejercicio 32.** Crea una página dinámica para mostrar el detalle completo del registro pasándole por GET el ID.

**Ejercicio 33.** Crea una página de edición del usuario.

**Ejercicio 34.** Haz que cuando creamos o editamos un usuario se puedan subir imágenes y guardarlas en el directorio uploads del servidor.

**Ejercicio 35.** Crea un login de usuarios.

**Ejercicio 36.** Crea una paginación para el listado de usuarios.
