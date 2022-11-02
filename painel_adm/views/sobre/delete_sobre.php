<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$id = $_REQUEST['sob_id'];

$sql = "delete from sobre where sob_id = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_sobre.php");

?>
