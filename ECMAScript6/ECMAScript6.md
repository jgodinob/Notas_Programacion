JAVASCRIPT
==========
INDICE
------
1. [Propiedades & Métodos](#propiedades)
1. [Métodos SIN parámetros](#metodossinparametros)
1. [Métodos CON parámetros](#metodosconparametros)
1. [Condicionales & Ciclos](#condicionalesciclos)

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
Condicionales&Ciclos
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

for of
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
