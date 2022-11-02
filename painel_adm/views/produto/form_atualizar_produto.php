<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['pro_id'];

$sql = "select * from produto where pro_id = '$id'";
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
                <li class="breadcrumb-item"><a href="#">Produto</a></li>
                <li class="breadcrumb-item active">Atualizar</li>
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
                  <h3 class="card-title">Produto</h3>
                </div>
                <form method="post" action="atualizar_produto.php">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="col-12  mb-3">

                        <input type="text" name="id_produto" hidden value="<?php echo $dados['pro_id']?>">

                        <label for="exampleInputEmail1">Produto</label>
                        <input type="text" class="form-control" value="<?php echo $dados['pro_nome'] ?>" name="produto" placeholder="Insira o nome">
                      </div>
                      <div class="col-12  mb-3">
                        <label for="exampleInputEmail1">Descrição do Produto</label>
                        <input type="text" class="form-control" value="<?php echo $dados['pro_descricao'] ?>" name="descricao" placeholder="Insira a descrição">
                      </div>
                      <div class="col-12  mb-3">
                        <label for="exampleInputFile">Imagem</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="imagem" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label">Selecionar arquivo</label>
                          </div>
                        </div>
                      </div>
                      <div class="col-12  mb-3">
                        <label>Link de Compra</label>
                        <input type="text" class="form-control" value="<?php echo $dados['pro_link'] ?>" name="link" placeholder="Insira o link">
                      </div>
                    </div>

                    <div class="col-12  mb-3">
                        <label>Empresa</label>
                        <select class="form-control" name="empresa">
                          <option <?php if($dados['pro_empresa'] == "Fixa Artigos Personalizados") {echo "selected";} ?>  value="Fixa Artigos Personalizados">Fixa Artigos Personalizados</option>
                          <option <?php if($dados['pro_empresa'] == "TurboX Parts") {echo "selected";} ?> value="TurboX Parts">TurboX Parts</option>
                          <option <?php if($dados['pro_empresa'] == "Lumos Pets") {echo "selected";} ?> value="Lumos Pets">Lumos Pets</option>
                        </select>
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
