<?php  

include '../config.php';


$sql = "SELECT * FROM post INNER JOIN users ON post.user_id = users.user_id";
$select = mysqli_query($conn,$sql);

$i = 1;

if (isset($_GET['deletepost'])) {
	
	$id = $_GET['deletepost'];

	$sql = "DELETE FROM post WHERE post_id = '$id'";
	mysqli_query($conn,$sql);
	header('Location:home.php');
}

?>
<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<title>Admin</title>
	</head>
	<body>
		<div class="d-flex">
			<div class="col-md-3 p-3 bg-dark text-muted vh-100" >
				<div style="min-height: 85vh;">
					<h1 class="display-6">Daftar table</h1>
					<a href="home.php" class="nav-link text-muted">Tabel Posting</a>
					<a href="user.php" class="nav-link text-muted">Tabel User</a>
				</div>
				<a href="../logout.php" class="btn btn-danger">Log out</a>
			</div>
			<div class="col-md-8 m-3">
				<div class="text-center">
					<h1 class="display-3">Tabel Posting</h1>
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Desription</th>
								<th scope="col">Link Video</th>
								<th scope="col">Diposting Oleh</th>
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
									<td><?=$key['nama']?></td>
									<td><a class="btn btn-danger" href="home.php?deletepost=<?=$key['post_id']?>">Delete Post</a></td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>



		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>