/* jQuery OMGBillboard Plugin
   Coded and ridiculously named by Mary Macapagal
   (c) 2013, Licensed under the MIT license https://github.com/marymacapagal/omgbillboard/blob/master/MIT-License.txt
*/

(function($) {
	"use strict";
	jQuery.fx.interval = 50;
       var urls=0;
	$.fn.OMGBillboard = function(options) {
	
		var defaults = {
			'imgWidth': 0,
			'imgHeight': 0,
			'numSlices': 10,
			'sliceClass': 'slice',
			'rotateSpeed': 500,
			'changeSpeed': 5000,
                     'addfackt': 0,
			'bgColor': '#000'
			},
			settings = $.extend({}, defaults, options);
		
		return this.each(function() {
			
			var $container = $(this);
						//if imgWidth and imgHeight are not defined, get the container's dimensions
			if ( ! (settings.imgWidth > 0) ) settings.imgWidth = $container.width();
			if ( ! (settings.imgHeight > 0) ) settings.imgHeight = $container.height();
			
			var	images = [],
                            url = [],
				imgIdx = 0,
				sliceWidth = (settings.imgWidth/settings.numSlices) - 1;
				
			$container.find("img").each(function() {
				images.push($(this).attr("src"));
                            url.push($(this).attr("url"));
				$(this).hide();
			});
			
			$container.css({
				'display':'block',
				'overflow':'hidden',
				'background-color':settings.bgColor,
				'height':settings.imgHeight+'px',
				'width':settings.imgWidth+1+'px'
			}).attr({
				'style':settings.containerCSS
			});
			$container[0].insertAdjacentHTML(
				'afterbegin',
				new Array(settings.numSlices+1).join('<div class="'+settings.sliceClass+'"></div>')
			);
                     $("#ali").attr("href", url[urls]);
			urls=urls+1;
			var $slices = $container.children('div.'+settings.sliceClass);
				$slices.css({
				'float':'left',
				'margin':0,
				'padding':0,
				'height': settings.imgHeight,
				'width': sliceWidth,
				'max-width': sliceWidth,
				'background':'transparent no-repeat top left',
				'border-left':settings.addfackt+'px solid '+settings.bgColor,
				'background-size' : 'cover'
			});
			$slices.each(function(idx) {
				$(this).css({
					'background-position': -idx*sliceWidth,
					'background-image': 'url('+images[imgIdx]+')',
				});
                            
			});	
			function rotate(speed) {
				$slices.each(function() {
                                  $("#ali").attr("href", url[urls]);

 					$(this).animate({
						'width': '0',
						'margin-left': sliceWidth/2+'px',
						'margin-right': sliceWidth/2+'px'
					}, {
						duration : speed,
						done : function() {
							$(this).css('background-image', 'url('+images[imgIdx]+')').animate({
								'margin-left': '0',
								'margin-right': '0',
								'width': sliceWidth
							}, {
								duration : speed
							});
						}
					});
				});
				
				imgIdx = imgIdx+1;
                            urls=urls+1;
				if (imgIdx === images.length) {imgIdx = 0;}
				if (urls=== images.length) {urls= 0;}
				setTimeout(function() {
					rotate(speed);
				}, settings.changeSpeed);
			}
			
			
			setTimeout(function() {
				rotate(settings.rotateSpeed);
			}, settings.changeSpeed);
		
		
		});
		
	};
	
})(jQuery);
