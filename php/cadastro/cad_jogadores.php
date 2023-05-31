<!DOCTYPE html>
<html lang="pt-br">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro de Jogadores</title>
      </head>
      <body>
            <div>
                  <form method="POST" action="inserir_jogadores.php">
                        <h2>Cadastro de Jogadores</h2>
                        <div>
                        <label for="nome"><strong>Nome</strong></label>
                        <input type="text" placeholder="Entre com nome" name="nome" id="nome" required><br>
                        <label for="apelido"><strong>Apelido</strong></label>
                        <input type="text" placeholder="Entre com apelido" name="apelido" id="apelido" required><br>
                        <label for="posicao"><strong>Posição</strong></label>
                        <input type="text" placeholder="Entre com posição" name="posicao" id="posicao" required><br>
                        
                        <button type="submit"><strong>Concluir</strong></button>
                        </div>
                  </form>
            </div>
      </body>
</html>