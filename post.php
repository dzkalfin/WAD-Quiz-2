<?php  

include 'config.php';

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM post WHERE user_id = '$user_id'";
$select = mysqli_query($conn,$sql);

$cek = mysqli_num_rows($select);

$i = 1;

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
			<a class="navbar-brand" href="Eseeker_index.php">Eseeker</a>
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
										<input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										<div id="emailHelp" class="form-text">Make it simple dummy</div>
									</div>
									<div class="mb-3">
										<label for="exampleInputPassword1" class="form-label">Password</label>
										<input type="password" name="password" class="form-control" id="exampleInputPassword1">
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

	<div class="container">
		<div class="text-center my-5">
			<h1 class="display-6">My Post</h1>
			<?php if ($cek == 0): ?>
				<p class="text-muted">Belum Punya Post an nih, mau post?</p>
				<a href="Eseeker_create news.php" class="btn btn-primary">Buat Post</a>
			<?php else: ?>
				<a href="Eseeker_create news.php" class="btn btn-primary my-3">Buat Post</a>
				<table class="table">
					<thead class="table-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col">Title</th>
							<th scope="col">Desription</th>
							<th scope="col">Link Video</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($select as $key): ?>
							<tr>
								<th scope="row"><?=$i++?></th>
								<td><?=$key['title']?></td>
								<td><?=$key['deskripsi']?></td>
								<td><a href="<?=$key['video']?>"><?=$key['video']?></a></td>
								<td><a class="btn btn-danger" href="config.php?deletepost=<?=$key['post_id']?>">Delete Post</a></td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			<?php endif ?>
		</div>
	</div>

</body>
</html>