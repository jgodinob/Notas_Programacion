JAVASCRIPT
==========
INDICE
------
1. [Propiedades & Métodos](#propiedades)
1. [Métodos SIN parámetros](#metodossinparametros)
1. [Métodos CON parámetros](#metodosconparametros)
1. [Condicionales & Ciclos](#condicionalesciclos)
1. [Arrays](#arrays) -> [Propiedades](#propiedades_arrays) , [Iteradores](#iteradores_arrays) , [Recorrer](#recorrer_arrays)
1. [Objetos](#objetos)

```javascript
let saludo="Bienvenido a Casa";
```

PROPIEDADES
-----------
`.length` -> Muestra la longiud de la cadena
```javascript
let longCE=saludo.length;
```
MetodosSINparametros
----------------------
* `.trim()` -> Quita espacios blanco ppio y final
* `.toUpperCase()`
* `.toLowerCase()`
```javascript
let longSE=saludo.trim(); // 
let longMayús=saludo.toUpperCase();
let longMayús=saludo.toLowerCase();
```

MetodosCONparametros
--------------------
* `.indexOf(string[,i])` -> Si devuelve -1 es que no lo encuentra
```javascript
saludo.indexOf('d'); //8 es la posición de 'd'
saludo.indexOf('i'); //1 es la posición de 'i'
saludo.indexOf('i',2); //7 es la posición de 'i'
saludo.indexOf('nid'); //7 es la posición de 'nid'
```
* `.lastIndeOf (string[,i])` -> Busca de atrás hacia adelante, Si devuelve -1 es que no lo encuentra
```javascript
saludo.lastIndexOf('i',2); //1
```
* `.replace(oldString,newString)
```javascript
let newSaludo=saludo.replace("Bien","Mal"); 
console.log (newSaludo);  //Malvenido
```
* `.split('separador',N)` -> convierte un string en un array
```javascript
let arraySaludo=saludo.split(' '); 
console.log (arraySaludo);//[Bienvenido, a, Casa]
let arraySaludo=saludo.split(' ',2); 
console.log (arraySaludo);  //[Bienvenido, a]
let arraySaludo=saludo.split(''); 
console.log (arraySaludo); //[B,i,e,n...]
```
* `.substring(Empieza,Acaba)`
```javascript
let substring=saludo.substring(4); //venidos a Casa
let substring=saludo.substring(4,7); //ven
let substring=saludo.substring(4,-1); //Bien
```
* `.substr(Empieza,NoCarcateres)`
```javascript
let substr=saludo.substr(4,5); //venid
let substr=saludo.substr(-4,5); //casa
```
* `.slice(a,b)`
```javascript
let slice=saludo.slice(4,7); //ven
let slice=saludo.slice(4,-7); //venido
let slice=saludo.slice(-4,-7); //venido
```
* `.startsWith()` -> pregunta si un stirng empieza (devuelve un boolean)
```javascript
saludo.startsWith('B');
```
* `.endsWith()` -> pregunta si un stirng acaba (devuelve un boolean)
```javascript
saludo.endWith('asa');
```
* `.includes()` -> pregunta si un stirng contiene (devuelve un boolean)
```javascript
saludo.endWith('asa');
```
Volver al [INDICE](#indice)

CONDICIONALES&CICLOS
====================
* `If & Else if`
* `Switch`
* `Ciclo For`
* `While`
* `For of`

```javascript
let edad=prompt('Dime tu edad');
```
If & Else if
------------
```javascript
if (edad>3){ ...
} else if (edad===3){ ...
} else if (edad!=3){ ...
} else if (edad!=3 && edad<10){ ...
} else (edad!=3 || edad<10){ ...
}
```
* TRUTHY: stirng no vacios, [], {}, números diferentes de 0
* FALSY VALUES:0, string vacío, undefined, null, NaN

Switch
------
```javascript
switch(edad){
  case '10':
  console.log('Escribiste 10');
  break;
  default:
  console.log('Otros');
  break;
}
```
* Operador Ternario -> Es una forma abreviada de escribir un if . `condición ? valorTrue : valorFalse`
```javascript
let nombre=prompt('Escribe tu nombre');
nombre.length > 5 ? console.log('True') : console.log('False');
```

Ciclo For
---------
```javascript
let teachers=['Alexys','Jon','Daniel', 'Francisco','Rafa'];
for (let i=0;i<teachers.length;i++){
  if(teachers[i].toUpperCase().IndesOf('A')==0){
    console.log(teachers[i]);
  }
}
```

* `continue;`
* `break;`

While
-----
```javascript
let i=100;
while(i > 0){
  console.log('Debo atender la clase y no jugar');
  i--;
}
```
```javascript
let password='ED';
let pass;
do{
  let pass=prompt('Introduzca la contraseña');
} while (pass!='ED');
```

For of
------
```javascript
for (let teacher of teachers){
  console.log(teacher);
}
let nombre='Alvaro';
for (let letras of nombre){
  console.log(letras);
}
```
Volver al [INDICE](#indice)

ARRAYS
======
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
Volver al [INDICE](#indice)

Propiedades_ARRAYS
------------------
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
Volver al [INDICE](#indice)

Iteradores_ARRAYS
-----------------
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
Volver al [INDICE](#indice)

Recorrer_ARRAYS
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
Volver al [INDICE](#indice)

OBJETOS
-------
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

* expresiones en PROPIEDADES
```javascript
let myObj2={
  [a+b]:'Hola'
}
console.log(myObj2); //muestra una propiedad 'HolaMundo'
```
