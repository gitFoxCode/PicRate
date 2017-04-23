<?php
      $cnav = false; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PicRate - Logowanie</title>
	<link rel="stylesheet" href="css/access.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
</head>
<body>
<div class="global-wrapper">
	<div class="page-wrapper">
		<!-- Navigation -->
		<?php include('nav.php') ?> 
		<?php
		if(isset($_SESSION['id'])){
			header("location: main.php");
			exit;
		} ?>

		<main>
			<div class="access-image">
			</div>
			<div class="access-container">
				<h1>Zaloguj się</h1>
				<form action="action/login.php" method="POST">
					<label for="username">
						<span class="input-name">Username</span>
						<input type="text" id="username" class="u-input" name="username" placeholder="Wpisz tutaj swój login">
					</label>

					<label for="password">
						<span class="input-name">Password</span>
						<input type="password" id="password" class="p-input" name="password" placeholder="Wpisz tutaj hasło">
						<a href="#" class="help">Zapomniałem hasła</a>
					</label>

					<div id="error-area">
						<?php 
							if(isset($_SESSION['success_registred'])){
								echo '<div class="register-success"> <b>Success:</b> Konto zajerestrowane! Zaloguj się!</div>';
								unset($_SESSION['success_registred']);
							}
							else{
								if(isset($_SESSION['login_e'])){
									echo $_SESSION['login_e'];
									unset($_SESSION['login_e']);
								}
							}
						?>
					</div>

					<input type="submit" value="Zaloguj się" class="login-btn">
					<a href="register.php" class="help">Stwórz nowe konto</a>
				</form>
			</div>
		</main>

	</div>
</div>
<script src="js/root.js"></script>
</body>
</html>