<?php
    define('ROOT_PATH', realpath(dirname(__FILE__)));
    define('BASE_URL','http://localhost/taiga/');

    session_status();
    $host = 'localhost';
    $user = 'root';
    $passwd = 'root';
    $bdd = 'db_taiga';
    $connect = mysqli_connect($host, $user, $passwd, $bdd);

if (!$connect){
    die("Error connecting to database: ".mysqli_connect_error());
}

   
?>