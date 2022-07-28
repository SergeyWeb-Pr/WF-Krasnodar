<?php
/*
Template Name: Продвижение молодого сайта

*/
get_header();
?>

<header class="header header_subservice header_pos_rel">
    <nav class="nav">
        <div class="container">
            <div class="nav__wrapper">
                <a href="/" class="logo">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/logo.svg" alt="logo" class="logo__img">
                </a>
                <div class="nav-row">
                    <div class="nav-phone padding_bottom_10">
                        <a href="tel:+375291544000" class="nav-phone p ">+375 (29) 15-44-000</a>
                    </div>
                    <div class="nav-menu">
                        <ul class="nav-link">
                            <li class="nav-item">
                                <a href="#" class="nav-link p">ЧаВо</a>
                            </li>
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

    <div class="container ">
        <div class="header__title header__title_subservice">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Продвижение молодого сайта
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Продвижение молодого сайта
            </h1>
            <p class="header_text p3_black header_text_subservice">Несмотря на то, что современные поисковые системы не жалуют теплым приемом сайты, существующие менее полугода, а также сайты, которые по тем или иным причинам были закрыты от индексации, SEO-продвижение молодого сайта поможет сайту быстрее продвигаться в поиске. Скорость результата определенно зависит от тематики сайта и конкуренции.
            </p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">сложно, но возможно

        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Работа студии «Веб Фокус»
        </h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Компания «Веб Фокус» предлагает услуги по SEO-продвижению молодых сайтов в Сочи. Специалисты в кратчайшие сроки выполнят необходимый перечень работ, направленных на повышение доверия к сайту со стороны мировых ПС, а также на рост брендового трафика.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">После этих действий нужно позволить сайту прижиться, а потом приступать к следующему этапу – внешняя оптимизация и ненавязчивое наращивание ссылочной массы.
                        </p>
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

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">этапы</p>
                <h2 class="h2_black">Продвижение сайта с нуля

                </h2>
                <div class="product__list_column-text-2 padding_top_40">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Продвижение сайта с нуля подчиняется заданному алгоритму, который выработан нашими специалистами путем поисков новых и действенных подходов к SEO-продвижению.
                        Алгоритм действий:

                    </p>
                </div>
                <ul>
                    <li class="top30">Комплексный аудит;
                        <p class="static_list-p">Выявляются недоработки и слабые стороны сайта. На основе этого составляется план предстоящих работ.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Изучение конкурентов;
                        <p class="static_list-p">Специалист, изучая конкурентов, находит их сильные и слабые стороны. Это позволит в процессе работы выработать успешную стратегию продвижения.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Семантическое ядро;
                        <p class="static_list-p">Проводится сбор наиболее полного семантического ядра, редактирование старых разделов и на основе новшеств, создание новых.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Размещение контента;
                        <p class="static_list-p">Добавляется свежий материал на сайт, он соответствует всем актуальным требованиям поисковых систем.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 structure-list__6-top30">Техническая оптимизация;
                        <p class="static_list-p">SEO-специалисты и программисты проведут анализ и корректировку ошибок Вашего сайта.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__6 structure-list__6-top30">Улучшение юзабилити;
                        <p class="static_list-p">Оценка и усовершенствование функционала сайта для привлечения новых клиентов и снижения количества отказов.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__7 structure-list__6-top30">Ссылочная масса;
                        <p class="static_list-p">Постепенное наращивание ссылочной массы естественным путем для предотвращения попаданий под фильтры.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__8 structure-list__6-top30">Отчеты о работе.
                        <p class="static_list-p">Специалист предоставляет подробный визуализированный план проделанной работы, в которой четко показаны графики продвижения нового сайта.
                        </p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient38.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient38-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient38-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient38-375.png" alt="img" class="internet_mag_product_img">
                </div>
            </div>
        </div>
    </div>
</section>

