<?php

    $tabela = 'contasareceber';

    include("connection.controller.php");

    $query = "SELECT cr.id,
                cr.data_vencimento,
                c.nome,
                cr.descricao,
                cr.nota_fiscal,
                cr.valor,
                cr.recebido
                FROM contasareceber AS cr, cliente AS c WHERE cr.idcliente = c.id";

    //echo $query;

    $result = $connection->query($query);

    $connection->close();

    $contasareceber = $result;

    /*while($row = $contasareceber->fetch_assoc()) {
        print_r($row);
    }*/

?>