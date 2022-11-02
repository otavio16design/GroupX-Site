<?PHP
require_once('../../seguranca.php');
require_once('../../conexao/banco.php');

$id = $_REQUEST['id_login'];
$nome = $_REQUEST['nome'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];

$sql = "update tb_login set
                    log_nome = '$nome',
                    log_login = '$login',
                    log_senha =  '$senha'
                where
                    log_codigo = '$id'";

mysqli_query($con, $sql) or die ("Erro na sql!");

header("Location: consulta_login.php");
?>
