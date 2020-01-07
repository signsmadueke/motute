$("#body #sidebar").hover(function () {
    var $sidebar = $('#sidebar');
    $sidebar.toggleClass("hide");
});

$(".menu").click(function () {
    var $sidebar = $('.side.create');
    var $body = $('.body.create');
    $sidebar.toggleClass("hide");
    $body.toggleClass("show");
});

$('#main .body.create').css({
    'height': "calc(100vh - " + $('#nav').height() + "px)"
});

$('#main .side.create').css({
    'height': "calc(100vh - " + $('#nav').height() + "px)"
});

$('#main .side.create #chapters').css({
    'height': "calc(100% - " + $('.chapter-actions').height() + "px - 40px)"
});

// const ps1 = new
// 	PerfectScrollbar('.scrollbar', {
// 	wheelSpeed: 2,
// 	wheelPropagation: true,
// 	minScrollbarLength: 20
// });

const ps = new
	PerfectScrollbar('#body-container', {
	wheelSpeed: 2,
	wheelPropagation: true,
	minScrollbarLength: 20
});

// const ps = new
// 	PerfectScrollbar('#chapters', {
// 	wheelSpeed: 2,
// 	wheelPropagation: true,
// 	minScrollbarLength: 20
// });

	tippy('.lesson', {
        placement: 'top',
        theme: 'pop',
        duration: [275, 250],
        arrow: true,
        delay: [500],
        followCursor: 'horizontal',
    });

$( function() {
    $( "#sortable" ).sortable();
    $( "#sortable" ).disableSelection();
 });

// function loadDoc(url, cFunction) {
//   var xhttp;
//   xhttp=new XMLHttpRequest();
//   xhttp.onreadystatechange = function() {
//     if (this.readyState == 4 && this.status == 200) {
//       cFunction(this);
//     }
//   };
//   xhttp.open("GET", url, true);
//   xhttp.send();
// }
// function myFunction(xhttp) {
//   document.getElementById("demo").innerHTML =
//   xhttp.responseText;
// }

// function ajax_post(){
//  var hr = new XMLHttpRequest();
//  var url = "processor.php";
//  var emm = document.getElementById("email").value;
//  var vars = "email="+emm;
//  hr.open("POST", url, true);
//  hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
//  hr.onreadystatechange = function() {
//  if(hr.readyState == 4 && hr.status == 200) {
//  var return_data = hr.responseText;
//  document.getElementById("status").innerHTML = return_data;
//  }
//  }
//  hr.send(vars); // After Check Steps are done execute the request
//  document.getElementById("status").innerHTML = "processing...";
// }
