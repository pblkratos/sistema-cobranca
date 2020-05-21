<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <?php
            include_once("navbar.php");
        ?>
        <div class="container">
            <div class="row form-group">
                <div class="col-md-4 offset-md-4 text-center box-client-register">
                <?php
                    if(isset($_GET['msg'])){
                ?>
                    <span class="<?php echo($_GET['status'])?>"><?php echo($_GET['msg'])?></span>
                <?php 
                    }
                ?>
                    <h1>Cadastro</h1>
                    <form action="../../security/bd_client-register.php" autocomplete="off" method="post">
                        <input type="text" class="input-client-register mt-2" required name="name" placeholder="Nome completo">
                        <select name="relationship" class="input-client-register  mt-2" placeholder="Estado civil" id="">
                            <option value="0">Estado civil</option>
                            <option value="1">Solteiro(a)</option>
                            <option value="2">Casado(a)</option>
                            <option value="3">Divorciado(a)</option>
                            <option value="4">Viúvo(a)</option>
                        </select>
                        <input type="text" class="input-client-register mt-2" required name="nationality" placeholder="Nacionalidade">
                        <input type="text" class="input-client-register mt-2" name="profession" placeholder="Profissão">
                        <input type="number" class="input-client-register mt-2" required name="cpf" placeholder="CPF">
                        <input type="tel" class="input-client-register mt-2" required name="phone" placeholder="telefone">
                        <input type="submit" class="button-client-register button-submit" value="Cadastrar">
                        <input type="reset" class="button-client-register button-reset" value="Cancelar">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>