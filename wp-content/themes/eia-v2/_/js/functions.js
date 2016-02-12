// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

	/* trigger when page is ready */
	$(document).ready(function (){
///////////////////////////////////////////////////////////

	$('.popup-video').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});


	$('.popup-image').magnificPopup({
		//delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		//mainClass: 'mfp-img-mobile',
		mainClass: 'mfp-fade',
		//arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});



	$("iframe[src*='vimeo'], iframe[src*='youtube']").wrap( "<div class='video'></div>" );


	$('#tabs li a').click(function(e){

	    $('#tabs li, #content .current').removeClass('current');
	    $(this).parent().addClass('current');
	    var currentTab = $(this).attr('href');
	    $(currentTab).addClass('current');
	    e.preventDefault();

	});


/* Donate amount buttons */

$( "#single li.amount" ).click(function() {
  var amount = $( this ).attr("data-amount");
  $( "input#inputamount" ).val( amount );
});

$( "#regular li.amount" ).click(function() {
  var amount = $( this ).attr("data-amount");
  $( "input#input_2_20, input#input_3_20" ).val( amount );
});

$('input#input_2_20, input#input_3_20').before('<span class="donate-pound">&pound;</span>');


	$('main a[href$=".pdf"]').append("<span class='link-pdf'>PDF</span>");
	$('main a[href$=".docx"], a[href$=".doc"]').append("<span class='link-doc'>DOC</span>");



/* Slicknav */
$(function(){
		$('#menu').slicknav();
		$('.slicknav_nav').after("<form class='mobile-search' role='search' method='get' id='searchform' action='/'><input type='text' id='s' name='s' required='required' placeholder='Search for&hellip;' value=''> <button><i class='icon-search'></i></button></form>");

	});

// append search bar to mobile nav


	/*
$(".sidenav li.page_item_has_children a").click(function () {
 	 	$(this).addClass("active").next().slideToggle("fast");
 	 	$(this).find('.expand').toggleClass('collapse');
 	 });
*/

	// Disable links
	/*
$('#menu-main-1 > li > a.has-sub-menu').click(function(e) {
			 e.preventDefault();
		});
*/

///////////////////////////////////////////////////////////

	});


	/* optional triggers

	$(window).load(function() {

	});

	$(window).resize(function() {

	});

	*/

	/* Homepage cookie notice */
	$( "#cookie-agree" ).click(function() {
		$.cookie('eia-cookie-agree', 'agreed', { expires: 365, path:'/' });
		$('.desktop #cookie-notice').slideUp('fast');
		$('.mobile #cookie-notice, .tablet #cookie-notice').remove();
		$('body').removeClass('cookie-bar-active');
		return false;
	});


})(window.jQuery);
