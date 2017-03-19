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
				<div class="user_avatar">
				</div>
			</div>
			<div class="user_container">
				<div class="user_username">
					<span class="user_username_header">FoxCode</span>
					<span class="user_username_rank">Użytkownik</span>
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
									10
								</div>
							</div>

							<div class="user_info">
								<div class="user_info_name">
									Średnia
								</div>
								<div class="user_info_value">
									7.45
								</div>
							</div>
						</div>

						<div class="user_line">
							<div class="user_info">
								<div class="user_info_name">
									E-mail
								</div>
								<div class="user_info_value">
									foxcode@dsp.pl
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
									2017-03-16
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
							<div class="user_btn_container">
								<button type="button" class="user_btn">
									Zmień hasło
								</button>
							</div>
							<div class="user_btn_container">
								<button type="button" class="user_achivement_btn">
									<span>Achivements</span>
								</button>
							</div>
						</div>

						<div class="user_line">
							<div class="user_btn_container">
								<button type="button" class="user_btn">
									Zmień hasło
								</button>
							</div>
							<div class="user_btn_container">
								<button type="button" class="user_btn">
									Nie wysyłaj
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="user_stats_container">
					<h3>Statystyki</h3>

					<table class="stats_table">
						<thead>
						  <tr>
						    <th>Zdjęcie</th>
						    <th>Opis</th>
						    <th>Komentarze</th>
						    <th>Ostatnia ocena</th>
						    <th>Średnia ocena</th>
						    <th>Data Dodania</th>
						    <th>Akcje</th>
						  </tr>
						</thead>
						<tbody>
						   <tr>
						    <td>
						    	<div class="stats_img_container">
						    	<img src="userdata/images/picrate2315231.jpg" alt="userimg" class="stats_img">
						    	</div>
						    </td>
						    <td class="stats_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor unde hic, animi doloribus corporis modi accusamus aliquid expedita, iste, itaque saepe. Impedit inventore deserunt voluptas labore vel, repellat, eligendi ea! </td>
						    <td class="stats_comments int">2</td>
						    <td class="stats_rate int">6</td>
						    <td class="stats_average int">7.5</td>
						    <td>2017-03-16</td>
						    <td>
						    	<button type="button" class="stats_btn stop">Stop</button>
							    <button type="button" class="stats_btn remove">Usuń</button>
							    <button type="button" class="stats_btn edit">Edytuuj</button>
						    </td>
						  </tr>

						   <tr>
						    <td>
						    	<div class="stats_img_container">
						    		<img src="userdata/images/picrate2423141.jpg" alt="userimg" class="stats_img">
						    	</div>
						    </td>
						    <td class="stats_desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor unde hic, animi doloribus corporis modi accusamus aliquid expedita, iste, itaque saepe. Impedit inventore deserunt voluptas labore vel, repellat, eligendi ea! </td>
						    <td>2</td>
						    <td>6</td>
						    <td>7.5</td>
						    <td>2017-03-16</td>
						    <td>
						    	<button type="button" class="stats_btn stop">Stop</button>
							    <button type="button" class="stats_btn remove">Usuń</button>
							    <button type="button" class="stats_btn edit">Edytuuj</button>
						    </td>
						  </tr>
						</tbody>
					</table>

				</div>
			</div>
		</main>

	</div>
</div>
<script src="js/root.js"></script>
</body>
</html>