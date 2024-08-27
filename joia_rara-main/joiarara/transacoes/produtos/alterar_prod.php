<?php
    //Recebe o id para ser atualizado
    $id=$_SERVER['QUERY_STRING'];

        // chamada de conexão com o Banco de Dados através do arquivo externo.
        include("../../DB/conexao.php");
        //comando SQL para listagem dos registro vindos do MySql em ordem Decrescente.
        $consulta = "SELECT * FROM joia_rara.tb_produtos where $id";
        //Guarda dados retornados em um array(matriz)
        $result = $conn->query($consulta);
        // Caso o Banco de Dados retorne 1 linha ou mais, inicia uma estrutura de repetição para listar
        // e organizar a saída dos dados na tela.
            if ($result->num_rows > 0) {
                // Ecreve os dados do Array(matriz) e a cada volta no loop do while escreve um registro na tela.
                while($row = $result->fetch_assoc()) {
?>

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
    <div class="container">
        <form method="post" action="update.php?<?php echo $id; ?>">
            <label>ID: <br><input name="id" type="text" value="<?php echo $id?>" disabled></label><br>
            <label>Nome do Produto: <br><input name="nome_prod" type="text" value="<?php echo $row["NOME_PROD"]; ?>" required></label><br>
            <label>Descrição: <br><input name="descricao" type="text" value="<?php echo $row["DESCRICAO"]; ?>" required></label><br>
            <label>Tipo: <br><input name="tipo" type="text" value="<?php echo $row["TIPO"]; ?>" required></label><br>
            <label>Valor: <br><input name="valor" type="text" value="<?php echo $row["VALOR"]; ?>" required></label><br>
            <button class="botao_verde" type="submit"> Atualizar </button>
        </form>
    </div>

    <?php //início do bloco PHP
    }
        } else {
            //Em caso que a tabela do Banco de Dados(MySql)esteja vazia, escreva:
            echo "Nenhuma informação retornada do Banco de Dados.";
        }
        //Fechar conexão com o Banco de Dados
        $conn->close();         
    ?> <!-- Fim do bloco  PHP -->

</body>
</html>