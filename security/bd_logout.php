<?php
session_start();
$_SESSION['codigo'] = "";
$_SESSION['nome'] = "";
$_SESSION['senha'] = "";
header('Location: ../pages/client/login.php');
?>