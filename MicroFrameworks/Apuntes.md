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

Además se habrá creado un archivo llamado `composer.lock`que facilitará información sobre los paquetes instalados.

1.2.Instalando Autoload.php
--------------------------

Se recomienda tener delante la documentación referente a dicho módulo, para ello hacemos click en [autoload documentation](https://getcomposer.org/doc/01-basic-usage.md), para verla accedemos a la documentación de [Composer](https://getcomposer.org/), y pulsamos en [Composer/basic usage](https://getcomposer.org/doc/01-basic-usage.md), ahí buscamos **Autoload.php**. Así, según la misma insertamos dentro de `index.php` el código 

```php
require __DIR__ . '/vendor/autoload.php';
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');
```

Se generará un archivo `app.log` con información sobre el módulo **monolog** relativa a cada sesión llevada a cabo, tal que así:

```php
[2017-08-28 16:03:16] name.WARNING: Foo [] []
[2017-08-28 16:03:55] name.WARNING: Foo [] []
```

1.3.MicroFramwork SLIM
----------------------
Para tener tod la información y documentación de este MicroFramework podemos acceder a [Slimframework](https://www.slimframework.com/) dentro de la opción [User Guide](https://www.slimframework.com/docs/). Este puede ser instalado desde la consola mediante [Composer](https://getcomposer.org/), mediante la línea de comando `composer require`, para después en el buscador de módulos buscar usando la palabra **slim** y seleccionar `Silm/slim`.

Para desarrollar la aplicación convertiremos el archivo `index.php` en el enrutador, y generaremos un controlador frontal a través de la configuración existente en `.htaccess`de la aplicación de la siguiente manera:

| .htaccess |
|-----------|

```php
RewriteEngine On
RewriteCond &(REQUEST_FILENAME) !-d
RewriteCond &(REQUEST_FILENAME) !-f
RewriteRule ^ index.php (QSA,L)
```

| index.php |
|-----------|

```php
<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello, $name");

    return $response;
});
$app->run();
```

Esto mostraria en el navegador al introducir la url `https:/slimproject/hello/David` el texto **Hello, David**.

En cambio si modificamos `index.php` de la siguiente manera:

| index.php |
|-----------|

```php
<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Hello World!!");
    return $response;
});
$app->run();
```
Se mostraria en el navegador al introducir la url `https:/slimproject/` el texto **Hello World!!**.
