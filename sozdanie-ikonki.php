<?php
/*
Template Name: Создание иконки
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
                <p class="header_link_str_twxt display-none-768">Создание иконки</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание иконки</h1>
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
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Создание иконки
            в веб-дизайне – это </h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Создание иконки в веб-дизайне — это разработка изображения для обозначения информации с различными целями: описание товара, подчеркивание стилистической концепции, выражение посыла к покупке и т.д. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Дизайн иконки от профессионалов не только увеличит конверсию сайта и посещаемость аккаунта, но и отразится
                            на количестве продаж. Агентство «Веб Фокус» создаёт индивидуальные шаблоны изображений с учетом Ваших пожеланий, актуальных трендов в веб-дизайне, стилистических особенностей сайта.</p>
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


<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">разновидности, особенности и области применения</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Разновидности, особенности
            и области применения иконок</h2>
        <div class="bitrix_media__subtitle padding_bottom_40">Выделим основные функции иконок в разработке сайта:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Помогают сэкономить место на странице, при этом донести информацию до посетителя. Пользователь
                            не будет тратить время на перегруженный контент
                            с объемным, неструктурированным текстовым наполнением.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Миниатюрные изображения гораздо эффективнее воспринимаются потенциальными клиентами.
                            Так, например, размещение привычных символов
                            и образов ассоциируется с конкретными действиями: картинка с грузовым автомобилем подразумевает указание условий доставки, часы – срок изготовления товара, кошелек – стоимость, скидки, специальные предложения, документ – наличие сертификатов
                            на товар.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Ориентированность в интерфейсе.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">


                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Когда речь идет об иконках, чаще всего имеют в виду создание иконки для дизайна сайта или для оформления аккаунта
                            в Instagram, например, для закрепленных сторис. Изображения для соц. сети выступают в качестве обложки
                            для раздела с сохраненными видео. Цель – отобразить
                            общую идею, тематику набора коротких сторис. Это позволит пользователю быстро ориентироваться в контенте, находить
                            и просматривать интересный материал.<br><br>
                            Также важно учитывать стилистическую функцию данного элемента аккаунта. Небольшой значок сможет подчеркнуть единую дизайнерскую концепцию страницы, добавить оригинальности и выразить индивидуальность владельца.
                            При построении грамотного дизайна сайта веб-специалисты обращают внимание на детали и акценты, которые позволяют направить потенциального клиента на совершение целевого действия.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    Когда речь идет об иконках, чаще всего имеют в виду создание иконки для дизайна сайта или для оформления аккаунта
                    в Instagram, например, для закрепленных сторис. Изображения для соц. сети выступают в качестве обложки
                    для раздела с сохраненными видео. Цель – отобразить
                    общую идею, тематику набора коротких сторис. Это позволит пользователю быстро ориентироваться в контенте, находить
                    и просматривать интересный материал.<br><br>
                    Также важно учитывать стилистическую функцию данного элемента аккаунта. Небольшой значок сможет подчеркнуть единую дизайнерскую концепцию страницы, добавить оригинальности и выразить индивидуальность владельца.
                    При построении грамотного дизайна сайта веб-специалисты обращают внимание на детали и акценты, которые позволяют направить потенциального клиента на совершение целевого действия.
                </p>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="bitrix_media__subtitle padding_bottom_40">Для направления пользователя предусмотрен набор универсальных, международных символов:</div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Подобные элементы сайта позволяют пользователю быстро найти подходящий товар и оформить покупку.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Значок человека означает личный кабинет;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Изображение сердца позволяет просмотреть избранные товары или услуги;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Картинка тележки подразумевает добавление продукта
                    в корзину.
                </div>

            </div>
        </div>
        <div class="bitrix_media__subtitle padding_bottom_40">Виды иконок в дизайне:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color5">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Линейные: строгий минималистичный стиль, состоят из контуров, которые могут быть залиты одним или несколькими цветами;
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color6">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Иллюстрации: цветные прорисованные изображения, которые делают сайт ярким и оригинальным.
                            При разработке рисунков важно учитывать общую стилистику сайта, в которую они должны гармонично вписаться;
                        </div>
                    </div>
                </div>
            </div>
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color2">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Объемные изображения;
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color7">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Стандартные элементы: не сопровождаются рисунками, состоят из символов: стрелка, галочка, знак восклицания и т.д. С одной стороны, такой вариант не отвлекает от основного содержания,
                            но, с другой стороны, может не обратить на себя внимания потенциального клиента.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>



<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">задачи</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Как создание иконки влияет на конверсию сайта</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Продуманные изображения позволяют веб-специалистам повысить конверсию и мотивировать посетителей
                            к совершению желаемой сделки.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">В рамках стимулирования продаж они выполняют следующие задачи:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Обращают внимание на выгоды от покупки, преимущества компании;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Объясняют порядок оформления заказа, последовательность действий в работе бизнес-процессов компании;
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Формируют понятную карточку товара, дополняя и адаптируя текстовое описание для большей восприимчивости;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Акцентируют внимание на специальных предложениях,
                    что позволяет увеличить продажи конкретного товара.
                </div>
            </div>
        </div>


    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">причины</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Индивидуальное создание иконки</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Разработать дизайн изображения можно либо самостоятельно (с помощью приложений по дизайну иконок), либо обратившись к профессионалам. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Второй вариант, хоть и требует финансовых вложений, является предпочтительным
            по следующим причинам:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue3 margin_bottom_20">
                    Оригинальный проект;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue3 margin_bottom_20">
                    Учитывается общая стилистика сайта или аккаунта;
                </div>
            </div>
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue3 margin_bottom_20">
                    Специалист знает, что привлекает внимание посетителя сайта, а что, наоборот, не приведет к покупке;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue3 margin_bottom_20">
                    Принимаются во внимания актуальные тренды в онлайн – продвижении бизнеса.
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">цена</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Сколько стоит дизайн иконки</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Цена за разработку иконки, как правило, не является фиксированной.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Она зависит от нескольких факторов:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color7">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сфера деятельности компании.
                        </div>
                        <div class="subservice_task_item">
                            Создание оригинального изображения
                            для узкопрофильной компании стоит дороже,
                            чем, например, картинка для магазина одежды.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Профессионализм исполнителя.
                        </div>
                        <div class="subservice_task_item">
                            Услуги опытного веб-дизайнера отличаются высокой стоимостью и соответствующим результатом.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color6">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Срочность заказа.
                        </div>
                        <div class="subservice_task_item ">
                            Оперативность в исполнении может увеличить стоимость заказа в несколько раз.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Сложность стилистики
                            или аккаунта.
                        </div>
                        <div class="subservice_task_item ">
                            Сложность общей стилистики сайта или аккаунта.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">советы оформления</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Советы по оформлению иконок для сторис</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Раздел с сохраненными сторис стал важной составляющей
                            как личного, так и корпоративного аккаунта. Несмотря
                            на кажущуюся простоту, оформление обложки и контента для данного раздела требуют ответственного подхода. Посетители блога ценят удобство навигации и простоту восприятия.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Для того, чтобы Ваша страница отвечала названным ожиданиям, рекомендуем учитывать следующие правила при оформлении сторис:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Избегайте деталей.
                        </div>
                        <div class="subservice_task_item">
                            Картинка-обложка для набора видео подразумевает небольшой формат, на которым невозможно воспринимать мелкий шрифт и изображения.
                            Для придания ясности и лаконичности подписи достаточно одного слова;
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Уникальность.
                        </div>
                        <div class="subservice_task_item">
                            Готовые шаблоны из бесплатных приложений встречаются на каждой второй странице
                            в социальной сети. Избегайте скучных, однообразных вариантов, которые стандартизируют и обезличивают блог;
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Стилистика.
                        </div>
                        <div class="subservice_task_item ">
                            <p>Для пользователей соц. сетей важна визуальная составляющая страницы: единство цветовой гаммы, стиля изображений, шрифтов, рамок, подписей
                                и т.д. Перед тем как заказать создание иконки, ознакомьтесь с содержанием и спецификой оформления сторис, которые будут размещены
                                под данной обложкой. Также рекомендуем проанализировать общую концепцию аккаунта.<br><br><i>ВАЖНО: рисунок на светлом фоне упрощает восприятие, в то время как картинка на синем фоне заставляет всматриваться и напрягать зрение.</i>
                            </p>


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
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Веб-дизайнеры агентства «Веб Фокус» создают уникальный стиль при оформлении дизайна иконок для сайтов и аккаунтов в социальных сетях.</p>
                    </div>
                </div>

            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Для получения консультации о сроках, порядке и стоимости работ Вы можете оставить заявку на нашем сайте.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">При заключении договора специалисты:
        </div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_orange margin_bottom_20">
                    Помогут определиться с функцией, которую будет выполнять изображение: навигация, привлечение внимания, указание
                    на порядок действия и т.д.;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_orange margin_bottom_20">
                    Выберут стилистическое направление в оформлении;
                </div>
            </div>
            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_orange margin_bottom_20">
                    Оценят общую концепцию продвижения бизнеса, с учетом пожеланий заказчика создадут индивидуальные образцы изображений.
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

<?php get_footer() ?>