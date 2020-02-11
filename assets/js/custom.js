"use strict";

$(document).ready(function () {
    // $(".menu-icon").click(function () {
    //     var $body = $('body');
    //     var $nav = $('nav.main');
    //     $body.toggleClass("nav-active");
    //     if ($nav.hasClass('proto')) {
    //         $nav.removeClass('proto show-on-scroll show');
    //     }
    //     if ((scrollTop > height * 1) && !$body.hasClass('nav-active') && !$nav.hasClass('proto')) {
    //         $nav.addClass('proto show-on-scroll show');
    //     }
    // });

    $(".accordion").click(function () {
        $(this).toggleClass("active");
    });

    $('#replyBox').focus(function(){
        $(".reply").addClass("active");
    });
});

// const text = document.querySelector('.container p');
// text.textContent = text.textContent.slice(0,200).trim().concat('...')

$(document).ready(function(){
    // $('.categories').flickity({
    //     // options
    //     cellAlign: 'left',
    //     contain: true,
    //     freeScroll: true,
    //     resize: false,
    //     autoPlay: true,
    //     wrapAround: true,
    //     draggable: true,
    // });

    $('#categories').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        autoplayTimeout: 8500,
        smartSpeed: 200,
        // center: true,
        lazyLoad: true,
        margin: 50,
        navText: ['<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1.37271 5.89942C0.784586 5.44098 0.78936 4.54574 1.37271 4.08124L5.48059 0.967695C6.00479 0.570382 6.75732 0.94427 6.75732 1.60203C6.75732 1.85256 6.63937 2.08847 6.43894 2.23878L3.20177 4.66667C2.97955 4.83333 2.97955 5.16667 3.20177 5.33333L6.43967 7.76176C6.63964 7.91174 6.75732 8.14711 6.75732 8.39706C6.75732 9.05415 6.00483 9.42695 5.48207 9.02885L1.37271 5.89942Z" fill="#2A2A2A"/></svg>','<svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M5.76328 4.10058C6.3514 4.55902 6.34663 5.45426 5.76328 5.91876L1.6554 9.0323C1.1312 9.42962 0.378662 9.05573 0.378662 8.39797C0.378662 8.14744 0.496617 7.91153 0.697041 7.76122L3.93422 5.33333C4.15644 5.16667 4.15644 4.83333 3.93422 4.66667L0.696312 2.23824C0.496347 2.08826 0.378662 1.85289 0.378662 1.60294C0.378662 0.945852 1.13116 0.573052 1.65392 0.971152L5.76328 4.10058Z" fill="#2A2A2A"/></svg>'],
        items: 3,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2
            },
            800: {
                items: 3
            }
        }
    });
});



window.addEventListener('load', function () {
    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(".toogle-btn").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(".toogle-btn.close").on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("show");
    });

    //------------------------------------------------------------------------
    //                      MENU TAP ON MOBILE DEVICES
    //------------------------------------------------------------------------

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("nav.navbar").addClass("touchmenu");
        $(".sub-menu-link").on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass("tap");
        });
    }


    //------------------------------------------------------------------------
    //                      SHOW NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------

    // var $window = $(window);
    // $window.on('scroll', function () {
    //     var $body = $('body');
    //     var $nav = $('nav.main');
    //     var height = $nav.outerHeight();
    //     var scrollTop = $window.scrollTop();
    //     if ((scrollTop > height * 2)) {
    //         $nav.addClass('proto');
    //     } else {
    //         $nav.removeClass('proto');
    //     }

    // });


    // //------------------------------------------------------------------------
    // //                      HIDE NAVIGATION ON SCROLL DOWN
    // //------------------------------------------------------------------------

    // var prev = 0;
    // var $window = $(window);
    // $window.on('scroll', function () {
    //     var nav = $('nav.hide-on-scroll');
    //     var scrollTop = $window.scrollTop();
    //     nav.toggleClass('hide', scrollTop > prev);
    //     prev = scrollTop;
    // });



    //------------------------------------------------------------------------
    //                      STICKY NAVIGATION
    //------------------------------------------------------------------------

    // Custom
    window.stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyWrapperHeight = stickyWrapper.outerHeight();
        var stickyTop = stickyWrapper.offset().top - stickyHeight + stickyWrapperHeight;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("fixed-top");
        } else {
            sticky.removeClass("fixed-top");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('.sticky-top').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        if (!sticky.next().hasClass('sticky-wrapper')) {
            sticky.after(stickyWrapper);
        } else {
            stickyWrapper = sticky.next();
        }

        window.stickyTB = window.stickyToggle.bind(window, sticky, stickyWrapper, $(window));
        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', window.stickyTB);

        // On page load
        window.stickyToggle(sticky, stickyWrapper, $(window));
    });

    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(document).on('click', ".toogle-btn:not(.close)", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(document).on('click', ".toogle-btn.close", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        $(this).parent().removeClass("show");
        $(this).parent().trigger("close.panel");
    });

    $(document).on('click', '[data-toggle=panel]', function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('data-target');
        $(href).toggleClass("show");

        if (!$(href).hasClass("show")) $(href).trigger("close.alert");
        else $(href).trigger("open.alert");
    });

});

