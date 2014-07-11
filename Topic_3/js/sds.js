var fullname = document.getElementById("fullname").value;
	if(fullname =="" || fullname==null){
		showRequire ('#requiremess', fullname);
		//document.getElementById('requiremess').innerHTML = showRequire('requiremess', fullname);
	}
	else{
		showValid ('#requiremess', fullname);
	}

	// validate company
	var company =  document.getElementById("company").value;
	if(company =="" || company==null){
		showRequire('#requiremess', company);
	}
	else{
		document.write("Valid");
	}

	// validate email
	var email =  document.getElementById("email").value;
	if((/(.+)@{2.}\.(.+){2,}/.test(email)) || email =="" || email==null){
		showRequire('#requiremess', email);
		return false;
	}
	else{
		document.write("Valid");
	}

	// validate message
	var message =  document.getElementById("message").value;
	if(message =="" || message==null){
		showRequire('#requiremess', message);
		return false;
	}
	else{
		document.write("Valid");
	}

	// validate security
	var sum = document.getElementById("sum").value;
	var sum_security = securityCheck();
	if(sum =="" || sum==null || sum!= sum_security){
		document.getElementById('#requiremess').value = document.write("Your result was wrong!.");
		return false;
	}
	else{
		document.write("Valid");
	}
	return true;