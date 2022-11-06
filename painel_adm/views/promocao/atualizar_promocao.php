<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['id_promocao'];
$produto = $_REQUEST['produto'];
$porcentagem = $_REQUEST['porcentagem'];
$imagem = $_REQUEST['imagem'];
$link = $_REQUEST['link'];

$tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');

$tamanhoPermitido = 5000 * 5000;

$arqName = $_FILES['txt_imagem']['name'];
$arqType = $_FILES['txt_imagem']['type'];
$arqSize = $_FILES['txt_imagem']['size'];
$arqTemp = $_FILES['txt_imagem']['tmp_name'];
$arqError = $_FILES['txt_imagem']['error'];

if ($_FILES['txt_imagem']['name'] == '') {
  header("Location: consulta_promocao.php");
} else {
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


        $sql = "update promocao set
                    prm_id = '$id',
                    prm_produto = '$produto',
                    prm_porcentagem = '$porcentagem',
                    prm_imagem = '$destino',
                    prm_link = '$link'
                where
                    prm_id = '$id'";

        mysqli_query($con, $sql) or die("Erro na sql!");

        header("Location: consulta_promocao.php");
      }
    }
  }
}
