** VIRTUAL HOST **

Buscamos el archivo **hosts** dentro de una dirección del sistema parecida a *c:/Windows/System32/drivers/etc*
añadimos la línea *127.0.0.1 dominio.com* el ejemplo sería:
	**127.0.0.1 marketproweb.com**
Buscamos el archivo **httpd-vhosts.conf**	dentro de Apache en una dirección tal que así *C:\wamp64\bin\apache\apache2.4.23\conf\extra*
añadimpos el siguiente texto:
```html
	NameVirtualHost *
		<VirtualHost *>
			DocumentRoot "C:\wamp64\www"
			ServerName localhost
		</VirtualHost>
		<VirtualHost>
			DocumentRoot "C:\wamp64\www\domainFolder"
			ServerName domainName
		<Directory "C:\wamp64\www\domainFolder">
			Order allow,deny
			Allow from all
		</Directory>
	</VirtualHost>
```
El ejemplo para WAMP64 sería para un dominio virtual [marketproweb.project](http://marketproweb.project) alojado en "C:\wamp64\www\marketpro":
```html
<VirtualHost *:80>
	DocumentRoot "C:\wamp64\www\marketpro"
	ServerName marketproweb.project
	<Directory "C:\wamp64\www\marketpro">
		Order allow,deny
		Allow from all
	</Directory>
</VirtualHost>
```
