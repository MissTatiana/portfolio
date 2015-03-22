/*
 * Tatiana Kerick - Portfolio
 * Author: Tatiana Kerick 2014
*/

jQuery(document).ready(function ($) {

$("#logo").hide()

$("#left").hide();

$("#right").hide();


$("#logo").fadeIn(1000);

$("#logo").animate({
	top: "-=150"
}, 500);


$("#left").delay(2000).fadeIn(3000);

$("#right").delay(2000).fadeIn(3000);

});//document

