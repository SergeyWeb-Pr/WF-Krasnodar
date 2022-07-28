<?php
/*
Template Name: Создание иллюстрации
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
                <p class="header_link_str_twxt display-none-768">Создание иллюстрации</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание иллюстрации</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Создание иллюстрации </b> – важный компонент общего оформления сайта или корпоративного аккаунта. Оригинальные изображения не только могут придавать яркость контенту, но и мотивировать посетителя на оформление покупки. Агентство «Веб Фокус» оказывает профессиональные услуги по разработке уникального изображения с учетом бизнес-позиционирования и сферы деятельности компании.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">особенности
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Особенности графического дизайна иллюстрации</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Речь идет о соединении художественных начал
                            и коммерческих целей при создании изображения. Графический дизайн, с одной стороны, направлен
                            на взаимодействие с аудиторией, изображение, с другой стороны, подразумевает творческое воплощение идей.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Опытный иллюстратор не просто отлично владеет техникой рисования, он также является грамотным маркетологом.
                            Такие услуги востребованы при создании бренда компании или разработки логотипа.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">создание иллюстрации в бизнесе</p>
                <h2 class="h2_black">Для чего необхо –
                    димо создание иллюстрации
                    в бизнесе</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Для того, чтобы оценить важность данного элемента при создании дизайна, отметим основные функции изображений:</div>
                <ul>
                    <li class="top30">Узнаваемость компании и бренда.
                        <p class="static_list-p">Фирменный стиль состоит не только из логотипа, цвета и шрифтов. В него также входят и создание иллюстрации, которая будет присутствовать на сайте, корпоративных аккаунтах в социальных сетях, визитках. Некоторые крупные организации выбирают основную картинку, которая будет ассоциироваться с компанией, например, символ или персонаж, и в дальнейшем разрабатывают целую серию иллюстраций. Такой подход сохраняет фирменный стиль и не приедается клиентам.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Индивидуальность сайта.
                        <p class="static_list-p">Данная функция наиболее полноценно реализовывается с помощью изображений, сделанных вручную. Посетитель сайта отметит творческий, нестандартный подход разработчиков, выделит вашу компании среди конкурентов.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Описание деятельности организации.
                        <p class="static_list-p">Изображение должно красиво рассказать потребителю о сфере деятельности компании. Доказано, что рисунки, схемы и графики воспринимаются мозгом гораздо эффективнее, чем текстовый материал. Поэтому продуманное изображение может быть в разы важнее для продвижения бизнеса, чем структурированный текст.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Привлечение внимания.
                        <p class="static_list-p">Кричащие заголовки, крупный шрифт перестают воздействовать на потребителя. Альтернативным
                            и действенным способом заинтересовать клиента выступает использование неординарных, ярких иллюстраций, выполненных с учетом современных трендов в веб-дизайне.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient30.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient30-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient30-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient30-375.png" alt="img" class="internet_mag_product_img">
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
        <p class="product__list-subtitle p2_black">дизайн иллюстрации</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Выберите подходящий дизайн иллюстрации</h2>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Для того, чтобы изображение выполняло свою функцию (привлекало внимание клиентов, мотивировало на заключение сделки и т.д.), прежде всего важно правильно определиться с его видом:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color5">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Для оформления меню;
                        </div>
                        <div class="subservice_task_item">
                            Стандартное меню (горизонтального или вертикального типа), с одной стороны, понятно посетителю страницы, но, с другой стороны, может выглядеть обыденно. Проиллюстрировав пункты, веб-дизайнер придаст сайту оригинальность, сможет привлечь внимание клиента.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color6">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Для объяснения порядка работы;
                        </div>
                        <div class="subservice_task_item">
                            Чтобы доступно и наглядно описать этапы работы при выполнении заказа, достаточно нарисовать каждый этап, изобразить картинки в виде схемы. Чаще всего подобное объяснение требуется в узкопрофильных компаниях, где рабочие процессы могут быть непонятны клиентам: компьютерные технологии, промышленность, производство, медицина.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            История создания компании, биография основателя;
                        </div>
                        <div class="subservice_task_item">
                            Добавление личного контента всегда повышает уровень доверия к компаниям, а значит способствует увеличению продаж. Знакомство с потенциальными заказчиками важно не только для личного аккаунта. Добавление иллюстраций в данный раздел корпоративного сайта позволит наглядно продемонстрировать, как развивалась компания,
                            как формировался бренд, какие трудности преодолел основатель на пути к успеху.<br><br>

                            СОВЕТ: востребованным вариантом изложения историй и интересных рассказов о деятельности фирмы являются комиксы.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color2">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Рассказ о сотрудниках;
                        </div>
                        <div class="subservice_task_item ">
                            Клиенту важно знать, кто именно будет выполнять заказанную услугу. На сайте можно разместить
                            фото сотрудников с текстовым описанием
                            их квалификации, уровня образования, опыта
                            работы. Однако, не все работники соглашаются на использование личных фотографий для публичного размещения. Креативные предприниматели заказывают индивидуальные шаржи, которые
                            в уместной юмористической форме характеризуют команду.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color7">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Комические картинки.
                        </div>
                        <div class="subservice_task_item ">
                            Несмотря на то, что данная разновидность иллюстраций не несет сильной смысловой нагрузки, она активно используется маркетологами.
                            Такой подход вызывает положительные эмоции
                            и расслабляет посетителя страницы, что влияет
                            на лояльность к компании.
                        </div>
                        <div class="bitrix_media__subtitle margin_bottom_40">Также изображения можно классифицировать
                            в зависимости от способа создания:</div>
                        <div class="subservice_task_wrapper margin_bottom_60">
                            <div class="subservice_task_left subservice_task_left_new">
                                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue2 margin_bottom_20">
                                    Нарисованные вручную (например,
                                    с использованием цифрового планшета);
                                </div>
                                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue2 margin_bottom_20">
                                    С помощью векторной графики.
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">где заказать</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Где заказать иллюстрацию для бизнес-аккаунта или сайта</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Найти исполнителя на бирже фриланса.
                        </div>
                        <div class="subservice_task_item">
                            Преимущество данного варианта – низкая стоимость работы. На биржах берут заказы начинающие дизайнеры, которые, как правило, не имеют опыта
                            и соответствующего образования. Поэтому результат не всегда отвечает требованиям оригинальности, соответствует пожеланиям заказчика.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Обратиться в веб-агентство.
                        </div>
                        <div class="subservice_task_item">
                            Цена за работу опытного дизайнера в разы превосходит расценки фрилансеров. Плюсами данного заказа выступает итоговый результат, когда создание иллюстрации в полной мере выполняет свои функции, увеличивает посещаемость сайта
                            и количество продаж.<br><br>

                            Достоинство сотрудничества с агентством –
                            это наличие правового договора, ответственности исполнителя при невыполнении заказа.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Самостоятельная разработка дизайна.
                        </div>
                        <div class="subservice_task_item ">
                            На помощь бизнесменам, которые решили разработать дизайн без привлечения третьих
                            лиц, приходят приложения и программы. Итоговая картинка не будет отличаться оригинальностью
                            в исполнении, так как за основу берутся однотипные шаблоны. Сэкономив деньги,
                            вы потеряете время: даже примитивные приложения требуют усилий, чтобы разобраться
                            в их функционировании.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">преимущества</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Преимущества профессиона&shy;льного<br> дизайна иллюстрации</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Многие предприниматели учитывают расходы на работу веб-дизайнера при формировании рекламного бюджета. </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Сотрудники агентства «Веб Фокус» разрабатывают дизайн иллюстраций, которые привлекают потенциальных клиентов
                            и помогают в продвижении бизнеса. Для уточнения порядка работы, стоимости и сроках вы можете оставить заявку
                            на нашем сайте.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Потребность в обращении к профессионалам компании «Веб Фокус» объясняется следующими причинами:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Престиж и узнаваемость сайта или аккаунта компании. Авторские изображения вызывают расположение посетителей, которые в первую очередь оценивают страницу
                    с визуальной точки зрения. Шаблонные картинки, скаченные из Интернета, сделают сайт скучным и неотличимым
                    от страниц конкурентов;
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    Повышение конверсии. Продуманная и разработанная картинка не только привлечет внимание клиентов,
                    но и замотивирует на совершение покупки.
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>