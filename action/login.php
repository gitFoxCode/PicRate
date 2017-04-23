<?php
	session_start();
	
	if ((!isset($_POST['username'])) || (!isset($_POST['username'])))
	{
		header('Location: ../login.php');
		$_SESSION['login_e'] = '<div class="register-error"> <b>Error:</b> Wprowadź dane!</div>';
		exit();
	}

	else if (($_POST['username']) == NULL || ($_POST['username']) == NULL)
	{
		header('Location: ../login.php');
		$_SESSION['login_e'] = '<div class="register-error"> <b>Error:</b> Wprowadź dane!</div>';
		exit();
	}

require_once "connect.php";
	
	$uname = $_POST['username'];
	$upass = $_POST['password'];
	
	$uname = htmlentities($uname, ENT_QUOTES, "UTS-8");
	
	
	if ($sql = @$conn->query(sprintf("SELECT * FROM users WHERE username='%s' ", 
	mysqli_real_escape_string($conn,$uname))));
		{
			$hw_u = $sql->num_rows;
				if($hw_u>0)
				{
					$row = $sql->fetch_assoc();
					
					if (password_verify($upass, $row['password']))
					{
						$_SESSION['logged'] = true;
						$_SESSION['id'] = $row['id'];
						$_SESSION['user'] = $row['username'];
						$_SESSION['email'] = $row['email'];
						$_SESSION['data'] = $row['data'];
						$_SESSION['img_count'] = $row['images_count'];
						$_SESSION['avatar'] = $row['avatar'];
						$_SESSION['admin'] = $row['admin'];
						$_SESSION['fb'] = $row['fb'];
						$_SESSION['twitter'] = $row['twitter'];
						$_SESSION['snap'] = $row['snap'];
						$_SESSION['print'] = $row['print'];
						$_SESSION['tumb'] = $row['tumb'];
						$_SESSION['web'] = $row['web'];
						
						unset($_SESSION['login_e']);
						$sql->close();
						header('Location: ../main.php');
					}
					else {
						$_SESSION['login_e'] = '<div class="register-error"> <b>Error:</b> Nieprawidłowy login lub hasło!</div>';
						header('Location: ../login.php');
					}
					
					
				} else {
						
						$_SESSION['login_e'] = '<div class="register-error"> <b>Error:</b> Nieprawidłowy login lub hasło!</div>';
						header('Location: ../login.php');
						
					}
			
		}
		$polaczenie->close();
		?>
	