// the semi-colon before function invocation is a safety net against concatenated
// scripts and/or other plugins which may not be closed properly.
;(function ( $, window, document, undefined ) {

    "use strict";

    // Create the defaults once
    var pluginName = "simpleCalendar",
        defaults = {
            months: ['january','february','march','april','may','june','july','august','september','october','november','december'], //string of months starting from january
            days: ['sunday','monday','tuesday','wenesday','thursday','friday','saturday'], //string of days starting from sunday
            minDate : "YYYY-MM-DD", // minimum date
            maxDate : "YYYY-MM-DD", // maximum date
            insertEvent: false, // can insert events
            displayEvent: false, // display existing event
            fixedStartDay: true, // Week begin always by monday
            event: [], //List of event
            insertCallback : function(){} // Callback when an event is added to the calendar
        };

    // The actual plugin constructor
    function Plugin ( element, options ) {        
        this.element = element;
        this.settings = $.extend( {}, defaults, options );
        this._defaults = defaults;
        this._name = pluginName;
        this.currentDate = new Date();
        this.init();
    }

    // Avoid Plugin.prototype conflicts
    $.extend(Plugin.prototype, {
        init: function () {
            var container = $(this.element);
            var todayDate = this.currentDate;
            
            var calendar = $('<div class="calendar"></div>');
            var header = $('<header>'+
                           '<div class="row align-items-center">'+
                            '<div class="col-5 text-left">'+
                            '<h5 class="month mb-0"></h5>'+
                            '</div>'+
                            '<div class="col-7 text-right">'+
                            '<button class="btn btn-link btn-prev"><img class="icon mb-0" width="10px" src="../../assets/images/icons/btn-prev.svg"></button>'+
                            '<button class="btn btn-link btn-next"><img class="icon mb-0" width="10px" src="../../assets/images/icons/btn-next.svg"></button>'+
                            '</div>'+
                            '</div>'+
                            '</header>');
            
            this.updateHeader(todayDate,header);
            calendar.append(header);
            
            this.buildCalendar(todayDate,calendar);
            container.append(calendar);
            
            this.bindEvents();
        },
        
        //Update the current month header
        updateHeader: function (date, header) {
            header.find('.month').html(this.settings.months[date.getMonth()]);
        },
        
        //Build calendar of a month from date
        buildCalendar: function (fromDate, calendar) {
            var plugin = this;
            
            calendar.find('table').remove();
            
            var body = $('<table></table>');
            var thead = $('<thead></thead>');
            var tbody = $('<tbody></tbody>');
            
            //Header day in a week ( (1 to 8) % 7 to start the week by monday)
            for(var i=1; i<=this.settings.days.length; i++) {
                thead.append($('<td class="body-text-sm">'+this.settings.days[i%7].substring(0,3)+'</td>'));
            }
            
            //setting current year and month
            var y = fromDate.getFullYear(), m = fromDate.getMonth();
            
            //first day of the month
            var firstDay = new Date(y, m, 1);
            //If not monday set to previous monday
            while(firstDay.getDay() != 1){
                firstDay.setDate(firstDay.getDate()-1);
            }
            //last day of the month
            var lastDay = new Date(y, m + 1, 0);
            //If not sunday set to next sunday
            while(lastDay.getDay() != 0){
                lastDay.setDate(lastDay.getDate()+1);
            }
            
            //For firstDay to lastDay
            for(var day = firstDay; day <= lastDay; day.setDate(day.getDate())) {
                var tr = $('<tr></tr>');
                //For each row
                for(var i = 0; i<7; i++) {
                    var td = $('<td><button class="btn btn-link day">'+day.getDate()+'</button></td>');
                    //if today is this day
                    if(day.toDateString() === (new Date).toDateString()){
                        td.find(".day").addClass("today");
                    }
                    //if day is not in this month
                    if(day.getMonth() != fromDate.getMonth()){
                       td.find(".day").addClass("wrong-month"); 
                    }
                    
                    tr.append(td);
                    day.setDate(day.getDate() + 1);
                }
                tbody.append(tr);
            }
            
            body.append(thead);
            body.append(tbody);            
            calendar.append(body);
        },
        //Init global events listeners
        bindEvents: function () {
            var plugin = this;
            
            //Click previous month
            $('.btn-prev').click(function(){
                plugin.currentDate.setMonth(plugin.currentDate.getMonth()-1);
                plugin.buildCalendar(plugin.currentDate, $('.calendar'));
                plugin.updateHeader(plugin.currentDate, $('.calendar header'));
            });
            
            //Click next month
            $('.btn-next').click(function(){
                plugin.currentDate.setMonth(plugin.currentDate.getMonth()+1);
                plugin.buildCalendar(plugin.currentDate, $('.calendar'));
                plugin.updateHeader(plugin.currentDate, $('.calendar header'));
            });
        },
    });

    // A really lightweight plugin wrapper around the constructor,
    // preventing against multiple instantiations
    $.fn[ pluginName ] = function ( options ) {
        return this.each(function() {
                if ( !$.data( this, "plugin_" + pluginName ) ) {
                        $.data( this, "plugin_" + pluginName, new Plugin( this, options ) );
                }
        });
    };

})( jQuery, window, document );

