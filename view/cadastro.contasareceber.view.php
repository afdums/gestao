<?php
    session_start();
    include('../controller/auth.controller.php');
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

          <?php
            if(isset($_SESSION['retorno_edit'])) {
              $mensagem = $_SESSION['retorno_edit'];
              $cor = $_SESSION['retorno_cor'];
          ?>
            <div class="col-lg-12 mb-1">
              <div class="card bg-<?php echo($cor); ?> text-white shadow">
                <div class="card-body">
                  <div class="text-center">
                    <h1 class="h6 text-white mb-1">
                      <?php echo($mensagem) ?>
                    </h1>
                  </div>                      
                </div>
              </div>
            </div>
            <hr>
          <?php
            }
            unset($_SESSION['retorno_edit']);
            unset($_SESSION['retorno_cor']);
          ?>

          <div class="card shadow mb-4">
            <div class="card-header py-2">
              <h6 class="m-0 font-weight-bold text-primary">Contas a Receber</h6>
            </div>
              <div class="card-header py-2">
              <form method="POST" action="edita.contasareceber.view.php">                
                <button class="btn btn-primary">Novo lançamento</button>
              </form> 
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Vencimento</th>
                      <th>Cliente</th>
                      <th>Descrição</th>
                      <th>Nota Fiscal</th>
                      <th>Valor</th>
                      <th>Recebido</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Vencimento</th>
                      <th>Cliente</th>
                      <th>Descrição</th>
                      <th>Nota Fiscal</th>
                      <th>Valor</th>
                      <th>Recebido</th>
                      <th>Ações</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                      include("../controller/select.contasareceber.controller.php");
                      if ($contasareceber->num_rows > 0) {
                        while($row = $contasareceber->fetch_assoc()) {
                    ?>
                        <tr>
                          <td><?php echo $row["data_vencimento"]; ?></td>
                          <td><?php echo $row["nome"]; ?></td>
                          <td><?php echo $row["descricao"]; ?></td>
                          <td><?php echo $row["nota_fiscal"]; ?></td>
                          <td><?php echo $row["valor"]; ?></td>
                          <td><?php if($row["recebido"] == 0) echo "Não"; else echo "Sim";?></td>
                          <td>   
                            <form method="POST" action="edita.contasareceber.view.php">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <button class="btn btn-primary">Alterar</button>
                            </form>                       
                          </td>
                        </tr>
                    <?php
                        }
                      }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

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

</body>

</html>
