function _random(){
	return Math.floor((Math.random()*100) + 2);
}

function Init(){
	var inquiry = {
		fullname: document.getElementById('fullname').value,
		company: document.getElementById('company').value,
		email: document.getElementById('email').value,
		message: document.getElementById('message').value
	};
	return inquiry;
}

//Ket qua tra ve 0-khong hop le, 1-hop le
function testInquiryJS(){

	var inquiry = Init();

	//Gan lai noi dung thong bao bang rong
	document.getElementById('cmt_fullname').innerHTML = "";
	document.getElementById('cmt_company').innerHTML = "";
	document.getElementById('cmt_email').innerHTML = "";
	document.getElementById('cmt_message').innerHTML = "";
	document.getElementById('cmt_sum').innerHTML = "";

	var result = 1;

	//Tien hanh kiem tra rong
	if(inquiry.fullname === ""){
		document.getElementById('cmt_fullname').innerHTML = "Fullname can not empty!";
		result = 0;
	}
	if(inquiry.company === ""){
		document.getElementById('cmt_company').innerHTML = "Company can not empty!";
		result = 0;
	}
	if(inquiry.email === ""){
		document.getElementById('cmt_email').innerHTML = "Email can not empty!";
		result = 0;
	}
	//Kiem tra email hop le	
	//Email khong duoc co khoang trong, dung regex
	else if(inquiry.email.match(/\s/g) != null){
		document.getElementById('cmt_email').innerHTML = "Email can not have space!";
		result = 0;
	}
	//Cac ki tu sau @ chi co the la tu a-z va dau => chua duoc
	else if(inquiry.email.match(/@[^a-z. ]/g) != null){
		document.getElementById('cmt_email').innerHTML = "Email not correct!";
		result = 0;	
	}
	//Email chi co the co 1 chu @
	var count = 0;
	for (var i = inquiry.email.length - 1; i >= 0; i--){
		if(inquiry.email[i] === '@'){
			count ++;
			if(count != 1){
				document.getElementById('cmt_email').innerHTML = "Email not correct!";
				result = 0;	
			}
		}
	}
	len_mss = inquiry.message.length;
	if(inquiry.message === ""){
		document.getElementById('cmt_message').innerHTML = "Message can not empty!";
		result = 0;
	}
	else if(len_mss < 50 || len_mss > 2001){
		document.getElementById('cmt_message').innerHTML = "Length of message is from 50 to 2000";
		result = 0;
	}
	if(sum_js() == false) result = 0;
	
	return result;
}

function sum_js(){
	var cal = {
		num1: parseFloat(document.getElementById('num1').value),
		num2: parseFloat(document.getElementById('num2').value),
		sum: document.getElementById('sum').value
	}
	if(cal.sum === "")
		document.getElementById('cmt_sum').innerHTML = "Sum can not empty!";
	else if (cal.sum == (cal.num1 + cal.num2)){ //Tinh con sai
		return true;
	}
	else{
		cal.sum = parseFloat(cal.sum);
		document.getElementById('cmt_sum').innerHTML = "Sum is incorrect!";
	}
	return false;
}

function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail))
        return true;
    else 
        return false;
}

function Init_JQuery(){
	var inquiry = {
		fullname: $('#fullname').val(),
		company: $('#company').val(),
		email: $('#email').val(),
		message: $('#message').val()
	};
	return inquiry;
}

function testInquiryJQuery(){
	var inquiry = Init_JQuery();

//Gan lai noi dung thong bao bang rong
	$('#cmt_fullname').text("");
	$('#cmt_company').text("");
	$('#cmt_email').text("");
	$('#cmt_message').text("");
	$('#cmt_sum').text("");

	result = 1;
	//Tien hanh kiem tra rong
	if(inquiry.fullname === ""){
		$('#cmt_fullname').text("Fullname can not empty!");
		result = 0;
	}
	if(inquiry.company === ""){
		$('#cmt_company').text("Company can not empty!");
		result = 0;
	}
	if(inquiry.email === ""){
		$('#cmt_email').text("Email can not empty!");
		result = 0;
	}
	else
	//Kiem tra email hop le
	if(!validateEmail(inquiry.email)){
		$('#cmt_email').text("Email is invalid!");
		result = 0;
	}

	//Kiem tra chieu dai chuoi message
	len_mss = inquiry.message.length;
	if(inquiry.message === ""){
		$('#cmt_message').text("Message can not empty!");
		result = 0;
	}
	else
	if(len_mss < 50 || len_mss > 2001){
		$('#cmt_message').text("Length of message is from 50 to 2000");
		result = 0;
	}

	//Kiem tra ket qua sum
	num1 = parseFloat($('#num1').val());
	num2 = parseFloat($('#num2').val());
	sum = $('#sum').val();
	if(sum === "")
		$('#cmt_sum').text("Sum can not empty!");
	else if(parseFloat(sum) != num1 + num2)
		$('#cmt_sum').text("Sum is incorrect!");
}

function scroll_AboutMe(){
	loca = $(this).scrollTop();
	$(".right").animate({top: loca});
}
function scroll_Contect(){
	loca = $(this).scrollTop();
	range = 868 - loca;
	$(".right").animate({top: '-'+range});	
	$(this).scrollTop(559);
}