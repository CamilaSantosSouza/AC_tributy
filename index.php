<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./CSS/style.css" rel="stylesheet">
    <link rel="icon" href="./images/deaf.png" type="image/x-icon" />
    <title>Login</title>
  </head>
  <body>
        <form action="login.php" method="POST">
        <div class="form-signin">
          <div class="text-center mb-4">
            <img class="mb-4" src="./images/hands.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Tela de login</h1>
            <p>Este é um sistema web de testes para aprendizagem de crianças com surdez ou deficiencia auditiva. <br>
              <a href="https://www.senac.br/">Clique aqui para acessar o site de nossa faculdade</a></p>
          </div>
          <div class="form-label-group">
            <label for="inputEmail">Endereço de E-mail</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="E-mail" required="email" name="email" autofocus="">
          </div>
    
          <div class="form-label-group">
            <label for="inputPassword">Senha</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required">
          </div>
    
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me">  Lembrar de mim
            </label>
          </div>
          
          <a href="main.html"><button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button></a>
          <p class="mt-5 mb-3 text-muted text-center">© 2021 Camila e Matheus</p>
      </div>
      </form>
</body>
</html>