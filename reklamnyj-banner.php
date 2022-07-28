<?php
/*
Template Name: Рекламный баннер
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
                <p class="header_link_str_twxt display-none-768">Рекламный баннер</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Рекламный баннер</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">главное
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Зачем нужен рекламный баннер</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Уже долгое время большое количество трафика и рост продаж бизнесу в интернете обеспечивают рекламные баннеры, Краснодар также подхватил эту волну. Способ довольно старый, а значит проверенный. Считается одним
                            из лучших способов взаимодействия с целевой аудиторией. Баннерная реклама станет незаменимым помощником
                            в раскрутке бизнеса.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">требования современного баннера</p>
                <h2 class="h2_black">Забота о будущем клиенте</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Разработка варианта соответствующего требованиям современного баннера включает
                    в себя нюансы, учёт которых вознаграждается:</div>
                <ul>
                    <li class="top30">Бережное отношение к будущему клиенту.
                        <p class="static_list-p">Посетитель заходит на сайт партнёра рекламной
                            сети Яндекс или Гугл ради поиска интересующей информации. Хорошо когда баннер при этом
                            в поле зрения, но не забирает на себя всё внимание. Некоторые владельцы сайтов позволяют себе добавлять на страницы, всплывающие поверх контента рекламные окна и запрос регистрации. Это вызывает у посетителей недовольство. Точно так же как и пёстрый или слишком навязчивый баннер. Компания «Веб Фокус» разработает баннер клиентам из Краснодара и Краснодарского края по выгодным ценам и за короткие сроки. Мы подготовим материал в соответствии с последними данными о характеристиках демонстрирующих лучшие результаты. Эстетичные и ненавязчивые рекламные баннеры Краснодар оценит куда лучше.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Внимание к каждой детали.
                        <p class="static_list-p">На отклик посетителя влияет много аспектов. Если уделить внимание каждой получим высокие показатели. Размер баннера следует грамотно подобрать. Слишком большой будет бросаться в глаза, но в то же время
                            не будет вызывать у посетителя желания ознакомиться
                            с ним. Реклама не должна занимать половину страницы, но быть чересчур компактной тоже не вариант. Цветовая гамма фонового рисунка должна быть подобрана человеком сведущим в графике и сочетании цвета.
                            Текст объявления продуман профессиональным копирайтером. Заголовок должен цеплять клиента. Анализ «тепловой карты» среднестатистического сайта подскажет выгодное расположение для рекламы.
                            Как правило, это «шапка» сайта и верхний левый угол. Несмотря на количество нюансов, которые требует учитывать баннер реклама, стоимость на услуги наших специалистов остаётся демократичной.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Цель рекламной кампании.
                        <p class="static_list-p">Нужно определиться, ради чего начата рекламная кампания. Если в роли конечной цели выступает продажа товаров или оказание услуг рекламу лучше делать в ином стиле, нежели рекламу для раскрутки бренда и повышения его узнаваемости. Создавая рекламные баннеры услуг и товаров, акцент делается
                            на текстовую составляющую. В случае раскрутки
                            бренда – на создание ассоциации или акценте
                            на преимуществах фирмы. Использование логотипа
                            в дизайне будет являться обязательной составляющей. Так же характерно применение фирменной цветовой гаммы. Для получения отдачи нужно учитывать этот фактор как основной, грамотное оформление влияет
                            на результат.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient29.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient29-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient29-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient29-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Придерживаясь строгих правил можно создать рекламный баннер, дизайн которого понравится любому посетителю. Для этого он не должен быть пёстрым. Это привлекает внимание, но приятного в таком элементе мало. Мигания и переливания цвета в баннере недопустимы. Мы делаем ставку на эстетику и текстовую составляющую, чтобы вызвать у потребителя симпатию. Клиент должен проявить желание кликнуть по рекламе, перейти и произвести целевое действие.<br><br>

                                Наши маркетологи и дизайнеры создадут рекламу в соответствии со всеми стандартами. Изготовление рекламных баннеров по правилам даст желаемый результат, что подтверждает опыт компании «Веб Фокус». Реклама нашего производства всегда завлекала клиента своей информативностью и привлекательным дизайном.<br><br>

                                Также мы можем разработать дизайн баннера для наружной рекламы. Оповестите Краснодарский край о возможности воспользоваться вашими услугами. В некоторых случаях наружная реклама эффективна не меньше рекламы на сайтах. Ее увидит масса народа, а разработанный у нас дизайн останется в памяти будущего клиента как показатель успешности фирмы. Ведь дизайн баннера, наружного и онлайн–рекламы это лицо компании и чем он презентабельнее, тем больше доверия исходит от клиента.
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
        <p class="product__list-subtitle p2_black">новые возможности</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Новые возможности</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Баннер представляет собой специальный блок на сайте компании партнера рекламной сети, в котором размещается рекламный материал. При верном подборе изображении
                            и слов для текста можно привлекать много просмотров,
                            что вытекает в продажи и раскрутку. Разработкой баннера дающего результат займётся компания «Веб Фокус». Изготовление рекламных баннеров та сфера, в которой нашим мастерам нет равных. Реклама от нашей компании каждый раз радует клиентов, принося им заказы и увеличивая прибыль.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Привлекая внимание яркой картинкой, мы можем говорить
                            о гарантированно успешной рекламной кампании. Использование завлекающего текста, например информация о скидках в -50% обязательно усилит показатель. Сайты партнёры рекламных сетей обычно размещают баннеры в тех местах, где она заметна более всего. То, что метод живёт уже много лет, позволило продумать мелочи связанные с ним.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Благодаря баннерной рекламе эффективно можно добиться:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Продажи товара или заказа услуг компании.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Рекламы партнёрских сайтов.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Донесения информации о скидках и акциях.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Заинтересовать продуктом или услугой.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Раскрутить бренд, сделать его узнаваемым.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Если у Вас есть бизнес, то наверняка будет интересен хотя
                            бы один из пунктов. Решив заказать рекламный баннер компании «Веб Фокус», Вы добьётесь успеха в продвижении
                            и увеличении количества продаж. Профессиональный подход даёт гарантию высоких показателей конверсии баннера.</p>
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

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">содержание и внешний вид</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Содержание и внешний вид</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Минимализм во внешнем виде и информативность материала – то, что нужно при создании интернет-рекламы. Взвешенная
                            со всех сторон баннер реклама, цена которой благоволит
                            на совершение заказа более чем подходит успешному
                            и рациональному предпринимателю.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Структура баннерной рекламы создаваемой нами содержит:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Фоновую картинку в потрясающей цветовой гамме, созданную нашими лучшими дизайнерами.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Лого компании для раскрутки бренда.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Заголовок, цепляющий покупателя.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Текст, написанный проверенными временем копирайтерами.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Призыв клиента к покупке, заказу или переходу.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Соединение компонентов в единый элемент приведет
                            к повышенному количеству переходов и конверсий.
                            Рекламу начнут замечать, потому что вещи, сделанные профессионально и со вкусом заметны издалека. Выбирайте лучших для работы над раскруткой своего дела.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Компания «Веб Фокус» готова содействовать продвижению. Для этого мы сумеем побороть «баннерную слепоту» посетителей. Запоминающийся, эффектный дизайн будет замечен будущим клиентом. Разработанные в соответствии
                            с правилами рекламные баннеры Краснодар оценит
                            по достоинству.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<?php get_footer() ?>