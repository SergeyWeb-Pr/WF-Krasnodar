<?php
/*
Template Name: Cоздание информационного сайта
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
                <p class="header_link_str_twxt display-none-768">Cоздание информационного сайта</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1">Cоздание информа&shy;ционного сайта
            </h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Информационный сайт</b> – это не роскошь, а необходимый и дальновидный шаг для дальнейшего развития. Цена информации несоизмерима с его ценностью.
                Мудрая мысль гласит: «Кто владеет информацией – тот владеет миром».
                Информация – это некие знания или сведения, которыми обмениваются люди в процессе общения. Сначала знания передавались друг другу устно, затем появилась письменность, рукопись.</p>
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

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">информационный сайт</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Новый формат – создание информа&shy;ционного сайта</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Информацию пользователь получает из разнообразных источников: телевидение (новостные передачи), радио, журналы, газеты и другие печатные издания, социальные сети, новостные интернет порталы. </p>

                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Создание информационных сайтов увеличило скорость передачи знаний конечному потребителю.
                    </p>
                </div>
            </div>
        </div>
        <div class="text__wrapper">
            <div class="preview__block_text preview__block_text-2">
                <p class='p3_white font-size20'>Новостные интернет-ресурсы по сравнению с печатными изданиями имеют следующие достоинства:
                </p>
            </div>
            <div class="subservice_task_wrapper subservice_task_wrapper-margin">
                <div class="subservice_task_left subservice_task_left_info-site">
                    <div class="subservice_task_item list-numbers margin_bottom_40">
                        <p class="subservice_task_text subservice_task_text_info-site">Представленные на информационных сайтах сведения являются более полными
                            и актуальными. Нет дополнительного этапа
                            по набору и доставке периодического издания.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-2  margin_bottom_40">
                        <p class="subservice_task_text subservice_task_text_info-site">Удобство получения знаний. Возможно, также оформить подписку на периодическое издание через созданный информационный сайт.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-3  margin_bottom_60 number-3_media">
                        <p class="subservice_task_text subservice_task_text_info-site">Экономия времени и средств, при использовании веб-ресурса для получения сведений.
                            Нет необходимости покупать газету, журнал
                            в киоске, магазине, до которого нужно добраться. Собственник информации не тратит дополнительные средства на распечатку
                            и доставку своего продукта потребителю.</p>
                    </div>
                </div>
                <div class="subservice_task_right ">
                    <div class="subservice_task_item list-numbers number-4  margin_bottom_40">
                        <p class="subservice_task_text subservice_task_text_info-site">Представленные на информационных сайтах сведения являются более полными
                            и актуальными. Нет дополнительного этапа
                            по набору и доставке периодического издания.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-5  margin_bottom_40">
                        <p class="subservice_task_text subservice_task_text_info-site">Главным достоинством перед другими способами передачи информации является масштаб
                            ее распространения через созданный информационный сайт. Возможность доступа
                            в Интернет позволяет получить интересующую информацию.</p>
                    </div>
                    <div class="subservice_task_item list-numbers number-6 margin_bottom_60">
                        <p class="subservice_task_text subservice_task_text_info-site">Снижается риск загрязнения окружающей среды. Нет необходимости в таких больших объемах производить офсетную и газетную бумагу, которая используется для изготовления печатного издания.
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

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class=" intro_subservice padding_top_130">
    <div class="container">
        <p class="product__list-subtitle  p2_black">плюсы</p>
        <h2 class="intro__title h2_black padding_top_10 width_1139 width_590_768 h2_black margin_bottom_60">Плюсы информа&shy;цион&shy;ных</br> сайтов</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice_two intro__text_block-two_media">
                <div class="intro__text_item_subservice intro__text_item_subservice_one margin_bottom_80 intro__text_item_subservice_one-1 intro__text_item_subservice_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_media">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440"><b class="bold">Разработка информационного сайта</b> - это своего рода создание библиотеки, в которой открывается доступ к разным знаниям, используя только личный аккаунт. Доступна настройка фильтров для определенных, выбранных новостей. </p>
                        </div>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4 info_site_text_item_four_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Можно оформить подписку на закрытую информацию, комментировать записи и делиться понравившимися новостями в социальных сетях. Здесь можно делиться мыслями, планами, общаться с другими пользователя сети и при этом зарабатывать.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_40 intro__text_item_subservice_one-1 info_site_text_item_one_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Общественные, коммерческие организации и государственные органы путем создания информационного сайта решают определенные задачи:</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro__text_block-two intro__text_block-two_info-site">
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 intro__text_item_subservice_info-site">
                    <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Размещение сведений<br> о деятельности организации.</p>
                    <div class="intro__text-progress margin_bottom_20">
                        <div class="line_progress_black"></div>
                    </div>
                    <p class='p3_black info-site-max-width'>Общественные организации могут использовать информационный интернет-ресурс для размещения сведений о деятельности организации.</p>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 intro__text_item_subservice_info-site">
                    <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">На сайте можно узнать структуру.</p>
                    <div class="intro__text-progress margin_bottom_20">
                        <div class="line_progress_black"></div>
                    </div>
                    <p class='p3_black'>Государственные органы размещают информацию об нормативно-правовых актах, а также информацию об их изменении. На сайте можно узнать структуру госоргана, контакты, задать вопросы в электронном обращении.</p>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1 intro__text_item_subservice_info-site">
                    <p class="text_underline  padding_bottom_20 h3_black_300 width_289_375 line_height_35_375">Ведение блогов.</p>
                    <div class="intro__text-progress margin_bottom_20">
                        <div class="line_progress_black"></div>
                    </div>
                    <p class='p3_black'>Коммерческие организации могут
                        на информационном сайте рассказывать
                        о деятельности и даже вести личный блог.</p>
                </div>
            </div>


            <div class="intro__text_block-two intro__text_block-two_subservice_two intro__text_block-two_media">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_bottom_50 intro__text_item_subservice_one-1 intro__text_item_subservice_media">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex subservice_rules_wrapper_flex_media">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Информационные сайты обеспечивают свободный доступ
                                к различным знаниям. На веб-сайтах представлены интересные статьи, новости за последние несколько часов, видео с места событий и другое. Поиск новостей в Интернете – это быстро
                                и удобно. В период сложной эпидемической ситуации это ресурс является одним из главных источников информации.
                                По мере развития информационные сайты совершили переход от визиток (где было минимум контента, простая структура, определенное количество страниц), до больших интернет-
                                площадок. Аудитория информационных сайтов огромная.
                                Она не ограничивается только территорий страны,
                                а масштабнее. </p>
                        </div>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_bottom_0 intro__text_item_subservice_four-4">
                    <div class="subservice_rules_wrapper_flex">
                        <div class="grad-line"></div>
                        <div class="subservice_rules_wrapper_flex">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Перед собственниками ресурсов стоит задача удержать круг читателей, увеличить их, не потерять уникальность в мире новостных интернет-ресурсов. Эта цель достигается при постоянном усовершенствование, путем продвижения сайтов.
                                Цель информационного сайта – предоставление сведений
                                для решения определенных задач. Коммерческие сайты направлены на продвижение товаров и услуг. Даже если коммерческий сайт уже есть, создание информационного может стать мощным инструментом маркетинга в области продвижения товара и услуги. Повышается лояльность целевой аудитории, что выделяет среди конкурентов, приобретается статус эксперта в данной области.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container intro_subservice-max-width-h2">
        <p class="intro__subtitle subtitle p2_white">создание информационного сайта с нуля</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice ">Анализ видов и расчет стоимости</h2>
        <div class="intro__wrapper intro__wrapper-new">
            <p class='p3_white intro_subservice-max-width-p'>Для того, кто хочет создать информационный сайт с нуля, необходимо провести анализ видов и расчет стоимости подобных сайтов, выбрав оптимальный вариант.</p>
            <div class="intro__wrapper_blocks intro__wrapper_blocks_media">
                <div class="intro__wrapper_block intro__wrapper_block_media">
                    <p class=>Виды</p>
                    <p class="wrapper_block_site">Сайт</p>
                    <p class="wrapper_block_portals">Порталы СМИ и различных тематических журналов </p>
                    <p class="wrapper_block_blog">Блог, форум</p>
                </div>
                <div class="intro__wrapper_block intro__wrapper_block_media">
                    <div class="intro__wrapper_block">
                        <p>Описание</p>
                        <p class="wrapper_block_description">Представляет собой несколько страниц, на которых представлены разнообразные полезные материалы.</p>
                        <p class="wrapper_block_publication">Здесь публикуются новости СМИ и статьи по определенной тематике (красота, здоровье, спорт и другое).</p>
                        <p class="wrapper_block_news">Собственник информационного сайта ведет онлайн общение
                            с пользователями, информирует подписчиков о достижениях, планах и интересах. Часто просматривать и участвовать в обсуждении могут ограниченное число лиц.
                            На форумах происходит общение между зарегистрированными пользователями, по интересующей тематике</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>
<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="product__list intro intro_subservice padding_bottom_150 padding_top_130 info_site_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">этапы</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Этапы создания информа&shy;ционного сайта</h2>
        <div class="intro__wrapper intro__wrapper-max-width info_site">
            <p class='p3_white p3_white-max-width'>После выбора вида информационного сайта необходимо пройти еще несколько этапов для его создания:</p>
            <div class="container container_one_500">
                <div class="text__wrapper">
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
                    <div class="intro__text">
                        <div class="grad-line"></div>
                        <div class='padding_left_16_500 padding_bottom20_media'>
                            <p class="intro__text-p p3_white padding_bottom_17_768">Представленные этапы можно пройти самостоятельно, изучив необходимую информацию и программы для создания сайтов. Но лучше и эффективнее будет доверить эту задачу специалисту. Чтобы не допускать ошибок, которые могут повлиять на дальнейшую судьбу реализуемого проекта.
                                Компания «Веб Фокус» готова помочь и заняться разработкой информационного сайта. Предлагаем услугу по разработке информационного сайта для жителей России. Наши клиенты уже пользуются разработанными веб-ресурсами в Москве, Сочи, Краснодаре. Информация, искаженно представляющая действительность (недостоверная информация), может нанести владельцу материальный и моральный ущерб.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper text__wrapper_subservice text_wrapper_subservice_media">
                    <div class="intro__text">
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