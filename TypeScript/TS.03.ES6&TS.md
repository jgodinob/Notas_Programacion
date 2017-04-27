TypeScript - ES6 & TYPESCRIPT
=========================================================
INDICE
------
1. [FUNCIONES](#funciones)
* [Parámetros](#parametros)

----------------------------------

Variables Let
-------------
Permite crear variables con valor sólo dentro de ese mismo `scope`. Un ejemplo sería el siguiente código en el que aunque dentro del condicional se redeclara la variable `nombre`, esta sigue manteniendo el valor `nombre="Tony"`al ser impresa por `console.log(nombre);` ya que su scope es el mismo. De haber usado para declararla `var`en cambio imprimiría `"Bruce"`.
```javascript
let nombre="Tony";
let nombre="Ricardo";
if (true){
  let nombre="Bruce";
}
console.log(nombre);
```
Constantes
----------
Las cosntantes son un tipo de dato que no puede mutar una vez ya definido. Para declarar constantes usaremos la palabra reservada `const` y para nombrar la variable sólo mayúsculas, como por ejemplo `OPCIONES`.
```typescript
const OPCIONES:string="Activo";
if(true){
  const OPCIONES:string="Desactivado";
}
for (const i of [1,2,3,4,5,6] ){
  console.log(i);
}
```
La constantes en realidad es redefinida al estar ambas en distinto `Scope`.
Todo cambia cuando las constantes se definen como objetos, ya que permite realizar cambios en las propiedades del objeto, aunque no modificar dichas propiedades.
```typescript
const OPCIONES={
  estado:true,
  audio:10,
  ultima:"main"
}
OPCIONES.estado=false;    //cambia el valor de la propiedad de la constante tipo objeto
OPCIONES.audio=1;         //cambia el valor de la propiedad de la constante tipo objeto
console.log(OPCIONES);
```
Templates Literales
-------------------
Una posibilidad es la de concatenar variables y respetar líneas sin tener que abrir y cerrar `" "`. Mediante el uso de `` \``
```typescript
let nombre1:string = "Bruce";
let nombre2:string = 'Ricardo';

let mensaje:string = `1
2. Hola ${nombre1}
3. Robin es: ${nombre2}
`;
```


