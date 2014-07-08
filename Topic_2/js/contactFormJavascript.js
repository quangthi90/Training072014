function showRequire (id) {
	$(id).text(" is required! ");
    $(id).css("color", "red");
}
function showValid (id) {
	$(id).text(" is valid! ");
    $(id).css("color", "blue");
}
function showResult (id) {
	$(id).text(" Your result was wrong! ");
    $(id).css("color", "yellowgreen");
}
function showAlertEmail (id) {
	// body...
	$(id).text(" Please provide a valid email address! ");
    $(id).css("color", "orange");
}
function showAlertMessage (id) {
	// body...
	$(id).text(" The length of message is btween 50 and 2000 characters! ");
    $(id).css("color", "orange");
}
function securityCheck() {
	// body...
	var x = parseInt(document.getElementById("no1").value);
	var y = parseInt(document.getElementById("no2").value);
	var sum = document.getElementById("res").value;
	var res = x + y;
	console.log(typeof(x));
	console.log(y);
	console.log(sum);
	console.log(res);
	if (sum == res) {
		return 1;
	}
	else{
		if(typeof(sum) == 'undefined' || sum == null || sum == ''){
			return 0;
		}
		else{
			return -1;
		}
	}
}
function isValid(id){
	var val = document.getElementById(id).value;
	console.log(val);
	if (typeof(val) == 'undefined' || val == null || val == '') {
		return false;
	}
	else{
		return true;
	}
}
function isValidEmail () {
	// body...
	var test_email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var emailadd = document.getElementById("email").value;
	if (!test_email.test(emailadd)){
		return false;
	}
	return true;
}
function isValidMessage () {
	// body...
	var messlength = (document.getElementById("email").value).length;
	if (messlength>=50 && messlength <= 2000){
		return true;
	}
	else{
		return false;
	}
}
function sendContact(){
	// validate full name
	var full_name = isValid("fullname");
	var company_name = isValid("company");
	var email_add1 = isValid("email");
	var email_add2 = isValidEmail("email");
	var mess1 = isValid("message");
	var mess2 = isValidMessage("message");
	var security_check = securityCheck();

	// validate full name
	if (full_name === true) {
		showValid('#namerequire');
	}
	else{
		showRequire('#namerequire');
	}

	// validate company name
	if (company_name === true) {
		showValid('#companyrequire');
	}
	else{
		showRequire('#companyrequire');
	}

	// validate email address
	if (email_add1 === true && email_add2 === true) {
		showValid('#emailrequire');
	}
	else{
		if(email_add1 === false){
			showRequire('#emailrequire');
		}
		if(email_add2 === false){
			showAlertEmail('#emailrequire');
		}
		
	}

	// validate message
	if (mess1 === true && mess2 === true) {
		showValid('#messrequire');
	}
	else{
		if(mess1 === false){
			showRequire('#messrequire');
		}
		if (mess2 === false) {
			showAlertMessage('#messrequire');
		}
	}

	// validate security check
	switch(security_check){
		case -1:
			showResult('#securityrequire');
			break;
		case 0:
			showRequire('#securityrequire');
			break;
		case 1:
			showValid('#securityrequire');
			break;
	}


	// if (security_check === 1) {
	// 	showValid('#securityrequire');
	// }
	// else{
	// 	if (security_check === 0) {
	// 		showRequire('#securityrequire');
	// 	}
	// 	else{
	// 		showResult('#securityrequire');
	// 	}
	// }

	// if (full_name === true && company_name === true && email_add === true && mess === true && security_check === true){
	// 	showValid('#namerequire');
	// 	showValid('#companyrequire');
	// 	showValid('#emailequire');
	// 	showValid('#messrequire');
	// 	showValid('#securityrequire');
	// 	alert("Success!");
	// }
	// else{
	// 	if (full_name === false){
	// 		showRequire('#namerequire');
	// 	}
	// 	// else{
	// 		if(company_name === false){
	// 			showRequire('#companyrequire');
	// 		}
	// 		// else{
	// 			if (email_add === false){
	// 				showRequire('#emailequire');
	// 			}
	// 			// else{
	// 				if (mess === false){
	// 					showRequire('#messrequire');
	// 				}
	// 				else{
	// 					showRequire('#securityrequire');
	// 				} 
			
	// 			// }
	// 		// }
		
	// 	}
	
}
