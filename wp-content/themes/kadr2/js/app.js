// Добавление обработчиков событий для форм
document.addEventListener('DOMContentLoaded', function() {

  const forms = document.querySelectorAll('form');

  forms.forEach(form => {
    const action = form.getAttribute('action');

    // Форма "Бесплатная консультация"
    if (action && action.includes('wpcf7-f2454-o7')) {
      form.setAttribute('onsubmit', "yaCounter70994260.reachGoal('free-consult'); return true;");
    }

    // Форма "Свяжитесь с нами"
    if (action && action.includes('wpcf7-f27-o8')) {
      form.setAttribute('onsubmit', "yaCounter70994260.reachGoal('lets-talk'); return true;");
    }

    // Форма "Найти сотрудника"
    if (action && action.includes('wpcf7-f2711-o6')) {
      form.setAttribute('onsubmit', "yaCounter70994260.reachGoal('trust'); return true;");
    }

    // Форма "Консультация (модальное)"
    if (action && action.includes('wpcf7-f28-o3')) {
      form.setAttribute('onsubmit', "yaCounter70994260.reachGoal('consult'); return true;");
    }

    // Форма "Заказать звонок"
    if (action && action.includes('wpcf7-f2728-o5')) {
      form.setAttribute('onsubmit', "yaCounter70994260.reachGoal('call-us'); return true;");
    }
  });
});
document.querySelector('.scroll-up').onclick = () => {
  // переместим в начало страницы
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: 'smooth'
  });
}
jQuery(document).ready(function($) {
  let scrollBtn = $(".scroll-up");
 $(window).scroll(function () {
      if ($(window).scrollTop() > 300) {
          scrollBtn.addClass("active");
      } else {
          scrollBtn.removeClass("active");
      }
  });
 /* scrollBtn.on("click", function (e) {
      e.preventDefault();
      $("html, body").scrollTo({ scrollTop: 0 }, 1000);
  });*/
})

// Анимация кнопок
jQuery(document).ready(function($) {
$(function() {  
  $(".btn-position-aware")
    .on("mouseenter", function(e) {
		var parentOffset = $(this).offset(),
      	relX = e.pageX - parentOffset.left,
      	relY = e.pageY - parentOffset.top;
		$(this).find("span.position-aware").css({top:relY, left:relX})
    })
    .on("mouseout", function(e) {
			var parentOffset = $(this).offset(),
      		relX = e.pageX - parentOffset.left,
      		relY = e.pageY - parentOffset.top;
    	$(this).find("span.position-aware").css({top:relY, left:relX})
    });
});
$(function() {  
	$(".btn-position-aware input")
	  .on("mouseenter", function(e) {
		  var parentOffset = $(this).offset(),
			relX = e.pageX - parentOffset.left,
			relY = e.pageY - parentOffset.top;
		  $(this).parent().find("span.position-aware").css({top:relY, left:relX})
	  })
	  .on("mouseout", function(e) {
			  var parentOffset = $(this).offset(),
				relX = e.pageX - parentOffset.left,
				relY = e.pageY - parentOffset.top;
		  $(this).parent().find("span.position-aware").css({top:relY, left:relX})
	  });
  });
  
});

// Маска для поля телефона
jQuery(document).ready(function () {
  jQuery(".phon").mask("+375 (99) 999-99-99");
});


