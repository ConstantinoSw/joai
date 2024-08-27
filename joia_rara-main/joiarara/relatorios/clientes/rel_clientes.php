<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="../../assets/css/estilo.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <title>Lista de usuários</title>
</head>

<body>

<H2>RELATÓRIO DE CLIENTES</H2>    
  <table id="tabela_clientes">
    <!-- Cabeçalho da Tabela -->
    <thead> 
      <tr> <!-- Linha HTML com o Cabeçalho da Tabela -->
        <!-- Colunas do Cabeçalho -->
        <th>Nome Completo</th> 
        <th>Sexo</th>
        <th>Data de Nascimento:</th>
        <th>C.P.F</th>
      </tr> <!-- Final da linha do Cabeçalho -->
    </thead>

    <?php //início do bloco PHP
        // chamada de conexão com o Banco de Dados através do arquivo externo.
        include("../../DB/conexao.php");
        //comando SQL para listagem dos registro vindos do MySql em ordem Decrescente.
        $consulta = "SELECT *,date_format(dta_nasc,'%d/%m/%Y') as DTA_NASC_FORMAT FROM joia_rara.tb_clientes ORDER by ID DESC";
        //Guarda dados retornados em um array(matriz)
        $result = $conn->query($consulta);
        // Caso o Banco de Dados retorne 1 linha ou mais, inicia uma estrutura de repetição para listar
        // e organizar a saída dos dados na tela.
            if ($result->num_rows > 0) {
                // Ecreve os dados do Array(matriz) e a cada volta no loop do while escreve um registro na tela.
                while($row = $result->fetch_assoc()) {
    ?> <!--  fim do bloco PHP -->
        
            <tbody><!-- Tag Semântica indicando Corpo da Tabela HTML para organizar os dados de saída --> 
            <tr><!-- linha da tabela(HTML) para organizar os Campos da Tabela(MySql) do Banco de Dados -->
                <td><!-- Coluna HTML onde será retornado o Campo [Nome Completo] que veio do Banco de Dados -->
                    <?php echo $row["NOME_COMP"]; ?> <!-- Bloco de código PHP dentro do código HTML -->    
                </td><!-- Final da Coluna do Compo [Nome Completo] -->

                <td><!-- Coluna HTML onde será retornado o Campo [SEXO] que veio do Banco de Dados -->
                    <?php echo $row["SEXO"]; ?> <!-- Bloco de código PHP dentro do código HTML -->    
                </td><!-- Final da Coluna do Compo [Nome Usuário] -->

                <td><!-- Coluna HTML onde será retornado o Campo [Idade] que veio do Banco de Dados -->
                    <?php echo $row["DTA_NASC_FORMAT"]; ?> <!-- Bloco de código PHP dentro do código HTML -->    
                </td><!-- Final da Coluna do Compo [Email] -->

                <td><!-- Coluna HTML onde será retornado o Campo [Idade] que veio do Banco de Dados -->
                    <?php echo $row["CPF"]; ?> <!-- Bloco de código PHP dentro do código HTML -->    
                </td><!-- Final da Coluna do Compo [Email] -->
            </tr><!-- Final da linha com os registros vindos do Banco de Dados -->
            </tbody>
        
    <!-- Bloco de código PHP dentro do código HTML -->    
    <?php //início do bloco PHP
    }
        } else {
            //Em caso que a tabela do Banco de Dados(MySql)esteja vazia, escreva:
            echo "Nenhuma informação retornada do Banco de Dados.";
        }
        //Fechar conexão com o Banco de Dados
        $conn->close();         
    ?> <!-- Fim do bloco  PHP -->
        </table><!-- Fechamento da tabela após o fim do bloco PHP que traz os registros -->

    <footer>
    </footer>
</body>
</html>