<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['id_produto'];
$produto = $_REQUEST['produto'];
$descricao = $_REQUEST['descricao'];
$imagem = $_REQUEST['imagem'];
$link = $_REQUEST['link'];
$empresa = $_REQUEST['empresa'];

$sql = "update produto set
                    pro_id = '$id',
                    pro_nome = '$produto',
                    pro_descricao = '$descricao',
                    pro_link = '$link',
                    pro_empresa = '$empresa',
                where
                    pro_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_produto.php");
