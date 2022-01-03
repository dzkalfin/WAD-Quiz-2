<?php  

if (!isset($_SESSION)) {
	
	session_start();
}

$conn = mysqli_connect('localhost','root','','eseeker');

function register($value)
{
	

	global $conn;

	$nama = $value['nama'];
	$username = $value['username'];
	$email = $value['email'];
	$tanggal = $value['tanggal'];
	$password = $value['password'];
	$phone = $value['phone'];
	$level = $value['level'];

	$cek = "SELECT * FROM users WHERE email = '$email'";
	$select = mysqli_query($conn,$cek);

	$cekemail = mysqli_num_rows($select);

	if ($cekemail == 0) {
		
		$insert = "INSERT INTO users VALUES ('','$nama','$phone','$tanggal','$level','$username','$email','$password', 'Free')";
		mysqli_query($conn,$insert);

		echo "<script>alert('Berhasil Mendaftar')</script>";

		header('Location:Eseeker_index.php');

	}else{

		echo "<script>alert('Email Sudah Terdaftar')</script>";
		// header('Location:registrasi.php');
	}

}

function login($value)
{
	
	global $conn;

	$username = $value['username'];
	$password = $value['password'];


	$cek = "SELECT * FROM users WHERE username = '$username'";
	$select = mysqli_query($conn,$cek);

	$cekemail = mysqli_num_rows($select);

	if ($cekemail == 1) {
		
		$data = mysqli_fetch_assoc($select);

		if ($password == $data['password']) {
			

			$_SESSION['id'] = $data['user_id'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['tipe'] = $data['tipe'];

			if ($data['level'] == 2) {
				
				header('Location:admin');

			}else{

				if (isset($_POST['remember'])) {

					setcookie('username', $_POST['username'], strtotime('+7 days'), "/");
					setcookie('password', $_POST['password'], strtotime('+7 days'), "/");
				}

				header('Location:Eseeker_index.php');
			}

		}else{

			echo "<script>alert('Password Salah')</script>";

		}
	}else{
		echo "<script>alert('Login Gagal')</script>";
	}
}

function post($value)
{
	global $conn;

	$user_id = $_SESSION['id'];

	$title = $value['title'];
	$deskripsi = $value['deskripsi'];
	$video = $value['video'];

	$sql = "INSERT INTO post VALUES ('','$title','$deskripsi','$video','$user_id')";
	mysqli_query($conn,$sql);

	header('Location:post.php');

}

if (isset($_GET['deletepost'])) {
	
	$id = $_GET['deletepost'];

	$sql = "DELETE FROM post WHERE post_id = '$id'";
	mysqli_query($conn,$sql);
	header('Location:post.php');
}

?>