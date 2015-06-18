jQuery(document).ready(function($) {  
	var currentImageSet = [];
	var currentIndex = 0;

	$('.product-thumb').click(function(evt){
		//run this code
		//dan pak de inhoud uit die child div genaamd 'hidden-content'
		$('.full-width-bar-container').show();
		var clicked = $(evt.currentTarget);
		var theHtml = clicked.find('.hidden-content').first().html();
		var theImage = clicked.find('.hidden-content-img').first().html();
		var theTitle = clicked.find('.thumb-title').first().html();
		//plak die inhoud in de .bar-text
		$('.bar-text').html("<div class='spec-img'>"+theImage+"</div><div class='spec-text'>"+theHtml+"</div><a class='wishlist' href='#'>Zet op wenslijst</a>");

		$('.bar-text').attr('data-name', 'xyz');

		$('.bar.left h3').html(theTitle);
		$('.bar-text .spec-img').click(function(evt) {
			if($(window).innerWidth() >= 480) {
				var elt = $(evt.currentTarget);
				var eltImg = elt.find('img');
				var theImageFull = eltImg.attr('data-large');
				var index = 0;
				currentImageSet = [];
				$('.spec-text .image-row img').each(function(){
					currentImageSet.push($(this).attr('data-large'));
					if($(this).attr('data-large') == theImageFull) {
						currentIndex = index;
					}
					index++;
				});
				$('body').append('<div class="product-lightbox"><div class="close">&times;</div><img src="'+theImageFull+'" /><div class="next">volgende</div><div class="prev">vorige</div>');
			}
		});

	});

	$('body').on('click', '.wishlist', function(evt) {
		var elt = $(evt.currentTarget);
		//populate field.
		var brand = $('.full-width-bar-container .bar.left h3').html().trim();
		var type = $('.Navigation-link.is-active').html().trim();
		var img = $('.spec-img > img').attr('src');

		$('#input_2_2').val(type+" - "+brand);
		$('#input_2_7').val(img);
		$('.wishlistform').show();

	});
	$('body').on('click', '.product-lightbox .next', function(evt) {
		var total = currentImageSet.length;	
		currentIndex = (currentIndex + 1)%total;
		var img = currentImageSet[currentIndex];
		$('.product-lightbox > img').attr('src', img);
	});
	$('body').on('click', '.product-lightbox .prev', function(evt) {
		var total = currentImageSet.length;	
		currentIndex = currentIndex == 0 ? total - 1 : currentIndex-1;
		var img = currentImageSet[currentIndex];
		$('.product-lightbox > img').attr('src', img);
	});

	$('body').on('click', '.product-lightbox .close', function(evt) {
		var elt0 = $(evt.currentTarget);
		var elt = elt0.parents('.product-lightbox'); 
		elt.remove();
	});

	$('.wishlistform .close').click(function(evt) {
		$('.wishlistform').hide();
	});

	$('.close-button').click(function(){
		$('.full-width-bar-container').hide();
	})
});
