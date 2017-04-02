<?php $logged = false;
	$cnav = false;
	?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PicRate - Oceniaj i dodawaj zdjęcia!</title>
	<link rel="stylesheet" href="css/home.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
</head>
<body>
<div class="global-wrapper">
	<div class="first-page">
		<?php include('nav.php') ?>
		<main>
			<img class="logo" src="img/logo.png" alt="PicRate.com">
			<h1 class="title"><b>Pic</b>Rate</h1>
			<h3>
				 Oceniaj zdjęcia i dodawaj własne - poznaj technikę innych i zainspiruj się! 
			</h3>

			<div class="btn-container">
				<a href="register.php">
					<button type="button" class="btn main-register">
						Zarejestruj się
					</button>
				</a>

				<a href="main.php?anon=true">
					<button type="button" class="btn main-annonimous">
						Oceniaj anonimowo
					</button>
				</a>
			</div>

			<div class="gotonext">
				<p>Zobacz więcej!</p>
			</div>
		</main>

</div>
<script src="js/root.js"></script>
</body>
</html>