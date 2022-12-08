<link rel="stylesheet" href="../css/style.css">
<?php
session_start();

require_once '../conexao.php';


$sql = "SELECT * FROM usuarios 
		WHERE email = :email AND senha = :senha";

$senha = hash("sha256", $_POST['senha']);

$stmt = $con->prepare($sql);
$stmt->bindValue(':email', $_POST['email']);
$stmt->bindValue(':senha', $senha);
$stmt->execute();

$rw = $stmt->fetch(\PDO::FETCH_ASSOC);
#print $senha;
#print_r($rw);
#die();

if ($rw == null) {
	#se nao encontrou ninguem com aquele email e senha
	$_SESSION["msg"] = "<div class='input-group'>Email ou senha incorreta</div>";
	#Redireciona para a tela de login
	Header("Location: ../login/index.php");
} else {
	$_SESSION['email'] = $rw['email'];
	$_SESSION['id']    = $rw['id'];
	
	Header("Location: ../index.php");
}
