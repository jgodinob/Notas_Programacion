TypeScript - Introducción
=========================
INDICE
------
1. [INSTALACIÓN](#instalación)
2. [TIPOS DE DATOS](#tipos_de_datos)
* 

----------------------------------

INSTALACIÓN DE TYPESCRIPT
=========================
* Hay que instalar [NodeJS](https://nodejs.org/es/).
* Se instalará [TypeScript](https://www.typescriptlang.org/), mediante la Terminal de [NodeJS](https://nodejs.org/es/) en la carpeta del proyecto. Para ello escribiremos: `npm install -g typescript`.
* Algunos paquetes que se recomiendan instalar en el caso de [ATOM](https://atom.io/) para trabajar con [TypeScript](https://www.typescriptlang.org/) son: ATOM-TYPESCRIPT, PLATFORMIO-IDE-TERMINAL y FILE-ICONS. Para ello dentro de [ATOM](https://atom.io/) se accederá a `B.M. > Atom > Preferences > Install` (Es necesario reiniciar ATOM para que las instalaciones tengan efecto)

Iniciar la Instalación
----------------------
Para iniciar la instalación de [TypeScript](https://www.typescriptlang.org/) en el proyecto dentro de [ATOM](https://atom.io/) podemos usar la terminal interna, existente si se instalarón todos los paquetes anteriores. De no ser así deben acceder desde la Terminal a la carpeta del proyecto.

Transpilar Archivos
------------------_
Para Transpilar el archivo usamos `tsc app`, buscará el archivo `app.ts` y lo convertirá en `app.js`.
Para usar el Modo Obsevador usaremos `tsc app.ts --watch` o `tsc app.ts --w` en el caso de querer observar un único archivo.

Inicializar el Proyecto
-----------------------
Para inicializar el proyecto usaremos `tsc -init`, esto creará un archivo `tsconfig.json`. 
Después escribirémos en la terminal `tsc *.ts -w`, esto convertirá todos los nuevo archivos generados `*.ts`dentro de la carpeta del proyecto.

Resumen de Comandos para uso de la Terminal son:
* `npm install -g typescript`, en caso de usar MAC se usará `sudo npm install -g typescript`.
* `tsc -v`-> devuelve la versión instalada de TypeScript
* `node -v`-> devuelve la versión instalada de NodeJs
* Para cancelar proyectos en la Temrinal usaremos `Ctrl + C`
Volver al [INDICE](#indice)

----------------------------------
TIPOS DE DATOS
==============
**TIPOS DE DATOS PRIMITIVOS**
* **STRING** -> `"María Pérez"`, `'Mazda'`, \``<h1>Hola Mundo</h1>`\`
* **NUMBER** -> `PI=3.14` , `salario =1500.0`, `entero=1`
* **BOOLEAN** -> `TRUE` o `FALSE`
* **NULL / UNDEFINED** -> `numero=null`y `persona=undefined` (tipos especiales de datos)

**TIPOS DE DATOS COMPUESTOS**
* **OBJETOS LITERALES** -> `var persona = { nombre: "Fernando" , edad: 30 }`
* **CLASES** -> `class Persona { nombre; edad; }`
* **FUNCIONES** -> `function saludar() { return "Hola!"; }`
* **¿CÓMO CREAR TIPOS NUEVOS?**
* **INTERFACES**
Volver al [INDICE](#indice)

----------------------------------
BOOLEAN
-------
```typescript
let esSuperman:boolean = true;  //Valor de la Variable definido
let esBatman:boolean; //Valor de la Variable NO definido
let esAcuaman=true; //No es recomendable
```
**Ejemplo:**
```typescript
if(esSuperman){
  console.log("Estamos salvados!!");
}else{
  console.log("Ooops! ooHHH");
}
```
**Ejemplo:**
```typescript
let esSuperman:boolean = true;
esSuperman = true ? console.log("Estamos salvados!!") : console.log("Ooops! ooHHH");
//se imprimiría "Estamos salvados!!"
//la siguiente función convierte esSuperman en false
function convertirClark(){ return false; }
esSuperman=convertirClark();
esSuperman = true ? console.log("Estamos salvados!!") : console.log("Ooops! ooHHH");
//se imprimiría "Ooops! ooHHH"
```
NUMBERS
-------
**Ejemplo:**
```typescript
let avengers:number = 5 ,
    villanos:number,
    otros = 2;
avengers > villanos ? console.log("Estamos salvados!!") : console.log("Estamos muertos");
```
Imprime "Estamos muertos", Ya que al no haberse declarado un valor para villanos, se declara como UNDEFINED
STRING
------
**Ejemplo:**
```typescript
let batman:string = "Batman",
    linternaVerde:string = "Linterna Verde",
    volcanNegro:string = `Volcán Negro`;
let concatenar:string = "Los héroes:" + batman +" "+ linternaVerde +" y "+ volcanNegro;
console.log(concatenar);
let concat:string = `Los héroes son: ${ batman }, ${linternaVerde} y ${volcanNegro};
console.log(concat);  
```
Ambas opciones escriben lo mismo, pero claramente la segunda opción es más rápida y práctica.
ANY
---
Usar este tipo de dato implica no definir un tipo de dato, es decir la variable puede cambiar su tipo de dato definido sin que de error. Si a una variable no se le declara el tipo de dato, automáticamente [TypeScript](https://www.typescriptlang.org/) lo define como [ANY](#any).
**Ejemplo:**
```typescript
let vengador, existe, derrotas;
vengador = "Dr. Strange";
console.log(vengador.charAt(0)); //imprime D
vengador = 150.555;
console.log(vengador.toFixed(2)); //imprime 150.56
vengador = true;
console.log(vengador);  //imprime true
```
ARRAYS
------
**Ejemplo:**
```typescript
let arreglo=[1,2,3,4,5,6,7];
arreglo.push("123"); 
```
Marcaría error ya que según su contenido [TypeScript](https://www.typescriptlang.org/) lo define como array de números.





