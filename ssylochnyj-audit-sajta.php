<?php
/*
Template Name: Ссылочный аудит сайта

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
                <p class="header_link_str_twxt">Ссылочный аудит сайта
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Ссылочный аудит сайта
            </h1>
            <p class="header_text p3_black header_text_subservice">Ссылочный аудит от компании «Веб Фокус» позволит проверить Ваш сайт с каждой стороны. После этой процедуры Вы будете знать, используете ли Вы все возможности для развития бизнеса. Будете точно знать, почему сайт теряет позиции или появились проблемы в индексации. Подробная проверка поможет улучшить техническую строну Вашего бизнеса для эффективного продвижения.
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
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Еще одна возможность оценки оптимизации ресурса
        </h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Специалисты ООО «Веб Фокус» проведут анализ ссылочной массы сайта и помогут узнать, как решить актуальные проблемы и недостатки, главное – придерживаться этим рекомендациям.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Из-за высокой конкуренции в интернете, владельцы сайтов, даже имея прекрасную оптимизацию, регулярно работают над укреплением позиций в поисковой системе. Важно сохранять позиции, чтобы оставаться в ТОПе. Чтобы добиться эффективной работы проекта, нужно его постоянно дорабатывать и внедрять новые элементы.
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
                <h2 class="h2_black">Алгоритм действий при выполнении комплексного анализа аудита сайта

                </h2>
                <ul>
                    <li class="top30">Технический аудит;
                        <p class="static_list-p">Это основной аспект для продвижения бизнеса на рынке рекламы. Технический аудит обеспечивает стабильную работу проекта без которой продвижение невозможно. Название говорит само за себя, на этом этапе недопустимы ошибки и просчеты. Процесс технического аудита подразумевает оценку ресурса на всех уровнях с технической стороны: проверяется работа сервера, скорость загрузки страниц, работа модулей и плагинов, навигации, кроссбраузерность и т.д.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Анализ конкурентов;
                        <p class="static_list-p">Наш специалист подробно изучает ключи конкурентов из ТОП-10, и то, как их предложение соответствует потребностям и запросам целевой аудитории, ТИЦ, структура и контент страниц, а также сравнивается ссылочная стратегия для разработки новой эффективной стратегии продвижения.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Анализ юзабилити;
                        <p class="static_list-p">Более творческий этап работы, подразумевающий оценку элементов сайта (дизайна сайта, структурное оформление страниц, оценка юзабилити и т. д.), все это напрямую влияет на уровень доверия пользователей. Зная пути решения проблем, Вы поймете, как избавиться от недоверия пользователей и привлечь новых клиентов.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Отчеты с результатами работы.
                        <p class="static_list-p">Заключительный этап работы специалиста, на котором Вы получаете подробный отчет со всеми найденными ошибками и недочетами, аналитикой эффективности и рекомендациями по совершенствованию сайта повышению видимости в поисковых системах.
                        </p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient41.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient41-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient41-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient41-375.png" alt="img" class="internet_mag_product_img">
                </div>
            </div>
        </div>
    </div>
</section>

<!--form -->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">предложение</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Что мы можем сделать для Вас?
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Если перед Вами стала проблема понижения популярности сайта, нет потока клиентов и конкуренты «наступают на пятки», решить эту проблему предельно просто – заказать аудит сайта в Краснодаре и Сочи. Сотрудничать с веб-студией теперь можно не только в Москве, где компания зарекомендовала себя на рынке рекламы, компания растет, а вместе с ней и сфера деятельности, теперь мы работаем и в Краснодарском крае.
                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient43.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient43-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient43-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient43-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient42.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient42-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient42-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient42-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Интернет-агентство «Веб Фокус» предоставит услуги аудита на высшем уровне. Специалисты компании помогут понять и выявить основные причины того, почему появились проблемы с продвижением коммерческих запросов. Подробно изучив семантику бизнеса, сильные и слабые стороны, составляется четкий план действий, который поможет улучшить показатели лояльности потребителей и в разы повысить конкурентоспособность компании.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">выбор
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Почему именно мы?
        </h2>
        <div class="preview__block padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Компания «Веб Фокус» строит прочный фундамент для развития компаний через интернет-рекламу. Путем длительного изучения рынка маркетинга, мы не перестаем искать и находить новые возможности в сфере digital. Все что Вам нужно – обратиться к нашим специалистам с вопросом, на который они однозначно найдут решение. Студия идет в ногу со временем и в курсе всех новинок в digital сфере, отчасти потому, что многие задаются нами.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Молодая команда, состоящая из квалифицированных специалистов, направляет свою деятельность на процветание Вашего бизнеса. Для того чтобы не стоять на месте, а двигаться только вперед, прогрессивные аналитики и маркетологи продумывают новые стратегии продвижения и передают их в работу.
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

<section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">цены</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Вопрос цены – не вопрос
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">После того как подписывается договор, вся наша деятельность направлена на продвижение Вашего бизнеса со всех сторон и на всех этапах. Не возникает никаких проблем, если за дело берутся профессионалы.
                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient45.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient45-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient45-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient45-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient44.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient44-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient44-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient44-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Если Вы не разбираетесь в маркетинге, мы не будем пытаться еще больше ввести Вас в заблуждение. Нашей приоритетной задачей становится объяснение на доступном и понятном для Вас языке того, чем будет эффективна услуга и какой результат она принесет.
                        </p>
                    </div>
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient47.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient47-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient47-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient47-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient46.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient46-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient46-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient46-375.png" alt="" class='personal_site_rules_logo_img'>
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