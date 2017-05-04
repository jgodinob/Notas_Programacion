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
