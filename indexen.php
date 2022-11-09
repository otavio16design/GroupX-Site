<?php
require_once 'painel_adm/conexao/banco.php';
$sql = "select *, date_format(prm_data_cadastro,'%d/%m/%Y') as data_cadastro from promocao";
$sql = mysqli_query($con, $sql) or die("Erro na sql!");
$dados = mysqli_fetch_array($sql);

$sql2 = "select *, date_format(sob_data_cadastro,'%d/%m/%Y') as data_cadastro from sobre ORDER BY 2";
$sql2 = mysqli_query($con, $sql2) or die("Erro na sql!");
$dados2 = mysqli_fetch_array($sql2);

use Statickidz\GoogleTranslate;

require_once __DIR__ . '/vendor/autoload.php';

$tr = new GoogleTranslate();

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
  <link rel="shortcut icon" href="images/logo_groupx_responsivo.png" type="">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ==" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <title> GroupX Commerce </title>

</head>

<body>

  <div class="hero_area">
    <div class="bg-box">
      <img src="images/logo_groupx_responsivo.png" alt="">
    </div>
    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.php">
            <img src="images/Logo_GroupX-branco.png">
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
                <a style="font-weight: bold;" class="nav-link" href="indexen.php">Home</a>
              </li>
              <li class="nav-item">
                <a style="font-weight: bold;" class="nav-link" href="#produto">Products</a>
              </li>
              <li class="nav-item">
                <a style="font-weight: bold;" class="nav-link" href="#sobre">About</a>
              </li>
              <li class="nav-item">
                <a style="font-weight: bold;" class="nav-link" href="#contato">Contact</a>
              </li>
            </ul>
            <a class="btn" href="indexen.php"> <img class='eng' src="images/bandeira-estados-unidos.png"></a>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-7 col-lg-6 ">
                  <div class="detail-box">
                    <h1>
                      GroupX Commerce
                    </h1>
                    <p style="font-size: 17px !important;">
                      GroupX Commerce emerged in 2019 and works with 100% online sales,
                      with greater emphasis on sales of personalized stickers, in addition to PET products and auto parts for prepared cars.
                    </p>
                    <a href="https://api.whatsapp.com/send?phone=5519988752909&text=Ol%C3%A1%2C%20vem%20pelo%20site!" style="padding: 10px; width: 55px; padding-left: 3%; background-color: green !important;" class="btn1">
                      <img src="/images/whatsapp.png" width="25px">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- offer section -->

  <section class="offer_section layout_padding-bottom">
    <div id="produto" class="offer_container">
      <div class="container ">
        <div class="row">

          <?php if ($dados !== null) { ?>
            <div class="col-md-6 ">
              <div class="box ">
                <div class="img-box">
                  <img src="/painel_adm/views/promocao/<?php echo $dados['prm_imagem'] ?>" alt="">
                </div>
                <div class="detail-box">

                  <h5> <?php echo $tr->translate('pt', 'en', $dados['prm_produto']), PHP_EOL ?> </h5>
                  <h6><span><?php echo $tr->translate('pt', 'en', $dados['prm_porcentagem']), PHP_EOL ?></span> Off</h6>
                  <a target="_blank" href="<?php echo $dados['prm_link'] ?>">
                    Buy Now
                    <i class="fa-solid fa-cart-shopping"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>

          <?php while ($dados = mysqli_fetch_array($sql)) { ?>
            <div class="col-md-6 ">
              <div class="box ">
                <div class="img-box">
                  <img src="/painel_adm/views/promocao/<?php echo $dados['prm_imagem'] ?>" alt="">
                </div>
                <div class="detail-box">
                  <h5> <?php echo $tr->translate('pt', 'en', $dados['prm_produto']), PHP_EOL ?> </h5>
                  <h6><span><?php echo $tr->translate('pt', 'en', $dados['prm_porcentagem']), PHP_EOL ?></span> Off</h6>
                  <a target="_blank" href="<?php echo $dados['prm_link'] ?>">
                    Buy Now
                    <i class="fa-solid fa-cart-shopping"></i>
                  </a>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>

  <!-- end offer section -->

  <!-- food section -->

  <section class="food_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our Products
        </h2>
      </div>

      <ul class="filters_menu">
        <!-- <li class="active" data-filter="*">All</li> -->
      </ul>

      <div class="filters-content">
        <div class="row grid">
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/fixa.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Fixa Personalizados
                  </h5>
                  <p>
                    Kit with 2 or 3 frames with great diversity, decorative plates with different images, aluminum dowels.
                  </p>
                  <div class="options">
                    <h6>
                      Check prices and products.
                    </h6>
                    <a href="empresaone.php">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all burger">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/TurboX Parts.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    TurboX Parts
                  </h5>
                  <p>
                    Carbon fiber decals, fuel flutes, bushing set, clutch fork and pair of mirrors. <br><br>
                  </p>
                  <div class="options">
                    <h6>
                      Check prices and products.
                    </h6>
                    <a href="empresatwo.php">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 all pizza">
            <div class="box">
              <div>
                <div class="img-box">
                  <img src="images/lumos.jpeg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Lumos Pet
                  </h5>
                  <p>
                    Pet items such as toy rope, collection shovel of different shapes and versatile drinking fountain for dogs and cats.
                  </p>
                  <div class="options">
                    <h6>
                      Check prices and products.
                    </h6>
                    <a href="empresathree.php">
                      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 456.029 456.029" style="enable-background:new 0 0 456.029 456.029;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M345.6,338.862c-29.184,0-53.248,23.552-53.248,53.248c0,29.184,23.552,53.248,53.248,53.248
                         c29.184,0,53.248-23.552,53.248-53.248C398.336,362.926,374.784,338.862,345.6,338.862z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M439.296,84.91c-1.024,0-2.56-0.512-4.096-0.512H112.64l-5.12-34.304C104.448,27.566,84.992,10.67,61.952,10.67H20.48
                         C9.216,10.67,0,19.886,0,31.15c0,11.264,9.216,20.48,20.48,20.48h41.472c2.56,0,4.608,2.048,5.12,4.608l31.744,216.064
                         c4.096,27.136,27.648,47.616,55.296,47.616h212.992c26.624,0,49.664-18.944,55.296-45.056l33.28-166.4
                         C457.728,97.71,450.56,86.958,439.296,84.91z" />
                          </g>
                        </g>
                        <g>
                          <g>
                            <path d="M215.04,389.55c-1.024-28.16-24.576-50.688-52.736-50.688c-29.696,1.536-52.224,26.112-51.2,55.296
                         c1.024,28.16,24.064,50.688,52.224,50.688h1.024C193.536,443.31,216.576,418.734,215.04,389.55z" />
                          </g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-box">
      <a href="https://shopee.com.br/groupxcommerce#product_list">
        See More
      </a>
    </div>
    </div>
  </section>

  <!-- end food section -->

  <!-- about section -->
  <div style="padding-bottom: 50px;" id="sobre"></div>
  <section class="about_section layout_padding">
    <div class="container  ">

      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="images/about.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About the Company
              </h2>
            </div>
            <p><?php echo $tr->translate('pt', 'en', $dados2['sob_texto']), PHP_EOL ?></p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- book section -->
  <section id="contato" class="book_section layout_padding">
    <div class="container" style="padding-left: 20%;">
      <div class="heading_container">
        <h2>
          Contact us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-8">
          <div class="form_container">
            <form action="">
              <div>
                <input type="text" class="form-control" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" class="form-control" placeholder="Description" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Your e-mail" />
              </div>
              <div>
                <select class="form-control nice-select wide">
                  <option value="" disabled selected>
                    How many persons?
                  </option>
                  <option value="1">
                    Fixa Personalizados
                  </option>
                  <option value="2">
                    TurboX Parts
                  </option>
                  <option value="3">
                    Lumos Pet
                  </option>
                  <option value="4">
                    GroupX Commerce
                  </option>
                </select>
              </div>
              <div>
                <input type="date" class="form-control">
              </div>
              <div class="btn_box">
                <button>
                  Submit
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
        </div>
      </div>
    </div>
  </section>
  <!-- end book section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contact Us
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  (19) 98875-2909
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
              <img src="/images/Logo_GroupX-branco.png" alt="">
            </a>
            <p>
              Below we leave our social networks to facilitate communication with our client and facilitate the
              access to our products and promotions.
            </p>
            <div class="footer_social">
              <a href="https://api.whatsapp.com/send?phone=5519988752909&text=Ol%C3%A1%2C%20vem%20pelo%20site!">
                <i class="fa fa-whatsapp" aria-hidden="true"></i>
              </a>
              <a href="https://www.instagram.com/groupxcommerce/">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Hours of Operation
          </h4>
          <p>
            Monday to Friday: 8:00 at 17:00
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