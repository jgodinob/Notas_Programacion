TypeScript - Introducción
=========================
INDICE
------
1. [INSTALACIÓN](#instalación)
* [Iniciar la instalación](#iniciar-la-instalación)
* [Iniciar el Proyecto](#iniciar-el-proyecto)
2. [TSCONFIG.JSON](tsconfig.json)
3. [TIPOS DE DATOS](#tipos-de-datos)
* [Boolean](#boolean), [Numbers](#numbers), [String](#string), [Any](#any), [Arrays](#arrays), [Tuples](#tuples), [Enum](#enum), [Void](#void), [Never](#never) y [Null & Undefined](#null--undefined)
4. [Aserciones de tipo](#aserciones-de-tipo)

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
* `tsc -w`-> chequea continuamente los cambios realizados en los archivos [TypeScript](https://www.typescriptlang.org/) designados en `tsconfig.json`.
* `node -v`-> devuelve la versión instalada de NodeJs
* Para cancelar proyectos en la Temrinal usaremos `Ctrl + C`

Volver al [INDICE](#indice)

----------------------------------

TSCONFIG.JSON
=============
El archivo tsconfig.json permite configurar el sistema de transpilado de [TypeScript](https://www.typescriptlang.org/).

Por ejemplo con la configuración estándar permite modificar el tipo de salida de la transpilación, es decir decidir si queremos que se transpile a una versión u otra de `Javascript`. Un ejemplo sería modificando `"target":"es5"`, cuya salida sería en ECMAS5, por `"target":"es6"` cuya salida sería ECMAS6. Otra opción es usar el comando para la consola `tsc app.ts --target es6`.

**¿Cómo eliminar los comentarios al transpilar [TypeScript](https://www.typescriptlang.org/)?**
Para ello debemos introducir dentro de `"compilerOptions":{...}` la opcion de `"removeComments":true"`, asi no se mostrarán los comentarios realizados en el archivo [TypeScript](https://www.typescriptlang.org/).
```typescript
{
  "compilerOptions":{
     "module":"commonjs",
     "target":"es5",
     "noImplicitAny":false,
     "sourceMap":false
     "removeComments":true
  }
}
```
Otra alternativa es dentro de la consola utilizar la opción `--removeComments`. Para ello habría que utilizarlo como en el siguiente ejemplo: `tsc app.ts --removeComments`.
Para evitar que con esta configuración se elimine un comentario en especial se usará el siguiente tipo de comentario:
```typescript
/*! Ejemplo de comentario no ignorado*/
```
**¿Cómo incluir o excluir archivos y carpetas al transpilar [TypeScript](https://www.typescriptlang.org/)?**
Para ello es necesario añadir una nueva regla dentro de `tsconfig.json`.
```typescript
{
    "compilerOptions":{
    ...
    },
    "include":[
        "app/**/*"
    ],
    "exclude":[
      "node_modules",
      "src/"
    ]
}
```
**¿Cómo unir todos los archivos transpilados en [TypeScript](https://www.typescriptlang.org/) en uno único?**
Para ello es necesario añadir una nueva regla dentro de `tsconfig.json`.
```typescript
{
    "compilerOptions":{
        ...
        "outFile":"build/main.js"
    },
    "exclude":[
      "node_modules",
      "src/"
    ]
}
```
También es posible mediante una línea de comando en la consola `tsc --outFile main.js app.ts app2.ts app3.ts`

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

Boolean
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

Volver al [INDICE](#indice)

----------------------------------

Numbers
-------
**Ejemplo:**
```typescript
let avengers:number = 5 ,
    villanos:number,
    otros = 2;
avengers > villanos ? console.log("Estamos salvados!!") : console.log("Estamos muertos");
```
Imprime "Estamos muertos", Ya que al no haberse declarado un valor para villanos, se declara como UNDEFINED

Volver al [INDICE](#indice)

----------------------------------

String
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

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
let batman:string = "Bruce";
let superman:string = "Clark";
let existe:boolean= false;
```

Volver al [INDICE](#indice)

----------------------------------

Any
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

Volver al [INDICE](#indice)

----------------------------------

Arrays
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

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
let aliados:string[] = ["Mujer Maravilla","Acuaman","San", "Flash"];
```

Volver al [INDICE](#indice)

----------------------------------

Tuples
------
Cuando un array es finito, o en su defecto se conoce el número de datos que contendrá, se pueden definir los mismos.
**Ejemplo:**
```typescript
let heroe:[string,number]=["Dr. Strange", 100];
```
si tratasemos de incluir datos de tipo distinto a los que se han definido `heroe[0]=123;` y `heroe[1]="Iroman;` lanza un error [TypeScript](https://www.typescriptlang.org/). Lo mismo pasaría si no se define uno de los datos, o si se define y no se introduce.
En cambio si permite añadir elementos al array sin definirlos usando por ejemplo `heroe.push(true);`.

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
let parejaHeroes:string[] = [batman,superman];
let villano :[string,number,boolean]= ["Lex Lutor",5,true];
```

Volver al [INDICE](#indice)

----------------------------------

Enum
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

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
enum Fuerza{
  Acuaman=0,
  Batman,
  Flash=5,
  Superman=100
} 
let fuerzaFlash:number = Fuerza.Flash;        console.log(fuerzaFlash);  //Imprime 5
var fuerzaSuperman:number = Fuerza.Superman;  console.log(fuerzaSuperman);  //Imprime 100
var fuerzaBatman:number = Fuerza.Batman;      console.log(fuerzaBatman);  //Imprime 1
var fuerzaAcuaman:number = Fuerza.Acuaman;    console.log(fuerzaAcuaman);  //Imprime 0
```

Volver al [INDICE](#indice)

----------------------------------

Void
----
El tipo `Void`es muy utilizado en JavaCShare, y es el contrario a `any`, es decir, devuelve vacío.
```typescript
function llamar_batman():void{
  console.log("mostrar la batiseñal");
}
let mensaje=llamar_batman();
```
Si colocase dentro de la función `retur 1;`me devolvería un error [TypeScript](https://www.typescriptlang.org/), ya que se definió el resultado de la función como vacío.

Volver al [INDICE](#indice)

----------------------------------

Never
-----
El tipo de dato `Never`representa un valor que nunca puede suceder, es decir, implicaría que si se llega a ese punto se debe salir de la función.
```typescript
function error(mensaje):never{
  throw ner Error(mensaje);
}
error("Error crítico... línea 11 alcanzada...");
```
Esta función lanzaría un mensaje de error con el texto definido, se usa para marcar situaciones que no deben ocurrir.

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
function activar_batiseñal():string{
  return "activada";
}

function pedir_ayuda():void{
  console.log("Auxilio!!!");
}
```

Volver al [INDICE](#indice)

----------------------------------

Null & Undefined
----------------
Son dos tipos de datos específicos en [TypeScript](https://www.typescriptlang.org/) que por si sólo no hacen nada.
Sería imposible asignar un valor diferente a `NULL` o `UNDEFINED` a una variable anteriormente declarada como `NULL` o `ÙNDEFINED`.
```typescript
let nada:undefined=undefined;
nada=null; //no podría asignarle un valor distinto de NULL o UNDEFINED
```
En cambio si es posible asignar valores NULL o UNDEFINED a variables declaradas como `string` por ejemplo. Esta posibilidad es bastante peligrosa, ya que podría llevar a errores ilocalizables en programas más complejos de tamaño considerable.
```typescript
let ironman:string;
ironman="Tony";
ironman=undefined;
```
Para evitar esta posibilidad, habría previamente que modificar la configuración de [TypeScript](https://www.typescriptlang.org/). Así, para que funciones habría que activar en el `tsconfig.json` la función `"strictNullChecks":true,`dentro de `compilerOptions:{}`.
Es decir:
```json
{
  "compilerOptions":{
    "strictiNullChecks":true,
  }
}
```

Volver al [INDICE](#indice)

----------------------------------

ASERCIONES DE TIPO
==================
Permite utilizar propiedades de un tipo de dato en un dato que no tiene definido su tipo, o que se definió como `any`.
```typescript
let cualquierValor:any = "Cualquier cosa";
let largoDelString:number = (<string>cualquierValor).length;
console.log(largoDelString);
```

**Ejercicio:** *Trabaja con el siguiente código*
```typescript
let poder1:string = "100";
let largoDelPoder1:number = poder1.length;
console.log( largoDelPoder1 );
```
```typescript
let poder2:number = 100;
let largoDelPoder2:number = poder2.toString().length;
console.log( largoDelPoder2 );
```

Volver al [INDICE](#indice)

----------------------------------



