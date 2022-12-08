<?php
session_start();
include "../conexao.php";

#Redireciona par ao login, caso nao esteja logado
if (!isset($_SESSION['email']) || $_SESSION['email'] == "") {
	Header("Location:../index.php");
}


#se estou salvando um novo
if ($_POST['id'] == "") {
	
	$titulo = $_POST['titulo'];
	$descricao 	= $_POST['descricao'];
	$foto    = "../uploads/".$_FILES['foto']['name'];
	$arquivo    = "../uploads/".$_FILES['arquivo']['name'];
	$arquivopdf    = "../uploads/".$_FILES['arquivopdf']['name'];
	
	#salva o arquivo na pasta de uploads
	move_uploaded_file($_FILES['foto']['tmp_name'], $foto );
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo);
	move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivopdf);


	$sql = "INSERT INTO slides(titulo,descricao,foto,arquivo,arquivopdf,usuario_id)
			VALUES (:titulo,:descricao,:foto,:arquivo, :arquivopdf, :usuario_id)";


	$stmt = $con->prepare($sql);
	$stmt->bindValue(':titulo', $titulo);
	$stmt->bindValue(':descricao', $descricao);
	$stmt->bindValue(':foto', $foto);
	$stmt->bindValue(':arquivo', $arquivo);
	$stmt->bindValue(':arquivopdf', $arquivopdf);
	$stmt->bindValue(':usuario_id', $_SESSION['id']);
	$stmt->execute();
	$id = $con->lastInsertId(); #pegando a id do ultimo inserido

	header("Location:../index.php?id=$id");
} else {
	
	
	$dadosNovos = [
		":id" 			=> $_POST['id'],
		":titulo" 		=> $_POST['titulo'],
		":descricao" 	=> $_POST['descricao'],
		":foto" 		=> $_POST['foto'],
		":arquivo" 		=> $_POST['arquivo'],
		":arquivopdf" 	=> $_POST['arquivopdf'] #Cuidado com essas modificações
	];
	
	
	if ($_FILES['arquivo']['name'] != ""){
		#atualiza o arquivo
		$arquivo    = "../uploads/".$_FILES['arquivo']['name'];
		#salva o arquivo novo na pasta de uploads
		move_uploaded_file($_FILES['arquivo']['tmp_name'], $arquivo);
		
		#acrescenta o update do arquivo no sql
		$sqlUpdateArquivo = ",arquivo = :arquivo";
		
		#inclui o arquivo no array de valores para o sql
		$dadosNovos[":arquivo"] =  $arquivo;
	} else {
		$sqlUpdateArquivo = "";
	}

	if ($_FILES['foto']['name'] != ""){
		#atualiza o arquivo
		$foto    = "../uploads/".$_FILES['foto']['name'];
		#salva o arquivo novo na pasta de uploads
		move_uploaded_file($_FILES['foto']['tmp_name'], $foto);
		
		#acrescenta o update do arquivo no sql
		$sqlUpdateFoto = ",foto = :foto";
		
		#inclui o arquivo no array de valores para o sql
		$dadosNovos[":foto"] =  $foto;
	} else {
		$sqlUpdateFoto = "";
	}

	
	if ($_FILES['arquivopdf']['name'] != ""){
		#atualiza o arquivo
		$foto    = "../uploads/".$_FILES['arquivopdf']['name'];
		#salva o arquivo novo na pasta de uploads
		move_uploaded_file($_FILES['arquivopdf']['tmp_name'], $arquivopdf);
		
		#acrescenta o update do arquivo no sql
		$sqlUpdateFoto = ",arquivopdf = :arquivopdf";
		
		#inclui o arquivo no array de valores para o sql
		$dadosNovos[":arquivopdf"] =  $arquivopdf;
	} else {
		$sqlUpdateArquivopdf = "";
	}


	#SE EU ESTOU ATUALIZANDO/EDITANDO ALGUÉM
	#eu faço apenas uma UPDATE 

	$sql = "UPDATE slides SET 
					titulo = :titulo,
					descricao = :descricao,
					$sqlUpdatefoto
					$sqlUpdateArquivo
					$sqlUpdateArquivopdf
				WHERE id = :id";
	
	
	$stmt = $con->prepare($sql);
	$stmt->execute($dadosNovos);
	header("Location:../postar/index.php?id={$_POST['id']}");
}

