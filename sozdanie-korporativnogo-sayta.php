<?php
/*
Template Name: Создание корпоративного сайта
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
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание корпоративного сайта
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание корпоратив&shy;ного сайта</h1>
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

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 korpotite_site">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">ваш виртуальный офис
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Что такое<br> корпоратив&shy;ный сайт?</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание корпоративного сайта – ответственная задача,
                            с которой сталкивается бизнес, когда принимает решение начать представлять себя в интернете. Корпоративный сайт отвечает за репутацию компании в интернете и является своеобразной веб визиткой. Когда создается корпоративный сайт под ключ, к нему предъявляются высокие требования: стильный дизайн в фирменных цветах компании, усиленная защита, адаптивность, неперегруженный юзабилити, продуманные функциональные возможности. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Корпоративный сайт дает исчерпывающие ответы
                        на вопросы о компании, но и требует немалых финансовых вложений из-за его разветвленной структуры. Кроме разделов с продукцией компании, корпоративный сайт может содержать страницы с информацией
                        о доступных вакансиях, пресс-релизами, размещать объявления о тендерах и т. д. Цель создания корпоративного сайта не только познакомить
                        с компанией, но и через него вести диалог
                        с пользователями, сотрудниками и партнерами компании.</p>
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

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 korporite_site">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">корпоративный сайт</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Корпоратив&shy;ный сайт –<br>это</h2>
        <div>
            <div class="product__list_blocks korporite_site_h3_grad">
                <div class="product__list_block">
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_40 text_underline color_rules_four">Авторитетный источник</p>
                    </div>
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_40 text_underline color-7_subservice">Использованная реклама считается более нативной, когда сайт вызывает<br> доверие</p>
                    </div>
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_40 text_underline color-16_subservice">Поддержка имиджа</p>
                    </div>
                </div>
                <div class="product__list_block">
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_40 text_underline color_rules_five">Удобное информирование и быстрая обратная связь с целевой аудиторией и партнерами</p>
                    </div>
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_40 text_underline color_rules_nine">Рекламная площадка</p>
                    </div>
                    <div class="product__list_block-item">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_24 text_underline color_rules_three">Помогает в короткие сроки находить новых сотрудников, клиентов и партнеров</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block intro__text_block_subservice">
                <div class="text__wrapper text__wrapper_subservice padding_none">
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Корпоративный сайт подойдет компаниям любого размера
                                и сферы бизнеса, которые хотят рассказать о своем бренде
                                в интернете, поддержать имидж компании, привлечь
                                и удержать пользователей, информировать клиентов
                                о предстоящих акциях и скидках.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- structure -->

<section class="slider padding_top_130 structure sozd_kororat_site">
    <div class="container container_one">
        <div class="structure__blocks korporat_site_structure__blocks">
            <div class="structure__block">
                <p class="slider__subtitle p2_black padding_bottom_10">структура</p>
                <h2 class="h2_black padding_title_60">Структура</h2>
                <div class="structure__block_title">Чаще всего при создании корпоративного сайта придерживаются следующей структуры:</div>
                <ul>
                    <li>Главная</li>
                    <li class="structure-list__2">Каталог</li>
                    <li class="structure-list__3">О компании</li>
                    <li class="structure-list__4">Новости компании</li>
                    <li class="structure-list__5">Контакты и реквизиты</li>
                    <li class="structure-list__6">Ссылки на страницы в социальных сетях</li>
                </ul>
                <p class="structure__block_price">Стоимость разработки корпоративного сайта
                    в Краснодаре зависит от срочности разработки, количества страниц, шаблонного или кастомизированного дизайна и многих других факторов.</p>
            </div>
            <div class="korporat_site_product">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient3.png" alt="img" class="korporat_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient3-1090.png" alt="img" class="korporat_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient3-768.png" alt="img" class="korporat_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient3-375.png" alt="img" class="korporat_site_product_img">
            </div>
            <p class="structure__block_price_media">Стоимость разработки корпоративного сайта
                в Краснодаре зависит от срочности разработки, количества страниц, шаблонного или кастомизированного дизайна и многих других факторов.</p>
        </div>
    </div>
</section>


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!-- the main tasks list -->

<section class="margin-top-30 sozd_korporat_site">
    <div class="container">
        <p class="product__list-subtitle p2_black">стоимость услуг</p>
        <h2 class="h2_black subservice_task-title padding_bottom_55">В стоимость всегда входят следующие услуги:</h2>
        <div class="subservice_task_wrapper subservice_task_wrapper_korporat-site">
            <div class="subservice_task_left">
                <div class="subservice_task_item subservice_task_item_korporat-site">
                    Совместный с клиентом выбор хостинга и доменного имени
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-2">
                    Сбор требований клиента
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-3">
                    Разработка структуры сайта в соответствии с собранными требованиями
                </div>
            </div>
            <div class="subservice_task_right ">
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-4">
                    Дизайн сайта
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-5">
                    Базовые настройки системы управления контентом сайта (CMS)
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-6">
                    Базовые настройки для SEO оптимизации и продвижения
                </div>
            </div>
        </div>
    </div>
</section>

<!-- the main tasks -->

<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_intro">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">задачи сайта</p>
        <h2 class="intro__title h2_grad padding_title_60_40">Какие задачи решит корпоративный сайт:</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site">
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice">Представление информации в консолидированном виде</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>На корпоративном сайте будет собрана информация
                            о компании, предлагаемых товарах и услугах, контакты, отзывы прошлых клиентов.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-5_subservice">Возможность использования маркетинговых инструментов продвижения</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Охватить новые регионы продаж и привлечь клиентов поможет SEO оптимизация и контекстная реклама, которую можно настроить на разработанном корпоративном сайте.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-2_subservice">Представление компании в интернете и развитие имиджа</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>При правильной разработке и грамотном наполнении контентом корпоративный сайт станет отличным маркетинговым инструментом, привлекающим клиентов
                            и увеличивающим продажи.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order6">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-17_subservice">Организовать онлайн-продажи, доставку и возможность самовывоза</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Если при разработке корпоративного сайта Вы добавить модуль каталога в структуру, Вы сможете использовать сайт как инструмент продаж.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-3_subservice">Повышение лояльности и удержание клиентов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Клиенты гораздо более лояльно относятся к тем брендам, которые они знают, за развитием и историей которых могут наблюдать.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order7">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-18_subservice">Создание нового канала сбыта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Этот пункт вытекает из предыдущего: корпоративный сайт может стать инструментом продаж товаров и услуг вашей компании.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-4_subservice">Расширение географии продаж</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>У интернета нет границ и территориальных ограничений, поэтому о Вашем бренде узнают пользователи из других районов, городов и стран.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none korporat_site_order8">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-8.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-19_subservice">Инструмент для получения обратной связи от Вашей аудитории</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>На сайте можно настроить аналитику, благодаря которой Вы сможете отслеживать поведение пользователей, приходящих на сайт, их реакцию на изменения
                            и нововведения.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- developers team -->

<section class="subservice_rules padding_top_130 padding_bottom_150 korporat_site">
    <div class="container">
        <p class="product__list-subtitle p2_black">кто участвует в разработке сайта</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Специалисты, которые участвуют в разработке корпоратив&shy;ного сайта:</h2>
        <div class="subservice_rules_inner padding_title_60 subservice_rules_inner_one">
            <div class="subservice_rules_item subservice_rules_item_media_order">
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Менеджер проекта</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Становится связующим звеном между клиентом и командой разработки.</p>
            </div>
            <div class="subservice_rules_item">
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Дизайнер</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Создает визуальный образ каждой страницы сайта, занимается настройкой удобного пользовательского интерфейса.</p>
            </div>
            <div class="subservice_rules_item subservice_rules_item_media_order3">
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Frontend-разработчик</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Создает функциональную часть сайта, которая видна и доступна пользователям.</p>
            </div>
            <div class="subservice_rules_item">
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Backend-разработчик</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Программирует основной функционал, административную часть сайта.</p>
            </div>
            <div class="subservice_rules_item subservice_rules_item_media_order5">
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Тестировщик</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Проверяет сайт на наличие ошибок разработки и устраняет их.</p>
            </div>
        </div>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer padding_top_60 subservice_rules_wrapper_gradient4">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">На различных этапах разработки корпоративного сайта работают разные специалисты. Для того, чтобы Ваш сайт нашли клиенты, необходимо увеличить видимость сайта в интернете. Для этого используются такие маркетинговые решения, как оптимизация в поисковых запросах (SEO, иногда называют «выведением сайта в топ») и контекстная реклама. Агентство цифрового маркетинга «Веб Фокус» поможет Вам
                        с продвижением сайта и привлечением пользователей.</p>
                </div>
            </div>
            <div class='korporat_site_rules'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient4.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient4-1090.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient4-768.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient4-375.png" alt="" class='korporat_site_rules_img'>
            </div>
        </div>
    </div>
</section>

<?php get_template_part('modules/form_two'); ?>

<!-- algorithm -->

<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_intro ">
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
                        <p class="h3_grad padding_bottom_20 text_underline color-20">Определение целей</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Анализ специфики бизнеса, интересов и потребностей целевой аудитории, конкурентов.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-3_subservice">Составление ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Разрабатывается структура страниц, определяются требования к юзабилити и т. д.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-4_subservice">Разработка прототипов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Проектируется схема расположения блоков и элементов на страницах сайта.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_four">Дизайнерское решение</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Дизайнер отрисовывает страницы по согласованному макету.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Верстка сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Front-end разработчик верстает (кросс-браузерная и адаптивная верстка) сайт.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_sex">Программирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Связывание с CMS и добавление нестандартных модулей, например, встроенный калькулятор.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Наполнение страниц</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Предварительно SEO-специалисты составляют ТЗ на написание текстов для копирайтера.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-8.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Запуск проекта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Подбор домена и хостинга, всестороннее тестирование сайта и передача проекта заказчику.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 padding_bottom_150 korporat_site_subservice_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">развивайте свое представительство</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Создание<br> корпоратив&shy;ного сайта<br> для ведения бизнеса</h2>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex korporat-site-wrapper">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Бизнес постепенно переходит в онлайн-режим. Создание корпоративного сайта становится все более важным этапом для тех, кто готов конкурировать. Перед тем как купить что-то, практически каждый сначала «загуглит» информацию о желаемой покупке если это не касается обычной покупки из продуктового магазина, которые расположены на каждом шагу. Поэтому, чтобы Ваш корпоративный сайт под ключ пользователи видели в ТОПе поисковых систем, стоит подумать о SEO-продвижении.</p>
                </div>
            </div>
            <div class='korporat_site_rules'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/balloon.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/balloon-1090.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/balloon-768.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/balloon-375.png" alt="" class='korporat_site_rules_img'>
            </div>
        </div>
    </div>
</section>



<?php get_footer() ?>