<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "mysql8.000webhost.com";
$user = "a9665300_cad";
$pass = "moreira300103";
$banco = "a9665300_cadastr";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco) or die(mysql_error());
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
function loginsucessfully() {
setTimeout("window.location='painel.php'", 5000);
}
function loginfailed() {
setTimeout ("window.location='login.php'", 10000);
}
</script>
</head>
<body>/
<?php
$nome=$_POST['nome']; 
$sobrenome=$_POST['sobrenome'];
$pais=$_POST['pais'];
$estados=$_POST['estados'];
$cidades=$_POST['cidades'];
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query("INSERT INTO usuario (nome, sobrenome, pais, estados, cidades, email, senha)
VALUES('$nome', '$sobrenome', '$pais', '$estados', '$cidades', '$email', '$senha' )");
echo "<center><h1>cadastro efetuado com sucesso!</h1></center>";
$row = mysql_num_rows($sql);
if($row > 0) {
session_start();
$_SESSION['nome']=$_POST['nome'];
$_SESSION['senha']=$_POST['senha'];
echo "<center>nao sei porque nao apareceu esta mensagem e sim a outra.</center>";
echo "<script>loginsucessfully()</script>";
} else {
echo "<center><h3>Obrigado por fazer o cadastro, aguarde 10 segundos, e seras encaminhado para o login, onde vai acessar os cursos gratuitos...</h3></center>";
echo "<script>loginfailed()</script>";
}
?>

<div class="container">
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:90%">
      90%
    </div>
  </div>
</div>

</body>
</html>