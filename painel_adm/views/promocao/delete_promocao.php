<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['prm_id'];

$sql = "delete from promocao where prm_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_promocao.php");

?>
