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
Los Arryas en [TypeScript](https://www.typescriptlang.org/) son iguales que los arrays en JavaScript a diferencia de que podemos además definir el tipo de dato. 
**Ejemplo:**
```typescript
let arreglo:number[]=[1,2,3,4,5,6,7];
//definiría un array con Numbers.
let villanos:string[] = ["Omega Rojo","Dormamu","Duende Verde"];
//definiría un array con Strings
console.log(villanos[0].charAt(3));  //devolvería "g"
```
Si usáramos `arreglo.push("123");` marcaría error ya que según su contenido [TypeScript](https://www.typescriptlang.org/) lo define como array de números.
TUPLES
------
Cuando un array es finito, o en su defecto se conoce el número de datos que contendrá, se pueden definir los mismos.
**Ejemplo:**
```typescript
let heroe:[string,number]=["Dr. Strange", 100];
```
si tratasemos de incluir datos de tipo distinto a los que se han definido `heroe[0]=123;` y `heroe[1]="Iroman;` lanza un error [TypeScript](https://www.typescriptlang.org/). Lo mismo pasaría si no se define uno de los datos, o si se define y no se introduce.
En cambio si permite añadir elementos al array sin definirlos usando por ejemplo `heroe.push(true);`.
ENUM
----
Permite añadir un valor numerico a cada valor, si no se le añade lo incrementará en 1 unidad con respecto al anterior. Si el primer término no tiene valor imprimirá `0`.
```typescript
enum Volumen{  min=1,  medio,  max=10  }
let audioMin:numer = Volumen.min;
console.log(audioMin);  //Imprime 1
let audioMedio:numer = Volumen.medio;
console.log(audioMedio);  //Imprime 2
let audioMax:numer = Volumen.max;
console.log(audioMax);  //Imprime 10
```
Si usasemos `console.log(Volumen[5]);` imprimiría `medio`.
VOID
----
El tipo `Void`es muy utilizado en JavaCShare, y es el contrario a `any`, es decir, devuelve vacío.
```typescript
function llamar_batman():void{
  console.log("mostrar la batiseñal");
}
let mensaje=llamar_batman();
```
Si colocase dentro de la función `retur 1;`me devolvería un error [TypeScript](https://www.typescriptlang.org/), ya que se definió el resultado de la función como vacío.
NEVER
-----
El tipo de dato `Never`representa un valor que nunca puede suceder, es decir, implicaría que si se llega a ese punto se debe salir de la función.
```typescript
function error(mensaje):never{
  throw ner Error(mensaje);
}
error("Error crítico... línea 11 alcanzada...");
```
Esta función lanzaría un mensaje de error con el texto definido, se usa para marcar situaciones que no deben ocurrir.
**ASSERSIONES DE TIPO**
-----------------------
Permite utilizar propiedades de un tipo de dato en un dato que no tiene definido su tipo, o que se definió como `any`.
```typescript
let cualquierValor:any = "Cualquier cosa";
let largoDelString:number = (<string>cualquierValor).length;
console.log(largoDelString);
```



