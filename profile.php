<?php $logged = true; 
      $cnav = true; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Ustawienia</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
	<link rel="stylesheet" href="css/global.css">
</head>
<body>
<div class="global-wrapper">
	<div class="page-wrapper">
		<?php include('nav.php') ?>

		<main class="block">
			<div class="user_banner">
				<div class="user_header profileicon"> Twój profil </div>
				<div class="user_avatar" <?php echo 'style="background: url('.$_SESSION['avatar'].')"' ?> >
				</div>
			</div>
			<div class="user_container">
				<div class="user_username">
					<span class="user_username_header"> <?php echo $_SESSION['user'] ?> </span>
					<span class="user_username_rank"> <?php if($_SESSION['admin'] > 0){ echo "Administrator";}else{echo "Użytkownik";}?> </span>
				</div>
			</div>
			<div class="user_content">

				<div class="user_columns">
					<div class="user_left">
						<div class="user_line nomargin">
							<div class="user_info">
								<div class="user_info_name">
									Zdjęcia
								</div>
								<div class="user_info_value">
									<?php echo $_SESSION['img_count'] ?>
								</div>
							</div>

							<div class="user_info">
								<div class="user_info_name">
									Średnia
								</div>
								<div class="user_info_value">
									UKRYTE
								</div>
							</div>
						</div>

						<div class="user_line">
							<div class="user_info">
								<div class="user_info_name">
									E-mail
								</div>
								<div class="user_info_value">
									UKRYTE
								</div>
							</div>

							<div class="user_info">
								<div class="user_info_name">
									Achivementy
								</div>
								<div class="user_info_value">
									0
								</div>
							</div>						
						</div>

						<div class="user_line">
							<div class="user_info">
								<div class="user_info_name">
									Data założenia
								</div>
								<div class="user_info_value">
									<?php echo $_SESSION['data'] // To fix (Y-M-d)?>
								</div>
							</div>

							<div class="user_info">
								<div class="user_info_name">
									Miejscowość
								</div>
								<div class="user_info_value">
									Kielce
								</div>
							</div>						
						</div>
					</div>
					<div class="user_right">
						<div class="user_line nomargin">
							<div class="user_info fb">
								<div class="user_info_name">
									Facebook
								</div>
								<a href="http://facebook.com/">
									<div class="user_info_value">
										<?php if($_SESSION['fb'] == 'null'){
											echo "<b>BRAK</b>";
											}else{
											echo $_SESSION['fb'];
												} ?>
									</div>
								</a>
							</div>

							<div class="user_info snap">
								<div class="user_info_name">
									Snapchat
								</div>
								<a href="#">
									<div class="user_info_value">
									<?php if($_SESSION['snap'] == 'null'){
										echo "<b>BRAK</b>";
									}else{
										echo $_SESSION['snap'];
									} ?>
									</div>
								</a>
							</div>
						</div>

						<div class="user_line">
							<div class="user_info pinterest">
								<div class="user_info_name">
									Pinterest
								</div>
								<a href="http://pinterest.com">
									<div class="user_info_value">
									<?php if($_SESSION['print'] == 'null'){
										echo "<b>BRAK</b>";
									}else{
										echo $_SESSION['print'];
									} ?>
									</div>
								</a>
							</div>

							<div class="user_info twitter">
								<div class="user_info_name">
									Twitter
								</div>
								<a href="http://twitter.com">
									<div class="user_info_value">
									<?php if($_SESSION['twitter'] == 'null'){
										echo "<b>BRAK</b>";
									}else{
										echo $_SESSION['twitter'];
									} ?>
									</div>
								</a>
							</div>						
						</div>

						<div class="user_line">
							<div class="user_info tumbrl">
								<div class="user_info_name">
									Tumbrl
								</div>
								<a href="http://tumbrl.com">
									<div class="user_info_value">
									<?php if($_SESSION['tumb'] == 'null'){
										echo "<b>BRAK</b>";
									}else{
										echo $_SESSION['tumb'];
									} ?>
									</div>
								</a>
							</div>

							<div class="user_info web">
								<div class="user_info_name">
									Strona WWW
								</div>
								<a <?php 
								if($_SESSION['web'] == 'null')
									{echo 'href="#"';}
								else{ echo 'href="'.$_SESSION['web'].'"';}
								 ?>">
									<div class="user_info_value">
									<?php if($_SESSION['web'] == 'null'){
										echo "<b>BRAK</b>";
									}else{
										echo "<b> KLIKNIJ </b>";
									} ?>
									</div>
								</a>
							</div>					
						</div>
					</div>
				</div>
				<section class="section">
					<h3>Ostatnio zdobyte achivementy</h3>
					<div class="achivement_blocks">
						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

						<div class="achivement_img_container">
							<div class="achivement_img">
								<img src="img/achivements/disable.png">
							</div>
							<div class="achivement_desc">Achivementy niedostępne</div>
						</div>

					</div>
				</section>

			</div>
		</main>

	</div>
</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="js/root.js"></script>
</body>
</html>