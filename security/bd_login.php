<?php
    include("../db/connection.php");

    $user   = $_POST['user'];
    $passw  = $_POST['passw'];
    $dbUser = "SELECT * FROM admins WHERE nome='$user' AND senha='$passw'";

    $verUser    = mysqli_query($con, $dbUser);
    $resultUser = mysqli_affected_rows($con);

    if($resultUser > 0){
        $resultId = mysqli_query($con, $dbUser);
        $arrayId  = array();

        while ($linha = mysqli_fetch_array($resultId, MYSQLI_ASSOC)) {
            array_push($arrayId,$linha);
        }
        foreach ($arrayId as $value) {
            session_start();
            $nome   = $_SESSION['nome']   = $value['nome'];
            $senha  = $_SESSION['senha']  = $value['senha'];
            $codigo = $_SESSION['codigo'] = $value['codigo'];
            header ("Location: ../pages/admin/admins.php?cod=".$codigo);
        }
    }else{
        mysqli_close($con);
        $msg = "usuário ou senha incorreta";
        header ("Location: ../pages/client/login.php?msg=".$msg);
    }

    
?>