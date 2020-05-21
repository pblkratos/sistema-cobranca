<?php
include("../db/connection.php");

$nome          = $_POST['name'];
$estadoCivil   = $_POST['relationship'];
$nacionalidade = $_POST['nationality'];
$profissao     = $_POST['profession'];
$cpf           = $_POST['cpf'];
$telefone      = $_POST['phone'];

$inserir = "INSERT INTO clientes (cpf,estado_civil, nacionalidade, nome, profissao, telefone) VALUES ('$cpf','$estadoCivil','$nacionalidade','$nome','$profissao','$telefone')";

$select = "SELECT * FROM clientes WHERE cpf='$cpf'";
$verificaCpf  = mysqli_query($con, $select) or die(mysqli_connect_error());

$hasCpf = mysqli_affected_rows($con);

$status = "alert-msg";
$msg = "cliente já cadastrado!";

if($hasCpf > 0){
    mysqli_close($con);
    header("location: ../pages/admin/client-register.php?status=".$status."&msg=".$msg);
}else{
    $dados = mysqli_query($con, $inserir) or die (mysqli_connect_error());
    mysqli_close($con);
    $status = "success-msg";
    $msg = "cliente cadastrado com sucesso!";
    header("location: ../pages/admin/client-register.php?status=".$status."&msg=".$msg);
}

?>


