<?php

$witch_server = $_SERVER['SERVER_NAME'];
//echo $witch_server;exit();
switch ($witch_server)
{
    case 'localhost':
        define('SERVERNAME', 'localhost');
        define('USERNAME', 'rra_blok1_am1a');
        define('PASSWORD', 'geheim');
        define('DATABASENAME', 'blok1-am1a');
        define('MAIL_PATH', 'http://localhost\2014-2015\inlogregistratiesysteem');
        break;
    case 'www.fotosjaak.esy.es':
        define('SERVERNAME', 'mysql.hostinger.nl');
        define('USERNAME', 'u572727748_rra');
        define('PASSWORD', 'Ezekkthoes1');
        define('DATABASENAME', 'u572727748_test');
        define('MAIL_PATH', 'http://www.fotosjaak.esy.es');
        break;
    case 'fotosjaak.esy.es':
        define('SERVERNAME', 'mysql.hostinger.nl');
        define('USERNAME', 'u572727748_rra');
        define('PASSWORD', 'Ezekkthoes1');
        define('DATABASENAME', 'u572727748_test');
        define('MAIL_PATH', 'http://www.fotosjaak.esy.es');
        break;
}
?>