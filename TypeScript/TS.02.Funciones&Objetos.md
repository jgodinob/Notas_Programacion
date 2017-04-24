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
-----------------------
```javascript
function hola ( nombre ) { return "Hola" + nombre};
hola ("Fernando");
hola();
```
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
