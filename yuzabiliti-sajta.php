<?php
/*
Template Name: Юзабилити сайта
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
                <p class="header_link_str_twxt display-none-768">Юзабилити сайта</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Юзабилити сайта</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">юзабилити сайта
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">юзабилити сайта</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Для оптимизации, продвижения и удобства при создании сайта и его апгрейде ведутся работы над одним из его критериев – над юзабилити сайта.
                            Разберём что это такое.
                            Из самого названия знатокам английского ясно, что речь
                            об удобстве использования.
                            За это понятие отвечает способность интерфейса быть понятным и удобным рядовому пользователю. Разработчику, занятым улучшением юзабилити, поставлена сложная задача. Представив дизайн глазами пользователя, который впервые увидел страницу сайта, понять в каких местах у юзера возникнут затруднения.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Для разработчиков компании «Веб Фокус» важно чтобы результат взаимодействия пользователя с сайтом приносил юзеру запрашиваемый им результат. Для этого мы выстраиваем интуитивно понятный путь на пути к цели будущего клиента платформы.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Для разработчиков компании «Веб Фокус» важно чтобы результат взаимодействия пользователя с сайтом приносил юзеру запрашиваемый им результат. Для этого мы выстраиваем интуитивно понятный путь на пути к цели будущего клиента платформы.</p>
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
                <p class="slider__subtitle p2_black padding_bottom_10">пять черт</p>
                <h2 class="h2_black">Пять черт удобного интерфейса</h2>
                <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Оценить комфортабельность сайта, можно проверив пять характеристик:</div>
                <ul>
                    <li class="top30">Эргономичность расположения элементов.
                        <p class="static_list-p">Оценивается, как быстро пользователь сумеет сориентироваться на сайте. С какой скоростью найдёт требуемый раздел или необходимую информацию.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2">Отвлекающие объекты.
                        <p class="static_list-p">Показывает, какие элементы перетягивают на себя внимание юзера, какие закрывают собой нужные элементы управления или информацию. Сайты без разработанного юзабилити могут не давать посетителю прочитать текст целиком или мешать перейти на другую страницу.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 structure-list__6-top30">Удовлетворение от использования сайта.
                        <p class="static_list-p">Отражает впечатление юзера от использования интернет-ресурса. Эмоциональный отклик о дизайне страницы, элементов управления, содержания сайта. Повышает показатель юзабилити сайта.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__4 structure-list__6-top30">Конкретика в навигации.
                        <p class="static_list-p">Насколько пользователю понятно, куда он попадёт, переходя дальше по ветке страничек ресурса. Сделано ли это наглядно или вызывает замешательство, влияя
                            на время, проведенное в поиске информации.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__5 structure-list__6-top30">Запоминаемость пути.
                        <p class="static_list-p">Сможет ли юзер найти информацию еще быстрее, вернувшись во второй или третий раз спустя время. Если путь понятен, он останется в памяти, что
                            и характеризует хорошо продуманную навигацию.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_50 product__list_column--img_subservice height-auto internet_mag_product">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient25.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient25-1090.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient25-768.png" alt="img" class="internet_mag_product_img">
                    <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient25-375.png" alt="img" class="internet_mag_product_img">
                </div>
                <div class="product__list_wrapper_flex">
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Юзабилити дизайн сайта отвечает за комфорт посетителя, а чем удобств для клиента больше, тем вероятнее он совершит покупку и вернётся снова. Комфорт – обязательная составляющая, как одностраничного сайта, так и огромных интернет ресурсов. Упускать эту деталь при запуске собственного бизнеса в сети непозволительно.
                                Типов сайтов существует несколько. Каждый вид задействован под выполнение конкретной функции. Сайты отличаются один от другого и для каждого типажа необходим свой набор правил юзабилити.<br><br>

                                Кроме юзабилити нужно учитывать и параметр дельность ресурса для пользователя. Дельность подразумевает, позволяет ли сайт сразу понять подходит ли он юзеру для удовлетворения того или иного запроса. Навигация и дизайн не спасут, если посетитель пришел не за тем, что ему предлагают.<br><br>

                                К юзабилити и дельности ресурса можно добавить еще одну составляющую – конверсионность. Это синергия юзабилити с дельностью, порождающая повышенную выгоду от совершения конверсионного действия посетителями, которые пришли с конкретной целью и выполнили свою задачу. Кто-то приходит за информацией, просматривая рекламу на сайте, кто-то идёт за покупкой или подпиской на рассылку рекламных предложений. В любом случае юзабилити web-сайта помогает довести клиента до конца, не позволив остановиться на полпути.</p>
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
        <p class="product__list-subtitle p2_black">превзойти конкурентов</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Превзойти конкурентов</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Юзабилити служит палочкой-выручалочкой в отраслях
                            с высокой конкуренцией. Повышение показателей SEO-оптимизации и увеличение конверсионности страниц ресурса, сайт поднимается в поисковой выдаче, оставляя конкурентов позади. Пока площадки конкурентов досаждают потенциальным клиентам огромными пёстрыми баннерами, нелепым дизайном и длительной загрузкой страниц, ваш сайт будет притягивать клиента простотой и удобством использования. Компания «Веб Фокус» займётся подгонкой вашего сайта до параметров идеала.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Как мы увеличиваем юзабилити сайта? Часто правила
                            не работают. Соблюдение всех названых характеристик
                            может ни к чему не привести. Юзабилити дизайн сайта может улучшить ситуацию, но не повлиять на число посещений
                            и конверсий. Но почему тогда мы ручаемся за успех?
                            Каждый сайт уникален и требует индивидуального подхода. Правила прописаны достаточно обобщенно, но с опытом начинаешь чувствовать, что нужно для модернизации сайта. Мы проводим анализ целевой аудитории вашего направления и действуем по итогу полученных результатов.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Анализ включает в себя три шага:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color1">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Выборка людей, представляющих целевую аудиторию сайта.
                        </div>
                        <div class="subservice_task_item">
                            Мы ведем подбор потенциальных клиентов компании, желающих повлиять на исход анализа. Размер экспериментальной группы определяется
                            в зависимости от группы факторов: специфика бизнеса, глубина анализа, бюджет. Мы всегда стараемся сделать выборку как можно больше,
                            т.к. чем больше людей в экспериментальной группе, тем ближе к истине результат.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Постановка задачи перед группой.
                        </div>
                        <div class="subservice_task_item">
                            Перед каждым участником ставится список заданий, которые нужно выполнить на сайте. Суть в том,
                            что задания разной направленности. Среди них: найти информацию, произвести добавление
                            в корзину заданного товара, заполнение формы отзыва и прочее. Участники должны оценить, с какой скоростью им удалось выполнить поставленные перед ними задачи.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color3">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Наблюдение за экспериментальной группой.
                        </div>
                        <div class="subservice_task_item ">
                            Результаты основываются не только на ощущениях испытуемых, но и на удалённых наблюдениях.
                            Для точности нужно проследить за количеством неверно совершенных переходов, скоростью найденного материала и насколько сложным выглядел путь испытуемого до финала.
                        </div>
                    </div>
                </div>
                <div class="subservice_rules_wrapper_flex subservice_rules-930-1">
                    <div class="grad-line margin_right_20_500"></div>
                    <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                            Главное условие в том, чтобы ничем не помешать участнику. Вмешательство в эксперимент может исказить результат.
                            На основе данных полученных вследствие итогового результата происходит корректировка юзабилити дизайна.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="subservice_rules_wrapper_flex subservice_rules-930-2">
            <div class="grad-line margin_right_20_500"></div>
            <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_max-width">

                <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">
                    ВАЖНО: профессию UI – дизайнера не стоит путать с UX – дизайнером. Последний отвечает за внутреннюю составляющую при создании интерфейса. Он изучает потребности клиентов, продумывает логические цепочки
                    их поведения, анализирует действие посетителей на сайте.
                    <br><br>
                    Первостепенная задача дизайнера заключается в создании удобного интерфейса. Под удобством стоит понимать совокупность следующих характеристик: скорость доступа
                    к нужным элементам сайта, экономия времени посетителя, информативность деталей.
                </p>
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


<section class="subservice_rules padding_top_130 padding_bottom_130 open_cart_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">вклад в будущее</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 max-width650">Удобство клиента – ваше процветание</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black">В эру неугасающей конкуренции в сети, где клиент рискует потеряться среди тысяч предложений услуг и товаров
                        нужно направлять покупателя в выгодную для нас сторону. Благоприятный дизайн и удобный интерфейс задержит потребителя на страницах вашего сайта, удерживая его интерес и пробуждая желание приобрести предложенную линейку товаров. Пускай юзабилити сопровождает клиента
                        до совершения целевого действия, ради роста вашей прибыли и улыбок довольных покупателей.
                        <br><br>
                        Вы не прогадаете, обратившись к команде, способной апгрейдить до максимума любой интерфейс. Мы поможем вашему бизнесу раскрыть весь свой скрытый потенциал.
                        Для достижения новых высот закажите повышение юзабилити сайта у компании «Веб Фокус».
                    </p>
                </div>
            </div>
            <div class="opencart_rules_logo">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient26.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient26-1090.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient26-768.png" alt="" class="opencart_rules_logo_img">
                <img src="http://test.loc/wp-content/themes/WebFocus%20-%20Krasnodar/assets/img/png/gradient26-375.png" alt="" class="opencart_rules_logo_img">

            </div>

        </div>

    </div>
</section>


<?php get_footer() ?>