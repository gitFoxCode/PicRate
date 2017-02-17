<?php $logged = false;?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PicRate - Oceniaj i dodawaj zdjęcia!</title>
	<link rel="stylesheet" href="access.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="root.css">
</head>
<body>
<div class="global-wrapper">
	<div class="page-wrapper">
		<?php include('nav.php') ?>

		<main>
			<div class="access-image">
			</div>
			<div class="access-container">
				<h1>Zaloguj się</h1>
				<form>
					<label for="username">
						<span class="input-name">Username</span>
						<input type="text" id="username" class="u-input" name="username" placeholder="Jan Kowalski">
					</label>

					<label for="password">
						<span class="input-name">Password</span>
						<input type="password" id="password" class="p-input" name="password" placeholder="Wpisz tutaj hasło">
						<a href="#" class="help">Zapomniałem hasła</a>
					</label>

					<input type="submit" value="Zaloguj się" class="login-btn">
					<a href="register.php" class="help">Stwórz nowe konto</a>
				</form>
			</div>
		</main>

	</div>
</div>
<script src="root.js"></script>
</body>
</html>