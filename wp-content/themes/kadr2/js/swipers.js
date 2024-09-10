jQuery(document).ready(function($){

    const offer = new Swiper('.offer-slider', {
    navigation: {
      nextEl: '.offer-slider.swiper-button-next',
      prevEl: '.offer-slider.swiper-button-prev',
    },
    preLoadImages: false,
    lazy: true,
    speed: 1000,
    slidesPerView: 1,
    spaceBetween: 300,
    loop: true,
    pagination: {
      el:'.swiper-pagination',
      type: 'bullets',
      clickable: 'true',
    },
    });

    const directions = new Swiper('.our-directions__swiper', {
      preLoadImages: false,
      lazy: true,
      speed: 1000,
      spaceBetween: 20,
      breakpoints: {
        320: {
          slidesPerView: 'auto'
        },
        768: {
          slidesPerView: 3
        }
      }
    });

    const licenses = new Swiper('.licenses__swiper', {
      preLoadImages: false,
      lazy: true,
      speed: 1000,
      spaceBetween: 20,
      breakpoints: {
        320: {
          slidesPerView: 1.2
        },
        768: {
          slidesPerView: 3
        }
      }
    });

    const reviews = new Swiper('.reviews-slider', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      preLoadImages: false,
      lazy: true,
      spaceBetween: 30,
      slidesPerView: 1,
      pagination: {
        el:'.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
      },
    });
    
    const our_certificates = new Swiper('.our-certificates-slider', {
      navigation: {
        nextEl: '.our-certificates-slider-nav.swiper-button-next',
        prevEl: '.our-certificates-slider-nav.swiper-button-prev',
      },
      preLoadImages: false,
      lazy: true,
      spaceBetween: 20,
      slidesPerView: 3,
      loop: true,
      pagination: {
        el:'.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
      },
      breakpoints: {
        1090: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2.4,
        },
        600: {
          slidesPerView: 2,
        },
        450: {
          slidesPerView: 1.5,
        },
        375: {
          slidesPerView: 1.2,
        },
        0: {
          slidesPerView: 1.1,
        }
        
      },
    });
    
    const more_interesting = new Swiper('.more-interesting-slider', {
      preLoadImages: false,
      slidesPerView: 3,
      spaceBetween: 20, // Установлен отступ между слайдами в 20px
      loop: true,
      pagination: {
        el: '.more-interesting-slider-pagination',
        type: 'bullets',
        clickable: true, // 'true' изменено на true
      },
      breakpoints: {
        1090: {
          slidesPerView: 3,
        },
        768: {
          slidesPerView: 2.3,
        },
        670: {
          slidesPerView: 2.2,
        },
        560: {
          slidesPerView: 1.8,
        },
        500: {
          slidesPerView: 1.6,
        },
        435: {
          slidesPerView: 1.4,
        },
        400: {
          slidesPerView: 1.2,
        },
        350: {
          slidesPerView: 1.1,
        },
        0: {
          slidesPerView: 1,
        }
      },
    });

    const team = new Swiper('.team-slider', {
      navigation: {
        nextEl: '.team-slider.swiper-button-next',
        prevEl: '.team-slider.swiper-button-prev',
      },
      slideToClickedSlide: true,
      slidesPerView: 4,
      loop: true,
      preLoadImages: false,
      lazy: true,
      pagination: {
        el:'.swiper-pagination',
        type: 'bullets',
        clickable: 'true',
        gap: '5px',
      },
      breakpoints: {
        1090: {
          slidesPerView: 4,
        },
        768: {
          slidesPerView: 3,
        },
        550: {
          slidesPerView: 2.5,
        },
        450: {
          slidesPerView: 2,
        },
        375: {
          slidesPerView: 1.5,
        },
        0: {
          slidesPerView: 1.1,
        }
        
      },
    });
    
    $( window ).bind("resize", function(){
    if (document.documentElement.clientWidth < 767) {
      let width = $( '.team' ).width(); 
      $( '.team .swiper-slide__text' ).width(width-30);  
    };
    });
});
