<?php
/*
Template Name: Экспресс-аудит

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
                <p class="header_link_str_twxt">Экспресс-аудит
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Экспресс-аудит
            </h1>
            <p class="header_text p3_black header_text_subservice">Экспресс-аудит – это начальный анализ сайта, в ходе которого проверяются основные поисковые характеристики ресурса и выявляются базовые недочеты внутренней и внешней оптимизации кода. Поверхностный аудит платформы дает возможность лучше узнать работу ресурса клиента, чтобы в дальнейшем сформировать более точное коммерческое предложение.
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


<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 bitrix_media ekspr_correct">
    <div class="container">
        <div class="concept_media3">
            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/gif_eksaudit.gif" alt="" class="concept_img_media">
        </div>
        <div class="product__list-wr">
            <div class="product__list_left">
                <div class="concept__img3">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/gif_eksaudit.gif" alt="" class="concept__img-2 concept__img-seo">
                </div>
            </div>
            <div class="product__list_right">
                <p class="intro__subtitle subtitle p2_white">о компании</p>
                <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768">Определим причину сбоев в работе сайта за считанные дни
                </h2>
                <div class="preview__block">
                    <div class="text__wrapper">
                        <div class="preview__block_text preview__block_text-1">
                            <div class="grad-line"></div>
                            <div class="preview_display_block">
                                <p class="col-text-2--p p3_white margin_30_768">При проведении экспресс-аудита затрагиваются технические, поисковые, маркетинговые аспекты работы сайта, а также его юзабилити. К тому же он позволяет определить:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="intro__wrapper visible">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="preview__block preview__block2">
                    <div class="text__wrapper">
                        <div class="preview__block_text preview__block_text-1">
                            <div class="grad-line"></div>
                            <div class="preview_display_block">
                                <p class="col-text-2--p p3_white margin_30_768">При проведении экспресс-аудита затрагиваются технические, поисковые, маркетинговые аспекты работы сайта, а также его юзабилити. К тому же он позволяет определить:
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Эффективность ресурса для пользователя.
                        </p>
                        <p class="p3_white">Насколько хорошо пользователи видят ресурс, какую позицию он занимает в поисковых системах Яндекс и Google на текущий момент;
                        </p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Актуальность дизайна.
                        </p>
                        <p class="p3_white">Нужно ли улучшить дизайн сервиса, адаптировать его под мобильные устройства и браузеры, если были выявлены неполадки. Возможно, посадочная страница Вашего ресурса долго загружается, если заходить на нее через мобильный телефон. В России в 2019 году мобильный трафик увеличился на 30,6% по сравнению с 2017 годом. Поэтому важно, чтобы мобильная версия работала исправно;
                        </p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Прогноизруемые результаты продвижения.
                        </p>
                        <p class="p3_white">Прогнозные результаты SEO-продвижения. Возможно, бизнес не востребован в интернете, тогда SEO-оптимизация ресурса не даст результатов.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">этапы</p>
                <h2 class="h2_black">Показания для экспресс-аудита

                </h2>
                <div class="product__list_column-text-2 padding_top_40">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Заказав экспресс-аудит сайта в Краснодаре в компании «Веб Фокус», Вы можете сэкономить деньги. <br><br>
                        Экспресс-аудит стоит проводить, если:
                    </p>
                </div>
                <ul>
                    <li class="top30">Нужен быстрый анализ;
                        <p class="static_list-p">Вы обращаетесь к SEO-специалисту в первый раз с новым веб-сайтом. Понимаете, что сервис работает не так, как бы Вам хотелось, но не уверены, что есть ошибки, которые требуют глубокого анализа;
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Ограничены денежные ресурсы;
                        <p class="static_list-p">Обязательно нужно повысить эффективность работы ресурса, но не хватает средств или руководители не хотят их выделять, так как считают, что анализировать сервис не нужно;
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Важны сроки проведения.
                        <p class="static_list-p">Важны сроки проведения аудита. Нужно срочно добиться определенного уровня работы веб-сайта, но нет понимания, что не так и нужно быстро выяснить причины сбоев. Экспресс-аудит проводится в течение нескольких дней.
                        </p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient48.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient48-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient48-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient48-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">С помощью экспресс-анализа выявляют только поверхностные и явные ошибки технической, поисковой и маркетинговой сторон работы портала. Поверхностный аудит не позволяет обнаружить скрытые недочеты, воздействие которых заметно спустя определенный промежуток времени наблюдения. Однако, экспресс-аудит – это хороший старт для усовершенствования проекта. Также результатов начального анализа бывает достаточно для лендингов.
                            </p>
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

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 wordpress_product_list_media product__list_correct">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">характеристики</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Какие характеристики и показатели можно оценить с помощью экспресс-анализа сайта</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Хоть экспресс-аудит и не дает полной картины проблем, которые мешают проекту приносить Вам желаемый доход, но он поможет выяснить, по каким основным признакам он отстает от конкурентов. Первоначальный анализ интернет-сервиса позволяет измерить следующие показатели:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper visible">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site">
                <div class="intro__text_item max-width_none intro__text-none">
                    <div class="intro__text_item-wrapper intro__text_item-wrapper-top">
                        <p class="p3_white p3__ital">Характеристика</p>
                        <p class="p3_white p3__ital">Сущность характеристики</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper intro__text_item-wrapper-top">
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice correct_color1">Индексация сайта.</p>

                        <p class="p3_white">Показатель, который определяет, какое количество страниц должно быть у Вашего проекта. Величина зависит от вида площадки, если это интернет-магазин, то за основу берется информация об ассортименте товаров и услуг. Если полученный индекс не соответствует этой информации, то это значит, что есть проблемы с видимостью веб-сервиса в поисковых системах или со структурой платформы. Мы дадим рекомендации по улучшению индексации проекта, предложим макет новой конструкции Вашего ресурса;</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven correct_color2">Привлекательность текстового контента и заголовков. </p>

                        <p class="p3_white">Проверим, не дублируются ли фрагменты одного и того же текста на разных страницах веб-сайта. Также проанализируем эффективность заголовков title и h, используются ли они по назначению, удостоверимся, что они не переспамленные, в них не употребляются одни и те же слова и фразы слишком часто;</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color-2_subservice correct_color3">Скорость загрузки.</p>

                        <p class="p3_white">Этот показатель влияет на поведение покупателей. Чем он выше, тем больше вероятность, что клиенты останутся на Вашем сайте, а не уйдут к конкурентам;</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice correct_color4">Поведенческие показатели пользователей.</p>

                        <p class="p3_white">Поведенческие показатели пользователей: отказы, глубина просмотра и время, проведенное на онлайн-площадке. Отказы показывают количество людей, которые покинули ресурс сразу с посадочной страницы или просмотрели только одну страницу. Чем их меньше, тем лучше. Глубина просмотра – количество страниц, которые просмотрел пользователь за одно посещение. Если глубина просмотра высокая, значит посетителя интересует информация на сайте. То же самое касается и времени, проведенного пользователем на платформе. Плохо, когда клиент проводит на ресурсе мало времени, в этом случае нужно поработать на контентом, возможно, он не интересен пользователям.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight correct_color5">Ссылочная масса.</p>

                        <p class="p3_white">Это показатель, который помогает продвигаться сайту в поисковой выдаче. Однако, внешние ссылки на ресурс могут размещаться не только на авторитетных порталах, но и на некачественных веб-сервисах, спамные ссылки. Они, наоборот, опускают онлайн-платформу вниз по поисковым запросам.</p>
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


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor ekspr_correct">
    <div class="container">
        <p class="product__list-subtitle p2_black">выгода</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Быстрый результат по выгодной цене</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Экспресс-аудит сайта поможет устранить грубые ошибки работы ресурса <br><br>
                            Экспресс-аудит поможет Вам узнать свой проект получше и разобраться, какой величины должны быть поисковые и технические показатели, чтобы Ваш сайт был на шаг впереди конкурентов.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Заказывая экспресс-аудит у компании «Веб Фокус» в Краснодаре, Вы получаете подробный отчет, в котором содержатся:
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_task_wrapper margin_top_90">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color5">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title p7-color5">
                            Показатели.
                        </div>
                        <div class="subservice_task_item">
                            Величина основных показателей и характеристики, которые влияют на продажи Вашего проекта;

                        </div>
                    </div>
                </div>
            </div>

            <div class="subservice_task_right subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color11">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title p7-color11">
                            Ошибки.
                        </div>
                        <div class="subservice_task_item">
                            Ошибки сайта, которые не дают ему эффективно работать и быть привлекательным для Ваших клиентов;

                        </div>
                    </div>
                </div>
            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color12">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title p7-color12">
                            Рекомендации.
                        </div>
                        <div class="subservice_task_item ">
                            Подробные рекомендации, которые помогут исправить недочеты и сделать Ваш ресурс удобным для пользователей. Они станут покупателями и принесут большую прибыль.

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>