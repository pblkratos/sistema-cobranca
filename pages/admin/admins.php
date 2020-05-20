<?php
    include("../../db/connection.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
        <link rel="stylesheet" href="../../assets/css/style.css">
    </head>

    <body class="background-solid">
        <nav class="navbar navbar-light bg-dark">
            <a class="navbar-brand navbar-color"><img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">Habite</a>
            <a class="navbar-color">Bem-vindo, <b><?php echo $_SESSION['nome'];?>.</b></a>
            <a class="navbar-brand navbar-color" href="../../security/bd_logout.php">sair</a>
        </nav>

        <div class="container-fluid analystics-box">
            <div class="row text-center">
                <div class="col-lg-4">
                    <h1 class="analystics analystics-loteamentos">27</h1>
                    <img src="../../images/map2.png" alt="loteamentos cadastrados">
                    <h6 class="analystics-title">Loteamentos<h6>
                </div>
                <div class="col-lg-4">
                    <h1 class="analystics analystics-clientes">645</h1>
                    <img src="../../images/person2.png" alt="loteamentos cadastrados">
                    <h6 class="analystics-title">Clientes<h6>
                </div>
                <div class="col-lg-4">
                    <h1 class="analystics analystics-cobrancas">14</h1>
                    <img src="../../images/money2.png" alt="loteamentos cadastrados">
                    <h6 class="analystics-title">Cobranças<h6>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <a href="">
                        <div class="menu-item menu-pay"><span>Cobrança<span></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="">
                        <div class="menu-item menu-ver-clients"><span>Verificar clientes<span></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="">
                        <div class="menu-item menu-client-register"><span>Cadastrar cliente<span></div>  
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="">
                    <div class="menu-item menu-documents"><span>Documentos<span></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="">
                        <div class="menu-item"><span>menu 1<span></div>
                    </a>
                </div>
            </div>
        </div>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    </body>
</html>