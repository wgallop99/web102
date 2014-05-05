$(function() {
//input 
	$("input").focus(function(){
		  $(this).css("background-color","#9EA5A5");
		});
	$("input").blur(function(){
	    $(this).css("background-color","#FDFDFD");
	  });
});
