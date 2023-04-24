<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Página Inicial</title>
</head>
<body style="background-color: rgb(174, 174, 174);">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="http://localhost/psw/aula-11-04/home.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">SOBRE</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">CONTATO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/psw/aula-11-04/cad.php">CADASTRE-SE</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="">
              <button class="btn btn-secondary" type="button">Buscar</button>
            </form>
          </div>
        </div>
      </nav>



  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel" style="margin-top: 0px">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
   
  </div>
  
  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="vista.jpg" alt="" class="d-block" style="width:100%">

    </div>
    <div class="carousel-item">
      <img src="entrada.jpg" alt="Chicago" class="d-block" style="width:100%">
    </div>
  
  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</body>
</html>