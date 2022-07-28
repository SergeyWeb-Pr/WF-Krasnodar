<?php
/*
Template Name: Создание сайта Битрикс
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
                <p class="header_link_str_twxt display-none-768">Создание сайта на Битрикс</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание сайта<br>на Битрикс</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Создание сайта на Битрикс </b>– правильный выбор для B2B-бизнеса </p>
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

<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 bitrix_media">
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

<section class="padding_top_130 structure padding_bottom_130 bitrix_media">
    <div class="container">
        <div class="structure__blocks">
            <div class="structure__block bitrix_structure__block bitrix_structure__block-1090">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black letter-space-2 bitrix_h2-1090">Преимущест&shy;ва платформы Битрикс:</h2>
                <ul>
                    <li class="bitrix_structure-list-1">Удобство
                        <p class="static_list-p">Множество компаний на территории Российской Федерации привлекает именно разработка сайта на Битрикс.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2 bitrix_structure-list-2">Быстрое решение проблем
                        <p class="static_list-p">Платформа Битрикс предоставляет оперативное решение типовых проблем. Блоки онлайн-касс синхронизируются с системами платежей и разными способами доставки.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3">Интеграция с другими социальными сетями
                        <p class="static_list-p">Платформа Битрикс предоставляет возможность использовать на своей базе модули блогов, форумов, разных каталогов интегрирование с ВКонтакте, Instagram и другими социальными сетями, а также другие модули.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 bitrix_structure-list-4">Многопро&shy;фильность
                        <p class="static_list-p">Платформа Битрикс даёт возможность создать как ресурс-визитку, так и крупный Интернет-магазин.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5">Документы предостав&shy;ляются на русском языке
                        <p class="static_list-p">Они находятся в открытом доступе, что упрощает процесс их изучения.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="bitrix_site_product">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient10.png" alt="img" class="bitrix_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient10-1090.png" alt="img" class="bitrix_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient10-768.png" alt="img" class="bitrix_site_product_img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient10-375.png" alt="img" class="bitrix_site_product_img">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('modules/form_two'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>


<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_150 bitrix_media">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">плюсы и минусы</p>
        <h2 class="intro__title h2_grad padding_title_60_40">Создание сайта<br> на Битрикс “+” и “-“</h2>
        <div class="preview__block padding_bottom_40 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="title-24">Плюсы платформы Битрикс:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two_karporat-site">
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice">Платформа комфортна в использовании</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Первым плюсом работы с Битрикс становится удобство работы с ней. От любой из версий Вы получите инструментарий, позволяющий управлять Вашим бизнесом.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-16_subservice">Высокий коэффициент полезного действия</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Платформа Битрикс обладает высоким коэффициентом полезного действия, по сравнению с прочими платформами, что подтверждается проведёнными тестированиями производительности.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice">Курс обучения по использованию платформы</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Когда административная панель вызовет сложности
                            у персонала, они могут ознакомиться с обучающими материалами, предоставленными разработчиками платформы. Эти материалы ответят на интересующие вопросы.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Гарантия безопасности</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Платформа Битрикс имеет в наличии собственную специфическую систему защиты, которая защитит Ваш ресурс. Отражение атак, контролирование файловой системы, а также защита от вирусов обеспечат безопасность Ваших данных и данных клиентов.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none margin-top-60 bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-5_subservice">Известность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Битрикс является распространённой CMS, поэтому наши разработчики уже получили обширный опыт в разработке
                            и выпуске ресурсов на этой платформе.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-11_subservice">Интегрирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Отработанное интегрирование «1С Бухгалтерии».</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Множество разных предложений</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>На ресурсе разработчика всегда находятся вспомогательные блоки, свежие продукты и единственные и неповторимые решения тривиальных проблем. С их добавлением появляется возможность выводить ресурс на уровень выше.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="preview__block padding_bottom_40 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="title-24">Минусы платформы Битрикс:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two_karporat-site">
                <div class="intro__text_item max-width_none bitrix_numb_order2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-15_subservice">Покупка лицензии и её продление</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Первым минусом платформы становится то, что она является платной. Мы тратим деньги на покупку лицензии, а также на ежегодные обновления обеспечения. Можно обойтись покупкой стартового пакета и не тратить финансы на её обновление, но в этом случае Ваш ресурс может перестать работать с прежним коэффициентом полезного действия, едва пройдёт пара лет.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Кропотливость процесса создания ресурса</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Наша команда состоит из профессиональных и многоопытных веб-программистов, но разработка на платформе Битрикс – работа кропотливая и может занять определённый временной промежуток.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-22">Сравнительно медленная работа технической поддержки Bitrix</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Так, для большинства версий Битрикс время ожидания ответа от поддержки может составить более 5 часов после заявления разработчика ресурса.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none bitrix_numb_order2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-23">Многопрофильность платформы</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Может стать и минусом разработки на этой платформе. Не смотря на обучающий материал от разработчиков Битрикс, в ней не всегда можно разобраться.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="margin-top-30 bitrix_media padding_bottom_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">пункты</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Что входит<br> в реализацию проекта?</h2>
        <div class="subservice_rules_wrapper_flex margin_bottom_40">
            <div class="grad-line"></div>
            <div class="subservice_rules_wrapper_flex">
                <p class="title_dark-20">В реализацию проекта группой «Веб Фокус» включается:</p>
            </div>
        </div>
        <div class="subservice_task_wrapper subservice_task_wrapper_korporat-site padding_bottom_30">
            <div class="subservice_task_left">
                <div class="subservice_task_item subservice_task_item_korporat-site margin_bottom_40">
                    Изучение аналитиками проекта и бизнеса, его адаптация.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-2-new margin_bottom_40">
                    Аналитика ниши и конкурентов компании.
                    Она позволит нам создать способный
                    к конкуренции в нише и по максимуму продающий сайт.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-3-new margin_bottom_40">
                    Разработка тестовой версии интернет-магазина,
                    его утверждение и учёт Ваших пожеланий.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-4-new margin_bottom_40">
                    Написание и выборка персонального наполнения, а также семантического ядра для сайта.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-5 margin_bottom_40">
                    Персональное создание дизайна с нуля для веб-ресурса.
                </div>
            </div>
            <div class="subservice_task_right ">
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-6 margin_bottom_40">
                    Адаптивная вёрстка ресурса, которая позволит
                    с комфортом использовать сайт на разнообразных устройствах.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-7 margin_bottom_40">
                    Создание и установка комфортной для использования персоналом административной панели.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-8 margin_bottom_40">
                    Создание, адаптация и установка виртуального консультанта.
                </div>
                <div class="subservice_task_item subservice_task_item_korporat-site korporat-site_numd-9 margin_bottom_40">
                    Дальнейшая техническая поддержка сайта. Мы не собираемся запустить ресурс и бросить Вас наедине с проблемами.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_150 intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">В первую очередь мы проведём исследование ниши,
                            в которой будем работать, а также маркетинговый анализ. Затем последует анализ компаний-конкурентов, создание модели стратегии продаж и постановка целей и задач, которые должны быть выполнены в процессе реализации проекта.
                            Затем мы разработаем семантическое ядро с учётом специфики ниши, а вместе с ним создадим техническое задание для оптимизации поиска ресурса в мобильных поисковых системах и продвижения страниц. Выстроим структуру сайта на Bitrix.
                            Мы создадим единственное
                            и неповторимое торговое предложение. Веб-программисты наиболее благоприятную и комфортную панель навигации. Копирайтеры разработают и напишут продающие тексты, чтобы повысить коэффициент полезного действия сайта
                            и его конверсию. Наши веб-дизайнеры облекут Ваш проект
                            в зазывающую, изысканную и яркую оболочку.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Мы создадим с нуля, а затем адаптируем под запросы клиента каталоги интернет-магазина и меню, наполним сайт по максимуму информативными и полезными для посетителя видео-контентом и фотографиями. Мы проконтролируем наличие технических ошибок в Bitrix, исправим недочёты, внесем необходимые корректировки, отладим работу с серверами, проведем все необходимые для работы сайта тестирования. В наших руках ресурс пройдёт все этапы, начиная от аналитики, заканчивая регулировкой потока заявок и отслеживанием работы сайта на Битрикс.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="concept padding_top_130 padding_bottom_150 bitrix_gif_media">
    <div class="container container_one">
        <div class="concept__wrapper">
            <div class="concept__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_2.gif" alt="" class="concept__img-2">
            </div>
            <div class="concept__list padding-left_40 margin_none">
                <div class="concept__list">
                    <div class="text__wrapper-concept">
                        <div class="concept_media">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_2.gif" alt="" class="concept_img_media">
                        </div>
                        <div>
                            <p class="concept__list_subtitle padding_bottom_10 subtitle p2_white">кто помогает в создании проекта</p>
                            <h2 class="concept__list_title padding_title_60 h2_grad">Кто будет помогать<br class="br_media"> Вам в создании ресурса на платформе Битрикс?</h2>
                        </div>
                    </div>
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white">Мы никогда не бросаем клиента, поскольку дорожим своей репутацией. Проект будет готов в срок.</p>
                        </div>
                    </div>
                </div>
                <p class="concept_title">А работать над ним будут:</p>
                <div class="concept_team">
                    <div class="concept_team_margin">
                        <p>Руководитель проекта, который будет помогать Вам на всех этапах реализации;</p>
                        <p>Программисты-разработчики с опытом работы;</p>
                        <p>Несколько копирайтеров;</p>
                    </div>
                    <div class="concept_team_margin_media">
                        <p>Дизайнеры нашей команды;</p>
                        <p>Верстальщики и аналитики-тестировщики.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>