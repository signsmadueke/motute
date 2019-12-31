function ResetPassword(){
	Remove('all');
	var password1 = document.getElementById('password1').value;
	var password2 = document.getElementById('password2').value;
	if (password1 == ""){ ErrorPop("body", "Enter your new password"); return false; }
	if (password2 == ""){ ErrorPop("body", "Confirm your new password"); return false; }
	if (password1 != password2){ ErrorPop("body", "Your password entries do not match"); return false; }
	
	var form_data = new FormData();
	form_data.append("password", password1);
	
	$.ajax({
		url: 'api/v0/php/password-reset.php',
		method: 'POST',
		data: form_data,
		processData: false,
		cache: false,
		contentType: false,
		beforeSend: function(){
			document.getElementById('rp-button').innerHTML = '<i class = "fa fa-spinner" aria-hidden = "true"></i> &nbsp;Processing';
			document.getElementById('rp-button').setAttribute('onclick', 'javascript:void(0)');
		},
		success: function(result){
			var data_x = JSON.parse(result);
			if (data_x['status'] == '200'){
				SuccessPop("body", data_x['message']);
				document.getElementById('rp-button').innerHTML = '<i class = "fa fa-info-circle" aria-hidden = "true"></i> &nbsp;Completed!';
				setTimeout(function() { Redirect('login.php'); }, 2000);
			}
			else{
				ErrorPop("body", data_x['message']);
				document.getElementById('rp-button').innerHTML = 'Reset Password';
				document.getElementById('rp-button').setAttribute('onclick', 'ResetPassword()');
			}
		}
	});
}