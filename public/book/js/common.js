var glides = document.querySelectorAll('.glide');

glides.forEach(function(e, i){
	new Glide(e,{
		perView: 7,
		type: 'carousel',
		startAt: 0,
	}).mount()
});

