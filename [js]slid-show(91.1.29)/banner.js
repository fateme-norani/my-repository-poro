// JavaScript Document
window.onload=function(){
	var scrolDiv=document.getElementsByClassName('banner').item(0).getElementsByClassName('scrol').item(0);
	
	var dokmeLi=document.getElementsByClassName('contaner').item(0).getElementsByClassName('dokme').item(0).getElementsByTagName('li');
	
	var lenPic=dokmeLi.length;
	//alert(lenPic);
	var picWidth=640;
	
	
	for(var i=0;i<lenPic;i++){
		(function(j){
			dokmeLi.item(j).onclick=function(){
				scrolDiv.style.left=(-j*picWidth)+'px';
				//alert(scrolDiv.style.left);
			}
		})(i);
	}
	
	
}