Se recomienda el uso del gestor de dependencias [Composer](https://getcomposer.org/) para poder instalar las diferentes librerias que se usaran, para ello en windows usaremos el [instalador de Composer](https://getcomposer.org/Composer-Setup.exe)

Si es necesario tener en cuenta que la instalación de [Composer](https://getcomposer.org/) hay que realizarla dentro de instalación de **PHP**, dónde se encuentra el ejecutable `php.exe`. En el caso de [WAMP64](http://www.wampserver.com/en/download-wampserver-64bits/) será por defecto `C:\wamp64\bin\php\php7.0.10\php.exe` para la versión de **PHP 7**, y `C:\wamp64\bin\php\php5.6.25\php.exe` para la versión de **PHP 5**.

1.Empezar a usar [Composer](https://getcomposer.org/)
-----------------------------------------------------

Para empezar a utilizarlo primero es necesario acceder a la consola, ya sea de linux, mac o windows (escribiendo en Cortana CMD). Posteriormente accedemos al directorio del proyecto mediante los comandos de consola de windows (dc.., cd wamp64,...).

Una vez dentro escribimos `composer`para poder visualizar los comandos de la versión instalada.

El comando a escribir para iniciar la instalación en el proyecto específico es `composer init`, el cual lanzará composer e irá solicitando información sobre el proyecto que habrá que ir rellenando. Se recomienda rellenar obligatoriamente el **Autor**, el cual se ubicará seguido el email del mismo tal que así: `Periquillo González <periquillo@gmail.com>`, el resto de información se recomienda dejarla como defecto (pulsando directamente **intro**, para finalmente aceptar la creación del proyecto en [Composer](https://getcomposer.org/).

Esto generará un archivo `composer.json`que contendrá la configuración del proyecto. 

* **Nota**: Para continuar con la configuración del poryecto se recomienda pulsar intro hasta finalizar, ya que posteriormente siempre se podrá moficiar el archivo `composer.json`. (Ver ejemplo `composer.json`)

| composer.json |
|---------------|
```php

{
    "name": "Periquillo/drupaltest",
    "authors": [
        {
            "name": "Periquillo González",
            "email": "periquillo@gmail.com"
        }
    ],
    "require": {
    }
}
```


1.1.Añadir paquetes al proyecto
-------------------------------

Podemos ver el listado de paquetes existentes en [Composer](https://getcomposer.org/) accediendo a la siguiente página [packagist.org](https://packagist.org/search/?q=wordpress), o escribiendo en la consola dentro del proyecto `composer require` y añadir en el buscador el recurso que buscamos. En este caso trataremos de instalar un paquete que nos facilita el **debug**, [monolog](https://packagist.org/packages/monolog/monolog). 

Una vez seleccionado los paquetes que queremos cargar veremos de nuevas el texto `Search for a package:` el cual pregunta si queremos cargar nuevos paquetes. Para finalizar pulsaremos **intro** y se cargaran los paquetes señalados.

| composer.json |
|---------------|
```php

{
    "name": "Periquillo/drupaltest",
    "authors": [
        {
            "name": "Periquillo González",
            "email": "periquillo@gmail.com"
        }
    ],
    "require": {
            "monolog/monolog": "^1.23"
            "drupal/drupal": "^8.3"
    }
}
```
