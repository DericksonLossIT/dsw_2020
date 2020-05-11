<?php
    $modelo = $_POST['txtModelo'];
    $marca = $_POST['txtMarca'];
    $tipo = $_POST['txtTipo'];

    include "clsConexao.php";

    if(isset( $_REQUEST['salvar'])){
        $query = "INSERT INTO carro (modelo,marca,tipo) VALUES ('$modelo','$marca','$tipo')";
        Conexao::executar($query);
        header("Location: index.php");
    }
?>