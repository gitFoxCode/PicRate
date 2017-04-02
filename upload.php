<?php $logged = true; 
      $cnav = true; ?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Wyślij swoje fotografie!</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,700i,900" rel="stylesheet">
	<link rel="stylesheet" href="css/root.css">
	<link rel="stylesheet" href="css/upload.css">
</head>
<body>
<div class="global-wrapper">
		<?php include('nav.php') ?>
	<main>
		<section class="upload-container">
		<label for="files" class="box">
			<div class="upload_box">
					<img src="" alt="" class="img-bg">
					<div class="img__box">
						<img src="" alt="No file selected" class="img">
					</div>
					<input type="file" class="upload__box" id="files">
					<span> Kliknij tutaj, żeby wybrać zdjęcie </span>

			</div>
		</label>



			<div class="error_box"></div>
			<form>
				<div class="upload_datas">
					<div class="left-column">
						<label for="title">
							<span class="u-input-name">
								Tytuł
							</span>
							<input type="text" class="u-input" id="title" name="title">
						</label>
					</div>
					<div class="right-column">
						<label for="description">
							<span class="u-input-name dsc">
								Opis
							</span>
							<span class="u-input-desc">
								Maksymalnie 300 znaków.
							</span>
							<textarea class="u-desc " id="description" name="description"></textarea>
						</label>
					</div>
				</div>
				<div class="u-title"><span>Dodatkowe informacje dotyczące zdjęcia</span></div>
				<div class="u-description"><span>Jeżeli nie chcesz, żeby te dane były pokazane przy zdjęciu zostaw pola puste.</span></div>
				<div class="upload_unn_datas">
					<div class="c-column">
						<label for="user-new-name" class="attr-label">
							<span class="u-input-name ">
								Własna nazwa
							</span>
							<input type="text" class="u-attr l" id="user-new-name" name="user-new-name" placeholder="np. Firma">
						</label>
						<label for="user-new-value" class="attr-label">
							<span class="u-input-name ">
								Własna wartość <button type="button" class="faq-btn"></button>
							</span>
							<input type="text" class="u-attr r" id="user-new-value" name="user-new-value" placeholder="np. Photo S.A">
						</label>
					</div>
					<div class="static_datas">
						<div class="left-column">
							<label for="s_model">
								<div class="static">
									<div class="static-name">
										Model aparatu
									</div><div class="static-value"><input type="text" class="u-static" id="s_model" name="s_model" placeholder="np. Nikon D500">
									</div>
								</div>
							</label>

							<label for="s_location">
								<div class="static">
									<div class="static-name">
										Miejsce
									</div><div class="static-value"><input type="text" class="u-static" id="s_location" name="s_location" placeholder=" np. Wrocław">
									</div>
								</div>
							</label>

							<label for="s_model-human">
								<div class="static">
									<div class="static-name">
										Model/Modelka
									</div><div class="static-value"><input type="text" class="u-static" id="s_model-human" name="s_model-human" placeholder="np. Anna Kowalska">
									</div>
								</div>
							</label>
						</div>
						<div class="right-column">
							<label for="s_program">
								<div class="static">
									<div class="static-name">
										Program*
									</div><div class="static-value"><input type="text" class="u-static" id="s_program" name="s_program" placeholder="np. Photoshop">
									</div>
								</div>
							</label>

							<label for="title">
								<div class="static">
									<div class="static-name">
										Nazwa
									</div><div class="static-value"><input type="text" class="u-static" id="title" name="title" placeholder="Wpisz tutaj wartość">
									</div>
								</div>
							</label>

							<label for="title">
								<div class="static">
									<div class="static-name">
										Nazwa
									</div><div class="static-value"><input type="text" class="u-static" id="title" name="title" placeholder="Wpisz tutaj wartość">
									</div>
								</div>
							</label>
						</div>
					</div>
					<div class="u-ex">
						<div class="u-edited">
							<label for="add_datas">
								<span> Dołączyć dane z profilu? (Linki do profili społecznościowych itd.) </span>
								   <label>
								     <input type="checkbox" id="add_datas" name="add_datas" checked>
								     <i></i>
								    </label>
							</label>
							<label for="edited">
								<span> *Czy zdjęcie było przerabiane? </span>
								   <label>
								     <input type="checkbox" id="edited">
								     <i></i>
								    </label>
							</label>

								<label for="download_allow">
								<span> *Pozwalasz na pobieranie tego zdjęcia za darmo? </span>
								   <label>
								     <input type="checkbox" id="download_allow" checked>
								     <i></i>
								    </label>
							</label>
						</div>
					</div>
				</div>
			</form>
			<div class="u-submit-container">
				<input type="submit" class="u-submit" value="Wyślij">
			</div>
		</section>
	</main>
</div>

<script src="https://code.jquery.com/jquery-3.1.1.js"></script>
<script src="js/root.js"></script>
<script src="js/upload.js"></script>
</body>
</html>