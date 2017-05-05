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
