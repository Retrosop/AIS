// page init
jQuery(function(){
	initCustomTabs();
	initCustomSmoothScroll();
});

function initCustomTabs() {
	var activeClass = 'active',
		body = jQuery('html, body');

	jQuery('.tabset').each(function() {
		var tabset = jQuery(this),
			tabItems = tabset.children('li'),
			animationActive = false,
			animSpeed = 400;

		tabItems.each(function() {
			var tabItem = jQuery(this),
				tabOpener = tabItem.children('a'),
				tabContent = jQuery(tabOpener.attr('href'));

			if(!tabItem.hasClass(activeClass)) {
				tabContent.hide();
			}

			tabOpener.on('click', function(e) {
				e.preventDefault();

				if(!animationActive) {
					var activeItem = tabset.find('.' + activeClass);

					if(!tabItem.hasClass(activeClass)) {
						jQuery(activeItem.children('a').attr('href')).fadeOut(animSpeed, function() {
							body.scrollTop(0);
							tabContent.fadeIn(animSpeed, function() {
								animationActive = false;
							});
						});
						activeItem.removeClass(activeClass);
						tabItem.addClass(activeClass);
					}
				}
			});
		});
	});
}

function initCustomSmoothScroll() {
	var activeClass = 'item-active',
		animationActive = false,
		animSpeed = 600,
		body = jQuery('html, body');

	jQuery('.smooth-links').each(function() {
		var list = jQuery(this),
			listItems = list.find('li');

		listItems.each(function() {
			var item = jQuery(this),
				link = item.find('a'),
				section = jQuery(link.attr('href'));

			link.on('click', function(e) {
				e.preventDefault();

				if(!animationActive && !item.hasClass(activeClass)) {
					animationActive = true;

					body.animate({
						scrollTop: section.offset().top
					}, animSpeed, function() {
						animationActive = false;
					});
				}
			});
		});
	});
}