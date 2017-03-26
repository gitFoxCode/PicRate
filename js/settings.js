(function() {  

/// Show editable media sites:
var mediaEditBtn = document.querySelector("#media_edit"),
	mediaEditContainer = document.querySelector(".media_edit"),
	mediaEdit = 0;

	mediaEditBtn.addEventListener("click", function(){
		if(mediaEdit==0){
		mediaEditContainer.style.display = "block";
		mediaEditBtn.innerHTML = "Wsuń";
		mediaEdit = 1;
		}
		else{
		mediaEditContainer.style.display = "none";
		mediaEditBtn.innerHTML = "Edytuuj";
		mediaEdit = 0;
		}
	}, false);

/// Show full resolution image on click
var imageToShow = document.querySelectorAll('.stats_img');

for (var i = 0; i < imageToShow.length; i++) {
	imageToShow[i].addEventListener("click", function(){
	console.log("test");
	}, false);
}
console.log();

})();
