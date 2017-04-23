<?php
      $cnav = false; 

      ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Zarejestruj się!</title>
	<link rel="stylesheet" href="css/access.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
</head>
<body>
<div class="global-wrapper">
	<div class="page-wrapper">
		<?php include('nav.php') ?>

		<?php
		if(isset($_SESSION['id'])){
			header("location: main.php");
			exit;
		} ?>

		<main>
			<div class="access-image">
			</div>
			<div class="access-container reg">
				<h1>Zarejestruj się</h1>
				<form action="action/register.php" method="post">
					<label for="username">
						<span class="input-name">Username</span>
						<input type="text" id="username" class="u-input" name="username" placeholder="Wpisz nick np. janek">
					</label>

					<label for="email">
						<span class="input-name">E-mail</span>
						<input type="email" id="email" class="e-input" name="email" placeholder="Wpisz email np. jan@kowalski.pl">
					</label>

					<label for="password">
						<span class="input-name">Password</span>
						<input type="password" id="password" class="p-input" name="password" placeholder="Wpisz tutaj hasło">
					</label>

					<label for="password">
						<span class="input-name">Repeat password</span>
						<input type="password" id="repassword" class="p-input" name="repassword" placeholder="Powtórz hasło">
					</label>

					<div id="error-area"></div>

					<button class="login-btn modalbtn" data-modal-id="1" id="reg-submit">Zarejestruj mnie</button>
					<a href="login.php" class="help">Mam już konto!</a>

					<div class="nextstep">
						<span class="closestep">&times;</span>
						<h1>Okej! Zostało jeszcze to</h1>
						<label for="check">
							<input type="checkbox" name="check" id="check">
							Akceptuje regulamin serwisu.
						</label>
						<div class="recapthatest">[Miejsce na recapthe]</div>

			<?php if(isset($_SESSION['e'])){  // To fix.
						echo '<script> document.querySelector(".nextstep").style.display = "block"; document.querySelector(".closestep").addEventListener("click", function(){document.querySelector(".nextstep").style.display = "none";}, false); </script>';} else{ } ?>

						<div id="error-area-2">
							
							<?php 
								if(isset($_SESSION['e'])){
									echo '<div class="error-lv2">';
									echo $_SESSION['e'];
									echo '</div>';
								}
							?>
							<!-- <div class="error-lv2">
							</div> -->
						</div>
						<input type="submit" class="login-btn" name="submit" value="Zakończ rejestracje!">
					</div>
				</form>
			</div>
		</main>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="js/root.js"></script>
<script src="js/access.js"></script>
</body>
</html>