function RegisterUser(){
	Remove('all');
	var fname = document.getElementById('fname').value;
	var lname = document.getElementById('lname').value;
	var email = document.getElementById('email').value;
	var phone = document.getElementById('phone').value;
	var password = document.getElementById('password').value;
	var checkbox =  document.getElementById('checkbox').checked;
	
	if (fname == ""){ ErrorPop("body", "Enter your first name"); return false; }
	if (lname == ""){ ErrorPop("body", "Enter your last name"); return false; }
	if (email == ""){ ErrorPop("body", "Enter your email address"); return false; }
	if (phone == ""){ ErrorPop("body", "Enter your phone number"); return false; }
	if (password == ""){ ErrorPop("body", "Enter your password"); return false; }
	if (checkbox == false){ ErrorPop("body", "To sign up, you have to agree to our terms & conditions and privacy policy"); return false; }
	
	var form_data = new FormData();
	form_data.append("fname", fname);
	form_data.append("lname", lname);
	form_data.append("email", email);
	form_data.append("phone", phone);
	form_data.append("password", password);
	
	$.ajax({
		url: 'api/v0/php/register.php',
		method: 'POST',
		data: form_data,
		processData: false,
		cache: false,
		contentType: false,
		beforeSend: function(){
			document.getElementById("register-button").innerHTML = 'Processing<img class="icon ml-10 svg" alt="" src="assets/images/icons/spinner.svg">';
			document.getElementById("register-button").setAttribute("onclick", "javascript:void(0);");
		},
		success: function(result){
			var data_x = JSON.parse(result);
			if (data_x['status'] == "200"){
				SuccessPop("body", data_x['message']);
				document.getElementById("register-button").innerHTML = 'Completed<img class="icon svg" alt="" src="assets/images/icons/ok.svg">';
				document.getElementById("register-button").setAttribute("onclick", "javascript:void(0);");
				setTimeout(function() { Redirect('congratulations.php'); }, 5000);
			}
			else{
				ErrorPop("body", data_x['message']);
				document.getElementById("register-button").setAttribute("onclick", "RegisterUser()");
				document.getElementById("register-button").innerHTML = 'Sign Up';
			}
		}
	});
}