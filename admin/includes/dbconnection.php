<?php 
// DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','odmsdb');
// Establish database connection.

// DB credentials.
define('DB_HOST','db4free.net');
define('DB_USER','mdakamm94');
define('DB_PASS','Musa@1994');
define('DB_NAME','m9419mdakamm');

try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>