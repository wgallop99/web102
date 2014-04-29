<script type="text/javascript">
function usernamePassworValidation()
{
	var username = form.username.value;
	var password = form.password.value;
	if (userName.length === 0) 
	{
        alert("You must enter a username."); //alerts the user that the username is non-populated
        errorFlag = 1;
    	return false;
    }
 
    if (password.length === 0) {
        alert("You must enter a password."); //alerts the user that the password is non-populated
        errorFlag = 2;
        return false;
    }
 
    return true;

/*
This will contain the script necessary for the actual username and password combination validation and send forward upon true
*/

    switch (errorFlag)
    {//begin switch brace
    	case "1":
			x = document.getElementById("loginValidation"); //sends to <div id="loginFlag"
			x.innerHTML = "Username is not populated. Please correct and try again.";   //notifies user that the username is Null
			break;
		case "2":
			x = document.getElementById("loginValidation"); //sends to <div id="loginFlag"
			x.innerHTML = "Password is not populated. Please correct and try again.";   //notifies user that the  password is Null
			break;
		case "3":
			x = document.getElementById("loginValidation");
			x.innerHTML = "Username and Password do not match. Please correct and try again.";
			break;
		default:
			x = document.getElementById("loginValidation");
			x.innerHTML = "<img src = 'images/ThankYou.png'/>"


    }//end switch brace
    
}//end function "usernamePassworValidation" brace



</script>
