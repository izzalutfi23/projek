/* themes.js
# MK ADMIN By Muh Kanda Wibawa Putra
# This Template Is FREE!
# Released under the MIT license
# http://opensource.org/licenses/MIT
# For Information : surel.muhkanda@gmail.com
*/
var $lengthdr = 1000;
$('.ui.segment .data1').mouseenter(function(){
	$('.ui.image#redly .parentmiddle')
	.transition({
		animation : 'tada',
		duration  : $lengthdr
	});
});
$('.ui.segment .data2').mouseenter(function(){
	$('.ui.image#teally .parentmiddle')
	.transition({
		animation : 'tada',
		duration  : $lengthdr
	});
});
$('.ui.segment .data3').mouseenter(function(){
	$('.ui.image#bluely .parentmiddle')
	.transition({
		animation : 'tada',
		duration  : $lengthdr
	});
});
$('.ui.segment .data4').mouseenter(function(){
	$('.ui.image#yellowly .parentmiddle')
	.transition({
		animation : 'tada',
		duration  : $lengthdr
	});
});
$('.ui.sidebardropdown')
.dropdown({
	transition: 'swing left',
	on : 'hover',
	duration  : $lengthdr
});
$('.ui.admindropdown')
.dropdown({
	transition: 'swing down',
	on : 'hover',
	duration  : $lengthdr			
});
$('.ui.moredropdown')
.dropdown({
	transition: 'swing down',
	duration  : $lengthdr
});
$(document).ready(function() {
	var parentcolor1 = document.getElementById("parentcolor1");
	var parentcolor2 = document.getElementById("parentcolor2");
	var parentcolor3 = document.getElementById("parentcolor3");
	var parentcolor4 = document.getElementById("parentcolor4");
    var redly = document.getElementById("redly");
    var yellowly = document.getElementById("yellowly");
    var bluely = document.getElementById("bluely");
    var teally = document.getElementById("teally");
    if ($(window).width() < 767) {
    	redly.classList.remove("tiny");
    	redly.classList.add("massive");
    	yellowly.classList.remove("tiny");
    	yellowly.classList.add("massive");
    	bluely.classList.remove("tiny");
    	bluely.classList.add("massive");
    	teally.classList.remove("tiny");
    	teally.classList.add("massive");
    	parentcolor1.classList.add("colorly");
    	parentcolor2.classList.add("colorly");
    	parentcolor3.classList.add("colorly");
    	parentcolor4.classList.add("colorly");
    }
} );
$(document).ready(function(){
    $("#showmenu").click(function(){
        $('.menukiri.lipat .menu')
		  .transition({
		  	animation : 'swing right',
		    duration  : 1200
		  })
		;
		$('#menukiri').removeClass('hidden');
    });
    $("#hidemenu").click(function(){
    	$('#menukiri').removeClass('hidden');
        $('.menukiri.lipat .menu')
		  .transition({
		  	animation : 'fade',
		    duration  : 1200
		  });
    });	   
});