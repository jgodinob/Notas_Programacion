TypeScript - Objetos y Tipos Personalizados en TypeScript
=========================================================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros](#parametros)

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



