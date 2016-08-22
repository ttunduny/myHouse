(function($) {
	"use strict";
	$(function() {
		$('.editr').each(function() {
			new Editr(
					{
						el: this
					}
			);
		});
	});
}(jQuery));