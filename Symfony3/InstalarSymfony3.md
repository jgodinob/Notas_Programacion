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
Para comprobar el correcto funcionamiento ejecutamos **Cygwin64**, y dentro de la consola escribimos ```git -v```, ```git --version```, ```ssh -v```, ```nano -v```,...

1.3.Instalar NetBeans
---------------------
NetBeans es un entorno de desarrollo integrado libre, hecho principalmente para el lenguaje de programación Java. Existe además un número importante de módulos para extenderlo. NetBeans IDE es un producto libre y gratuito sin restricciones de uso.

1.4.Instalar Symfony3
---------------------
* Ejecutamos la consola de **CygWin**.
* Accederemos a la carpeta del servidor local escribiendo: ```cd c:/wamp64/www```.
* Una vez dentro de la carpeta dónde queremos iniciar el proyecto (se encontrará dentro del servidor web **Wamp**) ejecutamos: ```composer create-project symfony/framework-standard-edition symfony/ "3.0.0"```. 
*Nota: La primera ubicación indica el directorio desde dónde se recogen los archivos de symfony, es decir dónde se instaló inicialmente. En cambio la segunda ubicación definirá dentro del directorio de ejecución la carpeta dónde se ubicará el proyecto. La parte dónde se escribe ```"3.0.0"``` especificará la versión de symfony que desea instalarse.*
* Después mostrará un asistente de configuración dónde se indicará:
```
database_host (127.0.0.1):    /     /dirección ip del servidor
database_port (null):               // puerto
database_name (symfony): pruebas    //nombre de la base de datos
database_user (root):
database_password (null):
...
```




  
