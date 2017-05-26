1.ENTORNO DE DESARROLLO SYNFONY 3
=================================

1.1.Instalar Composer
----------------------

Composer es un manejador de dependencias. Composer es un manejador de dependencias, no un gestor de paquetes. Pero es cierto que trata con paquetes y librerías, la instalación siempre es local para cualquier proyecto, las librerías se instalan en un directorio por defecto (normalmente es /vendor).
* Entramos dentro de dominio de [Composer](https://getcomposer.org/download/) y buscamos el link de descarga de su [setup](https://getcomposer.org/Composer-Setup.exe).
* Durante la instalación habrá que indicar la ubicación del ejecutable **PHP** del servidor local. En este caso al usar **Wamp64** es: ```C://wamp64/bin/php/php7.0.10/php.exe```.
* Para comprobar que se instaló correctamente hay que introducir dentro de la terminal el comando ```composer -v```, este nos devolverá información sobre la versión instalada de **Composer**.

1.2.Instalar CYGWIN
-------------------

Cygwin es una colección de herramientas desarrollada por Cygnus Solutions para proporcionar un comportamiento similar a los sistemas Unix en Microsoft Windows. Su objetivo es portar software que ejecuta en sistemas POSIX a Windows con una recompilación a partir de sus fuentes.
*Nota: terminal tiene toda la potencia de la terminal de Linux pero simulada en Windows.*

* Entramos en el dominio de [CygWin](https://www.cygwin.com/) y buscamos el link de descarga de su [setup](https://cygwin.com/setup-x86_64.exe).
* Se instalará la consola dentro de la carpeta que propone por defecto ```C://CygWin64/```. En cambio si habrá que indicar dónde se instalaran los **Package**, se recomienda dentro de: ```C://Cygwin_Packages/```.
* Acontinuación se indicarán los paquetes que más podrían interesarnos instalar (todos instalados usando Bin):
  * *GIT -> Devel Default -> git: Distributed version control system*.
  * *SSH -> Net Default -> opnssh: The Open SSH server and client programs*. 
  * *NANO -> Editors Default -> nano: Enhanced clone of Pico editor*.
  * *WGET -> Web Default -> wget: Utility to retrieve files from the WWW via HTTP and FTP*.
Para comprobar el correcto funcionamiento ejecutamos **Cygwin64**, y dentro de la consola escribimos `git -v`, `git --version`, `ssh -v`, `nano -v`,...

1.3.Instalar NetBeans
---------------------
NetBeans es un entorno de desarrollo integrado libre, hecho principalmente para el lenguaje de programación Java. Existe además un número importante de módulos para extenderlo. NetBeans IDE es un producto libre y gratuito sin restricciones de uso.

1.4.Instalar Symfony3
---------------------
* Ejecutamos la consola de **CygWin**.
* Accederemos a la carpeta del servidor local escribiendo: ```cd c:/wamp64/www```.
* Una vez dentro de la carpeta dónde queremos iniciar el proyecto (se encontrará dentro del servidor web **Wamp**) ejecutamos: ```composer create-project symfony/framework-standard-edition symfony/ "3.0.0"```. 

*Nota<sup>1</sup>: La primera ubicación indica el directorio desde dónde se recogen los archivos de symfony, es decir dónde se instaló inicialmente. En cambio la segunda ubicación definirá dentro del directorio de ejecución la carpeta dónde se ubicará el proyecto. La parte dónde se escribe `"3.0.0"` especificará la versión de symfony que desea instalarse.*

* Después mostrará un asistente de configuración dónde se indicará:
```
database_host (127.0.0.1):    /     /dirección ip del servidor
database_port (null):               // puerto
database_name (symfony): pruebas    //nombre de la base de datos
database_user (root):
database_password (null):
...
```

*Nota<sup>2</sup>: si entramos en la siguiente url `http://localhost/symfony/web/config.php` se comprobará la configuración de la instalación. Si por alguna razón hubiera problemas es en esta dirección dónde se mostrará dicho error.

*Nota<sup>3</sup>* **Modificar php.ini**: *Dentro del archivo: `C:\wamp64\bin\apache\apache2.4.23\bin\php.ini` colocar debajo de `intl.error_level = E_WARNING` la línea `intl.error_level = 0`. Y colocar debajo de la directiva `xdebug.show_local_vars=0` esta otra `xdebug.max_nesting_level=250`*.

Una vez hechos los cambios anteriores, podemos acceder a la siguiente dirección: `http://localhost/symfony/web/`

1.5.Crear hosts virtuales en Apache
-----------------------------------
IMPORTANTE: SIEMPRE TENER EL MODULO REWRITE DE APACHE ACTIVADO

**AVISO: Esto es opcional, no es necesario que lo hagas para seguir el curso **

Cuando creamos un virtualhost lo que estamos haciendo es simular en nuestro servidor apache local un dominio real, de forma que en lugar de entrar a [http://localhost/symfony3/web](http://localhost/symfony3/web) entraríamos a [http://symfony3.com.devel](http://symfony3.com.devel).

Vamos a ver como se crean los virtualhost en WampServer, aunque esto es muy similar en cualquier versión de Apache.

**Paso 1.** Entrar al fichero `C:\wamp\bin\apache\apache2.4.9\conf\httpd.conf` y añadir o descomentar el include del fichero de los hosts virutales:

Include conf/extra/httpd-vhosts.conf
**Paso 2.** Entrar al fichero `C:\wamp64\bin\apache\apache2.4.9\conf\extra\httpd-vhosts.conf` y añadir los virtualhosts, en mi caso voy a crear 3 nuevos virtualhosts, uno para localhost, otro para un proyecto de Zend Framework 2 y otro para un proyecto de Symfony 3.
```php
# LOCALHOST
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot "c:/wamp/www"
    ServerName localhost
    ErrorLog "logs/localhost-error.log"
    CustomLog "logs/localhost-access.log" common
</VirtualHost>
# VHOST CURSO ZF2
<VirtualHost *:80>    
    DocumentRoot "c:/wamp/www/zend2/public"
    ServerName zend2.com.devel
    ServerAlias www.zend2.com.devel
    <Directory "c:/wamp/www/zend2/public">
        Options Indexes FollowSymLinks        
        AllowOverride All
        Order Deny,Allow
        Allow from all        
    </Directory>    
</VirtualHost>
# VHOST CURSO SYMFONY 3
<VirtualHost *:80>    
    DocumentRoot "c:/wamp/www/symfony3/web
    ServerName symfony3.com.devel
    ServerAlias www.symfony3.com.devel
    <Directory "c:/wamp/www/symfony3/web">
        Options Indexes FollowSymLinks        
        AllowOverride All
        Order Deny,Allow
        Allow from all        
    </Directory>    
</VirtualHost>
```

**Paso 3.** Añadir al fichero hosts de nuestro sistema, en el caso de Windows `C:\Windows\System32\drivers\etc\hosts` (si estas en Windows 8 o 10 ejecuta el programa de edición de código como Administrador para poder guardar los cambios), y añadir las IP y las url.
```
127.0.0.1    localhost
127.0.0.1    zend2.com.devel
127.0.0.1    symfony3.com.devel
Lo que le estamos indicando es que cuando carguemos cualquiera de esos dominios nos llame a la IP que le indicamos en este caso 127.0.0.1 en lugar de la IP original del dominio si es que la tiene.
```
Ahora si entramos a [http://symfony3.com.devel](http://symfony3.com.devel) nos abrirá la web que tenemos en nuestro directorio www.

2.BÁSICOS
=========

2.1.Primer Hola Mundo
---------------------

Para ello accedemos a `C:\wamp64\www\symfony\src\AppBundle\Controller\DefaultController.php`, dónde dentro de la clase `class DefaultController{ ... } ` creamos un nuevo método público llamado `public function helloWorldAction{ ... }` en el cuál se imprimirá el código.
```php
<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
    }
//NUEVA FUNCIÓN PARA HOLA MUNDO
    /**
     * @Route("/hello-world", name="helloWorld")
     */
    public function helloWorldAction(){
     echo "<h1>Hola Mundo!! </h1>";
     die();
    }
}
```
*Nota<sup>1</sup>: Se terminará la función con `php die();` para evitar tener que facilitar una vista la función.*
*Nota<sup>2</sup>: Para acceder a ver la página creada entraremos en `http://localhost/symfony/web/app_dev.php/hello-world` en modo **developer** *.
*Nota<sup>3</sup>: Para cambiar a modo **production** es necesario dentro de C:\wamp64\www\symfony\web`\app.php` y colocar el código `$kernel = new AppKernel('prod', false);` como **true**, de la siguiente manera `$kernel = new AppKernel('prod', true);`*.

2.2.Rutas Básicas, Controladores y Vistas (mediante comentarios)
----------------------------------------------------------------
* Creamos `PruebasController.php` dentro de la ruta `C:\wamp64\www\symfony\src\AppBundle\Controller\` y copiamos el contenido de `C:\wamp64\www\symfony\src\AppBundle\Controller\DefaultController.php`.

| C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php  |
|-----------------------------------------------------------------------|

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;   //Componente que gestiona los enrutamientos

class PruebasController extends Controller
{
//indicamos la ruta de la página de la sigueinte manera:
    /**
     * @Route("/pruebas/index", name="pruebasIndex")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        //Ahora le indicamos que la vista se encuentra dentro de AppBundles\Pruebas\index.html.twig
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
        //Este será el array que imprimirá
            'texto' => "Te lo envío desde la acción del controlador"
        ));
    }
}
```
* Posteriormente se creará la ruta `Resources\views\pruebas` dentro de `C:\wamp64\www\symfony\src\AppBundle\`, tal que así `C:\wamp64\www\symfony\src\AppBundle\Resources\views\pruebas\`. Es aquí dónde se ubicará la vista `index.html.twig` con el siguiente código:

| C:\wamp64\www\symfony\src\AppBundle\Resources\views\pruebas\index.html.twig  |
|------------------------------------------------------------------------------|

```php
{{texto}}
```
Para ver el resutado accederemos a [http://localhost/symfony/web/pruebas/index](http://localhost/symfony/web/pruebas/index).

2.2.1.Rutas Básicas (sistema routing.yml)
-----------------------------------------
**MUY IMPORTANTE:** Los **yml** son sensibles a tabulaciones y espacios. Es necesario introducir 4 espacios delante de cada regla para quedar alineados correctamente. Así evitaremos este error:

https://udemy-images.s3.amazonaws.com/redactor/2016-10-11_13-00-17-9535eb9b2af77f9e715385c427b81e63/sddssddsdsds.jpg

Otra forma de indicar las rutas es abstrayéndolas y ubicándolas en un archivo dentro de `C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml`.

| C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml  |
|-------------------------------------------------------------------|

```yml
pruebas_index:
    # path -> nos indicará la ruta
    path:    /pruebas/index
    # AppBundle -> hace referencia al bundle que está utilizando la ruta
    # Pruebas -> se refiere al controlador dentro del bundle que va a usar la ruta PruebasController.php 
    # index -> se refiere al método action dentro del controlador que está dentro del bundle que va a usar la ruta, public function indexAction(Request $request){ ... }
    defaults: { _controller: AppBundle:Pruebas:index }
```

Es importante saber que dentro de `AppBundel:Pruebas:index`, 
* **AppBundle** hace referencia al bundle que está utilizando la ruta.
* **Pruebas** se refiere al controlador dentro del bundle que va a usar la ruta.
* **index** se refiere al método action dentro del controlador que está dentro del bundle que va a usar la ruta, `public function indexAction(Request $request){ ... }`
*Nota: Para que funcionen correctamente hay que añadir un enlace dentro de `C:\wamp64\www\symfony\app\config\routing.yml`. Para ello se introducirá la ruta dónde se cargarán todas las rutas existentes en ese *Bundle*.*

| C:\wamp64\www\symfony\app\config\routing.yml  |
|-----------------------------------------------|

```yml
rutas_bundle:
    # mediante resources indicaremos la dirección del archivo routing que gestio el enrutado de dicho bundle
    resource: "@AppBundle/Resources/config/routing.yml"
app:
    resource: "@AppBundle/Controller/"
    type:     annotation
```
2.2.2. Paso de Variables (GET y POST ) y restricciones con expresiones regulares
--------------------------------------------------------------------------------

Dentro de la dirección `C:\wamp64\www\symfony\src\AppBundle\Resources\config\` se encuentra el archivo `routing.yml` en el cual indicaremos todas las direcciones de dicho **Bundle**. Pero para que dichas rutas las reconozca el proyecto hay que incluir dicha dirección dentro de `C:\wamp64\www\symfony\app\config\routing.yml`, tal y como se hizo en el ejemplo anterior.

**Ampliación RESTRICCIONES**
----------------------------
Podemos ver algunos ejemplos de restricciones usados dentro del archivo `C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml `. Las mismas son:
* definimos tres valores posibles : `lang: es|en|fr`
* requerimos name con valores alfanumericos : `name: \w+`
* requerimos surname con una expresion regular : `surname: "[a-zA-Z]*"`
* requerimos que age sean solo números que se puedan repetir : `age: \d+`

**Ampliación VARIABLES**
------------------------
Es posible indicar valores por defecto o valores opcionales de las variables, tal que así `defaults: { _controller: AppBundle:Pruebas:index, lang: es, surname:robles, age:""}` dentro del archivo `C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml`. Además de previamente haber indicado la necesidad de esos mismos valores dentro del método `public function indexAction{ ... }` en la clase `PruebaController` del archivo `C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php`, tal que así ` public function indexAction (Request $request, $name, $surname, $age){ ... }` (Ver código siguiente).

| C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml  |
|-------------------------------------------------------------------|

```yml
pruebas_index:
    path:    /pruebas/{lang}/{name}/{surname}/{age}
    # indicamos el controlador utilizado "Pruebas" dentro del Bundle "AppBundle" y la acción "indexAction"
    # indicando valores por defecto o valores opcionales de las variables
    defaults: { _controller: AppBundle:Pruebas:index, lang: es, surname:robles, age:""}
    # indicar el método a utilizar GET o POST
    methods: [GET]
    requirements:
        # definimos tres valores posibles
        lang: es|en|fr
        # requerimos name con valores alfanumericos
        name: \w+
        # requerimos surname con una expresion regular
        surname: "[a-zA-Z]*"
        # requerimos que age sean solo números que se puedan repetir
        age: \d+
```

| C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php  |
|-----------------------------------------------------------------------|

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;   //Componente que gestiona los enrutamientos

class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $surname, $age)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => $name." - ".$surname." - ".$age
        ));
    }
}
```
Así solo aceptaría urls como [http://localhost/symfony/web/pruebas/fr/index/pruebas/22](http://localhost/symfony/web/pruebas/fr/index/pruebas/22).

2.3.Redirecciones
-----------------
* Mediante el código `return $this->redirect($this->generateUrl("helloWorld"));` indicamos al método que redirija hacia la url `helloWorld`.
* Mediante el código  `return $this->redirect($this->generateUrl("homepage"));` indicamos al método que redirija hacia la url `homepage`.
* Mediante el código  `return $this->redirect($this->generateUrl("pruebas/en/victor/3?hola=true"));` indicamos al método que redirija hacia la url `en/victor/3?hola=true` lanzando mediante el método get la variable `hola` con un valor `true`.

| C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php  |
|-----------------------------------------------------------------------|

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;   //Componente que gestiona los enrutamientos

class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $surname, $age)
    {
        // return $this->redirect($this->generateUrl("helloWorld"));
        // return $this->redirect($this->generateUrl("homepage"));
        return $this->redirect($this->generateUrl("pruebas/en/victor/3?hola=true"));
        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => $name." - ".$surname." - ".$age
        ));
    }
}
```

| C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml  |
|-------------------------------------------------------------------|

```yml
pruebas_index:
    path:    /pruebas/{lang}/{name}/{surname}/{age}
    # indicamos el controlador utilizado "Pruebas" dentro del Bundle "AppBundle" y la acción "indexAction"
    # indicando valores por defecto o valores opcionales de las variables
    defaults: { _controller: AppBundle:Pruebas:index, lang: es, surname:robles, age:""}
    # indicar el método a utilizar GET o POST
    methods: [GET]
    requirements:
        # definimos tres valores posibles
        lang: es|en|fr
        # requerimos name con valores alfanumericos
        name: \w+
        # requerimos surname con una expresion regular
        surname: "[a-zA-Z]*"
        # requerimos que age sean solo números que se puedan repetir
        age: \d+
```

En el código anterior si colocásemos la url [http://localhost/symfony/web/pruebas/es/victor/22](http://localhost/symfony/web/pruebas/es/victor/22) nos redireccionaría directamente hacia [http://localhost/symfony/web/hello-world?hola=true](http://localhost/symfony/web/hello-world?hola=true), tal y como nos hubiera indicado el enrutador de **AppBundle** (`C:\wamp64\www\symfony\src\AppBundle\Resources\config\routing.yml`) y su **Controller** (`C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php`).

2.4.Recoger Variables GET y POST
--------------------------------

Mediante el objeto **request** podemos recoger variables **GET** y **POST**. Para poder observar el efecto haremos un `var_dump($request->query->("hola")` seguido de `die();` dentro de **PruebasController**, tal que así:

| C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php  |
|-----------------------------------------------------------------------|

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;   //Componente que gestiona los enrutamientos

class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $surname, $age)
    {
        // return $this->redirect($this->generateUrl("helloWorld"));
        // return $this->redirect($this->generateUrl("homepage"));
        // return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/hello-world?hola=true");
        // return $this->redirect($request->getBaseUrl()."/hello-world?hola=true");
        var_dump($request->query->get("hola"));
        die();
        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => $name." - ".$surname." - ".$age
        ));
    }
}
```
Observaremos que al utilizar la url [http://localhost/symfony/web/pruebas/es/index/victor/22?hola=contenido](http://localhost/symfony/web/pruebas/es/index/victor/22?hola=contenido) en la cual pasamos las variables por url (definidas en el *routing y controlador del AppBundle*) y  una variable `hola` cuyo valor es igual a `contenido` mediante el método **GET** se nos mostrará:
```php
C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php:18:string 'contenido' (length=9)
```

Para usar el método **POST** utilizaremos el cliente *REST* [**Postman**](https://chrome.google.com/webstore/detail/postman/fhbjgbiflinjbdggehcddcbncdddomop). 
Habra que modificar `C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php` para añadir un `var_dump($request->get("hola-post"));` que mediante el método descrito permita enviar la variable `hola-post`, de la siguiente manera:

| C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php  |
|-----------------------------------------------------------------------|

```php
<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;   //Componente que gestiona los enrutamientos

class PruebasController extends Controller
{

    public function indexAction(Request $request, $name, $surname, $age)
    {
        // return $this->redirect($this->generateUrl("helloWorld"));
        // return $this->redirect($this->generateUrl("homepage"));
        // return $this->redirect($this->container->get("router")->getContext()->getBaseUrl()."/hello-world?hola=true");
        // return $this->redirect($request->getBaseUrl()."/hello-world?hola=true");
        var_dump($request->query->get("hola"));
        var_dump($request->get("hola-post"));
        die();
        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', array(
            'texto' => $name." - ".$surname." - ".$age
        ));
    }
}
```
Así dentro de la aplicación enviaremos una variable post (Key = hola-post, Value = contenido de post) dentro de dicha url anteriormente descrita ([http://localhost/symfony/web/pruebas/es/index/victor/22?hola=contenido](http://localhost/symfony/web/pruebas/es/index/victor/22?hola=contenido)) en el **body** mediante **preview** recibiremos:
```php
C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php:18:string 'contenido' (length=9)
C:\wamp64\www\symfony\src\AppBundle\Controller\PruebasController.php:19:string 'contenido de post' (length=17)
```

**Nota**: Se recomienda el uso del segundo método para el envío de variables, es decir usar `$request->get("hola-post"`.


2.5.Crear nuevos Bundles
------------------------

Los Bundles son módulos que dividen la aplicación en partes lógicas. La mejor manera para crearlos es usando la consola [CYGWIN](#12Instalar-CYGWIN)
