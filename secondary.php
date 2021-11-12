<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link href="./CSS/style.css" rel="stylesheet">
    <link href="./CSS/secundaria.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="icon" href="./images/deaf.png" type="image/x-icon"/>
    <title>Secundaria</title>
  </head>
  <header>
    <div class="px-3 py-2 bg-primary text-white">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="profile.php"<button type="button" class="btn btn-primary"></form><i class="bi bi-person"></i>Profile</button></a>
          <a href="main.php"<button type="button" class="btn btn-primary" method="POST" ><i class="bi bi-house"></i> Home</button></a>
          <div class="col-12 col-lg-8 mb-5 mb-lg-0 me-lg-2">
            <input type="search" class="form-control" placeholder="Pesquisar..." aria-label="Search" name="search">
          </div>
            <a href="loyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyiiiiiiiiiiiiiiiiiiiuuigout.php"><button type="button" class="btn btn-primary"><i class="bi bi-box-arrow-left"></i>  Sair</button></a>
        </div>  
      </div>    
    </div>     
    </header>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <h5 class="card-header h5 text-center">
                            Sorria e se movimente!
                        </h5>
                        <div class="card-body">
                            <div class="booth">
                                <video id="video" width="100%" 
                                    height="100%" autoplay>
                                </video>
                            </div>
      
                            <div class="text-right">
                                <a href="#!" class="btn btn-danger" 
                                    onClick="stop()">
                                    Parar
                                </a>
                                <a href="#!" class="btn btn-success"
                                    onClick="start()">
                                    Começar
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <script>
            var stop = function () {
                var stream = video.srcObject;
                var tracks = stream.getTracks();
                for (var i = 0; i < tracks.length; i++) {
                    var track = tracks[i];
                    track.stop();
                }
                video.srcObject = null;
            }
            var start = function () {
                var video = document.getElementById('video'),
                    vendorUrl = window.URL || window.webkitURL;
                if (navigator.mediaDevices.getUserMedia) {
                    navigator.mediaDevices.getUserMedia({ video: true })
                        .then(function (stream) {
                            video.srcObject = stream;
                        }).catch(function (error) {
                            console.log("Something went wrong!");
                        });
                }
            }
            $(function () {
                start();
            });  
        </script>
    </body>
    <footer class="footer">
        <div class="container">
          <span class="text-muted">© 2021 Camila e Matheus</span>
        </div>
      </footer>
    </html>
      