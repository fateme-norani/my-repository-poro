$(function(){
	$('button').on('click',function(){
		$(this).css({'background-image':'url(images/reset.jpg)'});
		$('.more').slideDown();	
	});
	$('.more').on('mouseleave',function(){
       	$(this).slideUp(600);
		$('button').css({'background-image':'url(images/more-details-button.jpg)'});	
    });		
});
