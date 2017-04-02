(function() {  


	//// homepage ////
document.querySelector('.ghome').addEventListener("click", goToHome, false);

function goToHome(){
	window.location = 'index.php';   
}

  //// user navigation ////
var userNav = document.querySelector(".un-container"),
	userNavBtn = document.querySelector(".user-nav-block");

/*	userNavBtn.addEventListener("click", openUserNav, false);

function openUserNav(){
	if(userNav.display == 'block'){
		return;
	} else{
		userNav.display = 'block';
	}
}
*/

 $('.user-nav-block').click(function (e) {
        $('.un-container').stop(true).show();
    });
    $(document).click(function (e) {
        if (!$(e.target).closest('.user-nav-block, .un-container').length) {
            $('.un-container').stop(true).hide();
        }
    });

})();
