<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do Projetinho</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>

<body>
    

    <div>
        
      <form method="post" action="conexao.php">
        <div id="form" class="container-md col-5">
              <h1><strong>Cadastro</strong></h1>
              <p></p>
              <label>Nome Completo</label>
              <br>
              <div class=" mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="nome" placeholder="Indique seu Nome">
                  <label for="floatingInput"></label>
                </div>
              <p></p>
              <label>Nome de Usuário</label>
              <br>
              <div class="mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="nomeusu" placeholder="Coloque um Nome Para Usuario">
                  <label for="floatingInput"></label>
                </div>
              <p></p>
              <label>Senha</label>
              <br>
                  <div class=" mb-3">
                      <input type="password" class="form-control" id="floatingInput" name="senha" placeholder="Coloque sua Senha">
                      <label for="floatingInput"></label>
                    </div>
              <p></p>
              <label>Confirme sua Senha</label>
              <br>
              <div class=" mb-3">
                  <input type="password" class="form-control" id="floatingInput" name="consenha" placeholder="Confirme sua Senha">
                  <label for="floatingInput"></label>
        
                </div>
              <p></p>
              <label>CPF</label>
              <br>
              <div class=" mb-3">
                  <input type="text" class="form-control" id="floatingInput" name="cpf" placeholder="Coloque seu CPF">
                  <label for="floatingInput"></label>
              </div>
              <p></p>
              <label>Data de Nascimento</label>
              <br>
              <div class=" mb-3">
                  <input type="text " class="form-control" id="floatingInput" name="datan" placeholder="Informe sua data de Nascimento">
                  <label for="floatingInput"></label>
              </div>
              <p></p>
              <label>Celular</label>
              <br>
              <div class=" mb-3">
                  <input type="number" class="form-control" id="floatingInput" name="celular" placeholder="Informe o seu Celular">
                  <label for="floatingInput"></label>
                </div>
              <p></p>
              <h2>Endereço</h2>
              <div class="input-group mb-4">
                  <span class="input-group-text">CEP</span>
                  <input type="text" class="form-control" name="cep" placeholder="Informe o seu CEP...">
                  <span class="input-group-text">Rua</span>
                  <input type="text" class="form-control" name="rua" placeholder="Informe seu endereço">
                </div>
                <div class="input-group mb-4">
                  <span class="input-group-text">Número</span>
                  <input type="text" class="form-control" name="numero" placeholder="Informe o seu número">
                  <span class="input-group-text">Complemento</span>
                  <input type="text" class="form-control" name="comple" placeholder="Informação adicional...">
              </div>
              <div class="input-group mb-4">
                  <span class="input-group-text">Bairro</span>
                  <input type="text" class="form-control" name="bairro" placeholder="Informação adicional...">
                  <span class="input-group-text">Cidade</span>
                  <input type="text" class="form-control" name="cidade" placeholder="Informação adicional...">
                </div>
                <button class="btn-group btn-primary" onclick="verificar()">CADASTRAR</button>
        
          </div>
      </form>
    </div>

</body>
   <script src="cadastro.js"></script>

</html>