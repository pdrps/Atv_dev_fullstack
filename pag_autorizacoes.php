<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Página de consulta de autorizações</title>
    <style>
      body {
        background-color: rgb(238, 238, 238);
        display: flex;
        flex-direction: column;
        align-items: center;
      }
     
      .voltar {
        height: 45px;
        width: 120px;
        font-size: 18px;
        margin-top: 20px;
        border-radius: 10px;
        flex-direction: column;
        align-items: center;
        justify-content: center;
      }

      .tabela{
        border: 1px solid black;
        height: 100px;
        width: 1000px;
      }

      th, td{
        border-right: 1px solid black;
        border-bottom: 1px solid black;
      }

      thead, tbody{
      }

      td{
      }
    </style>
    </head>

    <body>
    <a href="pag_principal.html">
      <button class="voltar" style="border-color: black" type="submit">
        <h3>VOLTAR</h3>
      </button>
    </a>
  </body>

    <h1>Listar Requisições:</h1>
    <table class="tabela">
  <thead>
    <tr>
      <th scope="col" style="border-right: 1px solid black"><h2>ID autorização<h2></th>
      <th scope="col"><h2>Procedimento<h2></th>
      <th scope="col"><h2>Idade<h2></th>
      <th scope="col"><h2>Sexo<h2></th>
      <th scope="col"><h2>Permitido<h2></th>
    </tr>
  </thead>
  <tbody>
  <?php
            include("listar_autorizacoes.php");
            if(!empty($lista_autorizacoes)) {
                foreach ($lista_autorizacoes as $linha){ 
                    $id_autorizacao = $linha['id_autorizacao'];?>
                <tr>
                    
                    <td> <?php echo $linha['id_autorizacao']; ?> </td>
                    <td> <?php echo $linha['procedimento']; ?> </td>
                    <td> <?php echo $linha['idade']; ?> </td>
                    <td> <?php echo $linha['sexo']; ?> </td>
                    <td> <?php echo $linha['permitido']; ?> </td>
                    
                </tr>
                     
             <?php } 
            }
  ?>
  </tbody>
</table>

</body>

</html>
    