var pAgree = '1';

jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});


window.addEventListener('load', function() {
//------------------------------------------------------------------------
//                      TOOGLE BUTTON SCRIPT
//------------------------------------------------------------------------

$(".toogle-btn").on('click', function (e) {
    e.preventDefault();
    var href = $(this).attr('href');
    $(href).toggleClass("show");
});

$(".toogle-btn.close").on('click', function (e) {
    e.preventDefault();
    $(this).parent().toggleClass("show");
});

//------------------------------------------------------------------------
//                      MENU TAP ON MOBILE DEVICES
//------------------------------------------------------------------------

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
    $("nav.navbar").addClass("touchmenu");
    $(".sub-menu-link").on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("tap");
    });
}


//------------------------------------------------------------------------
//                      SHOW NAVIGATION ON SCROLL DOWN
//------------------------------------------------------------------------

var $window = $(window);
$window.on('scroll', function () {
    var $nav = $('nav.show-on-scroll');
    var height = $nav.outerHeight();
    var scrollTop = $window.scrollTop();
    if (scrollTop > height*2) {
        $nav.addClass('show');
    } else {
        $nav.removeClass('show');
    }

});


//------------------------------------------------------------------------
//                      HIDE NAVIGATION ON SCROLL DOWN
//------------------------------------------------------------------------

var prev = 0;
var $window = $(window);
$window.on('scroll', function () {
    var nav = $('nav.hide-on-scroll');
    var scrollTop = $window.scrollTop();
    nav.toggleClass('hide', scrollTop > prev);
    prev = scrollTop;
});



//------------------------------------------------------------------------
//                      STICKY NAVIGATION
//------------------------------------------------------------------------

// Custom
window.stickyToggle = function (sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyWrapperHeight = stickyWrapper.outerHeight();
    var stickyTop = stickyWrapper.offset().top - stickyHeight + stickyWrapperHeight;
    if (scrollElement.scrollTop() >= stickyTop) {
        stickyWrapper.height(stickyHeight);
        sticky.addClass("fixed-top");
    } else {
        sticky.removeClass("fixed-top");
        stickyWrapper.height('auto');
    }
};

// Find all data-toggle="sticky-onscroll" elements
$('.sticky-top').each(function () {
    var sticky = $(this);
    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    if (!sticky.next().hasClass('sticky-wrapper')) {
        sticky.after(stickyWrapper);
    } else {
        stickyWrapper = sticky.next();
    }

    window.stickyTB = window.stickyToggle.bind(window, sticky, stickyWrapper, $(window));
    // Scroll & resize events
    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', window.stickyTB);

    // On page load
    window.stickyToggle(sticky, stickyWrapper, $(window));
});


});
var pAgree = '1';
