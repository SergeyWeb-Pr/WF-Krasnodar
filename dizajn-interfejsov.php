<?php
/*
Template Name: Дизайн интерфейсов
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
                <p class="header_link_str_twxt display-none-768">Дизайн интерфейсов</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Дизайн интерфейсов</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">дизайн интерфейсов
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Дизайн интерфейсов</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Дизайн интерфейсов может выступать, с одной стороны,
                            как эффективный маркетинговый инструмент, но, с другой стороны, может привести к потере потенциального клиента. </p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Результат зависит от профессионализма и грамотности при разработке. Агентство «Веб Фокус» занимается разработкой индивидуального дизайна интерфейса для приложений, сайтов, игр, программ.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Результат зависит от профессионализма и грамотности при разработке. Агентство «Веб Фокус» занимается разработкой индивидуального дизайна интерфейса для приложений, сайтов, игр, программ.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">типы прототипов</p>
                <h2 class="h2_black">Актуальные тренды
                    в дизайне интерфейсов</h2>
                <ul>
                    <li class="top30">Полноформатные изображения.
                        <p class="static_list-p">Востребованным способом привлечения внимания посетителя является размещение крупного изображения в качестве фонового элемента страницы. Масштабность компании (например, в сфере производства) можно продемонстрировать полноэкранными видео, которые информируют о самом продукте и процессе его создания.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Вариативный шрифт.
                        <p class="static_list-p">Прослеживается тенденция на использование нескольких сочетающихся шрифтов в рамках одного дизайна. Такой подход позволяет гармонично расставить акценты на детали, разграничить основную
                            и второстепенную информацию.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Ручная прорисовка.
                        <p class="static_list-p">В моду опять вернулся крафтовый формат подачи изображения. Ручная работа позволяет повысить уровень доверия к компании и лояльность посетителей.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Анимация.
                        <p class="static_list-p">Пользуется популярностью ненавязчивый вариант анимации. Во-первых, он разбавляет сложный материал, упрощая его восприятие. Во-вторых, привлекает внимание пользователя.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient24.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient24-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient24-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient24-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Перед дизайнером стоит задача создать не только удобный механизм взаимодействия пользователя и сайта, но и отразить современные тренды.</p>
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
        <p class="product__list-subtitle p2_black">функции и специфика работы</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">UI – дизайнер: функции и специфика работы</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">UI – дизайнер – специалист, который занимается разработкой дизайна интерфейсов. Результат его работы используется
                            при создании сайтов, приложений, программ.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">С практической точки зрения дизайнер выполняет следующие функции:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color1">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Интерактивные изменения;
                        </div>
                        <div class="subservice_task_item">
                            Например, при нажатии на кнопку вызова необходимо проектирование дополнительного элемента, сигнализирующего запуск и выполнение команды пользователя. Чаще всего
                            у первоначального изображения появляется тень, меняется форма или цвет.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Разработка компонентов управления;
                        </div>
                        <div class="subservice_task_item">
                            С помощью созданных кнопок, эффектов, анимации осуществляется изучение и навигация по сайту.
                        </div>
                    </div>
                </div>
                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            ВАЖНО: профессию UI – дизайнера не стоит путать с UX – дизайнером. Последний отвечает за внутреннюю составляющую при создании интерфейса. Он изучает потребности клиентов, продумывает логические цепочки
                            их поведения, анализирует действие посетителей на сайте.
                            <br><br>
                            Первостепенная задача дизайнера заключается в создании удобного интерфейса. Под удобством стоит понимать совокупность следующих характеристик: скорость доступа
                            к нужным элементам сайта, экономия времени посетителя, информативность деталей.
                        </p>
                    </div>
                </div>
            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Адаптивность к разным устройствам;
                        </div>
                        <div class="subservice_task_item ">
                            Большинство пользователей предпочитают изучать не полноформатную версию сайта, а мобильный вариант. Это удобнее и оперативнее, так как телефон всегда под рукой. Поэтому важно грамотно разработать дизайн пользовательского интерфейса для планшета и телефона, при этом не потерять функциональность страницы. В противном случае текст и картинки могут сливаться, что затруднит изучение страницы и приведет к потере потенциального клиента.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color4">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Создание уникального бренда.
                        </div>
                        <div class="subservice_task_item  margin_bottom_40">
                            Специалист играет ключевую роль в разработке оригинального образа, который будет ассоциироваться с компанией. Добавление уникальных деталей, анимации и графики помогает создать выразительную подачу продукта.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    ВАЖНО: профессию UI – дизайнера не стоит путать с UX – дизайнером. Последний отвечает за внутреннюю составляющую при создании интерфейса. Он изучает потребности клиентов, продумывает логические цепочки
                    их поведения, анализирует действие посетителей на сайте.
                    <br><br>
                    Первостепенная задача дизайнера заключается в создании удобного интерфейса. Под удобством стоит понимать совокупность следующих характеристик: скорость доступа
                    к нужным элементам сайта, экономия времени посетителя, информативность деталей.
                </p>
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
        <p class="product__list-subtitle p2_black">как создается дизайн интерфейсов</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Как создается дизайн интерфейсов</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Создание графического дизайна пользовательских интерфейсов в упрощенном варианте можно изложить
                            в последовательной схеме.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">ВАЖНО: грамотный дизайнер также учитывает особенности операционных систем, на которых будет работать пользователь.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Но более важная характеристика заключается
            в возможности взаимодействия с макетом:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color1">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Понять поставленную задачу, продумать концепцию.
                        </div>
                        <div class="subservice_task_item">
                            Специалисту важно иметь четкое представление
                            о том, какие бизнес – цели поставили аналитики-маркетологи, кто является целевой аудиторией сайта, зачем пользователь зашел
                            на страницу.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Разработать черновой вариант.
                        </div>
                        <div class="subservice_task_item">
                            На данном этапе намечается расположение кнопок, подбирается примерная цветовая гамма, подходящие шрифты и изображения. Проще говоря, создается макет будущего интерфейса.
                        </div>
                    </div>
                </div>
            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Утвердить прототип.
                        </div>
                        <div class="subservice_task_item ">
                            Дизайнер демонстрирует пробный вариант проекта для того, чтобы исключить глобальные корректировки в дальнейшем.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color4">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Итоговая проработка
                            и тестирование.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor">
    <div class="container">
        <p class="product__list-subtitle p2_black">советы</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Советы по созданию дизайна графического интерфейса</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Простота и доступность.
                        </div>
                        <div class="subservice_task_item">
                            Речь не идет о примитивной анимации и черно-белых кнопках. Интерфейс должен быть удобным
                            в использовании как для активных пользователей, так и для новичков. Элементы дизайна должны выступать в роли ориентиров на сайте, подсказывать нужные направления. Рекомендуется придерживаться единого стиля в создании интерфейса: схожая цветовая гамма, подбор шрифтов, визуальная иерархия.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сочетание цветов.
                        </div>
                        <div class="subservice_task_item">
                            Важно учитывать, что некоторые оттенки усложняют визуальное восприятие информации. Подбор цветов должен отвечать не только требованиям эстетики,
                            но и быть помощником в привлечении внимания посетителей и продвижении страницы.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Минимум форм для заполнения.
                        </div>
                        <div class="subservice_task_item">
                            Необходимость заполнение форм, как правило, раздражает пользователя. Поэтому задача дизайнера интегрировать как можно меньше форм в интерфейс.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Настойка типографики.
                        </div>
                        <div class="subservice_task_item ">
                            Речь идет о грамотном подходе к выбору типа шрифта, который влияет на целевую аудиторию,
                            к подбору подходящего размера и выделения информации.<br><br>ВАЖНО: выделение больших текстовых элементов усложняет изучение страницы.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Понимание целевой аудитории.
                        </div>
                        <div class="subservice_task_item  margin_bottom_40">
                            Изучение предпочтений, потребностей
                            и привычек посетителей сайта позволит сделать удобный и понятный интерфейс.
                        </div>
                    </div>
                </div>
                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Создание дизайна интерфейса целесообразнее доверить профессионалу, так как для этого требуется узко профильные знания и опыт. Дизайнеры агентства «Веб Фокус» готовы проконсультировать Вас в данном направлении, объяснить порядок и сроки выполнения заказа. Оставьте заявку на сайте, и сотрудник свяжется с Вами в ближайшее время.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>