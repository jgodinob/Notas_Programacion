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
**Ejercicio 5.** Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL.
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
**Ejercicio 7.** Igual que el anterior pero utilizando el foreach.

**Ejercicio 8.** Escribir un programa que calcule el factorial de 5. El factorial de un número entero N es una operación matemática que consiste en multiplicar todos los factores N x (N-1) x (N-2) x ... x 1.
Así, el factorial de 5 (escrito como 5!) es igual a: 5! = 5 x 4 x 3 x 2 x 1 = 120

**Ejercicio 9.** Mostrar todos los números pares que hay entre el 1 y el 100.

**Ejercicio 10.** Mostrar los números múltiplos de un número pasado por la URL que hay del 1 al 100.

**Ejercicio 11.** Un número es bueno si y solo si la suma de sus divisores sin contarse el mismo da ese número. Programa que calcule si un número es bueno o no.

**Ejercicio 12.** Hacer un programa que tenga un array de 5 números enteros y hacer lo siguiente con él:
1. Recorrerlo y mostrarlo.
2. Ordenarlo y mostrarlo.
3. Mostrará su longitud.
4. Buscar en el vector.

**Ejercicio 13.** Escribe un programa que muestre la dirección IP del usuario que visita nuestra web y si usa Firefox darle la enhorabuena.

**Ejercicio 14.** Escribe un programa que añada valores a un array mientras que su longitud sea menor a 100 y después que se muestre la información del array por pantalla.

**Ejercicio 16.** Escribe un programa que compruebe si una variable esta vacía y si está vacía, rellenarla con texto en minúsculas y mostrarlo convertido a mayúsculas en negrita.

**Ejercicio 17.** Crea un script PHP que tenga tres variables, una tipo array, otra tipo string y otra boleana y que imprima un mensaje según el tipo de variable que sea.

**Ejercicio 18.** Crea un array con el contenido de la siguiente tabla:

|----------------|----------------|----------------|
|**Frutas**|**Deportes**|**Idiomas**|
|----------------|----------------|----------------|
|Manzana|Futbol|Español|
|Naranja|Tenis|Inglés|
|Sandia|Baloncesto|Francés|
|Fesa|Beisbol|Italiano|
|----------------|----------------|----------------|

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
