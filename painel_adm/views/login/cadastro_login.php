<?PHP

require_once('../../conexao/banco.php');
require_once('../../seguranca.php');

$nome = $_REQUEST['nome'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

$sql = "insert into tb_login (log_nome, log_login, log_senha)
                                values ('$nome', '$login', '$senha')";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_login.php");

?>
