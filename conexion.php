<?php
//datos para la coexion hacia la base
define('SERVENAME', 'localhost');
define('USERNAME', 'root');
define('PASSWORD', '');
define('DBNAME', 'cart');

//creación de la conexión a la base de datos con mysqli
$conn=new mysqli(SERVENAME, USERNAME, PASSWORD, DBNAME);

