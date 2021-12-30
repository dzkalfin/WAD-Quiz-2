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

    <title>Create News</title>
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

                <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 20px; color: #74b9ff;">Admin</p>

            </div>
        </div>
    </nav>

    <!-- Form -->
    <div class="shadow p-3 mb-5 bg-body rounded mx-5 my-5">

        <p class="text-center" style="font-family: 'Roboto', sans-serif; font-size: 40px; color: #74b9ff;">

            Post News</p>

        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Title</label>
                <input type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="row">
                <div class=" col mb-3">
                    <label for="formFile" class="form-label">Thumbnail Photo</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-md-1">
                    <p class="text-center mt-4">Or</p>
                </div>
                <div class="col mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Embed video</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
            </div>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end my-4">
                <button class="btn btn-secondary me-md-2" type="button"> Cancel </button>
                <button class="btn btn-primary" type="submit"> Post </button>
            </div>
        </form>
    </div>
</body>

</html>