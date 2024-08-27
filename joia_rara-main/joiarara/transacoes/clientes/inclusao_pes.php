<?php
    //chama arquivo externo do conexão com o Banco de Dados.
    include("../../DB/conexao.php");
    //Recebe os dodos do formulário no método Post e guarda nas seguintes variáveis.
    $nome_comp = $_POST["nome_comp"];
    $sexo = $_POST["sexo"];
    $dta_nasc = $_POST["dta_nasc"];
    $cpf = $_POST["cpf"];
    //guarda na variável sql o comando SQL de inserção dos dados no Banco de Dados
    $sql = "INSERT INTO joia_rara.TB_CLIENTES (NOME_COMP, SEXO, DTA_NASC, CPF) VALUES ('$nome_comp', '$sexo', '$dta_nasc', '$cpf')";
    // envia o comando SQL para o Banco de Dados MySql e tiver retorno escreva na tela Sucesso.
    if ($conn->query($sql) === TRUE) 
    {
        $status = "Registro Salvo com Sucesso !";
?> 
                <a class="btn_voltar" href="../../formularios/cad_cliente">
                    Novo Registro ?
                </a>
<?php   
        include("./listar_pes.php"); //chamar o arquivo PHP que lista os registros retornados do Banco de Dados.
    } 
    else // Se o Banco de Dados não conseguir registrar o formulário, aparece a seguinte mensagem de erro.
    {
        echo "
        <div class="."containerSP".">
            <div class="."cabeca_container".">";
                echo "Error: " . $sql . "<br>" . $conn->error;
                echo "
            </div>
            <div class="."btn_voltar".">
                <a class="."btn_voltar"." href="."../html/registros/cad_usuario.html".">
                    Novo Registro ?
                </a>
            </div> 
        </div>";
    }
?>
<footer class=status>
<?php echo $status ?>
</footer>
    
