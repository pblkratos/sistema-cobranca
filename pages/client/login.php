<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Habite Corretora de imóveis</title>

    <link rel="stylesheet" href="../../assets/css/style.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- DB connection -->
    <?php
        include("../../db/connection.php")
    ?>
</head>
<body class="background-gradient">
    <div class="container-fluid">
        <div class="row form-group">
            <div class="form-box col-xl-2 col-lg-3 col-md-4 col-sm-6 col-6 offset-xl-5 offset-lg-fluid offset-md-4 offset-sm-3 offset-3 text-center">
                <form action="../../security/bd_login.php" autocomplete="off" method="POST">
                    <input type="text" class="form-input mt-2" id="" name="user" value="" required placeholder="Usuário">
                    <input type="password" class="form-input mt-2" name="passw" id="" value="" required placeholder="Senha">
                    <input type="submit" class="form-button form-button-confirm mt-3" id="" value="Entrar">
                    <input type="reset" class="form-button form-button-reset mt-3" id="" Value="Cancelar">
                </form>
                <?php
                    if(isset($_GET['msg'])){
                ?>
                    <span class="alert-msg">usuário ou senha incorreto.</span>
                <?php    
                    }
                ?>
              </div>
         </div>
    </div>
    
     <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
</body>
</html>