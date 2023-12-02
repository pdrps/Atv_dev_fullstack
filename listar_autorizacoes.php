<?php
    include("conexao.php");

    if(!empty($_GET['search'])){
        $data = $_GET['search'];
        $comando = $pdo->prepare("SELECT * FROM autorizacoes WHERE id_autorizacao LIKE '%$data%';");

        $comando->execute();
        if($comando->rowCount()>= 1)
        {
            $lista_autorizacoes = $comando->fetchAll();
        }else{
            echo("Não há requisições cadastradas.");
        }
    
        unset ($comando);
        unset ($pdo);
      }
      
    else{
        $comando = $pdo->prepare("SELECT * FROM autorizacoes;");

        $comando->execute();
        if($comando->rowCount()>= 1)
        {
            $lista_autorizacoes = $comando->fetchAll();
        }else{
            echo("Não há requisições cadastradas.");
        }
    
        unset ($comando);
        unset ($pdo);
      }
?>
