<?php

define('BD_HOST', 'localhost');
define('BD_NAME', 'incommong');
define('BD_USER', 'root');
define('BD_PASS', '');
define('RAIZ_APP', __DIR__);
define('RUTA_APP', __DIR__);
define('RUTA_IMGS', RUTA_APP.'img/');
define('RUTA_CSS', RUTA_APP.'css/');
define('RUTA_JS', RUTA_APP.'js/');
define('INSTALADA', true );

if (! INSTALADA) {
  echo "La aplicación no está configurada";
  exit();
}

ini_set('default_charset', 'UTF-8');
setLocale(LC_ALL, 'es_ES.UTF.8');

spl_autoload_register(function ($class) {
    $prefix = 'AW\\proyecto\\estatica\\includes';
    $base_dir = __DIR__ . '/';
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        return;
    }
    $relative_class = substr($class, $len);
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
$app = \AW\proyecto\estatica\includes\Aplicacion::getSingleton();
$app->init(array('host'=>BD_HOST, 'bd'=>BD_NAME, 'user'=>BD_USER, 'pass'=>BD_PASS), RUTA_APP, RAIZ_APP);