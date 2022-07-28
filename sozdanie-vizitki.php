<?php
/*
Template Name: Создание визитки
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
                <p class="header_link_str_twxt display-none-768">Создание визитки</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Создание визитки</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one">
                Дизайн создания визиток влияет на отношение к Вам и бизнесу. Слабое оформление, полиграфия низкого качества могут стать причиной потери клиента. Обеспечьте себя и сотрудников визитками высокого класса. Закажите создание визитки в компании «Веб Фокус» и оцените, насколько лояльнее
                к Вам будут клиенты и новые партнёры.</p>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">с любой задачей
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Справимся с любой задачей</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Самым популярным форматом остаётся печать на плотной бумаге, пластике или картоне. Форм-фактор чаще прочего выбирают прямоугольный с размерами 50 на 90 мм. Но
                            к чему делать как все, если можно сделать иначе?
                            Некоторые компании выбирают изготовление из металла, что более чем оригинально. Сложность состоит только в поиске места печати нестандартного заказа. Насколько бы не была оригинальна Ваша идея, грамотная разработка макета визитки с учётом пожеланий клиента остаётся нашей задачей.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Подбор шрифта и цвета важен. Цвета не должны быть слишком яркими, шрифт должен вписываться в общую картину. Оригинальные графические детали придадут карточке вкус и своеобразность. Однако нужно помнить,
                            что перегружать визитку графикой никак нельзя. Допустимо применение фирменных знаков и логотипов, орнаментов
                            и прочего декора, но их не должно быть много. Дизайн должен быть лаконичен.
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
        <p class="product__list-subtitle p2_black">проработка до мелочей</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Проработка до мелочей</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Визитные карточки плотно прижились в деловых отношениях. Без этого маленького, но удобного элемента корпоративной культуры не обойдётся ни один сотрудник и тем более руководитель фирмы. Фильмы о дельцах бизнеса показывают джентльменов в дорогих костюмах, производящих ритуал обмена визитными карточками, договариваясь о новом стартапе на миллионы долларов. В их руках сложно представить скучную визитку, скорее в кадре появится карточка авторской работы.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Чтобы не отставать от образа успешного человека, можно заказать дизайн визитки компании «Веб Фокус». Наши дизайнеры подготовят неповторимую работу, подходящую
                            под сферу бизнеса компании.<br><br>

                            Мы стремимся выделить наш дизайн из массы подобных
                            друг другу изделий. Заставить карточку нести не только коммуникативную и информационную функцию,
                            но и подчёркивать имидж владельца. Стараемся сделать неповторимый дизайн визитки, цена на которую не станет препятствием к приобретению.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Для изготовления соответствующего элемента личного имиджа мы определим основные условия:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Характеристика человека или группы людей, которым визитка будет принадлежать.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Кто является среднестатистическим клиентом фирмы.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Предполагаемая функция карточки.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_green margin_bottom_20">
                    Планируемое настроение, которое несет в себе визитка.
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

<section class="bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">подходящий вариант</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Подходящий вариант</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Первостепенная задача дизайнера при создании
                            карточки поставить себя на место получателя. Необходимо сформировать у человека представление о статусе обладателя визитки, вызвать желание позвонить, предложив лучшие условия для сотрудничества. Разработка визиток более сложный процесс, чем может показаться человеку со стороны, но учёт тонкостей даёт действительно достойный результат.
                        </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Определение назначения визитки тонкость, которую
                            многие исполнители упускают. Однако для нас важно сделать не только привлекательно, но и по уму. Заказчик должен определиться с видом карточки либо описать задачи, которые она должна решать. Понимая для чего заказчику необходима визитка, какие нужды она закрывает и где будет применяться дизайнеры компании «Веб Фокус» принимаются за создание макета и прорисовку дизайна будущей карточки.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_bottom_40 padding_top_40">Всего существует три вида визиток:</div>
        <div class="subservice_task_wrapper ">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Личная визитка.
                        </div>
                        <div class="subservice_task_item">
                            Содержит в себе минимальную информацию
                            о владельце. Фамилию и имя, реже отчество.
                            Также должен быть адрес или телефон. Создаётся
                            не для ведения дел, скорее под личные нужды человека. Дизайн включает в себя минимум элементов, практичен.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Деловая карточка.
                        </div>
                        <div class="subservice_task_item">
                            От нее веет официальностью. Содержит имя, фамилию и отчество владельца, название фирмы и отрасль деятельности. Как и в первом случае обязателен телефон и адрес офиса. Имеются требования
                            к структуре. В верхней строчке указываются имя
                            и отчество, строкой ниже фамилия. Обязательно придерживаться фирменного стиля в дизайне, использование логотипа. Для лиц на государственной службе символика в виде флага и герба страны.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Корпоративная карточка.
                        </div>
                        <div class="subservice_task_item ">
                            Создаётся для предоставления информации
                            о компании. Описывается род деятельности фирмы, перечисляются услуги, которые она оказывает. Телефон центрального офиса, адрес, адрес сайта компании обязательные атрибуты. Дизайн визиток выполняется в корпоративном стиле, логотип неотъемлемая его часть.
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

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">начало для достойного результата</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Создание визитки – начало для достойного результата</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Определившись с деталями, необходимо связаться
                            с менеджером компании «Веб Фокус», чтобы поставить задачу разработки макета. Уточнив детали, наши дизайнеры начнут кропотливую работу. Макет будет представлен на одобрение, после чего на его основе мы воплотим идею в жизнь. </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Разработка дизайна визиток трудоёмкий процесс.
                            Не экономьте на бумаге и печати, чтобы передать роскошь стиля карточки. Дизайн, созданный нашими мастерами
                            и качественная полиграфия способна поднимать Ваш имидж каждый раз, когда визитка попадает в руки делового партнёра или будущего клиента.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Когда дизайн готов пора задуматься о печати, она бывает:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue4 margin_bottom_20">
                    Офсетная.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue4 margin_bottom_20">
                    Цифровая.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue4 margin_bottom_20">
                    Методом шелкографии.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue4 margin_bottom_20">
                    Теснением.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_blue4 margin_bottom_20">
                    Способом термоподъёма.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Хороший внешний вид карточки улучшает имидж компании.
                            В результате работы дизайнерской команды Вы сможете наслаждаться авторскими брендированными визитками премиум класса. Разработка визиток с творческим подходом
                            к делу гарантированно принесёт ожидаемый заказчиком результат. Печать может содержать возможность придания визитке текстуры. Это интересная мелочь, она может выделить карточку из тысяч других. Кроме визуальной составляющей человека можно заинтересовать тактильными ощущениями. Попав в руки, экземпляр вызовет любопытство и может запомниться. Остаться в памяти инвестора или выгодного партнёра тоже весьма важно.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Особенно метод хорош, если нестандартная форма не для
                            Вас. Большинство создают визитки обычными, скучными.
                            С дизайном от наших мастеров и фишками в печати и форм-
                            факторе Вы будете иметь выгодное отличие от конкурентов.
                            Дизайнеры компании «Веб Фокус» выделят бренд среди тысяч подобных благодаря грамотному дизайну и уникальности. Минимализм и эстетичность лучше всего описывает наши работы созданные в прошлом. Благодарные заказчики закрепили за собой статус работников и владельцев компаний, для которых качество стоит на первом месте. Дизайн визиток от компании «Веб Фокус» будет вызывать уверенность и симпатию у Ваших партнёров каждый раз при упоминании Вашей фирмы.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>