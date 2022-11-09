<!-- <!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0,
            maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Painel Administrativo - Login</title>
  <link rel="stylesheet" href="View/style.css">
</head>

<style>
  /*
padrão
*/

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  }

  body,
  html {
    height: 100%;
  }

  /*
Login
*/

  .login-container {
    display: flex;
    width: 100%;
    align-items: center;
    align-content: center;
    height: 100%;
    background-image: linear-gradient(#000000, #850000);
    padding: 0 2%;
  }

  .login {
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
    background-image: linear-gradient(#ff0000, #000000);
    padding: 100px 20px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.5);
    border-radius: 15px;
  }

  .form {
    width: 100%;
    display: flex;
    flex-wrap: wrap;
  }

  .login h1 {
    width: 100%;
    text-align: center;
    color: #ffffff;
    margin: 10px 0;
    font-size: 30px;
    font-weight: 900;
    text-transform: uppercase;
  }

  .form .input {
    width: 100%;
    padding: 10px;
    background-color: #000000;
    margin: 10px 0;
    outline: none;
    border: none;
    color: #ffffff;
    text-align: center;
    font-size: 15px;
    border-radius: 8px;
  }

  .btn {
    width: 100%;
    background-color: #858585;
    outline: none;
    border: none;
    padding: 10px;
    font-size: 15px;
    border-radius: 8px;
  }
</style>

<body>

  <section class="login-container">
    <div class="login">
      <h1>Faça Login</h1>
      <form method="POST" action="/painel_adm/validacao.php" class="form">

        <label for="usuario"></label>
        <input type="text" name="txt_usuario" class="input" id="usuario" placeholder="Insira seu usuário..">

        <label for="senha"></label>
        <input type="password" name="txt_senha" class="input" id="senha" placeholder="Insira sua senha...">

        <input type="submit" class="btn" value="Acessar" name="logar">
      </form>
    </div>
  </section>

</body>

</html> -->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Painel Administrativo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="/painel_adm/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/painel_adm/css/util.css">
	<link rel="stylesheet" type="text/css" href="/painel_adm/css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('/painel_adm/images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="POST" action="/painel_adm/validacao.php">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="txt_usuario" id="usuario" placeholder="Usuário">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" id="senha" name="txt_senha" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<!-- <div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div class="container-login100-form-btn">
						<input type="submit" class="btn" value="Acessar" name="logar" class="login100-form-btn">
						</input>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
