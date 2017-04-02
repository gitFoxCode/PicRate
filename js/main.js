(function() {  

	var nowImage = "img/randomnumber.jpg"; //dynamic image url

	/// Maximizer
	var maxBtn = document.querySelector(".maximize"),
		image = document.querySelector(".image-image");

	maxBtn.addEventListener("click", maximize, false);

	function maximize(){
		imageMax = document.createElement("div");
		imageMax.className = "image-max-box";
		imageMax.innerHTML = '<img src="' + nowImage + '" class="image-image">';
		imageMax.innerHTML += '<div class="max-close"> <span title="Wyjdz z trybu powiększenia"> <img src="icons/minimalize.png" alt="[ /^]" class="image-options-icon"> </span> </div> </div>';
		document.body.appendChild(imageMax);
		var minBtn = document.querySelector(".max-close");
		minBtn.addEventListener("click", minimalize, false);
	};

	function minimalize(){
		imageMax.parentNode.removeChild(imageMax);
	};




	var rateRange = document.querySelector(".rate-range"),
		rateNameBox = document.querySelector(".rate-textrate-name"),
		rateTextValue = document.querySelector(".rate-textrate-value");


	rateRange.addEventListener("change", changeRateValue, false);


	var mess0 = "(0) Ochydne.",
		mess1 = "(1) Bardzo źle",
		mess2 = "(2) Nie najlepiej..",
		mess3 = "(3) Słabe",
		mess4 = "(4) Powiedzmy..",
		mess5 = "(5) Średnio",
		mess6 = "(6) Ciekawe",
		mess7 = "(7) Całkiem całkiem",
		mess8 = "(8) Super!",
		mess9 = "(9) Piękne!",
		mess10 = "(10) Cudo!!";

	function changeRateValue(){
		var rateValue = this.value;

			switch(rateValue){
			  case "0" :
			    rateTextValue.innerHTML = mess0;
			    rateTextValue.style.backgroundColor = "#8997af";
			    rateNameBox.style.backgroundColor = "#656f82";
			    rateRange.style.color = "rgba(0, 126, 255, 0.8)";
			    break;
			  case "1" :
			    rateTextValue.innerHTML = mess1;
			    rateTextValue.style.backgroundColor = "#286de2";
			    rateNameBox.style.backgroundColor = "#1c4fa5";
			    rateRange.style.color = "rgba(34, 132, 232, 0.8)";
			    break;
			  case "2" :
			    rateTextValue.innerHTML = mess2;
			    rateTextValue.style.backgroundColor = "#7995d1";
			    rateNameBox.style.backgroundColor = "#4766a5";
			    rateRange.style.color = "rgba(67, 149, 232, 0.8)";
			    break;
			  case "3" :
			    rateTextValue.innerHTML = mess3;
			    rateTextValue.style.backgroundColor = "#aec1e8";
			    rateNameBox.style.backgroundColor = "#8999ba";
			    rateRange.style.color = "rgba(127, 188, 249, 0.8)";
			    break;
			  case "4" :
			    rateTextValue.innerHTML = mess4;
			    rateTextValue.style.backgroundColor = "#e5ac42";
			    rateNameBox.style.backgroundColor = "#b78a37";
			    rateRange.style.color = "rgba(249, 172, 127, 0.8)";
			    break;
			  case "5" :
			    rateTextValue.innerHTML = mess5;
			    rateTextValue.style.backgroundColor = "#f1a211";
			    rateNameBox.style.backgroundColor = "#bd7c03";
			    rateRange.style.color = "rgba(237, 108, 23, 0.8)";
			    break;
			  case "6" :
			    rateTextValue.innerHTML = mess6;
			    rateTextValue.style.backgroundColor = "#f06a11";
			    rateNameBox.style.backgroundColor = "#bd5603";
			    rateRange.style.color = "rgba(237, 97, 23, 0.8)";
			    break;
			  case "7" :
			    rateTextValue.innerHTML = mess7;
			    rateTextValue.style.backgroundColor = "#ef5310";
			    rateNameBox.style.backgroundColor = "#bd3403";
			    rateRange.style.color = "rgba(237, 83, 23, 0.8)";
			    break;
			  case "8" :
			    rateTextValue.innerHTML = mess8;
			    rateTextValue.style.backgroundColor = "#ef440f";
			    rateNameBox.style.backgroundColor = "#bd1b03";
			    rateRange.style.color = "rgba(237, 55, 23, 0.8)";
			    break;
			  case "9" :
			    rateTextValue.innerHTML = mess9;
			    rateTextValue.style.backgroundColor = "#ef300f";
			    rateNameBox.style.backgroundColor = "#bd0f03";
			    rateRange.style.color = "rgba(249, 44, 44, 0.8)";
			    break;
			  case "10" :
			    rateTextValue.innerHTML = mess10;
			    rateTextValue.style.backgroundColor = "#ef0f0f";
			    rateNameBox.style.backgroundColor = "#d80606";
			    rateRange.style.color = "rgba(255, 12, 12, 0.8)";
			    break;
			  default :
			    rateTextValue.innerHTML = mess5;
			}
		
	};









})();