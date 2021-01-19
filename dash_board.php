<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Dashboard</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Tiago Inovatech</a>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">

            <ul class="nav flex-column">

              <li class="nav-item">
                <a class="nav-link active" href="?pagina=dashboard">
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?pagina=pedidos">
                  Pedidos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?pagina=produtos">
                  Produtos
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="?pagina=vendas">
                  Vendas
                </a>
              </li>

            </ul>

          </div>
        </nav>


        <?php 

          if (isset($_GET['pagina'])) {
            switch ($_GET['pagina']) {
              case 'pedidos':
                echo "<h2>Pedidos</h2>";
                include 'graficos/grafico_area.php';
                break;
              
              case 'produtos':
                echo "<h2>Produtos</h2>";
                break;

              case 'vendas':
                echo "<h2>Cadastro de vendas</h2>";
                require('cadastro_vendas.php');
                break;

              case 'dashboard':
                echo "<h2>Dashboard</h2>";
                break;

              default:
                echo "<h2>Nenhuma opção escolhida</h2>";
                break;
            }
          }

        ?>

        <!-- Conteúdo -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">        

          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <!--<h1 class="h2">Dashboard</h1>-->
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
          </div>

          <!--<h2>Section title</h2>-->

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- jQuery and JS bundle w/ Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

</body></html>