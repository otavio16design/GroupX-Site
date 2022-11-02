<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['id_sobre'];
$slogan = $_REQUEST['sobre_empresa'];

$sql = "update sobre set
                    sob_texto = '$slogan'
                where
                    sob_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_sobre.php");
