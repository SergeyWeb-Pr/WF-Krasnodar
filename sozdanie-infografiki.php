<?php
/*
Template Name: Создание инфографики
*/
get_header();
?>

<header class="header header_subservice">
    <nav class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <a href="/" class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/logo.svg" alt="logo" class="logo__img">
                </a>
                <div class="nav-row">
                    <div class="nav-phone padding_bottom_10">
                        <a href="tel:+79884021212" class="nav-phone p ">+7 (988) 402-12-12</a>
                    </div>
                    <div class="nav-menu">
                        <ul class="nav-link">
                            <li class="nav-item">
                                <a href="#" class="nav-link p">Блог</a>

                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p">Контакты</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p">Портфолио</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link p">Чаcтые вопросы</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="nav__menu-btn p">
                    Услуги
                </button>

                <div class="nav__menu-btn--mobile">
                    <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu line-menu"></div>
                        <div class="line-menu half end"></div>
                    </div>
                </div>
                <!--  -->

            </div>
        </div>

    </nav>

    <div class="container">
        <div class="header__title header__title_subservice header__title_subservice_one">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Дизайн</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание инфографики</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание инфографики</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one">Инфографику стоит воспринимать не просто как цифры и схемы. Речь идет
                о современном графическом языке, который воспринимается потребителем гораздо эффективнее, чем словесный контент. Сотрудники агентства
                «Веб Фокус» расскажут об особенностях данного способа передачи информации, преимуществах и критериях, которые влияют на <b class="bold">стоимость инфографики.</b></p>
        </div>
        <div class="header__info header__info_subservice margin_top_55 margin_bottom_155">
            <a href="" class="header-btn p_btn header-btn_subservice ">Узнать больше</a>
        </div>

    </div>
</header>


