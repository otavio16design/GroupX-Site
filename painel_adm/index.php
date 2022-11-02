<!doctype html>
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

</html>
