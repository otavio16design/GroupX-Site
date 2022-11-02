<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['pro_id'];

$sql = "delete from produto where pro_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_produto.php");

?>
