<?php
/*
Template Name: Создание сайта-визитки
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
        <div class="header__title header__title_subservice">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание сайта-визитки</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Создание сайта-визитки</h1>
            <p class="header_text p3_black header_text_subservice">Прежде чем выбрать, в какую компанию обратиться, клиенты изучают ее сайт или социальные сети. Сайт-визитка станет лучшим представителем в интернете. Через него пользователи ознакомятся с основной информацией о компании, преимуществах, товарах и услугах, контактных данных и прочей коммерческой и дополнительной информацией (прайс-листы, партнеры, новости компании и т. д.).</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">ваша виртуальная витрина
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Основные отличия</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Многие считают, что создание сайта-визитки и лендинга – это одно и то же. На самом деле, это мнение ошибочно. Основное отличие лендинга и сайта-визитки заключается в том, что сайт-визитка гораздо более функционален и состоит из нескольких страниц.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">В общей сложности его структура не превышает 10 страниц, то есть это небольшой сайт, но в дальнейшем, при желании, можно добавить неограниченное количество страниц.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>В общей сложности его структура не превышает 10 страниц, то есть это небольшой сайт, но в дальнейшем, при желании, можно добавить неограниченное количество страниц.</p>
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

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black">Преимуще&shy;ства сайта-визитки</h2>
                <ul>
                    <li class="top30">Быстрое расширение клиентской базы
                        <p class="static_list-p">Вы расскажите о себе пользователям и зарекомен&shy;дуете себя с лучшей стороны.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Улучшение имиджа компании
                        <p class="static_list-p">Репутация повысится, вы получите больше доверия со стороны пользователей.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Новый магнит для клиентов
                        <p class="static_list-p">Качественный, продуманный сайт поможет быстрее наращивать клиентскую базу.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient12.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient12-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient12-768.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient12-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Главной целью подобного онлайн-ресурса является представление и развитие бизнеса
                                в интернете.</p>
                        </div>
                    </div>
                    <div class="portfolio__btn margin_top_60 portfolio__btn_subservice_block">
                        <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class='padding_top_130 vizitki_main_tasks_media'>
    <div class="container ">
        <p class="product__list-subtitle padding_bottom_10 p2_black">задачи сайта-визитки</p>
        <h2 class=" padding_title_60 h2_black subservice_task-title">Основными задачами сайта-визитки являются следующие пункты: </h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left">
                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number subservice_task_number_1'>01.</p>
                    <p class="subservice_task_text p3_black">Знакомство с аудиторией и представление бренда в интернете.</p>
                </div>
                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number'>02.</p>
                    <p class="subservice_task_text p3_black">Привлечение новой целевой аудитории без привязки к географическому принципу.</p>
                </div>
                <div class="subservice_task_item ">
                    <p class='p7 subservice_task_number'>03.</p>
                    <p class="subservice_task_text p3_black ">Экономия расходов на разработке интернет-магазина или корпоративного сайта, ведь заказ сайта-визитки обойдется бизнесу в значительно меньшую сумму.</p>
                </div>
            </div>
            <div class="subservice_task_right ">
                <div class="subservice_task_item ">
                    <p class='p7 subservice_task_number'>04.</p>
                    <p class="subservice_task_text p3_black">Постоянная доступность потенциальных клиентов к информации о компании. Офис или магазин доступны только в рабочее время, а сайт в интернете всегда.</p>
                </div>
                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number'>05.</p>
                    <p class="subservice_task_text p3_black">Использование возможностей цифрового маркетинга для продвижения и рекламы в поисковых системах и социальных сетях.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!--reviews -->
<?php get_template_part('modules/reviews'); ?>
<section class="intro intro_subservice padding_bottom_150 padding_top_130 vizitki_intro">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">модули сайта-визитки</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Базовые функцио&shy;нальные модули, которые разраба&shy;тываются при создании сайта-визитки:</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-1_subservice padding_bottom_20 h3_grad">Общая информация о компании</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>В этом разделе важно указать сведения о компании: продажа товаров или оказание услуг, профессиональные достижения, наличие сертификатов, подтверждающих профессионализм, и другая информация, которая повысит надежность бренда в глазах клиентов.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-2_subservice h3_grad">Характеристики товаров или услуг</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Обычно такая информация подается с помощью создания простых и лаконичных карточек с описанием, которые сопровождаются качественными фотографиями. Задача этого модуля – сделать веб-страницу привлекательной и информативной для пользователя.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-3_subservice h3_grad width_322 width_initial_768">Контактная информация или онлайн-чат</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Важно предложить клиенту все способы связи с представителями компании для дальнейшего оформления покупки.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-4_subservice h3_grad">Ссылки на социальные сети</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Наличие активных социальных сетей не является обязательным критерием, но значительно повышает лояльность и доверие пользователей. Поэтому, если они есть у вашего бренда, ссылки на них стоит указать на сайте-визитке.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block intro__text_block_subservice vizitki_intro">
                <div class="text__wrapper text__wrapper_subservice">
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Цена и сроки создания сайта-визитки в “Веб Фокус” зависят от объема контента, который будет размещен на сайте, разрабатываемого функционала, количества разделов и страниц.</p>
                            <p class='p3_white show_768'>Все это обсуждается на этапе согласования требований с заказчиком сайта, поэтому стоимость и сроки не станут неожиданностью в конце проекта.</p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper hidden_768">
                    <div class="intro__text intro__text-two width_532">
                        <div class="grad-line"></div>
                        <p class='p3_white'>Все это обсуждается на этапе согласования требований с заказчиком сайта, поэтому стоимость и сроки не станут неожиданностью в конце проекта.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 vizitki_subservice_rules">
    <div class="container">
        <p class="product__list-subtitle p2_black">правила при разработке сайта-визитки</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Основные правила, которые необходимо учитывать при разработке сайта-визитки:</h2>
        <div class="subservice_rules_inner padding_title_60">
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_one"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Простой и информативный контент</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">В первую очередь сайт-визитка используется для представления бизнеса в интернете. Размещенная на сайте информация должна давать клиенту полное представление о вашем бизнесе.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_two"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Адаптивность под мобильные и компьютерные устройства</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">При изготовлении сайта-визитки надо помнить о том, что большая часть потенциальных клиентов использует мобильные устройства для поиска и просмотра сайтов.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_three"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Скорость загрузки</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Это один из ключей по привлечению клиентов: чем выше скорость загрузки веб-страницы, тем больше вероятность, что пользователь ее просмотрит. В интернете высокая конкуренция за внимание клиента, если ваш сайт будет долго загружаться, пользователь просто его закроет и перейдет на другой.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_four"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Удобный пользовательский дизайн</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Не стоит перегружать сайт визуальными элементами. Достаточно выдержать дизайн в соответствии с бренд-буком компании.</p>
            </div>
        </div>
        <div class="subservice_rules_wrapper hidden_768">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Проводить маркетинговые кампании с качественным представительством в интернете не сложно. Вы получаете все шансы получить, быстрый прирост клиентов. Создание сайта-визитки откроет для вас возможности контекстно-медийной рекламы в Google и Яндекс.</p>
                </div>
            </div>
            <div class='vizitki_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rules.png" alt="" class="vizitki_rules_logo_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/rules-1090.png" alt="" class="vizitki_rules_logo_img">
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_150">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">алгоритм работы</p>
        <h2 class="intro__title h2_grad padding_title_60_40">Алгоритм работы</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Маркетинговый анализ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Сбор информации, анализ вашего бизнеса, сегментирование аудитории и изучение конкурентов.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Написание ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Анализ требований к проекту и составление технического задания на основе заполненного брифа.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Прототипирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание макетов страниц согласно ТЗ, продумывание функционала, навигации и пр.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_four">Дизайн сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Утверждение макета сайта с графическими элементами в фирменном стиле компании.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Адаптивная верстка</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Настройка автоматической адаптации сайта-визитки под браузеры и мобильные устройства.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_sex">Оформление контента</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Размещение продающих seo&#8209;оптимизированных текстов для страниц.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Программирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Разработка программной части, настройка интеграции с CRM, форм обратной связи, коллтрекинга и пр.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-8.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Тестирование и запуск</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Размещение на хостинге, регистрация домена, тестирование и отладка работы функционала.</p>
                    </div>
                </div>


            </div>
            <div class="intro__text_block_subservice">
                <div class="text__wrapper">
                    <div class="intro__text width_590">
                        <div class="grad-line"></div>
                        <p class="intro__text-p p3_white padding_left_14_500">Заказать сайт-визитку в Краснодаре можно в агентстве digital-маркетинга «Веб Фокус». Сотрудники агентства имеют большой опыт по разработке различных веб-ресурсов для многих сфер бизнеса. Мы знаем «подводные камни» разработки и продвижения сайтов-визиток, особенности создания и наполнения контентом сайтов различной тематики. </p>
                    </div>
                </div>
                <div class="text__wrapper">
                    <div class="intro__text width_590">
                        <div class="grad-line"></div>
                        <p class='p3_white padding_top_20_768 padding_left_14_500'>Мы следим за трендами разработки и дизайна сайтов и предложим наилучший вариант сайта-визитки. После разработки вы сможете обращаться к нашим специалистам за поддержкой и модернизацией сайта.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="subservice_rules padding_top_130 padding_bottom_130 vizitki_subservice">
    <div class="container">
        <p class="product__list-subtitle p2_black">эффективный способ представления компании в интернете</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61">Мнение эксперта</h2>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black mw_540">Сайт компании считается важным элементом ее имиджа и стиля. С ним лояльность потенциальных клиентов, увеличивается, ведь они видят, что вы открыты и заботитесь, чтобы красивая обертка вашего продукта – стильная презентация его на сайте, отражала его качество. Поэтому, если собираетесь заказать сайт-визитку, уделите большее внимание гармоничному сочетанию лаконичности, простоты дизайна и с его функциональной составляющей.</p>
                </div>
            </div>
            <div class='vizitki_subservice_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rules-2.png" alt="" class='vizitki_subservice_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/rules-2-1090.png" alt="" class='vizitki_subservice_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/rules-2-768.png" alt="" class='vizitki_subservice_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/rules-2-375.png" alt="" class='vizitki_subservice_rules_logo_img'>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>