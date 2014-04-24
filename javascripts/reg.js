function submit()
	var firstName
	var lastName
	var emailAddress
	var password
	
	
	function validatePass()
	{

	    var pass1 = document.getElementById('pass1');
	    var pass2 = document.getElementById('pass2');
	        var message = document.getElementById('confirmMessage');
	    var goodColor = "#2c9c49";
	    var badColor = "#ff6666";
	   
	    if(pass1.value == pass2.value)
	    {
	       
	        pass2.style.backgroundColor = goodColor;
	        message.style.color = goodColor;
	        message.innerHTML = "&#x2713 Passwords Match!";
	    }else{
	        
	        pass2.style.backgroundColor = badColor;
	        message.style.color = badColor;
	        message.innerHTML = "&#x1f6ab Passwords Do Not Match!";
	    }
	}  //End of function validatePass
// Will need the following code in HTML to run
// <label for="pass1">Password:</label>
// <input type="password" name="pass1" id="pass1">

// <label for="pass2">Confirm Password:</label>
// <input type="password" name="pass2" id="pass2" onkeyup="validatePass(); return false;">
//  <span id="confirmMessage" class="confirmMessage"></span>
function error()
	var firstName
	var lastName
	var emailAddress
	var password