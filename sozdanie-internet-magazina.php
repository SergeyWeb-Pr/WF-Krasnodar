<?php
/*
Template Name: Создание интернет-магазина
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
                <p class="header_link_str_twxt display-none-768">Создание интернет-магазина</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1_60 padding_bottom_20_375 padding_top_20_768 padding_bottom_40_768 internet_mag_h1">Создание интернет&#8209;<br>магазина</h1>
            <p class="header_text p3_black header_text_subservice padding_top_45 header_text_subservice_one width_646 width_575_768"><b class="bold">Создание интернет-магазина «под ключ»</b> – витрина Вашего магазина для миллиардной аудитории интернета. Вы получаете стильный, продающий и удобный интернет-магазин с оригинальной презентацией товаров и услуг.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">современный вариант магазина</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Важно!</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Основная сложность при разработке сайта интернет-магазина – это размещение большого количества товаров и описаний к ним в удобном для пользователей виде. Разработка интернет-магазина в первую очередь должна быть направлена на создание удобного и красивого для пользователей интерфейса. </p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Добиться этого можно с помощью грамотно продуманного UX/UI дизайна. UX/UI дизайн включает в себя не только проработку визуального восприятия, но и настройку максимально удобного для пользователей интернет-магазина.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Добиться этого можно с помощью грамотно продуманного UX/UI дизайна. UX/UI дизайн включает в себя не только проработку визуального восприятия, но и настройку максимально удобного для пользователей интернет-магазина.</p>
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
                <h2 class="product__list-title padding_title_60 h2_black width_initial_768 line_height_51_375">Интернет-магазин «под ключ» </br> от «Веб Фокус»</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_108 width_530_768 product__list_item_one padding_bottom_20_500">Выгодная презентация Вашего продукта</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Вы покажете пользователям неограниченное количество товаров и услуг.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_two padding_bottom_20_500">Увеличение продаж и узнаваемости бренда</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Создаем УТП, продающие тексты для клиентов, представляем Ваш бренд с помощью инфографики.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_530_768 product__list_item_three padding_bottom_20_500">Автоматизация бизнес-процессов</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Интернет-магазин – удобный вариант совершения покупок для большинства современных пользователей.</p>
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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img product-img_1 active product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2 product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3 product-img_500">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Виртуальный магазин поможет Вам информировать пользователей лично о новых поступлениях, новостях компании, проведении акций. Вы сможете использовать e-mail рассылку, отправлять клиентам открытки с поздравлениями, предлагать персональные скидки, что не воспринимается большинством пользователей как спам, если сотрудничать с теми, кто разбирается в этом.</p>
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

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black">Интернет-магазин «под ключ»<br> от «Веб Фокус»</h2>
                <ul>
                    <li class="top30">Выгодная презентация Вашего продукта
                        <p class="static_list-p">Вы покажете пользователям неограниченное количество товаров и услуг.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Увеличение продаж и узнаваемости бренда
                        <p class="static_list-p">Создаем УТП, продающие тексты для клиентов, представляем Ваш бренд с помощью инфографики.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Автоматизация бизнес-процессов
                        <p class="static_list-p">Интернет-магазин – удобный вариант совершения покупок для большинства современных пользователей.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice margin_left_25">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/pebbles.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/pebbles-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/pebbles-768.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/pebbles-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Виртуальный магазин поможет Вам информировать пользователей лично о новых поступлениях, новостях компании, проведении акций. Вы сможете использовать e-mail рассылку, отправлять клиентам открытки с поздравлениями, предлагать персональные скидки, что не воспринимается большинством пользователей как спам, если сотрудничать с теми, кто разбирается в этом.</p>
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

<section class="intro intro_subservice padding_bottom_intro padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">разработка интернет-магазина</p>
        <h2 class="intro__title h2_grad padding_bottom_40  padding_top_10 width_1139 width_590_768 intro__title_subservice">Для чего Вам нужна разработка интернет-магазина?</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color_rules_eight padding_bottom_20 h3_grad">Небольшой штат сотрудников. </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>При правильном походе к разработке интернет-магазина, у Вас пропадет необходимость содержать целый штат сотрудников. Достаточно нанять несколько сотрудников контакт-центра и курьеров для доставки заказанных товаров.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_seven h3_grad">Экономия на аренде помещения.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание интернет-магазина в Краснодаре избавит Вас от необходимости арендовать складские и торговые площадки.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_four h3_grad width_initial_768">Расширение географии продаж. </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Ваши потенциальные клиенты – пользователи интернета со всего мира. Если Вы готовы отправлять товары почтой или курьерами за пределы своего города, то перед Вами откроется аудитория всего мира.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_one h3_grad">Сравнительно небольшие затраты для начала бизнеса.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>В сравнении с арендой, наймом сотрудников, оплатой коммунальных платежей – стоимость разработки интернет-магазина значительно выгоднее, чем содержание магазина в режиме офлайн.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>


<section class=" intro_subservice  padding_bottom_0_intro">
    <div class="container">
        <p class="product__list-subtitle  p2_black">из чего состоит интернет-магазин</p>
        <h2 class="intro__title h2_black padding_bottom_40 width_245_375 padding_top_10 width_1139 width_590_768 h2_black">Из чего состоит хороший интернет&#8209;магазин?</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_50 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1_black.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Каталог товаров.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Самый необходимый раздел, ради которого создается любой интернет-магазин.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2_black.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline h3_black_300 width_289_375 line_height_35_375">Строка для поиска товаров и услуг.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Зачастую пользователи приходят на сайт с конкретным запросом и не хотят пролистывать весь каталог в поисках необходимого товара. Найти конкретную вещь или заказать услугу им поможет строка поиска.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice padding_bottom_34_375 intro__text_item_subservice_three padding_bottom_40_768 intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3_black.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline h3_black_300 width_initial_768 width_289_375 line_height_35_375">Описание характеристик товара.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Многие пользователи жалуются, что боятся совершать покупки в интернете из-за недостаточного количества информации о товаре. Чтобы избежать подобной проблемы, нужно добавить подробное описание товара.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_imp padding_bottom_0 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4_black.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline h3_black_300 width_289_375 line_height_35_375">Отзывы предыдущих покупателей.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black width_328_500'>Этот раздел вызывает доверие пользователей и уверенность, что они покупают реальный товар, который уже подошел кому-то другому.</p>
                    </div>
                </div>

                <div class="intro__text_item_subservice padding_top_10_375 intro__text_item_subservice_five padding_top_50 intro__text_item_subservice_five-5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5_black.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline h3_black_300 line_height_35_375">Форма для онлайн-заказа или обратной связи. </p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black width_328_500'>Пользователи хотят иметь возможность не просто посмотреть товары, но и сразу оформить доставку понравившегося товара или оставить заявку на обратный звонок для уточнения деталей.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">алгоритм работы</p>
        <h2 class="intro__title h2_grad padding_bottom_40  padding_top_10 width_1139 width_590_768 intro__title_subservice">Алгоритм работы</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color_rules_one padding_bottom_20 h3_grad width_300_375">Предпроектные работы</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Обозначаются цели проекта и намечаются варианты как реализовать идеи заказчика. Анализируется специфика рынка бизнеса клиента, конкуренты, обговариваются детали работы над проектом, изучается поисковый спрос на тематику Вашей продукции и услуг для выбора эффективного плана работы с учетом обозначенных сроков на разработку.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-8_subservice h3_grad">Разработка прототипа и составление технического задания</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Проектирование интерфейса и детальное продумывание дизайна сайта. Составление и согласование технического задания для дальнейшей работы над проектом. Выбирается более подходящая платформа для решения Ваших бизнес-задач.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_bottom_40_768 intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_seven h3_grad width_initial_768">Разработка дизайна сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>На этом этапе дизайнер работает над уникальной дизайн-концепцией для каждой страницы интернет-магазина. Когда макеты дизайна с оригинальной подачей продукта и с учетом стилистики бренда будут согласованы с заказчиком, они передаются верстальщику.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_three h3_grad">Запуск проекта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Верстка, настройка CMS, наполнение контентом, доработка функционала (расширенный функционал по управлению товарами, настройка динамических фильтров и т.д.), тестирование (выявление ошибок и их исправление), настройка безопасности и отладка – и это не все, что происходит на этом этапе.</p>
                    </div>
                </div>

                <div class="intro__text_item_subservice intro__text_item_subservice_five padding_title_60_40 intro__text_item_subservice_five-5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-6_subservice h3_grad">Продвижение сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Совершенствование проекта: внутренняя техническая SEO-оптимизация, запуск контекстной рекламы или SMM-продвижение, email-маркетинг. К систематическим работам над сайтом также относится обновление контента для повышения позиций в поиске Яндекс и Google, расширение функционала для удобства пользователей и т. д.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class=" intro_subservice  padding_bottom_intro padding_top_130">
    <div class="container">
        <p class="product__list-subtitle padding_bottom_10 p2_black">безукоризненный результат</p>
        <h2 class="intro__title h2_black padding_title_60 padding_bottom_40_768 width_300_375  width_1139  h2_black">Цена создания интернет-магазина зависит </br> от многих факторов:</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two ">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_40_768_important padding_title_60_40 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">

                        <p class="text_underline  padding_bottom_20 h3_black_300 line_height_36">Количество </br> размещаемых товаров.</p>

                        <p class='p3_black'>Если у Вас крупный интернет-магазин с тысячами товарных позиций и их подробным описанием, то цена такого сайта будет выше, чем создание небольшого интернет-магазина.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_bottom_40_768_important padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">

                        <p class="padding_bottom_20 text_underline h3_black_300 line_height_36">Количество разделов сайта.</p>

                        <p class='p3_black'>Мы можем разработать сайт только с базовыми разделами: каталог, срока поиска, оформление заявки и обратная связь. Также, можем предложить разработку более функционального онлайн-магазина, где кроме основных разделов будут разделы с новостями, акциями, кабинет пользователя и многое другое, что Вы захотите добавить в свой интернет-магазин.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_bottom_40_768_important intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">

                        <p class="padding_bottom_20 text_underline h3_black_300 line_height_36 width_initial_768">Общее количество затраченных часов команды.</p>

                        <p class='p3_black'>Включает в себя все предыдущие пункты. Агентство интернет-маркетинга «Веб Фокус» всегда предоставляет подробную разбивку по количеству часов, затраченных на конкретные задачи.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_40_768_important padding_title_60_40 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <p class="padding_bottom_20 text_underline h3_black_300 line_height_36">Сложность дизайна.</p>
                        <p class='p3_black width_328_500'>Мы реализуем Ваши эксклюзивные идеи или возьмем за основу пример сайта конкурента, стоимость разработки будет зависеть от выбранного Вами дизайна сайта.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="subservice_rules  padding_bottom_130 internet_mag">
    <div class="container">
        <p class="product__list-subtitle p2_black">cовершенствуйте свой бизнес</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black font_size_35 padding_top_10  width_586">Совершенствуйте свой бизнес</h2>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Думайте над новыми путями развития бизнеса? Создание интернет-магазина «под ключ» – тот инструмент, который стабильно приносит прибыль многим бизнесменам. Как плюс такого варианта можно выделить отсутствие затрат на аренду помещения под склад, то есть Вы экономите. В то же время помните, что разработка интернет-магазина «под ключ» – это не конец. Только постоянная работа над сайтом сделает его эффективным инструментом продаж.</p>
                </div>
            </div>
            <div class='subservice_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rules-6.png" alt="" class='hidden_768 show_500'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/rules-7.png" alt="" class='show_768 hidden_500'>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>