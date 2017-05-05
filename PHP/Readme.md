VARIABLES 
=========
Las variables en PHP se representan mediante el símbolo de **dolar $**, y son sensibles a mayúsculas y minúsculas.
**Reglas para nombres de variables:**
* Tienen que empezar con una **letra** o **barra baja _**, seguido de cualquier número, letra o barra baja.
* **$this** es una variable especial que no puede ser asignada.
Las variables por defecto se asignan por **valor**, por lo que cuando se asigna una **expresión** a una **variable**, el valor de la expresión se copia en la variable. Una expresión es cualquier cosa que tenga un valor:
```php
$x = 3; //  3 es una expresión
function numero(){
    return 3;
}
// Las funciones son expresiones con el valor de sus valores devueltos
$x = prueba(); // La expresión prueba() es 3
```
Si se asigna el valor de una variable a otra, los cambios que se hagan en una de las dos no afectarán a la otra:
```php
$x = 3;
$y = $x;
echo $y; // Devuelve 3
$y = 4;
echo $y; // Devuelve 4, y $x sigue valiendo 3
```
No ocurre lo mismo si se asignan valores por referencia, donde los cambios que afecten a una variable afectarán a la otra. Para ello se antepone el signo ampersand & al comienzo de la variable cuyo valor se quiere asignar.
```php
<?php
$uno = 'Coche';
$dos = &$uno;

$uno = 'Moto';

echo $uno; // Devuelve Moto
echo $dos; // Devuelve Moto
```
Cuando se intentan emplear variables no definidas, PHP crea notices o warnings, aunque devuelve un valor dependiendo del tipo que se está solicitando:
```php
<?php
//--- Uso de variable no definida y no referenciada
var_dump($variable_indefinida); // Devuelve null
// Notice: Undefined variable

//--- Uso booleano
echo($booleano_indefinido ? "true\n" : "false\n"); // Devuelve false
// Notice: Undefined variable

//--- Uso de una cadena
$cadena_indefinida .= 'abc';
var_dump($cadena_indefinida); // Devuelve 'string(3)' "abc"
// Notice: Undefined variable

//--- Uso de un entero
$int_indefinido += 25; // 0 + 25 => 25
var_dump($int_indefinido); // Devuelve 'int(25)'
// Notice: Undefined variable

//--- Uso de float
$flotante_indefinido += 1.25;
var_dump($flotante_indefinido); // Devuelve 'float(1.25)'
// Notice: Undefined variable

//--- Uso de array
$array_indefinida[3] = "def";
var_dump($array_indefinida); // Devuelve array(1) {  [3]=>  string(3) "def" }
// No genera ningún mensaje de error

//--- Uso de objetos; crea un nuevo objeto stdClass
$objeto_indefinido->foo = 'bar';
var_dump($objeto_indefinido); // Devuelve object(stdClass)#1 (1) {  ["foo"]=>  string(3) "bar" }
//  Warning: Creating default object from empty value
?>
```
**Ejercicio 1.** Crea dos variables cuyo nombre sea “uno” y “dos” he imprímelas por pantalla. Pon un comentario con el tipo de dato que contienen.
```php
$uno = "Contenido de la variable 1"; // String
$dos = 245; // Integer
echo "UNO: ".$uno."<br/>";
echo "DOS: ".$dos."<hr/>";
?>
```
**Ejercicio 2.** Escribe un programa que imprima por pantalla los cuadrados (el número multiplicado por sí mismo) de los 30 primeros números naturales.
```php
<?php
for($i = 1; $i <= 30; $i++){
	echo "El cuadrado de ".$i." es ".($i*$i)."<br/>";
}
?>
```
**Ejercicio 3.** Modifica el ejercicio anterior para que muestre al lado de cada cuadrado si es un número par o impar.
```php
for($i = 1; $i <= 30; $i++){
	$cuadrado = $i*$i;
	echo "El cuadrado de ".$i." es ".$cuadrado;
	if($cuadrado%2 == 0){
		echo " y es par";
	}else{
		echo " y ES IMPAR";
	}
	echo "<br/>";
}
?>
```
**Ejercicio 4.** Escribe un programa que multiplique los 20 primeros números naturales. Utiliza el bucle While.
```php
<meta charset="utf-8" />
<?php
$numero = 1;
$contador = 2;
while($contador <= 20){
	// $numero = $numero * $contador;
	$numero *= $contador;
	echo $numero."<br/>";
	$contador++;
}
echo "El resultado de multiplicar los 20 primeros números es: ".$numero;
?>
```
MÉTODO GET
==========
Existen dos métodos con los que el navegador puede enviar información al servidor:
* Método HTTP GET. Información se envía de forma visible
* Método HTTP POST. Información se envía de forma no visible
Antes de que el navegador envíe la información proporcionada, la codifica mediante URL encoding, dando como resultado un Query String. Esta codificación es un esquema de keys y values separados por un ampersand &:
`key1=value1&key2=value2&key3=value3...`
Los espacios y otros caracteres no alfanuméricos se sustituyen. Una vez que la información es codificada, se envía al servidor.

