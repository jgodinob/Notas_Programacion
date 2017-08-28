Se recomienda el uso del gestor de dependencias [Composer](https://getcomposer.org/) para poder instalar las diferentes librerias que se usaran, para ello en windows usaremos el [instalador de Composer](https://getcomposer.org/Composer-Setup.exe)

Si es necesario tener en cuenta que la instalación de [Composer](https://getcomposer.org/) hay que realizarla dentro de instalación de **PHP**, dónde se encuentra el ejecutable `php.exe`. En el caso de [WAMP64](http://www.wampserver.com/en/download-wampserver-64bits/) será por defecto `C:\wamp64\bin\php\php7.0.10\php.exe` para la versión de **PHP 7**, y `C:\wamp64\bin\php\php5.6.25\php.exe` para la versión de **PHP 5**.

1. Empezar a usar [Composer](https://getcomposer.org/)
------------------------------------------------------

Para empezar a utilizarlo primero es necesario acceder a la consola, ya sea de linux, mac o windows (escribiendo en Cortana CMD). Posteriormente accedemos al directorio del proyecto mediante los comandos de consola de windows (dc.., cd wamp64,...).
Una vez dentro escribimos `composer`para poder visualizar los comandos de la versión instalada.
El comando a escribir para iniciar la instalación en el proyecto específico es `composer init`, el cual lanzará composer e irá solicitando información sobre el proyecto que habrá que ir rellenando. Se recomienda rellenar obligatoriamente el **Autor**, el cual se ubicará seguido el email del mismo tal que así: `Periquillo González <periquillo@gmail.com>`, el resto de información se recomienda dejarla como defecto, para finalmente aceptar la creación del proyecto en [Composer](https://getcomposer.org/).


