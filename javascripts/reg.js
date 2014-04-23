function submit()
	var firstName
	var lastName
	var emailAddress
	var password
	
	
function valditate()
{
	var pass1=document.getElementById('pass1');
	var pass2=document.getElementById('pass2');
	var message=document.getElementById('confirm');
	var matchColor="#2c9c49";
	var missColor="#ff6666";
	
	if (pass1.value==pass2.value)
	{
		pass2.style.backgroundColor=matchColor;
		message.style.color=matchColor;
		message.innerHTML="&#x2713 Passwords Match!";
	}	
	else 
	{	
		pass2.style.backgroundColor=missColor;
		message.style.color=missColor;
		message.innerHTML="&#x1f6ab Passwords do not match!";
	}
}//end of function validate	

//Will need the following inserted into the HTML code to make the function work inside of the retype password. 
// id="pass1"    ;          id="pass2" onkeyup="checkPass(); return false;"
//  <span id="message" class="message"></span>
function error()
	var firstName
	var lastName
	var emailAddress
	var password