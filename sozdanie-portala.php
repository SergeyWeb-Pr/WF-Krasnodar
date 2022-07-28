<?php
/*
Template Name: Создание портала
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
                <p class="header_link_str_twxt display-none-768">Создание портала</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one header__title_text_sozd-portala">Создание портала</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">создание портала это -</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Что такое создание <br>портала? </h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание портала – это разработка платформы, которая позволяет узнать последние новости и прочитать интересные статьи, посмотреть видео, фото и изучить цены на товары
                            в каталоге. Сайт портал, цена которого зависит от объема контента и сроков на разработку, содержит разнообразный спектр полезных ресурсов, имеет быструю навигацию
                            и выделяется привлекательным дизайном. Почему удобно ходить за покупками в супер- и гипермаркет? Ответ прост – там можно найти все необходимое, не теряя драгоценное время.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">В крупном торговом центре представлены много магазинов с различными товарами и услугами, размещены кафе, кино, детские игровые комнаты.
                            Все, что нужно, в одном месте. Также и в Интернете. Пользователь хочет зайти на такой сайт, где найдет много полезной информации, не теряя время на лишний поиск, используя другие браузеры.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>В крупном торговом центре представлены много магазинов с различными товарами и услугами, размещены кафе, кино, детские игровые комнаты.
                        Все, что нужно, в одном месте. Также и в Интернете. Пользователь хочет зайти на такой сайт, где найдет много полезной информации, не теряя время на лишний поиск, используя другие браузеры.</p>
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

<!-- characteristic -->

<section class="slider padding_top_150 padding_bottom_150 characteristic">
    <div class="container container_one">
        <div class="structure__blocks characteristic">
            <div class="structure__block characteristic_block">
                <p class="slider__subtitle p2_black padding_bottom_10">портал – это сайт, но сайт не всегда можно назвать порталом</p>
                <h2 class="h2_black padding_title_60">Характеристика</h2>
                <div class="structure__block_title padding_bottom_10">Сравнительная характеристика этих понятий по некоторым параметрам:</div>
                <ul>
                    <li class="characteristic_block_li_big">Распростра&shy;нен&shy;ность в сети Интернет:</li>
                    <li class="characteristic_block_li_dot">Сайт более распространен&shy;ный веб-ресурс.</li>
                    <li class="characteristic_block_li_dot display-inline-flex">Создание портала – это масштабный процесс. Выбирая сайт портал, цена будет выше на порядок обычного сайта.</li>
                </ul>
                <ul>
                    <li class="characteristic_block_li_big characteristic_li-big-pink">Цели и задачи:</li>
                    <li class="characteristic_block_li_dot characteristic_li-pink">Сайт предоставляет узконаправлен&shy;ную информацию.</li>
                    <li class="characteristic_block_li_dot display-inline-flex characteristic_li-pink">Сайт портал нацелен на помощь пользователю в поиске ответов на интересующие вопросы, применяя ссылки на нужный ресурс.</li>
                </ul>
                <ul>
                    <li class="characteristic_block_li_big characteristic_li-big-purple">Целевая аудитория:</li>
                    <li class="characteristic_block_li_dot characteristic_li-purple">Сайты поддерживают внимание определенной целевой аудитории.</li>
                    <li class="characteristic_block_li_dot characteristic_li-purple">Портал имеет сложную структуру и размещает
                        на своих страницах удобную навигацию, предоставляет доступ к различной информации для широкого круга пользователей. </li>
                </ul>
            </div>
            <div class="characteristic_pic">
                <div class="characteristic_pic_list">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient5.png" alt="img" class="characteristic_pic_list_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient5-1090.png" alt="img" class="characteristic_pic_list_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient5-768.png" alt="img" class="characteristic_pic_list_block">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient5-375.png" alt="img" class="characteristic_pic_list_block">
                </div>
                <div class='product__list_wrapper_flex margin_top_40'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Современные компании постоянно улучшают инфраструктуру, позволяющую использовать сеть Интернет как эффективный инструмент ведения бизнеса. Создание сайта портала дает возможность клиентам компании, ее сотрудникам, получать актуальную информацию, прямой доступ к корпоративным данным, своевременно обрабатывать поступающие заказы. Чтобы создать или заказать сайт портал необходимо предварительно сделать выбор наиболее оптимального варианта и изучить их разновидности.
                            </p>
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

<!--form -->
<?php get_template_part('modules/form'); ?>



<!-- !!!!!!!! -->
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
<!-- !!!!!!!! -->



<!-- why demand -->

<section class="intro intro_subservice padding_bottom_150 padding_top_130 portal_media">
    <div class="container intro_subservice-max-width-h2">
        <p class="intro__subtitle subtitle p2_white">создание портала с нуля</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice ">Почему создание<br> портала востре&shy;бовано?</h2>
        <div class="intro__wrapper intro__wrapper-new">
            <div class="preview__block padding_title_60 padding_52_1440">
                <div class="text__wrapper">
                    <div class="preview__block_text preview__block_text-1">
                        <div class="grad-line"></div>
                        <div class="preview_display_block">
                            <p class="col-text-2--p p3_white margin_30_768">Сайт портал набирает популярность и становится востребованным у читателей и компаний. Сайт и портал некоторые пользователи считают одним и тем же, но это не так. Между собой эти структуры принципиально отличаются.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper">
                    <div class="preview__block_text preview__block_text-2">
                        <div class="grad-line"></div>
                        <p class='p3_white '>Если решение создать или заказать сайт было принято, тогда необходимо в первую очередь изучить разновидности интернет-ресурсов, их характеристики и цену.</p>
                    </div>
                </div>
            </div>
            <div class="intro__wrapper_blocks">
                <div class="intro__wrapper_block portal_block">
                    <div class="portal_block_flex">
                        <p>Разновидность сайта</p>
                        <p class="characteristic_display-none">Характеристика</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal-bold-news portal-bold-p color_rules_four">Новостной, тематический, региональный сайт</p>
                        <p class="portal_block-characteristic">Содержит страницы с короткими и актуальными сведениями, текстами, тематической информацией в структурированном виде.</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal_block-shop portal-bold-p color-16_subservice">Интернет-магазин</p>
                        <p>Продаются товары и услуги, подтверждаются заказы. Для клиента предусмотрен личный контент (кабинет), история покупок, система бонусов и скидок, хиты продаж. На страницах размещены контакты компании, способы оплаты и доставки товара.</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal_block-card portal-bold-p color_rules_two">Сайт-визитка</p>
                        <p>Дополнительный инструмент маркетинга, цель которого получить ответы на вопросы пользователей о бизнесе. Представлены страницы с общим описанием продукции, каталоги, обратная
                            связь.
                            Бюджетный онлайн-ресурс, который может рассказать
                            о деятельности и повысить авторитет.</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal_block-blog portal-bold-p color_rules_sex">Блог</p>
                        <p>Владельцы делятся с читателями целями, новостями, планами. Блог ведет один человек или компания. Собственник такого сайта может привлекать внимание аудитории на определенный продукт.</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal_block-catalog portal-bold-p color_rules_eight">Справочники, каталоги</p>
                        <p>Сайты с доступной справочной информацией, законами, инструкциями. Часто предоставляется ссылка на платные услуги
                            или другие сайты.</p>
                    </div>
                    <div class="portal_block_flex">
                        <p class="portal_block-portal portal-bold-p color_rules_three">Сайт портал</p>
                        <p>Сайт с разнообразным функционалом и активным взаимодействием с аудиторий. Портал сложный веб-проект, создание которого представляет собой трудоемкий и ресурсоёмкий процесс,
                            что отражается на цене за разработку данного интернет-ресурса.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!-- types of portals -->

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">виды</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Виды порталов<br> по назначению</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice">Горизонтальные (мегапорталы)</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Порталы имеют широкую аудиторию пользователей, что оказывает влияние на содержание представляемой информации и услуг (пример Яндекс, Yahoo!). Содержащаяся на сайте портале информация носит общий характер и часто пересекается со сферой деятельности средств массовой информации.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-22">Корпоративные</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Предназначены для сотрудников, клиентов и партнеров одной компании. Созданы специальные персональные профили, по которым пользователи получают круглосуточный доступ к предназначенным ресурсам и приложениям. Клиенты и работники компании используют доступную информацию, с помощью различных приложений, независимо от времени и места пребывания.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Вертикальные</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Данные интернет-ресурсы предназначены для специфических видов рынка и обслуживают аудиторию, которая нацелена на определенный продукт или услугу (промышленные палаты, агентства недвижимости). С каждым годом количество созданных сайтов порталов растет, так как новые рынки товаров и услуг постепенно перемещаются в Интернет.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Структурированный сайт портал позволяет пользователям персонализировать их внешний вид. Кроме обмена информации, в
                            функции управления потоками работ, взаимодействие сайте портале могут быть встроены в рабочих группах и управление контентом в режиме самообслуживания. Портал отличается интерактивной частью. Она вовлекает пользователей на форумы по интересам, для обсуждения насущных вопросов, обмена опытом, анализа отзывов.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Сайт портал создается для продвижения товаров
                            и услуг, бренда. Некоторые порталы работают для средств массовой информации (СМИ). Существуют сайты порталы, которые стремятся повлиять на мнение целевых потребителей, увеличить численность пользователей.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Сайт портал создается для продвижения товаров
                        и услуг, бренда. Некоторые порталы работают для средств массовой информации (СМИ). Существуют сайты порталы, которые стремятся повлиять на мнение целевых потребителей, увеличить численность пользователей.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 padding_bottom_130 portal_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">цена</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Сайт портал: цена</h2>
        <div class="subservice_rules_wrapper_block-flex">
            <div class="subservice_rules_wrapper">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex sozdanie-portala_wrapper-mw548">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">При выборе сайта всегда возникает вопрос: «Сколько он будет стоить?». Много компаний предлагает услугу по разработке, созданию сайта портала «под ключ», который не только соответствует пожеланию заказчика, но также отвечает современным требованиям. Для анализа критерия стоимости необходимо усвоить то, что невозможно сделать качественный продукт по низкой цене. Создать, разработать, продвигать сайт портал – эта процедура трудоемкая и требует дополнительных знаний, умений и навыков.
                        </p>
                    </div>
                </div>
                <div class='portal_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient6.png" alt="" class='portal_rules_logo_pic'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient6-1090.png" alt="" class='portal_rules_logo_pic'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient6-768.png" alt="" class='portal_rules_logo_pic'>
                </div>
            </div>
            <div class="subservice_rules_wrapper subservice_rules_wrapper2">
                <div class='portal_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds.png" alt="" class='portal_rules_logo_pic'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds-1090.png" alt="" class='portal_rules_logo_pic'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/clouds-768.png" alt="" class='portal_rules_logo_pic'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex sozdanie-portala_wrapper-mw548">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Если решение о создании портала уже принято, можно обратиться к специалистам компании «Веб Фокус». Мы поможем в выборе веб-ресурса, проконсультируем о способах продвижения сайта, ценах. Окажем услугу по разработке
                            и усовершенствованию портала, расскажем, как быстрее увеличить прибыль компании.
                            <br><br>
                            Идите в ногу со временем. Будьте на одну ступеньку выше конкурентов. Оставайтесь онлайн с покупателями
                            и пользователями. Создавайте сайты порталы для вашего бизнеса, а мы, компания «Веб Фокус», готовы в этом помочь.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>





<?php get_footer() ?>