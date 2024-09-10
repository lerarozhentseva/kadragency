jQuery(document).ready(function($){  
    function marquee() {
        if ($('.advantage-top').length) {
            $('.advantage-top').marquee({
                direction: 'left',
                duplicated: true,
                duration: 80000,
                gap: 0,
                delayBeforeStart: 0,
                startVisible: true,
            });
        };
        if ($('.advantage-bottom').length) {
            $('.advantage-bottom').marquee({
                direction: 'right',
                duplicated: true,
                duration: 80000,
                gap: 0,
                delayBeforeStart: 0,
                startVisible: true,
            });
        };
    };
    marquee();

    // ЗАКОМЕНТИРОВАНО ПОТОМУ-ЧТО НА ГЛАВНОЙ СТРРАНИЦЕ ПРОИСХОДИТ ДВОЙНОЕ СОБЫТИЕ, ЭТОТ КОД ЕСТЬ В APP.JS by Volkov
    /*$('.often-questions__block').each(function() {
      const block = $(this);
      const inner = $(this).find('.often-questions__block-inner');
      const content = $(this).find('.often-questions__block-content');

      inner.on('click', function() {
          $('.often-questions__block').not(block).removeClass('active');
          $('.often-questions__block-content').not(content).slideUp();
          content.slideToggle();
          block.toggleClass('active');
      });
    });*/
});