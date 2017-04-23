//(function() {  
		
	var	r_submit = document.querySelector('#reg-submit'),
		errorBox = document.querySelector('#error-area');

		r_submit.addEventListener("click", jsvalidate, false);

	function jsvalidate(e){
		e.preventDefault();

	var r_username = document.querySelector('#username').value,
		r_email = document.querySelector('#email').value,
		r_password = document.querySelector('#password').value,
		r_repassword = document.querySelector('#repassword').value;

	var errorMsg,
		errors;

		if(r_username == null || r_email == null || r_password == null || r_repassword == null || r_username == "" || r_email == "" || r_password == "" || r_repassword == ""){
			errorMsg = "Musisz wypełnić wszystkie pola!";
			errors = 1;
		}
		else if (r_username.length < 3 || r_username.length > 18){
			errorMsg = "Twój login musi mieć min. 3 znaki i max. 18 znaków";
			errors = 1;
		}
		else if (r_password.length < 6){
			errorMsg = "Twoje hasło jest za krótkie! (min. 6 znaków)";
			errors = 1;
		}
		else if (r_password != r_repassword){
			errorMsg = "Hasła się nie zgadzają!";
			errors = 1;
		}
		else if (r_email.indexOf("@") == -1 || r_email.indexOf(".") == -1){
			errorMsg = "E-mail jest błędny!";
			errors = 1;
		}

		if (errors == 1){
			errorBox.innerHTML = '<div class="register-error"> <b>Error:</b> '+ errorMsg +' </div>';
		}
		else {
			errorBox.innerHTML = '';
			opennext();
		}
	}
		function opennext(){
			document.querySelector('.nextstep').style.display = "block";
			document.querySelector('.closestep').addEventListener("click", function(){
				document.querySelector('.nextstep').style.display = "none";
			}, false);
		}
//})();