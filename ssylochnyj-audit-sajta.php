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

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop ssylochnyj_correct">
    <div class="container">
        <p class="product__list-subtitle p2_black">шаги</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Этапы аудита</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color8">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Анализ исходящих ссылок.
                        </div>
                        <div class="subservice_task_item">
                            Сайт несет большую ответственность не только за контент на страницах. Сюда входят также ссылки. Именно поэтому и нужен аудит ссылочной массы сайта.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Анализ ссылочных доноров.
                        </div>
                        <div class="subservice_task_item">
                            После наведения порядка в исходящих ссылках, специалист приступает к следующему этапу – это анализ входящих. Для начала следует узнать, кто ссылается на Вас.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color5">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Анализ анкоров.
                        </div>
                        <div class="subservice_task_item ">
                            Если сайт ссылается на авторитетные ресурсы, Google все равно может расценить его, как переспамленный. Поэтому при ссылочном аудите специалист так же уделяет много внимания анкорам, чтобы оценить, достаточно ли их.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer grid_gap_40">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black">

                        После прохождения такой проверки, наш специалист выносит вердикт по следующим вопросам:
                        <br><br>

                    </p>
                    <div class="subservice_task_left subservice_task_left_new">
                        <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                            Шаблонный материал без персонализации клиента
                            (бланки из Интернета не только не приведут к покупке,
                            но и негативно отразятся на общем имидже компании).
                        </div>
                        <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                            Отсутствие визуализации: изображений, схем, графиков.
                        </div>
                        <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                            Переизбыток информации, длина не должна превышать
                            2 листов.
                        </div>

                    </div>

                </div>

            </div>
            <div class="opencart_rules_logo">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-1090.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-768.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-375.png" alt="" class="opencart_rules_logo_img">

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
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768">Что дает аудит
        </h2>
        <div class="intro__wrapper visible">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Комплексная проверка.
                        </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Вы узнаете какие позиции стоит откорректировать, чтобы быть конкурентоспособным.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Рекомендации по улучшению.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Специалисты разработают пошаговый план того, как исправить ошибки и увеличить продажи.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3 aos-init aos-animate" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Продвижение бренда.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="61" max="60">
                                <span class="percent-min">100</span>%
                            </progress>
                        </div>
                        <p class="p3_white">Вы узнаете, какой стратегии продвижения нужно придерживаться.
                            Мы оценим насколько оптимизированы для повышения рейтинга вашего по целевым ключевым запросам. Обращайтесь!</p>
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

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_footer() ?>