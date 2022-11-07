<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['id_produto'];
$produto = $_REQUEST['produto'];
$descricao = $_REQUEST['descricao'];
$link = $_REQUEST['link'];
$empresa = $_REQUEST['empresa'];

$tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');

$tamanhoPermitido = 5000 * 5000;

$arqName = $_FILES['txt_imagem']['name'];
$arqType = $_FILES['txt_imagem']['type'];
$arqSize = $_FILES['txt_imagem']['size'];
$arqTemp = $_FILES['txt_imagem']['tmp_name'];
$arqError = $_FILES['txt_imagem']['error'];

if ($_FILES['txt_imagem']['name'] == '') {

  $sql = "update produto set
  pro_id = '$id',
  pro_nome = '$produto',
  pro_descricao = '$descricao',
  pro_link = '$link',
  pro_empresa = '$empresa'
where
  pro_id = '$id'";

  mysqli_query($con, $sql) or die("Erro na sql!");

  header("Location: consulta_produto.php");
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

        $sql = "update produto set
                    pro_id = '$id',
                    pro_nome = '$produto',
                    pro_descricao = '$descricao',
                    pro_link = '$link',
                    pro_imagem = '$destino',
                    pro_empresa = '$empresa'
                where
                    pro_id = '$id'";

        mysqli_query($con, $sql) or die("Erro na sql!");

        header("Location: consulta_produto.php");
      }
    }
  }
}
