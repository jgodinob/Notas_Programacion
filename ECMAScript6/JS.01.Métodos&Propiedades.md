```javascript
let saludo="Bienvenido a Casa";
```

JAVASCRIPT - Propiedades & Métodos
==================================
`.length` -> Muestra la longiud de la cadena
```javascript
let longCE=saludo.length;
```

Métodos sin parámetros
----------------------
* `.trim()` -> Quita espacios blanco ppio y final
* `.toUpperCase()`
* `.toLowerCase()`
```javascript
let longSE=saludo.trim(); // 
let longMayús=saludo.toUpperCase();
let longMayús=saludo.toLowerCase();
```

Métodos CON parámetros
----------------------
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