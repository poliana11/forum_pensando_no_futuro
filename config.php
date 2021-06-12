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
    'host' => 'remotemysql.com',
    'port' => 3306,
    'database' => 'WfFEnVdGly',
    'username' => 'WfFEnVdGly',
    'password' => 'm7FEMVBpGN',
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'strict' => false,
    'engine' => 'InnoDB',
    'prefix_indexes' => true,
  ),
  //'url' => 'http://localhost/flarum/public',
  'url' => 'https://forum-pensando-no-futuro.herokuapp.com/public',
  //'url' => 'https://git.heroku.com/forum-pensando-no-futuro.git',  
  'paths' => 
  array (
    'api' => 'api',
    'admin' => 'admin',
  ),
);
