<?php
require __DIR__ . '/../../services/consoleservice.php';
$consoleService = new ConsoleService();
$consoles = $consoleService->getAll();

require __DIR__ . '/../../services/gameservice.php';
$gameService = new GameService();
$games = $gameService->getAll();

include __DIR__ . '/../navbar.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Homepage</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="UTF-8">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="http://localhost/css/style.css">
</head>

<body>
  <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="https://playsense.nl/wp-content/uploads/2021/10/Nintendo-switch-oled-1.jpg" alt="First slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="https://sm.mashable.com/t/mashable_sea/photo/default/ps2-20th-anniversary-2_ykd6.h960.jpg" alt="Second slide">
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="https://cdn.mos.cms.futurecdn.net/7Rgi9ibCtqewHE933cuJZ5.jpg" alt="Third slide">
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

  <div class="row">
    <div class="col align-items-start d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $consoles[0]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $consoles[0]->getName(); ?></h5>
          <p class="card-text"><?php echo $consoles[0]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>

    <div class="col align-items-center d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $consoles[1]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $consoles[1]->getName(); ?></h5>
          <p class="card-text"><?php echo $consoles[1]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>

    <div class="col align-items-end d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $consoles[2]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $consoles[2]->getName(); ?></h5>
          <p class="card-text"><?php echo $consoles[2]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col align-items-start d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $games[0]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $games[0]->getName(); ?></h5>
          <p class="card-text"><?php echo $games[0]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>

    <!-- <div class="col align-items-center d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $games[1]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $games[1]->getName(); ?></h5>
          <p class="card-text"><?php echo $games[1]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>

    <div class="col align-items-end d-flex justify-content-center">
      <div class="card" style="width: 18rem;">
        <img src="<?php echo $games[2]->getPhotos(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $games[2]->getName(); ?></h5>
          <p class="card-text"><?php echo $games[2]->getDescription(); ?></p>
          <a href="#" class="btn btn-primary">Place in cart</a>
        </div>
      </div>
    </div>
  </div> -->


  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
include __DIR__ . '/../footer.php';
?>