// JavaScript Document
$(function(){
	
	var slide=$('.accslid .tran > div');
	
	slide.mouseover(function(){
		slide.stop().animate({'width':'100px'},700);
		$(this).stop().animate({'width':'500px'},700);	
	});	
});