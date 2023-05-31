<!DOCTYPE html>
<html lang="pt-br">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro de Times</title>
      </head>
      <body>
            <div>
                  <form method="POST" action="inserir_timesbr.php">
                        <h2>Cadastro de Times</h2>
                        <div>
                        <label for="nome_time"><strong>Nome do Time</strong></label>
                        <input type="text" placeholder="Entre com o nome do time" name="nome_time" id="nome_time" required><br>
                        <label for="abreviacao"><strong>Abreviação</strong></label>
                        <input type="text" placeholder="Entre com a abreviação" name="abreviacao" id="abreviacao" required><br>
                        <label for="estadio"><strong>Estádio</strong></label>
                        <input type="text" placeholder="Entre com o estádio" name="estadio" id="estadio" required><br>
                        
                        <button type="submit"><strong>Concluir</strong></button>
                        </div>
                  </form>
            </div>
      </body>
</html>