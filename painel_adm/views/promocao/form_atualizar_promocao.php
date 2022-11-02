<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['prm_id'];

$sql = "select * from promocao where prm_id = '$id'";
$sql = mysqli_query($con, $sql) or die("Erro na sql!");
$dados = mysqli_fetch_array($sql);
?>

<!DOCTYPE html>
<html lang="en">

<?php include('../../includes/views_components/head.html') ?>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">

    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__wobble" src="../../../dist/img/logo_groupx_responsivo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php include('../../includes/views_components/navbar.html') ?>
    <?php include('../../includes/views_components/sidebar.html') ?>

    <div class="content-wrapper">
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Painel Administrativo</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Promoção</a></li>
                <li class="breadcrumb-item active">Editar</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Promoção</h3>
                </div>
                <form method="post" action="atualizar_promocao.php">
                  <div class="card-body">
                    <div class="form-group">
                      <input type="text" hidden  value="<?php echo $dados['prm_id'] ?>" name="id_promocao">
                      <div class="col-12  mb-3">
                        <label >Produto</label>
                        <input type="text" class="form-control" value="<?php echo $dados['prm_produto'] ?>" name="produto" placeholder="Insira o produto">
                      </div>
                      <div class="col-12  mb-3">
                        <label >% Off</label>
                        <input type="number" class="form-control" name="porcentagem"  value="<?php echo $dados['prm_porcentagem'] ?>" placeholder="Insira a % off">
                      </div>
                      <div class="col-12  mb-3">
                        <label for="exampleInputFile">Imagem</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" name="imagem" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Selecionar arquivo</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-12  mb-3">
                        <label >Link de Compra</label>
                        <input type="text" class="form-control"  value="<?php echo $dados['prm_link'] ?>"  name="link" placeholder="Insira o o link de compra">
                      </div>
                    </div>

                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </section>
    </div>

    <footer class="main-footer">
      <strong>Copyright &copy; 2022 <a href="https://www.instagram.com//">Otávio Montalvão</a>.</strong>
      Direitos reservados.
      <div class="float-right d-none d-sm-inline-block">
        <b>Versão</b> 1.0.0
      </div>
    </footer>
  </div>

  <script src="../../plugins/jquery/jquery.min.js"></script>
  <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <script src="../../dist/js/adminlte.js"></script>
  <script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
  <script src="../../plugins/raphael/raphael.min.js"></script>
  <script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
  <script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
  <script src="../../plugins/chart.js/Chart.min.js"></script>
  <script src="../../dist/js/demo.js"></script>
  <script src="../../dist/js/pages/dashboard2.js"></script>
</body>

</html>
