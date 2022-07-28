<?php
/*
Template Name: Создание коммерческого предложения
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
                <p class="header_link_str_twxt display-none-768">Создание коммерческого предложения</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание коммерческого предложения</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">определение
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Создание коммерческого предложения – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание коммерческого предложения – один из ключевых этапов продажи товаров и услуг. От грамотного составления напрямую зависит, обратится ли клиент в компанию или оформит заказ у конкурентов.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Цена, за которую сотрудники агентства «Веб Фокус»
                            смогут составить коммерческое предложение, окупается увеличением продаж из-за результативного мотивационного сообщения к клиенту.
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

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">роль</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Роль дизайна в формировании коммерческого предложения</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Перед составлением письма с призывом к целевому действию предприниматели задумываются, в какой форме изложить материал, нужен ли профессиональный дизайн, ведь написать коммерческое предложение по низкой цене с качественным дизайном затруднительно.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Дизайн не сможет продать товар, в рекламе которого нет проработанного текстового материала. Но он может исправить ситуацию там, где копирайтер допустил недочеты. Например, привлечь внимание читателя ярким изображением, которое расположено рядом с неструктурированным абзацем.


                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Перечислим основные выгоды дизайна:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Создает конкурентное преимущество;
                        </div>
                        <div class="subservice_task_item">
                            Зачастую заказчик, перед тем как сделать выбор, собирает несколько подходящих вариантов, выбирает из них оптимальный оригинальный макет, который может грамотно выделить компанию среди аналогичных фирм.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Формирует имидж компании;
                        </div>
                        <div class="subservice_task_item">
                            Представление потребителя о компании складывается из множества деталей, коммерческое предложение является одной из них. Оно может
                            как укрепить лояльность клиентов, так и наоборот разрушить образ солидной фирмы.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сближает с целевой аудиторией;
                        </div>
                        <div class="subservice_task_item">
                            Профессиональный дизайнер имеет представление
                            о том, какая цветовая гамма, графические решения, стиль изображений подойдет для конкретной аудитории. Такой подход создает единый невербаль –
                            ный язык между организацией и клиентом.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сглаживает проблемы слабого текста.
                        </div>
                        <div class="subservice_task_item">
                            Дизайн не сможет продать товар, в рекламе которого нет проработанного текстового материала. Но он может исправить ситуацию там, где копирайтер допустил недочеты. Например, привлечь внимание читателя ярким изображением, которое расположено рядом с неструктурированным абзацем.
                        </div>
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

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">ключевые детали</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Ключевые детали в разработке коммерческого предложения</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Структура.
                        </div>
                        <div class="subservice_task_item">
                            Текст должен состоять из отдельных смысловых блоков, которые отделены друг от друга с помощью свободного пространства. Пустые поля вокруг кнопки с призывом позволят акцентировать внимание клиента на целевом действии. Использование различных межстрочных интервалов также упрощает чтение и восприятие: между заголовком и основным текстом рекомендуется сделать более широкий отступ. <br><br>
                            Структурные особенности коммерческого предложения, оформленного в формате презентации, выражаются в необходимости размещения одной мысли на одном слайде. При этом информация должна быть изложена в иерархичном порядке,
                            где предусмотрены абзацы, заголовки, подзаголовки.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Верстка.
                        </div>
                        <div class="subservice_task_item">
                            Выбор зависит от формата обращения к клиенту.
                            Так, для рассылки подходящим вариантом является одноколоночная верстка. Текст, расположенный
                            в одну колонку, быстро воспринимается зрением,
                            так как информация анализируется сверху вниз. Верстка в формате слайдов используется для офлайн-материалов, которые будут оформлены
                            в брошюре пружинного типа.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Иллюстрации.
                        </div>
                        <div class="subservice_task_item">
                            Основным критерием при подборе картинок выступает уникальность. Дизайнеры не должны использовать бесплатные стоковые изображения
                            при разработке коммерческого предложения. Индивидуальный подход увеличит стоимость коммерческого предложения, но повысит доверие
                            и лояльность клиентов.<br><br>
                            Также важно ограниченно вписывать картинки
                            в общее содержание. Чрезмерное употребление рассеивает внимание читателя. Если нужно разбить текстовые элементы, рекомендуется использовать иконки.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">


                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Избыток и сложность призывов к действию.
                        </div>
                        <div class="subservice_task_item">
                            Призыв важно излагать лаконично: основная информация содержится в тексте, в призыве – короткое целевое действие без второстепенных данных. Если материал оформлен в виде презентации, целесообразно посвятить призыву отдельный слайд.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Рабочие кнопки.
                        </div>
                        <div class="subservice_task_item">
                            При создании электронной версии обращения
                            к клиенту кнопки не рекомендуется оформлять
                            с помощью изображений. Клиент может их не заметить. Также важно исключить элементы дизайна, которые внешне схожи с кнопками. Пользователь будет разочарован, когда после клика не откроется новая страница.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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




<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">из чего состоит</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Из чего состоит коммерческое предложение</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">От структуры мотивационного сообщения во многом зависит его результат.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Элементами коммерческого предложения являются:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color7">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                        Заголовок (его составление влияет на поведение клиента: будет ли читать дальше или не станет тратить время на изучение. В заголовке важно упомянуть целевую выгоду потребителя, заинтересовать его внимание);
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                        Лид (несколько предложений, которые не дают полного представления о содержании, мотивируют 
к дальнейшему прочтению);
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color9">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                        Оффер (основная часть обращения с описанием товара или услуги, обязательным объяснением выгод для клиента от покупки. В оффере также можно продемонстрировать, какие дополнительные бонусы получит заказчик кроме первичного товара, например, бесплатная доставка или увеличенный срок гарантийного обслуживания. При этом указанная информация должна быть исключительно достоверной);
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color6">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                        Стоимость (клиентам важно оперативно оформить заказ, поэтому, как правило, они не будут вступать 
в переписку или совершать дополнительные звонки для уточнения цены);
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color10">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                        Призыв к действию (читатель должен понимать, 
чего Вы от него хотите: заказать, зарегистрироваться, посетить офис и т.д.);СПРАВКА: эффективнее оформлять призыв в форме глагола.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color5">06.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                        Постскриптум (завершающий, но не менее важный элемент, на который обращают внимание большинство читателей).
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">основные ошибки</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Создание коммерческого предложения: основные ошибки</h2>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Шаблонный материал без персонализации клиента
                    (бланки из Интернета не только не приведут к покупке,
                    но и негативно отразятся на общем имидже компании).
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Отсутствие визуализации: изображений, схем, графиков.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Переизбыток информации, длина не должна превышать
                    2 листов.
                </div>

            </div>
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Отсутствие мотивационного призыва к конкретным действиям.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Слабый текст: грамматические ошибки, нет полезного контента и структуры изложения.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Отсутствие контактных данных (ошибка встречается не так часто, но играет решающее значение. При ее совершении клиент физически не может оформить заказ, поэтому сообщение теряет смысл).
                </div>

            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">  Предприниматели могут заняться <b class="bold">разработкой коммерческого предложения</b> самостоятельно, потратив время и силы на изучение литературы и компьютерных программ. Альтернативный вариант – это заказать коммерческое предложение в компании, которая специализируется на продвижении бизнеса. Оставьте заявку на сайте агентства «Веб Фокус», и сотрудник расскажет
                            о порядке, сроке и стоимости выполнения индивидуального заказа.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>