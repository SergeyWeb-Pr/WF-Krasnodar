<?php
/*
Template Name: Создание персонального сайта
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
        <div class="header__title header__title_subservice header__title_subservice_w1110 personal_site_media_h1">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание персонального сайта
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1">Создание персонального сайта</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_w650"><b class="bold">Создание персонального сайта</b> поможет человеку показать себя, свои навыки и возможности широкой аудитории. Сайты-визитки, сайты-
                портфолио, персональные блоги можно отнести к персональным сайтам.</p>
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

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 personal_site_media">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">самопрезентация в сети</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Само&shy;презентация в сети</h2>
        <div class="preview__block padding_bottom_40 padding_52_1440 preview__block-new">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 preview__block_text-1-margin">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">В последнее время персональные сайты становятся все более популярными. Люди массово переходят в интернет. Здесь они ищут хорошего мастера, учителя, школу для ребенка, тренера для занятий. «Сарафанное радио» перестает быть основным фактором выбора специалиста.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2 preview__block_text-2-margin">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Что для одного человека хорошо, для соседа покажется неуместным. Как понять, как выбрать работника, который выполнит задание на 100%? Персональные сайты решают этот вопрос. Создание персонального сайта поможет его владельцу повысить авторитет в глазах будущих клиентов.</p>
                </div>
            </div>
        </div>

        <div class="preview__block_text preview__block_text-2 padding_bottom_40">
            <p class='p3_white_bold'>Разработка персонального сайта помогает:</p>
        </div>

        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice padding_bottom_20">
                <div class="subservice_task_item list-numbers number-1-purple">
                    <p class="subservice_task_text subservice_task_text_info-site subservice_task_text_info-site_max-width">Представить себя, продемонстрировать свои возможности большому кругу пользователей.</p>
                </div>
                <div class="subservice_task_item list-numbers number-2-blue">
                    <p class="subservice_task_text subservice_task_text_info-site subservice_task_text_info-site_max-width">Общаться с клиентами
                        на расстоянии, в случае отсутствия возможности общения один на один.</p>
                </div>
                <div class="subservice_task_item list-numbers number-3-pink">
                    <p class="subservice_task_text subservice_task_text_info-site subservice_task_text_info-site_max-width">Найти потенциальных клиентов, спонсоров.</p>
                </div>
            </div>
        </div>

        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Личность, которая хочет заявить о себе при помощи хорошо разработанного персонального сайта, ставит основную ставку
                            на индивидуальные характеристики. Собственники такого рода сайта выделяют себя среди других подобных специалистов
                            и становятся ближе к клиентам.
                            Персональный сайт подходит для деловых и творческих людей. Они демонстрируют свои возможности на более высоком уровне. Этот сайт используют учителя, спортсмены, специалисты в узкой сфере деятельности, фотографы, повара и многие известные лица.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>В период сложной эпидемической ситуации разработка персонального сайта помогает зарабатывать тем специалистам, которые были лишены возможности провести консультацию лично. Жители Краснодара в карантин нуждались в помощи профессионалов, посещение которых было невозможно (узких врачей, юристов, психологов).
                        Если человек отлично показал себя в составе группы, компании, он может заявить о себе лично и для этого заказать персональный сайт. Данный веб-ресурс поможет оставаться на связи со своими постоянными клиентами и, возможно, положить начало успешному бизнесу.</p>
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

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">особенности персонального сайта</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice intro__title_max-width">Простой индиви&shy;дуальный веб-ресурс</h2>

        <div class="intro__text width_532">
            <div class="grad-line"></div>
            <p class='p3_white'>Создание персонального сайта обязывает его собственника серьезно отнестись к содержанию данного интернет-ресурса. Качество представленной информации может повлиять
                на дальнейшую судьбу реализуемого проекта.
            </p>
        </div>

        <p class='p4_white padding_top_60 padding_bottom_40'>Основные особенности персонального сайта:</p>

        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-5_subservice padding_bottom_20 h3_grad">Структурированность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min progress-height" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Объем разработанного персонального сайта не должен превышать 10 станиц. Сведения должны быть представлены кратко, понятно и структурировано.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_seven h3_grad">Качество</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min progress-height" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Дизайн сайта должен быть привлекательным и интересным. Качество картинки, фото, видео – все это повысит уровень персонального сайта.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-16_subservice h3_grad width_322 width_initial_768">Достоверность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min progress-height" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Данный сайт содержит информацию о собственнике, его биографию и достижениях.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-7_subservice h3_grad">Информативность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min progress-height" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Персональный сайт должен содержать страницу с указанием контактов, форме обратной связи, ценах на услуги.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block intro__text_block_subservice">
                <div class="text__wrapper">
                    <div class="intro__text width_532">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">В сети интернет существует много различных платформ
                                с помощью, которых можно создать персональный сайт. Используя данные основы, согласно представленным инструкциям, можно самостоятельно создать веб-ресурс данного типа.
                            </p>
                            <p class='p3_white show_768'>Все это обсуждается на этапе согласования требований с заказчиком сайта, поэтому стоимость и сроки не станут неожиданностью в конце проекта.</p>

                        </div>
                    </div>
                </div>
                <div class="text__wrapper hidden_768">
                    <div class="intro__text intro__text-two width_532">
                        <div class="grad-line grad-line-margin"></div>
                        <p class='p3_white'>Есть определенные нюансы, которые необходимо знать, перед тем как заняться разработкой персонального сайта. Данные особенности можно изучить самостоятельно,
                            а также обратиться в агентство «Веб Фокус» для консультации.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="subservice_rules padding_top_130 ">
    <div class="container">
        <p class="product__list-subtitle p2_black">из каких блоков состоит лендинг пейдж</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Самые популярные ниши бизнеса, которые заказывают лендинг пейдж:</h2>
        <div class="subservice_rules_inner padding_title_60 subservice_rules_inner_one">
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_one"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа товаров.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Наверное, самая популярная ниша бизнеса. Лендинги таких компаний обычно содержат краткую информацию о предлагаемых товарах, возможность заказать обратный звонок и информацию о проходящих акциях.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_two"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа услуг.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">В отличие от товаров, об услуге достаточно подробно рассказать, чтобы ее заказали. С этой функцией отлично справляется качественный и информативный лендинг пейдж.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_five"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Оказание консультаций, обучения и тренингов.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Разработка таких лендингов обычно сопровождается добавлением качественных фото с проводишихся тренингов и консультаций, тарифами обучения и расписанием ближайшего старта занятий.</p>
            </div>
        </div>
    </div>
</section> -->

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440 display-none">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1 product__list_column-1_subservice">
                <p class="product__list-subtitle padding_bottom_10 p2_black">преимущества агентства «Веб Фокус»</p>
                <h2 class="product__list-title padding_title_60 h2_black width_initial_768 line_height_51_375">Преимущества агентства <br> «Веб Фокус»</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_108 width_530_768 product__list_item_one padding_bottom_20_500">Внимание к деталям</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Мы уделяем внимание деталям и понимаем, что они могут привлечь Ваших будущих клиентов.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_two padding_bottom_20_500">Лучшие дизайнерские решения</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Дизайнеры компании «Веб Фокус» создадут привлекательную картинку, используя лучшие дизайнерские решения.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_three padding_bottom_20_500">Ускоренная разработка</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Разработка персонального сайта может быть ускорена, если рассмотреть готовый сайт из магазина веб-ресурсов нашего агентства.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>

                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">04.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_three padding_bottom_20_500">Функциональные возможности</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Мы предоставляем широкие функциональные возможности для Вашего общения с пользователями и клиентами.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>

                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">05.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_three padding_bottom_20_500">Особое внимание контенту</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">При заказе персонального сайта уделяется особое внимание контенту, размещению информации на сайте, способах ее подачи.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice margin_left_68">
                <div class="product__list_column--img margin_bottom_40 product__list_column--img_500 product__list_column--img_subservice">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover-4.jpg" alt="img" class="product-img product-img_1 active product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2 product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3 product-img_500">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Наша команда подготовит проект будущего персонального сайта и представит его на согласование в самые короткие сроки. Опыт нашей работы позволяет сделать оценку наиболее подходящего личного сайта для конкретного заказчика.
                                Купить персональный сайт в Краснодаре, Сочи можно обратившись в агентство «Веб Фокус». Наши специалисты проконсультируют о стоимости и срокам разработки персонального сайта.
                            </p>
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
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Виртуальный магазин поможет Вам информировать пользователей лично о новых поступлениях, новостях компании, проведении акций. Вы сможете использовать e-mail рассылку, отправлять клиентам открытки с поздравлениями, предлагать персональные скидки, что не воспринимается большинством пользователей как спам, если сотрудничать с теми, кто разбирается в этом.</p>

                    </div>

                </div>
                <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                    <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 structure padding_bottom_130 padding_bottom-1090 personal_site_media">
    <div class="container">
        <div class="structure__blocks">
            <div class="structure__block bitrix_structure__block bitrix_structure__block-1090">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества агенства «Веб Фокус»</p>
                <h2 class="h2_black bitrix_h2-1090 margin_bottom_20">Преимуще&shy;ства агентства<br> «Веб Фокус»</h2>
                <ul>
                    <li class="bitrix_structure-list-1">Внимание к деталям
                        <p class="static_list-p">Мы уделяем внимание деталям и понимаем, что они могут привлечь Ваших будущих клиентов.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2 bitrix_structure-list-2">Лучшие дизайнерские решения
                        <p class="static_list-p">Дизайнеры компании «Веб Фокус» создадут привлекательную картинку, используя лучшие дизайнерские решения.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3">Ускоренная разработка
                        <p class="static_list-p">Разработка персонального сайта может быть ускорена, если рассмотреть готовый сайт из магазина веб-ресурсов нашего агентства.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 bitrix_structure-list-4">Функциональ&shy;ные возможности
                        <p class="static_list-p">Мы предоставляем широкие функциональные возможности для Вашего общения с пользователями и клиентами.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5">Особое внимание контенту
                        <p class="static_list-p">При заказе персонального сайта уделяется особое внимание контенту, размещению информации на сайте, способах ее подачи.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="personal_syte_margin">
                <div class="personal_syte_list">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/candy.png" alt="img" class="personal_syte_list_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/candy-1090.png" alt="img" class="personal_syte_list_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/candy-768.png" alt="img" class="personal_syte_list_img">
                </div>
                <div class='product__list_wrapper_flex margin_top_40'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Наша команда подготовит проект будущего персонального сайта и представит его на согласование в самые короткие сроки. Опыт нашей работы позволяет сделать оценку наиболее подходящего личного сайта для конкретного заказчика.
                                Купить персональный сайт в Краснодаре, Сочи можно обратившись в агентство «Веб Фокус». Наши специалисты проконсультируют о стоимости и срокам разработки персонального сайта.</p>
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

<?php get_template_part('modules/form_two'); ?>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="subservice_rules padding_bottom_130 margin-top-20 personal_site_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">нет предела совершенства, которое мы создаем сами</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Создание персональ&shy;ного сайта: почему так важно?
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Эффективные персональные сайты помогли талантливым людям добиться успеха. Многие рассказывают, что решиться сделать шаг в будущее, и заняться разработкой персонального сайта было сложным жизненным этапом. Это накладывает на собственника определенные обязательства по поддержанию имиджа.Персональный сайт помогает перейти на новый жизненный уровень. Многие фрилансеры, которые уже создали персональный сайт, говорят о возможности выбора клиента,
                            без навязывания руководством.
                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient1.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient1-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient1-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient1-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient2.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient2-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient2-768.png" alt="" class='personal_site_rules_logo_img height_305'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient2-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Для творческих людей этот критерий очень важен. Творить, создавать, работать всегда проще, если то, что ты делаешь тебе нравиться. Разбираться в разработке персонального сайта кропотливый и трудоемкий процесс, требующий особенных навыков. Купить веб-ресурс и заниматься тем, что умеешь рациональнее, так как результат от внедрения окупиться быстро. Агентство «Веб Фокус» окажет услугу по созданию персонального сайта, который будет нравиться Вам, Вашим клиентам.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>