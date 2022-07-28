<?php
/*
Template Name: Создание сайта на вордпресс
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
                <p class="header_link_str_twxt display-none-768">Создание сайта на WordPress</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание сайта<br> на WordPress</h1>
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

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 wordpress_product_list_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">преимущества</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice max-width650">Преимуще&shy;ства услуги создание сайта на WordPress:</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Агентство «Веб Фокус» активно создаёт интернет-магазины (да и другие ресурсы тоже) на платформе WordPress.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site">
                <div class="intro__text_item max-width_none">
                    <div class="intro__text_item-wrapper intro__text_item-wrapper-top">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice">Комфорт</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Комфортная, как для посетителя, так и для администрации, система управления ресурсом.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">«Гибкое» управление</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Предоставление платформой возможности «гибкого» управления.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 max-width_none margin-top-16">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-2_subservice">Расширение функционала</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Возможность расширения функционала интернет-магазина посредством добавления новых модулей.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice">Собственная система безопасности</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Также одним из преимуществ становится собственная система безопасности платформы, которая защитит данные посетителя и администрации сайта от вирусов, хакерских атак и прочих неурядиц.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40 max-width_none margin-top-70">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Отсутствие трудностей</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Отсутствие специфических трудностей с настройкой внешнего вида сайта на WordPress.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Мультиязычность</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Использование платформой разных языков. Возможная мультиязычность стирает границы между разными языковыми группами, привлекая клиентов-носителей другого языка.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview__block padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Платформа WordPress одна из самых распространённых систем, использующихся для создания и дальнейшего контроля сайта, существующих сейчас в сети. Основными преимуществами WordPress и подобных ей платформ являются предельное упрощение работы на них. Когда данная CMS платформа (WordPress) создавалась, она была предназначена исключительно для создания ресурсов-блогов. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Однако, развиваясь, WordPress превратилась в единственную и неповторимую платформу для создания усложнённых веб-ресурсов (интернет-компаний, многомодульных сайтов-визиток, интернет-магазинов). После длительного развития, платформа оснащена функциями создания блогов, форумов и прочих необходимых для полноценного интернет-ресурса системах.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 wordpress_preview_media">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">этапы</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice max-width860">Этапы работы с коллективом «Веб Фокус» во время создания сайта на WordPress</h2>
        <div class="text__wrapper">
            <div class="subservice_task_wrapper">
                <div class="subservice_task_left subservice_task_left_info-site">
                    <div class="subservice_task_item list-numbers rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Анализ ниши, в которой предстоит работать, деятельности и ресурсов конкурирующих компаний, выводы и предложения по созданию и оптимизации существующего проекта.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-2 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Создание нового или же редакция существующего проекта, структурирование перечня целей и задач, которые должны быть достигнуты и выполнены в процессе реализации проекта.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-3 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Формирование технического задания для коллектива, которым мы будем руководствоваться в процессе работы над проектом.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-4 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Создание «прототипа» страниц ресурса, написание кода, утверждение и проработка прототипов.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-5 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Формирование семантических ядер страниц, составление технических заданий для наших копирайтеров, которые займутся информационным наполнением страниц веб-ресурса, написание наполнения и его утверждение.</p>
                    </div>
                </div>
                <div class="subservice_task_right">
                    <div class="subservice_task_item list-numbers number-6 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Написание технического задания для веб-дизайнеров, создание дизайна сайта, утверждение дизайна, внесение в него корректировок. Доработка дизайна ресурса.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-7 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Создание блоков и утверждение блоков, формирование сайта в целом, тестирование, доработка сайта и исправление ошибок.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-8 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Адаптивная вёрстка сайта (она позволяет работать с сайтом на различных устройствах, в том числе
                            и мобильных).</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-9 rainbow_numb">
                        <p class="subservice_task_text subservice_task_text_info-site">Выпуск сайта в открытый доступ и техническая поддержка в дальнейшем.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="slider padding_top_130 structure med_org wordpress_media">
    <div class="container container_one">
        <div class="structure__blocks">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black padding_bottom_40">Преимуще&shy;ства работы с «Веб Фокус»</h2>
                <div class="static_list-title">Почему мы предлагаем Вам разработку сайта на платформе WordPress?</div>
                <ul>
                    <li class="top30">Качество выполнения
                        <p class="static_list-p">У нашей команды адекватное соотношение скорости работы, финансовых вложений, а также качества работы. Мы не обещаем бесплатно и за одну неделю, но соотношение факторов будет адекватным.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Индивидуаль&shy;ный подход
                        <p class="static_list-p">Мы создаём продающий и единственный в своём роде сайт, который будет по максимуму исключать в себе шаблоны, а значит, будет привлекательным для посетителя.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Команда не бросает клиента на половине пути
                        <p class="static_list-p">Команда не бросает клиента на половине пути. Мы совершенствуем проект на каждом этапе доводим работу до закономерного её завершения.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4">Отвечаем на все вопросы
                        <p class="static_list-p">Мы постоянно готовы внятно ответить на интересующие Вас вопросы и не прячемся от клиента за кипами проектной документации.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5">Удобная система оплаты
                        <p class="static_list-p">Наши клиенты могут ознакомиться с нашим прайсом, воспользовавшись онлайн-калькулятором на сайте.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__6">Отсутствие излишней документации
                        <p class="static_list-p">Использоваться будут только те бумаги, которые по максимуму нужны для реализации проекта.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto product_list_medical">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/wall.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/wall-1090.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/wall-768.png" alt="img" class="product_list_medical_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/wall-375.png" alt="img" class="product_list_medical_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Заказ создания платформы в агентстве «Веб Фокус» избавит Вас от параллельного поиска разных программистов, дизайнеров, копирайтеров, SEO-специалистов, чтобы создать один сайт. Если Вы закажете сайт у нас – вы получите экономию денег и времени (поскольку Вам не придётся искать всю команду на разных ресурсах и переплачивать).
                                <br><br>
                                В нашем агентстве работают люди, которые относятся к своему труду с душой и имеют обширный опыт в вопросах создания сайтов как на платформе WordPress, так и на прочих. Мы можем гарантировать качество и своевременную реализацию Вашего проекта.
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

<?php get_template_part('modules/form_two'); ?>


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_footer() ?>