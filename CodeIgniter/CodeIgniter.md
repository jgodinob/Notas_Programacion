La base creada como ejemplo es la siguiente:

| codeigniter.sql |
|-----------------|

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
```

------------------------------------------

Dentro del archivo `application\config\config.php` podemos añadir una clave de encriptación en la línea 

| application\config\config.php |
|-------------------------------|

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
/*
|--------------------------------------------------------------------------
| Index File
|--------------------------------------------------------------------------
|
| Typically this will be your index.php file, unless you've renamed it to
| something else. If you are using mod_rewrite to remove the page set this
| variable so that it is blank.
|
*/
/* MODIFICADO */
// $config['index_page'] = 'index.php';
$config['index_page'] = '';
/*
|--------------------------------------------------------------------------
| Base Site URL
|--------------------------------------------------------------------------
|
| URL to your CodeIgniter root. Typically this will be your base URL,
| WITH a trailing slash:
|
|	http://example.com/
|
| WARNING: You MUST set this value!
|
| If it is not set, then CodeIgniter will try guess the protocol and path
| your installation, but due to security concerns the hostname will be set
| to $_SERVER['SERVER_ADDR'] if available, or localhost otherwise.
| The auto-detection mechanism exists only for convenience during
| development and MUST NOT be used in production!
|
| If you need to allow multiple domains, remember that this file is still
| a PHP script and you can easily do that on your own.
|
*/
$config['base_url'] = 'http://codeigniter/';
```
En el archivo `application\config\autoload.php` modificaremos las dos líneas siguientes como en este ejemplo:

| application\config\autoload.php |
|---------------------------------|

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

| application\config\database.php |
|---------------------------------|

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
		/* Para ver todos los articulos independientemente de su estado (Activo/inactivo) */
		// $this->db->select()->from('articulos');
		
		/* Para ver todos los articulos activos */
		// $this->db->select()->from('articulos')->where('activo',1);
		
		/* Para consultas más largas se recomienda la siguiente estructura */
		$this->db->from('articulos');
		$this->db->where('activo',1);
		$this->db->order_by('fecha','desc');

		/* Relacionar dos tablas */
		$this->db->join('usuarios','usuarios.IDusuarios=articulos.IDusuarios', 'left');

		$query=$this->db->get();
		// devuelve un objeto
		// return $query->result();
		// devuelve un array
		return $query->result_array();
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
		// Para mostrar el contenido del objeto o array
		// print_r($contenido);
		$this->load->view('portada', $contenido);
	}
}
```

Al introducir la **url** `http://codeigniter/index.php/articulos` obtendremos una muestra de los datos de la base de datos creada. 
`Array ( [articulos] => Array ( [0] => stdClass Object ( [IDarticulo] => 1 [titulo] => Mi primer articulo [articulo] => Este es mi primer articulo [fecha] => 2017-08-29 10:16:25 [IDusuario] => 0 [activo] => 1 ) [1] => stdClass Object ( [IDarticulo] => 2 [titulo] => Segundo [articulo] => Este es mi segundo articulo [fecha] => 2017-08-29 10:16:25 [IDusuario] => 0 [activo] => 1 ) ) )`

| application\views\portada.php |
|-------------------------------|

```php
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Curso PHP mi CMS</title>
  <meta name="description" content="Articulos del Blog">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style type="text/css">  </style>
</head>
<body>
  <div id="wrapper">
  	<header>
  		<h1>Blog PHP y MVC</h1>
  	</header>
  	<section id="contenedor">
  		<?php if(!isset($articulos)){ ?>
	  		<p>El blog esta vacio</p>
	  	<?php } else { 
	  		foreach ($articulos as $row){ ?>
	  			<article>		  	
					<h3><a href="<?=base_url()?>articulos/articulo/<?=$row['IDarticulo']?>"><?=$row['titulo']?></a></h3>
					<span class="fecha"><?=$row['fecha']?></span>
					<p class="articulo"><?=substr(strip_tags($row['articulo']),0,200).".."?><p>
					<p class="ver-mas"><a href="<?=base_url()?>articulos/articulo/<?=$row['IDarticulo']?>">ver más</a></p>
				</article>
			<?php }
		}; ?>
	</section>
  </div>	
</body>
</html>
```
---------------------------------------------------------------
1.2.CRUD de productos
---------------------

