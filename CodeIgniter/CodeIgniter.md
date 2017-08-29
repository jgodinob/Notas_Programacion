La base creada como ejemplo es la siguiente:
```mysql
-- Base de datos: `codeigniter`
-- --------------------------------------------------------
-- Estructura de tabla para la tabla `articulos`
CREATE TABLE `articulos` (
  `IDarticulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `articulo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IDusuario` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Volcado de datos para la tabla `articulos`
INSERT INTO `articulos` (`IDarticulo`, `titulo`, `articulo`, `fecha`, `IDusuario`, `activo`) VALUES
(1, 'Mi primer articulo', 'Este es mi primer articulo', '2017-08-29 08:16:25', 0, 1),
(2, 'Segundo', 'Este es mi segundo articulo', '2017-08-29 08:16:25', 0, 1),
(3, 'Mi tercer articulo', 'tercer articulo desactivado', '2017-08-29 08:16:59', 0, 0);
-- Índices para tablas volcadas
-- Indices de la tabla `articulos`
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`IDarticulo`);
-- AUTO_INCREMENT de las tablas volcadas
-- AUTO_INCREMENT de la tabla `articulos`
ALTER TABLE `articulos`
  MODIFY `IDarticulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


------------------------------------------

Dentro del archivo `application\config\config.php` podemos añadir una clave de encriptación en la línea 
```php
/*
|--------------------------------------------------------------------------
| Encryption Key
|--------------------------------------------------------------------------
|
| If you use the Encryption class, you must set an encryption key.
| See the user guide for more info.
|
| https://codeigniter.com/user_guide/libraries/encryption.html
|
*/
$config['encryption_key'] = 'asd747pro22xml134ff';
```
En el archivo `application\config\autoload.php` modificaremos las dos líneas siguientes como en este ejemplo:
```php
/*
| -------------------------------------------------------------------
|  Auto-load Libraries
| -------------------------------------------------------------------
| These are the classes located in system/libraries/ or your
| application/libraries/ directory, with the addition of the
| 'database' library, which is somewhat of a special case.
|
| Prototype:
|
|	$autoload['libraries'] = array('database', 'email', 'session');
|
| You can also supply an alternative library name to be assigned
| in the controller:
|
|	$autoload['libraries'] = array('user_agent' => 'ua');
*/
$autoload['libraries'] = array('database','session');
/*
| -------------------------------------------------------------------
|  Auto-load Helper Files
| -------------------------------------------------------------------
| Prototype:
|
|	$autoload['helper'] = array('url', 'file');
*/
$autoload['helper'] = array('url');
```
Al querer diseñar una aplicación que conectará con la base de datos es necesario configurar el acceso a la misma, por ello modificaremos el archivo `application\config\database.php`
```php
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['dsn']      The full DSN string describe a connection to the database.
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database driver. e.g.: mysqli.
|			Currently supported:
|				 cubrid, ibase, mssql, mysql, mysqli, oci8,
|				 odbc, pdo, postgre, sqlite, sqlite3, sqlsrv
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Query Builder class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['encrypt']  Whether or not to use an encrypted connection.
|
|			'mysql' (deprecated), 'sqlsrv' and 'pdo/sqlsrv' drivers accept TRUE/FALSE
|			'mysqli' and 'pdo/mysql' drivers accept an array with the following options:
|
|				'ssl_key'    - Path to the private key file
|				'ssl_cert'   - Path to the public key certificate file
|				'ssl_ca'     - Path to the certificate authority file
|				'ssl_capath' - Path to a directory containing trusted CA certificats in PEM format
|				'ssl_cipher' - List of *allowed* ciphers to be used for the encryption, separated by colons (':')
|				'ssl_verify' - TRUE/FALSE; Whether verify the server certificate or not ('mysqli' only)
|
|	['compress'] Whether or not to use client compression (MySQL only)
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|	['ssl_options']	Used to set various SSL options that can be used when making SSL connections.
|	['failover'] array - A array with 0 or more data for connections if the main should fail.
|	['save_queries'] TRUE/FALSE - Whether to "save" all executed queries.
| 				NOTE: Disabling this will also effectively disable both
| 				$this->db->last_query() and profiling of DB queries.
| 				When you run a query, with this setting set to TRUE (default),
| 				CodeIgniter will store the SQL statement for debugging purposes.
| 				However, this may cause high memory usage, especially if you run
| 				a lot of SQL queries ... disable this to avoid that problem.
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $query_builder variables lets you determine whether or not to load
| the query builder class.
*/
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'codeigniter',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```
---------------------------------------------------------------
1.1.Primer ejemplo de Modelo y controlador
------------------------------------------
Crearemos un modelo que conectará a la base de datos dónde realizará la consulta y un controlador que gestionará dicha información para mostrarla, para ello es necesario crear diferentes archivos dentro de la carpeta `application\model\` y `application\controller`, tal que así:

| application\model\articulo.php |
|--------------------------------|

```php
<?php
//la clase puede nombrarse con la primera inicial en mayúscula aunque el archivo no lo haga (pero con el mismo nombre)
class Articulo extends CI_Model {
	function get_articulos(){
		$this->db->select()->from('articulos')->where('activo',1);
		$query=$this->db->get();
		return $query->result();
	}
}
```

| application\controller\articulos.php |
|--------------------------------------|

```php
<?php
//la clase puede nombrarse con la primera inicial en mayúscula aunque el archivo no lo haga (pero con el mismo nombre)
class Articulos extends CI_Controller{
	function index(){
		$this->load->model('articulo');
		$contenido['articulos']=$this->articulo->get_articulos();

		print_r($contenido);
	}
}
```

Al introducir la **url** `http://codeigniter/index.php/articulos` obtendremos una muestra de los datos de la base de datos creada. 
`Array ( [articulos] => Array ( [0] => stdClass Object ( [IDarticulo] => 1 [titulo] => Mi primer articulo [articulo] => Este es mi primer articulo [fecha] => 2017-08-29 10:16:25 [IDusuario] => 0 [activo] => 1 ) [1] => stdClass Object ( [IDarticulo] => 2 [titulo] => Segundo [articulo] => Este es mi segundo articulo [fecha] => 2017-08-29 10:16:25 [IDusuario] => 0 [activo] => 1 ) ) )`

