JAVASCRIPT - Condicionales & Ciclos
===================================
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