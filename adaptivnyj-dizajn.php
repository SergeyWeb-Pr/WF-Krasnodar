<?php
/*
Template Name: Адаптивный дизайн
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
        <div class="header__title header__title_subservice header__correct">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Дизайн</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Адаптивный дизайн</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Адаптивный дизайн</h1>
            <p class="header_text p3_black header_text_subservice">Адаптивный дизайн (анг. Adoptive Web Desing) – универсальный дизайн сайта, который автоматически подстраивается под разрешения экранов устройств
                и позволят собственнику сайта не создавать дополнительный веб-ресурс. <br><br>Ежедневно растет трафик с мобильных устройств. Все чаще посетители веб-ресурсов используют для просмотра новостей, проверки почты не стационарные, а мобильные устройства: смартфон, планшет, ноутбук.
                Эта необходимость продиктована быстро развивающимся технологиями IT.
                На страницах сайтов с адаптивным веб-дизайном для удобства просмотра скрыты некоторые элементы управления.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">адаптивный дизайн
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Почему Вам срочно нужен адаптивный дизайн</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Статистика продаж в России мобильных устройств демонстрирует постоянное увеличение спроса
                            у пользователей переносных компьютеров, смартфонов, планшетов. Данные устройства используются предприятиями, предпринимателями, геймерами, гражданами. Многие пользователи отказываются от стационарных компьютеров
                            и переходят на их мобильные аналоги, которые могут обеспечить доступ в сеть Интернет почти с любой точки Планеты.
                            Владельцы веб-ресурсов, чтобы оставаться
                            с читателями, клиентами постоянно онлайн, увеличить число посетителей, внедряют адаптивный дизайн. Для просмотра веб-ресурса с устройств различных разрешений, используя технику адаптивного дизайна, нет необходимости разрабатывать дополнительные версии веб-сайта с учетом конкретных видов гаджетов.
                            Со временем изменялись, развивались походы к созданию сайтов, просматриваемых через мобильные устройства. Качество изображения и подачи информации улучшалось. </p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Первой реализацией такого способа подачи сайта было внедрение «резинового» дизайна веб-ресурса. Отличительной особенностью сайта с данной функцией,
                            по сравнению с обычным веб-ресурсом, было наличие возможности растягивать и сжимать контент. Этот подход применялся для мониторов с различными разрешениями,
                            но не подходил для смартфонов. Прочитать текст на странице было трудно, существовали сложности с переходом на другие вкладки сайта.
                            Позже появилось «мобильная версия» просмотра сайта, что представляет собой аналог первичного сайта с поддоменом. Структура и содержание веб-ресурса отличается от основной версии, а внешняя подача повторяет стилистику главного сайта.
                            Развития технологий в области дизайна позволило использовать адаптивный дизайн
                            в создании веб-ресурсов. Данный способ дает возможность сайту масштабироваться и корректно отображаться во всех разрешениях на устройстве. Сайт с адаптивным дизайном также имеет некоторые недостатки по сравнению
                            с мобильной версией веб-ресурса.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Первой реализацией такого способа подачи сайта было внедрение «резинового» дизайна веб-ресурса. Отличительной особенностью сайта с данной функцией,
                        по сравнению с обычным веб-ресурсом, было наличие возможности растягивать и сжимать контент. Этот подход применялся для мониторов с различными разрешениями,
                        но не подходил для смартфонов. Прочитать текст на странице было трудно, существовали сложности с переходом на другие вкладки сайта.
                        Позже появилось «мобильная версия» просмотра сайта, что представляет собой аналог первичного сайта с поддоменом. Структура и содержание веб-ресурса отличается от основной версии, а внешняя подача повторяет стилистику главного сайта.
                        Развития технологий в области дизайна позволило использовать адаптивный дизайн
                        в создании веб-ресурсов. Данный способ дает возможность сайту масштабироваться и корректно отображаться во всех разрешениях на устройстве. Сайт с адаптивным дизайном также имеет некоторые недостатки по сравнению
                        с мобильной версией веб-ресурса.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">характеристика сайта</p>
                <h2 class="h2_black">Характеристики сайта</h2>
                <div class="structure__subtitle">Характеристики сайта с адаптивным дизайном:</div>
                <ul>
                    <li class="top30">Размер текста.
                        <p class="static_list-p">Размеры шрифта, изображений и иконок должны соотноситься с размерами устройств. Сайт с адаптивным дизайном имеет некоторые отличия при демонстрации веб-страницы на гаджетах с различными разрешениями. Разработчики сайта создают несколько версий просмотра веб-ресурса.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Адаптация содержания&shy; сайта.
                        <p class="static_list-p">Информация, заполняющая сайт с адаптивным дизайном (текст, изображения, видео) также должна соответствовать разрешению экрана на устройстве
                            и не терять при этом качество показа.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Гибкий дизайн веб-ресурса.
                        <p class="static_list-p">Картинка на адаптивном сайте должна быстро подстраиваться под конструкцию ресурса, путем внедрения специальных элементов. Прокрутка вверх
                            и вниз, переворот – эти действия должны быть быстрыми и четкими.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Скрытие некоторых элементов.
                        <p class="static_list-p">Сайт с адаптивным дизайном осуществляет скрытие
                            и упрощение некоторых элементов для удобного просмотра страницы пользователем на различных верстках. При этом основные функции сайт выполняет.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient17.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient17-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient17-768.png" alt="img" class="internet_mag_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient17-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Специалисты в области создания веб-сайтов, по-разному трактуют понятие «адаптированный дизайн сайта». Единой формулировки этому подходу демонстрации веб-ресурса нет, однако присущи определенные особенности.</p>
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
        <p class="intro__subtitle subtitle p2_white">плюсы</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Плюсы адаптивного дизайна</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Собственнику сайта, при выборе способа подачи веб-ресурса, необходимо сделать сравнительную характеристику между такими вариантами как мобильная версия и сайт с адаптивным дизайном.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site">
                <div class="intro__text_item max-width_none intro__text-none">
                    <div class="intro__text_item-wrapper intro__text_item-wrapper-top">
                        <p class="p3_white p3__ital">Мобильная версия сайта</p>
                        <p class='p3_white p3__ital'>Сайт с адаптивным дизайном</p>
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper intro__text_item-wrapper-top">
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice correct_color1">Менее затратная. Если сайт уже готов, вносятся только некоторые поправки в уже существующую версию веб-ресурса. </p>

                        <p class='p3_white'>Экономия текущих расходов. Создается только один сайт. Нет необходимости содержать сайт для мобильной версии и основной веб-ресурс.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven correct_color2">Сайт быстро загружается.</p>

                        <p class='p3_white'>Времени на открытие страницы сайта с адаптивным дизайном затрачивается больше, по сравнению затратами по времени
                            на мобильную версию.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color-2_subservice correct_color3">Быстрая реализация. Собственнику предоставляется сайт
                            в короткие сроки. Существуют разработанные плагины,
                            с помощь которых можно быстро реализовать мобильную адаптацию сайта.</p>

                        <p class='p3_white'> Экономичность.Затраты на создание адаптивного сайта меньше, чем на создание и продвижение отдельной мобильной версии веб-ресурса.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice correct_color4">Не все мобильные версии соответствуют разрешениям мобильных устройств.</p>

                        <p class='p3_white'>Высокие показатели конверсии. Возможностей к показу сайта становится больше, и конверсия увеличивается.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight correct_color5">Требуются отдельные платные домены.</p>

                        <p class='p3_white'>Увеличение поисковой оптимизации. Одни и те же ссылки ведут
                            на один и тот же сайт. Не требуется синхронизация запросов
                            со стационарных и мобильных устройств.</p>
                    </div>
                    <div class="intro__text-line">
                    </div>
                </div>
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper">
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three correct_color6">Существуют сложности с публикацией контента.
                            Он подстраивается под все форматы в случае наличия нескольких сайтов.</p>

                        <p class='p3_white'>Сохраняется расположение элементов. Пользователю удобно просматривать веб-ресурс, так как повторяется визуализация полной версии.</p>
                    </div>
                    <div class="intro__text-line">
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

<section class="subservice_rules padding_bottom_130 padding_top_130 personal_site_rules_media subservice_rules_correction">
    <div class="container">
        <p class="product__list-subtitle p2_black">заказывайте у профессионалов</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 subservice_task-title_one">Заказывайте создание адаптивного сайта
            у профессио&shy;налов
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Мы, компания «Веб Фокус», готовы помочь в создании
                            сайта с адаптивным дизайном. Разработчики совместно
                            с дизайнерами нашей компании помогут решить проблему удобного просмотра ресурса и обеспечат единообразное отображение сайта на различных устройствах.
                            <br><br>
                            Готовый сайт, который уже создан и хорошо смотрится
                            на стационарном компьютере, а на экранах планшетов, смартфонов не выглядит так ярко, компания «Веб Фокус» может усовершенствовать. Разработчики и дизайнеры нашей компании проконсультируют и дополнят сайт адаптивным дизайном.<br><br>Метод работы по интересам – это настройка по группам пользователей. Автоматически проводится анализ клиентов, на каких сайтах чаще проводят время. РСЯ такого плана действует только в рамках мобильных приложений.<br><br>Внедрение адаптивного сайта даст возможность просматривать отлично разработанный веб-ресурс
                            на стационарных устройствах и на мобильных гаджетах.<br><br>Заказывайте адаптивные сайты с трендовым дизайном
                            в компании «Веб Фокус»!
                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient18.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient18-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient18-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient18-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient19.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient19-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient19-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient19-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Разработчики сайта, которые применяют технику адаптивного дизайна, сталкиваются с необходимостью согласовывать структуру разрабатываемого веб-ресурса
                            с дизайнером сайта. Разработка сайта с элементами адаптивного дизайна трудоемкий процесс, связанный
                            с постоянным продвижением и последующим развитием ресурса. Разработчики сайта и дизайнеры должны совместно сделать такой веб-ресурс, который будет выполнять поставленные задачи с учетом особенностей разнообразных платформ.
                            <br><br>
                            Веб-ресурсы, созданные в прошлом, нуждаются
                            в постоянной доработке. Специалисты в области
                            разработки сайта применяют различные подходы
                            к адаптивности. При выборе способа доработки сайта иногда целесообразнее воспользоваться уже готовыми маркетами и шаблонами. Применение шаблонов ускорит процесс разработки веб-ресурса и сделает эту статью расходов менее затратной. Если компания развивается
                            и хочет привлечь больше клиентов, необходимо осуществить некоторые перемены и заказать адаптивный дизайн сайта.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>