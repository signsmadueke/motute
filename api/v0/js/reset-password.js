function ResetPassword(){
	Remove('all');
	var identity = document.getElementById('identity').value;
	if (identity == ""){ ErrorPop("body", "Enter your email address or phone number"); return false; }
	
	var form_data = new FormData();
	form_data.append("identity", identity);
	
	$.ajax({
		url: 'api/v0/php/reset-password.php',
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
			}
			else{
				ErrorPop("body", data_x['message']);
				document.getElementById('rp-button').innerHTML = 'Reset Password';
				document.getElementById('rp-button').setAttribute('onclick', 'ResetPassword()');
			}
		}
	});
}