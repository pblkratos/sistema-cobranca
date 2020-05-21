<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Administrador</title>
    </head>

    <body>
        <?php
            include_once("navbar.php");
        ?>
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
                    <a href="client-pay.php">
                        <div class="menu-item menu-pay"><span>Cobrança<span></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="client-verify.php">
                        <div class="menu-item menu-ver-clients"><span>Verificar clientes<span></div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="client-register.php">
                        <div class="menu-item menu-client-register"><span>Cadastrar cliente<span></div>  
                    </a>
                </div>
                <div class="col-lg-3 col-md-4">
                    <a href="documents-verify.php">
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
    </body>
</html>