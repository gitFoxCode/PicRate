<?php 
	if(isset($_GET['anon'])) { $logged = false; } else { $logged = true; }
	  $cnav = true;?>
<html>
<head>
	<meta charset="UTF-8">
	<title>PicRate - Oceniaj i dodawaj zdjęcia!</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
	<link rel="stylesheet" href="css/global.css">
</head>
<body>
<!-- <div class="image-max-box">
	<img src="img/randomnumber.jpg" class="image-image">
	<div class="max-close">
		<span title="Wyjdz z trybu powiększenia">
			<img src="icons/minimalize.png" alt="[ /^]" class="image-options-icon">
		</span>
	</div>
</div> -->
<div class="global-wrapper">
		<?php include('nav.php');

		unset($_SESSION['e']);
		?>


		<main>
			<section class="left-column">
				<div class="image-container">
					<img src="img/randomnumber.jpg" alt="userImage" class="image-image-background">
					<img src="img/randomnumber.jpg" alt="userImage" class="image-image">
					<div class="image-options">
						<span title="Powiększ zdjęcie">
							<img src="icons/maximize.png" alt="[ /^]" class="image-options-icon maximize">
						</span>
					</div>
					<div class="image-im-info red" title="To zdjęcie było obrabiane"></div>
				</div>
				<div class="image-info">
					<div class="rate-user-info">
						<span class="rate-user-valuename">
							Autor:
						</span>
						<span class="rate-user-author">
							FoxCode
						</span>
					</div>
					<div class="rate-container">
						<input class="rate-range" type="range" max="10" value="5"> 
					</div>
					<div class="rate-info">
						<span class="rate">&#9733;</span>
						<span class="rate-value">4.23</span>
					</div>
				</div>
			</section>
			<section class="right-column">
				<div class="image-desc">
					<div class="desc"> 
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor repudiandae alias iusto quas, animi, ad ab, tempora magni ipsa ducimus molestias quaerat beatae illo recusandae perferendis dolores repellat facilis necessitatibus.
					</div>
					<div class="i-container">
						<div class="i-info-container">
							<div class="i-name i-orange">Nazwa</div><div class="i-value i-dorange">Wartosc</div>
						</div>

						<div class="i-info-container">
							<div class="i-name i-yellow i-icon-camera">Sprzęt</div><div class="i-value i-dyellow">Nikon</div>
						</div>

						<div class="i-info-container">
							<div class="i-name i-red i-icon-place">Miejsce</div><div class="i-value i-dred">Polska</div>
						</div>

						<div class="i-info-container">
							<div class="i-name i-green i-icon-model">Model</div><div class="i-value i-dgreen">Anna Rybacka</div>
						</div>

						<div class="i-info-container">
							<div class="i-name i-blue i-icon-web">Strona</div><div class="i-value i-dblue">wroclaw.com</div>
						</div>
				
					</div>
					<div class="rate-submit-container">
						<div class="rate-textrate">
							<div class="rate-textrate-name rate-color-d">Twoja ocena:</div><div class="rate-textrate-value rate-color">(5) Średnio</div>
						</div>
						<input type="submit" name="rate-submit" class="rate-submit-btn" value="&#9733; Wyślij ocene &#9733;" >
					</div>
				</div>
			</section>
		 </main>

</div>
<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="js/root.js"></script>
<script src="js/main.js"></script>
</body>
</html>