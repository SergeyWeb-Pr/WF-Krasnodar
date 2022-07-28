<?php
/*
Template Name: Дизайн флаера
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
                <p class="header_link_str_twxt display-none-768">Дизайн флаера</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Дизайн флаера</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">делаем со вкусом
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Делаем со вкусом</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Какой бы формат не выбрал заказчик, стиль минимализм или яркий и броский с множеством элементов в любом случае флаер не получится скучным. Правильное использование цвета способно передать настроение и заинтересовать.
                            Если флаер нацелен на рекламу бара, цветовая гамма
                            будет отличаться от цветов рекламы мебельного магазина.
                            Разработка флаера подразумевает конкретность и красоту
                            в деталях. Прохожий, получив в руки листовку должен не просто получить полезную информацию, он должен ощутить себя на рекламируемом мероприятии либо у витрины Вашего магазина. Реклама должна создавать образ, который хочется прожить. В этом и состоит задача компании «Веб Фокус».
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Дизайн должен наводить человека на оптимистичные ноты, он не должен быть скучным и серым, привлекательность кроится не в этом. Следуя правилам, мы подготовим флаер
                            с лучшими показателями отклика. Решение заказать дизайн флаера у нас принесёт выгоду Вам и удовлетворение
                            от качества клиенту. Не стоит забывать и о качестве печати. Плотная бумага и полиграфия будет оценена аудиторией. Выполняйте печать в лучших типографиях, чтобы будущий клиент ощущал заботу о себе уже на этом этапе. Чем дороже ощущается реклама, тем статусней смотрится бренд,
                            а продуманный дизайн скажет многое о креативе компании. Люди стремятся получить лучшее, потому пора оставить заявку на флаер, дизайн которого будет по праву оценен покупателем и принесет Вам доход и постоянных клиентов.
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
        <p class="product__list-subtitle p2_black">функции</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Функции флаера</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">До мелочей проработанный дизайн флаера отличается лаконичностью, но и его содержание при этом информативно вызывает симпатию у будущих клиентов. Как известно, распространение листовок – это недорогой способ проинформировать аудиторию. Раздача не таргетирована,
                            но имеет широкий охват аудитории. <br><br>Минусом такой рекламы выступает то, что большинство листовок выкидывают почти сразу после вручения. Так происходят от раздачи всем в подряд, а не только целевой аудитории, что невозможно. От неверного выбора места проведения распространения. Мы изменим привычный устой.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Стоимость дизайна флаера может быть выше предлагаемой нами, а отклика будет меньше. Выбирайте исполнителя проверенного временем. Для компании «Веб Фокус» важно создать не просто флаер, но произведение искусства. Его будет жалко выкинуть, раз за разом он будет притягивать к себе взгляд, лёжа на журнальном столике будущего клиента. Наша команда поработает над дизайном и текстом, содержащимся во флаере сделав его лучше обычных листовок.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Флаер выполняет три функции:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Привлечение внимания к конкретной информации и фирме.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Информирование о предложении, акции или новинках.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink2 margin_bottom_20">
                    Помощь в осуществлении продажи.
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
        <p class="product__list-subtitle p2_black">краткость и эстетика</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Краткость и эстетика</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Дизайн рекламного флаера влияет на продажи в первую очередь. Однако без качественного содержания на одном дизайне продажу не сделаешь. Наша команда начинает разработку именно с содержания, обыгрывая его необычным дизайном.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Учёт всех параметров позволит создать листовку совершенно иного уровня, нежели сегодня привычно видеть в рекламной среде. Если Вы ходите заполучить достойную листовку, заказать дизайн флаера у нас станет верным решением. Команда «Веб Фокус» применит лучшее в оформлении 
Вашего заказа. Опыт наших дизайнеров вдобавок к жёстким требованиям по креативности и чувству прекрасного завлечёт Вам будущих клиентов рекламой, созданной с принципиально новым подходом к вопросу.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Притягательный флаер имеет определённые характеристики:</div>
        <div class="subservice_task_wrapper padding_top_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                        Краткость информации.
                        </div>
                        <div class="subservice_task_item">
                        Отсутствие громоздких текстов не вызывает 
у человека желания отложить флаер в сторону. Мы добавляем только основную информацию, которая будет полезна заинтересованному покупателю. Явные преимущества и акцент на главном – гарантия донесения информации до будущего клиента.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                        Изображения дополняют текст.
                        </div>
                        <div class="subservice_task_item">
                        Человек должен видеть то, что ему предлагают. Обыгрывая внешний вид, мы подбираем соответ –
ствующие изображения, чтобы человек сразу визуализировал рекламное предложение. В таком случае получаем флаер, дизайн которого подобен витрине магазина с лучшим товаром.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                        Акцент на основных элементах для мгновенного усваивания.
                        </div>
                        <div class="subservice_task_item">
                        Короткая, но важная информация наподобие скидки, бренда или номера телефона должна моментально бросаться в глаза, чтобы запомниться даже еще незаинтересованному лицу.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                        Шрифты важны.
                        </div>
                        <div class="subservice_task_item ">
                        Крупный шрифт для важного – шрифт поменьше для разъяснения. Удобство для чтения выступает важной особенностью при попадании флаера в руки получателя. Мы разработаем удобный дизайн флаера, цена которого станет приятным сюрпризом для заказчика.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">05.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                        Внешний вид.
                        </div>
                        <div class="subservice_task_item ">
                        И только после содержания идёт оформление листовки с обязательным задействованием креативности и учётом правил эстетики. Органично вписанные согласованные элементы способны образовать приятный и действенный флаер.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer() ?>