| application\model\articulo.php |
|--------------------------------|

```php
<?php
//la clase puede nombrarse con la primera inicial en mayúscula aunque el archivo no lo haga (pero con el mismo nombre)
class Articulo extends CI_Model {
	function get_articulos(){
		/* Para ver todos los articulos independientemente de su estado (Activo/inactivo) */
		// $this->db->select()->from('articulos');
		
		/* Para ver todos los articulos que cumplen una única condición (activos) */
		$this->db->select()->from('articulos')->where('activo',1);
		
		/* Para consultas más largas se recomienda la siguiente estructura */
		// $this->db->from('articulos');
		// $this->db->where('activo',1);
		// $this->db->order_by('fecha','desc');

		/* Relacionar dos tablas */
		// $this->db->join('usuarios','usuarios.IDusuario=articulos.IDusuario', 'left');

		$query=$this->db->get();
		// devuelve un objeto
		// return $query->result();
		// devuelve un array
		return $query->result_array();
	}
	// cargamos un artículo específico
	function get_articulo($IDarticulo){
		/* Para ver todos los articulos que cumplen más de una condición */	
		$this->db->select()->from('articulos')->where(array('activo'=>1,'IDarticulo'=>$IDarticulo));
		$query=$this->db->get();
		return $query->row_array();
	}

	// creamos artículos
	function insert_articulo($contenido){
		$this->db->insert('articulos',$contenido);
		return $this->db->insert_id();
	}
	// actualizar artículo
	function update_articulo($IDarticulo,$contenido){
		// primero hay que indicar donde actualizaremos
		$this->db->where('IDarticulo',$IDarticulo);
		// posteriormente los datos a actualizar
		$this->db->update('articulos',$contenido);
	}


	// eliminar artículo
	function eliminar_articulo($IDarticulo){
		// para eliminar primero seleccionamos la condicion a cumplir en la eliminación y luego ejecutamos delete de la tabla con la condición
		// OJO muy importante indicar antes la condición, corremos el riesgo de eliminar toda la tabla
		$this->db->where('IDarticulo', $IDarticulo);
		$this->db->delete('articulos');
	}
}
```

| application\controller\articulos.php |
|--------------------------------------|

```php
<?php
//en htaccess definimos el controlador a usar y su función mediante la url en este caso un ejemplo sería:
// dominio.es/articulos/nuevo/Articulo/1
//la clase puede nombrarse con la primera inicial en mayúscula aunque el archivo no lo haga (pero con el mismo nombre)
class Articulos extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('articulo');
	}
	// función para listar artículos
	function index(){
		// La siguiente línea se puede obviar e introducir en el constructor para no estar llamándola continuamente.
		// $this->load->model('articulo');
		$contenido['articulos']=$this->articulo->get_articulos();
		// Para mostrar el contenido del objeto o array
		// print_r($contenido);		
		$this->load->view('portada',$contenido);
	}

	// función para artículos específicos
	function articulo($IDarticulo){
		$contenido['articulo']=$this->articulo->get_articulo($IDarticulo);
		// Para mostrar el contenido del objeto o array
		// print_r($contenido);		
		$this->load->view('articulo_simple',$contenido);
	}
	// creamos un artículo nuevo (uso este nombre de función ya que en la url la llamamos así)
	function nuevoarticulo(){
		// Comprobamos si se envió el formulario comprobando si existe $_POST
		if($_POST){
			$contenido=array(
				'titulo'=>$_POST['titulo'],
				'articulo'=>$_POST['articulo'],
				'activo'=>1
				);
		// una vez recogidos los datos los pasamos al modelo "articulo" a la función "insert_articulo"
		$this->articulo->insert_articulo($contenido);
		// a continuación volvemos a la url indicada en este caso dominio.es/articulos/
		redirect(base_url().'articulos/');
		}else{
		// si no existe $_POST cargamos una vista
			$this->load->view('nuevo_articulo');
		}
	}
	// editar articulo
	function editarticulo($IDarticulo){
		$contenido['lleno']=0;
		// Comprobamos si se envió el formulario comprobando si existe $_POST
		if($_POST){
			$contenido_articulo=array(
				'titulo'=>$_POST['titulo'],
				'articulo'=>$_POST['articulo'],
				'activo'=>1 );
			$this->articulo->update_articulo($IDarticulo,$contenido_articulo);
			$contenido['lleno']=1;
		}
		$contenido['articulo']=$this->articulo->get_articulo($IDarticulo);
		// cargamos una vista
		$this->load->view('editar_articulo',$contenido);
	}
	// eliminar articulo
	function eliminarticulo($IDarticulo){
		$this->articulo->eliminar_articulo($IDarticulo);
		redirect(base_url().'articulos');
	}

}
```