Método HTTP GET
---------------
El método GET envía la información codificada del usuario en el header del HTTP request, directamente en la URL. La página web y la información codificada se separan por un interrogante ?:
`www.ejemplo.com/index.htm?key1=value1&key2=value2&key3=value3...`
* El método GET envía la información en la propia URL, estando limitada a 2000 caracteres.
* La información es visible por lo que con este método nunca se envía información sensible.
* No se pueden enviar datos binarios (archivos, imágenes...).
* En PHP los datos se administran con el array asociativo $_GET.
*Ejemplo sencillo de formulario html con el método GET:*
```php 
<html>
<body>
<form action="formget.php" method="get">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_GET["nombre"]) ? print $_GET["nombre"] : ""; ?><br>
Tu email es: <?php isset($_GET["email"]) ? print $_GET["email"] : ""; ?>
</body>
</html>
```
La url que resulta de hacer click en submit es de la forma:
`formget.php?nombre=peter&email=peter%40ejemplo.com`
En este caso @ es un carácter especial y se codifica.

Método HTTP POST
----------------
Con el método HTTP POST también se codifica la información, pero ésta se envía a través del body del HTTP Request, por lo que no aparece en la URL.
* El método POST no tiene límite de cantidad de información a enviar.
* La información proporcionada no es visible, por lo que se puede enviar información sensible.
* Se puede usar para enviar texto normal así como datos binarios (archivos, imágenes...).
* PHP proporciona el array asociativo $_POST para acceder a la información enviada.
```php 
<html>
<body>
<form action="formpost.php" method="post">
    Nombre: <input type="text" name="nombre"><br>
    Email: <input type="text" name="email"><br>
    <input type="submit" value="Enviar">
</form>
Hola <?php isset($_POST["nombre"]) ? print $_POST["nombre"] : ""; ?><br>
Tu email es: <?php isset($_POST["email"]) ? print $_POST["email"] : ""; ?>
</body>
</html>
```
Se puede comprobar que la información no se muestra en la url.

-----------------------------------------------------

**Ejercicio 5.** Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL.
*Nota:* Las variables tipo `GET`se pueden pasar mediante url como en el siguiente ejemplo: `ejercicio5.php?variable=Hola&numero=5`. Se puede apreciar que 
```php
<?php
if(isset($_GET["numero"]) && is_numeric($_GET["numero"])){
	$numero = $_GET["numero"];
}else{
	$numero = 5; //defecto
	echo "<p>Numero por defecto</p>";
}
echo "<h2>Tabla de multiplicar de ".$numero."</h2>";
for($i = 1; $i <= 10; $i++){
	echo $i." x ".$numero." = ".($i*$numero)."<br/>";
}
?>
```
**Ejercicio 6.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOR para mostrar por pantalla los doce nombres.
```php
<?php
$meses = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
for($i = 0; $i < count($meses); $i++ ){
	echo $meses[$i]."<br/>";
}
?>
```
**Ejercicio 7.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOREACH para mostrar por pantalla los doce nombres.
```php
<?php
$meses = array( "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" );
foreach ($meses as $mes) {
	echo $mes."<br/>";
}
?>
```
**Ejercicio 8.** Escribir un programa que calcule el factorial de 5. El factorial de un número entero N es una operación matemática que consiste en multiplicar todos los factores N x (N-1) x (N-2) x ... x 1.
Así, el factorial de 5 (escrito como 5!) es igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120
```php
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
```php
<?php
for($i = 1; $i <= 100; $i++){
	if($i%2 == 0){
		echo $i." es par <br/>";
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
