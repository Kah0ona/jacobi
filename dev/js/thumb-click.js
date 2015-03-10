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
		$('.bar-text').html("<div class='spec-img'>"+theImage+"</div><div class='spec-text'>"+theHtml+"</div>");
		$('.bar.left h3').html(theTitle);
	});


	$('.close-button').click(function(){
		$('.full-width-bar-container').hide();
	})
});