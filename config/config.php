<?php
$witch_server = $_SERVER['SERVER_ADDR'];
switch ($witch_server)
{
    case '::1':
        define('SERVERNAME', 'localhost');
        define('USERNAME', 'rra_blok1_am1a');   
        define('PASSWORD', 'geheim');
        define('DATABASENAME', 'blok1-am1a');
        define('MAIL_PATH', 'http://www.fotosjaak.esy.es');
        break;
    case '31.170.165.37':
        define('SERVERNAME', 'mysql.hostinger.nl');
        define('USERNAME', 'u572727748_rra');
        define('PASSWORD', 'Ezekkthoes1');
        define('DATABASENAME', 'u572727748_test');
        define('MAIL_PATH', 'http://www.fotosjaak.esy.es');
        break;
}
?>