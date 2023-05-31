<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Times</title>
    </head>
    <body>
            <div>
                  <form method="POST" action="pesquisa_times.php">
                        <h2>Consulta do Time</h2>
                        <div>
                              <label for="nome_time"><strong>Nome do Time</strong></label>
                              <input type="text" placeholder="Entre com o nome do time" name="nome_time" id="$nome_time" required><br>
                              <br>
                              <br>
                              <button type="submit"><strong>Pesquisar</strong></button>
                        </div>
                        <br>    
                  </form>
            </div> 
    </body>
</html>