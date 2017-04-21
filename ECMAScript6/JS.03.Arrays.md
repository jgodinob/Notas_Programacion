JAVASCRIPT - Arrays
===================
* Propiedades
* Iteradores
* Recorrer Arrays
* Objetos

```javascript
let arr=[0, 1, 2, 3, 4];
console.log(arr.length);
console.log(arr[0]);
let sum=0;
for(let index=0 ; index < arr.length ; index++){
  if(typeof arr[index] == 'number'){
    sum += arr[index];
  }
}
console.log(sum);
for(let index=0 ; index < arr.length ; index++){
  if(typeof arr[index] == 'number') continue;
  sum += arr[index];
}
```
Arrays - Propiedades
--------------------
* `.indexOf()` -> Busca si un elemento existe o no dentro de array, si devuelve -1 NO EXISTE
```javascript
console.log( arr.indexOf(2));
```
* `.push (el1, el2, el3)` -> Agregar elementos .push (el1, el2, el3) añade al final
```javascript
console.log( arr.push('javascript', 'desde') );
```
* `.unshift(el1, el2, el3)` -> Agregar elementos .unshift(el1, el2, el3) añade al inicio
```javascript
console.log( arr.unshift('añade', 'al', 'inicio') );
```
* `.pop()` -> Eliminar un solo elemento (sin parámetros) al final
```javascript
console.log(arr.pop('final'));
```
* `.shift()` -> Eliminar un solo elemento (sin parámetros) al inicio
```javascript
console.log(arr.shift('inicio'));
```
* `.join('separador')` -> convierte un array a un string, 'separador' es por defecto una coma
```javascript
console.log(arr.join());
console.log(arr.join(' '));
```
* `.splice (a,b, items)` -> añade o quita elementos
```javascript
console.log(arr.splice (2,1,'Escuela')); //se colocó en el índice 2, eliminó 1 elemento y añadió "escuela"
```
* `.slice()` -> crea un nuevo array
```javascript
console.log(arr.slice(2,5));
```
* `.find()` -> devuelve el primer elemento del array que cumple una condición

`function nombre(){ //hacer algo }`
`(parametro1, parametro2) => //valor retornado`

Ejercicio: recorre el array y devuelve el primer elemento menor de 3 
--------------------------------------------------------------------
```javascript
let array=[1, 2, 3, 4];
let num=array.find(el => el>3);
console.log(num);
```
Ejercicio: devuelve el índice del primer elemento que cumple la condición 
-------------------------------------------------------------------------
```javascript
let numIndex=array.findIndex(el => el>3);
console.log(numIndex);
```

Iteradores
----------
* Son objetos que contienen un método `.next()`
* Ese método `.next()` devuelve un objeto con 2 propiedades
* `value`, `done`
 
* `.keys()` -> con keys accedo a los índices del array
```javascript
let array=[1, 2, 3, 4];
let iterador=array.keys();
console.log(iterador.next());
//Object{value:0,done: false}
```
* `.values()`
```javascript
let iterador=array.values();
console.log(iterador.next());
//Object{value:0,done: false}
```
* `.entries()`
```javascript
let iterador=array.entries();
console.log(iterador.next());
//Object{value:0,done: false}
```

Recorrer Arrays
---------------
```javascript
let alumnos=[
  {nombre:'Pepe', nota:'17'},
  {nombre:'Juan', nota:'9' },
  {nombre:'Luis', nota:'19'}
];
```
* `.map(cb)` -> Transforma cada elemento del array según el callback y devuelve un nuevo array
* `.filter(cb)` -> filtra elementos y los devuelve a un array
* `.reduce(cb(prev, current[, i, arr])[, initial]);`

Ejercicio: Recorrer Array - Método 1 Antiguo
--------------------------------------------
```javascript
let alumnosNombres=[];
for(var i=0 ; i < alumnos.length ; i++){
  alumnosNombres.push(alumnos[i].nombre)
};
console.log(alumnosNombres);
```

Ejercicio: Recorrer Array - Método 2 ES6
----------------------------------------
```javascript
let estudiantesNombre=alumnos.map(alumnos=>alumnos.alumno);
console.log(estudiantesNombre);
```

Ejercicio: Recorrer Array Comprobando notas - Método 1 Antiguo
--------------------------------------------------------------
```javascript
let alumnosAprobados1=[];
for(var i=0;i<alumnos.length;i++){
  if(alumnos[i].nota < 10) continue;
  alumnosAprobados1.push(alumnos[i].alumno);
}
console.log(alumnosAprobados1);
```

Ejercicio: Recorrer Array Comprobando notas - método 2 Antiguo
--------------------------------------------------------------
```javascript
let alumnosAprobados2=[];
for(var i=0;i<alumnos.length;i++){
  if(alumnos[i].nota > 10){
    alumnosAprobados2.push(alumnos[i].alumno);
  }
}
console.log(alumnosAprobados2);
```

Ejercicio: Recorrer Array Comprobando notas - método 3 ES6
----------------------------------------------------------
```javascript
let alumnosAprobados3=alumnos.map(alumnos=>alumnos.nota > 10);
console.log(alumnosAprobados3);
```

Ejercicio: Devuelve la suma
----------------------------------------------------------
```javascript
let numeros=[2,4,6,8,10];
let suma=numeros.reduce((a,b) => a+b );
console.log(suma);
```

Ejercicio: Devuelve el valor máximo
-----------------------------------
```javascript
let max=numeros.reduce((a,b) => a>b ? a:b );
console.log(suma);
```

Ejercicio: Devuelve el valor promedio
-----------------------------------
```javascript
let promedio=numeros.reduce((a,b,i,arr) => {
  b += a;
  return (i==arr.length -1) ? b/arr.length:b
});
console.log(promedio);
```

OBJETOS
=======
```javascript
let yo={
  nombre:'Alvaro',
  edad:37,
  país:'Perú',
  hijos:['Sofia','Alejandro'],
  saludo(){
    return 'hola';
  }
};
console.log(yo.hijos[1]);
```

Operadores en los OBJETOS
-------------------------
```javascript
const yo={
  nombre:'Alvaro',
  edad:37,
  país:'Perú',
  hijos:['Sofia','Alejandro'],
  saludo(){
    return 'hola';
  }
};
```

* `delete` -> elimina una propiedad
```javascript
delete yo.saludo; //elimina la propiedad .saludo
```
* `in` -> devuelve true si existe una propiedad en el OBJETO
```javascript
console.log('edad' in yo); //devolvería True
```
*  `.assign` -> copia un objeto
```javascript
let ED2=Object.assign({},yo);
```

```javascript
Object.prototype.numeroMagico=27; //añade la propiedad al prototype
console.log(yo.numeroMagico); //dirá que la propiedad existe al estar en el prototype
console.log(yo.hasOwnProperty('numeroMAgico')); //comprobará si verdaderamente existe dentro del objeto
```

* asignar variables existentes a propiedades de los objetos
```javascript
let a='Hola',b='Mundo';
const obj={
  a,b
}
```
/*
* expresiones en PROPIEDADES
```javascript
let myObj2={
  [a+b]:'Hola'
}
console.log(myObj2); //muestra una propiedad 'HolaMundo'
```
