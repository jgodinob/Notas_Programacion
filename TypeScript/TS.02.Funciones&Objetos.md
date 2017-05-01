TypeScript - Funciones & Objetos
================================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros Obligatorios](#parámetros-obligatorios)
* [Parámetros Opcionales](#parámetros-opcionales)
* [Parámetros Por Defecto](#parámetros-por-defecto)
* [Parámetros Rest](#parámetros-rest)
* [Tipo Función](#tipo-función)
2. [OBJETOS](#objetos)
* [Tipo Personalizado de Objetos](#tipo-personalizado-de-objetos)
3. [EJERCICIOS EXTRA](#ejercicios-extra)
4. [REPASO ECMASCRIPT6](#repaso-de-ecmascript6)
* [Variables Let](#variables-let)
* [Constantes](#constantes)
* [Templates Literales](#templates-literales)
* [Funciones Flecha](#funciones-flecha)
* [Ciclo For Of](#ciclo-for-of)
5. [DESTRCUTURACIÓN](#destructuraciÓn)
* [Destructuración de Arrays](#destructuración-de-arrays)
6. [PROGRAMACIÓN ORIENTADA A OBJETOS](#programaciÓn-orientada-a-objetos)
* [Clases](#clases)
7. [CLASES EN TYPESCRIPT](#clases-en-typescript)
8. [GET Y SETS](#get-y-sets)
9. [MÉTODOS Y PROPIEDADES ESTÁTICAS](#mÉtodos-y-propiedades-estÁticas)
10. [CLASES ABSTRACTAS](#clases-abstractas)
11. [CONSTRUCTORES PRIVADOS](#constructores-privados)
12. [INTERFACES](#interfaces)
* [Interfaces en los Clases](#interfaces-en-las-clases)
* [Interfaces en los Métodos](#interfaces-en-los-métodos)
----------------------------------

FUNCIONES
=========
Son iguales que las funciones de JavaScript, sólo se diferencian en que se pueden definir los tipos de dato de entrada y salida.
```typescript
let heroe:string="Flash";
function imprime_heroe():string{
  return heroe;
}
console.log(imprime_heroe());
```
```typescript
let activar_batisenal=function(){
  return "Batiseñal activada.";
}
console.log(activar_batisenal());
```

Volver al [INDICE](#indice)

Parámetros Obligatorios
-----------------------
```typescript
function nombreCompleto( nombre:string, apellido:string ) :string {
  return nombre + ' ' + apellido;
}
let nombre=nombreCompleto("clark", "Kent");
console.log(nombre);
```

Volver al [INDICE](#indice)

Parámetros Opcionales
---------------------
Para definir parámetros opcionales en [TypeScript](https://www.typescriptlang.org/) hay que colocar justo detrás del nombre del parámetro un `?` es decir `apellido?:string`.
```typescript
function nombreCompelto ( nombre:stirng, apellido?:string):string { 
  if ( apellido ) {
    return nombre + ' ' + apellido;
  }else{
    return nombre;  
}
let nombre1=nombreCompleto("Barry", "Allen");
console.log(nombre);
let nombre2=nombreCompleto("cLark");
console.log(nombre);
```

Volver al [INDICE](#indice)

Parámetros Por Defecto
----------------------
Los Parámetros por Defecto es una característica nueva de ECMAScript 6, pero [TypeScript](https://www.typescriptlang.org/) permite usarla aunque los navegadores dónde se use no admita esa característica.

**Ejercicio:** *Crear una función que permita decidir si se desea capitalizar un nombre, y que admita `nombre` solo o `nombre + apellido`*
```typescript
function capitalizar (palabra:string):string{
  return palabra.charAt(0).toUpperCase() + palabra.substr(1).toLowerCase();
}
function nombreCompleto(capitalizado: boolean = false, nombre: string, apellido?: string): string { 
    if (capitalizado) {
        let Nombre=capitalizar(nombre);
        return Nombre + ((apellido===undefined)?"":(" "+(capitalizar(apellido))));
    } else {
        return nombre + ((apellido===undefined)?"":(" "+apellido));
    }
}
```
**Ejercicio:** *Parámetros por defecto*
```typescript
function llamarBatman(llamar:boolean=true):void{
  if(llamar){
    console.log("Batiseñal activada");
  }
}
llamarBatman();
```

Volver al [INDICE](#indice)

Parámetros Rest
---------------
Permite que una función tenga un número de argumentos indefinido, y estos puedan ser tratados como un array.
**Ejercicio:** *Crear una función que permita unir nombres de distinto número de palabras.*
```typescript
function nombreCompleto( nombre:string, ...losDemasParametros:string[] ) :string{
  return nombre + " " + losDemasParametros.join(" ");
}
let superman = nombreCompleto ("Clark", "Joseph", "Kent"),
    ironman = nombreCompleto("Anthony", "Edward", "Tony", "Stark");
console.log(superman);
console.log(ironman);
```
**Ejercicio:** *Crear una función que permita decidir si se desea capitalizar un nombre con varias palabras*
```typescript
// esta función capitaliza las palabras de entrada
function capitalizar (palabra:string):string{
  return palabra.charAt(0).toUpperCase() + palabra.substr(1).toLowerCase();
}
// nombreCompleto permite decidir si se capitalizará el nombre indiferentemente del número de plabras que contenga
function nombreCompleto(capitalizado:boolean=false , ...losDemasParametros: string[]): string{
//Se decide si capitalizar según la entrada
    if (capitalizado) {
        //Se crea una nueva array con los argumentos capitalizados        
        for (let x in losDemasParametros) {
            losDemasParametros[x] = capitalizar(losDemasParametros[x]);        
        }
        return losDemasParametros.join(" ");
    } else {
        return losDemasParametros.join(" ");
    }
}
let superman = nombreCompleto (true,"clark", "joseph", "kent"),
    ironman = nombreCompleto(false,"anthony", "edward", "tony", "stark");
console.log(superman);
console.log(ironman);
```
**Ejercicio:** *Parámetros Rest*
```typescript
function unirHeroes(...personas:string[]):string{
  return personas.join(, ");
}
```

Volver al [INDICE](#indice)

Tipo Función
------------
[TypeScript](https://www.typescriptlang.org/) permite crear datos tipo función.
Dentro de este primer ejemplo se acota las características de la función a dos parámetros de entrada tipo `number` y uno de salida `number`. Así, se podrían usar para nombrar los parámetros valores distintos, en lugar de usar `a` y `b`, usar en este caso `c` y `d`.
```typescript
function sumar(a:number,b:number):number{
  return a+b;
}
let miFuncion:(c:number,d:number) => number;
```
Lo mismo ocurriría en el siguiente ejemplo, ya que la función necesita de un parámetro de entrada tipo `string` y otro de salida tipo `string`.
```typescript
function saludar(nombre:string):string{
  return "I`m " + nombre;
}
let miFuncion:(x:string) => string;
```
En el siguiente ejemplo no tendría parámetro de entrada y encambio regresaría un parámetro tip `void`a la salida de la función.
```typescript
function salvarMundo():void{
  return console.log("El mundo esta salvado!");
}
let miFuncion:() => void;
```

**Ejercicio:** *Funciones básicas*
```typescript
function sumar(a:number,b:number):number{
  return a+b;
}
```
```typescript
let contar=function(heroes:string[]){
  return heroes.length;
}
let superHeroes:string[]=["Flash","Aroow","Supermna","Linter Verde"];
contar(SuperHeroes);
```

**Ejercicio:** *Tipo Función*
```typescript
function noHacerNada(numero:number, texto:string, booleano:boolean, arreglo:any[]){
}
```

**Ejercicio:** *Crear el tipo de función que acepte no hacer nada*
```typescript
let noHacerNadaTampoco:(n:number, t:string, b:boolean, a:any[])=>void;
noHaceNadaTampoco=noHacenada;
```

Volver al [INDICE](#indice)

----------------------------------

OBJETOS
=======
Los Objetos en [TypeScript](https://www.typescriptlang.org/) son tan importantes como en JavaScript.
```typescript
let flash={
  nombre:"Barry Allen",
  edad:24,
  poderes:["Puede correr muy rápido", "Viajar por el tiempo"]
}
flash={
  nombre:"Clark Kent",
  edad:500,
  poderes:["Puede volar"]
};
```
Para crear objetos con tipos específicos es necesario indicar el tipo justo despues de nombrarlo de la siguiente manera `{nombre:string, edad:number, poderes:string[]}`.
```typescript
let flash: {nombre:string, edad:number, poderes:string[]} = {
  nombre:"Barry Allen",
  edad:24,
  poderes:["Puede correr muy rápido", "Viajar por el tiempo"]
};
```
**¿Cómo métodos dentro de un objeto?** Para añadir métodos dentro de los objetos hay que definirlos previamente como tipo de la siguiente manera `getNombre:()=>string`.
```typescript
let flash: {nombre:string, edad:number, poderes:string[], getNombre:()=>string} = {
  nombre:"Barry Allen",
  edad:24,
  poderes:["Puede correr muy rápido", "Viajar por el tiempo"],
  getNombre(){
    return this.nombre;
  }
  flash.getNombre();
};
```

Volver al [INDICE](#indice)

Tipo Personalizado de Objetos
=============================
Para poder definir la definición de un tipo hay que seguir las siguiente estrcutura.
```typescript
type Heroe = { 
  nombre:string,
  edad:number,
  poderes:any[],
  getNombre:()=>string
};
let flash: Heroe = {
  nombre:"Barry Allen",
  edad:24,
  poderes:["Puede correr muy rápido", "Viajar por el tiempo"],
  getNombre(){
    return this.nombre;
  }
};
```
**Ejercicio:** *cree un tipo para vehículos con un parámetro opcional*
```typescript
type Auto={
  carroceria:string,
  modelo:string,
  antibalas:boolean,
  pasajeros:number,
  disparar?:()=>void
}
let batimovil:Auto = {
    carroceria: "Negra",
    modelo: "6x6",
    antibalas: true,
    pasajeros:4
};

let bumblebee:Auto = {
    carroceria: "Amarillo con negro",
    modelo: "4x2",
    antibalas: true,
    pasajeros:4,
    disparar(){ // El metodo disparar es opcional
      console.log("Disparando");
    }
};
```
**¿Cómo permitir distintos tipos de datos en una variable?** Para unir distintos tipos de datos habría que separar las distintas posibilidades de tipo de dato con el caracter `| `.
```typescript
type Heroe = { 
  nombre:string,
  edad:number,
};
let loquesea: string | number | Heroe ="Fernando";
loquesea=10;
loquesea={
  nombre="Flash",
  edad:56
};
```
**¿Cómo saber que tipo de dato es una variable?** Para ello utilizaremos la instrucción de JavaScript `typeof`.
```typescript
let cosa:any=123;
console.log(typeof cosa); //imprimirá number
if(typeof cosa ==="number" ){
  console.log("cosa, es un número");
}else{
  console.log("este código, indica que no es un número");
}
```

**Ejercicio:** *Villanos debe de ser un arreglo de objetos personalizados*
```typescript
type Villano={
  nombre:string,
  edad:number | undefined,
  mutante:boolean
};
let villanos:Villano[] = [{
        nombre:"Lex Luthor",
        edad: 54,
        mutante:false
      },{
        nombre: "Erik Magnus Lehnsherr",
        edad: 49,
        mutante: true
      },{
        nombre: "James Logan",
        edad: undefined,
        mutante: true
      }];
```

**Ejercicio:** *Cree dos tipos, uno para charles y otro para apocalipsis. Mystique, debe poder ser cualquiera de esos dos mutantes (charles o apocalipsis)*
```typescript
// Multiples tipos
type Charles={
  poder:string,
  estatura:number
};
type Apocalipsis={
  lider:boolean,
  miembros:string[]
};

let charles:Charles = {
  poder:"psiquico",
  estatura: 1.78
};

let apocalipsis:Apocalipsis= {
  lider:true,
  miembros: ["Magneto","Tormenta","Psylocke","Angel"]
}
// Mystique, debe poder ser cualquiera de esos dos mutantes (charles o apocalipsis)
let mystique :Charles | Apocalipsis;
mystique = charles;
mystique = apocalipsis;
```

Volver al [INDICE](#indice)

----------------------------------

EJERCICIOS EXTRA
================
**Ejercicio:** *Ahora en TypeScript vamos a crear la clase Rombo, la cual debe tener dos propiedades:
DiagonalVertical y DiagonalHorizontal.
Le añadiremos un constructor al que le pasaremos los valores anteriores cuando instanciemos el objeto.
Y también debe de tener un método que calcule el area, que será la multiplicación de DiagonalVertical * DiagonalHorizontal.
Este método devolverá un número.*
```typescript
class Rombo {
   diagonalVertical:number;
   diagonalHorizontal:number;
   calcularArea():number{
     return this.diagonalHorizontal*this.diagonalVertical;
   };
   constructor (diagonalVertical:number, diagonalHorizontal:number){
     this.diagonalVertical=diagonalVertical;
     this.diagonalHorizontal=diagonalHorizontal;
   }
}
```

**Ejercicio:** *Interface que muestra una cajita de texto con un boton, los escenarios son:
* El campo de texto te debe permitir cualquier tipo de texto, luego, al clickear debe mostrar un alert con el texto ingresado en ese campo de texto.
* Al Ingresar un texto en el campo de texto, al presionar enter debe mostrar un alert con el texto ingresado en ese campo. *

*index.html*
```html
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Alert message!</title>
    </head>
    <body>
        <h1>Ingresa tu texto aqui:</h1>
        <input type="text" name="txtMessage" id="txtMessage"/>
        <input type="submit" value="Get Alert!" id="btnGetAlert" />
        <script src="./index.js" type="text/javascript"></script>
    </body>
</html> 
```
*app.ts*
```typescript
window.onload = ()=>{
    //parsing
    var txtMessage:HTMLInputElement = <HTMLInputElement>document.getElementById("txtMessage");
    var btnGetAlert:HTMLInputElement = <HTMLInputElement>document.getElementById("btnGetAlert");
    //binding events
    btnGetAlert.addEventListener("click", (evt)=> {
        var myMessage:string = txtMessage.value;
        alert(myMessage);
        evt.preventDefault();
    });
    document.addEventListener("keydown", (evt)=> {
        var myMessage:string = txtMessage.value;
        var enterKeyCode:number = evt.keyCode; 
        if(enterKeyCode == 13){
            alert(myMessage);
        }
    });
};
```

Volver al [INDICE](#indice)

----------------------------------

REPASO DE ECMAScript6
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

Volver al [INDICE](#indice)

----------------------------------

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
=========================
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

Volver al [INDICE](#indice)

----------------------------------

PROGRAMACIÓN ORIENTADA A OBJETOS
================================
Clases -> Conceptos que se pueden abstraer
Métodos -> Son funciones que pueden realizar las clases
Propiedades -> Describen las clases
Herencia -> Es la manera de que los hijos reciban propiedades del padre.

Clases
======
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

Volver al [INDICE](#indice)

----------------------------------

CLASES EN TYPESCRIPT
====================
Para crear una nueva clase en [TypeScript](https://www.typescriptlang.org/) primero es necesario definir sus propiedades, con sus tipos y valores por defecto.
```typescript
class Avenger {
//Define las propiedades que contendrá la clase, con su tipo y valor por defecto si lo tuviera
  nombre:string = "Sin nombre"; //Define un valor por defecto "sin nombre"
  equipo:string;   //Define su clase
  nombreReal:string;
  puedePelear:boolean;
  peleasGanadas: number;
}
let antman:Avenger = new Avenger();
console.log(antman);
```
Al introducir en la consola el anterior códgio transpilado de [TypeScript](https://www.typescriptlang.org/) a `ES5`, tendríamos el siguiente resultado: 
```javascript
Avenger
nombre:"Sin nombre"
__proto__:Object` 
```
Lo que implica que sólo tendría en cuenta las variables con un valor asignado.
Para poder mandar parámetros con valores que reemplacen los existentes al generar una nueva variable que use esa clase necesitamos definir un contructor dentro de la clase. Así un constructor es una simple función que es ejecutada cuando se crea un objeto, para poderlo definir necesitamos del uso de la palabra reservada `constructor`. 
```typescript
class Avenger {
//Define las propiedades que contendrá la clase, con su tipo y valor por defecto si lo tuviera
  nombre:string = "Sin nombre";
  equipo:string = undefined;
  nombreReal:string  = undefined;
  puedePelear:boolean = false;
  peleasGanadas:number = 0;
//el constructor permitirá modificar las propiedades asignándolas  
  constructor( const_nombre:string , const_equipo:string , const_nombreReal:string ){
    console.log("se ejecutó el constructor");
    this.nombre = const_nombre;
    this.equipo = const_equipo;
    this.nombreReal = const_nombreReal;
  }
}
//para usar la clase definimos una variable con ese tipo nuevo generado
let antman:Avenger = new Avenger( "Antman" , "cap" , "Scott Lang" );
//Estos valores definidos por el constructor sustituiran los valores por defecto de la clase.
console.log(antman);
```
El siguiente paso lógico en una clase es definirlas con propiedades de tipo *públicas*, *privadas* o *protegidas*. este tipo de definición controla el lugar dónde podrán ser utilizadas dichas propiedades. Hay que tener en cuenta que en javascript todas las propiedades y métodos son públicos pero que con [TypeScript](https://www.typescriptlang.org/) en cambio si se permite dicha definición.
* Propiedad pública -> `public` puede ser cambiada desde cualquier parte del programa
* Propiedad protegida -> `protected` puede ser cambiada sólo dentro de la clase original o sus herencias
* Propiedad privada -> `private` sólo pueden ser cambiado dentro de la propia clase
```typescript
class Avenger {
  public nombre:string = "Sin nombre";
  protected equipo:string = undefined;
  private nombreReal:string  = undefined;
  private puedePelear:boolean = false;
  private peleasGanadas:number = 0;
  constructor( const_nombre:string , const_equipo:string , const_nombreReal:string ){
    this.nombre = const_nombre;
    this.equipo = const_equipo;         
    //aunque es protected, permite ser cambiada al estar dentro de la propia clase
    this.nombreReal = const_nombreReal; 
    //aunque es private, permite ser cambiada al estar dentro de la propia clase
  }
  public bio():void{
    let mensaje:string = `${this.nombre} ${this.nombreReal} ${this.equipo}`;
    console.log(mensaje);
  }
  public cambiarEquipoPublico(nuevoEquipo:string):boolean{
    //es necesario añadir `this.` para que reconozca la función privada `cambiarEquipo`
    return this.cambiarEquipo(nuevoEquipo);
  }
  private cambiarEquipo(nuevoEquipo:string):boolean{
    if( nuevoEquipo === this.equipo ){
      return false;
    }else{
      return true;
    }
  }
}
let antman:Avenger = new Avenger( "Antman" , "cap" , "Scott Lang" );
antman.nombre = "Nik Fury"; //al ser una propiedad pública typescript permite cambiarla
antman.equipo = "Ironman";  //al ser una propiedad protegida typescript devuelve error
antman.bio();   //imprimiría "Antman Scott Lang cap"
console.log(antman.cambiarEquipoPublico("cap")); //regresaría un `false`
```
* Método público -> `public` puede ser cambiada desde cualquier parte del programa
* Método protegido -> `protected` puede ser cambiada sólo dentro de la clase original o sus herencias
* Método privado -> `private` sólo pueden ser cambiado dentro de la propia clase
```typescript
class Avenger {
  constructor (public nombre:string,public nombreReal:string){
    console.log("Constructor Avenger llamado");
  }
  protected getNombre():string{      
    console.log("get nombre xmen(protegido)");
    return this.nombre;
  }
}
let ciclope:Avenger = new Avenger("Cíclope", "Scott");
console.log(ciclope);
class Xmen extends Avenger{
  cosntructor( nombreN:string, nombreRealN:string){
    console.log("Constructor Xmen llamado");
    super( nombreN, nombreRealN);
  }
  public getNombreN():string{
    console.log("get nombre xmen(publico)");
    return super.getNombre(); //hace referencia a getNombre() del padre "class Avenger"
  }
}
let ciclopeN:Xmen = new Xmen("Cíclope", "Scott");
console.log(ciclopeN);
console.log( ciclopeN.getNombre() );    //devuelve error al encontrarse protegida, para usarla habría que llamar a getNombreN()
console.log( ciclopeN.getNombreN() );   //esta es publica
```

Volver al [INDICE](#indice)

----------------------------------

GET Y SETS
==========
En [TypeScript](https://www.typescriptlang.org/) se pueden definir métodos `get` y `set` para interceptar el acceso a atributos de una clase, se puede decir que los `gets` y `sets` son unas funciones especiales para el control de acceso a la información.
Todos los get y set deberían ser públicos. Get debe refresar algo,por lo que voidno esta permitido.
```typescript
class Avenger{
  constructor (private _nombre?:string){
    this._nombre=nombre;
  }
  //get obliga a que la función tenga un retorno, son válidos todos menos void (vacío)
  get nombre():string{
  console.log( "Pasó por el get nombre()" );
    if(this._nombre){
      return this._nombre;
    }else{
      return "No existe el nombre";    
    }
  }
}
let ciclope:Avenger = new Avenger("Cíclope");
console.log(ciclope.nombre);
let ironman:Avenger = new Avenger();
console.log(ironman.nombre);
```
Los `set` por defecto no devuelven nada, simplemente agarran un parámetro y se lo establecen a una propiedad.
```typescript
class Avenger{
  constructor (private _nombre?:string){
    this._nombre=nombre;
  }
  //get obliga a que la función tenga un retorno, son válidos todos menos void (vacío)
  set nombre( nombre:string ){ 
    console.log("Se llamó el set del nombre");
    if ( nombre.length <= 3 ){
      console.error("El nombre debe tener al menos 3 caraceres");
      throw new Error ("Auxilio!!! Esto no debe pasar...");
      return;
    }
    this._nombre = nombre;
  }
}
let ciclope:Avenger = new Avenger("Cíclope");
console.log(ciclope.nombre);
let ironman:Avenger = new Avenger();
console.log(ironman.nombre);
```
MÉTODOS Y PROPIEDADES ESTÁTICAS
===============================
Las propiedadesy métodos estáticos se pueden llamar sin declarar la clase.
```typescritp
class Xmen {
  public nombre:string="wolverine";
  constructor() {   }
  static crearXmen(){
    console.log("Se creó usando un método estático");
    return new Xmen();
  }
}
let wolverine2 = Xmen.crearXmen();
console.log( wolverine2 );
```
CLASES ABSTRACTAS
=================
Las **clases abstractas** no permiten ser instanciadas, es decir no posibilitan el crear objetos definidos por ellas directamente. Su utilida expresa es la de servir para generar otras clases que las contengan que si posibilitan su instanciamiento. Básicamente actúan de moldes para clases.
```typescript
abstract class Mutantes {
  constructor  ( Public nombre:string, public nombreReal:string ){
  }
}
let wolverine = new Mutantes ("Wolverine", "Logam");
```
Al intentar crear *wolverine* da error [TypeScript](https://www.typescriptlang.org/), para poder crear una instancia que contenga a las propiedades de *Mutantes* necesitaría hacer lo siguiente.
```typescript
abstract class Mutantes {
  constructor  ( Public nombre:string, public nombreReal:string ){
  }
}
class Xmen extends Mutantes{ }
let wolverine = new Smen ("Wolverine", "Logam");
```
CONSTRUCTORES PRIVADOS 
======================
Los **constructores privado** solo pueden ser llamados desde dentro de la misma clase, y nunca desde fuera de ella. 
```typescript
class Apocalipsis {
  static instancia:Apocalipsis;
  private constructor (public nombre:string{   }
}
let apocalipsisFalso = new Apocalipsis ("Soy Apocalipsisis!!! (Falso)");
```
*apocalipsisFalso* lanza un error al estar instanciado fuera de la clase, para poderlo declarar sería necesario realizarlo a traves de una función interna de la clase que si podría trabajar con el constructor. Veáse el siguiente ejemplo.
```typescript
class Apocalipsis {
  static instancia:Apocalipsis;
  private constructor (public nombre:string{
  }
  static llamarApocalipsis(){
    if (!Apocalipsis.instancia) {
      Apocalipsis.intsancia = new Apocalipsis (Soy Apocalipsis ... el ÚNICO!");
    }
    return Apocalipsis.instancia ;
  }
}
let real = Apocalipsisis.llamarApocalipsis();

```

Volver al [INDICE](#indice)

----------------------------------

INTERFACES
==========
Las interfaces son un contrato (para el código). Se trata de requerir un nombre y parámetros a objetos, e incluso componer objetos nombrados ya existentes en otros nuevos. Al declarar una nueva clase respecto a una interfaz, ésta actúa como validadora de la clase de que todo se hace conforme a lo esperado (según la interfaz). 
*Importante:* Las interfaces sirven para se declaran usando *CamelCase*.
*Importante:* Las interfaces no existen en javascript directamente.
```typescript
interface Xmen {
  nombre: string,
  poder?: string
  regenerar?(nombreReal: string): void;
}
let wolverine: Xmen = {
  nombre: "Wolverine",
  poder: "Regeneración",
  regenerar(x: string) {
    console.log("Se ha regenerado " + x);
  }
}
let ciclope: Xmen = {
  nombre: "Wolverine",
}
function enviarMision ( xmen : Xmen ) {
  console.log("enviando a: " + xmen.nombre);
  xmen.regenerar("Logan");
}
enviarMision(wolverine);
```
Usando `poder?: string` dentro de la definición de `interface Xmen {}` indicamos queel parámetro será opcional mediante el uso de `?`. Lo mismo ocurre con la función `regenerar?(nombreReal: string): void;`, la cual además de ser opcional necesitará de un parámetro tipo `string`de entrada y devolverá `void` o vacío.

Interfaces en las Clases
========================
Las clases pueden usar interfaces para ser definidas mediante la palabra reservada `implements`, como es el ejemplo de `class Mutante implements Xmen {}`, en la cual la nueva clase `Mutante` es implementada a través del `ìnterface Xmen{}` 
```typescript
interface Xmen {
  nombre: string,
  poder?: string
  regenerar?(nombreReal: string): void;
}
class Mutante implements Xmen {
  nombre:string;
  poder:string;
  esBueno:boolean;
  regenerar?(nombreReal: string): void;
}
let wolverine = new Mutante();
```
Interfaces en los Métodos
=========================
Los métodos pueden usar interfaces para ser definidas, indicando los parámetros de entrada y su tipología, además del tipo de salida que obtendrá. Para definirla se usa la siguiente sintaxis: `interface DosNumerosFunc{(num1:number, num2:number):number}`.
```typescript
interface DosNumerosFunc {
  (num1:number, num2:number) : number
}
let sumar:DosNumerosFunc;
sumar=function (a:number,b:number){
  return a+b;
}
let restar:DosNumerosFunc;
restar = function (numero1:number, numero2:number){
  return numero1 - numero2;
}
```

Volver al [INDICE](#indice)

----------------------------------

