<?php
    define('HOST','localhost:3307');
    define('USER','root');
    define('PASSWORD','usbw');
    define('DATABASE','gestao');

    $connection = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Connect failed');

?>