<section class="portfolio padding_bottom_150 padding_bottom_121_1440">
    <div class="container">
        <div class="portfolio__blok ">
            <?php
            $posts = get_posts(array(
                'numberposts' => 3,
                'category'    => 3,
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  => '',
                'post_type'   => 'post',
                'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
            ));

            foreach ($posts as $post) {
                setup_postdata($post); ?>
                <a href="<?php the_permalink(); ?>" class="portfolio__blok_link portfolio__blok_link_margin portfolio__blok_link_subservice">
                    <div class="portfolio__block-card portfolio__block-card_subservice">
                        <div class="img_wrapper portfolio__img-bg--1 img_wrapper_subservice">
                            <?php echo get_the_post_thumbnail(); ?>
                        </div>
                        <div class="portfolio__block_descr">
                            <div class="portfolio__block_descr-wrapper">
                                <div class="portfolio__block_descr-num">
                                    <p class='text_number p6'><?php the_field('номер'); ?></p>
                                </div>
                                <div class="portfolio__block_deskr-text text-bulit_dot">
                                    <p class="text-bulit p1 padding_bottom_5"><?php the_field('поле_0'); ?></p>
                                    <p class="text-bulit p1 padding_bottom_5"><?php the_field('поле_1'); ?></p>
                                    <p class="portfolio_text p1 padding_bottom_5"><?php the_field('поле_2'); ?></p>
                                    <p class="text-bulit portfolio_text p1"><?php the_field('поле_3'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio_text-wrapper--hidden text-bulit_dot">
                            <p class="text-bulit p1"><?php the_field('поле_3'); ?></p>
                            <p class='margin_10_768 p1'><?php the_field('поле_2'); ?></p>
                        </div>
                    </div>
                </a>
            <?php }

            wp_reset_postdata(); // сброс
            ?>

        </div>
        <div class="portfolio__btn">
            <a href="" class="btn p_btn">ДРУГИЕ РАБОТЫ</a>
        </div>
    </div>
</section>

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">особенности
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Мы готовы вам помочь</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Сотрудники агентства «Веб Фокус» готовы разработать индивидуальный проект графического изложения материала, в котором будет учтена специфика деятельности компании, актуальные тренды в продвижении бизнеса, стилистические особенности бренда, а также конкретные пожелания заказчика. Для того, чтобы узнать стоимость инфографики
                            и получить консультацию веб-специалиста, достаточно оставить заявку на нашем сайте.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="preview__creeping_line">
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
        <span class='h2_black'>WEB FOCUS</span>
    </div>
</section>

<section class="slider padding_top_130 structure internet_magazin internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">типы</p>
                <h2 class="h2_black">Типы инфографики</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">На сегодняшний день веб-специалисты выделяют следующие разновидности создания инфографики:</div>
                <ul>
                    <li class="top30">Статичного типа.
                        <p class="static_list-p">Данный вариант не подразумевает анимации, позволяет донести информацию с помощью графиков
                            и схем.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">С элементами анимации.
                        <p class="static_list-p">Также, как и первый вариант, подразумевает создание графического изображения, но с несколькими движущимися элементами. Чаще всего выполняется
                            в формате GIF.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Видеоинфографика.
                        <p class="static_list-p">Изложение данных в формате видеоролика является удобным вариантом подачи материала, позволяет
                            в полной мере продемонстрировать достоинства товара или услуги.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient31.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient31-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient31-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient31-375.png" alt="img" class="internet_mag_product_img">
                </div>
            </div>
        </div>
    </div>
</section>



<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>

<section class="display__none product__list intro intro_subservice padding_bottom_150 padding_top_130 bitrix_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">ресурсы</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768">Ресурсы на Битриксе</h2>
        <div class="preview__block padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Ресурсы на Битриксе, которые создаёт «Веб Фокус», будут состоять из этих компонентов:</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Дальше мы рассмотрим плюсы и минусы работы с платформой Битрикс.</p>

                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Во-первых, модель</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Модель является перечнем функций и классов, обращающихся к базам данных.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Во-вторых, представление</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Представление или презентация представляет собой комбинацию блоков, посредством которых веб-ресурс выводит информацию, которую мы хотим увидеть, после того, как модель обращается к базе данных.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">В-третьих, контролёр</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Контроллер как раз и становится, собственно, страницей ресурса с наполнением.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">особенности и преимущества</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Создание инфографики: особенности и преимущества</h2>

        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="bitrix_media__subtitle padding_bottom_40">Помимо наглядности и убедительности, обратим внимание на следующие преимущества:</div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Интернациональный характер (данный фактор особенно актуален для компаний, работающих на международном рынке);
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Легкость в запоминании (графический формат усваивается мозгом гораздо быстрее и эффективнее, чем текстовый);
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Удерживает клиента (яркое, продуманное изображение или видеоролик привлекут внимание, в отличие от однообразных текстов).
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Переизбыток информации, которая ежедневно нас сопровождает, требует простоты изложения и высокой скорости восприятия. Текстовый материал без понятной структуры, с длинными предложениями и абзацами
                                не только не привлекает внимание читателя, но и отталкивает от дальнейшего взаимодействия с компанией. Создание инфографики позволяет изложить даже сложный материал
                                в доступной форме. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">создание инфографики</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Создание инфографики для бизнеса</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Данный формат профессиональной визуализации материала активно применяется в бизнесе, а именно при создании контента для сайта и корпоративных аккаунтов.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Отметим, что данный способ взаимодействия
                            с потенциальными клиентами, носит универсальный характер, может применяться во всех областях предпринимательской деятельности.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Разработка инфографики эффективна для решения следующих задач:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Объяснение последовательности действий (целесообразно заказать инфографику для изложения сложных схем по эксплуатации товара, порядка оплаты заказа, доставки);
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Сравнительный анализ (потребителю будут наглядно продемонстрированы отличительные черты выбранных единиц товара);
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Продемонстрировать изменения (график, например, сможет показать, как увеличивался спрос на товар, как развивалась компания, в каком темпе увеличивался клиентский поток);
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Показать выгоды (рисунок поможет донести до клиента преимущества и личные выгоды от покупки товара или услуги).
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">факторы</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">От чего зависит стоимость инфографики</h2>
        <div class="bitrix_media__subtitle padding_bottom_40">Цена за инфографику зависит от нескольких факторов:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Наличие или отсутствие первичного материала, исходя
                    из которого будет выполняться заказ;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Тематика материала, объем, наличие узкой направленности контента;
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Вид и стиль изложения материала;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Срочность выполнения.
                </div>
            </div>
        </div>


    </div>
</section>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">шаги</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Как заказать видео инфографику?</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color5">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Определяемся с задачей, для решения которой будет разработан графический объект.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color6">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Обозначаем объем работ, просчитываем сроки
                            и стоимость выполнения.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Заключаем договор с указанием на права
                            и обязанности сторон, на условия сотрудничества; вносим предоплату.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color2">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Оцениваем промежуточные варианты, вносим корректировки.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color7">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Завершаем оплату, получаем итоговый вариант.
                        </div>
                    </div>
                </div>

                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Сотрудники агентства «Веб Фокус» готовы разработать индивидуальный проект графического изложения материала, в котором будет учтена специфика деятельности компании, актуальные тренды в продвижении бизнеса, стилистические особенности бренда, а также конкретные пожелания заказчика. Для того, чтобы узнать стоимость инфографики
                            и получить консультацию веб-специалиста, достаточно оставить заявку на нашем сайте.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    Сотрудники агентства «Веб Фокус» готовы разработать индивидуальный проект графического изложения материала, в котором будет учтена специфика деятельности компании, актуальные тренды в продвижении бизнеса, стилистические особенности бренда, а также конкретные пожелания заказчика. Для того, чтобы узнать стоимость инфографики
                    и получить консультацию веб-специалиста, достаточно оставить заявку на нашем сайте.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>