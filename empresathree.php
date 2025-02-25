<?php
require_once 'painel_adm/conexao/banco.php';
$sql = "select *, date_format(pro_data_cadastro,'%d/%m/%Y') as data_cadastro from produto where pro_empresa = 'Lumos Pets' ";
$sql = mysqli_query($con, $sql) or die("Erro na sql!");
$dados = mysqli_fetch_array($sql);
?>


<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/groupx.png" type="">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
  <title> GroupX Commerce </title>

</head>

<body class="sub_page">

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/hero-bg.jpg" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <span>
              GroupX
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  mx-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php"><span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Principal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.html">Produtos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="book.html">Contato</a>
              </li>
            </ul>
            <a class="btn" href="empresathreeen.php"> <img class='eng' src="images/bandeira-estados-unidos.png"></a>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Nossos Produtos
        </h2>
      </div>

      <ul class="filters_menu">
        <li class="active" data-filter="*">Lumos Pet</li>
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="/painel_adm/views/produto/<?php echo $dados['pro_imagem'] ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    <?php echo $dados['pro_nome'] ?>
                  </h5>
                  <p>
                    <?php echo $dados['pro_descricao'] ?>
                  </p>
                  <div class="options">
                    <h6>
                      Checkin prices
                    </h6>
                    <a href="<?php echo $dados['pro_link'] ?>">
                      <i style="color: white;" class="fa-solid fa-cart-shopping"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php while ($dados = mysqli_fetch_array($sql)) { ?>
            <div class="col-sm-6 col-lg-4 all pizza">
              <div class="box">
                <div>
                  <div class="img-box">
                    <img src="/painel_adm/views/produto/<?php echo $dados['pro_imagem'] ?>" alt="">
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php echo $dados['pro_nome'] ?>
                    </h5>
                    <p>
                      <?php echo $dados['pro_descricao'] ?>
                    </p>
                    <div class="options">
                      <h6>
                        Confira os preços
                      </h6>
                      <a href="<?php echo $dados['pro_link'] ?>">
                        <i style="color: white;" class="fa-solid fa-cart-shopping"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="btn-box">
        <a href="https://www.mercadolivre.com.br/perfil/GROUP-X">
          Ver Mais
        </a>
      </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Fale Conosco
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  (19) 98841-1595
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  gabrielmontalvao08@hotmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              GroupX
            </a>
            <p>
              Abaixo deixamos todas as nossas redes sociais para facilitar a comunicação com o nosso cliente e facilitar o acesso aos nossos produtos e promoções.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/groupxcommerce/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Horário de Funcionamento
          </h4>
          <p>
            Segunda a Sexta: 8:00 às 17:00
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->

</body>

</html>