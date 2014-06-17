<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>jQuery Login</title>
<!-- start Custom Include -->
<link href="styles/myStyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<!-- end Custom Include -->
<script type="text/javascript">
$(document).ready(function(){
	$(".mybtn").click(function() {
		$("div#errorMsg").css("display", "block");
		$("div#errorMsg").html("<p style='color:#000'>Please wait!</p>");
		
		//Get values		
		var txtUserName = $("input#username").val();
		var txtPassword = $("input#password").val();

			// check if the fields are empty
			if((txtUserName=="" ) || (txtPassword== "")){ 
				$("div#errorMsg").css("display", "block");
				$("div#errorMsg").html("<p style='color:#FB1D1D'>Please Enter Username, Password!</p>");

					} else {
						//Call the ajax function to check the usernames
						checkUser(txtUserName, txtPassword);
					}
		}); //end of click event
		
		
		// function to check if the username exists in out Database
function checkUser(txtUserName, txtPassword){
	var dataString = 'sUname=' + txtUserName + '&sPass=' + txtPassword; // constructing our param variable that will be send with ajax call
	
		// Ajax Call to check if the username / password are correct
		$.ajax({
			type: "POST",
			url: "php/checkUser.php",
			data: dataString,
			success: function(response) {
				if (response == "notFound"){
					$("div#errorMsg").css("display", "block");
					$("div#errorMsg").html("<p style='color:#FB1D1D'>Sorry, Username was not found!</p>");
						} else {
							window.location.replace("http://google.com");
						   	}
					 }
			});
	}  //end of checkUser() function
							

  
 });
  
  

</script>
</head>
<body>
<div id="Container">
  <div id="LoginWindow">
    <div id="LogoM"> <img src="imgs/logo.png" alt="PhotoReview" /> </div>
    <p>Simple Demostration on How to Login Using jQuery</p>
        <ul>
        <li>
          <div class="field"> <span class="leftspace">Username:</span>
            <input class="login-field" name="uname" type="text" id="username"/>
          </div>
        </li>
        <li>
          <div class="field"> <span class="leftspace">Password:</span>
            <input class="login-field" name="pass" type="text" id="password"/>
          </div>
        </li>
      </ul>
     <a href="#" class="mybtn"><img id="loginBtn" src="imgs/loginbtn.png" /> </a>  
    <div id="errorMsg"></div>
  </div>
</div>
</body>
</html>
