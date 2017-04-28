TypeScript - ES6 & TYPESCRIPT
=========================================================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros](#parametros)

----------------------------------

Repaso de ECMAScript6
=====================
Variables Let
-------------
Permite crear variables con valor sólo dentro de ese mismo `scope`. Un ejemplo sería el siguiente código en el que aunque dentro del condicional se redeclara la variable `nombre`, esta sigue manteniendo el valor `nombre="Tony"`al ser impresa por `console.log(nombre);` ya que su scope es el mismo. De haber usado para declararla `var`en cambio imprimiría `"Bruce"`.
```javascript
let nombre="Tony";
let nombre="Ricardo";
if (true){
  let nombre="Bruce";
}
console.log(nombre);
```
```javascript
let spiderman = "Peter Parker",
    venom = "Eddie Brock";
```
Constantes
----------
Las cosntantes son un tipo de dato que no puede mutar una vez ya definido. Para declarar constantes usaremos la palabra reservada `const` y para nombrar la variable sólo mayúsculas, como por ejemplo `OPCIONES`.
```typescript
const OPCIONES:string="Activo";
if(true){
  const OPCIONES:string="Desactivado";
}
for (const i of [1,2,3,4,5,6] ){
  console.log(i);
}
```
La constantes en realidad es redefinida al estar ambas en distinto `Scope`.
Todo cambia cuando las constantes se definen como objetos, ya que permite realizar cambios en las propiedades del objeto, aunque no modificar dichas propiedades.
```typescript
const OPCIONES={
  estado:true,
  audio:10,
  ultima:"main"
}
OPCIONES.estado=false;    //cambia el valor de la propiedad de la constante tipo objeto
OPCIONES.audio=1;         //cambia el valor de la propiedad de la constante tipo objeto
console.log(OPCIONES);
```
```javascript
const HEROE = "Spiderman";
```
Templates Literales
-------------------
Una posibilidad es la de concatenar variables y respetar líneas sin tener que abrir y cerrar `" "`. Mediante el uso de backtick (`` ``). Para ello introduciremos dentro saltos de línea normales, en el caso de querer respetarlos, o variables dentro de `${...}`, como en el siguiente ejemplo `${variable1}`. También existe la posibilidad de introducir de manera directa resultados de funciones o operaciones matemáticas.
```typescript
let nombre1:string = "Bruce";
let nombre2:string = 'Ricardo';
function getNombres():string {
  return `${nombre1} ${nombre2}`
}
let mensaje:string = `1. Esto es una línea normal
2. Hola ${nombre1}
3. Robin es: ${nombre2}
4. Los nombre son: ${ getNombres() }
5. {5 + 7 }
`;
```
Funciones de Flecha
-------------------
Las funciones de flecha pueden sustituir a las funciones normales. Lo bueno de este tipo de funciones es que estas se escriben de una forma más intuitiva y breve.
```typescript
function sumar(a,b){   return a+b;    }
let sumar)(a,b)=>a+b; //sustituiría a la función estandar
console.log( sumar(2,2) );
```
Para escribir funciones con más complejas en las que para definir su operatividad es necesario usar varias líneas usaremos `{...}`. Un ejemplo de ello es la siguiente función.
```typescript
let sumar = (a,b)=>{
  a=a;
  b=b;
  return a+b;
}
console.log( sumar(2,2) );
```
```typescript
function darOrden_Hulk( orden ) {
  return `Hulk ${orden}`;
}
let darOrden_Hulk = ( orden ) => `Hulk ${orden}`;  //sustituiría a la función estandar
console.log( darOrden_hulk("smash!!!") );
```
Las funciones de flecha no cambian el objeto `this`.
```typescript
let capitan_america = {
  nombre:"Hulk",
  darOrden_Hulk: function () {
      setTimeout(() => {
          console.log(this.nombre + "smash!!!")
      }, 1000);
  }
};
capitan_america.darOrden_Hulk();
```
Ciclo For of
------------
El bucle `for in` nos permite recorrer un array de forma directa, sin tener que generar un bucle `for` simple que la recorra. En cambio, el bucle o ciclo `for of` nos permite recorrer array renombrando sus elementos, para ello es necesario declarar la variable que lo recorrerá mediante el uso de la palabra reservada `let`.
```typescript
let thor    = {nombre:"Thor",    arma:"Mjolnir" }
let ironman = {nombre:"Ironman", arma:"Armorsuit" }
let capitan = {nombre:"capitan", arma:"Escudo" }
let avengers = [ thor, ironman, capitan ];
for (let i in avengers ) { 
/* crearía un ciclo que recoge cada objeto del array */ 
  console.log(avengers[i]);
}
//avenger será el elemento del array , mientras que avengers el array
for (let avenger of avengers) { 
/* crearía un ciclo que recoge cada objeto del array */ 
  console.log(avenger.nombre, avenger.arma);
}
```
A continuación se ve un ejemplo en `ES5` para despues verlo en `ES6`.
```javascript
//ES5
for(var i=0; i<= versiones.length - 1; i++){
  var spider = versiones[i];
  console.log(spider);
}
```
Mismo ejemplo anterior en `ES6`. 
```javascript
//ES6
for ( let version of versiones ){
  console.log(version);
}
```
DESTRUCTURACIÓN
===============
La destructuración permite extraer valores y asignarlos directamente a variables, es decir permite renombrar elementos de un objeto o array, sin tener que generar una función que los renombre.
Destructuración de Objetos
--------------------------
La destructuración de objetos permite extraer las propiedades directamente de un objeto, es decir, permite renombrar elementos de un objeto para su uso sin tener que programar una función o código que lo renombre. Así evitaríamos generar un bucle for que recorra la objeto y la renombre como se haría en `ES5`.
```typescript
let avengers={
  nick: "Samuel Jackson",
  ironman: "Robert Downey Jr",
  vision: "Paul Bettany"
};
let {nick, ironman:warmachine, vision, thor="Paulino Callejas" } = avengers;
console.log(nick);
console.log(warmachine);
console.log(thor);
```
```javascript
var villanos = {
  venom: "Eddie Brock",
  carnage: "Cletus Kasady",
  sandman: "William Baker"
};
let { venom , carnage , sandman } = villanos;
```
Destructuración de Arrays
--------------------------
Permite renombrar elementos de un array para su uso sin tener que programar una función o código que lo renombre. Así evitaríamos generar un bucle for que recorra la array y la renombre como se haría en `ES5`.
```typescript
let avengers = [ "Samuel Jackson","Robert Downey Jr", "Paul Bettany" ];
let [ , avenger2] = avengers;
console.log(avenger2);
```
En el caso anterior se ve como se puede renombrar un elemento del array sin tener que renombrarlos todos, así se evita en este caso renombrar el elemento `[1]` dejando el hueco en blanco, o el elemento `[3]` sin ni siquiera tenerlo en cuenta.
El siguiente código permite destructurar el array simplemente usando javascript o `ES6`.
```javascript
let versiones = ["Spider-Man 2099","Spider-Girl","Ultimate Spider-Man"];
let [spiderman2099 , spidergirl , ultimate] = versiones;
```
PROGRAMACIÓN ORIENTADA A OBJETOS
================================
Clases -> Conceptos que se pueden abstraer
Métodos -> Son funciones que pueden realizar las clases
Propiedades -> Describen las clases
Herencia -> Es la manera de que los hijos reciban propiedades del padre.

Clases
------
Las clases por si sólos ya son objetos.
```typescript
class Avenger{
  constructor (nombre, poder){
    this.nombre=nombre;
    this.poder=poder;
  }
}
class AvengerVolador extends Avenger{
  constructor (nombre, poder){
    super ( nombre , poder );
    this.vuela = true;
  }
}
let hulk = new Avenger ("Hulk", "SuperFuerza");
console.log(hulk);
let ironman = new AvengerVolador;
console.log(ironman);
let falcon = new AvengerVolador("Falcon","Volar!");
console.log(falcon);
```

