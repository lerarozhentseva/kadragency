<?php
/*
Template Name: Цены
Template Post Type: page
*/
?>
<?php get_header(); ?>
<main>
    <div class="q-a-title page-header team-intro">
        <div class="container">
            <div class="q-a-title__item page-header__item item-1">
                <div class="breadcrumbs">
                <?php if (function_exists('dimox_breadcrumbs'))
                    dimox_breadcrumbs(); ?>
                </div>
                <h1>Цены</h1>
                <p>Наше кадровое агентство стремится обеспечить клиентов выдающимся качеством услуг и быстротой в подборе высококвалифицированного персонала. Мы понимаем, что каждая компания уникальна, поэтому наш подход индивидуален.</p>
                <button class="btn btn-position-aware popmake-29 btn-price" href="#">КОНСУЛЬТАЦИЯ<span class="position-aware"></span></button>
            </div>
            <div class="q-a-title__item page-header__item item-2">
                <img src="<?= get_template_directory_uri(); ?>/image/volkov-img/action/price.png" alt="Подставка для ноутбука">
                <a class="btn btn-position-aware dark smooth-transition" href="#priceNew"><img
                    src="<?= get_template_directory_uri(); ?>/image/arrow-to-bottom.svg" alt="Белый графический элемент"><span
                    class="position-aware quad"></span></a>
            </div>
        </div>
    </div>
    <section class="priceNew" id="priceNew">
        <div class="container-new">
            <div class="priceNew-wrapper pt-150">
                <h2 class="priceNew__title title-line-new">
                    <span>Стоимость услуг КАДР</span>
                </h2>
                <div class="priceNew-block">
                    <div class="priceNew-tabs">
                        <button class="priceNew-tabs__button active" data-tab="1">
                            Юридические лица
                        </button>
                        <button class="priceNew-tabs__button" data-tab="2">
                            Физические лица
                        </button>
                    </div>
                    <div class="priceNew-block-inner">
                        <ul class="priceNew-list show"  data-tab="1">
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        1
                                    </span>
                                    <p class="priceNew-item__name">
                                        Диагностика персонала (выявление слабых сторон персонала), разработка рекомендаций по улучшению работы сотрудника, отдела или всего коллектива
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Консультация психолога/коуча
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Встреча с директором/собственником компании, получение первичной информации о ситуации в коллективе (2 часа)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    400
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Каждый последующий час 150 р, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подготовка анкет и тестов
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 тестов/анкет (до 5 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    400
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 15 тестов/анкет (до 15 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    600
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 35 тестов/анкет (до 35 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    800
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Проведение тестирования и обработка анкет, тестов, предоставление результатов тестирования/анкетирования, разработка рекомендаций по индивидуальной и групповой работе с каждым сотрудником и проведения обучения в компании
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 тестов/анкет (до 5 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    900
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 15 тестов/анкет (до 15 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1100
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 35 тестов/анкет (до 35 сотрудников)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1500
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        2
                                    </span>
                                    <p class="priceNew-item__name">
                                        Подбор персонала (рекрутинг)
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ (за 1 сотрудника) от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор руководителей высшего звена/топ менеджер
                                        </p>
                                        <div class="priceNew-item-table-group">
                                                <div class="priceNew-item-table-item f-center">
                                                    <p class="priceNew-item-table-item__name">
                                                        до 3 сотрудников
                                                    </p>
                                                    <p class="priceNew-item-table-item__name">
                                                        <span class="mobile">Стоимость работ от, BYN</span>
                                                        2 700,00
                                                    </p>
                                                </div>
                                                <div class="priceNew-item-table-item f-center">
                                                    <p class="priceNew-item-table-item__name">
                                                        до 5 сотрудников
                                                    </p>
                                                    <p class="priceNew-item-table-item__name">
                                                        <span class="mobile">Стоимость работ от, BYN</span>
                                                        2 500,00
                                                    </p>
                                                    <p class="priceNew-item-table-item__name">
                                                        <span class="mobile">Примечание</span>
                                                        Работу проводят: HR, ведущий специалист по подбору персонала
                                                    </p>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор руководителей среднего звена
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 200,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 900,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор специалистов среднего звена
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 600,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 300,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят рекрутеры. Ответственный – ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор рабочего/линейного персонала
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    950,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 7 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    900,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 10 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    850,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 30 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    800,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    750,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    свыше 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    700,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят рекрутеры. Ответственный – ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Хедхантинг (индивидуальный подбор определённого специалиста/сотрудника по запросу компании)
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель высшего звена/топ менеджер
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    4 000,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель среднего звена
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    3 400,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        3
                                    </span>
                                    <p class="priceNew-item__name">
                                        Подбор персонала для трудоустройства в РФ
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ (за 1 сотрудника) от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор руководителей высшего звена/топ менеджер
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    3 500,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 500,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор руководителей среднего звена
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 700,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 500,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводит ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор специалистов среднего звена
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 3 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 200,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 5 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    2 000,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводит ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Подбор рабочего/линейного персонала
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 10 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 700,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 30 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 500,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 200,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    свыше 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 000,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят рекрутеры. Ответственный – ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Хедхантинг (индивидуальный подбор определённого специалиста/сотрудника по запросу компании)
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель высшего звена/топ менеджер
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    Цена по запросу
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    Руководитель среднего звена
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    Цена по запросу
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: HR, ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        4
                                    </span>
                                    <p class="priceNew-item__name">
                                        Дополнительные опции
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ от, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Разработка регламентов, бизнес – процессов в компании с нуля
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    до 10 сотрудников/до 3 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                    1 500,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 30 сотрудников/до 5 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                1 800,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 50 сотрудников/до 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                2 300,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                свыше 50 сотрудников/свыше 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                2 800,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                    Работу проводят: ведущий юрист, помощник юриста, HR
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Доработка и корректировка имеющихся внутренних документов
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 10 сотрудников/до 3 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                1 100,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 30 сотрудников/до 5 отделов в компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                1 400,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 50 сотрудников/до 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    
                                                <span class="mobile">Стоимость работ от, BYN</span>
                                                1 900,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                свыше 50 сотрудников/свыше 5 отделов
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                2 500,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                Работу проводят: ведущий юрист, помощник юриста, HR
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Прочие услуги
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Индивидуальные коучинговые и психологические консультации для руководителей/топ менеджер
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                300,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                1,5 часа сессии 1 сотрудника, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                <br>
                                                Индивидуальные коучинговые и психологические консультации для сотрудников компании
                                                <br><br>                                                
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                1,5 часа сессии 1 сотрудника, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                <br>
                                                Услуги медиатора 
                                                <br><br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                550,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                1 час работы, работу проводит HR и медиатор
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    <br>
                                                    Разработка вакансий компании по подбору персонала
                                                    <br><br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                Работу проводят: HR, ведущий специалист по подбору персонала
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Проведение тренингов/вебинаров/обучения сотрудников внутри компании
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                цена по запросу
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                Работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Тимбилдинг
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ от, BYN</span>
                                                цена по запросу
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                Работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        5
                                    </span>
                                    <p class="priceNew-item__name">
                                    Аутстаффинг (Республика Беларусь, Российская Федерация и страны СНГ)
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                        Аутстаффинг рабочего персонала (общепит, строительство, логистика, ретейл, промышленность, производство)
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 10 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                цена по запросу
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 30 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                цена по запросу
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                до 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                цена по запросу
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                свыше 50 сотрудников
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                цена по запросу
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                Работу проводят: ведущий специалист по подбору персонала, рекрутеры
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <ul class="priceNew-list"  data-tab="2">
                            <li class="priceNew-item">
                                <div class="priceNew-item-head flex">
                                    <span class="priceNew-item__num">
                                        1
                                    </span>
                                    <p class="priceNew-item__name">
                                        Услуги для соискателей
                                    </p>
                                    <button class="priceNew-item__button">
                                        <svg width="10" height="9" viewBox="0 0 10 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.70532 8.29492L0.119998 0.352904L9.29065 0.352905L4.70532 8.29492Z" fill="#261104"/>
                                        </svg>
                                    </button>
                                </div>
                                <div class="priceNew-item-table">
                                    <div class="priceNew-item-table-head f-jcsb-center">
                                        <p class="priceNew-item-table-head__name">
                                            Наименование услуги
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Стоимость работ, BYN
                                        </p>
                                        <p class="priceNew-item-table-head__name">
                                            Примечание
                                        </p>
                                    </div>
                                    <div class="priceNew-item-table-body">
                                        <p class="priceNew-item-table-body__title">
                                            Консультации по составлению резюме и прохождению интервью
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Консультация по профессиональному заполнению резюме и портфолио
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                100,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Тренировочные варианты прохождения собеседования/интервью (индивидуальные)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Отборочное (структурированное) интервью
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Ситуационные интервью (кейс-интервью)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Стрессовое интервью
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00 
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Проективное интервью
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                2 часа работы, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Групповое интервью (от 2 до 5 человек)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                            </div>
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                Групповое интервью (от 5 человек)
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                150,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                за 1 человека, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <p class="priceNew-item-table-body__title">
                                        Индивидуальные профессиональные и личностные консультации (коучинговые и психологические) работа с неуверенностью, сложными профессиональными моментами, профессиональным и личностным эмоциональным выгоранием, выход из профессионального и личностного кризиса, работа с заниженной самооценкой
                                        </p>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    <br>
                                                Разовая консультация
                                                    <br>
                                                    <br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                200,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                2 часа работы, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    <br>
                                                Пакет Бонус (3 консультации по 2 часа)+ 2 домашних задания с разбором и обратной связью (Бонус о компании)
                                                    <br>
                                                    <br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                450,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                6 часов работы, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    <br>
                                                Пакет Бонус+ (5 консультации по 2 часа)+4 домашних задания с разбором и обратной связью (Бонус от компании). По запросу выдаем сертификат
                                                    <br>
                                                    <br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                700,00
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                10 часов работы, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                        <div class="priceNew-item-table-group">
                                            <div class="priceNew-item-table-item f-center">
                                                <p class="priceNew-item-table-item__name">
                                                    <br>
                                                Аутплейсмент (помощь в развитии карьеры и поиск работы увольняемым сотрудникам)
                                                    <br>
                                                    <br>
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Стоимость работ, BYN</span>
                                                от 200
                                                </p>
                                                <p class="priceNew-item-table-item__name">
                                                    <span class="mobile">Примечание</span>
                                                1 час сессии, работу проводит психолог/коуч
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="white-spots-personnel-records" class="white-spots-personnel-records">
        <div class="container">
            <div class="white-spots-personnel-records__item item-1">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда ">
                <p>Индивидуальное коммерческое предложение, разработанное нашей командой, учитывает специфику вашего бизнеса. Мы предоставляем прозрачные и конкурентоспособные тарифы, стремясь к максимальному соотношению цены и качества.</p>
            </div>
            <div class="white-spots-personnel-records__item item-2">
                <img src="<?=  get_template_directory_uri(); ?>/image/marker-medium.svg" alt="Графический элемент звезда">
                <p>Работая по всей территории Беларуси и в России, мы предоставляем гибкие условия сотрудничества. Независимо от вашего местоположения, мы гарантируем высокий уровень профессионализма и эффективности.</p>
            </div>
        </div>
    </div>
    <!--<div class="prices-content">
        <div class="container">
            <div class="prices-text">
                <?php the_content(); ?>
            </div>
        </div>
    </div>-->
        <?php get_template_part('template-parts/team'); ?>
    <?php get_template_part('template-parts/news'); ?>
    <?php get_template_part('template-parts/reviews'); ?>
    <?php get_template_part('template-parts/contact-us-2'); ?>
</main>


<?php get_footer(); ?>