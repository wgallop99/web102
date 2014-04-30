$(function() {
/* 
 Client-Side Validation
 */	
	
//check the email is good for login
	var expEmail = /^[_a-z0-9-]+[(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/,
	expLettersOnly = /^[a-zA-Z ]+$/,
	expLettersNumbers = /^[a-zA-Z0-9]*$/;
//check that the field is populated w/ something
function validateLength( fieldValue, minLength ){
	return ( $.trim( fieldValue ).length > minLength );
}
//validate form while typing
$( "#form-login").on( "keyup", "input.validate-locally", function() {
	validateField( $(this));
});
/* function to slide down a panel revealing the login form?
   $("#logHeader").click(function(){
    $("#logBody").slideDown("slow");
  });
 */
function validateField( field ){
	var errorText = "",
		error = false,
		value = field.val(),
		siblings = field.siblings( ".login-errors" );
	//test for sent fields
	switch (field.attr( "name")){
	case "username":
		if (validateLength( value, 0 ) )  {
			error = true;
			errorText += "The username field is empty. Please populate it"
			break;
		}
	case "password":
		if (validateLength( value, 0 ) )  {
			error = true;
			errorText += "The password field is empty. Please populate it"
			break;
		}
	}//switch end brace
}//function end brace

	
});