JAVASCRIPT - SCOPE, CLOUSURES, THIS Y POO
=========================================
INDICE
------
1. [SCOPE](#scope)
  * [Variables Globales](#Variables-globales)
  * [Variables Locales](#Variables-locales)
2.
==========================================================================
  
  
SCOPE
=====
Scope es el ámbito o contexto donde se ejecuta una función y existen sus variable

Variables Globales
------------------
```javascript
let hola;
function holaMundo(){
  hola='hola mundo';
}
holaMundo();
console.log(hola);  // Reconoce la variable al ser GLOBAL
```
Variables Locales
-----------------
```javascript
function holaMundo(){
  let hola;
  hola='hola mundo';
}
holaMundo();
console.log(hola);  // NO Reconoce la variable al ser LOCAL
```
Volver al [INDICE](#indice)

----------------------------------

CLOSURES
========
```javascript
function saludar(){
  let saludo = 'Hola';
  return function saludarInterno(amigo){
    console.log(saludo + ' ' + amigo);    //son idénticas
    console.log(`${saludo} ${amigo}`);    //son idénticas
  }
}
let miSaludo=saludar();
miSaludo('Alexys');   //imprime 'Hola Alexys'
miSaludo('Daniel');   //imprime 'Hola Daniel'
```
```javascript
function afuera(){
  let numero=1;
  return fucntion(){
    numero++;
    console.log(numero);
  }
}
//cada vez que se ejecute la función debe incrementarse el números
afuera();   //imprime 2
afuera();   //imprime 2
afuera();   //imprime 2

let aumentar=afuera();
aumentar(); //imprime 2
aumentar(); //imprime 3
aumentar(); //imprime 4
```
Volver al [INDICE](#indice)

----------------------------------

THIS
====
```javascript
let myObj = {
  nombre:'Alvaro',
  saludar(){
    console.log(`hola ${this.nombre}`);
  }
};
myObj.saludar();
```
```javascript
function checkThis(){
  console.log(this);
}
checkThis();
```
Volver al [INDICE](#indice)

----------------------------------

Lexical THIS
------------
Si no se usa ARROWS FUNCTIONS hay que declarar internamente `this`
```javascript
function Boy(edad){
  this.edad=0;
  let _t=this;
  setInterval(function(){
    _t.edad++;
  },1000);
}
let juanito=new Boy();
console.log(juanito);
//Si se usa ARROWS FUNCTIONS NO hay que declarar internamente this
function Boy(edad){
  this.edad=0;
  setInterval(()=>{ this.edad++;},1000);
}
let juanito=new Boy();
console.log(juanito);
```
Volver al [INDICE](#indice)

----------------------------------

POO
===
* Clase -> plantilla a partir de la cual se crean objetos
* instancia -> cada objeto creado a partir de una clase
* cosntructor -> función que se ejecuta automáticamente al instanciar una clase
* métodos -> funciones
```javascript
const jon={ nombre:'Jon', apellido:'Mircha', cursos:['Node.js','React.js'], pais:'Mexico' }
const alexys={ nombre:'Alexys', apellido:'Lozada', cursos:['SQL','Java'], pais:'Colombia' }
```
Se podrían usar clases para facilitar el trabajo ES5
```javascript
var Profesor=function (nombre,apellido, pais){
  this.nombre=nombre;
  this.apellido=apellido;
  this.pais=pais;
}
var Jon=new Profesor('Jon','Mircha','Mexico');
console.log(Jon);
var Alexys=new Profesor('Alexys','Lozada','Colombia');
console.log(Alexys);
```
* Clases ES6
```javascript
class Persona{
  constructor(nombre, apellido, pais){
    this.nombre=nombre;
    this.apellido=apellido;
    this.pais=pais;
    this.nombreCompleto=`${nombre} ${apellido}`
  }
  saludar(){ 
    return`Hola,soy ${this.nombreCompleto} y vivo en ${this.pais}`; 
  }
}
const alexys=new Persona('Alexys','Lozada','Colombia');
console.log(alexys); //const alexys=new Persona('Alexys','Lozada','Colombia');
console.log(alexys.saludar()); //Hola,soyAlexys Lozada y vivo en Colombia
//Para ampliar la clase usamos extends
class Profesor extends Persona{
  constructor(nombre, apellido, pais, curso){
    super(nombre, apellido, pais);
    this.curso=curso;
  }
  invitarAlCurso(){ 
    return `Hola, soy ${this.nombreCompleto} y te invito al curso ${this.curso}. ¡Nos vemos en clase!` 
  }
}
const daniel=new Profesor('Daniel','Romero', 'Colombia', 'PHP Desde Cero');
console.log(daniel); //Profesor {nombre: "Daniel", apellido: "Romero", pais: "Colombia", nombreCompleto: "Daniel Romero", curso: "Git"}
console.log(daniel.saludar()); //Hola,soyDaniel Romero y vivo en Colombia
console.log(daniel.invitarAlCurso()); //Hola, soy Daniel Romero y te invito al curso PHP Desde Cero. ¡Nos vemos en clase!
```

* Métodos estáticos -> Los métodos estáticos son llamados sin instanciar su clase. Son habitualmente utilizados para crear funciones para una aplicación.
```javascript
static describirPersona(persona) {
  return `Esta persona se llama ${persona.nombreCompleto} y es de ${persona.pais}`
}
console.log(Persona.describirPersona(Alexys));

class MiLibreria{
  constructor(){

  }
  static.funcionalidad(){
    return 'blablabla'
  }
}
```
