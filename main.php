<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./CSS/main.css" rel="stylesheet">
    <link href="./CSS/style.css" rel="stylesheet">
    <script type="text/javascript" src="JS/search.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/jpg" href="atuaimagem.jpg" />
    <link rel="icon" href="./images/deaf.png" type="image/x-icon" />
    <title>Pagina principal</title>
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
            <a class="dropdown-item" href="animais.php">Animais</a>
            <a class="dropdown-item" href="cores.php">Cores</a>
          </div>
        </div>
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
    <style> h2{
    background: -webkit-linear-gradient(
       #6610F2,#007bff) ;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    line-height: 30px;
     }
     a{
    text-decoration: none;
    display: inline-block;
    overflow: hidden;
    -webkit-text-fill-color: black;
    }
     </style>

    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>Qual nosso objetivo?</b></font></font></h1>
          <style>.justificado {font-size: 18px;text-align: justify;text-justify: inter-word;}</style>
          <h2 class="justificado"><font style="text-align: inherit;">A <b>inclusão dos surdos e deficientes auditivos</b> 
            na sociedade vem cada vez mais <b>ganhando destaque</b> e já se tornou uma pauta entre os <b>profissionais da educação</b> em geral. 
            A <b>inclusão escolar de surdos</b> nas escolas de ouvintes tem o objetivo de <b>igualar as possibilidades de aprendizagem</b> 
            sendo as <b>mesmas condições</b> de comunicação oral oferecidas ao <b>aluno ouvinte</b>. O objetivo principal deste site é buscar auxiliar 
            e <b>facilitar alfabetização e aprendizagem</b> de crianças com tais deficiências. </font><font style="vertical-align: inherit;"></font></font></h2>
        </div>
      </div>
    </section>

      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Quadrado 1 --> 
          <div class="col">
          <div id="divlink">
          <a href="alfabeto.php" class="link">
            <div class="card shadow-sm">
              <div class="tenor-gif-embed" data-postid="22471245" data-share-method="host" data-aspect-ratio="1" data-width="100%">
              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
              <img src="https://fellowdeaf.s3.sa-east-1.amazonaws.com/Alfabeto.gif" width="100%" height="100%"/><br></br>
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Para acessar a páginas com todas as representações
                do <b>ALFABETO</b> na Língua Brasileira de Sinais.</font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"></font></font></small>
                </div>
              </div>
              </div>
            </div>
            </a>
          </div>
          </div>
          
           <!-- Quadrado 2 --> 
          <div class="col">
          <div id="divlink">
          <a href="animais.php" class="link">
            <div class="card shadow-sm">
            <div class="tenor-gif-embed" data-postid="22471245" data-share-method="host" data-aspect-ratio="1" data-width="100%">  
              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
              <img src="https://fellowdeaf.s3.sa-east-1.amazonaws.com/Animais.gif" width="100%" height="100%"/><br></br>
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Para acessar a páginas com todas as representações
                  de <b>ANIMAIS</b> na Língua Brasileira de Sinais.</font></p>
                <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          </div>

          <!-- Quadrado 3 --> 
          <div class="col">
          <div id="divlink">
          <a href="cores.php" class="link">
            <div class="card shadow-sm">
            <div class="tenor-gif-embed" data-postid="22471245" data-share-method="host" data-aspect-ratio="1" data-width="100%">  
              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
              <img src="https://fellowdeaf.s3.sa-east-1.amazonaws.com/Cores.gif" width="100%" height="100%"/><br></br>
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Para acessar a páginas com todas as representações
                  de <b>CORES</b> na Língua Brasileira de Sinais.</font></p>
                <div class="d-flex justify-content-between align-items-center">
                  </div>
                </div>
              </div>
            </div>
            </a>
          </div>
          </div>

          </div>
      </div>
    </div>

  </main><br></br>
  <p1 class="mt-5 mb-3 text-muted text-center"><center>© 2021 Camila e Matheus</center></p1>
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