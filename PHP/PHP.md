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
**Ejercicio 4.** Escribe un programa que multiplique los 20 primeros números naturales.
**Ejercicio 5.** Imprimir por pantalla la tabla de multiplicar del número pasado en un parámetro GET por la URL.
**Ejercicio 6.** Crear un array llamado meses y que almacene el nombre de los doce meses del año. Recorrerlo con FOR para mostrar por pantalla los doce nombres.
**Ejercicio 7.** Igual que el anterior pero utilizando el foreach.
