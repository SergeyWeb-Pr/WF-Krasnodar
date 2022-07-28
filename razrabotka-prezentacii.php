<?php
/*
Template Name: Разработка презентации
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
                <p class="header_link_str_twxt display-none-768">Разработка презентации</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Разработка презентации</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one">
                <b class="bold">Разработка презентации</b> должна содержать в себе проработанный дизайн
                и основную информацию предающую суть поднятой в работе темы.
                Каждый элемент здесь играет роль в организации внешнего вида документа. Правильный подход к созданию обеспечит положительный отзыв аудитории
                к выступлению.
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
        <p class="preview__subtitle padding_bottom_10 p2_white">опредление
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Логотипы на заказ – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Дизайн слайдов должен быть лёгким к восприятию
                            публикой. Содержать фотографии либо графики и диаграммы в зависимости от тематики презентации. Мы поможем подготовиться к выступлению так, чтобы создать впечатление и запомниться аудитории. Разработкой дизайна
                            и написанием информативного текста займётся компания «Веб Фокус».
                            Мы предлагаем использовать убедительные предложения, чтобы показывать потенциальным клиентам свои преимущества в наглядной и понятной форме. Уникальный дизайн и информативность для создания акцентов на тексте, продуманной структуры, которая вызывает больший интерес у аудитории. Повышение Вашего имиджа, так как презентации, разработанные нашей командой, получают больше внимания от потенциальных клиентов
                            и партнеров. Презентации используются для представления компании, ее продукции и услугах, рекламных акциях, тем самым делая их еще одним инструментом продаж и рекламы. Для выступлений на совещаниях, конференциях также стоит заказать презентацию для бизнеса, если Вы хотите сделать подачу материала интересной.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Шаблонное решение не подходит, если Вы хотите воздействовать на широкую аудиторию и быть услышанным. Решение оформить заявку на создание презентации компании «Веб Фокус» оправдано, когда нужно запомниться
                            и эффектно представить свое предложение. Востребованная презентация, цена которой зависит от количества слайдов, сроков и сложностей оформления дизайна, состоит
                            из нескольких этапов: проработка уникального стиля, шрифтов, прорисовка графики, стилизация элементов, анимации и пр. Подача информации через графику,
                            текст, диаграммы делает каждый слайд информативным
                            и эффективным, а уникальное оформление заинтересовывает пользователей.
                        </p>
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

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">алгоритм работы</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Алгоритм работы</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Для того чтобы привлечь внимание слушателей нужно начать презентацию со стойкой фразы, вопроса к аудитории или цитаты. Таким приёмом пользовались ораторы на протяжении истории. Эта хитрость позволяет превратить слушателей
                            в участников презентации. Завлечь их, погрузив в тему повествования.
                            Если сразу обозначить обсуждаемую проблему слушатели уделят сказанному больше внимания. Наводя аудиторию на размышления можно заметить
                            их заинтересованность и участие. Разработка презентации компании с учётом интригующей информации
                            и привлекательного дизайна послужит заказчику способом завоевать доверие клиента или работодателя, смотря с какой целью создаётся презентация.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">В структуре работы также должно присутствовать решение озвученной проблемы. Свои доводы нужно доказать
                            с помощью графиков и цифр. Текст должен быть понятен
                            всем категориям слушателей. Мы подготовим текст, способный зацепить аудиторию и добиться желаемого результата. Примеры и факты помогут добавить информации наглядности. Яркие образы помогут аудитории запомнить рассказанную информацию. Если желаете достичь успеха в презентации, Вам нужна лаконичная, но при том запоминающаяся презентация, цена которой будет взвешенной и демократичной. Такой вариант может предложить компания «Веб Фокус».
                            В конце выступления стоит высказать главные тезисы и подвести итоги. Это помогает закрепить переданные знания. Выводы помогают людям запомнить весь объём полученной информации.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_task_wrapper padding_top_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Анализ.
                        </div>
                        <div class="subservice_task_item">
                            Работа над проектом начинается после заполнения заказчиком опросника, помогающего выделить
                            цели заказчика. Далее определяется вид презентации, изучаются предоставленные клиентом материалы, согласовывается основная идея и структура презентации. Разработка презентации осуществляется по согласованному ТЗ.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Разработка дизайна
                        </div>
                        <div class="subservice_task_item">
                            Цветовая гамма подбирается согласно фирменному стилю компании или же по предпочтениям заказчика. Подбирается несколько концепций дизайн-макета. После согласования лучшего варианта общего стиля прорабатывается дизайн, подбираются шрифты, разрабатывается инфографика, дорабатывается
                            и структурируется контент с акцентом на главные моменты.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сдача проекта.
                        </div>
                        <div class="subservice_task_item ">
                            Презентация верстается, чтобы выглядеть изящно на телефоне, планшете, большом экране
                            и подготавливается к печати. Заказчику передаются авторские права на готовую презентацию.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

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


<section class="subservice_rules padding_top_130 padding_bottom_130 open_cart_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">мнение экспертов</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 max-width650">Мнение экспертов</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer grid_gap_40">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black">

                        <i>Зацепите своих зрителей презентацией европейского уровня</i>
                        <br><br>
                        Презентации более эффективны в тандеме с контекстной рекламой или таргетингом. Можно их также использовать как коммерческое предложение для e-mail-рассылки или разместить на сайте для демонстрации продукции. Задачу
                        по написанию сильных продающих или информационных текстов мы можем также взять на себя. Разработка презентации PowerPoint от нашей команды – это создание последовательного и логичного продукта, способного донести максимум информации вашей аудитории, и оставить минимум вопросов.


                    </p>
                </div>
            </div>
            <div class="opencart_rules_logo">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient33.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient33-1090.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient33-768.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient33-375.png" alt="" class="opencart_rules_logo_img">

            </div>



        </div>

    </div>
</section>


<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">дизайн и смысловая нагрузка</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Дизайн и смысловая нагрузка</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two padding_bottom_60">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">На создание эффективного дизайна влияет каждый
                            элемент. Нужно подобрать подходящий шрифт, цепляющие изображения и красиво оформить графики. Наши дизайнеры добьются эстетичности каждого слайда и подчеркнут суть
                            с помощью графических элементов. Достойного дизайна
                            не добиться, если не проведена верстка презентации, цена на нее уже включена в стоимость услуг от компании «Веб Фокус».</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Хорошая презентация способна открыть закрытые двери.
                            Если она грамотно составлена, не составит труда добиться намеченных высот. Мы подготовим для Вас лучший вариант, созданный прогрессивными дизайнерами и копирайтерами компании «Веб Фокус». Наша задача – разработка презентации в выдержанной стилистике и гарантией успеха.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Шрифт – это важная составляющая проекта.
                        </div>
                        <div class="subservice_task_item">
                            Нужно быть осторожным в его выборе, классические шрифты выглядят наиболее презентабельно. Стоит использовать не более трёх вариантов шрифта, иначе слайд становится визуально перегруженным.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Обязательным атрибутом являются изображения.
                        </div>
                        <div class="subservice_task_item">
                            Изобилие текста подталкивает слушателя
                            к прочтению, отвлекая от речи рассказчика. Картинки лишь дополняют сказанное. Разработка дизайна презентаций требует учёта тонкостей связанных
                            с людской психологией и поведением.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Слайды должны быть оформлены лаконично.
                        </div>
                        <div class="subservice_task_item ">
                            Не стоит перегружать их информацией и набором картинок. В идеальной работе один слайд несет
                            в себе одну мысль. Лучше вложить в одну страницу меньше информации, но соблюдать эстетику и комфорт для слушателя.
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<?php get_footer() ?>