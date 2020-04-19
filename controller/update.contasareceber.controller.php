<?php
    session_start();
    include('../controller/auth.controller.php');

    if (empty($_POST['id'])) {
        header("../cadastro.contasareceber.view.php");
    }
    $recebido = 0;
    if(isset($_POST['recebido']))
        $recebido = 1;

    $id = $_POST['id'];
    $descricao = $_POST['descricao'];
    $nota_fiscal = $_POST['nota_fiscal'];
    $idconta = $_POST['idconta'];
    $idcliente = $_POST['idcliente'];
    $data_emissao = $_POST['data_emissao'];
    $data_vencimento = $_POST['data_vencimento'];
    $valor = $_POST['valor'];
    $data_recebimento = $_POST['data_recebimento'];
    $desconto = $_POST['desconto'];
    $taxas = $_POST['taxas'];
    $multa = $_POST['multa'];
    $valor_recebido = $_POST['valor_recebido'];

    include("connection.controller.php");

    if($id == 0){
        $query = "INSERT INTO contasareceber(descricao,nota_fiscal,idconta,idcliente,data_emissao,
                    data_vencimento,valor,recebido,data_recebimento,desconto,taxas,multa,valor_recebido)
                    VALUES ('$descricao','$nota_fiscal','$idconta','$idcliente','$data_emissao',
                    '$data_vencimento','$valor','$recebido','$data_recebimento','$desconto','$taxas','$multa','$valor_recebido')";
    }else{
        $query = "UPDATE contasareceber SET descricao='$descricao', nota_fiscal='$nota_fiscal',idconta='$idconta',idcliente='$idcliente',
                    data_emissao='$data_emissao',data_vencimento='$data_vencimento',valor='$valor',recebido='$recebido',data_recebimento='$data_recebimento',
                    desconto='$desconto',taxas='$taxas',multa='$multa',valor_recebido='$valor_recebido' WHERE id='$id'";
    }

    if ($connection->query($query) === TRUE) {
        $_SESSION['retorno_edit'] = "Registro salvo com sucesso";
        $_SESSION['retorno_cor'] = "success";
    } else {
        $_SESSION['retorno_edit'] = "Erro ao salvar registro: " . $connection->error;
        $_SESSION['retorno_cor'] = "danger";
    }

    $connection->close();

    header('Location: ../view/cadastro.contasareceber.view.php');

    exit();

?>