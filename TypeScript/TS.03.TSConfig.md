TypeScript - TSConfig
=========================================================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros](#parametros)

----------------------------------

TSCONFIG.JSON
=============
El archivo tsconfig.json permite configurar el sistema de transpilado de [TypeScript](https://www.typescriptlang.org/).
Por ejemplo con la configuración estándar permite modificar el tipo de salida de la transpilación, es decir decidir si queremos que se transpile a una versión u otra de `Javascript`. Un ejemplo sería modificando `"target":"es5"`, cuya salida sería en ECMAS5, por `"target":"es6"` cuya salida sería ECMAS6.

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
