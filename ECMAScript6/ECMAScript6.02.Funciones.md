JAVASCRIPT - FUNCIONES
======================
INDICE
------
1. [FUNCIONES](#funciones)
  * [Función dentro de un objeto](#función-dentro-de-un-objeto)
  * [Función dentro de una función](#función-dentro-de-una-función)
  * [Función autoinvocada](#función-autoinvocada)
  * [Función constructora](#función-constructora)
  * [Formas de llamar a una función indirectamente](#formas-de-llamar-a-una-función-indirectamente)
  * [Tipos de Funciones por Definición y Expresión](#tipos-de-Funciones-por-Definición-y-Expresión)
  * [Funciones Nombradas y Funciones Anónimas](#funciones-nombradas-y-funciones-anónimas)
  * [Funciones de flecha (arrow functions)ES6](#funciones-de-flecha-(arrow-functions)ES6)
2. [Parámetros y Argumentos](#parÁmetros-y-argumentos)
  * [Parámetros y Argumentos](#parámetros-y-argumentos)
  * [Parámetros por defecto](#parámetros-por-defecto)
  * [Parámetros REST](#parámetros-REST)
3. [Scope](#scope)

==========================================================================

FUNCIONES
---------
Las funciones son bloques de código reutilizables
`function nombreFunction(parametro1,parametro2,parametro3){  //código   }
```javascript
function sumar(a,b){
  console.log(a+b);
  return {
    sum:a+b,
    a:a+1
  }
}
let miSuma=sumar(5,6);
console.log(miSuma); // Object {sum: 11, a: 6}
```
Volver al [INDICE](#indice)

----------------------------------

Función dentro de un objeto
---------------------------
```javascript
let obj={
  nombre:'objeto',
  sumar(a,b){
    return a+b;
  }
};
let miOtraSuma=obj.sumar(2,3);
console.log(miOtraSuma);
```
Volver al [INDICE](#indice)

----------------------------------

Función dentro de otra función
------------------------------
```javascript
function restar(a){
  return function(b){
    return a-b;
  }
};
let miResta1=restar(5)(3);
console.log(miResta1);  //Devuelve 2 que significa resta 5-3
let miResta2=restar(5);
console.log(miResta2(3));  //Devuelve 2 que significa resta 5-3
```
Volver al [INDICE](#indice)

----------------------------------

Funciones autoinvocadas
-----------------------
```javascript
function multiplicar1(a,b){
  return a*b;
};
let miMultiplicacion1=multiplicar1(2,3);
console.log(miMultiplicacion1);
```
```javascript
let miMultiplicacion2=(function (a,b){
  return a*b;
})(5,2);
console.log(miMultiplicacion2);
```
Volver al [INDICE](#indice)

----------------------------------

Función constructora
--------------------
```javascript
let Pais = function(nombre, moneda){
  this.nombre=nombre;
  this.moneda=moneda;
};
```
```javascript
let peru = new pais ('Perú', 'sol');
console.log(peru);
```

Volver al [INDICE](#indice)

----------------------------------

Formas de llamar a una función indirectamente
---------------------------------------------
* `.apply()` ->
* `.call()` ->
```javascript
function add(a, b, c){
  return a + b + c ;
};
```
```javascript
let numeros = [2,3,4];
let myAdd1 = add(numeros);
console.log(myAdd1);
```
```javascript
let myAdd2= add.apply(undefined, numeros);
console.log(myAdd2);
```
```javascript
let myAdd3= add.call(undefined, 2,3,4);
console.log(myAdd3);
```
Volver al [INDICE](#indice)

----------------------------------

Tipos de Funciones por Definición y Expresión
---------------------------------------------
Funciones por definición y por Expresión
```javascript
let function functionPorDefinicion() { /* CUERPO FUNCIÓN */ };
functionPorDefinicion();   //si fuera aislada
```
```javascript
let functionPorExpresion = function(){ /* CUERPO FUNCIÓN */ };
functionPorExpresion();    //dentro de una variable
```
```javascript
//otro ejemplo
let c=console.log;
c('hola Mundo'); //imprime un 'hola Mundo'
```
Volver al [INDICE](#indice)

----------------------------------

Funciones Nombradas y Funciones Anónimas
----------------------------------------
Un `callback` es una función que es ejecutada por tra luego de un proceso
```javascript
el.addEventListener ('click', function()){  /* HACER ALGO */  };
```
Volver al [INDICE](#indice)

----------------------------------

Funciones de flecha (arrow functions)ES6
----------------------------------------
* Son funciones Anónimas `(param1, param2, param3) => valorDeRetorno`
```javascript
let suma=(a,b)=>a+b;
let miSuma=suma(1,2);  //Devuelve 3
```
```javascript
let suma=function{
  if (a>b){
    return a+b;
  }
};
```
```javascript
let cuadrado=(a)=>{
  if(typeof a=='number'){
    return a*a;
  }
};
let miCuadrado=cuadrado(5); //devuelve 25
//si refactorizamos --> simplificamos en código
let cuadrado=a=>(typeof a=='number')?a*a:undefined;
let miCuadrado=cuadrado(5); //devuelve 25
```
```javascript
let myObj=(a,b)=> ({a,b});
let myCustomObj=myObj('hola','mundo'); //{a:'hola',b:'mundo'}
```
Volver al [INDICE](#indice)

==================================

PARÁMETROS Y ARGUMENTOS
=======================
```javascript
functions sumar(a,b){     //a,b,c son parametros
  console.log(arguments); //dentro de la función se usan argumentos
};
sumar(2,3,5,6);
// Si hay más parámetros que argumentos, los argumentos faltantes son undefined.
// Si hay más argumentos que parámetros, no devuelve error. Obvia los elementos sobrantes.
```
```javascript
function sumarTodos(){
  return [...arguments].reduce((a,b)=>a+b);  
  //...arguments convierte los argumentos de entrada en un array con esos datos
};
console.log(sumarTodos(2,3,4,5,6,7));
```
```javascript
function sumar(a,b){
  return a+b;
}
let numeros=[2,3];
console.log(sumar(...numeros)); // ...numeros son expandidos
```
Volver al [INDICE](#indice)

----------------------------------

Parámetros por defecto
----------------------
Asigna un valor por defecto a un parámetro.
```javascript
function sumar(a,b=2){
  return a+b;
}
console.log(sumar(1)); //toma un valor b=2 por defecto y muestra 3
```
Volver al [INDICE](#indice)

----------------------------------

Parámetros REST
---------------
Permite meter un una función todos los argumentos que queramos
```javascript
function sumarTodos(m,n,...elements){
  return elements.reduce((a,b)=>a+b);
}
console.log(sumarTodos(1,2,3,69)); //suma todos los ...elements e ignora m,n
```
Volver al [INDICE](#indice)

==================================

SCOPE
=====
Scope es el ámbito o contexto donde se ejecuta una función y existen sus variable

Variables Globales
------------------
```javascript
let hola;
function holaMundo(){
  hola='hola mundo';
}
holaMundo();
console.log(hola);  // Reconoce la variable al ser GLOBAL
```
Variables Locales
-----------------
```javascript
function holaMundo(){
  let hola;
  hola='hola mundo';
}
holaMundo();
console.log(hola);  // NO Reconoce la variable al ser LOCAL
```
