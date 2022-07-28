<?php
/*
Template Name: Оформление раздаточного материала
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
                <p class="header_link_str_twxt">Дизайн</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Оформление раздаточного материала</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Оформление раздаточного материала</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">главное
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Как оформляют раздаточный материал</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Подготовка раздаточного материала требует грамотного профессионального подхода, также, как и реализация
                            иных маркетинговых способов продвижения. Агентство
                            «Веб Фокус» сможет сделать яркое и оригинальное оформление рекламной продукции с учетом специфики бизнеса и пожеланий клиента.</p>
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

<section class="slider padding_top_130 structure internet_magazin internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black">Преимущества раздаточных материалов</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Бизнесмены отдают предпочтение данной разновидности рекламы по нескольким причинам:</div>
                <ul>
                    <li class="top30">Доступная стоимость;
                        <p class="static_list-p">Цену за единицу раздаточного товара стоит сравнивать с той прибылью, которую обеспечит клиент, заключивший сделку, благодаря рекламе.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Оперативность изготовления;
                        <p class="static_list-p">Сроки важны в любом бизнесе. Оформление материала не требует значительных временных затрат и не повлияет на скорость бизнес-процессов. Так, например, тираж листовок можно подготовить в течение двух дней;</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Универсальный характер.
                        <p class="static_list-p">Данный вариант рекламы подходит для продвижения бизнеса в каждой сфере предпринимательства. Важно выбрать оптимальную разновидность раздаточного товара и способ ее реализации. Масштабы компании также не играют роли: материалы актуальны
                            и для крупных брендов, и для начинающих проектов.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient32.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient32-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient32-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient32-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Просчитав цену за одну единицу раздаточного товара и прибыль, которую принесет новый клиент, можно сделать вывод о выгодности таких составляющих рекламного бюджета.
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



<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>

<section class="display__none product__list intro intro_subservice padding_bottom_150 padding_top_130 bitrix_media">
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

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">преимущества</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Преимущества раздаточных материалов</h2>
        <div class="bitrix_media__subtitle padding_bottom_40">Бизнесмены отдают предпочтение данной разновидности рекламы по нескольким причинам:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color8">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Доступная стоимость;
                        </div>
                        <div class="subservice_task_item">
                            Цену за единицу раздаточного товара стоит сравнивать с той прибылью, которую обеспечит клиент, заключивший сделку, благодаря рекламе.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Оперативность изготовления;
                        </div>
                        <div class="subservice_task_item">
                            Сроки важны в любом бизнесе. Оформление материала не требует значительных временных затрат и не повлияет на скорость бизнес-процессов. Так, например, тираж листовок можно подготовить
                            в течение двух дней;
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color5">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Универсальный характер.
                        </div>
                        <div class="subservice_task_item ">
                            Данный вариант рекламы подходит для продвижения бизнеса в каждой сфере предпринимательства. Важно выбрать оптимальную разновидность раздаточного товара и способ ее реализации. Масштабы компании также не играют роли: материалы актуальны и для крупных брендов,
                            и для начинающих проектов.
                        </div>
                    </div>
                </div>

                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Просчитав цену за одну единицу раздаточного товара
                            и прибыль, которую принесет новый клиент, можно сделать вывод о выгодности таких составляющих рекламного бюджета.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    Просчитав цену за одну единицу раздаточного товара
                    и прибыль, которую принесет новый клиент, можно сделать вывод о выгодности таких составляющих рекламного бюджета.
                </p>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">эффективный раздаточный материал</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Как подготовить эффективный раздаточный материал</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Не каждый буклет или листовка замотивируют потенциального клиента на совершение покупки. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Результативным будет раздаточный материал, который соответствует следующим критериям:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Оригинальность.
                        </div>
                        <div class="subservice_task_item">
                            Потребителю недостаточно яркой обложки
                            и многообещающего слогана, который не сможет выделить ваш рекламный продукт из массы аналогов. Внимание потребителя привлекает нестандартная форма и размер листовки, элементы уместного юмора, запоминающиеся графические изображения и т.д.;
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Полезность.
                        </div>
                        <div class="subservice_task_item">
                            Клиенты оценят не просто рекламную листовку,
                            а экземпляр с дельными советами об эксплуатации товара или рекомендациями о проведении услуги. Также востребованным вариантом является ненавязчивая реклама на календарях, табличках
                            на ручку двери, картах города, пробниках продукции;
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Качество.
                        </div>
                        <div class="subservice_task_item ">
                            Оформление раздаточного материала должно отличаться не только продуманным содержанием (текст, изображение, стиль), но и безупречной реализацией: качественная бумага, безопасные края изделия, нетоксичные краски.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 padding_bottom_150">
    <div class="container">
        <p class="product__list-subtitle p2_black">способы</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10 max-width650">Способы распространения раздаточных материалов</h2>
        <div class="subservice_rules_wrapper margin_bottom_60">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Одна из услуг агентства «Веб Фокус» – оформление раздаточного материала, которое способствует продвижению бизнеса. Для получения подробной консультации, уточнения стоимости заказа достаточно оставить заявку на сайте.</p>
                </div>
            </div>
        </div>
        <div class="subservice_rules_inner subservice_rules_inner-new">
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_info_i"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Массовая раздача;</p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Осуществляется с привлечением промоутеров, которые предлагают листовки в проходимых местах, торговых центрах, остановках общественного транспорта. Задача данного способа распространения заключается в информировании максимального количества людей об открытии новой компании, об акциях, уникальных предложениях.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_sale_i"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Выделение целевой аудитории;</p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Примером может выступать предоставление материала
                        на выставках, фестивалях, посетители которых так или иначе заинтересованы в покупке. Цель рекламной продукции носит иной характер: довести клиента до заключения сделки, усилив интерес с продукции. Одних листовок для этого недостаточно.
                        В данном случае целесообразно профессионально подойти
                        к разработке полноценного каталога, брошюры, буклета. Данные образцы наглядны, информативны и объемны: аудитория изучает их в спокойной обстановке после мероприятия, на котором получены материалы.</p>
                </div>
            </div>
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_support_hands"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Дополнение к покупке.</p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Рекламный продукт предоставляется клиенту после покупки товара и направлен на повышение лояльности к компании для совершения дальнейших заказов. Для достижения данной цели подходит сувенирная продукция, например, настенные календари или брендированные блокноты.</p>
                </div>
            </div>


        </div>
    </div>
</section>

<?php get_footer() ?>