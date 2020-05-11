<?php
    $action = "salvar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Cadastro de carros</title>
</head>
<body>

    <h1>Cadastro de Carros</h1>

    <form method="POST" action="salvarCarro.php?<?php echo $action;?>">
        <label for="modelo">Modelo:</label>
        <input type="text" name="txtModelo" required />
        <label for="marca">Marca:</label>
        <input type="text" name="txtMarca" />
        <label for="tipo">Tipo:</label>
        <input type="text" name="txtTipo" required />
        <br><br>
        <input type="submit" value="Salvar" />
        <input type="reset" value="Limpar" />
    </form>
    <hr>
    <table id="tabela_carros">
        <tr>
            <th>Código</th>
            <th>Modelo</th>
            <th>Marca</th>
            <th>Tipo</th>
        </tr>
        <?php
            include_once "clsConexao.php";
            $query = "SELECT * FROM carro";
            $result = Conexao::consultar($query);
            while($carro = mysqli_fetch_array($result)){
                echo '<tr>';
                echo '  <td>'.$carro['codigo'].'</td>';
                echo '  <td>'.$carro['txtModelo'].'</td>';
                echo '  <td>'.$carro['txtMarca'].'</td>';
                echo '  <td>'.$carro['txtTipo'].'</td>';
                echo '</tr>';
            }
        ?>
    </table>
</body>
</html>