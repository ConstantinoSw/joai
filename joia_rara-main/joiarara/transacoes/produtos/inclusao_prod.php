<?php
    //chama arquivo externo do conexão com o Banco de Dados.
    include("../../DB/conexao.php");
    //Recebe os dodos do formulário no método Post e guarda nas seguintes variáveis.
    $nome_prod = $_POST["nome_prod"];
    $descricao = $_POST["descricao"];
    $tipo = $_POST["tipo"];
    $valor = $_POST["valor"];
    //guarda na variável sql o comando SQL de inserção dos dados no Banco de Dados
    $sql = "INSERT INTO joia_rara.tb_produtos (nome_prod, descricao, tipo, valor) VALUES ('$nome_prod', '$descricao', '$tipo', '$valor')";
    // envia o comando SQL para o Banco de Dados MySql e tiver retorno escreva na tela Sucesso.
    if ($conn->query($sql) === TRUE) 
    {
        $status = "Registro Salvo com Sucesso !";
?> 
                <a class="btn_voltar" href="../../formularios/cad_produtos.html">
                    Novo Registro ?
                </a>
<?php   
        include("./listar_prod.php"); //chamar o arquivo PHP que lista os registros retornados do Banco de Dados.
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
                <a class="."btn_voltar"." href="."../../formularios/cad_produtos.html".">
                    Novo Registro ?
                </a>
            </div> 
        </div>";
    }
?>
<footer class=status>
<?php echo $status ?>
</footer>