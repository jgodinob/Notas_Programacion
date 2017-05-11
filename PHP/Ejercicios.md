PHP - Introducción
=========================
INDICE
------
1. [ESTRUCTURA Y CARACTERÍSTICAS](#1estructura-y-características)
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
	5. [#45incremento-y-decremento](Incremento y decremento)
	
----------------------------------

1.ESTRUCTURA Y CARACTERÍSTICAS
==============================

1.1.PHP y HTML
---------------
PHP es un lenguaje cuya función básica es la de **producir HTML**, que no deja de ser el lenguaje en el que realiza las páginas web. Sin embargo, como PHP es un lenguaje de programación, gracias a él tenemos la capacidad de analizar las diferentes situaciones (entrada del usuario, datos contenidos en una base de datos) y decidir producir código HTML condicional sobre los resultados del procesado.
El código PHP que incluimos en nuestra página debe estar **entre etiqueta de apertura y de cierre** adecuado, que son los siguientes:
```php
<?php // etiqueta de apertura
?> // etiqueta de cierre
```
Todo lo que está contenido entre estas etiquetas **debe coincidir con las reglas de sintaxis de PHP**, y es el código que será ejecutado por el intérprete y no se envía directamente al navegador. Para generar una salida de información al navegador se puede utilizar la función echo.
Veamos un ejemplo sencillo, que consiste en código HTML y PHP (recuerda que código PHP está entre `<?php` y `?>` ):
```php 
<html>
	<head>
		<title>
		 	<?php echo "Pagina de prueba PHP"; ?>
		</title>
	</head>
	<body>
		<?php echo "Que tengas un buen día!"; ?>
	</body>
</html>
```
Este código sencillo **producirá un archivo HTML** cuyo contenido será simplemente:
```php
<html>
	<head>
		<title> Pagina de prueba PHP </title>
	</head>
	<body> Que tengas un buen día!</body>
</html>
```

**Ejercicio 1.** Primera página en PHP - Confecciona un programa que muestre una serie de mensajes en diferentes líneas en la página empleando el comando `echo`
Este es el código que resuelve el ejercicio:
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 			echo "Mi nombre es Juan.<br>";
 			echo "Bienvenido a mi página web.";
		?>
 	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

1.2.Los Caractéres de Escape
-----------------------------
Los datos se envía al navegador que sigue al comando echo se pueden encerrar entre paréntesis. y la cadena puede usar comillas simples (`''` ) o dobles (`""` ). Hay que tener en cuenta también que el comando `<br />` de HTML no generará un salto de línea en el código PHP (aunque si en el navegador, de la forma clásica). Aquí podemos utilizar el carácter de escape `/n`. Veamos un ejemplo práctico:
```php
<?php
	echo "primera linea\n";
	echo "segunda linea<br />";
	echo "tercera linea";
?>
```
Se verá de la siguiente forma en el código HTML:
```php
primera linea
segunda linea<br>tercera linea
```
Mientras que en el navegador se verá así:
```php
primera linea segunda linea
tercera linea
```
Hay que tener en cuenta también que al final de cada declaración PHP ponemos un punto y coma (;): Se espera que que el punto y coma cierre cada afirmación de forma obligatoria en casi todas las ocasiones. No hacerlo provocará un error.
Hemos visto que los bloques de código en PHP se marcan con las etiquetas `<?php ... ?>`.
También es posible hacerloo con la etiqueta `<script language = "php"> ... </script>` o incluso simplificando la primera que hemos visto: `<? ... ?>`, siempre y cuando en el servidor no se hayan desactivado las etiquetas cortas. El archivo php.ini de nuestro servidor guarda esta configuración. Debido a esta causa, es una buena práctica usar siempre la primera de las estructuras que te hemos mencionado.

**Ejemplo**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>

		<?php

			echo "Primera Línea<br />\n\t\t";
			echo "Segunda Línea<br />\n\t\t";
			echo "Tercera Línea<br />\n\t\t";

		?>

	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

1.3.Comentarios en PHP
----------------------

En PHP, como en otros lenguajes de programación, es posible **insertar comentarios** en el código. Los comentarios desempeñan un papel importante en esta fase de mantenimiento del código, ya que pueden facilitar en gran medida la comprensión de los pasajes aparentemente oscuros. Aunque hay varias formas de hacerlos, la notación más frecuente para los comentarios de una sola línea son aquellos que van precedidos por dos barras:
```php
<?php
 	// Esto es un comentario
?>
```
Si deseamos recurrir a los comentarios de varias líneas, la notcación sería la siguiente, similar a Java y C:
```php
<? php
 	/ *
 	Esto es un comentario
 	multilínea
 	usando la misma sintaxis
 	utilizada en Java y C
 	* /
?>
```

**Ejemplo**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>

		<?php

			// esto es un comentario

			echo "Primera Línea<br />\n\t\t";
			echo "Segunda Línea<br />\n\t\t";
			echo "Tercera Línea<br />\n\t\t";

			/*  esto un comentario
				multilínea
				Hola
			*/
		?>

	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

2.VARIABLES
============

2.1.Concepto de Variables
---------------------
Las variables son componentes fundamentales de cualquier lenguaje de programación, ya que nos permite tratar los datos de nuestro programa sin conocer a priori cuál será su valor. Podemos imaginar una variable como una especie de **contenedor en el que se almacena el valor que nos interesa**, y que puede cambiar cuando sea necesario.
En PHP podemos elegir el nombre de las variables utilizando **letras, números y el carácter de subrayado o el guión bajo ( _ )**. El primer carácter del nombre debe, sin embargo, ser una letra o un guión bajo (no un número).
También debemos recordar que el nombre de las variables **es sensible al uso de mayúsculas y minúsculas**, y por lo tanto, si se escribe dos veces el nombre de una variable usando letras mayúsculas y minúsculas de una manera diferente, para PHP serán dos variables distintas.
En PHP, los nombres de variables **están precedidos por un signo de dólar ($)**. PHP tiene una característica que hace que sea mucho más flexible que otros lenguajes de programación, y es que no se requiere que las variables se declaran antes de su uso. Por tanto, podemos darnos el lujo de hacer referencia a una variable directamente cuando la necesitamos:
```php
<?php
	$a = 5;
?>
```
En esta línea de código hemos definidos la variable a, asignándole el valor 5. En la parte final de la declaración vemos el punto y coma, que, como vimos anteriormente, debe cerrar todas las instrucciones PHP. La utilidad de una variable se vuelve crucial en un momento en que puede ser utilizado en expresiones matemáticas o lógicas. Veamos un ejemplo sencillo:
```php
<?php
	$a = 9;
	$b = 4;
	$c = $a * $b;
	echo "El resultado de la operación es: ";
	echo $c;
?>
```
En este fragmento de código, se utilizaron tres variables: *a*, a la que hemos dado el valor *9*, *b*, *a* la que hemos asignado el valor *4*, y *c*, que debe tener el valor del producto de *a* y *b*. Al terminar el código imprimimos el resultado. Evidentemente, después de la ejecución del código, *c* tendrá un valor de *36*.
Si hacemos referencia a **una variable que no existe**, por ejemplo, `$z`, obtendremos un mensaje de error

**Ejercicio 1.** Crea dos variables cuyo nombre sea “uno” y “dos” he imprímelas por pantalla. Pon un comentario con el tipo de dato que contienen.
```php
$frist = "Variable's content 1"; // String
$second = 245; // Integer
echo "FRIST VARIABLE: ".$frist."<br/>";
echo "SECOND VARIABLE: ".$second."<hr/>";
?>
```

**[Regresar al índice](#indice)**

----------------------------------

2.2.Variables Dinámicas
-----------------------
A veces es conveniente tener nombres de **variables dinámicas**. Dicho de otro modo, son nombres de variables que se pueden establecer y usar de forma variable. Una variable normal se establece con una sentencia como:
```php
<?php
	$a = "hola";
?>
```
Una variable dinámica toma el valor de una variable y lo trata como el nombre de una variable. En el ejemplo anterior, hola, se puede usar como el nombre de una variable utilizando dos signos de dolar. p.ej
```php
<?php
	$$a = "mundo";
?>
```
En este momento se han definido y almacenado dos variables en el árbol de símbolos de PHP: `$a`, que contiene `"hola"`, y  `$hola`, que contiene `"mundo"`. De esta forma, esta sentencia:
```php
<?php
	echo "$a ${$a}";
?>
```
produce el mismo resultado que:
```php
<?php
	echo "$a $hola";
?>
```

**Ejemplo**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
		<?php
			$a = 5;
			$b = 3;
			$c = $a + $b;

			echo "El resultado de la suma es ";
			echo $c;
		?>
	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

3.TIPOS DE DATOS
=================

3.1.Introducción a los tipos de datos
-------------------------------------

Una variable puede contener diferentes tipos de valores, cada uno de los cuales tiene un comportamiento diferente y utilidad. Vamos a verlo en el siguiente tema. 

Boleanos
--------
Los tipos de datos booleanos se utilizan para indicar los valores `true` o `false` (verdadero o falso) en expresiones lógicas. El tipo Boolean se asocia a variables que contienen el resultado de una expresión booleana o los valores verdaderos y falsos. Veamos un ejemplo rápido:
```php
<?php
	$verdadero = true;
	$falso = false;
?>
```
**Ejemplo**
```php
html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
		<?php
			$alta = true;
			$pagado = false;
		?>
	</body>
</html>
```

Entero
------
Otro tipo de datos es el número entero, positivo o negativo, cuyo valor del máximo (absoluto) puede variar dependiendo del sistema operativo que se ejecuta en PHP, pero que por lo general es, aproximadamente 2 mil millones (2 a la potencia 31a). Veamos ejemplos de algunas variables que definen números enteros:
```php
<?php
	$int1 = 129;
	$int2 = -715;
	$int3 = 5 * 8; // $int3 vale 40
?>
```

**Ejemplo** 
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
		<?php
			$ent1 = 129;
			$ent2 = -129;
			$ent3 = 8*5;

			$dec = 4.153;

			$num1 = 332e5; // 3.2 * 10^5 -> 320.000
			$num2 = 4E-8;  // 4*10^8 -> 4/100.000.000 = 0.00000004
		?>
	</body>
</html>
```

**Ejercicio 2.1.** Define una variable de los siguientes tipos: integer, double, string y boolean. 
A continuación, imprímelas en la página, una por línea
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 		// Definimos las variables
 			$edad = 30;
 			$peso = 75.50;
 			$nombre = "Juan";
 			$socio = true;
 		// Las imprimimos en pantalla
 			echo "Variable integer:";
 			echo $edad;
 			echo "<br>";
 			echo "Variable double:";
 			echo $peso;
 			echo "<br>";
 			echo "Variable string:";
 			echo $nombre;
 			echo "<br>";
 			echo "Variable boolean:";
 			echo $socio;
 		?>
 	</body>
</html>
```

Coma Flotante
-------------
Este tipo de datos es un número decimal (a veces nos referiremos a él como *"doble"* o *"real"*). Para separar los decimales no usaremos la coma, si no el punto. Esta es la sintaxis que usaremos:
```php
<?php
	$numero1 = 4.153; // 4,153
	$numero2 = 3.2e5; // 3,2 * 10^5, es decir, 320.000
	$numero3 = 4E-8; // 4 * 10^-8, es decir, 4/100.000.000 = 0,00000004
?>
```

**Ejercicio 2.2.**En primer lugar definiremos tres variables con números enteros. A continuación, crearemos una cadena en la que incorporaremos estas tres variables, por ejemplo, ("Las notas del examen han sido...").
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 		// Variables
 			$nota1 = 10;
 			$nota2 = 7;
 			$nota3 = 8;
 		// Cadena a la que incorporamos las variables
 			echo "Las notas del examen han sido $nota1, $nota2 y $nota3";
 		?>
 	</body>
</html>
```

Cadena
------
Una cadena es **cualquier conjunto de caracteres**, sin limitación normalmente, contenida dentro de un par de comillas dobles o simples. Las cadenas delimitadas por comillas simples son la forma más simple. Este es un ejemplo: 
```php
<?php
	$frase = 'Ana dijo: "Hola, pero nadie respondió"';
	echo $frase;
?>
```
Las comillas dobles nos permiten usar cadenas de una manera más sofisticada, de manera que si en la cadena delimitada por comillas dobles, PHP reconoce un nombre de variable, lo reemplaza por el valor de la variable. Veamos algunos ejemplos:
```php
<?php
	$nome = 'Ana';
	echo "$nome es simpatica... a veces";
	// imprime: Ana es simpatica... a veces
	echo '$nome es simpatica... a veces';
	// imprime: $nome es simpatica... a veces
	echo "{$nome} es simpatica... a veces";
	// sintaxis alternativa, con el mismo efecto que la primera
?>
```
Debes tener en cuenta un par de reglas muy importantes cuando se utilizan cadenas delimitadas por **comillas simples o dobles**: Debido a que puede ocurrir que una cadena debe contener en su interior un apóstrofe o un par de comillas, necesitamos un sistema para que sea claro para PHP delimitar que carácter es parte de la cadena y cual su delimitador. En este caso utilizamos el llamado "carácter de escape", es decir, la barra invertida. He aquí algunos ejemplos en italiano, donde usaremos apóstrofes:
```php
<?php
	echo "Torniamo un'altra volta"; // imprime: Torniamo un'altra volta
	echo 'Torniamo un'altra volta'; // Provoca un error
	echo 'Pedro dijo "Adios" y se marchó';
	// imprime: Pedro dijo "Adios" y se marchó
	echo "Pedro dijo "Adios" y se marchó"; // Provoca un error
?>
```
A partir de estos ejemplos podemos ver que la barra invertida debe ser utilizado como un carácter de escape en la cadena cuando queremos incluir el mismo tipo de carácter que delimita.

**Ejemplo**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
		<?php
			$dia = 15;
			$hoy = "Hoy es el día $dia <br/>";
			$hoy2 = 'Hoy es el día $dia <br/>';

			echo $hoy;
			echo $hoy2;
		?>
	</body>
</html>
```

**Ejercicio 3.** Vamos a definir dos variables, una con un nombre y otra con una edad y los insertaremos en la frase "Mi nombre es ____ y tengo ____ años"
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 			$nombre = "Juan";
 			$edad = "25";
 			echo 'Mi nombre es '.$nombre.' y tengo '.$edad.' años.';
 		?>
 	</body>
</html>
```

Matrices
--------
Podemos considerar una matriz como una variable compleja, que **contiene una serie de valores**, cada uno de los cuales se caracteriza por una clave, o índice que lo identifica de manera única. Veamos un primer ejemplo, que muestra la definición de un conjunto compuesto por cinco valores:
```php
$color = array('blanco', 'negro', 'azul', 'verde', 'rojo');
```
Cada uno de los cinco colores se caracteriza por un **número de índice**, que PHP asigna automáticamente a partir de 0 para recuperar un valor particular de la variable que contiene la matriz. Así haríamos referencia a ellos:
```php
echo $color[1]; // imprime 'negro'
echo $color[4]; // imprime 'rojo'
```
Por supuesto, veremos las matrices (o **arrays**) en profundidad en un futuro tema.

**Ejemplo**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
	</head>
	<body>
		<?php
			$color = array ('blanco','rojo','azul','verde','amarillo');

			echo $color[1];
			echo '<br/>';
			echo $color[3];
		?>
	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

4.HACIENDO CÁLCULOS EN PHP: EXPRESIONES ARITMÉTICAS Y OPERADORES
================================================================

4.1.Introducción a los operadores
---------------------------------
Los operadores son otro de los elementos básicos de cualquier lenguaje de programación, ya que nos permiten no sólo para realizar las operaciones aritméticas tradicionales, sino además, **manipular los contenidos de nuestras variables**. El operador más clásico y conocido es el de **asignación**.

**[Regresar al índice](#indice)**

----------------------------------

4.2.Operadores de asignación
----------------------------
Un ejemplo de operador de asignación lo tendríamos en la expresión `$nombre = "Juan";` 
El símbolo `=` se utiliza para asignar a la variable `$nombre` el valor `'Juan'`. En general, podemos decir que con el operador de asignación tomamos lo que está a la derecha del signo del signo de igual y le asignarmos el valor que lo sigue. No solo trabajamos con valores. También es posible asignar a una variable otra variable:
```php
$a = 5;
$b = $a;
```
Con la primera declaración asignamos a `a$` el valor `5`, y con el segundo asignamos a `$b` el mismo valor que tenga `$a`.

**Ejemplo - Operadores de asignación**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php
			$a = 4;
			$b = $a + 5;
			$b = ($a = 4);
		?>
	</body>
</html>
```

**Ejemplo - Operadores de asignación**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php
			$a = 3;
			$b += 5;
		?>
	</body>
</html>
```

**Ejemplo - Operadores de asignación**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php
			$a = 3;
			$b -= 7;
		?>
	</body>
</html>
```

**Ejemplo - Operadores de asignación**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php
			$b = "Pedro ";
			$b .= "Pérez";  // "Pedro Pérez"
		?>
	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

4.3.Operadores para concatenar cadenas
--------------------------------------
Dentro de los operadores que se emplean para trabajar con cadenas de caracteres, uno de los más comunes es elpunto, que se emplea para concatenar, unir cadenas.
```php
$nombre = "Juan";
$cadena = "Hola ".$nombre; // $cadena equivale a 'Hola Juan'
```

**[Regresar al índice](#indice)**

----------------------------------

4.4.Operadores aritméticos
--------------------------
Otros operadores muy fáciles de entender son los que permiten realizar operaciones aritméticas con los datos: **suma, resta, división, multiplicación o módulo**.
```php
	$a = 3 + 7; // suma
	$b = 5 - 2; // resta
	$c = 9 * 6; // multiplicación
	$d = 8 / 2; // divisioón
	$e = 7 % 4; // modulo (el módulo es el resto de la división entera, en este caso 3)
```
Con el operador de asignación también puede usar una variable para hacer un cálculo cuyo resultado debe ser asignado a la variable. Por ejemplo, supongamos que tenemos una variable a la que queremos aumentar el valor:
```php
	$a = $a + 10; // el valor de $a aumenta en 10
```
Con esta instrucción, se realiza el cálculo, que está a la derecha del signo `=` y el resultado se almacena en la variable que se muestra a la izquierda.
Resultados como los que hemos visto también se puede lograr con los operadores de asignación combinados, que nos permiten hacer el código más compacto:
```php
	$x += 4; // incrementa $x en 4 (equivale a $x = $x + 4)
	$x -= 3; // decrementa $x en 3 (equivale a $x = $x - 3)
	$x .= $a;
// el valor de la cadena $a se concatena a $x (equivale a $x = $x . $a)
	$x /= 5; // equivale a $x = $x / 5
	$x *= 4; // equivale a $x = $x * 4
	$x %= 2; // equivale a $x = $x % 2
```
De esta manera, le decimos a PHP que queremos asignar a la variable especificada a la izquierda el resultado de la operación que está delante del signo igual y el valor especificado a la derecha.

**Ejemplo - Operadores aritméticos**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php

			$a = 5;
			$b = 9;

			echo "Suma: ";
			echo $a + $b;

			echo "<br/>Resta: ";
			echo $a - $b;

			echo "<br/>Multiplicación: ";
			echo $a * $b;

			echo "<br/>División: ";
			echo $a / $b;

			echo "<br/>Módulo: ";
			echo $a % $b;
			
		?>
	</body>
</html>
```

**Ejemplo - Operadores aritméticos**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php

			$a = 4;
			$b = 5;
			$c = 3;

			echo $a-$b*$c;
			echo '<br/>';
			echo ($a-$b)*$c;

		?>
	</body>
</html>
```
**Ejercicio 4.1.** Vamos a crear una función que calcule el 25% de 325 y lo muestre en pantalla.
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 			$porcentaje = (25 * 325) / 100;
 			echo 'El porcentaje 25% de 325 es: '.$porcentaje;
 		?>
 	</body>
</html>
```

**Ejercicio 4.2.** Calcularemos el IVA del 21%de un producto que vale 43.90 y lo mostraremos por pantalla
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
 	<body>
 		<?php
 			$iva = (21 * 43.90) / 100;
 			echo 'El IVA del producto de 43,90 es: '.$iva;
 		?>
 	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

4.5.Incremento y decremento
---------------------------
Si necesitas aumentar y disminuir una variable en una unidad, una buena solución es usar los operadores de incremento y decremento:
```php
	$a++; // incrementa en 1
	++$a; // incrementa en 1
	$a--; // decrementa en 1
	--$a; // decrementa en 1
```
La diferencia entre el prefijo y posponer el incremento o decremento es crucial cuando se utilizan estos operadores en expresiones, como ya veremos.

**Ejemplo - Incremento y decremento**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php

			$a = 15;
			$b = 15;

			echo --$a;
			echo '<br/>';
			echo $b--;
			echo '<br/>';
			echo $b;
		?>
	</body>
</html>
```
**Ejemplo - Incremento y decremento**
```php
<html lang="es">
	<head>
		<title>Ejercicio</title>
		<meta charset = "UTF-8" />
		<link rel="styleshett" href="style.css">
	</head>
	<body>
		<?php

			$a = 15;
			$b = 15;

			echo ++$a;
			echo '<br/>';
			echo $b++;
			echo '<br/>';
			echo $b;
		?>
	</body>
</html>
```

**Ejercicio 5.** Vamos a definir dos variables numéricas enteras, $a y $b. Asígnales el valor que quieras. Realiza los cálculos y muestra en pantalla su suma, su resta, su multiplicación y su división. A continuación, incrementa las dos variables en una unidad y muestra en pantalla el resultado.
```php
<!DOCTYPE html>
<html>
 	<head>
 		<meta charset="utf-8" />
 		<title>Ejercicio</title>
 	</head>
	<body>
 		<?php
 		// Definimos las variables
 			$a = 8;
 			$b = 3;
 		// Suma, resta, multiplicación y división
 			echo $a + $b, "<br>";
 			echo $a - $b, "<br>";
 			echo $a * $b, "<br>";
 			echo $a / $b, "<br>";
 		// Incrementamos y mostramos las variables
 			$a++ ;
 			echo $a,"<br>";
 			$b++;
 			echo $b,"<br>";
 		?>
 	</body>
</html>
```

**[Regresar al índice](#indice)**

----------------------------------

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