<!--form -->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 bitrix_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">выгода</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768">Результат SEO-продвижения молодого сайта
        </h2>
        <div class="preview__block padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Так же молодой сайт нуждается в продвижении по трафику. Это подойдет прежде всего интернет-магазинам, порталам и СМИ. То есть, сайтам с большим количеством страниц. Заказав услугу seo-продвижение молодого сайта в агентстве «Веб Фокус», Вы платите только за переход из строки поиска на конкретные целевые запросы. Общая стоимость услуги рассчитывается в конце месяца. Она зависит от ключей.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class="p3_white ">После грамотно и качественно проделанной работы специалиста по созданию сайта и продвижению с нуля, Вы получите:
                    </p>

                </div>
            </div>
        </div>
        <div class="intro__wrapper visible">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Повышение видимости;
                        </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Возрастет доверие со стороны поисковых систем несмотря на то, что Ваш сайт является новым.

                        </p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Предотвращение попаданий под фильтры;

                        </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Качественно проведенная работа не будет казаться навязчивой, в противном случае, Ваш сайт попадет под фильтры ПС.
                        </p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Развитие бренда.
                        </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Сайт становится заметнее и начинает привлекать пользователей. Так же растет и брендовый трафик.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440 display-none">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1 product__list_column-1_subservice">
                <p class="product__list-subtitle padding_bottom_10 p2_black">преимущества</p>
                <h2 class="product__list-title padding_title_60 h2_black width_390_768">Преимущества сайта-визитки</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_one padding_bottom_20_500">Быстрое расширение клиентской базы</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Вы расскажите о себе пользователям и зарекомендуете себя с лучшей стороны.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_one'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_one product__list_item_one'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-2 _anim-items padding_bottom_40 product__list_item_two product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_two">
                        <p class="p7 product__list_item-number product__list_item_two">02.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_two">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_two padding_bottom_20_500">Улучшение имиджа компании</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Репутация повысится, вы получите больше доверия со стороны пользователей.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_two'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_two product__list_item_two'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">03.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_three padding_bottom_20_500">Новый магнит для клиентов</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Качественный, продуманный сайт поможет быстрее наращивать клиентскую базу.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_40 product__list_column--img_500 product__list_column--img_subservice">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img product-img_1 active product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2 product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3 product-img_500">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Главной целью подобного онлайн-ресурса является представление и развитие бизнеса в интернете.</p>
                        </div>

                    </div>
                    <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                        <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__list_wrapper-hidden gradient">
            <div class="grad_line-text--wrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img_subservice">
                <div class="product__list_wrapper-text">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Главной целью подобного онлайн-ресурса является представление и развитие бизнеса в интернете.</p>

                    </div>

                </div>
                <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                    <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">почему мы</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Обгоните конкурентов: поможет seo-продвижение сайтов
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">На этом этапе работы самое главное – ненавязчивость, это позволит безболезненно выйти из «раковины» и избежать попадания под разнообразные фильтры.

                            <br><br>
                            Заказывая продвижение молодого сайта и создание нового в компании «Веб Фокус», у Вас появляются все шансы победить конкурентов и вывести свой бизнес на новый, международный уровень. Одно дело создать сайт или аккаунт в социальных сетях, другое, заниматься им постоянно, совершенствовать его и с помощью контента знакомить пользователей со своим бизнесом.

                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient40.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient40-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient40-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient40-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient39.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient39-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient39-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient39-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Поисковые системы всегда предъявляют высокие требования и обращают внимание только на качественные сайты с высоким уровнем информативности и клиентоориентированности. Так же осторожность и недоверие распространяется на молодые или новые сайты для того, чтобы укрепиться на платформе, нужно постоянно работать над проектом, совершенствуя его. <br><br>
                            Вся работа компании направлена на то, чтобы сайт «заслужил» доверие ПС. Для повышения репутации молодого или нового сайта важно начать вести блог с новостями компании, мнениями экспертов по тематике Вашего проекта, все это необходимо проводить 1-2 раза в неделю.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>