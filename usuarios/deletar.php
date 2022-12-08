<?php
session_start();
if(($_GET['y']=="d")){

    include("../conexao.php");

    $id = $_SESSION['id'];

    /*if($stmt = mysqli_prepare($con, "DELETE FROM usuarios WHERE id=?")){
        mysqli_stmt_bind_param($stmt,'i', $id);
        $status = mysqli_stmt_execute($stmt);
        if($status === false){
            trigger_error($stmt->error, E_USER_EROR);
        }
        mysqli_stmt_close($stmt);
    }*/

    $sql = "DELETE FROM usuarios WHERE id = :id";


	$stmt = $con->prepare($sql);
	$stmt->bindValue(':id', $id);
	$stmt->execute();

}
/*$stmt = $con->prepare($sql);
$stmt->execute([':id' => $id]);*/
header("Location:../auth/logout.php");
