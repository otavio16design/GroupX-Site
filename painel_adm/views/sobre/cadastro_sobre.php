<?PHP
require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$slogan = $_REQUEST['sobre_empresa'];

$sql = "insert into sobre (sob_texto)
                                values ('$slogan')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_sobre.php");

?>
