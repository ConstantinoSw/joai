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

        $nome = "'".$_POST["nome"]."'";
        $sexo = "'".$_POST["sexo"]."'";
        $dta_nasc = "'".$_POST["dta_nasc"]."'";
        $cpf = "'".$_POST["cpf"]."'";

        $sql = "UPDATE joia_rara.tb_clientes SET NOME_COMP=$nome, SEXO=$sexo, DTA_NASC=$dta_nasc,CPF=$cpf WHERE $id";

        if ($conn->query($sql) === TRUE) {
            echo "<script>alert("."'Registro Atualizado com Sucesso !'".")</script>";
        } else {
            echo "<script>alert("."'Erro ao atualizar o Registro: '. $conn->error;".")</script>";
        }
            $conn->close();
            include("./listar_pes.php");    
    ?>
    </html>