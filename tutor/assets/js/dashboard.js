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
    'padding-top': $('#nav').height() + "px"
});

$('#main .side.create').css({
    'padding-top': $('#nav').height() + "px"
});

$('#main .side.create #chapters').css({
    'padding-bottom': $('.chapter-actions').height() + 40 + "px"
});

// const ps1 = new
// 	PerfectScrollbar('.scrollbar', {
// 	wheelSpeed: 2,
// 	wheelPropagation: true,
// 	minScrollbarLength: 20
// });

const ps = new
	PerfectScrollbar('#chapters', {
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

	tippy('.lesson .lesson-title', {
        placement: 'top',
        theme: 'pop',
        // duration: [275, 250],
        arrow: true,
        delay: [500],
        followCursor: 'horizontal',
    });

    tippy('.lesson .lesson-settings-btn', {
        placement: 'top',
        theme: 'pop',
        // duration: [275, 250],
        arrow: true,
        delay: [500],
        // followCursor: 'horizontal',
    });


$( function() {
    $( "#chapters" ).sortable({
    	  handle: ".chapter-move",
    	  // axis: "y",
		  revert: true
		  // scroll: false,
		  // cursor: "move"
    });
    // $( "#chapters" ).disableSelection();
 });

$( function() {
    $( ".lessons" ).sortable({
		handle: ".chapter-move",
		// axis: "y",
		revert: true
		// scroll: false,
		// cursor: "move"
    });
    // $( ".lessons" ).disableSelection();
 });

// $(document).ready(function () {
//     var dropIndex;
//     $("#image-list").sortable({
//         	update: function(event, ui) { 
//         		dropIndex = ui.item.index();
//         }
//     });
// });

$(document).ready(function(){
	Dropzone.options.videoDropzone = { // The camelized version of the ID of the form element
	    // The configuration we've talked about above
	    url: '#',
	    previewsContainer: ".dropzone-previews",
	    uploadMultiple: true,
	    parallelUploads: 100,
		maxFiles: 100
	}
});

'use strict';

let url_ajax_path = {
	add_chapter:"../../courses/new/edit/chapter.php",
	edit_chapter:"../../courses/new/edit/chapter.php",

	add_lesson_video:"../../courses/new/add/lesson/video.php",
	add_lesson_audio:"../../courses/new/add/lesson/audio.php",
	add_lesson_text:"../../courses/new/add/lesson/text.php",
	add_lesson_download:"../../courses/new/add/lesson/download.php",
	add_lesson_exam:"../../courses/new/add/lesson/exam.php",

	edit_lesson_video:"../../courses/new/edit/lesson/video.php",
	edit_lesson_audio:"../../courses/new/edit/lesson/audio.php",
	edit_lesson_text:"../../courses/new/edit/lesson/text.php",
	edit_lesson_download:"../../courses/new/edit/lesson/download.php",
	edit_lesson_exam:"../../courses/new/edit/lesson/exam.php"
};

$(document).ready(function() {
    function release_menu() {
        // if ($sidebar.hasClass('hide')) {
        //     $sidebar.toggleClass('hide');
        //     $body.toggleClass('show');
        // }
        if ($('.side.create').width() === $(window).width()){
	        $('.side.create').toggleClass("hide");
	    	$('.body.create').toggleClass("show");
		}
    }

	/*--------------- CHAPTERS START --------------- */
	$(".add-chapter").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_chapter, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".chapter-title .chapter-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_chapter, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});
	/*--------------- CHAPTERS END --------------- */

	/*--------------- LESSONS ADD START --------------- */
	$(".lesson-type.type-video").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_lesson_video, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson-type.type-text").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_lesson_text, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson-type.type-audio").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_lesson_audio, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson-type.type-download").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_lesson_download, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson-type.type-exam").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.add_lesson_exam, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});
	/*--------------- LESSONS ADD END --------------- */

	/*--------------- LESSONS EDIT START --------------- */
	$(".lesson.video .lesson-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_lesson_video, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson.text .lesson-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_lesson_text, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson.audio .lesson-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_lesson_audio, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson.download .lesson-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_lesson_download, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});

	$(".lesson.exam .lesson-settings-btn").click(function(e) {
		e.preventDefault();
		$.get(url_ajax_path.edit_lesson_exam, function(data) {
			$("#body-container").empty();
			$("#body-container").html(data);
			release_menu();
		});
	});
	/*--------------- LESSONS EDIT END --------------- */

});
