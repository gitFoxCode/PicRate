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
	<button class="user-nav-block">
		<div class="user-nav-avatar"></div>
		<?php if($logged == false) { echo '<a href="login.php" class="l-btn">Zaloguj się</a>'; }else{
				echo 'FoxCode';
			} ?>
	</button>
</nav>
<?php if(isset($navfix)){
	echo "";
}
else{
	echo '<div class="navfix"></div>';
}
