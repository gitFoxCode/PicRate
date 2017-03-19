(function() {  
			    function readURL(input) {
			        if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            
            reader.onload = function (e) {
            	$('.img').css('visibility','visible');
            	$('.upload_box span').css('display','none');
                $('.img-bg').attr('src', e.target.result);
                $('.img').attr('src', e.target.result);
            }
			            
			            reader.readAsDataURL(input.files[0]);
			        }
			    }
			    
			    $(".upload__box").change(function(){
			        readURL(this);
			    });
})();