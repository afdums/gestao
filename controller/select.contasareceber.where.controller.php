<?php

    $tabela = 'contasareceber';

    include("connection.controller.php");

    $query = "SELECT * FROM contasareceber WHERE id = $id";

    $result = $connection->query($query);

    $connection->close();

    $contasareceber = $result;

    /*while($row = $contasareceber->fetch_assoc()) {
        print_r($row);
    }*/

?>