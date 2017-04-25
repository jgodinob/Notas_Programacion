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
```typescript
function capitalizar (palabra:string):string{
  return palabra.charAt(0).toUpperCase() + palabra.substr(1).toLowerCase();
}
function nombreCompleto(capitalizado: boolean = false, nombre: string, apellido?: string): string { 
    if (capitalizado) {
        return nombre + ((apellido===undefined)?"":(" "+apellido));
    } else {
        let Nombre=capitalizar(nombre);
        return Nombre + ((apellido===undefined)?"":(" "+(capitalizar(apellido))));
    }
}
```
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
