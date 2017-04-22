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
**¿CÓMO CREAR TIPOS NUEVOS?**
**INTERFACES**
Volver al [INDICE](#indice)

----------------------------------
BOOLEAN
-------
```typescript
let esSuperman:boolean = true;
```







