 jQuery(document).ready(function ($) {
    const acc = document.getElementsByClassName('faq__item');

    $(".faq__item").on("click", function(e) {

		e.preventDefault();
		var $this = $(this);

		if (!$this.hasClass("active")) {
			$(".faq__item").removeClass("active");
		}

		$this.toggleClass("active");
	});
});
