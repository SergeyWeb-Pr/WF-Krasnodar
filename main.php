<?php
/*
Template Name: Главная страница
*/
get_header();
?>
<header class="header">
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

            </div>
        </div>

    </nav>

    <div class="container container_padding_0">
        <div class="header__title">
            <h1 class="h1">Web Focus — marketing of your dream</h1>
        </div>
        <div class="header__info ">
            <a href="" class="header-btn p_btn">ЗАКАЗАТЬ УСЛУГУ</a>
        </div>

    </div>
    <div class="blur"></div>
    <div class="header_circle"></div>
    <div class="header_circle-2"></div>
    <div class="header_circle-3"></div>
</header>

<section class="portfolio padding_bottom_150">
    <div class="container container_one">
        <div class="portfolio__blok">
            <?php
            $posts = get_posts(array(
                'numberposts' => 6,
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
                <a href="<?php the_permalink(); ?>" class="portfolio__blok_link">
                    <div class="portfolio__block-card">
                        <div class="img_wrapper portfolio__img-bg--1">
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
        <p class="preview__subtitle padding_bottom_10 p2_white">дает возможность побеждать конкурентов
        </p>
        <h2 class="preview__title padding_title_60 h2_grad">Интернет-маркетинг</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Digital-агентство «Веб Фокус» появилось на карте России в 2012 году. Как раз в это время на орбиту вышли спутники проекта GRAIL для изучения гравитационных аномалий на Луне. Да и вообще год считается одним из самых жарких за приблизительно 150 лет наблюдений.</p>
                        <p class="col-text-2--p preview_text_hidden_two p3_white">Наша главная цель – сделать Интернет лучше! Звучит громко, но действительно так. Предоставляя услуги, на практике доказываем, что онлайн-ресурс может быть не только полноценным элементом маркетинговой стратегии, но и украшением Сети. Хотите, чтобы интернет-магазин, корпоративный блог или просто профиль в Instagram в полной мере соответствовали актуальным требованиям, приводили клиентов? Тогда решение очевидно – пора поговорить о сотрудничестве. Менеджер уже на телефоне!</p>

                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Наша главная цель – сделать Интернет лучше! Звучит громко, но действительно так. Предоставляя услуги, на практике доказываем, что онлайн-ресурс может быть не только полноценным элементом маркетинговой стратегии, но и украшением Сети. Хотите, чтобы интернет-магазин, корпоративный блог или просто профиль в Instagram в полной мере соответствовали актуальным требованиям, приводили клиентов? Тогда решение очевидно – пора поговорить о сотрудничестве. Менеджер уже на телефоне!</p>
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

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1">
                <p class="product__list-subtitle padding_bottom_10 p2_black">мы работаем с вами, а не для вас</p>
                <h2 class="product__list-title padding_title_60 h2_black">Направления работы</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_one">Создание сайтов</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one">Разработка удобных для посетителя, элегантных и доступных для поиска сайтов, их сопровождение — это то, что вы получите при работе с нами.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_one'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_one product__list_item_one'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-2 _anim-items padding_bottom_40 product__list_item_two">
                    <div class="product__list_item-num product__list_item_two">
                        <p class="p7 product__list_item-number product__list_item_two">02.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_two">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_two">Cоздание и SEO-продвижение сайтов</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two">Умеем планировать разумную маркетинговую компанию, которая соответствует вашему бюджету при этом достигает максимальной эффективности.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_two'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_two product__list_item_two'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">03.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_three">SMM-маркетинг</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three">Быстрый способ привлечения це левых посетителей на сайт. Заказывая контекстную рекламу у нас, вы платите за результат – лояльных посетителей.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-4 _anim-items padding_bottom_40 product__list_item_four">
                    <div class="product__list_item-num product__list_item_four">
                        <p class="p7 product__list_item-number product__list_item_four">04.</p>
                    </div>
                    <div class="product__list_item-text margin_10_1440 product__list_item_four">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_four">Контекстная и таргетированная реклама</p>
                        <p class="p3_black padding_bottom_20 width_103 width_103_500 product__list_item_four">Контекстная реклама нацелена на максимальное привлечение клиентов к вашему бизнесу или продукту. Она привлекает лояльных потребителей.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_four'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_four product__list_item_four'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-5 _anim-items padding_bottom_40 product__list_item_five">
                    <div class="product__list_item-num product__list_item_five">
                        <p class="p7 product__list_item-number product__list_item_five">05.</p>
                    </div>
                    <div class="product__list_item-text product__list_item_five">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_480_768 product__list_item_five">Дизайн</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_five">Предлагаем широкий спектр услуг, от web-дизайна до графического дизайна каталогов и брошюр, которые помогут вам создать корпоративный имидж.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_five'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_five product__list_item_five'></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product__list_column-2 product__list_column-2_media930">
                <div class="product__list_column--img margin_bottom_40">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img product-img_1 active">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover4.jpg" alt="img" class="product-img product-img_4">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover5.jpg" alt="img" class="product-img product-img_5">
                </div>
                <div class="product__list_wrapper list_wrapper-hidden">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="h3_black_300 padding_bottom_20">Мы работаем с вами, а не для вас!</p>
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Агентство интернет-рекламы полного цикла – так можно охарактеризовать работу нашей компании. Действительно, в реалиях 20-х годов нового тысячелетия об успехе онлайн можно говорить только при условии, что рычаги влияния применяются комплексно и системно. Как раз поэтому предполагается многовекторная работа
                        </p>
                        <p class="col-text-2 padding_bottom_10 p3_black padding_30_1440">Агентство интернет-маркетинга «Веб Фокус» – это воплощение проекта в жизнь с четким пониманием особенностей того или иного бизнеса. Считаем этот момент ключевым, ведь без учета сезонности, среднего чека и других нюансов раскрутка превращается в сумбурный набор движений, от которых толку немного.
                        </p>
                        <p class="col-text-2 padding_bottom_10 p3_black">Только точечные удары по аудитории, которые заставляют офисный телефон буквально разрываться от звонков! О Вас не знают? Исправим! Хотите увеличить продажи или улучшить репутацию? Будет сделано! Больше, чем среднестатистическое агентство разработки сайтов!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__list_wrapper-hidden gradient">
            <div class="grad_line-text--wrapper">
                <div class="product__list_wrapper-text">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="h3_black_300 padding_bottom_20 padding_bottom_21_500">Мы работаем с вами, а не для вас!</p>
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Агентство интернет-рекламы полного цикла – так можно охарактеризовать работу нашей компании. Действительно, в реалиях 20-х годов нового тысячелетия об успехе онлайн можно говорить только при условии, что рычаги влияния применяются комплексно и системно. Как раз поэтому предполагается многовекторная работа</p>
                        <p class="col-text-2 padding_bottom_10 p3_black">Агентство интернет-маркетинга «Веб Фокус» – это воплощение проекта в жизнь с четким пониманием особенностей того или иного бизнеса. Считаем этот момент ключевым, ведь без учета сезонности, среднего чека и других нюансов раскрутка превращается в сумбурный набор движений, от которых толку немного.</p>
                        <p class="col-text-2 padding_bottom_10 p3_black">Только точечные удары по аудитории, которые заставляют офисный телефон буквально разрываться от звонков! О Вас не знают? Исправим! Хотите увеличить продажи или улучшить репутацию? Будет сделано! Больше, чем среднестатистическое агентство разработки сайтов! </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="concept padding_top_130 padding_bottom_150 main_media">
    <div class="container container_one">
        <div class="concept__wrapper">
            <div class="concept__img">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_img.gif" alt="" class="concept__img-gif">
            </div>
            <div class="concept__list">
                <div class="concept__list--ld">
                    <div class="concept__img--hidden">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_img.gif" alt="" class="concept__img-gif">
                    </div>
                    <div class="text__wrapper-concept">
                        <p class="concept__list_subtitle padding_bottom_10 subtitle p2_white">безукоризненный результат</p>
                        <h2 class="concept__list_title padding_title_60 h2_grad">Решение вашей задачи – Концепция 360</h2>
                        <h2 class="concept__list_title-hidden padding_title_60 h2_grad">Решение <br> вашей задачи – Концепция 360</h2>
                    </div>
                </div>
                <div class="concept__list_block">
                    <div class="concept__list_text">
                        <p class="h3_grad_31 blue padding_bottom_10 padding_13_768">Стартапы</p>
                        <p class='p3_white'>Разрабатываем правильную стратегию развития бренда. Работаем поэтапно, чтобы развивать ваш проект всесторонне.</p>
                    </div>
                    <div class="concept__list_text concept__list_text_two">
                        <p class="h3_grad_31 pink padding_bottom_10 padding_13_768">Малый и средний
                            бизнес </p>
                        <p class="concept__text p3_white">Комплексный<br> интернет-маркетинг для продвижения товаров и услуг
                            с учетом ситуации на рынке.</p>
                        <p class="concept__text-hidden p3_white">Комплексный интернет-маркетинг для продвижения товаров и услуг
                            с учетом ситуации на рынке.</p>
                    </div>
                    <div class="concept__list_text">
                        <p class=" h3_grad_31 yellow padding_bottom_10 padding_13_768">Крупные проекты</p>
                        <p class='p3_white'>Пока в нашем портфолио проекты из России, Беларуси, Польши, но в наших силах выйти на международный рынок.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form -->
<?php get_template_part('modules/form'); ?>



<section class="community padding_bottom_150 padding_top_130">
    <div class="container container_one">
        <div class="">
            <p class="community__subtitle p2_black padding_bottom_10">не просто команда, а семья профессионалов</p>
        </div>
        <h2 class="community__title h2_black padding_title_60">Сообщество увлеченных людей</h2>
        <div class="wrapper-gradient">
            <div class="grad-line--hidden"></div>
            <div class="community__wrapper margin_bottom_85">

                <div class="text__wrapper">
                    <div class="community__block-text">
                        <div class="grad-line"></div>
                        <div>
                            <p class="community__text-p p3_black padding_25_768">Коллектив нашей студии – специалисты различного профиля и жизненных интересов, которых объединяет любовь к интернет-маркетингу. Профессию выбрали не случайно, стремимся каждый день познавать новое, вырабатывать очередные стратегии раскрутки, которые позволяют в разы увеличить интерес к бренду заказчика.</p>
                            <p class="community__text-p p3_black community_text_hidden_two">Важной особенностью является то, что стремимся добиться живого отклика отделов. Копирайтер никогда не напишет достойный текст, если не знаком с особенностями SEO или SMM. Как раз поэтому подходим к работе панорамно, стремимся добиться целостного понимания онлайн-продвижения.</p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper community_text_hidden_one">
                    <div class="community__block-text community__block-text--two">
                        <div class="grad-line"></div>
                        <p class='p3_black'>Важной особенностью является то, что стремимся добиться живого отклика отделов. Копирайтер никогда не напишет достойный текст, если не знаком с особенностями SEO или SMM. Как раз поэтому подходим к работе панорамно, стремимся добиться целостного понимания онлайн-продвижения.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="community__human margin_bottom_80">
            <div class="community__cart padding_60_500">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/vladislav.jpg" alt="Vladislav" class="community__human-img padding_bottom_20">
                <p class="community__human-name padding_bottom_10 p4_500">Владислав</p>
                <p class="community__human-position p5_16_20_black">Head-designer</p>
            </div>
            <div class="community__cart padding_60_500">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/valentina.jpg" alt="Valentina" class="community__human-img padding_bottom_20">
                <p class="community__human-name padding_bottom_10 p4_500">Валентина</p>
                <p class="community__human-position p5_16_20_black">Web-developer</p>
            </div>
            <div class="community__cart">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/nikolay.jpg" alt="Nikolay" class="community__human-img padding_bottom_20">
                <p class="community__human-name padding_bottom_10 p4_500">Николай</p>
                <p class="community__human-position p5_16_20_black">Seo-manager</p>
            </div>
        </div>
        <a class="community_btn btn p_btn margin_bottom_80">ВСЯ КОМАНДА</a>
        <div class="wrapper-gradient">
            <div class="grad-line--hidden"></div>
            <div class="community__wrapper">
                <div class="text__wrapper">
                    <div class="community__block-text">
                        <div class="grad-line"></div>
                        <div>
                            <p class="community__text-p p3_black padding_25_768">Устраиваем мозговые штурмы, проводим дискуссии, касающиеся событий в цифровом мире – делаем все, чтобы ни на минуту не упускать из вида происходящее в Сети. Только при таком отношении достижим стабильный результат. </p>
                            <p class="community__text-p p3_black community_text_hidden_two">Про Про наше маркетинговое агентство Краснодар и Сочи знают немало. Люди стремятся заказывать там, где чувствуют неподдельный интерес к проекту, стремление сделать лучше. «Веб Фокус» на 101% соответствует заявленным требованиям. Понимаем с полуслова! С нашей компанией легко работать!</p>
                        </div>
                    </div>
                </div>

                <div class="text__wrapper community_text_hidden_one">
                    <div class="community__block-text community__block-text--two">
                        <div class="grad-line"></div>
                        <p class='p3_black'>Про Про наше маркетинговое агентство Краснодар и Сочи знают немало. Люди стремятся заказывать там, где чувствуют неподдельный интерес к проекту, стремление сделать лучше. «Веб Фокус» на 101% соответствует заявленным требованиям. Понимаем с полуслова! С нашей компанией легко работать!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intro padding_top_130 padding_bottom_intro main_intro_media">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">нам не страшно доверять</p>
        <h2 class="intro__title h2_grad padding_title_60">Доверие, оправданное годами успешной практики</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block margin_bottom_60">
                <div class="text__wrapper">
                    <div class="intro__text">
                        <div class="grad-line"></div>
                        <div>
                            <p class="intro__text-p p3_white padding_25_768">Каждая компания гордится мнением обратившихся – лучшим индикатором качества. Стабильный поток положительных отзывов на наш юридический адрес – яркий стимул, чтобы осваивать новые вершины, не опуститься до уровня очередного эксплуататора громкого слова «marketing».</p>
                            <p class="intro__text-p p3_white community_text_hidden_two">Прочитайте хотя бы несколько благодарственных писем, чтобы удостовериться, что «Веб Фокус» заслуживает уважения. И все-таки, почему степень нашей трастовости так высока?</p>
                        </div>
                    </div>
                </div>
                <div class="text__wrapper community_text_hidden_one">
                    <div class="intro__text intro__text-two">
                        <div class="grad-line"></div>
                        <p class='p3_white'>Прочитайте хотя бы несколько благодарственных писем, чтобы удостовериться, что «Веб Фокус» заслуживает уважения. И все-таки, почему степень нашей трастовости так высока?</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_block-two">
                <div class="intro__text_item margin_bottom_90 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 " data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-1">Специфика</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Digital-агентство в Сочи и Краснодаре работает исключительно с учетом местной специфики. Методики продвижения действенны только при осознанном подходе. Как раз такое отношение гарантируем.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro1-hover.jpg" alt="" class="intro-hover">
                </div>
                <div class="intro__text_item margin_bottom_90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-2">Возможности</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Наши возможности ограничены только алгоритмами поисковых систем и социальных сетей, а также требованиями законодательства. Никогда не предложим «черное» продвижение, ведь оно нанесет непоправимый урон бизнесу.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro2-hover.jpg" alt="" class="intro-hover">
                </div>
                <div class="intro__text_item margin_bottom_90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-3">Результат</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Успешное воплощение проекта – дело чести. Как же по-другому, если заказчик ждет результат? В конце концов, что за специалисты, если справимся на «троечку»? Только безупречные показатели.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro3-hover.jpg" alt="" class="intro-hover">
                </div>
                <div class="intro__text_item margin_bottom_90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-4">Перспективы</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Реально смотрим на перспективы. Если продвижение по тем или иным поисковым запросам превратится в сливание бюджета, сразу предупредим об этом и предложим другой, более рациональный формат.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro4-hover.jpg" alt="" class="intro-hover">
                </div>
                <div class="intro__text_item margin_bottom_90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1400" data-aos-offset="0">
                            <!-- <div class="intro__text-bullet--grad">
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                    <div class="bullet"></div>
                                </div> -->
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-5">Стратегия</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Далеко не каждое digital-агентство в Краснодаре честно по отношению к заказчикам. Разрабатываем стратегию так, чтобы заказчик получил максимум при минимальных финансовых затратах. Ваше внимание любой ценой?! Ни в коем случае!</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro5-hover.jpg" alt="" class="intro-hover">
                </div>
                <div class="intro__text_item margin_bottom_90">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-6" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">

                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-6">Секрет</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Говоря обобщенно, секрет долгих лет жизни в интернет-маркетинге видим в человеческом отношении, помноженном на профессионализм. Свяжитесь с нашим сотрудником, чтобы выяснить непонятные моменты, определиться с инструментарием, который будет использоваться для раскрутки – одним словом, договориться о сотрудничестве.</p>
                    </div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/intro6-hover.jpg" alt="" class="intro-hover">
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="last__section padding_bottom_150 padding_top_130 main_last_section_media">
    <div class="container container_one">
        <div class="">
            <p class="last__section_subtitle p2_black padding_bottom_10">
                узнайте больше о мире интернет-маркетинга</p>
        </div>
        <h2 class="last__section_title padding_title_60 h2_black">
            Дайте бизнесу выйти из тени!</h2>
        <div class="last__section_pretext margin_bottom_80 last__section_pretext_media">
            <div class="last__section_pretext-text">
                <p class="h3_black_300">В компанию обращаются:
                </p>
            </div>
            <div class="last__section_pretext-wrapper">
                <div class="last__section_pretext-item last__section_pretext-item-one">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/shuttle 1.svg" alt="" class="pretext__icon"> -->
                    <svg width="40" height="40" class="pretext__icon margin_bottom_20">
                        <use xlink:href="#shuttle"></use>
                    </svg>
                    <p class="pretext__icon_text p">
                        представители малого и среднего бизнеса
                    </p>
                </div>
                <div class="last__section_pretext-item
                            last__section_pretext-item-two">
                    <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/diagram 1.svg" alt="" class="pretext__icon"> -->
                    <svg width="40" height="40" class="pretext__icon margin_bottom_20">
                        <use xlink:href="#diagram"></use>
                    </svg>
                    <p class="pretext__icon_text p">
                        крупные управленцы
                    </p>
                </div>
                <div class="last__section_pretext-item
                            last__section_pretext-item-three">
                    <svg width="40" height="40" class="pretext__icon margin_bottom_20">
                        <use xlink:href="#goal1"></use>
                    </svg>
                    <p class="pretext__icon_text p">
                        собственники стартапов
                    </p>
                </div>
            </div>
        </div>


        <div class="last__section__wrapper">
            <div class="last__section_block">
                <div class="last__section_block-text last__section_block-text_two_one padding_bottom_40">
                    <div class="grad-line"></div>
                    <div class="text__wrapper ">
                        <p class="p3_black padding_bottom_20 padding_21_1440">Интернет-маркетинг в Сочи – такая же неотъемлемая часть предпринимательства, как и производство продукта или предоставление услуг. Даже отъявленные скептики признали, что без Глобальной сети о полноценном продвижении на рынке речь не ведется.
                        </p>
                        <p class="p3_black padding_bottom_20  padding_21_1440">«Вести бизнес без рекламы – все равно, что подмигивать девушкам в полной темноте». Так звучат слова С.Х. Бритта. Известно немало случаев, когда достойная идея так и оставалась нереализованной только по причине отсутствия у потребителя достаточной информации. Не повторяйте чужие ошибки!
                        </p>
                        <p class="p3_black line_18_1440 width_99_500">Классические СМИ отходят на второй план. Наше интернет-агентство для Краснодара – возможность громогласно заявить о себе, использовать правильные каналы коммуникации с целевой аудиторией.
                        </p>
                    </div>

                </div>
                <div class="last__section-wrapper--img one--hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/frame10.jpg" alt="" class="last__section_img-one">
                </div>
            </div>
            <div class="last__section_block-two">
                <div class="last__section-wrapper--img two--hidden">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/Frame9.jpg" alt="" class="last__section_img-two padding_bottom_40">
                </div>
                <div class="last__section_block-text last__section_block-text_two_two">
                    <div class="grad-line"></div>
                    <div class="text__wrapper">
                        <p class="p3_black padding_bottom_20 padding_17_1440">Одни ищут рекламные услуги по разумной цене, другим – важнее надежность и умение держать слово. Каждый получает желаемое в нашем <b class="bold">agency</b>. Иное представить сложно, ведь заказчик – центр нашего космоса.
                        </p>
                        <p class="p3_black padding_bottom_20 padding_17_1440">Агентство интернет-маркетинга «Веб Фокус» – это грамотная работа с заранее обозначенными чек-поинтами. Никаких размытых формулировок! Непременное разъяснение каждого непонятного момента. Абсолютно не разбираетесь в сайтостроении, особенностях SMM и т.д.? Не проблема, ведь решим поставленные задачи за Вас!
                        </p>
                        <p class="p3_black line_18_1440">Время – ресурс невосполнимый. Отняли его слишком много, чтобы просто так уйти. Хотелось бы раскрыть перспективы взаимодействия в контексте Вашего проекта. Давайте поговорим! Первичная консультация бесплатна, а пользу получите ощутимую. Убедитесь лично, что наше digital-агентство умеет находить общий язык с клиентами!
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>