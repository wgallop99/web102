$(document).ready(function(){
	$(".mybtn").click(function() {
		$("div#errorMsg").css("display", "block");
		$("div#errorMsg").html("Searching Alien Database");
 
		//Get values
		var txtUserName = $("input#username").val();
		var txtPassword = $("input#password").val();
 
			// check if the fields are empty
			if((txtUserName=="" ) || (txtPassword== "")){
				$("div#errorMsg").css("display", "block");
				$("div#errorMsg").html("Please Enter Username, Password!");
 
					} else {
						//Call the ajax function to check the usernames
						checkUser(txtUserName, txtPassword);
					}
	});  //end of click event


function checkUser(txtUserName, txtPassword){
	var dataString = 'sUname=' + txtUserName + '&amp;sPass=' + txtPassword; // constructing our param variable that will be send with ajax call
 
		// Ajax Call to check if the username / password are correct
		$.ajax({
			type: "POST",
			url: "php/checkUser.php",
			data: dataString,
			success: function(response) {
				if (response == "notFound"){
					$("div#errorMsg").css("display", "block");
					$("div#errorMsg").html("Sorry, Alien was not found!");
						} else {
							window.location.replace("http://google.com");
						   	}
					 }
			});
	}  //end of checkUser() function
 
}); //end of jQuery code
 
 