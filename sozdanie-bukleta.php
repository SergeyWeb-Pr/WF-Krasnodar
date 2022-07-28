<?php
/*
Template Name: Создание буклета
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
                <p class="header_link_str_twxt display-none-768">Создание буклета</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание буклета</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one">
                Дизайн буклетов способен вызвать интерес читателя еще до открытия. Они используются в сфере образования и для освещения важной информации, содержат в себе программы культурных мероприятий и конечно используются для рекламы. Создание буклета – давно известный инструмент маркетинга, который работает безотказно со дня своего изобретения по сегодня.
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
        <p class="preview__subtitle padding_bottom_10 p2_white">секрет в мастерстве
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Секрет в мастерстве</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">С буклетами имели дело все. Их раздают на выставках, ярмарках, промоутеры распространяют у входа в торговый центр, но обратит ли прохожий внимание на содержащуюся информацию, окажись рекламный буклет у него в руках?
                            Не во всех случаях.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Имея опыт в этом вопросе, мы знаем, как привлечь внимание прохожего, подтолкнуть к прочтению информации, перевести прохожего в ранг заинтересованного клиента. Во всём этом нам поможет навык создавать успешный и не заезженный дизайн. Наши буклеты работают. Создание буклета станет для наших дизайнеров источником вдохновения, а для заказчика выгодным сотрудничеством. Мы привыкли делать заманчивый дизайн буклета, стоимость которого окажется меньше ожидаемой.
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
        <p class="product__list-subtitle p2_black">сформируйте для себя запрос</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Сформируйте для себя запрос</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Чтобы рекламная кампания получилась успешной нужно продумать мелочи ее организации. Чётко спланированная кампания – это уже половина дела. <br><br>
                            Только после формирования чёткого представления
                            можно приступать к составлению задания для исполнителя.
                            При выборе мастера будьте осторожны, не ведите дело
                            с неопытным дизайнером.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Правильным решением станет заказать дизайн буклета, стоимость и качество которого разумно взвешены. В этом может помочь компания «Веб Фокус». В нашей команде над проектами работают опытные дизайнеры и копирайтеры, что гарантирует качество исполнения.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Убедитесь, что Вы учли все тонкости:</div>
        <div class="subservice_task_wrapper padding_top_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Выберите способ распространения брошюр.
                        </div>
                        <div class="subservice_task_item">
                            Презентация, почтовая рассылка, раздача на улице или выдача покупателю на кассе магазина. Любой вариант может сработать.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Выберите настроение.
                        </div>
                        <div class="subservice_task_item">
                            Определитесь, какое настроение должен нести
                            в себе дизайн и к чему должен подводить текст. Дизайн может быть официальным или настраиваю –
                            щим на позитивный лад. Текст может приближать читателя к покупке или рассказывать о преимущес –
                            твах компании.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Бонусы для покупателя.
                        </div>
                        <div class="subservice_task_item ">
                            Мы рекомендуем предлагать клиенту скидки
                            и подарки при условии предъявления брошюры. Это увеличивает число заинтересованных потребителей.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Формирование мнения о компании.
                        </div>
                        <div class="subservice_task_item ">
                            Изучив буклет, покупатель будет иметь представление о фирме. Подумайте, какой посыл предпочтительно вложить в дизайн и суть текста, чтобы вызвать у человека правильное восприятие.
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

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">сформируйте для себя запрос</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Черты рабочего инструмента продвижения</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Существует масса характеристик, учитываемых при создании буклетов. Полиграфия не должна выглядеть низкопробно, для этого должна применяться качественная печать, специальная бумага и конечно оригинальный дизайн.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Разработка дизайна буклета с учётом всех требований даст результат повышенного отклика от рекламной кампании. Заказав услугу у компании «Веб Фокус», Вы получите привлекательную брошюру, созданную с умом. Мы вложим
                            в работу опыт и трудолюбие, хороший вкус и заботу о клиенте. Мы работаем для тех, кто привык получать за свои деньги лучшее.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Выделим основные моменты, учитываемые
            в дизайне, созданном нашей командой:</div>
        <div class="subservice_task_wrapper padding_top_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Яркий внешний вид.
                        </div>
                        <div class="subservice_task_item">
                            Общая картина должна говорить с потенциальным клиентом и этот диалог должен вызывать исключительно положительные эмоции. Красочные картинки, подобранные со вкусом только добавят интереса к брошюре. Подобранный цвет способен приковать взгляд и плавно перевести его на текстовый материал. А текст — это тот элемент, прочтение которого способно привести клиента
                            Вам в руки. Дизайн буклетов, разработанный командой «Веб Фокус», содержит гармонично подобранные изображения близкие или напрямую относящиеся к теме брошюры.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Акцент на основной мысли.
                        </div>
                        <div class="subservice_task_item">
                            Буклет это источник информации не рассчитанный
                            на размах повествования. Он создан, с целью
                            быстро и лаконично познакомить будущего клиента
                            с компанией, рассказать о преимуществах или рекламном предложении. Не стоит добавлять то,
                            без чего можно обойтись. Копирайтеры создадут подходящий текст, способный завлечь и очаровать.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Подобранный шрифт.
                        </div>
                        <div class="subservice_task_item">
                            Текст должен легко читаться. Это главное требование
                            к буклету. Невозможность передачи сообщения вложенного автором делает его бесполезным. Именно поэтому важно заказывать дизайн макета буклета
                            у профессионалов. Мы гарантируем применение подобранных и читаемых шрифтов, текста, составлен –
                            ного опытными копирайтерами и эстетики в дизайне.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Ориентация на целевую аудиторию.
                        </div>
                        <div class="subservice_task_item ">
                            Привлечение клиентов является целью буклета.
                            Для реализации задумки нужно продумать мелочи связанные с этой задачей. Взяв в расчёт интересы потребителя можно правильно подобрать цвета,
                            в которых буклет будет представлен публике.
                            В зависимости от пола, возраста, иных особенностей целевой аудитории можно выбрать наиболее подходящую комбинацию во внешнем оформлении.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Вёрстка с учётом пожеланий.
                        </div>
                        <div class="subservice_task_item ">
                            Буклет это сложная конструкция. Он состоит не из одной или двух сторон, он складывается определён –
                            ным образом. Есть несколько вариантов, как можно сложить рекламный буклет. Под выбранный вариант нужно произвести вёрстку. Как сложенный, так
                            и раскрытый вариант должны хорошо смотреться, рисунки сочетаться между собой, а дизайн быть единым. Насколько бы сложный Вы не заказали дизайн буклета, цена оправдает Ваши лучшие ожидания.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">06.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Бонусы в подарок.
                        </div>
                        <div class="subservice_task_item ">
                            Наличие подарочного купона пусть даже на неболь –
                            шую сумму распечатанного на буклете приведёт
                            к уменьшению числа прохожих проигнорировавших предложение. Он станет более интересен т.к. несет выгоду получателю. Выкидывать такой буклет не захочется, а вот прийти в магазин и воспользоваться скидкой еще как.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

<section class="subservice_rules padding_top_130 padding_bottom_130 open_cart_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">работаем на общее благо
        </p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 max-width650">Создание буклетов: работаем на общее благо</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer grid_gap_40">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black">

                        Увы, в рекламной среде не часто приходится видеть необычные и свежие идеи для буклетов. Чаще дизайнеры создают под копирку, забросив в дальний угол креативность и следование правилам создания качественного продукта. В погоне
                        за прибылью они забыли про основную задачу маркетинга.
                        <br><br>
                        Мы учли ошибки коллег и пришли к решению выделиться
                        на фоне остальных исполнителей. Компания «Веб Фокус» предлагает достойный уровень исполнения заказа. Мы не завышаем стоимость на свои услуги, гарантируя качество исполнения.
                        <br><br>
                        У Вас есть весомая причина выбрать нашу компанию для работы над заказом. Мы трудимся, чтобы клиент превзошёл конкурента. Успех заказчика несёт нам благодарные отзывы
                        и новые заявки. Решение заказать дизайн буклетов нашей команде станет выгодным вложением с перспективой
                        на сотрудничество с проверенной командой в будущем.

                    </p>
                </div>
            </div>
            <div class="opencart_rules_logo">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-1090.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-768.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient34-375.png" alt="" class="opencart_rules_logo_img">

            </div>



        </div>

    </div>
</section>



<?php get_footer() ?>