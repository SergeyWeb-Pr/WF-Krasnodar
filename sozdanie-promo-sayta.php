<?php
/*
Template Name: Создание промо-сайта
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
                <p class="header_link_str_twxt display-none-768">Создание промо-сайта
                </p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1">Создание<br> промо-сайта</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Создание промо-сайта</b> понадобится в случае желания владельца бизнеса раскрутить бренд. Эстетичные страницы веб-ресурса способны заинтересовать покупателя и подтолкнуть к покупке или запомниться посетителю, создав узнаваемость компании. Дизайн в денном случае играет главную роль, он должен быть лаконичен, но при этом приветлив и задавать юзеру настроение, строить ассоциацию с брендом, вызывать положительные эмоции. Мы займёмся созданием рабочего веб–ресурса для Вашего бизнеса.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">виды рекламы</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Подробнее о виде рекламы</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_50">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Промо–сайт представляет собой страницу в сети интернет, целью которой является продвижение товара или услуги одной компании. Такой приём оказывается действенным методом рекламы. Как показывает практика, продажи товаров компаний с применением такого типа раскрутки возрастают, а бренд становится более узнаваем.
                            Компания «Веб Фокус» занимается созданием эффективного интернет­-ресурса. Результат нашего труда приносит заказчику прибыль и повышает доверие покупателей к бизнесу. Разработка промо-сайта будет выгодна как малому, так и крупному бизнесу. Обычно к созданию ресурса такого вида приходят уже при наличии основного. Корпоративный сайт или интернет-магазин также можно заказать у команды «Веб Фокус». </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Мы подготовим веб­-страницы с соблюдением единого корпоративного стиля, добьёмся интуитивности интерфейса, сделаем ресурс привлекательным для посетителя.
                        Промо-сайт более привлекателен с точки зрения рекламы, нежели другие виды веб–страниц. Они могут содержать демонстрационные видеоролики, полное описание товара, специальные необычные моушн-
                        элементы способные привлечь внимание будущего клиента. Меньше официальности и больше настроения характерная черта такого вида веб–страницы. Всё это привлекает посетителя, вызывает положительный отклик и создаёт компании имидж.</p>
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

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 promo_site_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">пункты</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Пункты влияющие<br>
            на будущую конверсию</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание сайта должно выполняться с учётом критериев повышающих его показатели. Рекламная веб-страница должна выполнять свою функцию – призывать посетителя
                            к выполнению целевого действия.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Грамотно сделанные сайты повышают количество продаж товара и заказов услуг. Мы учитываем пункты, влияющие
                        на будущую конверсию:</p>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-1_subservice padding_bottom_20 h3_grad">Навык заинтересовать покупателя</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Навык доносить до будущего клиента информацию о продукте. Заинтересовать предложением и подтолкнуть к покупке</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-2_subservice h3_grad">Оригинальность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание промо сайта должно включать в себя оригинальные элементы дизайна, обязательно содержать логотип. Дизайн должен подчёркивать выгоду предложения и запоминаться. Расположение элементов играет важную роль.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_title_60_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-3_subservice h3_grad width_322 width_initial_768">Уникальность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Ассоциация товара с брендом с помощью уникального дизайна. Оригинальная идея в оформлении или продающем тексте может стать решающим фактором для покупателя.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40">
                    <div class="preview__block_text preview__block_text-2">
                        <div class="grad-line"></div>
                        <p class='p3_white '>Сочетание пунктов повлечёт за собой прямую выгоду. Важно оказать на посетителя впечатление, именно потому мы прорабатываем детали и стремимся к красоте в сочетании
                            с эффектностью. Команда дизайнеров «Веб Фокус» готова разработать веб­-ресурс для Вашей компании, применив все свои навыки демонстрирующие мастерство гарантирующее повышение количества продаж.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 promo_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">особенности</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Создание промо-сайта: особенности</h2>
        <div class="intro__text_block intro__text_block_subservice">
            <div class="text__wrapper text__wrapper_subservice">
                <div class="intro__text width_532 ">
                    <div class="grad-line"></div>
                    <div class='padding_left_16_500'>
                        <p class="intro__text-p p3_white padding_bottom_17_768">Отсутствие стандартности вот что отличает данный вид сайтов от других интернет-ресурсов. Разработка промо-сайта зависит от того, какая цель стоит перед веб-страницей. Если задача продать – внешний вид
                            и структура будет совсем иной, нежели при выполнении задачи по раскрутке бренда. Также зависит, какой товар или услуга предлагается, что тоже влияет на конечный результат создания сайта.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper text__wrapper_subservice">
                <div class="intro__text width_532 ">
                    <div class="grad-line"></div>
                    <div class='padding_left_16_500'>
                        <p class="intro__text-p p3_white padding_bottom_17_768 intro__text-p_media">Дизайнерское решение влияет на структуру будущего сайта. Бывают оригинальные решения, которые соответствуют тематике и способны вызвать «вау-эффект» у посетителя. Бывают ближе к классическим примерам, но их построение тоже зависит от тематики.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper promo_site_intro_wrapper">
            <p class='p3_white padding_top_60 padding_bottom_40 max-width_437 font_weight_500 font-size20'>Выделяют основные отличия, которые характеризуют создание промо-сайта:</p>
            <div class="container container_one_500">
                <div class="text__wrapper">
                    <div class="subservice_task_wrapper">
                        <div class="subservice_task_left max-width_437 margin_right_163">
                            <div class="subservice_task_item list-numbers numb1-blue">
                                <p class="subservice_task_text subservice_task_text_info-site">Нестандартная идея в дизайне, необычное расположение элементов.</p>
                            </div>
                            <div class="subservice_task_item list-numbers numb2-green">
                                <p class="subservice_task_text subservice_task_text_info-site">Диалог с посетителем с помощью моушн-элементов.</p>
                            </div>
                        </div>
                        <div class="subservice_task_right max-width_437">
                            <div class="subservice_task_item list-numbers numb3-purple">
                                <p class="subservice_task_text subservice_task_text_info-site">Соответствие запросу целевой аудитории.</p>
                            </div>
                            <div class="subservice_task_item list-numbers numb4-mint">
                                <p class="subservice_task_text subservice_task_text_info-site">Насыщенность контентом. Фотографии, видео­-материалы и музыка.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product__list subservice_rules padding_top_130 padding_bottom_130 promo_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">цель</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Цель промо-сайта</h2>
        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer subservice_rules_wrapper_grid">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Цель всей идеи заключается в способности сайта вызвать
                        у посетителя эмоции и подтолкнуть совершить целевое действие. Грамотно созданный сайт может стабильно приносить трафик и конверсии, пока Вы не решите прекратить промо-акцию. Создание промо-сайта поможет Вашему бизнесу раскрутиться, повышая количество продаж и завоёвывая сердца покупателей.
                    </p>
                </div>
            </div>
            <div class='korporat_site_rules'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/bg-party.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/bg-party-1090.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/bg-party-768.png" alt="" class='korporat_site_rules_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/bg-party-375.png" alt="" class='korporat_site_rules_img'>
            </div>
        </div>

    </div>
</section>

<?php get_footer() ?>