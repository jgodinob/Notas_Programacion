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

Parámetros Obligatorios
-----------------------
```typescript
function nombreCompleto( nombre:string, apellido:string ) :string {
  return nombre + ' ' + apellido;
}
let nombre=nombreCompleto("clark", "Kent");
console.log(nombre);
```

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
**Ejercicio: ** *Parámetros Rest*
```typescript
function unirHeroes(...personas:string[]):string{
  return personas.join(, ");
}
```

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

**Ejercicio: ** *Tipo Función*
```typescript
function noHacerNada(numero:number, texto:string, booleano:boolean, arreglo:any[]){
}
```

**Ejercicio: ** *Crear el tipo de función que acepte no hacer nada*
```typescript
let noHacerNadaTampoco:(n:number, t:string, b:boolean, a:any[])=>void;
noHaceNadaTampoco=noHacenada;
```

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
```typescrypt
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
```typescrypt
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
