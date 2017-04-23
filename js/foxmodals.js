(function() {  
var modalBtn = document.querySelectorAll('.modalbtn');
var modalBox = document.querySelectorAll('.modalBox');
var modalClose = document.querySelectorAll('.modalClose');

for (i = 0; i < modalBtn.length; i++) {
    modalBtn[i].addEventListener("click", openModal, false);
}

function openModal(){

  window.onclick = function(e) {
      if (e.target == document.querySelector('.modalActive')) {
          closeModal();
      }
  }

  document.addEventListener('keyup', function(e) {
      if (e.keyCode == 27) {
          closeModal();
      }
  });

  for (j = 0; j < modalBox.length; j++) {
      if ( this.getAttribute('data-modal-id') == modalBox[j].getAttribute('data-modal-id') ){
        document.body.className = "modalActive";
        modalBox[j].style.display = "block";

        for (k = 0; k < modalClose.length; k++) {
          modalClose[k].addEventListener("click", closeModal, false);
        }
        break;
      }
    }

}

function closeModal(){
      document.body.className = "";
      modalBox[j].style.display = "none";
}
})();
