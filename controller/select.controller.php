<?php

    include("connection.controller.php");

    $query = "SELECT * FROM " . $tabela;

    $result = $connection->query($query);

    $connection->close();

?>