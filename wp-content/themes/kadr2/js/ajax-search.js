

jQuery(function($) {
    const search_input = $('.search-form__input');
    const searchInputHeader = $('header .search-form__input');
    const search_results = $('.ajax-search');
    const header = $('.header');
    const btnSearchInHeader = header.find('.btn-search.search');
    const btnsSubmit = $('.btn-search.submit');
    const btnsSearch = $('.btn-search.search');

   

    btnSearchInHeader.click(function() {
      if ($(window).width() > 767) {
        $('.header-panel__main').fadeOut(300, function() {
          search_input.addClass("active");
          header.addClass('search-open'); 
          btnsSearch.css('display', 'none');
          btnsSubmit.css('display', 'block');
          searchInputHeader.focus();
      
          const textLength = searchInputHeader.val().length;
          if (textLength > 0) {
            searchInputHeader[0].setSelectionRange(textLength, textLength);
          }
        });
      } else {
        $('.header-panel__main, .header-logo').fadeOut(300, function() {
          search_input.addClass("active");
          header.addClass('search-open'); 
          btnsSearch.css('display', 'none');
          btnsSubmit.css('display', 'block');
          $('.search-header').css('width', '100%');
          searchInputHeader.focus();
      
          const textLength = searchInputHeader.val().length;
          if (textLength > 0) {
            searchInputHeader[0].setSelectionRange(textLength, textLength);
          }
        });
      }
    });


    $('.search-page .submit').attr('type', 'submit');
    $('.search-page .search').attr('type', 'submit');

    let typingTimer;
    const doneTypingInterval = 100;

    search_input.on('keyup', function() {
        clearTimeout(typingTimer);
        const search_value = $(this).val();
        const searchItems = $(this).parent().find('.ajax-search');

        if (search_value.length > 2) {
            typingTimer = setTimeout(function() {
                $.ajax({
                    url: ajaxurl,
                    type: 'POST',
                    data: {
                        'action': 'ajax_search',
                        'term': search_value,
                        'security': search.security
                    },
                    success: function(results) {
                        searchItems.fadeIn(200).html(results);
                    }
                });
            }, doneTypingInterval);
        } else {
            searchItems.fadeOut(200);
        }
    });
});
