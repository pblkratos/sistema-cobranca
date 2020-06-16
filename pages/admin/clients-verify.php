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
            <div class="row">
                <table class="table table-hover table-dark mt-5">
                    <thead>
                        <tr>         
                            <th>Código</th>
                            <th>Nome Completo</th>
                            <th>Loteamento</th>
                            <th>Quadra</th>
                            <th>Lote</th>
                            <th>Telefone</th>
                        </tr>
                    </thead>
                        <?php
                            $selectClient = "SELECT * FROM clientes INNER JOIN lotes WHERE clientes.id=lotes.clientes_id";

                            $dados = mysqli_query($con,$selectClient) or die (mysqli_error());
                            
                            $arrClientes = array();
                            while($linha = mysqli_fetch_array($dados, MYSQLI_ASSOC)){
                                array_push($arrClientes,$linha);
                            }
                            foreach($arrClientes as $value){
                              echo "<tr>";
                              echo "<td>". $value["id"]  ."</td>";
                              echo "<td>". $value["nome"]  ."</td>";
                              echo "<td>". $value["loteamento"]  ."</td>";
                              echo "<td>". $value["quadra"]  ."</td>";
                              echo "<td>". $value["lote"]  ."</td>";
                              echo "<td>". $value["telefone"]  ."</td>";
                              echo "</tr>";
                            }
                        ?>
                </table>
            </div>
        </div>
    </body>
</html>