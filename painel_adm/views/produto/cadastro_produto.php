<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$produto = $_REQUEST['produto'];
$descricao = $_REQUEST['descricao'];
$link = $_REQUEST['link'];
$empresa = $_REQUEST['empresa'];

// Lista de tipos de arquivos permitidos
$tiposPermitidos = array('image/gif', 'image/jpg', 'image/jpeg', 'image/pjpeg', 'image/png');

// Tamanho máximo (em bytes)
$tamanhoPermitido = 5000 * 5000;

// O nome original do arquivo no computador do usuário
$arqName = $_FILES['txt_imagem']['name'];

// O tipo mime do arquivo. Um exemplo pode ser "image/gif"
$arqType = $_FILES['txt_imagem']['type'];

// O tamanho, em bytes, do arquivo
$arqSize = $_FILES['txt_imagem']['size'];

// O nome temporário do arquivo, como foi guardado no servidor
$arqTemp = $_FILES['txt_imagem']['tmp_name'];

// O código de erro associado a este upload de arquivo
$arqError = $_FILES['txt_imagem']['error'];

if ($arqError == 0) {
  // Verifica o tipo de arquivo enviado
  if (array_search($arqType, $tiposPermitidos) === false) {
    echo 'O tipo de arquivo enviado é inválido!';
    // Verifica o tamanho do arquivo enviado
  } else if ($arqSize > $tamanhoPermitido) {
    echo 'O tamanho do arquivo enviado é maior que o limite!';
    // Não houveram erros, move o arquivo
  } else {
    $pasta = FOTO_DIRETORIO;
    // Pega a extensão do arquivo enviado
    $extensao = strtolower(end(explode('.', $arqName)));
    // Define o novo nome do arquivo
    $nome = time() . '.' . $extensao;
    $destino = $pasta . $nome;
    $upload = move_uploaded_file($arqTemp, $pasta . $nome);

    // Verifica se o arquivo foi movido com sucesso
    if ($upload == true) {
      // Cria uma query MySQL


      $sql = "insert into produto (pro_nome, pro_descricao, pro_link, pro_imagem, pro_empresa)
            values ('$produto', '$descricao', '$link', '$destino' , '$empresa')";


      $query = mysqli_query($con, $sql) or die("Erro na sql!");


      if ($query == true) {
        echo 'Produto inserido com sucesso!';
        header("Location: consulta_produto.php");
      }
    }
  }
} else {
  echo 'Ocorreu algum erro com o upload, por favor tente novamente!';
}

?>
