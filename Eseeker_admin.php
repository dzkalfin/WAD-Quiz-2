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

    <title>Home | Admin</title>
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
                        <a class="nav-link " href="#"><i class="bi bi-newspaper"></i> Post News</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="#"><i class="bi bi-trophy"></i> Create Tournament</a>
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

                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 20px; color: #74b9ff;"><img src="Hu tao.jpg" width="50" class="img-fluid rounded" alt="...">
                    Admin</p>
            </div>
        </div>
    </nav>

    <!-- your news -->
    <p class="my-5" style="font-family: 'Roboto', sans-serif; font-size: 50px; color: #74b9ff; text-align: center;">
        Your News Post</p>

    <div class="shadow p-3 mb-5 bg-body rounded mx-5 my-5">
        <div class="row justify-content-around mb-5">
            <div class="col-2">
                <iframe class="justify-content-center align-items-center" width="560" height="315" src="https://www.youtube.com/embed/LJ0w_9-qXpM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-5" style="padding-right: 4cm;">
                <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #0984e3; font-size: 30px;">Valorant Champions Skin 2021</p>
                <br>
                <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #3c6382; font-size: 20px;">Post Status :</p>
                <i class="bi bi-eye-fill">897234</i>
                <br>
                <br>
                <i class="bi bi-heart-fill"> 300 </i>
                <br>
                <br>
                <i class="bi bi-share-fill"> 20</i>
                <br>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-info"><i class="bi bi-pencil"></i> Edit</button>
                    <button type="button" class="btn btn-danger"><i class="bi bi-trash"></i> Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="shadow p-3 mb-5 bg-body rounded mx-5 my-5">
        <div class="row justify-content-around mb-5">
            <div class="col-2">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/Go7SeJ-yOL4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-5" style="padding-right: 4cm;">
                <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #0984e3; font-size: 30px;"> Genshin Impact : Eula</p>
                <br>
                <p class="lh-base" style="font-family: 'Roboto', sans-serif; color: #3c6382; font-size: 20px;">Post Status :</p>
                <i class="bi bi-eye-fill">1285834</i>
                <br>
                <br>
                <i class="bi bi-heart-fill"> 8734 </i>
                <br>
                <br>
                <i class="bi bi-share-fill"> 593</i>
                <br>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-info"><i class="bi bi-pencil"></i> Edit</button>
                    <button class="btn btn-danger" type="button"><i class="bi bi-trash"></i> Delete</button>
                </div>
            </div>
        </div>
    </div>

    </section>