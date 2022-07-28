<?php
/*
Template Name: Баннер
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
                <p class="header_link_str_twxt display-none-768">Баннер</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Баннер</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">определние
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Реклама – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Реклама – это двигатель торговли, а баннеры – главный рекламный элемент в интернете. Без качества в этом деле
                            не обойтись, поэтому в нашей команде работают лучшие
                            из лучших, чтобы создавать достойные баннеры. Краснодар по праву оценит Вашу рекламу!</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Любая модернизация всегда дается нелегко. Так и перед тем, как заказать редизайн сайта, логотипа или фирменного стиля нужно подойти к этому процессу с большой аккуратностью, чтобы не сделать хуже. Это в дальнейшем скажется на имидже компании.<br><br>

                            Доверить редизайн сайта или фирменного стиля специалистам «Веб Фокус» − значит дать ему новую
                            и успешную жизнь.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">основные элементы</p>
                <h2 class="h2_black">Новые возможности</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Баннер должен быть содержательным, включать в себя основные элементы:</div>
                <ul>
                    <li class="top30">Фоновое изображение.
                        <p class="static_list-p">Смотря реальную статистику отклика на баннеры, Краснодар считает привлекательными фоновые изображения в стиле поп-арт и фотографии
                            с изображением людей, выражающих ярко позитивные эмоции. Фоновое изображение должно быть ярким, праздничным, но не пёстрым или заезженным.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Броский заголовок.
                        <p class="static_list-p">Если первый пункт занимается привлечением внимания, то второй отвечает за последующую заинтересованность. Чем более кратким, но цепким
                            для глаза окажется заголовок, тем больше переходов,
                            а следственно и конверсий удастся собрать нам с вами.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Цепкий текст.
                        <p class="static_list-p">Текст баннера выполняет следующую функцию.
                            После привлечения внимания «сочной» фоновой картинкой и вызвав интерес человека броским названием, мы удерживаем его внимание коротким,
                            но информативным текстом всего в пару строк. Шрифт должен быть читабельным.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Лого компании.
                        <p class="static_list-p">Эта деталь остается в памяти как часть образа
                            фирмы, которая сумела вызвать интерес. Даже
                            если пользователь пропустил рекламу в этот раз,
                            уже запомнившийся образ может сыграть на руку
                            в последующем упоминании или при взаимодействии
                            с компанией.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 structure-list__6-top30">Призыв совершить действие.
                        <p class="static_list-p">Разработка дизайна баннера включает в себя задачу подтолкнуть пользователя к переходу в ранг клиента. Возможным вариантом может стать слово «купить»
                            или «узнать подробности акции».</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient28.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient28-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient28-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient28-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Если мы говорим об успешной стратегии проведения рекламной кампании с помощью получившего признание масс инструменту – баннеру, мы подразумеваем, что данный элемент необходимо делать, учитывая специфику дизайна конкретной компании, для которой подготавливается проект. Наши дизайнеры, по праву заслужившие звание профессионалов в обязательном порядке проведут анализ цветовой схемы и направления стиля вашего бренда, в соответствии с которыми подготовят рекламный материал.<br><br>

                                Предприниматель, который ищет как купить баннер в Краснодаре, наконец, нашел ответ на свой вопрос. Мы подготовим его для вас, согласовав все детали и задействовав всю гамму профессионализма наших дизайнеров. Больше не придется беспокоиться о том, что у вас еще нет притягательного баннера.
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
        <p class="product__list-subtitle p2_black">задачи</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Задачи баннерной рекламы</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Во всех уголках России слышали про баннеры, Краснодар
                            не исключение. Каждый современный сайт использует рекламу, большинство из которой баннерная. Кто из нас
                            не видел ее, но все ли знают что это такое?</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Баннерная реклама в сети – это вид рекламы, который выражается в объединении нескольких форматов. Как правило, она включает в себя текстовый и графический элементы. Размещается на всевозможных интернет-ресурсах, информационных порталах, форумах, в социальных сетях
                            и прочих сайтах.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Какие задачи решает баннерная реклама:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Повышение спроса на товар или услугу.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Получение трафика благодаря активному привлечению внимания.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Позволяет рассказать о новых товарах, скидках и акциях.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Повышает узнаваемость бренда.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Можно заметить, что решение заказать баннер со своей рекламой несет прямую выгоду. Команда маркетологов, дизайнеров и мастеров SEO продвижения компании
                            «Веб Фокус» готова подготовить заказчику уникальный продуманный баннер, включающий в себя все тонкости раскрутки бренда и привлечения целевого трафика.</p>
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
        <p class="product__list-subtitle p2_black">виды баннеров</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Какие бывают виды баннеров</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">После перечисления основных преимуществ дальновидного предпринимателя не может не посетить желание приобрести настолько успешный инструмент рекламы.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Однако прежде чем заказать, нужно разобраться какие виды баннеров существуют, чтобы подобрать подходящий для вашего бизнеса:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color1">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Статичные.
                        </div>
                        <div class="subservice_task_item">
                            Неподвижный баннер, состоящий из классических элементов. Проверено временем. Не раздражает посетителя перетягиванием всего внимания
                            на себя. Способны доносить небольшое количество информации, рекламируя исключительно фирму или один конкретный товар. При желании заказать такой баннер в городе Краснодар, цена станет для вас приятным сюрпризом.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color4">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            GIF–баннеры.
                        </div>
                        <div class="subservice_task_item">
                            Подразумевают использование анимированной графики. Смотрятся естественно, вызывая позитивный отклик у пользователей при исполнении элемента
                            со вкусом, без пёстрых красок и слишком быстрой анимации. Достойным представителем анимирован –
                            ного баннера является ротатор. Он позволяет продемонстрировать набор объявлений – «перелистывание» нескольких баннеров. Разработка баннера такого типа требует наличия у специалиста знаний в области моушн–дизайна. Среди постоянных членов нашей команды присутствуют и такие мастера.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Самый функциональный вид.
                        </div>
                        <div class="subservice_task_item ">
                            Программируемый баннер позволяет использовать не только картинки и анимации, но и музыкальное сопровождение. Автоматически определяет допустимый размер, позволяет добавить элементы управления.
                        </div>
                    </div>
                </div>

                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Стоимость баннера выражается не в сумме, затраченной на его производство, а в количестве конверсий, которые он принесет. При всём имеющемся профессионализме нашей команды, задействованные средства помогут получить дополнительный доход, не раз окупив себя. Креативная реклама может использоваться многократно, не теряя эффективность долгое время.<br><br>

                            Помимо типа визуального элемента подумайте о желаемых размерах, прежде чем заказать баннер. Размер баннера напрямую влияет на эффективность. Чем он больше, тем сложнее не заметить.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    Стоимость баннера выражается не в сумме, затраченной на его производство, а в количестве конверсий, которые он принесет. При всём имеющемся профессионализме нашей команды, задействованные средства помогут получить дополнительный доход, не раз окупив себя. Креативная реклама может использоваться многократно, не теряя эффективность долгое время.<br><br>

                    Помимо типа визуального элемента подумайте о желаемых размерах, прежде чем заказать баннер. Размер баннера напрямую влияет на эффективность. Чем он больше, тем сложнее не заметить.
                </p>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Какие задачи решает баннерная реклама:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    240х400
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    728х90
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    300х250
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    300х600
                </div>
            </div>
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    336х280
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    300х500
                </div>
            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    970х250
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    640×200
                </div>
            </div>
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    640×960
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue margin_bottom_20">
                    960х640
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">алгоритм работы</p>
        <h2 class="h2_black subservice_task-title">Алгоритм работы</h2>


        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Мы работаем по такому алгоритму:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Начало работы
                        </div>
                        <div class="subservice_task_item">
                            Заполнение брифа, анализ баннерной рекламы конкурентов, запрос материалов.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            План реализации
                        </div>
                        <div class="subservice_task_item">
                            Построение оптимальной концепции работы, выделение преимуществ компании.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Создание контента
                        </div>
                        <div class="subservice_task_item">
                            Продумывание УТП, слоганов, отрисовка эскизов
                            и согласование
                            с заказчиком.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Разработка баннера
                        </div>
                        <div class="subservice_task_item">
                            Реализация концепции дизайна и детальная проработка элементов баннера.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Утверждение макета
                        </div>
                        <div class="subservice_task_item ">
                            Визуализация пожеланий заказчика и согласование готового дизайна с заказчиком.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">06.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Добавление эффектов
                        </div>
                        <div class="subservice_task_item  margin_bottom_40">
                            Анимирование готового баннера
                            (gif-баннеры, html5-баннеры, видео-баннеры).
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">07.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Заключительный этап
                        </div>
                        <div class="subservice_task_item  margin_bottom_40">
                            Внесение корректировок от заказчика
                            и окончательное утверждение.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">08.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сдача проекта
                        </div>
                        <div class="subservice_task_item  margin_bottom_40">
                            Тестирование работы баннера и
                            передача работы клиенту с соблюдением сроков.
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<?php get_footer() ?>