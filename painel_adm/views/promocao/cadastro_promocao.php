<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$produto = $_REQUEST['produto'];
$porcentagem = $_REQUEST['porcentagem'];
$link = $_REQUEST['link'];

$tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');

$tamanhoPermitido = 5000 * 5000;
$arqName = $_FILES['txt_imagem']['name'];
$arqType = $_FILES['txt_imagem']['type'];
$arqSize = $_FILES['txt_imagem']['size'];
$arqTemp = $_FILES['txt_imagem']['tmp_name'];
$arqError = $_FILES['txt_imagem']['error'];

if ($arqError == 0) {
  if (array_search($arqType, $tiposPermitidos) === false) {
    echo 'O tipo de arquivo enviado é inválido!';
  } else if ($arqSize > $tamanhoPermitido) {
    echo 'O tamanho do arquivo enviado é maior que o limite!';
  } else {
    $pasta = 'fotos/';
    $extensao = strtolower(end(explode('.', $arqName)));
    $nome = time() . '.' . $extensao;
    $destino = $pasta . $nome;
    $upload = move_uploaded_file($arqTemp, $pasta . $nome);

    if ($upload == true) {


      $sql = "insert into promocao (prm_produto, prm_porcentagem, prm_link, prm_imagem)
                                values ('$produto', '$porcentagem', '$link', '$destino' )";

      $query = mysqli_query($con, $sql) or die("Erro na sql!");


      if ($query == true) {
        echo 'Promoção inserida com sucesso!';
        header("Location: consulta_promocao.php");
      }
    }
  }
} else {
  echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
}

?>
