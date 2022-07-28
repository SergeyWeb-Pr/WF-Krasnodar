<?php
/*
Template Name: Создание сайта-каталога
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
                <p class="header_link_str_twxt display-none-768">Создание сайта-каталога</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1">Создание сайта-каталога</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Заказать сайт-каталог</b> – продуманный ход для создания долгосрочных отношений с клиентами. Создание сайта-каталога схоже с созданием интернет-магазина, однако в нем не реализована функция мгновенного добавления товара в корзину и не обязательна регистрация перед заказом. Здесь клиент должен оставить заявку на понравившийся товар в форме обратной связи, или позвонить по контактным номерам, или отправить заявку на почту. Затем менеджер связывается с заказчиком и обсуждает условия сотрудничества.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">оставьте конкурентов позади!</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Попробуйте рассказать больше о компании пользователя</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Наличие сайта-каталога у компании позволяет ненавязчиво заинтересовать и подтолкнуть к покупке клиента. На таком сайте пользователям представлена информация о товарах, услугах, сервисах в структурированном виде, что всегда радует клиентов. Посетители сайта-каталога знакомятся
                            с описанием товаров, отзывами, инструкциями, характеристиками и в случае заинтересованности обращаются к менеджерам или переходят в интернет
                            -магазин для оформления покупки.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Понятный и удобный дизайн сайта-каталога должен соответствовать пожеланиям ваших клиентов и сфере бизнеса. Зайдя на такой сайт, пользователь должен легко находить всю интересующую информацию о понравившемся товаре. Детальное описание каждого продукта с качественными фотографиями, – обязательный атрибут сайта-каталога.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Понятный и удобный дизайн сайта-каталога должен соответствовать пожеланиям ваших клиентов и сфере бизнеса. Зайдя на такой сайт, пользователь должен легко находить всю интересующую информацию о понравившемся товаре. Детальное описание каждого продукта с качественными фотографиями, – обязательный атрибут сайта-каталога.
                    </p>
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
                <h2 class="product__list-title padding_title_60 h2_black width_390_768">Сайт-каталог: плюсы разработки</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_one padding_bottom_20_500">Рост спроса и доверия</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Вы удобным для современных пользователей способом рассказываете о своем продукте.
                        </p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_two padding_bottom_20_500">Развитие бизнеса</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Сайт продвигается в поисковых системах, формируется корпоративный имидж.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_three padding_bottom_20_500">Увеличение прибыли</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Улучшение имиджа благодаря работе профессионалов по разработке сайта – залог увеличения прибыли.
                        </p>
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
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">После создания сайта-каталога товаров нужно анализировать действия пользователей на сайте. Когда потребности клиентов вырастут, можно добавить функциональность интернет-магазина.
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
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Заказ лендинга в Краснодаре – это популярная у собственников бизнеса услуга, которая нужна любому бизнесу, если необходимо увеличить продажи, повысить узнаваемость бренда и конверсию пользователей, создать доверие к бренду.</p>

                    </div>

                </div>
                <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                    <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- анимированный список -->

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media catalog_media_slider">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black">Сайт-каталог: плюсы разработки</h2>
                <ul>
                    <li class="top30">Рост спроса и доверия
                        <p class="static_list-p">Вы удобным для современных пользователей способом рассказываете о своем продукте.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Развитие бизнеса
                        <p class="static_list-p">Сайт продвигается в поисковых системах, формируется корпоративный имидж.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Увеличения прибыли
                        <p class="static_list-p">Улучшение имиджа благодаря работе профессионалов по разработке сайта – залог увеличения прибыли.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient13.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient13-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient13-768.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient13-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">После создания сайта-каталога товаров нужно анализировать действия пользователей на сайте. Когда потребности клиентов вырастут, можно добавить функциональность интернет-магазина.</p>
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

<section class="intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">возможности создания сайта-каталога</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Какие возможно&shy;сти даёт создание сайта-каталога</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-1_subservice padding_bottom_20 h3_grad">Повышает доверие пользователей</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Покупки в интернете давно вошли в нашу жизнь.
                            Но пользователю все равно надо время, чтобы подробнее ознакомиться с товаром или услугой, которые он хочет приобрести, присмотреться, почитать отзывы, сравнить характеристики. С этими требованиями отлично справится разработанный агентством «Веб Фокус» сайт-каталог
                            в Краснодаре.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-2_subservice h3_grad">Простота интерфейса</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Интерфейс сайта-каталога обычно прост, привлекателен
                            и ненавязчив. Благодаря этому пользователи просто заходят посмотреть, что предлагают бренды, а покидают сайт вашими потенциальными клиентами.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_bottom_40_768 intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-4_subservice h3_grad">Привязка к социальным сетям</p>

                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>

                        <p class='p3_white width_328_500'>Сайт-каталог можно привязать к социальным сетям
                            с последующим репостом товаров или услуг в них. Необходимость, обхват и влияние социальных сетей сейчас известно абсолютно всем!
                        </p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-3_subservice h3_grad  width_initial_768">Быстрое внесение изменений</p>
                        <!-- удалила width_322 из параграфа(строка 336) -->
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Заказ сайта-каталога товаров не только привлечет пользователей, но и облегчит работу по администрированию сайта вам или вашим сотрудникам. Грамотно разработанный сайт позволяет легко вносить изменения в размещенную информацию, создавать группы и разделы, например,
                            по производителю или назначению товаров.
                        </p>
                    </div>
                </div>

                <!-- <div class="intro__text_item_subservice intro__text_item_subservice_five padding_title_60_40 intro__text_item_subservice_five-5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-4_subservice h3_grad">Поле для обратной связи.</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Посетитель лендинга должен оставить свои контакты, чтобы Вы или Ваши сотрудники смогли с ним связаться для дальнейшего обсуждения покупки.</p>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">варианты создания сайтов-каталогов</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Популярные варианты<br> создания сайтов-каталогов</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two_m90px">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-10_subservice padding_bottom_20 h3_grad">Создание сайта-каталога продуктов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Если ваш бизнес связан с продажей продуктов, доставкой еды, заказами экзотических фруктов, крафтовыми джемами
                            и другими продовольственными товарами, то заказ сайта-каталога – отличное решение по доступной цене.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color_rules_seven h3_grad">Каталог недвижимости</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Сложно представить услуги по аренде или продаже недвижимости без красиво оформленного сайта-каталога, ведь современный пользователь не станет смотреть квартиру в живую, если не увидит предварительно фото. Более того, недвижимость – это серьезный шаг и крупное приобретение. Никто не покупает квартиры или дома
                            в интернете, поэтому вам будет достаточно только разработки сайта-каталога, без дальнейшего создания интернет-магазина.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-11_subservice h3_grad width_322 width_initial_768">Сайт-каталог туров</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Клиент, который планирует отпуск, хочет подробно рассмотреть фото отеля, ознакомиться с отзывами прошлых посетителей
                            и просто посмотреть красивые картинки, представляя себя под знойным солнцем далекой и теплой страны. Сайт-каталог – идеальное решение для туристического бизнеса.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-7_subservice h3_grad">Сайт-каталог мебели</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Ситуация схожа с сайтом-каталогом недвижимости. Это крупные покупки, которые клиентам сначала надо увидеть на фотографии, почитать характеристики и отзывы и лишь потом они приедут
                            в магазин, чтобы посмотреть и купить выбранный товар.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block intro__text_block_subservice">
                <div class="text__wrapper text__wrapper_subservice">
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Сайт-каталог может быть актуален практически для любой ниши бизнеса. Команда опытных специалистов агентства “Веб Фокус” разработает подходящий именно вашему бренду сайт-каталог.
                            </p>
                        </div>
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


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

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
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Составление плана работ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Изучение потребностей целевой аудитории, особенностей бизнеса, конкурентов.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-8_subservice">Написание ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Продумывание структуры, концепции UX-дизайна, функциональности, фирменных цветов и пр.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Создание прототипов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Разработка макетов страниц на основе предпочтений клиента и специфики бизнеса.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-4_subservice">Дизайн с</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Утвержденный дизайн сайта-каталога передается в работу верстальщику.
                        </p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-6_subservice">Настройка адаптивности</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Разрабатывается адаптивный дизайн, чтобы сайт соответствовал требованиям поисковых систем.
                        </p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-12_subservice">Уникальный контент</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Наполнение сайта уникальными оптимизированными seo-текстами для привлечения большего трафика.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice">Программирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Настройка сайта и добавление возможности сортировки товаров, сравнения, поиска и т. д.
                        </p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-8.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-5_subservice">Запуск сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Тестирование сайта, размещение проекта на хостинге, регистрация домена, установка счетчиков.
                        </p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<!-- site-catalog-main-blocks -->

<section class="intro intro_subservice padding_bottom_150 padding_top_130 catalog_intro_subservice">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">важные разделы сайта-каталога</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Самые важные разделы<br> при разработке<br> сайта-каталога</h2>
        <div class="intro__wrapper catalog_intro-wrapper">
            <div class="catalog_intro-wrapper_block">
                <div class="catalog_intro-wrapper_block_item">
                    <p class="text_underline color-13_subservice padding_bottom_20 h3_grad">Качественные фото </p>
                    <p class='p3_white'>Основная идея сайта-каталога – показать покупателю товар таким образом, чтобы он захотел его приобрести.</p>
                </div>
                <div class="catalog_intro-wrapper_block_item">
                    <p class="padding_bottom_20 text_underline color-14_subservice h3_grad">Подробное описание
                        и характеристики товара или услуги</p>
                    <p class='p3_white'>Клиент должен понимать, что ему предлагают.</p>
                </div>
                <div class="catalog_intro-wrapper_block_item">
                    <p class="padding_bottom_20 text_underline color-4_subservice h3_grad width_initial_768">Раздел с отзывами</p>
                    <p class='p3_white'>Покупателю очень важно видеть, что товар или услуга приобретались кем-то ранее. Во-первых, это говорит
                        о востребованности и качественности товара.
                        Во-вторых, повышает доверие к продавцу.</p>
                </div>
            </div>
            <div class="catalog_intro-wrapper_block">
                <div class="catalog_intro-wrapper_block_item">
                    <p class="padding_bottom_20 text_underline color-1_subservice h3_grad">Контактная информация или ссылка на интернет-магазин</p>
                    <p class='p3_white width_328_500'>Клиент рассмотрит товар, ознакомиться
                        с характеристиками и отзывами, дальше ему надо понимать, куда обратиться, чтобы приобрести понравившиеся позиции.</p>
                </div>
                <div class="catalog_intro-wrapper_block_item">
                    <p class="padding_bottom_20 text_underline color-6_subservice h3_grad">Кнопка для добавления товаров к сравнению</p>
                    <p class='p3_white width_328_500'>Клиенты часто обращаются к сайтам-каталогам, чтобы без спешки сравнить товары, которые им интересны, что достаточно сложно сделать в офлайн-магазине. Дайте вашему покупателю такую возможность, добавьте возможность сравнения на сайт.</p>
                </div>

            </div>
        </div>
    </div>
</section>



<section class="subservice_rules padding_top_130 padding_bottom_130">
    <div class="container">
        <p class="product__list-subtitle p2_black">заинтересовывайте пользователя</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Заинтересо&shy;вывайте пользователя</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Вы получаете полноценный инструмент продаж, который поможет конкурировать на рынке. <b class="bold">Заказать сайт-каталог</b> стоит, когда вы хотите выигрышно продемонстрировать свой продукт. Ваш большой список товаров предстанет перед пользователями в удобном систематизированном виде. Разделы будут разделены на подразделы, добавятся программные модули (фильтры) для упрощения выбора пользователем товара – все это поможет сайту оставаться полезным.
                    </p>
                </div>
            </div>
            <div class='subservice_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/gradient1.jpg" alt="" class='hidden_768 show_500'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/gradient1-mini.jpg" alt="" class='show_768 hidden_500'>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>