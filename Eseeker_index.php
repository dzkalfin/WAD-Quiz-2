<?php  

include 'config.php';

if (isset($_POST['login'])) {

  login($_POST);

}

$sql = "SELECT * FROM post";
$select = mysqli_query($conn,$sql);



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  <title>Home</title>
</head>

<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid mx-5 ">
      <a class="navbar-brand" href="#">Eseeker</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mx-5" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-lg-0">
          <li class="nav-item mx-4">
            <a class="nav-link " href="#"><i class="bi bi-newspaper"></i> News</a>
          </li>
          <li class="nav-item mx-4">
            <a class="nav-link" href="#"><i class="bi bi-trophy"></i> Tournament</a>
          </li>
          <li class="nav-item dropdown mx-4">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-search"></i> Seek
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Find Team</a></li>
              <li><a class="dropdown-item" href="#">Find player</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">More...</a></li>
            </ul>
          </li>
        </ul>

        <?php if (isset($_SESSION['id'])): ?>
          <ul class="navbar-nav ms-auto">
            <p class="nav-link">Hi,<?=$_SESSION['tipe']?> User <?=$_SESSION['nama']?></p>
            <li class="nav-item"><a href="post.php" class="nav-link">My Post</a></li>
            <li class="nav-item"><a href="logout.php" class="btn btn-danger">Log out</a></li>
          </ul>
        <?php else: ?>
          <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Login
          </button>
        <?php endif ?>



        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <form action="" method="POST">
                <div class="modal-body">

                  <!-- Login -->
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" <?php if (isset($_COOKIE['username'])): ?>
                    value="<?=$_COOKIE['username']?>"
                    <?php endif ?>>
                    <div id="emailHelp" class="form-text">Make it simple dummy</div>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" <?php if (isset($_COOKIE['password'])): ?>
                    value="<?=$_COOKIE['password']?>"
                    <?php endif ?>>
                    <div class="form-check">
                      <input type="checkbox" name="remember" id="remember" class="form-check-input">
                      <label for="remember" class="form-label">Remember Me</label>
                    </div>
                  </div>
                  <p>Become part of Eseeker <a href="Eseeker_registrasi.php" class="link-primary">here</a> !</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <button type="submit" name="login" class="btn btn-primary">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      </div>
    </div>
  </nav>

  <img src="Eseeker.png" class="img-fluid" alt="...">

  <!-- Updates -->
  <p style="font-family: 'Roboto', sans-serif; font-size: 70px; margin-left: 4.5cm; margin-top: 2cm; color: #74b9ff;">
  Updates</p>
  <div class="shadow p-3 mb-5 bg-body rounded mx-5 my-5">
    <?php foreach ($select as $key): ?>
      <div class="row justify-content-around mb-5">
        <div class="col-md-6">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/<?=substr($key['video'], 17);?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-md-6" style="padding-right: 4cm;">
          <h5><?=$key['title']?></h5>
          <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #0984e3; font-size: 20px;"> 
          <?=$key['deskripsi']?>
           </p>

          </div>
        </div>
      <?php endforeach ?>
    </div>

    <!-- News -->
    <div class="jumbotron my-3">
      <p class="text-end" style="font-family: 'Roboto', sans-serif; font-size: 70px; margin-right: 4.5cm; color: #74b9ff;">
      News</p>
      <div class="row justify-content-around">
        <div class="col-sm-5">
          <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #0984e3; padding-left: 2cm; font-size: 20px;">
            Tournamen Dota 2 The international merupakan tournament terbesar yang pernah diselenggarakan di
            dunia
            esport.
          Di tahun 2019 ini The international 2019 akan diselenggarakan di United States, The Seattle</p>
          <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #0984e3; padding-left: 2cm; font-size: 20px;">
            Prize pool
            TI 10 tersebut berhasil mencapai angka tersebut, hanya 15 menit sebelum berakhirnya TI10 Battle
            Pass dan
            crowdfunding Dota 2.
            Dengan prize pool tersebut, DOTA 2 resmi jadi game atau esport dengan hadiah turnamen paling
            besar di
          planet bumi.</p>

        </div>
        <div class="col-sm-5">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2042777.5472358048!2d-118.35953783326362!3d47.1257291505673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5490151f4ed5b7f9%3A0xdb2ba8689ed0920d!2sSpace%20Needle!5e0!3m2!1sen!2sid!4v1635356710123!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <!-- bet -->
  <p style="font-family: 'Roboto', sans-serif; font-size: 50px; color: #74b9ff; text-align: center;">
  Place Bet !</p>
  <p class="lh-base my-2" style="font-family: 'Roboto', sans-serif; color: #0984e3; text-align: center; font-size: 20px;">
  Predict the winner, and win the prize !</p>

  <div class="shadow p-3 mb-5 bg-body rounded mx-5 my-5">
    <div class="container my-5">
      <div class="row align-items-center">
        <div class="col">
          <p class="text-start text-primary" style="font-family: 'Roboto', sans-serif; text-align: center; font-size: 20px;">
          Navi ( 35% )</p>
        </div>
        <div class="col">
          <div class="d-grid gap-2 col-6 mx-auto mr-5">
            <button class="btn btn-success btn-lg" style="width: 200px;" type="button">Bet</button>
          </div>
        </div>
        <div class="col">
          <p class="text-end text-danger" style="font-family: 'Roboto', sans-serif; text-align: center; font-size: 20px;">
          Gambit ( 65% )</p>
        </div>
      </div>
    </div>
    <div class="progress mx-5 my-5">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar bg-danger" role="progressbar" style="width: 65%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>

    <div class="container my-5">
      <div class="row align-items-center">
        <div class="col">
          <p class="text-start text-primary" style="font-family: 'Roboto', sans-serif; text-align: center; font-size: 20px;">
          Sentinel ( 72% )</p>
        </div>
        <div class="col">
          <div class="d-grid gap-2 col-6 mx-auto mr-5">
            <button class="btn btn-success btn-lg" style="width: 200px;" type="button">Bet</button>
          </div>
        </div>
        <div class="col">
          <p class="text-end text-danger" style="font-family: 'Roboto', sans-serif; text-align: center; font-size: 20px;">
          F4Q ( 28% )</p>
        </div>
      </div>
    </div>
    <div class="progress mx-5 my-5">
      <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar bg-danger" role="progressbar" style="width: 28%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </div>


  <!-- Feature -->
  <div class="jumbotron">
    <div class="container">
      <p style="font-family: 'Roboto', sans-serif; font-size: 50px; margin: 2cm; color: #74b9ff; text-align: center;">
      More Feature !</p>
      <div class="mx-5 my-3 row row-cols-1 row-cols-md-3 g-2 justify-content-center">

        <!-- Free -->
        <div class="col">
          <div class="card">
            <i class="bi bi-people" style="font-size: 100px; text-align: center;"></i>
            <div class="card-body">
              <h3 class="card-title">Starter</h3>
              <h5 class="card-text"><small class="text-muted">$4.99 / Month</small></h5>
              <div class="card-text text-center">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="color: #2ecc71;"></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Team Search</b></li>
                  <li class="list-group-item" style="color: red;"><b>Show Rank</b></li>
                  <li class="list-group-item" style="color: red;"><b>Rank Search</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Become Manager</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Bet </b></li>
                </ul>
                <div class="card-footer text-center">
                  <a href="Eseeker_premium.php" class="btn btn-primary"><i class="bi bi-cart4"></i> Get Now !
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Premium -->
        <div class="col">
          <div class="card">
            <i class="bi bi-star" style="font-size: 100px; text-align: center;"></i>
            <div class="card-body">
              <h5 class="card-title">Premium </h5>
              <h5 class="card-text"><small class="text-muted">$9.99 / Month</small></h5>
              <div class="card-text text-center">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item" style="color: #2ecc71;"></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Team Search</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Show Rank</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Rank Search</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Become Manager</b></li>
                  <li class="list-group-item" style="color: #2ecc71;"><b>Bet</b></li>
                </ul>
                <div class="card-footer text-center">
                  <a href="Eseeker_premium.php" class="btn btn-primary"><i class="bi bi-cart4"></i> Get Now !</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>