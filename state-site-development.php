<?php
/*
Template Name: Разработка государственного сайта
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
                <div class="header_arrow header_arrow_displ-none"></div>
                <p class="header_link_str_twxt header_arrow_displ-none">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Разработка государственного сайта</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 header__title_text_media">Разработка<br>государст&shy;вен&shy;ного сайта</h1>
        </div>
        <div class="header__info header__info_subservice margin_top_55 margin_bottom_155 media500_mg-bottom140">
            <a href="" class="header-btn p_btn header-btn_subservice ">Узнать больше</a>
        </div>
    </div>
    <div class="blur"></div>
    <div class="header_circle"></div>
    <div class="header_circle-2"></div>
    <div class="header_circle-3"></div>
</header>

<!-- <section class="portfolio padding_bottom_150 padding_bottom_121_1440">
    <div class="container">
        <div class="portfolio__blok portfolio_blok_media">
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
</section> -->

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
        <p class="preview__subtitle padding_bottom_10 p2_white">разработка государственного сайта</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Разработка государствен&shy;ного сайта – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440 state-site_preview_block">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Разработка государственного сайта характеризуется специфичными моментами, каждый из которых необходимо учесть. При этом стоимость государственных сайтов не должна быть завышена ради сохранения денег налогоплательщиков. В реализации задумки вам поможет компания «Веб Фокус». Наша команда веб-дизайнеров разработает проект в короткий срок.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-2 media930_max-width-none">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Мы применим последние достижения в области информационных технологий относительно юзабилити интерфейса, веб дизайна и технических параметров сайта. В обязательном порядке будут учитываться требования Российского законодательства касательно данного вопроса.</p>
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

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class=" intro_subservice  padding_bottom_0_intro padding_top_130 padding_bottom_150 state_site_media">
    <div class="container">
        <p class="product__list-subtitle  p2_black">не упуская тонкости</p>
        <h2 class="intro__title h2_black padding_top_10 width_1139 width_590_768 h2_black margin_bottom_60">Не упуская тонкости</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one margin_bottom_40 intro__text_item_subservice_one-1">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Создание сайта государственного учреждения содержит детали, которые необходимо учитывать обязательно. Наличие опыта в создании сайтов государственных учреждений – неотъемлемый пункт, гарантирующий успех проекта. Именно он позволил команде «Веб Фокус» составить чётко спланированный алгоритм работы.</p>
                        </div>
                    </div>
                    <p class="state-site-p">Тонкости, которые учитывает наша компания:</p>
                </div>
            </div>
            <div class="intro__text_block-two state-site-flex state-site-flex_media">
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 state-site-block">
                    <div class="state-site-block-width">
                        <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Безопасность стоит на первом<br> месте</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Это самая важная составляющая сервиса любого государственного учреждения. Ресурс обязан выдерживать любую нагрузку, быть защищённым от атак злоумышленников, не допускать утечки конфиденциальной информации. На этапе разработки моделируются атаки на ресурс с целью проверки устойчивости сайта к любым угрозам. Так формируется щит, противостоящий любому проявлению агрессивности внешней среды.</p>
                    </div>

                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 state-site-block state-site-2">
                    <div class="state-site-block-width">
                        <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Адрес сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Здесь кроется одно из заметных отличий от коммерческого сайта. Если интернет-магазину достаточно иметь удачное сочетание слов и проверка, не занят ли домен, то государственному ресурсу нужно учесть требования законодательства Российской Федерации. Доменное имя привязывается с учётом названия учреждения. Обычно берётся аббревиатура государственного учреждения. Иногда вследствие возможности использования исключительно латинских букв и арабских цифр название плохо звучит или получается некорректным. Мы зарегистрируем лучший вариант домена и передадим права на него государственному учреждению. Доменное имя входит
                            в стоимость государственных сайтов.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 state-site-block state-site-3">
                    <div class="state-site-block-width">
                        <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">До мелочей продуманный дизайн</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Будут учтены особенности стиля присущие ресурсам этого типа. Обычно распространён лаконичный, минималистичный, строгий дизайн без излишеств. Никаких пёстрых баннеров и прочих безвкусных элементов. Только серьёзный стиль присущий нашему государству. Бережное использование российской символики не только как элемента дизайна, для добавления представительности во внешнем виде,
                            но и для обозначения официальности. Учёт деталей фирменного стиля, разработанного специально под учреждение, для которого создаётся проект. Любой элемент будет согласован с заказчиком, только после полного подтверждения начнётся окончательное создание государственного сайта.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 state-site-block state-site-4">
                    <div class="state-site-block-width">
                        <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Наполнение сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <div class="line_progress_black"></div>
                        </div>
                        <p class='p3_black'>Доступно два варианта: мы сами займёмся поиском
                            и подготовкой необходимых материалов, создадим контент для наполнения ресурса уникальным
                            и качественным содержимым. Копирайтеры
                            и графические дизайнеры компании «Веб Фокус»
                            с радостью и профессиональным подходом подготовят весь материал для сайта учреждения. Статьи, тексты,
                            а так же фотографии, иконки и прочие изображения наполнят ресурс, придавая ему неповторимость. Второй вариант: мы получим контент от заказчика и грамотно разместим на сайте.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 state-site_intro_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Решение заказать разработку государственного сайта
                                у команды профессионалов принесет новые возможности
                                для информирования граждан о структуре подразделения
                                и оказываемых функциях, информации о событиях, контактных данных, позволяющих гражданам связаться с вашими коллегами, информации об адресе и часах работы. </p>
                        </div>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4 state-site_intro-2_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Из дополнительных опций: добавление страницы с ответами
                                на часто задаваемые вопросы для удобства использования сервиса и многое другое.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 media375_display-none state_site_preview_media">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">делаем правильно</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Делаем правильно</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 state-site-right">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">По требованию нескольких федеральных законов государственные учреждения обязаны иметь сайт. Учитывая
                            эти законы можно создать ресурс, предоставляющий гражданам необходимую информацию. Создание государственного сайта подразумевает учёт норм, установленных законом. Мы знакомы с законодательством и в создании ресурса действуем согласно установленным правилам. Перечень законов, которые принимаются в расчёт сотрудниками компании, выполняющими заказы по направлению, можно запросить у менеджера. </p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Добиться этого можно с помощью грамотно продуманного UX/UI дизайна. UX/UI дизайн включает в себя не только проработку визуального восприятия, но и настройку максимально удобного для пользователей интернет-магазина.</p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Учитывая опыт сотрудников, можем гарантировать достойный уровень исполнения с соблюдением всех критериев. Информация, содержащаяся на сайте, будет достоверна, пользователь сможет отказаться от предоставляемой ему информации, посетителю не захочется что-то обжаловать, либо требовать, т.к. мы играем по правилам.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>
<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!-- <section class="product__list intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">шаги</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Разработка государственного сайта: шаги на пути к идеалу</h2>
        <div class="intro__wrapper intro__wrapper-max-width">
            <p class='p3_white p3_white-max-width'>Для оправдания ожиданий заказчика командой «Веб Фокус» подготовлен план. На выходе получается продукт, который оценит даже самый требовательный клиент. В план включены моменты, которые удовлетворяют требование законодательства. Разработка государственного сайта состоит из нескольких этапов:</p>
            <div class="container container_one_500">
                <div class="text__wrapper preview_text_hidden_one">

                    <div class="subservice_task_wrapper subservice_task_wrapper-new">
                        <div class="subservice_task_left subservice_task_left-new">
                            <div class="subservice_task_item subservice_task_item-new">
                                <div class="p7 subservice_task_number subservice_task_item-number">01</div>
                                <div class="subservice_task_item subservice_task_item-text">
                                    <p class="color-7_subservice h3_grad">Определить тему сайта</p>
                                    <p class="subservice_task_text p3_black subservice_task_text_new">Если планируется создать ссылку
                                        с информационного сайта на коммерческий сайт необходимо подобрать тематику соответствующую вашему продукту или услуге.</p>
                                </div>
                            </div>
                            <div class="subservice_task_item padding_bottom_24 subservice_task_item-new">
                                <div class="p7 subservice_task_number subservice_task_item-number color-15_subservice">02</div>
                                <div class="subservice_task_item padding_bottom_24 subservice_task_item-text">
                                    <p class="color-15_subservice h3_grad">Выберите систему управления</p>
                                    <p class="subservice_task_text p3_black subservice_task_text_new">Выберите систему управления сайтом.</p>
                                </div>
                            </div>
                        </div>

                        <div class="subservice_task_right ">
                            <div class="subservice_task_item padding_bottom_24 subservice_task_item-new">
                                <div class="p7 subservice_task_number subservice_task_item-number color_rules_two">03</div>
                                <div class="subservice_task_item padding_bottom_24 subservice_task_item-text">
                                    <p class="color_rules_two h3_grad">Подготовить структуру и план публикаций</p>
                                    <p class="subservice_task_text p3_black subservice_task_text_new">Из чего будет состоять сайт и какую информацию содержать. Подобрать дизайн сайта.</p>
                                </div>
                            </div>
                            <div class="subservice_task_item padding_bottom_24 subservice_task_item-new">
                                <div class="p7 subservice_task_number subservice_task_item-number color_rules_four">04</div>
                                <div class="subservice_task_item padding_bottom_24 subservice_task_item-text">
                                    <p class="color_rules_four h3_grad">Решить какие методы выбрать для продвижения сайта</p>
                                    <p class="subservice_task_text p3_black subservice_task_text_new">Сайты нуждаются в продвижении. Рост популярности ресурса, обеспечит увеличение количества клиентов, которые захотят купить товар или воспользоваться предлагаемой услугой.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="intro__text_block intro__text_block_subservice">
                <div class="text__wrapper text__wrapper_subservice">
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Представленные этапы можно пройти самостоятельно, изучив необходимую информацию и программы для создания сайтов. Но лучше и эффективнее будет доверить эту задачу специалисту. Чтобы не допускать ошибок, которые могут повлиять на дальнейшую судьбу реализуемого проекта.
                                Компания «Веб Фокус» готова помочь и заняться разработкой информационного сайта. Предлагаем услугу по разработке информационного сайта для жителей России. Наши клиенты уже пользуются разработанными веб-ресурсами в Москве, Сочи, Краснодаре. Информация, искаженно представляющая действительность (недостоверная информация), может нанести владельцу материальный и моральный ущерб.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="text__wrapper text__wrapper_subservice">
                    <div class="intro__text width_532 ">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Создание информационного сайта даст возможность предоставлять достоверные сведения, цена и качество которых определяет репутацию. Специалисты компании «Веб Фокус», согласно пожеланиям, создадут тот сайт, который будет максимально информативным, удобным для просмотра пользователями (потенциальными клиентами), что позволит расширить и увеличить аудиторию читателей Вашего веб-ресурса.
                                Давайте вместе сделаем мир интереснее, наполненным полной, достоверной, объективной, полезной информацией.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">шаги</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice max-width800">Разработка государствен&shy;ного сайта: шаги на пути к идеалу</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1 margin_right_67">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Для оправдания ожиданий заказчика командой «Веб Фокус» подготовлен план. На выходе получается продукт, который оценит даже самый требовательный клиент. В план включены моменты, которые удовлетворяют требование законодательства. Разработка государственного сайта состоит из нескольких этапов:</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice intro__text_block-two_karporat-site state_site_intro_media">
                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1_subservice">Обсуждение и подготовка</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Обсуждение и подготовка технического задания проекта.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Подготовка дизайна</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Размещение элементов, проработка деталей выливается в конечный внешний вид продукта.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-2_subservice">Разработка макета сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание макета согласно техническому заданию заказчика.
                            Учёт всех деталей указанных клиентом. Демонстрация макета, обсуждение правок и подтверждение направления дальнейшей разработки.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-7_subservice">Проведение вёрстки</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Процесс, который превращает макет в готовый продукт. Закрепление расположения элементов на страницах сайта, проработка структуры, придание стилей, программирование сложных элементов.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Создание контента, необходимого для заполнения ресурса</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Копирайтеры заняты написанием статей, графические дизайнеры рисуют фон и изображения. Активная творческая работа с целью заполнить страницы качественным материалом.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60 max-width_none">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Проведение тестов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Проведение тестов на безопасность и устойчивость интернет ресурса.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="preview__block padding_52_1440 preview__block_column preview_block_media">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Когда создание сайта государственного учреждения выполнено при желании заказчика происходит регистрация адреса сайта либо подвязывается существующий домен. Происходит посадка ресурса на хостинг и передача ключей управления ресурсом доверенному лицу. При необходимости возможен краткий обзор-обучение в использовании нового ресурса. Доверьте вашу задачу людям, заточенным под профессиональное исполнение услуг создания сайтов государственных структур. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-2 media930_max-width-none">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Команда «Веб Фокус» готова поработать над приданием ресурсу внешнего вида и юзабилити. Мы наполнены желанием угодить посетителю будущего сайта в равной мере, как и заказчику проекта. Для приобретения качества и надёжности свяжитесь с нашим менеджером и обсудите стоимость государственного сайта.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="subservice_rules padding_top_130 ">
    <div class="container">
        <p class="product__list-subtitle p2_black">из каких блоков состоит лендинг пейдж</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Самые популярные ниши бизнеса, которые заказывают лендинг пейдж:</h2>
        <div class="subservice_rules_inner padding_title_60 subservice_rules_inner_one">
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_one"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа товаров.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Наверное, самая популярная ниша бизнеса. Лендинги таких компаний обычно содержат краткую информацию о предлагаемых товарах, возможность заказать обратный звонок и информацию о проходящих акциях.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_two"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа услуг.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">В отличие от товаров, об услуге достаточно подробно рассказать, чтобы ее заказали. С этой функцией отлично справляется качественный и информативный лендинг пейдж.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_five"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Оказание консультаций, обучения и тренингов.</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Разработка таких лендингов обычно сопровождается добавлением качественных фото с проводишихся тренингов и консультаций, тарифами обучения и расписанием ближайшего старта занятий.</p>
            </div>
        </div>
    </div>
</section> -->


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_footer() ?>