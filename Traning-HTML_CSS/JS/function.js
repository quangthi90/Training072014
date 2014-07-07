function goToIdContactScroll()
{
	$('html,body').animate({scrollTop:$("#div_contact").offset().top},'slow');
}
function showButtonScroll()
{
	if($(document).scrollTop() < 500 )
	{
		$("#scoll-up").css("display", "none");
	}
	else
	{
		$("#scoll-up").css("display", "block");
	}
	if($(document).scrollTop() > 2000)
	{
		$("#scoll-down").css("display", "none");
	}
	else
	{
		$("#scoll-down").css("display", "block");
	}
	if($(document).scrollTop() >500 &&  $(document).scrollTop() <2000)
	{
		$("#scoll-down").css("display", "block");
		$("#scoll-up").css("display", "block");
	}
}
function ramdomNumberToCheck()
{
	 var x1 = Math.floor((Math.random() * 10) + 1);
	 var x2 = Math.floor((Math.random() * 10) + 1);
    document.getElementById("text1").value = x1;
    document.getElementById("text2").value = x2;
}
function isInvalid()
{
	if(!checkNumber())
	{
		showInValid("#resultSecurty",document.getElementById("text3").value)
	}
	else
	{
		showNotInvalid("#resultSecurty",document.getElementById("text3").value)
	}
	if(!checkMessage())
	{
		showInValid("#resultMessage",document.getElementById("message").value)
	}
	else
	{
		showNotInvalid("#resultMessage",document.getElementById("message").value)
	}
	if(!checkNameCompany())
	{
		showInValid("#resultCompany",document.getElementById("company").value)
	}
	else
	{
		showNotInvalid("#resultCompany",document.getElementById("company").value)
	}
	if(!checkEmail())
	{
		showInValid("#resultEmail",document.getElementById("email").value)
	}
	else
	{
		showNotInvalid("#resultEmail",document.getElementById("email").value)
	}	
	if(!checkFullName())
	{
		showInValid("#resultName",document.getElementById("name").value)
	}
	else
	{
		showNotInvalid("#resultName",document.getElementById("name").value)
	}
	if (checkEmail() && checkNumber() && checkMessage() && checkFullName() && checkNameCompany())
	{
		var objectInfoPerson = {FullName:document.getElementById("name").value,
								Company:document.getElementById("company").value,
								Email:document.getElementById("email").value,
								Message:document.getElementById("message").value };
		alert(objectInfoPerson);
	}
}
function checkNumber()
{
	var x1 = parseInt(document.getElementById("text1").value);
   	var x2 = parseInt(document.getElementById("text2").value);
	if(document.getElementById("text3").value == (x1+x2))
	{
		return true;
	}
	else
	{
		return false;
	}
}
function checkMessage()
{
	var stringMessage = document.getElementById("message").value;
	if(stringMessage.length > 50 && stringMessage.length < 2000)
	{
		return true;
	}
	else
	{
		return false;
	}
}
function checkNameCompany()
{
	var stringNameCompany = document.getElementById("company").value;
	if(stringNameCompany.length > 1 )
	{
		return true;
	}
	else
	{
		return false;
	}
}
function checkFullName()
{
	var stringFullName = document.getElementById("name").value;
	if(stringFullName.length > 1 )
	{
		return true;
	}
	else
	{
		return false;
	}
}
function checkEmail()
{
	var stringEmail = document.getElementById("email").value;
    var re =  /[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/igm;
    return re.test(stringEmail);
}
function showInValid(id, string)
{
	$(id).text(string + " is not valid ");
    $(id).css("color", "red");
}
function showNotInvalid(id,string)
{
	$(id).text(string + " is  valid ");
    $(id).css("color", "blue");
}


