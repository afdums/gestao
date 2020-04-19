<?php
    session_start();
    include('../controller/auth.controller.php');

    if (empty($_POST['id']))
      $id = 0; //novo
    else
      $id = $_POST['id'];

    if($id != 0){
      include('../controller/select.contasareceber.where.controller.php');
      $conta = $contasareceber->fetch_assoc();
    } else {
      $conta = null;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>

  <?php include("head.php"); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php
        include("menu.view.php");
    ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <?php include("cabecalho.view.php") ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php if($id == 0) echo("Novo lançamento"); else echo("Alterando lançamento"); ?></h1>
          </div>

          <form action="../controller/update.contasareceber.controller.php" method="POST">
            <input type="hidden" class="form-control" name="id" placeholder="Id" value="<?php echo($conta['id']); ?>">

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Descrição</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="descricao" placeholder="Descrição" value="<?php echo($conta['descricao']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Nota Fiscal</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="nota_fiscal" placeholder="Nota Fiscal" value="<?php echo($conta['nota_fiscal']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Conta</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="idconta" placeholder="Conta" value="<?php echo($conta['idconta']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Cliente</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="idcliente" placeholder="Cliente" value="<?php echo($conta['idcliente']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Data de Emissão</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="data_emissao" placeholder="Data de Emissão" value="<?php echo($conta['data_emissao']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Data de Vencimento</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="data_vencimento" placeholder="Data de Vencimento" value="<?php echo($conta['data_vencimento']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Valor</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="valor" placeholder="Valor" value="<?php echo($conta['valor']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Recebido</label>
              <div class="col-sm-10">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="recebido" name="recebido" <?php if($conta['recebido'] == 1) echo "checked"; ?> >
                </div>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Data de Recebimento</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" name="data_recebimento" placeholder="Data de Recebimento" value="<?php echo($conta['data_recebimento']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Desconto (-)</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="desconto" placeholder="Desconto" value="<?php echo($conta['desconto']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Taxas (-)</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="taxas" placeholder="Taxas" value="<?php echo($conta['taxas']); ?>">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Multa (+)</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" name="multa" placeholder="Multa" value="<?php echo($conta['multa']); ?>">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Valor Recebido</label>
              <div class="col-sm-10">
                <input type="input" class="form-control" id="valor_recebido" name="valor_recebido" data-mask="(00) 0000-0000" data-mask-selectonfocus="true" placeholder="Valor Recebido" value="<?php echo($conta['valor_recebido']); ?>">
              </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-3">
                <button type="submit" class="btn btn-success btn-block">Salvar</button>
              </div>
              <div class="col-sm-3">
                <a class="btn btn-warning btn-block" href="cadastro.contasareceber.view.php">Cancelar</a>
              </div>
            </div>
          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php
        include("rodape.view.php");
      ?>

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php
    include("modal.logout.view.php");
    include("rodape.script.view.php");
  ?>

  <script>
    $(document).ready(function(){
        $('#valor_recebido').mask('(00) 0000-0000');
    });
  </script>

</body>

</html>
