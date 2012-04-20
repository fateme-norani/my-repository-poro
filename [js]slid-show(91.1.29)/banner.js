// JavaScript Document
window.onload=function(){
	var scrolDiv=document.getElementsByClassName('banner').item(0).getElementsByClassName('scrol').item(0);
	
	var dokmeUl=document.getElementsByClassName('contaner').item(0).getElementsByClassName('dokme').item(0);
	
	var dokmeLi=dokmeUl.getElementsByTagName('li');
	
	var lenPic=dokmeLi.length;
	//alert(lenPic);
	var picWidth=640;
	
	var activSlid=0;
	
	scrolDiv.style.width=((picWidth*lenPic)+100)+'px';
	
	dokmeUl.style.width=(lenPic*(25+5))+'px';
	
	var ulbtns=document.getElementsByClassName('banner').item(0).getElementsByClassName('btn').item(0);
	
	function gotoslid(n){
		if(n>=lenPic) n=0;
		if(n<0) n=lenPic-1;
		scrolDiv.style.left=(-n*picWidth)+'px';
		activSlid=n;	
	}
	
	function nextSlid(){
		gotoslid(activSlid+1);	
	}
	
	function backSlid(){
		gotoslid(activSlid-1);	
	}
	
	for(var i=0;i<lenPic;i++){
		(function(j){
			dokmeLi.item(j).onclick=function(){
				gotoslid(j);
				//alert(scrolDiv.style.left);
			}
		})(i);
	}
	setInterval(nextSlid,4000);
	document.getElementById('back').onclick=backSlid;
	document.getElementById('next').onclick=nextSlid;
}