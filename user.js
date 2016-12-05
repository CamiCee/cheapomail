'use strict';

window.onload = function ()
{
	var submitBtn = document.getElementById ("submitBtn");
	var url = '';
	var httpRequest;

	submitBtn.onclick = function (event)
	{
		var firstname = document.getElementById ("firstname").value;
		var lastname = document.getElementById ("lastname").value;
		var username = document.getElementById ("username").value;
		var password = document.getElementById ("password").value;
		var results = document.getElementById("result");
		
		var regex = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/';

		
		if (regex.test(password) === false)
		{
			event.preventDefault ();
			results.innerHTML = "Please ensure that your password is at least 8 characters long with at least one capital letter and a number.";
		}
	}
}