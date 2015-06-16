jQuery(document).ready(function($) {  

// als je klikt op .product-thumb
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
			var elt = $(evt.currentTarget);
			var eltImg = elt.find('img');
			var theImageFull = eltImg.attr('data-large');
			$('body').append('<div class="product-lightbox"><img src="'+theImageFull+'" />"</div>');
		});

		$('body').on('click', '.product-lightbox', function(evt) {
			var elt = $(evt.currentTarget);
			elt.remove();
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

	$('.wishlistform .close').click(function(evt) {
		$('.wishlistform').hide();
	});

	$('.close-button').click(function(){
		$('.full-width-bar-container').hide();
	})
});
