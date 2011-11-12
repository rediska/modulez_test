var gallery = {
	init: function() {
		$('ul.imageslist a').bind('click', function(eventObj) {
			gallery.lightbox(eventObj);
			return false; 
		});
		
		$('#lightbox').live('click', function(eventObj) { gallery.close_lightbox(); } );
		
		var slide_width = 480;
		var count = $('ul.imageslist').length;
		$('#go_next').one('click', function(eventObj) { gallery.go_next(slide_width, count); } );
		$('#go_prev').one('click', function(eventObj) { gallery.go_prev(slide_width, count); } );
					 
		var images = $('ul.imageslist:first li');  //выбираем первые 12 картинок
		var duration = 400;  //длительность эфекта
		var delay = 150;  //задержка между отображением картинок
		
		$('ul.imageslist:not(:first) li').children('a').children('img').show();  //остальные картинки отображаем сразу
					
		//перемешиваем массив
		for (i=0; i < images.length; i++) {
						var n = Math.floor(Math.random( ) * (images.length))
			var tmp = images[i];
			images[i] = images[n];
			images[n] = tmp;
		}
					
		//отображаем картинки
		for (i=0; i < images.length; i++) {
			$(images[i]).children('a').children('img').delay(i*delay).fadeIn(duration);
		}
	},
	
	lightbox: function(eventObj) {
		var id = eventObj.target.id;
		var lightbox = $('<div id="lightbox"><img src="images/close_lightbox.png"></div>').appendTo('body');
		lightbox.css('height', jQuery(document).height()+'px');
		lightbox.fadeIn(500);
						
		var imagebox = $('<div id="imagebox"></div>').appendTo('body');
		var box = $('<div class="box"></div>').appendTo(imagebox);
		imagebox.delay(500).fadeIn(500);
					
		$.ajax({
			type: "POST",
			url: "main/get_image",
			data: {
				id: id
			},
			dataType: "json",
			success: function(data) {
				gallery.ajax_success(data,imagebox, box);
			}
		});
	},
	
	ajax_success: function(data, imagebox, box) {		
		data.width = parseInt(data.width);
		data.height = parseInt(data.height);
						
		var w_space = 40;  //отступы по ширине
		var h_space = 80;  //отступы по высоте
		
		//Уменьшение больших картинок под размер экрана
		if (data.width + w_space > $(window).width() || data.height + h_space > $(window).height()) {
			if ($(window).width() / $(window).height() < (data.width + w_space) / (data.height + h_space) ) {
				//широкая
				data.height = data.height / (data.width / ($(window).width() - w_space - 200));
				data.width = $(window).width() - w_space - 200;
			} else {
				//высокая
				data.width = data.width / (data.height / ($(window).height() - h_space - 50));
				data.height = $(window).height() - h_space - 50;
			}
		}
		
		imagebox.width((data.width + w_space)/2);  
		box.width(data.width + w_space).height(data.height + h_space).css('marginTop',((data.height + h_space)*(-0.5))+'px');;

		var img = $('<img src="images/'+data.id+'/original'+data.ext+'" width="'+data.width+'" height="'+data.height+'" />').appendTo(box);
		img.load( function() {
			img.fadeIn();
			$('<div class="title">'+data.text+'</div>').appendTo(box);
		});
	},
	
	close_lightbox: function() {
		$('#lightbox').add('#imagebox').remove();
	},
	
	go_next: function(slide_width, count) {
		var max_pos = (count-1) * slide_width * (-1);
		var container = $('#container');
		var cur_pos = container[0].offsetLeft;
		if (cur_pos > max_pos) {
			container.animate({left: (container[0].offsetLeft) - slide_width + 'px'}, 1000, function() {
				$('#go_next').one('click', function(eventObj) { gallery.go_next(slide_width, count); } );
			});
		} else {
			$('#go_next').one('click', function(eventObj) { gallery.go_next(slide_width, count); } );
		}
	},
	
	go_prev: function(slide_width, count) {
		var max_pos = 0;
		var container = $('#container');
		var cur_pos = container[0].offsetLeft;
		if (cur_pos < max_pos) {
			container.animate({left: (container[0].offsetLeft) + slide_width + 'px'}, 1000, function() {
				$('#go_prev').one('click', function(eventObj) { gallery.go_prev(slide_width, count); } );
			});
		} else {
			$('#go_prev').one('click', function(eventObj) { gallery.go_prev(slide_width, count); } );
		}
	}
}

$(document).ready(function() {
	gallery.init();
});