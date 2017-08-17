** VIRTUAL HOST **

Buscamos el archivo **hosts** dentro de una dirección del sistema parecida a *c:/Windows/System32/drivers/etc*
añadimos la línea *127.0.0.1 dominio.com* el ejemplo sería:

**127.0.0.1 marketproweb.project**

**Configuración para WAMP64**
* **Opción A**
Buscamos el archivo **httpd-vhosts.conf** dentro de Apache en una dirección tal que así *C:\wamp64\bin\apache\apache2.4.23\conf\extra*
encontraremos el archivo inicialmente así:

```html
# Virtual Hosts
#

# LOCALHOST
 <VirtualHost *:80>
 	ServerName localhost
 	DocumentRoot "c:/wamp64/www"
  	<Directory  c:/wamp64/www/>
  		Options +Indexes +Includes +FollowSymLinks +MultiViews
  		AllowOverride All
  		Require local
  	</Directory>
 </VirtualHost>
```
A continuación añadimos el siguiente texto:

```html
<VirtualHost *:80>
	ServerName domainName
	DocumentRoot "C:\wamp64\wwwdomainName"
	<Directory "C:\wamp64\www\domainName">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```

El ejemplo usando [WAMP64](http://www.wampserver.com/en/#wampserver-64-bits-php-5-6-25-php-7) sería para un dominio virtual [marketproweb.project](http://marketproweb.project) alojado en *C:\wamp64\www\marketpro* 

```html
<VirtualHost *:80>
	ServerName MarketPro.project
	DocumentRoot "c:/wamp64/www/marketpro.project"
	<Directory  "c:/wamp64/www/marketpro.project/">
		Options +Indexes +Includes +FollowSymLinks +MultiViews
		AllowOverride All
		Require local
	</Directory>
</VirtualHost>
```
* **Opción B**
	* Creamos dentro de *c:/wamp64/www/* una carpeta con el nombre del dominio virtual.
	* Dentro de localhost selecionamos la opción de **Add a Virtual Host**.
	* Indicamos el nombre del dominio en **Name of the Virtual Host**, la ubicación del dominio en **Complete absolute path of the VirtualHost folder Examples: C:/wamp/www/** y pulsamos en **Start the creation**.
