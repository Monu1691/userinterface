// custom js
$(document).ready(function(){

	//custom-form-sec form
	$('.custom-form-sec .input-bx input, .custom-form-sec .input-bx textarea').change(function(e){
		if($(this).val()!= ''){
			$(this).parent().addClass('floating');
		}else{
			$(this).parent().removeClass('floating');
		}
	});

	

// document ready end 
});