| application\view\editar_articulo.php |
|--------------------------------------|

```php
<!doctype html>
<html lang="es">
<head>
  <!-- Scrip TINY MCE -->
  <!--
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  -->
  <script src="<?=base_url()?>js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <!-- Scrip TINY MCE -->
  <meta charset="utf-8">
  <title>Curso PHP mi CMS</title>
  <meta name="description" content="Articulos del Blog">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style type="text/css">  </style>
</head>
<body>
  <div id="wrapper">
    <header>
      <h1>Editar Articulo</h1>
    </header>
    <section id="contenedor">
      <? if($lleno==1){ ?>
<div class="mensaje">&#8226; Artículo actualizado correctamente</div>
    <? } ?>
    <div class="form">
      <form class="form" action="<?=base_url()?>articulos/editarticulo/<?=$articulo['IDarticulo']?>" method="post">
        <p>Título: <input name="titulo" type="text" value="<?=$articulo['titulo']?>"/></p>
        <p>Artículo: <br /><textarea name="articulo"><?=$articulo['articulo']?></textarea></p>
        <p><input type="submit" value="Editar" /></p>
      </form>
  </div>
  </section>
  </div>  
</body>
</html>
```

| application\view\nuevo_articulo.php |
|--------------------------------------|

```php
<!doctype html>
<html lang="es">
<head>
  <!-- Scrip TINY MCE -->
  <!--
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  -->
  <script src="<?=base_url()?>js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <!-- Scrip TINY MCE -->
  <meta charset="utf-8">
  <title>Curso PHP mi CMS</title>
  <meta name="description" content="Articulos del Blog">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <style type="text/css">  </style>
</head>
<body>
  <div id="wrapper">
    <header>
      <h1>Insertar Articulo</h1>
    </header>
    <section id="contenedor">
      <div class="form">
        <form class="form" action="<?=base_url()?>articulos/nuevoarticulo" method="post">
          <p>Título: <input name="titulo" type="text"/></p>
          <p>Artículo: <br /><textarea name="articulo">Aqui su texto</textarea></p>
          <p><input type="submit" value="Añadir" /></p>
        </form>
      </div>
    </section>
  </div>  
</body>
</html>
```
---------------------------------------------------------------
1.3.TINY MCE4
---------------------

El plugin [tinymce](https://www.tinymce.com/) que permiter otorgar estilos a los `<textarea></textarea>`. Para ello hay que incluir un script tal y como se indica en la [documentación del plugin](https://www.tinymce.com/download/), tal que así:
```html
<!DOCTYPE html>
<html>
<head>
  <!-- Scrip TINY MCE -->
  <!--
  <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
  -->
  <script src="<?=base_url()?>js/tinymce/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <!-- Scrip TINY MCE -->
</head>
<body>
  <textarea>Next, get a TinyMCE Cloud API key!</textarea>
</body>
</html>
```
o los archivos dentro del proyecto dentro o fuera de la carpeta web. En caso de que fuera en una carpeta externa del proyecto habrá que indicarla dentro del `.htaccess` (en este caso la carpeta **js**.

| .htaccess |
|-----------|

```php
# arranca el motor de reescritura de urls
RewriteEngine on
# para añadir carpetas externas a la web, es decir en un nivel inferior las indicamos en la siguiente línea
RewriteCond $1 !^(index\.php|images|js|robots\.txt)
# para obviar index.php en las url usamos la siguiente línea
RewriteRule ^(.*)$ index.php/$1 [L]
```
