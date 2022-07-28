<?php
/*
Template Name: Дизайн
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

    <div class="container">
        <div class="header__title header__title_subservice">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Дизайн</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Дизайн</h1>
            <p class="header_text p3_black header_text_subservice">Не важно, что рассматривается, фирменный стиль или веб-дизайн, Россия – это страна талантливых людей и быстро развивающегося бизнеса. Не только Москва демонстрирует быстрые показатели роста бизнес проектов, а также усиленными темпами развивается регионы России (Сочи, Краснодар, Краснодарский край). Тут как нигде поражают уникальными дизайнерскими решениями и используют разнообразные средства рекламы и продвижения товаров и услуг.</p>
        </div>
        <div class="header__info header__info_subservice margin_top_55 margin_bottom_155">
            <a href="" class="header-btn p_btn header-btn_subservice ">Узнать больше</a>
        </div>
        <div class="header_backgr_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgr/design_backgr.png" alt="img" class="">
        </div>

    </div>

</header>

<section class="portfolio padding_bottom_150 padding_bottom_121_1440">
    <div class="container">
        <div class="portfolio__blok ">
            <?php
            $posts = get_posts(array(
                'numberposts' => 6,
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
        <p class="preview__subtitle padding_bottom_10 p2_white">главная информация
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Веб-дизайн студия на страже Вашего стиля</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Не важно, что рассматривается, фирменный стиль или веб-дизайн, Россия – это страна талантливых людей и быстро развивающегося бизнеса. Не только Москва демонстрирует быстрые показатели роста бизнес проектов, а также усиленными темпами развивается регионы России (Сочи, Краснодар, Краснодарский край). Тут как нигде поражают уникальными дизайнерскими решениями и используют разнообразные средства рекламы и продвижения товаров и услуг.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Сайт с продуманной логической структурой и свежим дизайном, вот что нужно компании, чтобы выделиться среди конкурентов. Веб-ресурс становится главным источником информации, еще одним инструментом продаж через поисковые запросы пользователей и проводником к продвижению аккаунтов в социальных сетях.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Сайт с продуманной логической структурой и свежим дизайном, вот что нужно компании, чтобы выделиться среди конкурентов. Веб-ресурс становится главным источником информации, еще одним инструментом продаж через поисковые запросы пользователей и проводником к продвижению аккаунтов в социальных сетях.</p>
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

<section class="subservice_rules padding_top_130 vizitki_subservice_rules">
    <div class="container">
        <p class="product__list-subtitle p2_black">правила</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Что нужно для веб-дизайна?</h2>
        <div class="subservice_rules_inner padding_title_60">
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_six"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Постановка задачи</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Задача веб-дизайна – это познакомить пользователя со страницей визуально, так как первое впечатление – определяющее для дальнейшего положительного влияния на конверсию и поведение читателя веб-ресурса. Товар, который лежит на полке магазина, оценивается в первую очередь по упаковке. Покупатель оценивает качество материала, цвет, шрифт нанесенного текста. Той же оценкой подвергается и просматриваемый сайт. Веб-ресурс должен быть правильно структурно представленным, а также визуально читаемым. Последнее свойство обеспечивает создание веб-дизайна сайта.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_seven"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Правильный веб-дизайн</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Хороший и правильный веб-дизайн сайта – это уже половина пути к успеху бизнеса. Разработать сайт с таким веб-дизайном, который будет нравиться всем пользователям невозможно. Веб-ресурс должен быть популярным среди целевой аудитории. При создании сайта с оригинальным веб-дизайном «под ключ», необходимо держать постоянную связь с заказчиком. Пожелания клиента и консультация дизайнера помогут получить отличный результат и создать красивый и узнаваемый веб-сайт.</p>
            </div>
        </div>
    </div>
</section>

<!--form -->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 ">
    <div class="container container_one_500 preview__block">
        <div class="preview__item-left preview__item-left-one">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/Frame4--one.jpg" alt="img" class="">
        </div>
        <div class="preview__item-right">
            
            <div class="preview__item-right-wr">
                <div class="preview__item-left preview__item-left-two">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/Frame4--two.jpg" alt="img" class="">
                </div>
                <div class="asdas">
                    <p class="preview__subtitle padding_bottom_10 p2_white">заказать дизайн
                    </p>
                    <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Заказать дизайн</h2>
                </div>
            </div>
            <div class="preview__block padding_title_60 padding_52_1440">
                <div class="text__wrapper">
                    <div class="preview__block_text preview__block_text-1">
                        <div class="grad-line"></div>
                        <div class="preview_display_block">
                            <p class="col-text-2--p p3_white margin_30_768">Если юридическое или физическое лицо хочет заказать разработку веб-дизайна сайта, в первую очередь необходимо определится с целями, структурой и ценой дизайн-проекта. Время меняется, сегодня веб-дизайн уже не является дорогим удовольствие для собственника сайта. Реализация веб-дизайна – обязательное условие успешного бизнеса, так как позволяет привлечь пользователя при присмотре страницы сайта. К задаче веб-дизайнера относится также аналитика и грамотное структурирование информации на сайте.</p>
                            <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Веб-дизайн студия расширяет присутствие онлайн. Одного работающего сайта недостаточно. Для роста узнаваемости бренда нужно разработать фирменный стиль, а баннеры, презентации, инфографика помогут привлекать внимание потенциальных покупателей и поддерживать заинтересованность клиентов.</p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper preview_text_hidden_one">
                    <div class="preview__block_text preview__block_text-2">
                        <div class="grad-line"></div>
                        <p class='p3_white '>Веб-дизайн студия расширяет присутствие онлайн. Одного работающего сайта недостаточно. Для роста узнаваемости бренда нужно разработать фирменный стиль, а баннеры, презентации, инфографика помогут привлекать внимание потенциальных покупателей и поддерживать заинтересованность клиентов.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">необходимые требования для создания веб-дизайна сайта</p>
                <h2 class="h2_black">Требования к веб-дизайну</h2>
                <ul>
                    <li class="top30">Читаемость текста
                        <p class="static_list-p">Предлагаемый сайт должен быть читабельным у пользователей. Слишком длинные фразы, запутанный текст может отпугнуть читателя. Пользователь ищет понятную и логичную информацию. Здесь учитывается мнение целевой аудитории. Один текст, строгий и структурированный подойдет для бизнеса, а другой, развернутый – для статьи о семейных отношениях. Это условие принимается во внимание при разработке веб-дизайна сайта.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Привлека&shy;тельность
                        <p class="static_list-p">Сайт должен быть привлекательным. Пользователь вернется на удобный и красивый веб-ресурс, чтобы найти необходимую информацию. Дизайнеры при разработке веб-дизайна предоставляют услугу трехмерное моделирование и используют в работе флеш-технологии.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Соблюдение требований
                        <p class="static_list-p">Веб-ресурс создается согласно современным требованиям. Читатель осуществляет поиск информации в Интернете также путем применения мобильного устройства (ноутбуки, планшеты, смартфоны). Собственнику сайта необходимо создать веб-ресурс с таким веб-дизайном, который будет обеспечивать правильный просмотр сайта на гаджете.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient14.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient14-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient14-768.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient14-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Чтобы увеличить количество пользователей сайта, получать доход от просмотра, разместить веб-ресурс в Интернете недостаточно. Необходимо постоянно улучшаться, соответствовать времени и пожеланиям пользователей.</p>
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

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">визуализируем лучшие идеи и продумываем UX-дизайн</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Эффективная реклама для бизнеса
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Когда потребитель заходит на сайт, даже не с целью покупки, его ждет дизайн, который вызывает доверие и смотрится лучше главных конкурентов. Так формируется узнаваемость бренда – пользователи, даже если не становятся клиентами, у них формируется мнение о компании с хорошей репутацией.
                        <br><br>
                        Сайт, где проработан веб-дизайн, не пропустит на первые позиции Яндекса, поэтому нужно большее, чем запуск и техническая поддержка. Веб-ресурс нуждается в стратегии продвижения, чтобы оставаться конкурентоспособным. А что как нельзя лучше сработает продвижения через социальные сети. Необходимо выбрать эффективный канал общения с потенциальными клиентами и организовать воронку продаж.
                        <br><br>
                        Мы, компания «Веб Фокус», готовы оказать услугу по созданию, разработке веб-дизайна сайта с нуля, а также усовершенствованию веб-ресурса путем внедрения наилучших из доступных технологий дизайна сайтов.

                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient15.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient15-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient15-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient15-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient16.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient16-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient16-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient16-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Заказать дизайн могут компании различной сферы деятельности. Дизайн фирменного стиля или сайта должен перекликаться с созданным образом компании.
                            <br><br>
                        «Как повысить узнаваемость бренда?» – этот вопрос возникает у компании, когда бизнес хочет перейти на новый уровень. Для этого нужно больше, чем шаблонное решение. При разработке веб-дизайна учитываются тенденции, правила композиции, предпочтения заказчика, ассоциации аудитории с товаром, услугой. Сайт позиционирует себя как витрина, поэтому при создании макета прорабатываются блоки взаимодействия с посетителем. Через данные свойства можно работать с ресурсом, а также влиять на читателя психологически, но при этом не вызывать раздражение. Продумывается каждый шаг пользователя, и ни один блок не выходит из стилистики брендбука.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="margin-top-30 bitrix_media padding_bottom_media bitrix_media_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">профессиональные возможности студии веб-дизайна</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Наши услуги</h2>
        <div class="subservice_task_wrapper subservice_task_wrapper--sb subservice_task_wrapper_korporat-site padding_bottom_30">
            <div class="subservice_task_row">
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv1.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Дизайн сайта</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv2.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Разработка макета сайта</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv3.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Редизайн сайта</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv4.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Разработка логотипа</div>
                </div>
            </div>
            <div class="subservice_task_row">
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv5.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Разработка инфографики</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv6.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Разработка фирменного стиля</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv7.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Баннеры для сайта</div>
                </div>
                <div class="subservice_task--item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/serv/serv8.jpg" alt="" class='subservice_task--img'>
                    <div class="subservice_task--subtitle">Разработка презентации</div>
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_150 intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Специалисты компании «Веб Фокус» проконсультируют о технологиях эффективного маркетинга при внедрении веб-дизайна. Предоставят необходимую информацию по ценам за разработку и создание привлекательного дизайн-проекта.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Для оценки сайта пользователю потребуется только 3-5 секунд. Веб-дизайн помогает составить общее впечатление об интернет-ресурсе. Компания, которая хочет развиваться, быть интересной и узнаваемой у пользователей, нуждается в продвижении, а также в разработке хорошего веб- дизайна.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>