<?php
/*
Template Name: Редизайн
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
                <p class="header_link_str_twxt display-none-768">Редизайн</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Редизайн</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Времена меняются, люди следуют моде, компании применяют редизайн сайта, логотипа, упаковки. Редизайн – это изменение дизайна на более современный
                    и усовершенствованный.</b></p>
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
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Сущность редизайна</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Мы проводим редизайн в комплексе с продвижением
                            сайта. Предлагаем редизайна сайта отдельно. Обращайтесь
                            к менеджеру «Веб Фокус», который сориентирует по вопросам стоимости и перечня услуг по редизайну.
                            Первое, на что обращает внимание человек, при просмотре страницы
                            или другого опознавательного знака фирмы, это дизайн. Необходимо удержать внимание пользователя на 2-3 секунды, чтобы он его запомнил.
                            Пользователь, которому постоянно показываю одну и ту же картинку, привыкает к ней
                            и перестает замечать. Редизайн сайта, фирменного стиля помогает обновить информацию в памяти. Каждая компания хочет быть уникальной и современной. В этом ей помогает периодический редизайн.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Любая модернизация всегда дается нелегко. Так и перед тем, как заказать редизайн сайта, логотипа или фирменного стиля нужно подойти к этому процессу с большой аккуратностью, чтобы не сделать хуже. Это в дальнейшем скажется на имидже компании.<br><br>

                            Доверить редизайн сайта или фирменного стиля специалистам «Веб Фокус» − значит дать ему новую
                            и успешную жизнь.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Любая модернизация всегда дается нелегко. Так и перед тем, как заказать редизайн сайта, логотипа или фирменного стиля нужно подойти к этому процессу с большой аккуратностью, чтобы не сделать хуже. Это в дальнейшем скажется на имидже компании.<br><br>

                        Доверить редизайн сайта или фирменного стиля специалистам «Веб Фокус» − значит дать ему новую
                        и успешную жизнь.</p>
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

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">возможности редизайна</p>
                <h2 class="h2_black">Возможности редизайна</h2>
                <ul>
                    <li class="top30">Редизайн сайта.
                        <p class="static_list-p">Дизайн веб-ресурса можно изменить по новым
                            веяниям моды. Изменение сайта может последовать
                            за изменением фирменного стиля компании. Редизайн сайта связан с смены цветовой гаммы, элементов управления сайтом, темы страниц используя новейшие разработки в области дизайна.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Изменение логотипа.
                        <p class="static_list-p">Редизайн логотипа проводят на основе старого варианта или совершают полное его изменение. Переработка шрифта, изменение цветовой гаммы, формы под современные требования.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Редизайн персонажа.
                        <p class="static_list-p">Изменить можно полностью персонаж, либо его отдельные признаки. Можно поменять окраску, линии, форму или добавить новые элементы.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Бренда.
                        <p class="static_list-p">Данная процедура получила название «ребрендинг». Она шире обычного редизайна и состоит в структурном изменении политики компании. В ребрендинг входит редизайн логотипа и фирменного стиля.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 structure-list__6-top30">Упаковки.
                        <p class="static_list-p">Каждая компания, которая создает товар, стремится выделиться на рынке. В этом помогает яркая
                            и интересная упаковка. Со временем меняются предпочтения людей, и это оказывает влияние на все предметы вокруг. Дизайнеры проводят редизайн упаковки согласно веяниям времени и пожеланиям заказчика.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient27.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient27-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient27-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient27-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Разработка нового дизайна, а также проведения редизайна сложная и трудоемкая задача. Здесь необходимо определиться, что будет меняться и как это выгодно подать. Будет ли это редизайн сайта, фирменного названия или стиля компании, лучше обсудить со специалистами-маркетологами и дизайнерами.
                                Команда агентства «Веб Фокус» предлагает провести редизайн сайта, фирменного стиля и других атрибутов компании. Мы подскажем, какое изменение поможет улучшить Ваш бизнес и представить его в привлекательном виде.
                                <br><br>
                                Редизайн сайта или фирменного стиля проводят частично (изменяют цветовую гамму или некоторые отдельные элементы), либо полностью. Каждая компания определяет самостоятельно масштабы редизайна.
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
        <p class="product__list-subtitle p2_black">быть в тренде</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Быть в тренде</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Компании ставят перед собой цель привлечь больше клиентов, собственники сайтов – больше пользователей. Оставаться модным и актуальным можно не только с помощью обновления текста и нового товара. Изменять и обновлять необходимо также дизайн и стиль фирмы.
                            Редизайн –
                            это изменение внешнего вида с целью повышения привлекательности.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Веб студии для обновления предлагают провести редизайн сайта, редизайн логотипа, ребрендинг и многое другое. Дизайнер работает совместно с разработчиками
                            и специалистами в области маркетинга. Это помогает
                            создать современную картинку, которую приятно будет просматривать.
                            Новое всегда притягивает, а если оно еще правильно подано и представлено – это гарантирует успех.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Редизайн – это изменение:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Цвета;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Шрифта;
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Стиля;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Графики.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Ребрендинг предполагает обновление не только внешней составляющей, но и изменения направления реализации компании. Это более глубокий и конструктивный процесс. Изменение фирменного стиля и логотипа идет совместно
                            с кардинальной переустановкой действий компании.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!-- <section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">cоздание макета способствует экономии</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 subservice_task-title_one">Создание макета<br> способствует экономии
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            В отсутствии прототипа после проведения работ дизайнером и верстальщиком может оказаться,
                            что в их работу нужно вносить массу правок, что может стоить дополнительных денег. Разработка прототипа
                            сайта поможет избежать таких ситуаций. Разумный предприниматель не станет допускать возможность платить з один продукт двойную цену, а сразу спланирует всё так, чтобы получить задуманный результат.<br><br>

                            Интернет–маркетологи компании «Веб Фокус» займутся разработкой прототипа экономящего время и деньги клиента. Качественно созданный макет повлияет на будущую посещаемость, конверсию и поведенческие факторы посетителей сайта. Макет заложит основы, которые повлияют на удобство веб–страницы для юзера.
                        </p>
                    </div>
                </div>
                <div class="personal_site_rules_logo">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient20.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient20-1090.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient21-768.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient21-375.png" alt="" class="personal_site_rules_logo_img">
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class="personal_site_rules_logo">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient21.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient21-1090.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient20-768.png" alt="" class="personal_site_rules_logo_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient20-375.png" alt="" class="personal_site_rules_logo_img">
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Проработанный до мелочей прототип с задействованием труда профессионалов выступает чертежом, который помогает в разработке интернет–ресурса. Наличие чёткого плана действий для веб–дизайнера сокращает время разработки и помогает получить результат, на который рассчитывает заказчик. Он делает возможным внести правки еще до начала проведения основных работ.
                            <br><br>
                            Имея на руках представление как действовать дальше, веб–дизайнеру остаётся реализовать задумку
                            без затраты времени на продумывание мелочей
                            и согласование их с клиентом. Главный ресурс, который экономит макет – это время, а время, как известно равно деньгам. Он позволяет создать проработанный дизайн, прототип как подробная инструкция для веб–
                            дизайнера. Чем раньше сайт будет создан, тем быстрее
                            к Вам начнут поступать клиенты, привлечённые рекламной в интернете и промо–материалами на сайте.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">перемены согласно времени</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Перемены согласно времени</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Дизайнера, маркетологи предлагают проводить обновление каждые 5-10 лет. Некоторые фирмы в начале своего развития могут менять лого и чаще (1 раз в год). </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Редизайн сайта помогает пользователям оценить фирму свежим взглядом. Изменения логотипа и фирменного стиля привлекает новых клиентов с молодым взглядом.<br><br>

                            Разработка нового дизайна помогает выйти фирме на новый уровень развития.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Редизайн проводят если:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color1">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Дизайн сайта устарел.
                        </div>
                        <div class="subservice_task_item">
                            Развиваются новые технологии в области веб-дизайна. Появляются новые компоненты для удобства просмотра веб ресурса. Применяются новые подходы к демонстрации, при помощи различных функциональных элементов. Редизайн сайта проводят, если интернет-ресурс создан на шаблоне, который не отвечаем современным тенденциям.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color4">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Логотип нуждается в обновлении или полной замене.
                        </div>
                        <div class="subservice_task_item">
                            Редизайн логотипа проводят в случае поиска наиболее удачного решения или обновления внешнего вида, согласно политики компании.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Фирма развивается и осваивает новые рынки.
                        </div>
                        <div class="subservice_task_item ">
                            Компания вышла на новый уровень и готова провести обновление. Она проводит рекламную кампанию,
                            в рамках которой намечен редизайн. Если фирма изменилась или увеличилась – проводят редизайн сайта, логотипа и других компонентов, затрагивающих деятельность компании.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">реализация идеи</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Реализация идеи</h2>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Перед тем, как заказать редизайн сайта, логотипа, необходимо совершить ряд действий, которые помогут правильно сформулировать Ваше видение нового проекта:</div>


        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Сделать анализ веб-ресурса, провести опрос среди пользователей, читателей.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Выявить преимущества и недостатки существующего сайта, логотипа.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Описать аудиторию пользователей, клиентов.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Сформулировать цель внедрения редизайна.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Определить финансовые возможности компании на редизайн сайта, логотипа или иного компонента.
                </div>
            </div>
        </div>


        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Следующим шагом будет обратиться в агентство, которое выполнит все Ваши пожелания. Компания «Веб Фокус» предлагает услугу редизайна сайта, фирменного стиля, персонажа на высоком уровне. Над Вашей задачей будут трудиться специалисты-дизайнеры, разработчики сайтов
                            (при необходимости).</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Последовательность действий:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item margin_none">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Проводим консультацию, где выявляем все детали будущего проекта;
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item margin_none">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Создаем новый макет и согласовываем с заказчиком;
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item margin_none">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Реализуем проект согласно договору;
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item margin_none">
                    <p class="p7 subservice_task_number p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Сдаем клиенту продукт с привлекательным
                            и современным дизайном.
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Мы проводим редизайн в комплексе с продвижением
                            сайта. Предлагаем редизайна сайта отдельно. Обращайтесь
                            к менеджеру «Веб Фокус», который сориентирует по вопросам стоимости и перечня услуг по редизайну.
                            Первое, на что обращает внимание человек, при просмотре страницы
                            или другого опознавательного знака фирмы, это дизайн. Необходимо удержать внимание пользователя на 2-3 секунды, чтобы он его запомнил.
                            Пользователь, которому постоянно показываю одну и ту же картинку, привыкает к ней и перестает замечать. Редизайн сайта, фирменного стиля помогает обновить информацию в памяти. Каждая компания хочет
                            быть уникальной и современной. В этом ей помогает периодический редизайн. </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Любая модернизация всегда дается нелегко. Так и перед тем, как заказать редизайн сайта, логотипа или фирменного стиля нужно подойти к этому процессу с большой аккуратностью, чтобы не сделать хуже. Это в дальнейшем скажется на имидже компании.<br><br>

                            Доверить редизайн сайта или фирменного стиля специалистам «Веб Фокус» − значит дать ему новую
                            и успешную жизнь.</p>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php get_footer() ?>