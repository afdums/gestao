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

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
          </div>

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-success text-uppercase mb-1">Contas a receber</div>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">hoje</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">restante do mês</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">em atraso</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-danger shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="text-xl font-weight-bold text-danger text-uppercase mb-1">Contas a pagar</div>
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">hoje</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">restante do mês</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">em atraso</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-danger"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-6 col-md-12 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-primary text-uppercase mb-1">Saldos bancários</div>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">A pagar hoje</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">A pagar restante do mês</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">A pagar em atraso</div>
                      <div class="h6 mb-0 font-weight-bold text-gray-800">$215,000</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
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
