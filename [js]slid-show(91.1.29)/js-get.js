// JavaScript Document
window.onload=function(){

	var form1=document.forms.item(0)
	form1.onsubmit = function()
	{
		for(var i=0;i<form1.elements.length;i++)
		{
			if(form1.elements.item(i).className=='ok')
			{
				return true;
			}
			else break;
		}
			 
	}
	
	for(var i=0;i<form1.length;i++){
		var frm=form1.elements.item(i);
		frm.onfocus=function(){
			if(this.value==this.defaultValue){
				this.value='';	
			}
		}
		frm.onblur=function(){
			if(this.value=='' || isNaN(this.value) || this.value<=0){
				this.value=this.defaultValue;
				this.className='nok';	
			}
			else{
				this.className='ok';		
			}
		}
	}
}