document.addEventListener('DOMContentLoaded', function() {
  if (document.querySelector('[data-fancybox]')) {
    Fancybox.bind('[data-fancybox]', {
      Carousel: {
        infinite: true,
      },
      Thumbs: false,
      Infobar: false,
      Toolbar: {
            display: {
              left: [],
              middle: [],
              right: ["close"],
            },
          },
    });
  }
})