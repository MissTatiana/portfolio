$(function() {

var project = {
	projects: [
		{
			projectTitle: 'Project 1',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 2',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 3',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 4',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 5',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		},
		{
			projectTitle: 'Project 6',
			date: 'Month 00',
			technology: 'the technology used',
			description: 'Cupcake ipsum dolor sit amet candy fruitcake. Muffin jujubes liquorice macaroon oat cake cupcake croissant bonbon. Dessert dragée danish bonbon gummies cake cake. Dessert danish danish ice cream tart sweet pie. Marshmallow marzipan lemon drops dessert cake cupcake.',
			thumb: 'assets/img/temp/thumb.jpg',
			pictures: {
				url: '/assets/img/temp/placeholder1.jpg',
				url: '/assets/img/temp/placeholder2.jpg',
				url: '/assets/img/temp/placeholder3.jpg'
			}
		}
	]
};

var projectScript = $('#portfolio-template').html();

var theProjects = Handlebars.compile(projectScript);

var theCompiledProjects = theProjects(project);

$('.project-placeholder').html(theCompiledProjects);


});
