<?php
if($cnav){
	echo '<nav class="top-nav cnav">';
}
else{
echo '<nav class="top-nav">';
} ?>
	<span class="ghome">
		<img class="nav-logo" src="img/logo.png" alt=""> 
		<div class="nav-logo-text">
			<span>
				PicRate
			</span>
		</div>
	</span>
	<?php if(!$logged){ echo '<a href="login.php" class="l-btn">Zaloguj się</a>;';}
	else{
	echo '<button class="user-nav-block">';
	echo	'<div class="user-nav-avatar">';
	// echo 	'<img src="userdata/avatars/avatar.png" alt="" class="nav-avatar">'; // Avatar code here
	echo '</div>';
	echo	'FoxCode';
	echo	'<div class="un-container">';
	echo	'<ul>';
	echo		'<a href="upload.php"><li><span class="nav-icon nav-icon-photo"></span>Dodaj zdjęcie</li></a>';
	echo		'<a href="profile.php"><li><span class="nav-icon nav-icon-profile"></span>Mój profil</li></a>';
	echo		'<a href="settings.php"><li><span class="nav-icon nav-icon-acc"></span>Ustawienia konta</li></a>';
	echo		'<a href="action/logout.php"><li><span class="nav-icon nav-icon-logout"></span>Wyloguj się</li></a>';
	echo	'</ul>';
	echo    '</div>';
	echo '</button>';
	} ?>
</nav>
<?php if(isset($navfix)){
	echo "";
}
else{
	echo '<div class="navfix"></div>';
}
