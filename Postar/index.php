<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Publicar</title>
</head>


<?php
session_start();
require_once '../conexao.php';


#Redireciona par ao login, caso nao esteja logado
if (!isset($_SESSION['email']) || $_SESSION['email'] == "") {
	Header("Location:../index.php");
}


$rw = [];
if (isset($_GET['id'])) {
	$stmt = $con->query("SELECT * FROM slides WHERE id = :id");
	$stmt->bindValue(':id', $_GET['id']);
	$stmt->execute();
	$rw = $stmt->fetch(\PDO::FETCH_ASSOC);
	#print_r($rw);
}
?>




<body>
    <div class="container">
        <div class="form-image">
            <img src="img/undraw_access_account_re_8spm.svg" alt="">
        </div>
        <div class="form">
            <form action="../slides/salvar.php" method="POST" enctype="multipart/form-data">
                <div class="form-header">
                    <div class="title">
                        <h1>Nova Publicação</h1>
                    </div>
                   
                </div>

	<input type="hidden" name="id" value="<?= _v($rw, 'id') ?>">

    <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Título do Slide:</label>
                        <input id="firstname" type="text" name="titulo" placeholder="Digite o título:" value="<?= _v($rw, 'titulo') ?>" required>
</div>


<div class="input-box">
                        <label for="email">Descrição:</label>
                        <input id="email" type="text" name="descricao" placeholder="Digite a descrição" value= "<?= _v($rw, 'descricao')?>" required>
                </div>
	
<div class="file">
                        <label for="file">Foto do Slide</label>
                        <input id="password" type="file" name="foto" value="<?= _v($rw, 'foto') ?>" required>
                    </div>

	<div class="file">
                        <label for="confirmPassword">Slide em PowerPoint</label>
                        <input id="confirmPassword" type="file" name="arquivo" value="<?= _v($rw, 'arquivo') ?>" required>
                    </div>

                    <div class="file">
                        <label for="confirmPassword">Slide em PDF</label>
                        <input id="confirmPassword" type="file" name="arquivopdf" value="<?= _v($rw, 'arquivopdf') ?>" required>
                    </div>
	
	
	<?php
	#se estou editando alguem
	/*if (isset($_GET['id'])) {
		print "<a href='{$rw['arquivo']}'>Arquivo</a>";
	}*/
	?>
	
	<br/>
	<div class="continue-button">
                    <button>Postar</button>
                </div>

</form>


 <?php 
  include '../slides/listar.php' ?>