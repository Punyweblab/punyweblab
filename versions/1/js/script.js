

// This will handle the post for submission Ajax request
	$('#POSTFORM').submit(function(){
		var url = 'inc/process_message.php';
		var sendInfo = $('#POSTFORM').serialize();

		$.post(url, sendInfo, function(data) {
			 var message = data; // Store data into a working variable
			 var response = message.length;// Current lenght of working variable


			 if (response == 29 || response == 24) {
			 	// Show error
			 	$('.postResult p').html(message).removeClass("alert-success").addClass("alert-error");	
			 }else{
			 	// Show succes and clear all form fields
			 	$('.postResult p').html(message).removeClass("alert-error").addClass("alert-success");	
			 	$('.textInput, form textarea').val("");
			 };

		});
		return false;
	});


 //Hide error or success when user types
 $('.textInput, form textarea').keydown(function(){
 	$('.postResult p').empty().removeClass("alert-success").removeClass("alert-error");
 });





 //animate the circle icons and speacial line 
  $('.1').animate({
  	opacity: 1,
  	},1000,function(){
  		$('.2').animate({
  			opacity: 1,
  		},1000,function(){
  			$('.3').animate({
  				opacity: 1,
  			},1000,function(){
  				$('.special_line').animate({
			  	width: "+=100%",
			  	},1000);
  			});
  		});
  	});
   



