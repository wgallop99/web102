$(document).ready(function() {

	// Hide all error message upon form load
	$('.errorMessage').hide();

	// Event handler for the form
	// If something doesn't pass, display an error and prevent form from submitting
	// by returning false
	$('#alienRegistration').submit(function() {
		var UserName, UserAge, UserSpecies, HomePlanet, HomeStar, Duration, E_Address, Password1, Password2, truePassword;
		var emailExp = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
		var textInputExp = /^[A-Za-z ]{2,20}$/;
		var numberInputExp = /^\d+$/;
		var error = false;

		UserName = $('#UserName').val();
		UserName = UserName.trim();
		if (!textInputExp.test(UserName) || UserName.length == 0) {
			$('#nameError').show();
		} else {
			$('#nameError').hide();
		}

		UserAge = $('#UserAge').val();
		UserAge = UserAge.trim();
		if (!numberInputExp.test(UserAge)) {
			$('#ageError').show();
		} else {
			$('#ageError').hide();
		}

		UserSpecies = $('#UserSpecies').val();
		UserSpecies - UserSpecies.trim()
		if (!textInputExp.test(UserSpecies) || UserSpecies.length == 0) {
			$('#speciesError').show();
		} else {
			$('#speciesError').hide();
		}

		HomePlanet = $('#HomePlanet').val();
		HomePlanet = HomePlanet.trim();
		if (!textInputExp.test(HomePlanet) || HomePlanet.length == 0) {
			$('#planetError').show();
		} else {
			$('#planetError').hide();
		}

		HomeStar = $('#HomeStar').val();
		HomeStar = HomeStar.trim();
		if (!textInputExp.test(HomeStar) || HomeStar.length == 0) {
			$('#starError').show();
		} else {
			$('#starError').hide();
		}

		if ($('#Duration').val() == '') {
			$('#durationError').show();
		} else {
			$('#durationError').hide();
		}

		E_Address = $('#E_Address').val();
		E_Address = E_Address.trim();
		if (!emailExp.test(E_Address) || E_Address.length == 0) {
			$('#eaddressError').show();
		} else {
			$('#eaddressError').hide();
		}
		Password1 = $('#Password1').val();
		Password1 = Password1.trim();
		if (Password1.length == 0) {
			$('#password1emptyError').show();
		} else {
			$('#password1emptyError').hide();
		}

		Password2 = $('#Password2').val();
		Password2 = Password2.trim();
		if (Password2.length == 0) {
			$('#password2emptyError').show();
		} else {
			$('#password2semptyError').hide();
		}

		if (!(Password1 == Password2)) {
			$('#passwordmatchError').show();
		} else {
			$('#passwordmatchError').hide();
		}
		// Don't do anything form submission-wise yet
		return false;
	});
});