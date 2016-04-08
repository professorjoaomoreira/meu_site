<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "mysql8.000webhost.com";
$user = "a9665300_cad";
$pass = "moreira300103";
$banco = "a9665300_cadastr";
$conexao = mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db ($banco) or die (mysql_error());
?>
<html>

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

<body>	
<?php
$email=$_POST['email'];
$senha=$_POST['senha'];
$sql = mysql_query ("SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'") or die (mysql_error());
$row = mysql_num_rows($sql);
if($row > 0) {
session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['senha']=$_POST['senha'];
echo "<center><h1>Você foi autenticado com sucesso!Aguarde um instante.</h1></center>";
echo "<script>loginsucessfully()</script>";




} else {
echo "<center><h1>Nome de Usuario ou senha invalidos!Aguarde um instante</h1></center>";
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