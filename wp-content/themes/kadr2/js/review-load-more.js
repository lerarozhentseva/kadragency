jQuery(document).ready(function($){
	$('.read-more').on('click', function() {
		var id = $(this).data('id');
		var page = 1;	
		var mayThis = $(this);
		var data = {
			'action': 'review_read_more_by_ajax',
			'page': page,
			'security': review.security,
			'id': id,
		};
		$.post(review.ajaxurl, data, function(response) {
			if($.trim(response) != '') {
				
				$('.reviews-slider__text[data-id='+ id +']').empty().append(response);
				page++;
				$(mayThis).addClass('active');
				$('.read-more').not(mayThis).removeClass('active');
			}
		});
	});
});
