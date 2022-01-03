<?php  

include '../config.php';


$sql = "SELECT * FROM users";
$select = mysqli_query($conn,$sql);

$i = 1;

if (isset($_POST['ubah'])) {
	
	$user_id = $_POST['user_id'];
	$tipe = $_POST['tipe'];

	$sql = "UPDATE users SET tipe = '$tipe' WHERE user_id = '$user_id'";
	mysqli_query($conn,$sql);
	header('Location:user.php');
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
			<div class="col-md-8 p-3">
				<div class="text-center">
					<h1 class="display-3">Tabel Posting</h1>
					<table class="table">
						<thead class="table-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Nama Lengkap</th>
								<th scope="col">Phone</th>
								<th scope="col">Tanggal Lahir</th>
								<th scope="col">Level</th>
								<th scope="col">Username</th>
								<th scope="col">Email</th>
								<th scope="col">Password</th>
								<th scope="col">Tipe User</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($select as $key): ?>
								<tr>
									<th scope="row"><?=$i++?></th>
									<td><?=$key['nama']?></td>
									<td><?=$key['phone']?></td>
									<td><?=$key['tanggal']?></td>
									<td>
										<?php if ($key['level'] == 2): ?>
											Admin
										<?php endif ?>
										<?php if ($key['level'] == 1): ?>
											Player
										<?php endif ?>
									</td>
									<td><?=$key['username']?></td>
									<td><?=$key['email']?></td>
									<td><?=$key['password']?></td>
									<td><?=$key['tipe']?></td>
									<td>
										<!-- Button trigger modal -->
										<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?=$i?>">
											Edit Tipe
										</button>

										<!-- Modal -->
										<div class="modal fade" id="staticBackdrop<?=$i?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="staticBackdropLabel">Ubah Tipe User</h5>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<form action="" method="POST">
														<div class="modal-body">
															<input type="number" name="user_id" value="<?=$key['user_id']?>" hidden>
															<select class="form-select" name="tipe">
																<option value="Free">Free</option>
																<option value="Starter">Starter</option>
																<option value="Premium">Premium</option>
															</select>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
															<button type="submit" name="ubah" class="btn btn-primary">Understood</button>
														</div>
													</form>	
												</div>
											</div>
										</div>
									</td>
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