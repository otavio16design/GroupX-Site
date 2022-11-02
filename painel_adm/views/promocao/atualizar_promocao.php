<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['id_promocao'];
$produto = $_REQUEST['produto'];
$porcentagem = $_REQUEST['porcentagem'];
$imagem = $_REQUEST['imagem'];
$link = $_REQUEST['link'];

$sql = "update promocao set
                    prm_id = '$id',
                    prm_produto = '$produto',
                    prm_porcentagem = '$porcentagem',
                    prm_link = '$link'
                where
                    prm_id = '$id'";

mysqli_query($con, $sql) or die("Erro na sql!");

header("Location: consulta_promocao.php");
