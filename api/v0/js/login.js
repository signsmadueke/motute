function LogInUser(){
	Remove('all');
	var identity = document.getElementById("identity").value;
	var password = document.getElementById("password").value;
	var checkbox = document.getElementById("checkbox").checked;
	
	if (identity == ""){ ErrorPop("body", "Please, enter your email address or phone"); return false; }
	if (password == ""){ ErrorPop("body", "Please, enter your password"); return false; }
	
	var no_days = 1;
	if (checkbox == true){
		no_days = 10;
	}
	
	var form_data = new FormData();
	form_data.append('identity', identity);
	form_data.append('password', password);
	form_data.append('no_days', no_days);
	
	$.ajax({
		url: "api/v0/php/login.php",
		method: "POST",
		data: form_data,
		processData: false,
		cache: false,
		contentType: false,
		beforeSend: function(){
			document.getElementById('login-button').innerHTML = 'Processing<img class="icon ml-10 svg" alt="" src="assets/images/icons/spinner.svg">';
			document.getElementById('login-button').setAttribute("onclick", "javascript:void(0);");
		},
		success: function(result){
			var data_x = JSON.parse(result);
			if (data_x['status'] == "200"){
				SuccessPop("body", "Login Successful!");
				setTimeout(function() { Redirect('profile.php'); }, 2000);
			}
			else{
				ErrorPop("body", data_x['message']);
				document.getElementById('login-button').innerHTML = 'Log In';
				document.getElementById('login-button').setAttribute("onclick", "LogInUser()");
			}
		}
	});
}