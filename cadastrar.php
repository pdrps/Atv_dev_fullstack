<?php
    include("conexao.php");

    $procedimento = $_POST["procedimento"];
    $idade = $_POST["idade"];
    $sexo = $_POST["sexo"];

    $comando1 = $pdo -> prepare("INSERT INTO autorizacoes(procedimento,idade,sexo,permitido) VALUES(:procedimento,:idade,:sexo,'SIM')");
    $comando2 = $pdo -> prepare("INSERT INTO autorizacoes(procedimento,idade,sexo,permitido) VALUES(:procedimento,:idade,:sexo,'NÃO')");
    
    $comando1->bindValue(":procedimento",$procedimento); 
    $comando1->bindValue(":idade",$idade); 
    $comando1->bindValue(":sexo",$sexo); 

    $comando2->bindValue(":procedimento",$procedimento); 
    $comando2->bindValue(":idade",$idade); 
    $comando2->bindValue(":sexo",$sexo); 

    if(($procedimento == 1234) or ($procedimento == 4567) or ($procedimento == 6789)){
        if(($idade > 18) or (($procedimento == 6789) and ($sexo == 'M') and ($idade < 18))){
            $comando1->execute();
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                     window.alert('A sua requisição foi registrada')
                     window.location.href='pag_cadastro.html';
                   </SCRIPT>");
        }
        if((($procedimento == 1234) and ($idade < 18))or (($procedimento == 6789) and ($sexo == 'F') and ($idade < 18))){
            $comando2->execute();
            echo ("<SCRIPT LANGUAGE='JavaScript'>
                     window.alert('A sua requisição foi registrada')
                     window.location.href='pag_cadastro.html';
                   </SCRIPT>");
        }
    }else{
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('O número de procedimento iserido não e válido, a requisição não foi registrada')
                window.location.href='pag_cadastro.html';
               </SCRIPT>");
    }

    unset($comando);
    unset($pdo);
?>
