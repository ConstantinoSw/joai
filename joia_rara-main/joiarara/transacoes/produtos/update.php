<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/css/estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    
</body>
<?php
        $id=$_SERVER['QUERY_STRING'];

        // chamada de conexão com o Banco de Dados através do arquivo externo.
        include("../../DB/conexao.php");

        $nome_prod = "'".$_POST["nome_prod"]."'";
        $descricao = "'".$_POST["descricao"]."'";
        $tipo = "'".$_POST["tipo"]."'";
        $valor = "'".$_POST["valor"]."'";

        $sql = "UPDATE joia_rara.tb_produtos SET nome_prod=$nome_prod, descricao=$descricao, tipo=$tipo, valor=$valor WHERE $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert("."'Registro Atualizado com Sucesso !'".")</script>";
        } else {
            echo "<script>alert("."'Erro ao atualizar o Registro: '. $conn->error;".")</script>";
        }
            $conn->close();
            include("./listar_prod.php");    
    ?>
    </html>