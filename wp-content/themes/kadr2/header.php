<!DOCTYPE html>
<html <?php language_attributes(); ?>>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:image" content="<?= get_template_directory_uri(); ?>/image/logo.svg">
  <meta name="yandex-verification" content="d4c781366d100582" />

  <?php if(is_front_page()): ?> 
    <link rel="preload" as="image" href="<?php echo get_field('slajder-1'); ?>" />
    <link rel="preload" as="image" href="<?php echo get_field('slajder-2'); ?>" />
    <link rel="preload" as="image" href="<?php echo get_field('slajder-3'); ?>" /> 
  <?php endif; ?> 

  <?php wp_head(); ?>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNKDH64" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <div class="wrapper">
    <header class="header <?php echo is_search() ? 'header-white' : ''; ?>">
      <div class="header__container container">
        <div class="header__top">
          <div class="header-logo">
            <a href="<?= get_site_url(); ?>"><img src="<?= get_template_directory_uri(); ?>/image/logo.svg"
                alt="Логотип рекрутингового агентства 'Кадр'"></a>
            <div>
              <div class="header-tel">
                <a href="tel:+375447772935">+375 (44) 777-29-35</a>
              </div>
              <div class="header-email">
                <a href="mailto:info@kadragency.ru">info@kadragency.ru</a>
              </div>
            </div>
          </div>
          <div class="header-panel">
            <div class="header-panel__main">
              <div class="search search-header">
                <?php get_search_form(); ?>
              </div>
              <div class="header-socials">
                <a href="https://t.me/kadrhragency" target="_blank" aria-label="VK link">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7640_2798)">
                      <path
                        d="M12.7617 17.7566L12.4176 22.5961C12.9099 22.5961 13.1231 22.3847 13.3787 22.1307L15.6867 19.925L20.4689 23.4273C21.346 23.9161 21.9639 23.6586 22.2005 22.6204L25.3396 7.91132L25.3405 7.91045C25.6187 6.61392 24.8716 6.10692 24.0171 6.42498L5.56572 13.4892C4.30645 13.978 4.32552 14.68 5.35165 14.998L10.0689 16.4653L21.0262 9.60912C21.5419 9.26765 22.0107 9.45658 21.6251 9.79805L12.7617 17.7566Z"
                        fill="#C8C2BF" />
                    </g>
                    <defs>
                      <clipPath id="clip0_7640_2798">
                        <rect width="20.8" height="20.8" fill="white" transform="translate(4.6001 4.59998)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
                <a href="https://api.whatsapp.com/send?phone=375445572020" target="_blank" aria-label="Whatsapp link">
                  <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_7640_2807)">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14.9971 5.40002C9.70481 5.40002 5.3999 9.70613 5.3999 14.9999C5.3999 17.0994 6.07696 19.0464 7.22791 20.6268L6.03174 24.1935L9.72168 23.0142C11.2393 24.0188 13.0505 24.6 15.0027 24.6C20.295 24.6 24.5999 20.2938 24.5999 15.0001C24.5999 9.7063 20.295 5.40018 15.0027 5.40018L14.9971 5.40002ZM12.317 10.2764C12.1309 9.83053 11.9898 9.81365 11.7078 9.80219C11.6118 9.79661 11.5048 9.79104 11.3862 9.79104C11.0193 9.79104 10.6357 9.89823 10.4043 10.1352C10.1223 10.4231 9.42263 11.0946 9.42263 12.4717C9.42263 13.8488 10.4269 15.1807 10.5623 15.3671C10.7034 15.5531 12.5202 18.4202 15.3412 19.5886C17.5472 20.5029 18.2019 20.4181 18.7039 20.311C19.4374 20.1529 20.3571 19.6109 20.5885 18.9564C20.8198 18.3016 20.8198 17.7429 20.752 17.6244C20.6843 17.5059 20.498 17.4384 20.216 17.2971C19.934 17.156 18.5628 16.4787 18.3033 16.3884C18.0493 16.2925 17.8068 16.3264 17.6151 16.5974C17.3442 16.9755 17.0791 17.3594 16.8646 17.5906C16.6954 17.7712 16.4188 17.7939 16.1876 17.6978C15.8772 17.5682 15.0084 17.2631 13.9363 16.3094C13.1069 15.5702 12.5427 14.6503 12.3792 14.3738C12.2155 14.0917 12.3623 13.9278 12.4919 13.7756C12.633 13.6005 12.7683 13.4764 12.9094 13.3127C13.0505 13.1491 13.1295 13.0644 13.2198 12.8724C13.3158 12.6863 13.2479 12.4943 13.1802 12.3532C13.1126 12.2121 12.5484 10.8349 12.317 10.2764Z"
                        fill="#C8C2BF" />
                    </g>
                    <defs>
                      <clipPath id="clip0_7640_2807">
                        <rect width="19.2" height="19.2" fill="white" transform="translate(5.3999 5.40002)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </div>
            </div>
            <button class="header-btn btn btn-position-aware popmake-2726">
              Заказать звонок
            </button>
            <div id="nav-mobile">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
        </div>
        <div class="header__menu">
          <ul class="ul-menu">
            <li><a href="#">Работодателям</a></li>
            <li><a href="<?= get_site_url(); ?>/vakansii/">Вакансии</a></li>
            <li><a href="#">Блог</a></li>
            <li><a href="#">О компании</a></li>
            <li><a href="#">Цены</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
    </header>