// Contact Form
jQuery(document).ready(function($) {
    var inputs = $('.contact-us__form input');
    var textarea = $('.contact-us__form textarea');
    var checkboxes = $('.wpcf7-checkbox');
    var files = $('.contact-us__form-file input[type="file"]');
    var filesName = $('.contact-us__form-file label span');
    $.each(inputs, function() {
        $(this).focusin(function() {
            $(this).parent().find('.wpcf7-not-valid-tip').css('display', 'none');
            $(this).parent().addClass('active');
            $(this).removeClass('wpcf7-not-valid');
        });    
        $(this).focusout(function() {
            if ($(this).val() === '' )
                $(this).parent().removeClass('active');
        }); 
    });
    $.each(checkboxes, function() {
        $(this).focusin(function() {
            $(this).parent().find('.wpcf7-not-valid-tip').css('display', 'none');
            $(this).removeClass('wpcf7-not-valid');
        });    
    });
    $.each(textarea, function() {
        $(this).on('input', function() {
            if ($(this).val().length > 0) {
                $(this).parent().addClass('hidden');
            };   
            if ($(this).val().length == 0) {
                $(this).parent().removeClass('hidden');
            };   
        });
        $(this).focusin(function() {
            $(this).parent().addClass('active');
        });    
        $(this).focusout(function() {
            if ($(this).val() === '')
                $(this).parent().removeClass('active'); 
        });    
    });
    $('#pum-3186').find('.pum-close').click(function() {
      $('#pum-3186').css('display', 'none');
      $('#pum-3186').css('opacity', '0');
    })



    /*function replaceImage() {

      setInterval(() => {
        let numOne = Math.floor(Math.random() * 7)
        let numTwo = Math.floor(Math.random() * 7)

        console.log(numOne + '||' + numTwo)
        if(numOne == numTwo || numTwo == numOne) {
          numTwo = Math.floor(Math.random() * 7);
        }
        $('.ourCulture-item').eq(numOne).addClass('fadeOutCustom');
        $('.ourCulture-item').eq(numTwo).addClass('fadeOutCustom');

        let imageOne = $('.ourCulture-item').eq(numOne).find('img').attr('src');
        let imageTwo = $('.ourCulture-item').eq(numTwo).find('img').attr('src');

        setTimeout(() => {
          $('.ourCulture-item').eq(numOne).find('img').attr('src', imageTwo);
          $('.ourCulture-item').eq(numOne).find('source').attr('srcset', imageTwo);

          $('.ourCulture-item').eq(numTwo).find('img').attr('src', imageOne);
          $('.ourCulture-item').eq(numTwo).find('source').attr('srcset', imageOne);
        }, 500);

        setTimeout(() => {
          $('.ourCulture-item').eq(numOne).removeClass('fadeOutCustom');
          $('.ourCulture-item').eq(numTwo).removeClass('fadeOutCustom');
        }, 900);
      }, 1000);

    }
    replaceImage()*/
   /* function replaceImage() {

      setInterval(() => {
        let numOne = Math.floor(Math.random() * 7)
        let numTwo = Math.floor(Math.random() * 7)
        let imageOne = $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('img').attr('src'); // 1
        let imageTwo = $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('img').attr('src'); // 4


        if(numOne == numTwo) {
          numOne = Math.floor(Math.random() * 7);
        }
        if(numTwo == numOne) {
          numTwo = Math.floor(Math.random() * 7);
        }


        if($('.ourCulture-item').eq(numOne).hasClass('replace')) {
          $('.ourCulture-item').eq(numOne).removeClass('replace');
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').removeClass('fadeOutCustom');

        } else if ($('.ourCulture-item').eq(numTwo).hasClass('replace')) {
          $('.ourCulture-item').eq(numTwo).removeClass('replace');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').removeClass('fadeOutCustom');
        } else {
          $('.ourCulture-item').eq(numOne).addClass('replace');
          $('.ourCulture-item').eq(numTwo).addClass('replace');
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').addClass('fadeOutCustom');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').addClass('fadeOutCustom');
        }     

        $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('img').attr('src', imageTwo);  // 4
        $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('source').attr('srcset', imageTwo);

        $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('img').attr('src', imageOne); // 1
        $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('source').attr('srcset', imageOne);
        
        setTimeout(() => {
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageOne);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageOne);

          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('img').attr('src', imageTwo); // 1
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('source').attr('srcset', imageTwo);
        }, 5000);  
      }, 10000);
    }
    replaceImage()*/
    /*function replaceImage() {

      setInterval(() => {
        let numOne = 0; //Math.floor(Math.random() * 7)
        let numTwo = 1;//Math.floor(Math.random() * 7)
        let imageOne = $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('img').attr('src'); // 1
        let imageTwo = $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('img').attr('src'); // 4

        
        let imageThree = $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src'); // 1
        let imageFour = $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('img').attr('src'); // 4


        /*if(numOne == numTwo) {
          numOne = Math.floor(Math.random() * 7);
        }
        if(numTwo == numOne) {
          numTwo = Math.floor(Math.random() * 7);
        }*/


       /* if($('.ourCulture-item').eq(numOne).hasClass('replace')) {
          $('.ourCulture-item').eq(numOne).removeClass('replace');
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').removeClass('fadeOutCustom');
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('img').attr('src', imageOne);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('source').attr('srcset', imageOne);

          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageOne);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageOne);

        } else  {
          $('.ourCulture-item').eq(numOne).addClass('replace');
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('img').attr('src', imageTwo);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-one').find('source').attr('srcset', imageTwo);
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').addClass('fadeOutCustom');

          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageTwo);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageTwo);
        }     

        if ($('.ourCulture-item').eq(numTwo).hasClass('replace')) {
          $('.ourCulture-item').eq(numTwo).removeClass('replace');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').removeClass('fadeOutCustom');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('img').attr('src', imageTwo); // 1
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('source').attr('srcset', imageTwo);

          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageTwo);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageTwo);
        } else {
          $('.ourCulture-item').eq(numTwo).addClass('replace');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').addClass('fadeOutCustom');
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('img').attr('src', imageOne); // 1
          $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-one').find('source').attr('srcset', imageOne);

          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageOne);  // 4
          $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageOne);

        }
        
       /* setTimeout(() => {          
          if($('.ourCulture-item').eq(numOne).hasClass('replace')) {
            $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageFour);  // 4
            $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageFour);
  
          } else if ($('.ourCulture-item').eq(numTwo).hasClass('replace')) {
            $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('img').attr('src', imageThree); // 1
            $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('source').attr('srcset', imageThree);
          } else {
            $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('img').attr('src', imageFour);  // 4
            $('.ourCulture-item').eq(numOne).find('.ourCulture-item-two').find('source').attr('srcset', imageFour);

            $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('img').attr('src', imageThree); // 1
            $('.ourCulture-item').eq(numTwo).find('.ourCulture-item-two').find('source').attr('srcset', imageThree);
          }  
        }, 2500);  */
    /*  }, 3000);
    }
    replaceImage()*/

    //ответ при успешной отправке формы связи
    document.addEventListener( 'wpcf7mailsent', function( event ) {

       $.each(inputs, function() {
            $(this).parent().removeClass('active');
        });
        $.each(textarea, function() {
            $(this).parent().removeClass('active');
        });
        $.each(files, function() {
          $(this).val();
        })
        $.each(filesName, function() {
          $(this).text('Прикрепить резюме (pdf)');
        })

        if ( '28' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-29 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
        if ( '27' == event.detail.contactFormId ) {
            var contact_us = $('.contact-us .container .inner, .contact-us-2 .container .contact-us-2__item.item-2');
            //$('.contact-us-2 .contact-us__title h2').text('Спасибо за заявку!')
            
            $.each(contact_us, function() {
                $(this).addClass('success');
                $(this).empty();
                $(this).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
            });
        };
        if ( '3109' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-1001 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за отклик!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
         if ( '3036' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-3036 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
        if ( '2711' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-2712 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
        if ( '2945' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-2944 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
         if ( '2728' == event.detail.contactFormId ) {
            var contact_us_popup = $('#popmake-2726 .popmake-content');
            $(contact_us_popup).addClass('success');
            $(contact_us_popup).empty();
            $(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
        };
        if ( '2454' == event.detail.contactFormId ) {
           //var contact_us_popup = $('#popmake-3186 .popmake-content');
           //$(contact_us_popup).addClass('success');
           //$(contact_us_popup).empty();
           //$(contact_us_popup).append('<div class="success__title"><h2 class="title-line-new block"><span>Спасибо за заявку!</span></h2></div><div class="success__text"><p>В ближайшее время с Вами свяжется наш специалист.</p></div>');
           $('.consult-info__title').html('<span>Спасибо за заявку!</span>');
           $('.consult-info__title').addClass('secCons');
           $('.consult-info__descr').text('В ближайшее время с Вами свяжется наш специалист.');
           $('.consult-info').find('form').remove();
           /*$('#pum-3186').css('display', 'block');
           $('#pum-3186').css('opacity', '1');*/
       };
    }, false );    

        const fileInputBlock = document.querySelector('.contact-us__form-file');
        
        if (fileInputBlock) {
          const fileInput = fileInputBlock.querySelector('input[type="file"]');
          const labelSpan = fileInputBlock.querySelector('label span');

          const defText = labelSpan.textContent;
          fileInput.addEventListener('change', function() {
            if (this.files && this.files.length > 0) {
                labelSpan.textContent = this.files[0].name;
            } else {
                labelSpan.textContent = defText;
            }
        });
        }
});

    


let timerId;

window.onload = function() {
    const header = document.querySelector('header');
    const main = document.querySelector('main');
    let lastScrollTop = 0;

    window.addEventListener("scroll", function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (window.pageYOffset > 120) {

            if (scrollTop > lastScrollTop) {
                header.classList.add('visib');
            } else {
                header.classList.remove('visib');
            }

            timerId = setTimeout(function() {
                header.classList.add('fixed');
                main.classList.add('padding');
            }, 500);
        } else {
            clearTimeout(timerId);
            header.classList.remove('fixed');
            main.classList.remove('padding');
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
};

jQuery(document).ready(function ($) {
   $('#nav-mobile').click(function(){
    $(this).toggleClass('active');
    $('.header-menu').toggleClass('active');
    $('body').toggleClass('scroll-lock');
  });
  $('.nav-menu-toggle').click(function(){
    $(this).parent().toggleClass('active');
    $(this).siblings('.sub-menu').toggleClass('active');
  });
});


jQuery(document).ready(function ($) {
  $('.often-questions__block').each(function() {
    const block = $(this);
    const inner = block.find('.often-questions__block-inner');
    const content = block.find('.often-questions__block-content');

    inner.click(function() {
      $('.often-questions__block').not(block).removeClass('active').find('.often-questions__block-content').slideUp();
      block.toggleClass('active');
      content.slideToggle();
    });
  });
});





// document.addEventListener('DOMContentLoaded', () => {
//   const dropdowns = document.querySelectorAll('.js-dropdown');

//   if (dropdowns) {
//     dropdowns.forEach((dropdown) => {
//       const inner = dropdown.querySelector('.js-dropdown-inner');
//       const title = dropdown.querySelector('.js-dropdown-value');
//       const labels = dropdown.querySelectorAll('.js-dropdown-item label');

//       inner.addEventListener('click', () => {
//         if (dropdown.classList.contains('--active')) {
//           dropdown.classList.remove('--active');
//         } else {
//           dropdown.classList.add('--active');
//         }
//       });

//       for (let index = 0; index < labels.length; index += 1) {
//         labels[index].addEventListener('click', (e) => {
//           if (title) {
//             title.textContent = e.target.textContent;
//             dropdown.classList.add('--filled');
//           }
         
//           if(document.getElementById('wpcf7-f2948-o6')) {
//             const hiddenInput = document.querySelector('.wpcf7-form input[name="selected_vacancy"]');
//             const selectedOption = e.target.previousElementSibling;
//             const selectedText = selectedOption.value;
//             const selectedUrl = selectedOption.getAttribute('data-url');
//             const vacancyLink = selectedText + ' <a href="' + selectedUrl + '">' + selectedText + '</a>';
//             hiddenInput.value = vacancyLink;
//           }
         
//           dropdown.classList.remove('--active');
//         });
//       }

//       document.addEventListener('click', (event) => {
//         if (!event.target.closest('.js-dropdown')) {
//           dropdown.classList.remove('--active');
//         }
//       });
//     });
//   }
// });

document.addEventListener('DOMContentLoaded', function() {
  const emailInput = document.querySelector('input[name="data[form_field_MjJjODc1NzY0NThkX2VtYWls]"]');
  if (emailInput) {
    emailInput.setAttribute('autocomplete', 'off');
  }
});

jQuery(document).ready(function ($) {
    const slides = [...document.getElementsByClassName('content__item')];
    const navs = document.getElementsByClassName('nav-block');

    for (var i = 0; i <= navs.length; i++) {
        if (navs[i]) {
            navs[i].addEventListener("click", function (e) {
                for (var j = 0; j < navs.length; j++) {
                    navs[j].classList.remove("select");
                };
                this.classList.add("select");

                slides.forEach(slide => {
                    slide.classList.remove('active');
                    if(this.getAttribute('data-item') === slide.getAttribute('data-item')) {
                        slide.classList.add('active');

                        if(window. innerWidth <= 360) {
                            slide.scrollIntoView({behavior: "smooth"})
                        }
                    }
                })
            });
        }
    };
});

// Sliders
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
      spaceBetween: 20,
      loop: false,
      // pagination: {
      //   el:'.more-interesting-slider-pagination',
      //   type: 'bullets',
      //   clickable: 'true',
      // },
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
        350: {
          slidesPerView: 1.15,
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


// Содержание на странице статей
document.addEventListener("DOMContentLoaded", function() {

  const tocLinks = document.querySelectorAll('.lwptoc_item a');

  function isSectionHalfInView(sectionId) {
    const section = document.getElementById(sectionId);
    if (!section) return false;
      const bounding = section.getBoundingClientRect();
      const topThreshold = bounding.top < window.innerHeight / 2;
      const bottomThreshold = bounding.bottom >= 0;
      return topThreshold && bottomThreshold;
    }

  function handleScroll() {
    let foundCurrentSection = false;

    tocLinks.forEach((link, index) => {
      const sectionId = link.getAttribute('href').substring(1);
      const sectionHalfInView = isSectionHalfInView(sectionId);

      if (!foundCurrentSection && sectionHalfInView) {
        tocLinks.forEach(item => item.classList.remove('active'))
        foundCurrentSection = true;
        link.classList.add('active');
      }
    });
  }

  if(window.innerWidth > 1413) {
    window.addEventListener('scroll', handleScroll);
    handleScroll();
  }
});

document.addEventListener('DOMContentLoaded', function () {
  const ALL_VACANCIES = '55';
  const categoryButtons = document.querySelectorAll('.category__button, .category-child__button');
  const vacancyItems = document.querySelectorAll('.vacancy__item');

  categoryButtons.forEach(button => {
    button.addEventListener('click', function () {
      const categoryId = this.getAttribute('data-id');

      categoryButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');

      if (categoryId === ALL_VACANCIES) {
        vacancyItems.forEach(item => {
          item.style.display = 'block';
        });
      } else {
        vacancyItems.forEach(item => {
          const itemCategories = item.getAttribute('data-category').split(' ');
          if (itemCategories.includes(categoryId)) {
            item.style.display = 'block';
          } else {
            item.style.display = 'none';
          }
        });
      }
    });
  });
});
