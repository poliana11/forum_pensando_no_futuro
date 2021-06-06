<?php return array (
  'debug' => false,
  'database' => 
  array (
    /*Conexão local
    'driver' => 'mysql',
    'host' => 'localhost',
    'port' => 3306,
    'database' => 'bdforum',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,*/

    //Conexão remota
    'driver' => 'mysql',
    'host' => 'sql10.freemysqlhosting.net',
    'port' => 3306,
    'database' => 'sql10417496',
    'username' => 'sql10417496',
    'password' => 'TsJmqPId8k',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  'url' => 'http://localhost/flarum/public',
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
);