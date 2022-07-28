<?php
/*
Template Name: Баннер для сайта
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
                <p class="header_link_str_twxt display-none-768">Баннер для сайта</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Баннер для сайта</h1>
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
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Баннер для сайта – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Баннер для сайта – неоценимо важная деталь для продвижения бизнеса. Эта разновидность рекламы позволяет продавать товары в интернете быстро и в крупных объёмах. Без продвижения и огласки торговлю не сделаешь, в продаже товара поможет красочный и проработанный до мелочей баннер от компании «Веб Фокус».</p>
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
        <p class="product__list-subtitle p2_black">грамотный подход</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Грамотный подход</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Баннерной рекламной называют прямоугольные объявления, распространяемые с помощью сайтов партнёров Гугл
                            и Яндекс. Она размещается в заметных местах сайта: в «шапке» и по бокам страницы. Реклама такого вида таргетирована
                            и пользуется большой популярностью у заказчиков, имеющих бизнес в сети и в офлайн. Баннер состоит из статичного
                            или анимированного изображения, лаконичного текста
                            и заголовка. Клик по нему переводит заинтересовавшегося объявлением посетителя на сайт рекламируемой компании.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Таким образом, на сайт можно привести трафик,
                            который выльется в количество продаж. При грамотном проектировании доход многократно покроет расходы
                            на рекламную кампанию. Успех баннерной рекламы вызван внедрением поисковыми системами контекстного таргетинга. Это означает, что сайт про компьютерную технику выступит площадкой для рекламы компьютеров, а сайт автомобильной тематики предложит посетителю услуги по обслуживанию автомобилей. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Рекламные баннеры для сайта различаются
            не только по тематике, но и по содержанию:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Классические характерны использованием изображения формата JPEG или PNG. Не замедляют загрузку страниц сайта. Содержит однотонный фон, броский заголовок и короткий,
                    но заманчивый текст.
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Анимация как элемент рекламного объявления. Метод
                    не новый, но эффективный. Используются анимированные изображения GIF формата. Суть в том, что несколько кадров поочередно заменяют друг друга, создавая иллюзию движения. Здесь важно чтобы реклама привлекла внимание, но не мерцала и не кричала цветами. Создание баннеров
                    для сайта предполагает уважение к клиенту, следование последним мировым трендам, минимализм в дизайне.
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_yellow margin_bottom_20">
                    Программируемый баннер. Высший пилотаж
                    в мире рекламы на сайтах. Способен реагировать
                    на действия посетителя. Применяется анимация,
                    иногда с добавлением звуковых эффектов.
                    Забавляет пользователей, вызывая лояльность.
                    Часто представляют собой мини игры. После победы пользователя перекидывает на сайт рекламируемого бренда.
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Кроме прочего, баннеры различают по размеру. Важно чтобы он не был чересчур большим и слишком маленьким. Нужно найти оптимальный вариант.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Мы можем предложить адаптивный баннер для сайта.
                            Это значит, что размер объявления будет подстраиваться
                            под рекламный блок, в котором он размещается. Получите консультацию у менеджера компании «Веб Фокус».
                            Мы поможем выбрать оптимальные характеристики
                            для действенной рекламы.</p>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<!--form давайте знакомиться-->
<?php get_template_part('modules/form'); ?>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

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

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">главный критерий</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Главный критерий – эффективность</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Реклама преследует цель продать товар, предложить услугу или раскрутить бренд. Задача наших маркетологов состоит
                            в успешной реализации задумки повысить плодотворность баннера как можно выше отметки гарантирующей успех рекламной кампании. Уровень эффективности напрямую зависит от уровня подготовки работников, создающих рекламу, от мастерства читаемого в баннере.</p>
                    </div>
                </div>

            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Прогрессивные дизайнеры, талантливые копирайтеры
                            и успешные маркетологи, работая в одной команде, создадут для Вас проработанный и прибыльный баннер для сайта,
                            цена на который не станет преградой на пути к успешной рекламной кампании. Мы постараемся добиться повышенных результатов ради успеха рекламируемого бизнеса. Будет
                            ли баннер успешен, ощущается сразу. </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Он обязан выполнять функции, подмеченные многими маркетологами:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color3">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Акцентировать на себе внимание посетителя сайта.
                        </div>
                        <div class="subservice_task_item">
                            Добиться этого не так просто, как может показаться человеку со стороны на первый взгляд. Баннер не должен быть пёстрым, он не должен кричать цветом, издавать звуки. Это совершенно неуместно и хоть
                            и привлекает массу внимания, раздражает пользователей сети. Для реализации пункта нужен иной подход. Создание баннеров для сайта должно содержать сдержанный, приятный глазу дизайн
                            без лишних элементов. Качественное изображение, правильное расположение логотипа и броский заголовок способны на гораздо большее, нежели переливающаяся всеми цветами анимированная графика, которую сочтут безвкусицей. Наши дизайнеры придерживаются простоты в дизайне,
                            а наличие вкуса является нашим главным критерием их отбора. Гарантируем качество исполнения рекламы без использования устаревших методов продвижения.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color4">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Удерживать интерес будущего клиента.
                        </div>
                        <div class="subservice_task_item">
                            После захвата внимания посетителя баннер для
                            сайта должен удержать его взгляд. В этот раз глубокой проработки снова требует текстовая составляющая. Проработанный до мелочей, короткий рекламный текст, способен вести клиента не просто до клика
                            по объявлению, а прямиком к кнопке оформления заказа. Текст может нести в себе информацию
                            о скидках, распродаже или преимуществах компании, главное, чтобы он цеплял и провоцировал совершить целевое действие. На данном этапе задействуется людская психология. Она помогает в повышении показателей по кликам и конверсиям.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color1">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Призыв совершить переход
                            на рекламируемый сайт.
                        </div>
                        <div class="subservice_task_item ">
                            Человек заинтересован предложением, что ему остаётся кроме как перейти на сайт с предложением или отказаться от затеи и уйти по своим делам?
                            Чтобы не упустить клиента нужно спровоцировать
                            на переход по рекламной ссылке. Красная кнопка
                            с надписью «получить бонус» выступит последней ступенькой на пути к совершению перехода. Привитое покупателю чувство доверия и провокация на получение привилегий способна превратить обычного прохожего в нового клиента.
                        </div>
                    </div>
                </div>

                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Но дизайн баннеров для сайта не всегда должен продавать, иногда это способ сделать бренд узнаваемым. В таком случае список шагов не должен быть строгим. Акцент стоит сделать на графическую составляющую. Задействованные корпоративные цвета, качественные изображения и логотип компании на видном месте. Заголовок и текст должны нести информацию
                            о преимуществах компании перед конкурентами, о ее успехах
                            в отрасли. Цель такого баннера не продать, а выработать
                            у посетителя позитивное восприятие компании. Повышение имиджа способствует крупным продажам в будущем. Чем больше компания «на слуху», тем лучше покупают товар под маркой фирмы. Позитивные ассоциации с брендом позволят строить успешный и перспективный бизнес.<br><br>

                            Мы разработаем для Вас рабочие компоненты способные
                            на продажу и раскрутку. Их объединение приведет к созданию уникального механизма взаимодействия с целевой аудиторией. Баннер для сайта от компании «Веб Фокус» сделает рекламируемый бренд номером один в Вашей отрасли.
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
    </div>
</section>


<?php get_footer() ?>