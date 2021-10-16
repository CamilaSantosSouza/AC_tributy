<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./CSS/style.css" rel="stylesheet">
    <link href="./CSS/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" type="image/jpg" href="atuaimagem.jpg" />
    <link rel="icon" href="./images/deaf.png" type="image/x-icon" />
    <title>Página principal</title>
  </head>
<header>
  <div class="px-3 py-2 bg-primary text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <div class="dropdown">
          <button onclick="dropdownFunction()" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"  aria-disabled="true"><i class="bi bi-bookmarks"></i>
          Categoria
          </button>
          <div id="myDropdown" class="dropdown-menu">
            <a class="dropdown-item" href="#">Alfabeto</a>
            <a class="dropdown-item" href="#">Animais</a>
            <a class="dropdown-item" href="#">Cores</a>
          </div>
        </div>
        <a href="profile.php"><button type="button" class="btn btn-primary"><i class="bi bi-person"></i>  Perfil</button></a>
        <form class="col-12 col-lg-4 mb-5 mb-lg-0 me-lg-3">
        
        <input type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search">
        </form>
      </div>
    </div>
  </div>
</header>
<body>
  <main>

    <section class="py-5 text-center container">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><b>Qual nosso objetivo?</b></font></font></h1>
          <style>.justificado {font-size: 18px;text-align: justify;text-justify: inter-word;}</style>
          <p class="justificado"><font style="text-align: inherit;">A inclusão dos surdos e deficientes auditivos 
            na sociedade vem cada vez mais ganhando destaque e já se tornou uma pauta entre os profissionais da educação em geral. 
            A inclusão escolar de surdos nas escolas de ouvintes tem o objetivo de igualar as possibilidades de aprendizagem sendo as mesmas 
            condições de comunicação oral oferecidas ao aluno ouvinte. O objetivo principal deste site é buscar auxiliar e facilitar 
            alfabetização e aprendizagem de crianças com tais deficiências. </font><font style="vertical-align: inherit;"></font></font></p>
            <a href="secondary.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;">Câmera</font></font></a>
            <a href="profile.php" class="btn btn-primary my-2"><font style="vertical-align: inherit;">Perfil</font></font></a>
        </div>
      </div>
    </section>

      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <!-- Quadrado 1 --> 
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 1</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
          </div>

           <!-- Quadrado 2 --> 
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 2</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
          </div>

          <!-- Quadrado 3 --> 
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 3</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
          </div>

          <!-- Quadrado 4 --> 
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 4</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
          </div>

          <!-- Quadrado 5 --> 
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 5</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Marcador de posição: miniatura" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect>
              <text x="45%" y="50%" fill="#eceeef" dy=".3em">Item 6</text></svg>        

              <style>.justifiquadrado {text-align: justify;text-justify: inter-word;}</style>
              <div class="card-body">
                <p class="justifiquadrado"><font style="vertical-align: inherit;">Este é um cartão mais amplo com texto de 
                apoio abaixo como uma introdução natural para conteúdo adicional. </font></p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Autor(es):</font></button>
                    <button type="button" class="btn btn-sm btn-outline-secondary"><font style="vertical-align: inherit;">Camila & Matheus</font></button>
                  </div>
                  <small class="text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17/09/2021</font></font></small>
                </div>
              </div>
            </div>
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