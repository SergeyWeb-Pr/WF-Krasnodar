<?php
/*
Template Name: Сайт для предприятия
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
            <div class="header_link_str media_margin-bottom_20">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Сайт для предприятия</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Сайт для предприятия</h1>
        </div>
        <div class="header__info header__info_subservice margin_top_55 margin_bottom_155">
            <a href="" class="header-btn p_btn header-btn_subservice ">Узнать больше</a>
        </div>

    </div>
    <div class="blur"></div>
    <div class="header_circle"></div>
    <div class="header_circle-2"></div>
    <div class="header_circle-3"></div>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">разработка сайта предприятия
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice letter-spacing-3 h2_media_515 h2_media_900">Что такое разработка<br> сайта предприятия?</h2>
        <div class="preview__block padding_title_60 padding_52_1440 enterprise_preview_block">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Разработка сайта предприятия – это правильное и необходимое капиталовложение. Он представляет собой источник информации о кампании и является рекламной площадкой. Доносит нужную информацию до пользователей. Правильное использование такого ресурса поможет привлечь новых клиентов и потенциальных партнеров. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Данный ресурс представляет собой многоуровневую систему, с возможностью добавления неограниченного количества страниц. Перед началом разработки ресурса изучается направление бизнеса, для построения правильной маркетинговой стратегии, что позволит привлечь нужную целевую аудиторию. Особая роль отводится контенту и яркому привлекательному дизайну.</p>
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

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class="padding_top_130 structure padding_bottom_130 enterprise_site_media">
    <div class="container">
        <div class="structure__blocks structure_blocks_column">
            <div class="structure__block bitrix_structure__block bitrix_structure__block-1090">
                <p class="slider__subtitle p2_black padding_bottom_10">нюансы</p>
                <h2 class="h2_black letter-space-2 bitrix_h2-1090 max-width566">Среди составляющих сайта выделяют:</h2>
                <ul>
                    <li class="bitrix_structure-list-1">Домен
                        <p class="static_list-p">Адрес, по которому ресурс находят в интернете пользователи.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2 bitrix_structure-list-2">Хостинг или виртуальная площадка, делающая сайт доступным
                        <p class="static_list-p">Данный веб-ресурс должен отличаться надежностью и работать бесперебойно.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3">Движок
                        <p class="static_list-p">Cистема управления контентом, который участвует в добавлении страниц.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 bitrix_structure-list-4">Контент
                        <p class="static_list-p">Наполнение страниц данного интернет-ресурса, тексты, изображения, видеоролики, которые должны регулярно обновляться.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 margin_bottom_30">Дизайн
                        <p class="static_list-p">Макеты страниц и графика. Должен не только выглядеть привлекательно, но и быть удобным для пользователя.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="structure__block">
                <div class="enterprise_site_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds3.png" alt="img" class="enterprise_img-desktop enterprise_site_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds3-768.png" alt="img" class="enterprise_site_img_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds3-375.png" alt="img" class="enterprise_site_img_block">
                </div>
                <div class='product__list_wrapper_flex margin_top_40'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2 max-width-none">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Создание сайта предприятия – это творческий и кропотливый труд, который не терпит дилетантов. Здесь нужны знания, умения, слаженная работа в команде. Все элементы нужны и взаимосвязаны. Подайте заявку на разработку от агентства «Веб Фокус» и получите качество исполнения. Мы проработаем каждый пункт, создав тем самым привлекательный корпоративный сайт под ключ. Наши веб-мастера создадут продукт с учётом пожеланий клиента и с учётом последних тенденций в отрасли.
                            </p>
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                                Стандартная структура сайта предприятия включает главную страницу, контакты, услуги, блог и информацию об организации. Должна быть надежная система управления контентом, это облегчит в дальнейшем администратору работу с ним при обновлении информации или редактировании. Для удобства нужен функционал поиска по сайту, окно заказа, онлайн-поддержка, раздел новостей, счетчик посещаемости и карта проезда.</p>
                        </div>
                    </div>
                    <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                        <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440 display-none">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1">
                <p class="product__list-subtitle padding_bottom_10 p2_black">нюансы</p>
                <h2 class="product__list-title padding_title_60 h2_black">Среди составляющих сайта выделяют:</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_one">Домен</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one">Адрес, по которому ресурс находят в интернете пользователи.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_one'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_one product__list_item_one'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-2 _anim-items padding_bottom_40 product__list_item_two">
                    <div class="product__list_item-num product__list_item_two">
                        <p class="p7 product__list_item-number product__list_item_two">02.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_two">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_two">Хостинг или виртуальная площадка, делающая сайт доступным</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two">Данный веб-ресурс должен отличаться надежностью
                            и работать бесперебойно.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_two'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_two product__list_item_two'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">03.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_three">Движок</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three">Cистема управления контентом, который участвует
                            в добавлении страниц.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-4 _anim-items padding_bottom_40 product__list_item_four">
                    <div class="product__list_item-num product__list_item_four">
                        <p class="p7 product__list_item-number product__list_item_four">04.</p>
                    </div>
                    <div class="product__list_item-text margin_10_1440 product__list_item_four">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_four">Контент</p>
                        <p class="p3_black padding_bottom_20 width_103 width_103_500 product__list_item_four">Наполнение страниц данного интернет-ресурса, тексты, изображения, видеоролики, которые должны регулярно обновляться.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_four'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_four product__list_item_four'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-5 _anim-items padding_bottom_40 product__list_item_five">
                    <div class="product__list_item-num product__list_item_five">
                        <p class="p7 product__list_item-number product__list_item_five">05.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_five">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_five">Дизайн</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_five">Макеты страниц и графика. Должен не только выглядеть привлекательно, но и быть удобным для пользователя.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_five'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_five product__list_item_five'></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__list_column-2">
                <div class="product__list_column--img margin_bottom_40 enterprise-site-img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img product-img_1 active">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover4.jpg" alt="img" class="product-img product-img_4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover5.jpg" alt="img" class="product-img product-img_5">
                </div>
                <div class="product__list_wrapper list_wrapper-hidden">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_30_1440">Создание сайта предприятия – это творческий и кропотливый труд, который не терпит дилетантов. Здесь нужны знания, умения, слаженная работа в команде. Все элементы нужны и взаимосвязаны. Подайте заявку на разработку от агентства «Веб Фокус» и получите качество исполнения. Мы проработаем каждый пункт, создав тем самым привлекательный корпоративный сайт под ключ. Наши веб-мастера создадут продукт с учётом пожеланий клиента и с учётом последних тенденций в отрасли.
                        </p>
                        <p class="col-text-2 padding_bottom_10 p3_black"> Стандартная структура сайта предприятия включает главную страницу, контакты, услуги, блог и информацию об организации. Должна быть надежная система управления контентом, это облегчит в дальнейшем администратору работу с ним при обновлении информации или редактировании. Для удобства нужен функционал поиска по сайту, окно заказа, онлайн-поддержка, раздел новостей, счетчик посещаемости и карта проезда.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__list_wrapper-hidden gradient">
            <div class="grad_line-text--wrapper">
                <div class="product__list_wrapper-text">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="h3_black_300 padding_bottom_20 padding_bottom_21_500">Мы работаем с вами, а не для вас!</p>
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Агентство интернет-рекламы полного цикла – так можно охарактеризовать работу нашей компании. Действительно, в реалиях 20-х годов нового тысячелетия об успехе онлайн можно говорить только при условии, что рычаги влияния применяются комплексно и системно. Как раз поэтому предполагается многовекторная работа</p>
                        <p class="col-text-2 padding_bottom_10 p3_black">Агентство интернет-маркетинга «Веб Фокус» – это воплощение проекта в жизнь с четким пониманием особенностей того или иного бизнеса. Считаем этот момент ключевым, ведь без учета сезонности, среднего чека и других нюансов раскрутка превращается в сумбурный набор движений, от которых толку немного.</p>
                        <p class="col-text-2 padding_bottom_10 p3_black">Только точечные удары по аудитории, которые заставляют офисный телефон буквально разрываться от звонков! О Вас не знают? Исправим! Хотите увеличить продажи или улучшить репутацию? Будет сделано! Больше, чем среднестатистическое агентство разработки сайтов! </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('modules/form_two'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">этапы</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Этапы разработки сайта</h2>
        <div class="intro__text_block intro__text_block_subservice">
            <div class="text__wrapper text__wrapper_subservice padding_none margin_bottom_40-930">
                <div class="intro__text width_532">
                    <div class="grad-line"></div>
                    <div class='padding_left_16_500'>
                        <p class="intro__text-p p3_white padding_bottom_17_768 font_weight_500">Прежде чем создать информационный или продающий ресурс команде разработчиков придется преодолеть такие этапы:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper state-site_wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice state-site_wrapper_text margin_right_80">
                <div class="intro__text_item margin_bottom_40 state-site_wrapper_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_four">Анализ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Подробное изучение деятельности предприятия, особенности бизнеса, изучение целевой аудитории и, конечно же, конкурентов.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 state-site_wrapper_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Составление ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Составление технического задания для будущего веб-сайта.</p>
                    </div>
                </div>
                <div class="intro__text_block intro__text_block_subservice state-site_wrapper_text display-none-930">
                    <div class="text__wrapper text__wrapper_subservice padding_none">
                        <div class="intro__text width_532 ">
                            <div class="grad-line"></div>
                            <div class='padding_left_16_500'>
                                <p class="intro__text-p p3_white padding_bottom_17_768">У сайта должен быть функциональный интерфейс. Важную роль здесь выполняет дизайн, который должен быть
                                    не только ярким, но и быть удобным для пользователя.
                                    <br> <br>
                                    Веб-дизайнеры компании «Веб Фокус» без труда справится с этой задачей. Мы ответственно подходим
                                    к каждому этапу разработки, потому в результате имеем качественный продукт.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__text_block-two intro__text_block-two_subservice state-site_wrapper_text">
                <div class="intro__text_item margin_bottom_40 state-site_wrapper_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Разработка</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Разработка сайта предприятия отображается в дизайн-макете, прорабатывается архитектура, а после, при помощи верстки и программирования переносится в интернет.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 state-site_wrapper_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-6_subservice">Тестирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Тестирование, только после завершения тестирования сайт можно размещать на домене.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 state-site_wrapper_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-22">Продвижение и обслуживание</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Продвижение и обслуживание сайта в интернете – это заключительный этап.</p>
                    </div>
                </div>
                <div class="intro__text_block intro__text_block_subservice state-site_wrapper_text display-none_media">
                    <div class="text__wrapper text__wrapper_subservice padding_none">
                        <div class="intro__text width_532 ">
                            <div class="grad-line"></div>
                            <div class='padding_left_16_500'>
                                <p class="intro__text-p p3_white padding_bottom_17_768">У сайта должен быть функциональный интерфейс. Важную роль здесь выполняет дизайн, который должен быть
                                    не только ярким, но и быть удобным для пользователя.
                                    <br> <br>
                                    Веб-дизайнеры компании «Веб Фокус» без труда справится с этой задачей. Мы ответственно подходим
                                    к каждому этапу разработки, потому в результате имеем качественный продукт.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="subservice_rules margin-top-20 padding_bottom_130">
    <div class="container">
        <p class="product__list-subtitle p2_black">критерии</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one max-width1090-700">Критерии определения успешности сайта</h2>
        <div class="subservice_rules_wrapper_block-flex state-site_rules">
            <div class="subservice_rules_wrapper subservice_rules_wrapper_footer state-site_rules_item">
                <div class="subservice_rules_wrapper_flex state-site_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex state-site_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 line-height18">Для продукта важна стабильность функционирования.
                            Она показывает эффективность веб-разработки и является основным критерием. Пользователь не захочет ждать, если загрузка будет производиться дольше определенного времени, и не захочет возвращаться на площадку, если функциональные элементы выдают сообщения об ошибках. Чтобы Вас миновала такая проблема, нужно создавать данный продукт на надежной, рекомендованной профессионалами платформе.
                            <br><br>
                            Ресурс должен соответствовать нуждам целевой аудитории. Он должен отвечать на распространенные вопросы пользователей
                            и предлагать действенные решения проблем посетителей. Создание сайта предприятия – это командная работа, и здесь важна слаженность в работе и опыт каждого участника. Ресурс должен отражать концепцию бренда, в этом может помочь использование графики, специальный шрифт, элементы дизайна.
                        </p>
                    </div>
                </div>
                <div class='subservice_rules_logo width-auto'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient7.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient7-1090.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient7-768.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient7-375.png" alt="" class='subservice_rules_logo_img'>
                </div>
            </div>
            <div class="subservice_rules_wrapper subservice_rules_wrapper_footer state-site_rules_item flex-d-reverse_media">
                <div class='subservice_rules_logo width-auto'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient8.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient8-1090.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient8-768.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient8-375.png" alt="" class='subservice_rules_logo_img margin_top_40'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex state-site_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 line-height18">Сайт предприятия должен выгодно позиционироваться
                            на фоне конкурентов. Стоит помнить, что он не только визитка предприятия, а и инструмент привлечения клиентов. Списки клиентов и пользователей должны регулярно обновляться. Сайт предприятия будет вашим официальным представителем в сети, здесь можно и нужно размещать деловую информацию, прайсы или гарантии. В наш мобильный век стоит уделить внимание видимости сайта
                            для мобильных телефонов.
                            <br><br>
                            Сайт предприятия открывает новые возможности: это
                            и предоставление полной информации о компании, роде деятельности, опыте работы. Будет выстроена обратная связь
                            с клиентом. При наличии сайта можно легко производить аналитику.
                        </p>
                    </div>
                </div>
            </div>
            <div class="subservice_rules_wrapper subservice_rules_wrapper_footer state-site_rules_item">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex state-site_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 line-height18">Для больших предприятий, которые имеют удаленный штат сотрудников, есть возможность внутреннего взаимодействия.
                            Вы сможете взаимодействовать с сотрудниками, не зависимо
                            от местоположения. Для этого используется внутренняя часть портала. Компания получает охват всех процессов бизнеса.
                            <br><br>
                            Главным аспектом остаётся продвижение сайта в поисковиках.
                            За это отвечает SEO-структура, ей уделяется особое внимание еще на начальном этапе разработки сайта. Разработка сайта предприятия является верным шагом и поможет Вам увеличить капитал и развивать бизнес.
                        </p>
                    </div>
                </div>
                <div class='subservice_rules_logo width-auto'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds2.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds2-1090.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds2-768.png" alt="" class='subservice_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds2-375.png" alt="" class='subservice_rules_logo_img margin_top_40'>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>