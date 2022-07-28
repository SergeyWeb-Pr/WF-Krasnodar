<?php
/*
Template Name: Сайт медицинской организации
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
    <div class="container medical_site">
        <div class="header__title header__title_subservice header__title_subservice_one">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Разработка государственного сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Сайт медицинской организации</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Сайт<br> медицинской организации</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">важные моменты создания медицинского сайта</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Важные моменты в процессе создания медицин&shy;ского сайта</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание медицинского сайта требует индивидуального подхода. При оформлении аналогичных веб-страниц важна достоверность размещаемых материалов. Немыслимо
                            создавать интернет-площадку для частной клиники,
                            прибегая к традиционным маркетинговым мероприятиям.
                            Реализация медицинских услуг не должна ассоциироваться
                            с назойливостью, ведь речь идёт о здоровье, а это важный аспект для каждого человека.
                            Оформление сайтов
                            с медицинским подтекстом в нашей компании, производится основываясь на нравственных принципах, мы размещаем исключительно проверенные материалы, которые предоставлены нам медицинским учреждением,
                            либо лечащим врачом.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Первым делом мы тщательно изучаем материалы медицинского ресурса, осваиваем медицинскую
                        и смежные с ней отрасли, находим главные проблемы пациентов клиники или лечащего врача. Только после этих манипуляций, мы начинаем планировать состав страниц и наполнение контента. Во время работы над веб-страницей, мы сосредоточенно упорядочиваем информацию и размещаем на страницах ресурса,
                        так, чтобы предотвратить любую неточность, которая может неблагоприятно сказаться на репутации клиники.
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

<!--form -->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>



<!-- доделать цифры -->

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">особенности</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Особенности разработки</h2>
        <div class="preview__block">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Разработка медицинских сайтов имеет ряд особенностей. Для начала это многофункциональность, которая включает в себя:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="text__wrapper">
            <div class="subservice_task_wrapper subservice_task_wrapper-margin med_org_wrapper">
                <div class="subservice_task_left subservice_task_left_info-site">
                    <div class="subservice_task_item list-numbers rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Перечень услуг с подробной информацией и ценовой политикой учреждения.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-2 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Профили лечащих врачей, к которым можно записаться на прием онлайн.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-3 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Информацию о методиках лечения и технического оснащения клиники.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-4 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Каталог медикаментов и оборудования с возможностью заказа в режиме онлайн.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-5 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Оперативная обратная связь после заполнения формы для записи к врачу.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-6 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Персональная страничка с «личным кабинетом» для каждого пациента.</p>
                    </div>
                </div>
                <div class="subservice_task_right ">
                    <div class="subservice_task_item list-numbers number-7 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Публикации о симптомах и способах лечения заболеваний.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-8 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Последние открытия и новости медицинской сферы.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-9 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Ближайшие события и проведение акций в клинике.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-10 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Комментарий наших пациентов.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-11 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Рабочий график медучреждения и часы приема специалистов.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-12 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Контактные данные и интерактивная карта Краснодара.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider padding_top_130 structure med_org">
    <div class="container container_one">
        <div class="structure__blocks">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black padding_bottom_40">Преимущества нашей компа&shy;нии перед конкурентами</h2>
                <div class="static_list-title">Мы создаём ресурсы медицинской направленности на протяжении нескольких лет, поэтому ознакомлены с тонкостями, которые нужно учитывать при разработке медицинских сайтов. Предлагаем подробнее ознакомиться с причинами, нам доверять.</div>
                <ul>
                    <li class="top30">Опыт создания сайтов медицинской тематики
                        <p class="static_list-p">На рынке мы не один год и знаем, как создавать
                            и раскрутить медицинские сайты. Нам известны все законодательные требования к ресурсам такого плана. Многолетняя работа с медицинскими сайтами научила нас просчитывать успешность методов работы и добиваться положительного результата с первого раза.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Тактика совокупности
                        <p class="static_list-p">Наша работа с интернет-ресурсом не останавливается после создания. Мы знаем, как важно держать марку
                            и наполнять ресурс актуальной информацией.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Связь со вспомога&shy;тельными инструментами
                        <p class="static_list-p">Для максимальной отдачи от сайта и удобного использования ресурсом, нужна проработанная связь со вспомогательными инструментами. Такими как услуги страховых компаний – для медицины это всегда актуально. Данную услугу легко организовать.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4">Расчёт стоимости
                        <p class="static_list-p">Моментальный расчет цен за услуги и симптомчекеры, наверняка заинтересуют Ваших клиентов. Имеем опыт создания систем расчёта.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5">Личный доступ
                        <p class="static_list-p">Создание медицинского сайта, сложно представить без «кабинета пациента». К тому же это очередной повод напомнить клиенту о его важности. Довольный клиент всегда готов продлевать сотрудничество.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto product_list_medical">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient9.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient9-1090.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient9-768.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient9-375.png" alt="img" class="product_list_medical_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Обширная информация о клинике и доступно изложенные материалы, порождают доверие потенциальных клиентов. Наша задача – грамотно скоординировать процесс и предложить огромное количество вариантов для скорейшего решения проблемы. Заказав разработку у агентства «Веб Фокус» Вы получите результат, на который рассчитывали.</p>
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

<section class="product__list padding_top_130 padding_top_78_1440 display-none">
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

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">виды</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice max-width800">Виды медицин&shy;ских сайтов</h2>
        <div class="preview__block padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">От вида медицинского учреждения зависит дальнейшая разработка сайта клиники. В зависимости от вида учреждения у нас заказывают следующую разработку:</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one margin_bottom_40">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Разумеется, мы готовы выслушать Ваши предложения и скорректировать наш план. Персональный подход к заказчику – еще одно преимущество сотрудничества с «Веб Фокус». Создание медицинского сайта с нашей помощью обеспечит Вам комфортную работу и привлечение новых клиентов.</p>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site med_intro_media">
                <div class="intro__text_item max-width_none margin_top-90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice">Веб-ресурсы многопрофильных клиник</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Наиболее распространённые случаи. Здесь собраны предложения специалистов всех направлений. Наша цель – корректно разместить материалы на сайте так, чтобы посетители могли легко перейти по ссылке.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none margin_bottom_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Площадки узконаправленных клиник</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Клиники одного профиля требуют специфической работы для подготовки веб-страницы. Мы обещаем разобраться
                            в предложенных услугах и добиться максимальной отдачи от интернет-ресурса.</p>
                    </div>
                </div>

                <div class="intro__text_item max-width_none  margin_top-90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-15_subservice">Ресурсы сетевых клиник</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>У Вас множество адресов и отделений, но небольшое поступление заказов? Мы сумеем использовать информацию на ресурсе таким образом, чтобы заказчики могли без труда отыскать нужный филиал.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none margin_bottom_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Веб-страницы косметологических кабинетов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Веб-ресурс изначально имеет целевую аудиторию, поэтому важно уделить внимание визуалу и подходу к функционалу.</p>
                    </div>
                </div>

                <div class="intro__text_item max-width_none margin_top-90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Сайты стоматологий</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Отличаются повышенной конкуренцией, требуют нестандартного принятия решений. Разработанный нами ресурс, будет выполнен успешнее одинаковых сайтов конкурентов.</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Сайты женских консультаций</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Здесь важен учет потребностей клиенток, советуем уделить внимание полезности и общедоступности веб-страницы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>