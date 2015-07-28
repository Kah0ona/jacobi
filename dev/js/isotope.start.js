jQuery(window).load(function(){
	var $ = jQuery;
	var $grid = $('.product-gallery-fade-small');
	$grid.isotope({
		itemSelector: '.product-thumb',	
		layoutMode: 'fitRows'
	});


	var merken = {};
	//maak filter buttons van elk merk op deze page
	$('.product-thumb').each(function() {
		var merk = $(this).attr('data-merk');
		var merkModified = merk.replace(" ","_").toLowerCase();
		if(merk != null && merk.trim() != "") {
			merken[merkModified] = merk;
		}
	});

	var keys = []
	
	for (k in merken) {
		if (merken.hasOwnProperty(k)) {
			keys.push(k);
		}
	}

	keys.sort();

	var el = "<div class='hide-me-on-mobile'><h3>Designers</h3><ul>";

	var len = keys.length;

	for (i = 0; i < len; i++) {
		var merkModified = keys[i];
		var merk = merken[merkModified];
		el+= "<li data-filter='.product-"+merkModified+"'>"+merk+"</li>";
	}

	el += "<li data-filter='*'>TOON ALLES</li>";
	el += "</ul></div>";

	$('.brandslist').append(el);
    $('.brandslistmobile').append(el);

	$('body').on('click', '.brandslist ul li, .brandslistmobile ul li', function(evt){ 
		var li = $(evt.currentTarget);
		$grid.isotope({
			'filter' : li.attr('data-filter')
		});
	});
});


