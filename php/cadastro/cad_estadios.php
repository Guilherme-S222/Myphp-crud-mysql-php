<!DOCTYPE html>
<html lang="pt-br">
      <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Cadastro de Estadios</title>
      </head>
      <body>
            <div>
                  <form method="POST" action="inserir_estadios.php">
                        <h2>Cadastro de Estádios</h2>
                        <div>
                        <label for="estadio"><strong>Nome do Estádio</strong></label>
                        <input type="text" placeholder="Entre com o nome do Estádio" name="estadio" id="estadio" required><br>
                        <label for="localidade"><strong>Localidade</strong></label>
                        <input type="text" placeholder="Entre com a localidade" name="localidade" id="localidade" required><br>
                        <label for="uf"><strong>UF</strong></label>
                        <input type="text" placeholder="Entre com a UF" name="uf" id="uf" required><br>
                        
                        <button type="submit"><strong>Concluir</strong></button>
                        </div>
                  </form>
            </div>
      </body>
</html>