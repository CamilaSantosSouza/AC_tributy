<!doctype html>
<html lang="pt=br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="js/passwordMatch.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./CSS/style.css" rel="stylesheet">
    <link href="./CSS/cadastrar.css" rel="stylesheet">
    <link rel="icon" href="./images/deaf.png" type="image/x-icon" />
    <title>Cadastro</title>
  </head>
  <body class="bg-light">
    <form class="form" action="register.php" method="POST">
    <div class="container">
      <div class="py-5 text-center">
        <img class="mb-4" src="./Images/hands.png" alt="" width="72" height="72">
        <h2>Cadastrar</h2>
        <p class="lead">Por favor, adicione apenas dados válidos!</p>
      </div>
      <div class="mb-3">
        <label for="username">Nome</label>
        <div class="input-group">
          <input type="text" class="form-control" id="username" placeholder="Nome" required="" name="username">
          <div class="invalid-feedback" style="width: 100%;">
            O nome é obrigatório.
          </div>
        </div>
      </div>
      <!-- Email -->
      <div class="mb-3">
        <label for="email">E-mail</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text">@</span>
          </div>
        <input type="email" class="form-control" id="email" placeholder="seunome@exemplo.com" name="email">
        <div class="invalid-feedback">
          Digite seu E-mail.
        </div>
      </div>
      </div>
      <!-- Senha -->
      <div class="mb-3">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" placeholder="Senha" name="password">
        <div class="invalid-feedback">
          Digite sua senha.
        </div>
      </div>
      <!-- Confirmar Senha -->
      <div class="mb-3">
        <label for="password">Confirmar senha</label>
        <input type="password" class="form-control" id="retype_password" placeholder="Confirmar senha" name="retype_password" onchange="checkPassword()">
        <div class="invalid-feedback">
          Confirme sua senha.
        </div>
      </div>
      <!--Quem é voce ?-->
      <div class="cadastrar">
        <div class="row">
          <div class="col-xs-4 col-xs-offset-4">
            <div class="form">
              <label for="email">Quem é você ?</label>
              <select class="selectpicker form-control">
                  <option selected="selected">Selecione uma opção:</option>
                  <option value="1">Aluno</option>
                  <option value="2">Professor</option>
                  <option value="3">Interessado no assunto</option>
              </select>
          </div>
         </div>
       </div>
          <div class="invalid-feedback">
            Por favor escolha um estado válido.
          </div>
        </div><br>
      <div class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" id="save-info">
        <label class="custom-control-label" for="save-info"> Salvar informações para a proxima vez </label>
      </div>
      <hr class="mb-4">
      <a href="index.html"><button class="btn btn-primary btn-lg btn-block" type="submit">Continue para finalizar seu cadastro</button></a>
    </form>
  </div>
<footer class="my-5 pt-5 text-muted text-center text-small">
  <p class="mb-1">© 2021 Camila e Matheus</p>
</footer>
</div>
</body>
</html>