<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consulta de Estádios</title>
    </head>
    <body>
            <div>
                  <form method="POST" action="pesquisa_estadios.php">
                        <h2>Consulta de Estádios</h2>
                        <div>
                              <label for="estadio"><strong>Nome do Estádio</strong></label>
                              <input type="text" placeholder="Entre com o nome do Estádio" name="estadio" id="$estadio" required><br>
                              <br>
                              <br>
                              <button type="submit"><strong>Pesquisar</strong></button>
                        </div>
                        <br>    
                  </form>
            </div> 
    </body>
</html>