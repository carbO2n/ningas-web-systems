<!DOCTYPE html>
<html lang="en">
<head>
    <title>Photo Gallery</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Art Portfolio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Traditional Works</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Digital Works</a>
        </div>
        </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
  </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
   
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/trad.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>DIGITAL ART</h5>
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/van.jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
    <h5>TRADITIONAL ART</h5>\
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<section class="my-4">
  <div class="py-4">
    <h2 class ="text-center">Digital Art</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/ghhrr.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/nolighting.png" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/DAWWWWWGG2.png" class="img-fluid pb-3">
  </div>
  </div>
  </div>

  <div class="py-4">
    <h2 class ="text-center">Tradition Art</h2>
  </div>

  <div class="container-fluid">
    <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/tradd.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/dawg.jpg" class="img-fluid pb-3">
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <img src="images/cat.jpg" class="img-fluid pb-3">
  </div>
  </div>
  </div>

  

</section>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>