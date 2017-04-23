<?php 
	session_start(); //

	/// Jeżeli zalogowany tutaj
	//
	//
	//
	//unset($_SESSION['e']);


	if (isset($_POST['submit'])){
		$OK = true;

		// Username validate:
		$uname = $_POST['username'];
			
		if (ctype_alnum($uname)==false)
		{
			$OK = false;
			$_SESSION['e'] = "Nick może składać się tylko z liter i cyft (bez polskich znaków)";
		}

		// Email validate:
		$uemail = $_POST['email'];
		$emailF = filter_var($uemail, FILTER_SANITIZE_EMAIL);

		if ((filter_var($emailF, FILTER_VALIDATE_EMAIL)==false) || ($emailF!=$uemail))
		{
			$OK = false;
			$_SESSION['e'] = "Twój email jest niepoprawny!";
		}
		// Password hash:
		$upassword = $_POST['password'];
		$phash = password_hash($upassword, PASSWORD_DEFAULT);

		// Checkbox validate:
		if (!isset($_POST['check']))
			{
				$OK = false;
				$_SESSION['e'] = "Zaakceptuj regulamin!";
			}
		// Database connect
		require_once "connect.php";

		// Login exist validate:
		$sql = $conn->query("SELECT id FROM users WHERE username='$uname'");
					
					
		$hm_u = $sql->num_rows;
		if($hm_u>0){

			$OK = false;
			$_SESSION['e']="Istnieje już ktoś o takim nicku!";
		}

		// Email exist validate:
		$sql = $conn->query("SELECT id FROM users WHERE email='$uemail'");
					
					
		$hm_e = $sql->num_rows;
		if($hm_e>0){

			$OK = false;
			$_SESSION['e'] = "Ten email jest już w użyciu!";
		}


		if ($OK == true){

			$url = "userdata/avatars/user.png";
			unset($_SESSION['e']);

			// Validate done:
			if ($conn->query("INSERT INTO users VALUES (NULL, '$uname', '$phash', '$uemail', now(), 0, '$url', 0, 'null', 'null', 'null', 'null', 'null', 'null')")) {
				echo "cosss";

				$_SESSION['success_registred'] = true;
				$conn->close();
				header('Location: ../login.php');
			}
			else{

				throw new Exception($conn->error);

			}
		}
		else{
			$conn->close();
			header('Location: ../register.php');
		}
	}
























?>