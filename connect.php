<?php
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jk = $_POST['jk'];
	$email = $_POST['email'];
	$no_hp = $_POST['no_hp'];

	// Database connection
	$conn = new mysqli('localhost','root','','undangan');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into form(id, nama, nim, jk, email, no_hp) values('', ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $nama, $nim, $jk, $email, $no_hp);
		$execval = $stmt->execute();
		echo $execval;
		
		$stmt->close();
		$conn->close();
	}
?>

<!doctype html>
<html lang="en">
  <head>
	<title>Redirect</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="refresh" content="3; url=index.html"/>

	<!-- Bootstrap CSS v5.0.2 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
	<div class="text-center">
	  <p class="h3">Registration successfully...</p>
	  <p class="h3"><a href=index.html>klik untuk kembali</a></p>
	</div>
	<!-- Bootstrap JavaScript Libraries -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
