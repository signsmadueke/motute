function ErrorPop(id, text){
	document.getElementById('error-text').innerHTML = text;
	document.getElementById('error-pop').style.display = 'block';
	$('html, body').animate({
		scrollTop: $("#"+id+"").offset().top
	 }, 1000);
}

function SuccessPop(id, text){
	document.getElementById('success-text').innerHTML = text;
	document.getElementById('success-pop').style.display = 'block';
	$('html, body').animate({
		scrollTop: $("#"+id+"").offset().top
	 }, 1000);
}

function Remove(id){
	if (id == 'all'){
		document.getElementById('success-pop').style.display = 'none';
		document.getElementById('error-pop').style.display = 'none';
	}
	else{
		document.getElementById(''+id+'').style.display = 'none';
	}
	if (!e) var e = window.event;
	e.cancelBubble = true;
	if (e.stopPropagation) e.stopPropagation();
}

function Redirect(url){
	window.location.href = url;
}