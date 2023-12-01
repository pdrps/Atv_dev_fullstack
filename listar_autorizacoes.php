<?php
    include("conexao.php");

    $comando = $pdo->prepare("SELECT id_autorizacao, procedimento, idade, sexo, permitido FROM autorizacoes;");

    $comando->execute();
    if($comando->rowCount()>= 1)
    {
        $lista_autorizacoes = $comando->fetchAll();
    }else{
        echo("Não há requisições cadastradas.");
    }

    unset ($comando);
    unset ($pdo);
?>