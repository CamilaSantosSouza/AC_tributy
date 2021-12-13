<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="./CSS/style.css" rel="stylesheet">
    <link href="./CSS/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/jpg" href="atuaimagem.jpg" />
    <link rel="icon" href="./images/deaf.png" type="image/x-icon" />
    <title>Animais</title>
  </head>
<header>
  <div class="px-3 py-2 bg-primary text-white text-align: center ">
    <style></style>
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="dropdown">
          <button onclick="dropdownFunction()" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-disabled="true"><i class="bi bi-bookmarks"></i>
          Categoria
          </button>
          <div id="myDropdown" class="dropdown-menu">
            <a class="dropdown-item" href="alfabeto.php">Alfabeto</a>
            <a class="dropdown-item" href="animais.php"><b>Animais</b></a>
            <a class="dropdown-item" href="cores.php">Cores</a>
          </div>
        </div>
        <a href="main.php"><button type="button" class="btn btn-primary"><i class="bi bi-house"></i>  Home</button></a>
        <div class="col-12 col-lg-8 mb-5 mb-lg-0 me-lg-2">
        <input type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search" name="search">
        </div>
        <a href="logout.php"><button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-left"></i>  Sair</button></a>
      </div>
    </div>
  </div>

</header>
<body>
  <main>
    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>Administração</b></font></font></h1>
          <style>.justificado {font-size: 18px;text-align: justify;text-justify: inter-word;}</style>
            <a href="animais.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;">Animais</font></font></a>
            <a href="alfabeto.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;">Alfabeto</font></font></a>
            <a href="cores.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;">Cores</font></font></a>
        </div>
      </div>
    </section>

      <div class="container">
          <!-- Quadrado 1 --> 
          <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main">
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1>Bem-vindo, Admin!!</h1>
                </div>
            </div>
            <div class="jumbotron">
<div class="row w-100">
        <div class="col-md-3">
            <div class="card border-info mx-sm-1 p-3">
                <div class="card border-info shadow text-info p-3 my-card"><span class="fa fa-user" aria-hidden="true"></span></div>
                <div class="text-info text-center mt-3"><h4>Usuários</h4></div>
                <div class="text-info text-center mt-2"><h1>20</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-success mx-sm-1 p-3">
                <div class="card border-success shadow text-success p-3 my-card"><span class="fa fa-eye" aria-hidden="true"></span></div>
                <div class="text-success text-center mt-3"><h4>Visualizações</h4></div>
                <div class="text-success text-center mt-2"><h1>250</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-danger mx-sm-1 p-3">
                <div class="card border-danger shadow text-danger p-3 my-card"><span class="fa fa-heart" aria-hidden="true"></span></div>
                <div class="text-danger text-center mt-3"><h4>Vídeos</h4></div>
                <div class="text-danger text-center mt-2"><h1>21</h1></div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-warning mx-sm-1 p-3">
                <div class="card border-warning shadow text-warning p-3 my-card"><span class="fa fa-inbox" aria-hidden="true"></span></div>
                <div class="text-warning text-center mt-3"><h4>Compartilhamentos</h4></div>
                <div class="text-warning text-center mt-2"><h1>30</h1></div>
            </div>
        </div>
     </div>
</div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
        </div>
      </div>
    </div>
  </main>
  <p class="mt-5 mb-3 text-muted text-center">© 2021 Camila e Matheus</p>
</body>
</html>
<script>
function dropdownFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
// Aqui é quando o usuario clica fora o dropdown some.
window.onclick = function(event) {
  if (!event.target.matches('.btn-primary')) {
    var dropdowns = document.getElementsByClassName("dropdown-menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
} 
</script>