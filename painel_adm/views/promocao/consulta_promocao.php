<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$sql = "select *,
        date_format(prm_data_cadastro,'%d/%m/%Y') as data_cadastro
     from promocao";
$sql = mysqli_query($con, $sql) or die("Erro na sql!");

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
                <li class="breadcrumb-item"><a href="#">Listagem</a></li>
                <li class="breadcrumb-item active">Promoção</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Listagem de Promoção</h3>

                <!-- <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Produto</th>
                      <th>Porcentagem</th>
                      <th>Imagem</th>
                      <th>Link</th>
                      <th>Data de Cadastro</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while ($dados = mysqli_fetch_array($sql)) { ?>
                    <tr>
                        <td><?php echo $dados['prm_id'] ?></td>
                        <td><?php echo $dados['prm_produto'] ?></td>
                        <td><?php echo $dados['prm_porcentagem'] ?></td>
                        <td><?php echo $dados['prm_imagem'] ?></td>
                        <td><?php echo $dados['prm_link'] ?></td>
                        <td><?php echo $dados['data_cadastro'] ?></td>
                        <td>
                        <a style="padding: 7px;" href="delete_promocao.php?prm_id=<?php echo $dados['prm_id']; ?>" onclick="excluir_registro(event)"><i class="fa-solid fa-trash"></i></a>
                          <a style="padding: 7px;" href="form_atualizar_promocao.php?prm_id=<?php echo $dados['prm_id']; ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                      </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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

<script type="text/javascript">
  function excluir_registro() {
    if (!confirm('Deseja realmente excluir este registro?')) {
      if (window.event)
        window.event.returnValue = false;
      else
        e.preventDefault();
    }
  }
</script>
