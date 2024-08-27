<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/estilo.css">
  <title>Document</title>
</head>
<body>
    <?php
        //chama arquivo externo do conexão com o Banco de Dados.
        include("../../DB/conexao.php");

        $id=$_SERVER['QUERY_STRING'];
        echo $id."<br>";

        $id=$_SERVER['QUERY_STRING'];

        // sql to delete a record
        $sql = "DELETE FROM joia_rara.tb_produtos WHERE $id ";
       
        if ($conn->query($sql) === TRUE) 
        {
            echo "
            <div class="."container".">
                <div class="."cabeca_container".">
                Registro apagado com sucesso !
                </div>
                <div class="."btn_voltar".">
                <a class="."btn_voltar"." href="."../../index.html".">
                    Início
                </a>
                </div>
                <div class="."btn_voltar".">
                <a class="."btn_voltar"." href="."../../transacoes/produtos/listar_prod.php".">
                    Apagar outro
                </a>
                </div>  
            </div>";
        } 
        else 
        {
            echo "Erro ao apagar o Registro: " . $conn->error;
        }
        $conn->close();
    ?>
</body>
</html>

