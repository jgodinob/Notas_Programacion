TypeScript - Funciones & Objetos
=========================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros](#parametros)

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
function nombreCompleto(capitalizado:boolean=false , nombre: string, ...losDemasParametros: string[]): string{
    let losDemasParametrosN: string[]=[],
        x: number;
//Se crea una nueva array con los argumentos capitalizados        
    for (x in losDemasParametros) {
        losDemasParametrosN.push(capitalizar(losDemasParametros[x]));
    }
//Se decide si capitalizar según la entrada
    if (capitalizado) {
        let Nombre=capitalizar(nombre);
        return Nombre + " " + losDemasParametrosN.join(" ");
    } else {
        return nombre + " " + losDemasParametros.join(" ");
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

===========================================================================================

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

TIPO PERSONALIZADO DE OBJETOS
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


