<?php
/*
Template Name: Вакансии
Template Post Type: page
*/
?>
<?php wp_head(); ?>
<?php get_header(); ?>
<main>
  <div class="vacancy-title page-header">
    <div class="container">
      <div class="vacancy-title__item page-header__item item-1">
        <div class="breadcrumbs"><?php if (function_exists('dimox_breadcrumbs'))
          dimox_breadcrumbs(); ?></div>
        <h1>Вакансии</h1>
      </div>
    </div>
  </div>
  <div id="check-out-our-offers" class="check-out-our-offers page-header">
    <div class="container">
      <div class="check-out-our-offers__item">
        <form method="POST" id="vacancies_filter">
          <div class="filter-item specialization">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_764_16096)">
                <path
                  d="M19.8779 19.1996L14.0681 13.3897C15.17 12.0293 15.8334 10.2997 15.8334 8.4167C15.8334 4.05145 12.2819 0.5 7.91666 0.5C3.55141 0.5 0 4.05145 0 8.4167C0 12.7819 3.55145 16.3334 7.9167 16.3334C9.79975 16.3334 11.5293 15.67 12.8897 14.5681L18.6996 20.378C18.8623 20.5407 19.1261 20.5407 19.2889 20.378L19.878 19.7888C20.0407 19.6261 20.0407 19.3623 19.8779 19.1996ZM7.9167 14.6667C4.47024 14.6667 1.66668 11.8631 1.66668 8.4167C1.66668 4.97024 4.47024 2.16668 7.9167 2.16668C11.3631 2.16668 14.1667 4.97024 14.1667 8.4167C14.1667 11.8631 11.3631 14.6667 7.9167 14.6667Z"
                  fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_764_16096">
                  <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
            <input type="text" id="vacancy_title" name="vacancy_title" value="" placeholder="Введите желаемую вакансию">
          </div>
          <div class="filter-item region">
            <div class="filter-item__title">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_764_16121)">
                  <mask id="path-1-inside-1_764_16121" fill="white">
                    <path
                      d="M9.99942 0.5C5.92554 0.5 2.61133 3.81421 2.61133 7.88809C2.61133 9.22925 3.21281 10.6717 3.23801 10.7325C3.43228 11.1936 3.81559 11.9098 4.09199 12.3296L9.15761 20.005C9.36492 20.3196 9.67174 20.5 9.99942 20.5C10.3271 20.5 10.6339 20.3196 10.8412 20.0054L15.9073 12.3296C16.1841 11.9098 16.567 11.1936 16.7613 10.7325C16.7865 10.6721 17.3875 9.22968 17.3875 7.88809C17.3875 3.81421 14.0733 0.5 9.99942 0.5ZM15.9599 10.3953C15.7865 10.8086 15.4297 11.4748 15.1815 11.8512L10.1155 19.5269C10.0155 19.6786 9.98378 19.6786 9.88382 19.5269L4.81776 11.8512C4.56961 11.4748 4.21281 10.8081 4.0394 10.3948C4.03201 10.377 3.48052 9.04933 3.48052 7.88809C3.48052 4.29357 6.4049 1.36919 9.99942 1.36919C13.5939 1.36919 16.5183 4.29357 16.5183 7.88809C16.5183 9.05106 15.9655 10.3822 15.9599 10.3953Z" />
                  </mask>
                  <path
                    d="M9.99942 0.5C5.92554 0.5 2.61133 3.81421 2.61133 7.88809C2.61133 9.22925 3.21281 10.6717 3.23801 10.7325C3.43228 11.1936 3.81559 11.9098 4.09199 12.3296L9.15761 20.005C9.36492 20.3196 9.67174 20.5 9.99942 20.5C10.3271 20.5 10.6339 20.3196 10.8412 20.0054L15.9073 12.3296C16.1841 11.9098 16.567 11.1936 16.7613 10.7325C16.7865 10.6721 17.3875 9.22968 17.3875 7.88809C17.3875 3.81421 14.0733 0.5 9.99942 0.5ZM15.9599 10.3953C15.7865 10.8086 15.4297 11.4748 15.1815 11.8512L10.1155 19.5269C10.0155 19.6786 9.98378 19.6786 9.88382 19.5269L4.81776 11.8512C4.56961 11.4748 4.21281 10.8081 4.0394 10.3948C4.03201 10.377 3.48052 9.04933 3.48052 7.88809C3.48052 4.29357 6.4049 1.36919 9.99942 1.36919C13.5939 1.36919 16.5183 4.29357 16.5183 7.88809C16.5183 9.05106 15.9655 10.3822 15.9599 10.3953Z"
                    fill="black" />
                  <path
                    d="M3.23801 10.7325L1.39027 11.498L1.39491 11.509L3.23801 10.7325ZM4.09199 12.3296L2.42153 13.4294L2.42276 13.4313L4.09199 12.3296ZM9.15761 20.005L10.8277 18.9047L10.8268 18.9033L9.15761 20.005ZM10.8412 20.0054L9.17202 18.9037L9.17182 18.904L10.8412 20.0054ZM15.9073 12.3296L17.5765 13.4313L17.577 13.4306L15.9073 12.3296ZM16.7613 10.7325L18.6044 11.509L18.607 11.5027L16.7613 10.7325ZM17.3875 7.88809H19.3875H17.3875ZM15.9599 10.3953L14.1248 9.60005L14.1201 9.61074L14.1156 9.62149L15.9599 10.3953ZM15.1815 11.8512L16.8507 12.9528L16.8512 12.9521L15.1815 11.8512ZM10.1155 19.5269L8.44624 18.4253L8.44549 18.4264L10.1155 19.5269ZM9.88382 19.5269L11.5538 18.4264L11.553 18.4253L9.88382 19.5269ZM4.81776 11.8512L3.14805 12.9521L3.14855 12.9528L4.81776 11.8512ZM4.0394 10.3948L2.1919 11.1609L2.19515 11.1686L4.0394 10.3948ZM9.99942 -1.5C4.82097 -1.5 0.611328 2.70964 0.611328 7.88809H4.61133C4.61133 4.91878 7.03011 2.5 9.99942 2.5V-1.5ZM0.611328 7.88809C0.611328 8.82457 0.815605 9.72357 0.992568 10.3412C1.0845 10.6621 1.1773 10.935 1.24998 11.1348C1.28648 11.2351 1.31832 11.3181 1.34298 11.3807C1.35532 11.4121 1.36585 11.4383 1.37422 11.4588C1.37841 11.4691 1.382 11.4779 1.38491 11.485C1.38637 11.4885 1.38761 11.4915 1.3886 11.4939C1.38873 11.4942 1.39114 11.5 1.3903 11.498L5.08572 9.96703C5.08572 9.96702 5.05531 9.89467 5.00894 9.76723C4.96175 9.63752 4.89946 9.45456 4.83787 9.23958C4.70779 8.78556 4.61133 8.29277 4.61133 7.88809H0.611328ZM1.39491 11.509C1.63737 12.0845 2.07876 12.9088 2.42153 13.4294L5.76245 11.2298C5.55241 10.9108 5.22718 10.3027 5.08112 9.95601L1.39491 11.509ZM2.42276 13.4313L7.48838 21.1067L10.8268 18.9033L5.76122 11.228L2.42276 13.4313ZM7.4875 21.1053C8.00034 21.8837 8.88983 22.5 9.99942 22.5V18.5C10.4537 18.5 10.7295 18.7556 10.8277 18.9047L7.4875 21.1053ZM9.99942 22.5C11.1087 22.5 11.9978 21.8841 12.5106 21.1068L9.17182 18.904C9.27004 18.7552 9.54556 18.5 9.99942 18.5V22.5ZM12.5104 21.1071L17.5765 13.4313L14.2381 11.2279L9.17202 18.9037L12.5104 21.1071ZM17.577 13.4306C17.9212 12.9085 18.3622 12.0837 18.6044 11.509L14.9182 9.95601C14.7718 10.3035 14.447 10.9111 14.2376 11.2286L17.577 13.4306ZM18.607 11.5027C18.6319 11.4431 19.3875 9.6699 19.3875 7.88809H15.3875C15.3875 8.29323 15.2911 8.7863 15.1611 9.24027C15.0995 9.45524 15.0373 9.63813 14.9902 9.76768C14.9668 9.832 14.9476 9.88199 14.9346 9.91492C14.9281 9.93134 14.9232 9.9435 14.9201 9.95105C14.9172 9.95819 14.9158 9.96172 14.9155 9.96233L18.607 11.5027ZM19.3875 7.88809C19.3875 2.70964 15.1779 -1.5 9.99942 -1.5V2.5C12.9687 2.5 15.3875 4.91878 15.3875 7.88809H19.3875ZM14.1156 9.62149C13.9913 9.91786 13.6934 10.4748 13.5118 10.7502L16.8512 12.9521C17.1659 12.4748 17.5817 11.6993 17.8041 11.169L14.1156 9.62149ZM13.5123 10.7495L8.44624 18.4253L11.7847 20.6286L16.8507 12.9528L13.5123 10.7495ZM8.44549 18.4264C8.44572 18.426 8.44858 18.4217 8.45357 18.4145C8.45849 18.4074 8.46713 18.3951 8.47898 18.3793C8.499 18.3525 8.54814 18.2885 8.6232 18.2119C8.72607 18.107 9.20035 17.6407 9.99964 17.6407C10.7989 17.6407 11.2732 18.107 11.3761 18.2119C11.4511 18.2885 11.5003 18.3525 11.5203 18.3793C11.5321 18.3951 11.5408 18.4074 11.5457 18.4145C11.5507 18.4217 11.5536 18.426 11.5538 18.4264L8.21385 20.6275C8.24417 20.6735 8.35502 20.8442 8.52017 21.0126C8.66023 21.1554 9.16743 21.6407 9.99964 21.6407C10.8319 21.6407 11.339 21.1554 11.4791 21.0126C11.6443 20.8442 11.7551 20.6735 11.7854 20.6275L8.44549 18.4264ZM11.553 18.4253L6.48698 10.7495L3.14855 12.9528L8.2146 20.6286L11.553 18.4253ZM6.48748 10.7502C6.30613 10.4752 6.00818 9.91784 5.88366 9.62106L2.19515 11.1686C2.41744 11.6984 2.83309 12.4744 3.14805 12.9521L6.48748 10.7502ZM5.88689 9.6288C5.88668 9.6283 5.88693 9.62889 5.88712 9.62936C5.88729 9.62978 5.88737 9.62996 5.88735 9.62993C5.88732 9.62984 5.88683 9.62864 5.88591 9.62637C5.88406 9.62181 5.88046 9.61283 5.87534 9.59977C5.86507 9.57358 5.84886 9.53133 5.82867 9.47578C5.78793 9.3637 5.73294 9.20274 5.67826 9.01393C5.56044 8.60707 5.48052 8.19373 5.48052 7.88809H1.48052C1.48052 8.74369 1.67634 9.57481 1.83612 10.1266C1.92024 10.417 2.0045 10.6639 2.06925 10.8421C2.1018 10.9317 2.12989 11.0051 2.1512 11.0595C2.16187 11.0867 2.17087 11.1092 2.17791 11.1266C2.18144 11.1353 2.18446 11.1427 2.18695 11.1488C2.18819 11.1518 2.18928 11.1545 2.19021 11.1567C2.19067 11.1578 2.19107 11.1588 2.19141 11.1596C2.19169 11.1603 2.19205 11.1612 2.19192 11.1609L5.88689 9.6288ZM5.48052 7.88809C5.48052 5.39814 7.50947 3.36919 9.99942 3.36919V-0.630813C5.30033 -0.630813 1.48052 3.189 1.48052 7.88809H5.48052ZM9.99942 3.36919C12.4894 3.36919 14.5183 5.39814 14.5183 7.88809H18.5183C18.5183 3.189 14.6985 -0.630813 9.99942 -0.630813V3.36919ZM14.5183 7.88809C14.5183 8.19455 14.4381 8.60915 14.3201 9.01671C14.2071 9.40709 14.0974 9.66326 14.1248 9.60005L17.795 11.1905C17.828 11.1142 17.9975 10.6983 18.1623 10.1291C18.3221 9.57707 18.5183 8.74461 18.5183 7.88809H14.5183Z"
                    fill="black" mask="url(#path-1-inside-1_764_16121)" />
                  <mask id="path-3-inside-2_764_16121" fill="white">
                    <path
                      d="M9.99923 3.97754C7.84234 3.97754 6.08789 5.73243 6.08789 7.88888C6.08789 10.0453 7.84234 11.8002 9.99923 11.8002C12.1561 11.8002 13.9106 10.0453 13.9106 7.88888C13.9106 5.73243 12.1561 3.97754 9.99923 3.97754ZM9.99923 10.931C8.32213 10.931 6.95708 9.56641 6.95708 7.88888C6.95708 6.21135 8.32213 4.84673 9.99923 4.84673C11.6763 4.84673 13.0414 6.21135 13.0414 7.88888C13.0414 9.56641 11.6763 10.931 9.99923 10.931Z" />
                  </mask>
                  <path
                    d="M9.99923 3.97754C7.84234 3.97754 6.08789 5.73243 6.08789 7.88888C6.08789 10.0453 7.84234 11.8002 9.99923 11.8002C12.1561 11.8002 13.9106 10.0453 13.9106 7.88888C13.9106 5.73243 12.1561 3.97754 9.99923 3.97754ZM9.99923 10.931C8.32213 10.931 6.95708 9.56641 6.95708 7.88888C6.95708 6.21135 8.32213 4.84673 9.99923 4.84673C11.6763 4.84673 13.0414 6.21135 13.0414 7.88888C13.0414 9.56641 11.6763 10.931 9.99923 10.931Z"
                    fill="black" />
                  <path
                    d="M13.9106 7.88888H15.9106H13.9106ZM9.99923 1.97754C6.73763 1.97754 4.08789 4.628 4.08789 7.88888H8.08789C8.08789 6.83685 8.94706 5.97754 9.99923 5.97754V1.97754ZM4.08789 7.88888C4.08789 11.1498 6.73763 13.8002 9.99923 13.8002V9.80022C8.94706 9.80022 8.08789 8.94091 8.08789 7.88888H4.08789ZM9.99923 13.8002C13.2608 13.8002 15.9106 11.1498 15.9106 7.88888H11.9106C11.9106 8.94091 11.0514 9.80022 9.99923 9.80022V13.8002ZM15.9106 7.88888C15.9106 4.628 13.2608 1.97754 9.99923 1.97754V5.97754C11.0514 5.97754 11.9106 6.83685 11.9106 7.88888H15.9106ZM9.99923 8.93104C9.42652 8.93104 8.95708 8.46166 8.95708 7.88888H4.95708C4.95708 10.6712 7.21775 12.931 9.99923 12.931V8.93104ZM8.95708 7.88888C8.95708 7.3161 9.42652 6.84673 9.99923 6.84673V2.84673C7.21775 2.84673 4.95708 5.1066 4.95708 7.88888H8.95708ZM9.99923 6.84673C10.5719 6.84673 11.0414 7.3161 11.0414 7.88888H15.0414C15.0414 5.1066 12.7807 2.84673 9.99923 2.84673V6.84673ZM11.0414 7.88888C11.0414 8.46166 10.5719 8.93104 9.99923 8.93104V12.931C12.7807 12.931 15.0414 10.6712 15.0414 7.88888H11.0414Z"
                    fill="black" mask="url(#path-3-inside-2_764_16121)" />
                </g>
                <defs>
                  <clipPath id="clip0_764_16121">
                    <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                  </clipPath>
                </defs>
              </svg>
              <p>Выберите регион</p>
              <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
              </svg>
            </div>
            <div class="filter-option__list">
              <input class="region-checkbox checkbox filter-option" id="region-1" type="checkbox" name="region[]"
                value="Минск и Минская область"><label for="region-1">Минск и Минская область</label>
              <input class="region-checkbox checkbox filter-option" id="region-2" type="checkbox" name="region[]"
                value="Гродно и Гродненская область"><label for="region-2">Гродно и Гродненская область</label>
              <input class="region-checkbox checkbox filter-option" id="region-3" type="checkbox" name="region[]"
                value="Брест и Брестская область"><label for="region-3">Брест и Брестская область</label>
              <input class="region-checkbox checkbox filter-option" id="region-4" type="checkbox" name="region[]"
                value="Витебск и Витебская область"><label for="region-4">Витебск и Витебская область</label>
              <input class="region-checkbox checkbox filter-option" id="region-5" type="checkbox" name="region[]"
                value="Гомель и Гомельская область"><label for="region-5">Гомель и Гомельская область</label>
              <input class="region-checkbox checkbox filter-option" id="region-6" type="checkbox" name="region[]"
                value="Могилев и Могилевская область"><label for="region-6">Могилев и Могилевская область</label>
              <p class="filter-list-clear">Очистить</p>
            </div>
          </div>
          <button type="submit" class="btn-position-aware">ИСКАТЬ<span class="position-aware"></span></button><input
            type="hidden" name="action" value="vacancies_filter">
          <div class="filter-item sort-by">
            <div class="filter-item__title">
              <p>Сортировать по</p>
              <svg width="10" height="23" viewBox="0 0 10 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.88501 22.0894L0.299685 14.1473H9.47034L4.88501 22.0894Z" fill="#D25F15" />
                <path d="M4.88501 0.910645L0.299685 8.85266H9.47034L4.88501 0.910645Z" fill="#D25F15" />
              </svg>
            </div>
            <div class="filter-option__list">
              <input class="sort-by-date-checkbox checkbox filter-option" id="sort_by_date-1" type="radio"
                name="sort_by_date" value="DESC"><label for="sort_by_date-1">Дата(сначала новые)</label>
              <input class="sort-by-date-checkbox checkbox filter-option" id="sort_by_date-2" type="radio"
                name="sort_by_date" value="ASC"><label for="sort_by_date-2">Дата(сначала старые)</label>
              <input class="sort-by-salary-checkbox checkbox filter-option" id="sort_by_salary-1" type="radio"
                name="sort_by_salary" value="ASC"><label for="sort_by_salary-1">Оплата труда(по возрастанию)</label>
              <input class="sort-by-salary-checkbox checkbox filter-option" id="sort_by_salary-2" type="radio"
                name="sort_by_salary" value="DESC"><label for="sort_by_salary-2">Оплата труда(по убыванию)</label>
              <p class="filter-list-clear">Очистить</p>
            </div>
          </div>
          <div class="filter-toggle">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip0_764_16255)">
                <path
                  d="M18.6957 8.32609H17.0678C16.9313 7.88043 16.7526 7.45 16.5357 7.04L17.6856 5.89C17.9317 5.64391 18.0674 5.31609 18.0674 4.96696C18.0674 4.61826 17.9317 4.29043 17.6856 4.04435L16.4552 2.81391C15.9635 2.32217 15.1026 2.32087 14.61 2.81391L13.46 3.96391C13.0504 3.74696 12.6196 3.5687 12.1739 3.43174V1.80435C12.1739 1.08522 11.5887 0.5 10.8696 0.5H9.13043C8.4113 0.5 7.82609 1.08522 7.82609 1.80435V3.43217C7.38043 3.56913 6.95 3.74739 6.54 3.96435L5.38956 2.81435C4.88087 2.30565 4.05304 2.30565 3.54435 2.81435L2.31348 4.04478C1.80522 4.55348 1.80522 5.3813 2.31348 5.89L3.46348 7.04043C3.24652 7.45 3.06826 7.88087 2.9313 8.32652H1.30435C0.585217 8.32652 0 8.91174 0 9.63087V11.37C0 12.0887 0.585217 12.6739 1.30435 12.6739H2.93217C3.06913 13.1196 3.24739 13.55 3.46435 13.96L2.31435 15.1104C1.80565 15.6191 1.80565 16.447 2.31435 16.9557L3.54478 18.1865C4.05348 18.6948 4.8813 18.6948 5.39 18.1865L6.54043 17.0365C6.95 17.2535 7.38087 17.4317 7.82652 17.5687V19.1957C7.82652 19.9148 8.41174 20.5 9.13087 20.5H10.87C11.5891 20.5 12.1743 19.9148 12.1743 19.1957V17.5678C12.62 17.4309 13.0509 17.2526 13.4604 17.0357L14.6104 18.1861C15.1035 18.6787 15.9643 18.6778 16.4557 18.1861L17.6861 16.9557C17.9322 16.7096 18.0678 16.3817 18.0678 16.033C18.0678 15.6839 17.9322 15.3565 17.6861 15.1104L16.5361 13.96C16.753 13.5504 16.9313 13.1196 17.0683 12.6739H18.6957C19.4148 12.6739 20 12.0887 20 11.3696V9.63043C20 8.9113 19.4148 8.32609 18.6957 8.32609ZM19.1304 11.3696C19.1304 11.6091 18.9357 11.8043 18.6957 11.8043H16.7391C16.5409 11.8043 16.3678 11.9387 16.3183 12.1304C16.1643 12.7239 15.93 13.2904 15.6209 13.8139C15.5204 13.9848 15.5478 14.2022 15.6878 14.3422L17.0704 15.7252C17.1522 15.807 17.1974 15.9161 17.1974 16.033C17.1974 16.15 17.1522 16.2591 17.0704 16.3409L15.84 17.5713C15.6765 17.7348 15.3883 17.7348 15.2243 17.5713L13.8417 16.1887C13.7017 16.0483 13.4843 16.0213 13.313 16.1217C12.7904 16.4304 12.2239 16.6652 11.63 16.8187C11.4387 16.8678 11.3043 17.0409 11.3043 17.2391V19.1957C11.3043 19.4352 11.1096 19.6304 10.8696 19.6304H9.13043C8.89087 19.6304 8.69565 19.4352 8.69565 19.1957V17.2391C8.69565 17.0409 8.5613 16.8678 8.36957 16.8183C7.77609 16.6648 7.20957 16.4304 6.68609 16.1213C6.61739 16.0804 6.5413 16.0609 6.46522 16.0609C6.35261 16.0609 6.2413 16.1043 6.15739 16.1883L4.77478 17.5709C4.60478 17.7404 4.32913 17.7404 4.15913 17.5709L2.9287 16.3404C2.7587 16.1704 2.7587 15.8943 2.9287 15.7248L4.3113 14.3422C4.45174 14.2017 4.47913 13.9843 4.37826 13.8139C4.06956 13.2904 3.83478 12.7243 3.6813 12.1304C3.63217 11.9387 3.45913 11.8043 3.26087 11.8043H1.30435C1.06478 11.8043 0.869565 11.6091 0.869565 11.3696V9.63043C0.869565 9.39087 1.06478 9.19565 1.30435 9.19565H3.26087C3.45913 9.19565 3.63217 9.0613 3.68174 8.86957C3.83522 8.27609 4.06957 7.70957 4.3787 7.18609C4.47957 7.01522 4.45217 6.79783 4.31174 6.65783L2.92913 5.27522C2.75957 5.10565 2.75957 4.82957 2.92913 4.65957L4.15957 3.42913C4.32957 3.25913 4.60522 3.25957 4.77522 3.42913L6.15783 4.81174C6.29826 4.95217 6.51522 4.98 6.68609 4.8787C7.20957 4.57 7.77565 4.33522 8.36957 4.18174C8.5613 4.13217 8.69565 3.95913 8.69565 3.76087V1.80435C8.69565 1.56478 8.89087 1.36957 9.13043 1.36957H10.8696C11.1096 1.36957 11.3043 1.56478 11.3043 1.80435V3.76087C11.3043 3.95913 11.4387 4.13217 11.6304 4.18174C12.2243 4.33522 12.7909 4.57 13.3135 4.8787C13.4848 4.97957 13.7022 4.95261 13.8422 4.81174L15.2248 3.42913C15.3887 3.26478 15.677 3.26522 15.8404 3.42913L17.0709 4.65957C17.1526 4.7413 17.1978 4.85087 17.1978 4.96739C17.1978 5.08391 17.1526 5.19348 17.0709 5.27522L15.6883 6.65783C15.5483 6.79826 15.5204 7.01565 15.6213 7.18609C15.9304 7.70957 16.1648 8.27565 16.3187 8.86957C16.3678 9.0613 16.5409 9.19565 16.7391 9.19565H18.6957C18.9357 9.19565 19.1304 9.39087 19.1304 9.63043V11.3696Z"
                  fill="black" />
                <path
                  d="M9.99898 6.58691C7.84159 6.58691 6.08594 8.34257 6.08594 10.5C6.08594 12.6573 7.84159 14.413 9.99898 14.413C12.1568 14.413 13.912 12.6573 13.912 10.5C13.912 8.34257 12.1568 6.58691 9.99898 6.58691ZM9.99898 13.5434C8.32072 13.5434 6.9555 12.1782 6.9555 10.5C6.9555 8.8217 8.32072 7.45648 9.99898 7.45648C11.6768 7.45648 13.0425 8.8217 13.0425 10.5C13.0425 12.1782 11.6768 13.5434 9.99898 13.5434Z"
                  fill="black" />
              </g>
              <defs>
                <clipPath id="clip0_764_16255">
                  <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                </clipPath>
              </defs>
            </svg>
            <p>Фильтры</p>
          </div>
          <div class="filters-block">
            <div class="filter-item filter-item-grey employment_type">
              <div class="filter-item__title">
                <p>Тип занятости</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
                </svg>
              </div>
              <div class="filter-option__list">
                <input class="employment_type-checkbox checkbox filter-option" id="employment_type-1" type="checkbox"
                  name="employment_type[]" value="Полная занятость"><label for="employment_type-1">Полная
                  занятость</label>
                <input class="employment_type-checkbox checkbox filter-option" id="employment_type-2" type="checkbox"
                  name="employment_type[]" value="Частичная занятость"><label for="employment_type-2">Частичная
                  занятость</label>
                <input class="employment_type-checkbox checkbox filter-option" id="employment_type-3" type="checkbox"
                  name="employment_type[]" value="Проектная работа/разовое задание"><label
                  for="employment_type-3">Проектная работа/разовое задание</label>
                <input class="employment_type-checkbox checkbox filter-option" id="employment_type-4" type="checkbox"
                  name="employment_type[]" value="Волонтерство"><label for="employment_type-4">Волонтерство</label>
                <input class="employment_type-checkbox checkbox filter-option" id="employment_type-5" type="checkbox"
                  name="employment_type[]" value="Стажировка"><label for="employment_type-5">Стажировка</label>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>
            <div class="filter-item filter-item-grey schedule">
              <div class="filter-item__title">
                <p>График работы</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
                </svg>
              </div>
              <div class="filter-option__list">
                <input class="schedule-checkbox checkbox filter-option" id="schedule-1" type="checkbox"
                  name="schedule[]" value="Полный день"><label for="schedule-1">Полный день</label>
                <input class="schedule-checkbox checkbox filter-option" id="schedule-2" type="checkbox"
                  name="schedule[]" value="Сменный график"><label for="schedule-2">Сменный график</label>
                <input class="schedule-checkbox checkbox filter-option" id="schedule-3" type="checkbox"
                  name="schedule[]" value="Гибкий график"><label for="schedule-3">Гибкий график</label>
                <input class="schedule-checkbox checkbox filter-option" id="schedule-4" type="checkbox"
                  name="schedule[]" value="Удаленная работа"><label for="schedule-4">Удаленная работа</label>
                <input class="schedule-checkbox checkbox filter-option" id="schedule-5" type="checkbox"
                  name="schedule[]" value="Вахтовый метод"><label for="schedule-5">Вахтовый метод</label>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>
            <div class="filter-item filter-item-grey aducation">
              <div class="filter-item__title">
                <p>Образование</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
                </svg>
              </div>
              <div class="filter-option__list">
                <input class="aducation-checkbox checkbox filter-option" id="aducation-1" type="checkbox"
                  name="aducation[]" value="Не имеет значения"><label for="aducation-1">Не имеет значения</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-2" type="checkbox"
                  name="aducation[]" value="Среднее и ниже"><label for="aducation-2">Среднее и ниже</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-3" type="checkbox"
                  name="aducation[]" value="Среднее специальное и ниже"><label for="aducation-3">Среднее специальное и
                  ниже</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-4" type="checkbox"
                  name="aducation[]" value="Профессионально-техническое и ниже"><label
                  for="aducation-4">Профессионально-техническое и ниже</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-5" type="checkbox"
                  name="aducation[]" value="Незаконченное высшее и ниже"><label for="aducation-5">Незаконченное высшее и
                  ниже</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-6" type="checkbox"
                  name="aducation[]" value="Высшее и ниже"><label for="aducation-6">Высшее и ниже</label>
                <input class="aducation-checkbox checkbox filter-option" id="aducation-7" type="checkbox"
                  name="aducation[]" value="Кандидат наук и ниже"><label for="aducation-7">Кандидат наук и ниже</label>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>
            <div class="filter-item filter-item-grey salary">
              <div class="filter-item__title">
                <p>Уровень дохода</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z">
                </svg>
              </div>
              <div class="filter-option__list">
                <div class="extra-controls">
                  <span>от </span><input type="text" class="js-input-from" value="0" /><span> бел. руб.</span>
                  <hr>
                  <span>до </span><input type="text" class="js-input-to" value="0" /><span> бел. руб.</span>
                </div>
                <div class="range-slider">
                  <input type="text" class="js-range-slider" value="" />
                </div>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>

            <div class="filter-item filter-item-grey experience">
              <div class="filter-item__title">
                <p>Опыт работы</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
                </svg>
              </div>
              <div class="filter-option__list">
                <input class="experience-checkbox checkbox filter-option" id="experience-1" type="checkbox"
                  name="experience[]" value="Не имеет значения"><label for="experience-1">Не имеет значения</label>
                <input class="experience-checkbox checkbox filter-option" id="experience-2" type="checkbox"
                  name="experience[]" value="Нет опыта"><label for="experience-2">Нет опыта</label>
                <input class="experience-checkbox checkbox filter-option" id="experience-3" type="checkbox"
                  name="experience[]" value="От 1 года до 3 лет"><label for="experience-3">От 1 года до 3 лет</label>
                <input class="experience-checkbox checkbox filter-option" id="experience-4" type="checkbox"
                  name="experience[]" value="От 3 до 6 лет"><label for="experience-4">От 3 до 6 лет</label>
                <input class="experience-checkbox checkbox filter-option" id="experience-5" type="checkbox"
                  name="experience[]" value="Более 6 лет"><label for="experience-5">Более 6 лет</label>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>
            <div class="filter-item filter-item-grey metro_position">
              <div class="filter-item__title">
                <p>Близость метро</p>
                <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M5.00024 8.79492L0.414919 0.852905H9.58557L5.00024 8.79492Z" />
                </svg>
              </div>
              <div class="filter-option__list">
                <input class="metro_position-checkbox checkbox filter-option" id="metro_position-1" type="checkbox"
                  name="metro_position[]" value="Возле станции"><label for="metro_position-1">Возле станции</label>
                <input class="metro_position-checkbox checkbox filter-option" id="metro_position-2" type="checkbox"
                  name="metro_position[]" value="Не имеет значения"><label for="metro_position-2">Не имеет
                  значения</label>
                <p class="filter-list-clear">Очистить</p>
              </div>
            </div>
          </div>
        </form>
        
        <div id="vacancies__response" class="vacancies__response">

          <?php
          $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
          $args = array(
            'post_type' => array('vacancies'),
            'post_status' => array('publish'),
            'posts_per_page' => '6',
            'posts_per_archive_page' => '6',
            'paged' => $paged
          );

          $vacancies = new WP_Query($args);
          global $custom_num_pages;
          $custom_num_pages = $vacancies->max_num_pages;


          if ($vacancies->have_posts()):
            while ($vacancies->have_posts()):
              $vacancies->the_post(); ?>
              <div class="vacancy__item">
                <a class="item__title" href="<?php the_permalink() ?>">
                  <h3><?php the_title() ?></h3>
                </a>
                <p class="salary">
                  <?php if (get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) == 'По результатам собеседования')
                    echo 'По результатам собеседования';
                  else
                    echo 'от ' . get_post_meta($vacancies->the_post - get_the_ID(), 'salary', true) . ' BYN' ?>
                  </p>
                  <p class="item__text"><?php echo wp_trim_words(get_the_excerpt(), 31, '...'); ?></p>
                <div class="item__wrap">
                  <p class="created_at">Размещено:
                    <?php if (get_the_date() == wp_date(get_option('date_format')))
                      echo 'cегодня';
                    else {
                      if (get_the_date() == wp_date(get_option('date_format'), strtotime('-1 day')))
                        echo 'вчера';
                      else {
                        if (get_the_date() == wp_date(get_option('date_format'), strtotime('-2 day')))
                          echo 'позавчера';
                        else
                          echo get_the_date();
                      }
                    } ?>
                  </p>
                  <p class="region"><svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_764_16155)">
                        <path
                          d="M5.27309 0.5C3.25721 0.5 1.61719 2.1695 1.61719 4.22159C1.61719 5.36944 2.19774 6.76267 3.34276 8.36256C4.18069 9.53342 5.00639 10.3685 5.04114 10.4035C5.10501 10.4678 5.18903 10.5 5.27315 10.5C5.35483 10.5 5.43657 10.4696 5.49993 10.4085C5.53475 10.375 6.36255 9.57377 7.20206 8.41908C8.348 6.84288 8.92904 5.43065 8.92904 4.22157C8.929 2.1695 7.28894 0.5 5.27309 0.5ZM5.27309 5.82825C4.28754 5.82825 3.48577 5.02645 3.48577 4.04093C3.48577 3.0554 4.28756 2.2536 5.27309 2.2536C6.25862 2.2536 7.06042 3.0554 7.06042 4.04093C7.06042 5.02645 6.2586 5.82825 5.27309 5.82825Z"
                          fill="#9D9A97" />
                      </g>
                      <defs>
                        <clipPath id="clip0_764_16155">
                          <rect width="10" height="10" fill="white" transform="translate(0.273438 0.5)" />
                        </clipPath>
                      </defs>
                    </svg><?= get_post_meta($vacancies->the_post - get_the_ID(), 'region', true) ?></p>
                </div>

                <a class="read-more" href="<?php the_permalink() ?>">Узнать подробнее <img
                    src="<?= get_template_directory_uri(); ?>/image/contact_us.svg"
                    alt="Графический элемент оранжевая стрелка"></a>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php endif; ?>
          <div class="page_nav">
            <?php
            echo paginate_links(
              array(
                'total' => $vacancies->max_num_pages,
                'current' => max(1, get_query_var('paged')),
                'end_size' => 1,
                'prev_text' => '',
                'next_text' => '',
                'class' => 'paginate',
              )
            );
            ?>
            <!-- Pagination -->
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="find-vacancy">
    <div class="container">
      <div class="find-vacancy__image">
        <picture>
          <!-- <source srcset="<?= get_template_directory_uri(); ?>/image/find-vacancy.webp" type="image/webp"> -->
          <source srcset="<?= get_template_directory_uri(); ?>/image/find-vacancy.jpg" type="image/jpeg">
          <img src="<?= get_template_directory_uri(); ?>/image/find-vacancy.jpg" alt="">
        </picture>
      </div>
      <div class="find-vacancy__item">
        <h2>Нет подходящей вакансии?</h2>
        <p>Предлагаем отправить ваше резюме нам на почту <a href="mailto:xxx@dd.dd">xxx@dd.dd</a></p>
        <a class="btn btn-position-aware" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></a>
        <div class="find-vacancy__item-decor">
          <img src="<?= get_template_directory_uri(); ?>/image/find-vacancy__decor.svg" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="contact-main get-free-consult__container">
    <?php get_template_part('template-parts/contact-us'); ?>
  </div> -->

  <div class="waiting-for-suggestions">
      <div class="container">
        <div class="waiting-for-suggestions__title">
          <h2>Работа в агентстве «Кадр»</h2>
          <div class="underline-block"></div>
        </div>
        <div class="waiting-for-suggestions__image">
          <picture>
            <source srcset="<?= get_template_directory_uri(); ?>/image/vacancy/vacancy-1.webp" type="image/webp">
            <source srcset="<?= get_template_directory_uri(); ?>/image/vacancy/vacancy-1.jpg" type="image/jpeg">
            <img src="<?= get_template_directory_uri(); ?>/image/vacancy/vacancy-1.jpg"
              alt="Офис в большом помещении в высоком разрешении">
          </picture>
        </div>
        <div class="waiting-for-suggestions__item">
          <p>Присоединяйтесь к нашей команде, где мы помогаем нашим клиентам в улучшении внутренних бизнес-процессов и решении кадровых задач любой сложности!</p>
          <a class="btn btn-position-aware" href="#">ПОДРОБНЕЕ<span class="position-aware"></span></a>
        </div>
      </div>
          </div>
      <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>