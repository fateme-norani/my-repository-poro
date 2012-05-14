$(function(){
	$('button').click(function(){
		$(this).css({'background-image':'url(images/reset.jpg)'});
		
	});
	
	$('button').click(function(){
		$('.more').slideDown();	
	});
	$('.more').mouseleave(function(e) {
       	$(this).slideUp(600);
		$('button').css({'background-image':'url(images/more-details-button.jpg)'});	
    });		
});
