/*
 * Tatiana Kerick - Portfolio
 * Author: Tatiana Kerick 2014
*/

jQuery(document).ready(function ($) {

/* Animation code for landing - temp
-----------------------------------*/
$('#logo').hide()

$('#left').hide();

$('#right').hide();


$('#logo').fadeIn(1000);

$('#logo').animate({
	top: '-=150'
}, 500);


$('#left').delay(2000).fadeIn(3000);

$('#right').delay(2000).fadeIn(3000);



/* Portfolio - Handlebars code
-----------------------------------*/


var project = {
	projects: [
		{
			projectTitle: 'Project 1',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/placeholders/thumb.jpg',
			pictures: {
				url: '/assets/img/placeholders/placeholder1.jpg',
				url: '/assets/img/placeholders/placeholder2.jpg',
				url: '/assets/img/placeholders/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 2',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/placeholders/thumb.jpg',
			pictures: {
				url: '/assets/img/placeholders/placeholder1.jpg',
				url: '/assets/img/placeholders/placeholder2.jpg',
				url: '/assets/img/placeholders/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 3',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/placeholders/thumb.jpg',
			pictures: {
				url: '/assets/img/placeholders/placeholder1.jpg',
				url: '/assets/img/placeholders/placeholder2.jpg',
				url: '/assets/img/placeholders/placeholder3.jpg'
			}
		}
	]
};

var projectScript = $('#portfolio-template').html();

var theProjects = Handlebars.compile(projectScript);

var theCompiledProjects = theProjects(project);

$('.project-placeholder').html(theCompiledProjects);



});//document

