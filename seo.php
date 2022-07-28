<?php
/*
Template Name: SEO
*/
get_header();
?>

<header class="header header_subservice header_pos_rel">
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

    <div class="container ">
        <div class="header__title header__title_subservice">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">SEO</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">SEO</h1>
            <p class="header_text p3_black header_text_subservice">Если Вам интересно продвижение сайтов, Краснодар – место расположения Вашего бизнеса и Вы хотите получать доход выше, но не знаете, как, то компания «Веб Фокус» та самая деталь, которой не хватает для осуществления задумки.</p>
        </div>
        <div class="header__info header__info_subservice margin_top_55 margin_bottom_155">
            <a href="" class="header-btn p_btn header-btn_subservice ">Узнать больше</a>
        </div>
        <div class="header_backgr_img">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/backgr/seo_backgr.png" alt="img" class="">
        </div>
    </div>

</header>

<section class="portfolio padding_bottom_150 padding_bottom_121_1440">
    <div class="container">
        <div class="portfolio__blok ">
            <?php
            $posts = get_posts(array(
                'numberposts' => 6,
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
        <p class="preview__subtitle padding_bottom_10 p2_white">главная информация
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">SEO-продвижение сайтов</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Для реализации намеченного Вам нужны услуги SEO продвижения. Но не каждый в курсе что означает это загадочное слово.<br><br>
                            Термин SEO является аббревиатурой и расшифровывается как Search Engine Optimization, что в переводе с английского – поисковая оптимизация. Мастера, работающие над этим, занимаются всесторонним развитием сайта ради попадания его на вершину поиска. Чем выше позиции в поиске, тем больше посещений, а как следствие и конверсий удастся собрать.

                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Чем выше мастерство SEO-гуру, тем более высокую строчку в поисковой выдаче займёт Ваш сайт. Наша команда славится своими успехами в этой отрасли и предлагает Вам сотрудничество. Работая с лучшими, Вы не теряете время, а лишь приобретаете повышенный доход и приятные эмоции от сотрудничества.

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

<section class="slider padding_top_130 structure internet_magazin padding_bottom_150 internet_mag vizitki_media">
    <div class="container container_one">
        <div class="structure__blocks internet_magazin_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">цели и задачи</p>
                <h2 class="h2_black">Многогранная работа, нацеленная на результат
                </h2>
                <div class="product__list_column-text-2 padding_top_40">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Раньше СЕО было проще и включало в себя требования по наличию ключевых слов и закупкой внешних ссылок, но SEO продвижение сайтов развивается, конкуренция в сети неуклонно растёт и теперь все стало не так просто. От работника в сфере продвижения требуется выполнять кропотливую работу и различные функции, до тех пор пока он не получит блестящий результат своей работы. Ради успеха участник нашей команды постоянно выполняет следующие операции:
                    </p>
                </div>
                <ul>
                    <li class="top30">Проверяет поисковые запросы.
                        <p class="static_list-p">Проверяет поисковые запросы, учитывая местоположение бизнеса, которое влияет на продвижение сайтов, Краснодар найдёт именно Вас.
                        </p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Собирает семантическое ядро.
                        <p class="static_list-p">Собирает актуальное семантическое ядро, меняет направление работы при изменении результатов.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Следит за обновлениями.
                        <p class="static_list-p">Следит за обновлениями систем ранжирования поисковиков.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Отслеживает факторы.
                        <p class="static_list-p">Отслеживает поведенческие факторы, над которым проводится работа.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 structure-list__6-top30">Проводит оптимизацию.
                        <p class="static_list-p">Проводит внутреннюю оптимизацию, улучшая код, повышая качество материалов размещенных на сайте.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__6 structure-list__6-top30">Работает над показателями.
                        <p class="static_list-p">Работает над повышением показателя цитируемости ресурса.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient35.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient35-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient35-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient35-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Никому досконально неизвестно как поведёт себя система, потому требуется постоянная подгонка и оптимизация. Наша задача отыскать тот золотой показатель, который выведет сайт на первые строчки. На конечный результат влияет все. Как быстро загружается сайт, навигация по веб-ресурсу, интерфейс, оптимизация под устройства разного типа, над всем проводится работа. <br><br>Команда «Веб Фокус» обладает знаниями о тонкостях работы поисковых систем, благодаря чему показывает результат вызывающий восторг даже у самого ярого скептика. Разумно заказать продвижение сайта у людей, цепляющихся за результат, команды уверенной в успехе.

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

<!--form -->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="concept padding_top_130 padding_bottom_150 bitrix_gif_media concept_three">
    <div class="container container_one">
        <div class="concept__wrapper space_b">
            <div class="concept__img2">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/gif_seo1.gif" alt="" class="concept__img-2 concept__img-seo">
            </div>
            <div class="concept__list padding-left_40 margin_none">
                <div class="concept__list">
                    <div class="text__wrapper-concept">
                        <div class="concept_media2">
                            <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/gif_seo2.gif" alt="" class="concept_img_media">
                        </div>
                        <div>
                            <p class="concept__list_subtitle padding_bottom_10 subtitle p2_white">информация</p>
                            <h2 class="concept__list_title padding_title_60 h2_grad m_width850">Что известно об индексации</h2>
                        </div>
                    </div>
                    <div class="preview__block">
                        <div class="intro__text ">
                            <div class="grad-line"></div>
                            <div class="padding_left_16_500">
                                <p class="intro__text-p p3_white">Каждая компания гордится мнением обратившихся – лучшим индикатором качества. Стабильный поток положительных отзывов на наш юридический адрес – яркий стимул, чтобы осваивать новые вершины, не опуститься до уровня очередного эксплуататора громкого слова «marketing». <br><br>
                                    Роботы проверяют всё что есть на сайте. Переходят по размещенным ссылкам, путешествуют по страницам, анализируют текст. По итогу сканирования собранная информация отправляется в базу данных.
                                </p>
                            </div>
                        </div>
                        <div class="intro__text ">
                            <div class="grad-line"></div>
                            <div class="padding_left_16_500">
                                <p class="intro__text-p p3_white">После проверки при соответствии страницы с запросом пользователя, воспользовавшись данными из базы, система выдаст Ваш сайт юзеру. Чем больше он ему подходит, тем выше он окажется в списке результатов. Поисковое продвижение сайта нужно, чтобы попасть как можно выше. Это важно т.к. около 95% трафика не заходит дальше первой страницы, 80% из которого выбирает варианты из первой по третью строчку.
                                </p>
                            </div>
                        </div>
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

<section class="subservice_rules padding_top_130">
    <div class="container">
        <p class="product__list-subtitle p2_black">выгода</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10 max-width650">Прикинем выгоду
        </h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Если Вы сомневаетесь, нужна ли Вам СЕО оптимизация сайта, проведите анализ. Воспользуйтесь системой «Вордстат» и узнайте, задают ли люди поисковый запрос, который говорит о спросе на Ваш товар или услугу. Посмотрите на количество показов в месяц и представьте, что эта цифра может прибавиться к количеству посещений Вашего ресурса. И все эти посетители нацелены на приобретение товара. Не теряйте времени, поспешите оформить заявку на SEO продвижение сайтов команде мастеров «Веб Фокус».
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Крупные проекты, нацеленные на сбыт большого количества продукции, нуждаются в комбинации поисковой оптимизации с контекстной рекламой. При таком подходе трафик будет не только поисковым, но будет идти также с различных ресурсов–партнёров поисковиков. Выделяя основные моменты можно увидеть, что СЕО­-оптимизация имеет еще больше плюсов чем кажется на первый взгляд:



                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_inner subservice_rules_inner-new padding_top_60">
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_seo1"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Долгоиграющая эффективность. </p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Независимо от вложенных средств результат будет наблюдаться продолжительное время, принося дополнительный доход.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_seo2"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Охват аудитории. </p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Все «тёплые клиенты» Ваши. Люди ищут с конкретной целью, а на первых строках поиска находится Ваше предложение удовлетворяющее их спрос. Конечно, покупатели предпочтут выбрать Вас.</p>
                </div>
            </div>
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_seo3"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Доверие пользователей. </p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Сайты на первых местах списка поисковых результатов вызывают доверие у аудитории. Реклама любого рода не способна принести такого же отношения к сайту как верхние позиции выдачи.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_seo4"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Цена продвижения сайта. </p>
                    <div class="subservice_rules_line margin_bottom_20 margin_bottom_20_500"></div>
                    <p class="p3_black">Окажется ниже контекстной и иных видов рекламы.</p>
                </div>
            </div>


        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">И хоть первый результат может проявить себя спустя время количество плюсов убеждает в правильности выбора в пользу вложения денег в продвижение. Затраты окупятся принося с собой повышенный доход и постоянных клиентов. Доверие к бренду будет расти на протяжении продолжительного нахождения в топе поисковой выдачи.
                        </p>
                    </div>
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
        <p class="product__list-subtitle p2_black">почему мы</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Обгоните конкурентов: поможет seo-продвижение сайтов
        </h2>
        <div class="personal_site_wrapper_media">
            <div class="personal_site_wrapper_media_block">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">По последним данным интернетом в России пользуются 118 миллионов человек, это 81% россиян. Среди них выгодного предложения на первых строках поиска ожидает и Ваш будущий клиент. Число пользователей интернета растёт каждый день, что делает этот ресурс неисчерпаемым потоком клиентов. Обеспечьте своему бизнесу безоблачное будущее.
                            <br><br>
                            В случае если Вы имеете перспективный сайт, продвижение в Сочи должно быть интересно для Вас в первую очередь. Ведь только эта ниша способна принести поистине высокий доход. Не стоит ждать, пока кто­-то хватает прибыль. Нужно всего-то подать заявку, чтобы оказаться на месте лидеров поискового запроса по Вашему направлению. Ожидаем Вашей заявки на продвижение сайтов, Краснодар готовит для Вас новых клиентов.
                        </p>
                    </div>
                </div>
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient37.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient37-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient37-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient37-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
            </div>
            <div class="personal_site_wrapper_media_block">
                <div class='personal_site_rules_logo'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient36.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient36-1090.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient36-768.png" alt="" class='personal_site_rules_logo_img'>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient36-375.png" alt="" class='personal_site_rules_logo_img'>
                </div>
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Предприниматель знающий, как работают деньги находится в постоянном поиске как преумножить вложенный капитал. Маленьким капиталом может стать Ваш вклад в продвижение. Получайте дивиденды от выгодного сотрудничества с нашими профессионалами. Агентство продвижения сайтов «Веб Фокус» готово взяться за привлечение Ваших будущих покупателей.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>