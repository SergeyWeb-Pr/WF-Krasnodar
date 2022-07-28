<?php
/*
Template Name: Создание лендинга
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
                <p class="">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание лендинга</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1">Создание лендинга</h1>
            <p class="header_text p3_black header_text_subservice header_text_subservice_one"><b class="bold">Разработка лендинга</b> эффективно и ненавязчиво стимулирует потенциального клиента к совершению покупки или другого целевого действия. Landing page выполняет роль визитки бренда, которая должна привлечь внимание пользователя, дать базовую информацию о предлагаемом продукте или услуге и собрать контакты потенциальных клиентов. Специалисты Веб Фокус разработают лендинг под ключ, предложат несколько прототипов сайта, их которых Вы сможете выбрать наиболее подходящий под стиль и видение Вашего бизнеса.</p>
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

<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 lending_media">
    <div class="container container_one_500">
        <p class="preview__subtitle padding_bottom_10 p2_white">быстро соберите клиентскую базу</p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Главная задача</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white">Кратко и по делу – так можно сказать про лендинг пейдж (англ. landing page). Интуитивно понятный сайт с простой навигацией без лишней информации способен иметь конверсию даже больше, чем у более масштабных сайтов.Одностраничные сайты быстро загружаются, поэтому риски, что Вы потеряете потенциальных клиентов из-за медленной загрузки сайта сведены к нулю. Также с помощью Яндекс.Директ, GoogleAdwords, рекламы в соцсетях можно быстро получить горячий трафик.Пользователю хватит нескольких секунд, чтобы оценить сайт.</p>
                        <p class="col-text-2--p p3_white  preview_text_hidden_two preview_text_hidden_two_subservice width_320_500">Главная задача, чтобы пользователь немедленно выполнил целевое действие (сделал заказ, звонок, оформил подписку, зарегистрировался на сайте, составил свои контактные данные). Для этого нужно грамотно продумать дизайн, чтобы в пределах одной страницы пользователь нашел ответы на интересующие вопросы. В агентстве интернет-маркетинга Веб Фокус можно заказать landing page с лаконичным дизайном и продающим контентом под конкретную аудиторию. </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper preview_text_hidden_one">
                <div class="preview__block_text preview__block_text-2">
                    <div class="grad-line"></div>
                    <p class='p3_white '>Главная задача, чтобы пользователь немедленно выполнил целевое действие (сделал заказ, звонок, оформил подписку, зарегистрировался на сайте, составил свои контактные данные). Для этого нужно грамотно продумать дизайн, чтобы в пределах одной страницы пользователь нашел ответы на интересующие вопросы. В агентстве интернет-маркетинга Веб Фокус можно заказать landing page с лаконичным дизайном и продающим контентом под конкретную аудиторию. </p>
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

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440 display-none">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1 product__list_column-1_subservice">
                <p class="product__list-subtitle padding_bottom_10 p2_black">преимущества</p>
                <h2 class="product__list-title padding_title_60 h2_black width_390_768">Преимущества лендинга</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_one padding_bottom_20_500">Увеличение клиентов и рост объема продаж</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Сайт способен завоевать внимание пользователей всего за несколько секунд.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_one'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_one product__list_item_one'></div>
                        </div>
                    </div>
                </div>
                <div class="product__list_item item-num-2 _anim-items padding_bottom_40 product__list_item_two product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_two">
                        <p class="p7 product__list_item-number product__list_item_two">02.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_two">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_two padding_bottom_20_500">Быстрая разработка с ограниченным бюджетом</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Минимальные внутренние издержки – и Вы получаете эффективный инструмент продаж.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_two'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_two product__list_item_two'></div>
                        </div>

                    </div>
                </div>
                <div class="product__list_item item-num-3 _anim-items padding_bottom_40 product__list_item_three product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_three">
                        <p class="p7 product__list_item-number product__list_item_three">03.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_three">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_three padding_bottom_20_500">Презентация новых товаров и услуг</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Пользователь сразу видит важную информацию о компании и преимуществах продукта.</p>
                        <!-- <progress class="progress" value="0" max="100">
                                <span class="percent">0</span>%
                            </progress> -->
                        <div class='product__list_item_text_progress product__list_item_three'>
                            <div class='product__list_item_text_progress_grad product__list_item_text_progress_grad_three product__list_item_three'></div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice">
                <div class="product__list_column--img margin_bottom_40 product__list_column--img_500 product__list_column--img_subservice">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img product-img_1 active product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover2.jpg" alt="img" class="product-img product-img_2 product-img_500">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover3.jpg" alt="img" class="product-img product-img_3 product-img_500">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Заказ лендинга в Краснодаре – это популярная у собственников бизнеса услуга, которая нужна любому бизнесу, если необходимо увеличить продажи, повысить узнаваемость бренда и конверсию пользователей, создать доверие к бренду.</p>
                        </div>

                    </div>
                    <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                        <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="product__list_wrapper-hidden gradient">
            <div class="grad_line-text--wrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/jpg/img-hover1.jpg" alt="img" class="product-img_subservice">
                <div class="product__list_wrapper-text">
                    <div class="grad-line"></div>
                    <div class="product__list_column-text-2">
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Заказ лендинга в Краснодаре – это популярная у собственников бизнеса услуга, которая нужна любому бизнесу, если необходимо увеличить продажи, повысить узнаваемость бренда и конверсию пользователей, создать доверие к бренду.</p>

                    </div>

                </div>
                <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                    <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- анимированный список -->

<section class="slider padding_top_130 structure padding_bottom_150 lending">
    <div class="container container_one">
        <div class="structure__blocks lending_structure_block">
            <div class="structure__block medical_structure_block">
                <p class="slider__subtitle p2_black padding_bottom_10">преимущества</p>
                <h2 class="h2_black">Преимущества лендинга</h2>
                <ul>
                    <li class="top30 max-width_none">Увеличение клиентов и рост объема продаж
                        <p class="static_list-p max-width475">Сайт способен завоевать внимание пользователей всего за несколько секунд.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__2 max-width_none top33">Быстрая разработка с ограниченным бюджетом
                        <p class="static_list-p max-width475">Минимальные внутренние издержки – и Вы получаете эффективный инструмент продаж.</p>
                        <span class="border-black"></span>
                    </li>
                    <li class="structure-list__3 max-width_none">Презентация новых товаров и услуг
                        <p class="static_list-p max-width475">Пользователь сразу видит важную информацию о компании и преимуществах продукта.</p>
                        <span class="border-black"></span>
                    </li>
                </ul>
            </div>
            <div class="product__list_column-2 product__list_column-2_subservice margin_left_25">
                <div class="margin_bottom_50 product__list_column--img_subservice height-auto lending_product">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/corals.png" alt="img" class="lending_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/corals-1090.png" alt="img" class="lending_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/corals-768.png" alt="img" class="lending_product_img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/corals-375.png" alt="img" class="lending_product_img">
                </div>
                <div class='product__list_wrapper_flex'>
                    <div class="product__list_wrapper list_wrapper-hidden">
                        <div class="grad-line"></div>
                        <div class="product__list_column-text-2">
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Заказ лендинга в Краснодаре – это популярная
                                у собственников бизнеса услуга, которая нужна любому бизнесу, если необходимо увеличить продажи, повысить узнаваемость бренда и конверсию пользователей, создать доверие к бренду.</p>
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

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class="intro intro_subservice padding_bottom_150 padding_top_130 lending_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">из каких блоков состоит лендинг пейдж</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Из каких блоков состоит продающий лендинг пейдж?</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-1_subservice padding_bottom_20 h3_grad">Первый экран</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Блок, который видит пользователь, как только загружается сайт. Этот раздел должен заинтересовать и привлечь внимание пользователя, замотивировать его пролистать страницу вниз.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-2_subservice h3_grad">Продукт или услуга</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Дальше демонстрируется товар или услуга, который предлагает бренд. В этом разделе необходимо добавить красочные фото или необычные видео.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_bottom_40_768 intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-3_subservice h3_grad width_322 width_initial_768">Стоимость</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Заинтересованный пользователь захочет узнать, сколько стоит понравившийся товар или услуга.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-4_subservice h3_grad">Отзывы</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Пользователи любят читать отзывы предыдущих покупателей, чтобы удостовериться в правильности своего выбора.</p>
                    </div>
                </div>

                <div class="intro__text_item_subservice intro__text_item_subservice_five padding_title_60_40 intro__text_item_subservice_five-5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-4_subservice h3_grad">Поле для обратной связи</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Посетитель лендинга должен оставить свои контакты, чтобы Вы или Ваши сотрудники смогли с ним связаться для дальнейшего обсуждения покупки.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_intro lending_media2">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">алгоритм работы</p>
        <h2 class="intro__title h2_grad padding_title_60_40">Алгоритм работы</h2>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_60 ">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Определение целей</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Изучается ниша бизнеса, востребованность продукта, конкуренты.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Составление ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Намечается эффективный план работы с учетом обозначенных сроков на разработку.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_three">Написание контента</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Копирайтер пишет продающие тексты, оптимизированные под поисковые системы.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_four">Создание прототипов</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Прорабатывается структура Landing page и концепция дизайна и отдельных элементов страницы.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Разработка дизайна</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Утверждение концепции индивидуального дизайна и инфографики.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_sex">Адаптивная верстка</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Настройка отображения сайта без ошибок в разных браузерах и на мобильных устройства.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-7.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_seven">Подключение метрики</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Google Analytics и Яндекс.Метрика помогут анализировать поведение пользователей на сайте.</p>
                    </div>
                </div>

                <div class="intro__text_item margin_bottom_60">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-8.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_eight">Тестирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Проверка правильности работы функционала сайта, форм, систем аналитики и пр.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 ">
    <div class="container">
        <p class="product__list-subtitle p2_black">из каких блоков состоит лендинг пейдж</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10">Самые популярные ниши бизнеса, которые заказывают лендинг пейдж:</h2>
        <div class="subservice_rules_inner padding_title_60 subservice_rules_inner_one">
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_one"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа товаров</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Наверное, самая популярная ниша бизнеса. Лендинги таких компаний обычно содержат краткую информацию о предлагаемых товарах, возможность заказать обратный звонок и информацию о проходящих акциях.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_two"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Продажа услуг</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">В отличие от товаров, об услуге достаточно подробно рассказать, чтобы ее заказали. С этой функцией отлично справляется качественный и информативный лендинг пейдж.</p>
            </div>
            <div class="subservice_rules_item">
                <svg class="subservice_rules_img margin_bottom_30 margin_bottom_20_768">
                    <use xlink:href="#subservice_rules_five"></use>
                </svg>
                <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Оказание консультаций, обучения и тренингов</p>
                <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                <p class="p3_black">Разработка таких лендингов обычно сопровождается добавлением качественных фото с проводишихся тренингов и консультаций, тарифами обучения и расписанием ближайшего старта занятий.</p>
            </div>
        </div>
    </div>
</section>


<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="intro intro_subservice padding_bottom_150 padding_top_130 lending_media">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">преимущества заказа лендинга в Краснодаре</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Какие преиму&shy;щества даст заказ лендинга в Краснодаре?</h2>
        <div class="intro__wrapper">

            <div class="intro__text_block-two intro__text_block-two_subservice_two">
                <div class="intro__text_item_subservice intro__text_item_subservice_one padding_title_60_40 intro__text_item_subservice_one-1">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="text_underline color-9_subservice padding_bottom_20 h3_grad">Рост продаж</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Первая и главная цель любого бизнеса – это получение доходов и монетизация затраченных усилий. Использование лендинга отлично справляется с этой целью. Основная цель лендинга – это подталкивание клиента к совершению целевого действия, которое в последствии приведет к продаже.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_two padding_title_60_40 intro__text_item_subservice_two-2">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-8_subservice h3_grad">Увеличение конверсии</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Цена создания лендинга полностью себя оправдывает благодаря увеличению конверсии: наши специалисты разработают цепляющие призывы к совершению целевого действия, добавят яркую графику и завершат это запоминающимся контентом. В итоге, посетитель как минимум подробно ознакомиться с информацией о Вашем бренде, а как максимум – станет клиентом.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_three padding_bottom_40_768 intro__text_item_subservice_three-3">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-5_subservice h3_grad width_initial_768">Повышение узнаваемости бренда</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Для современного пользователя выглядит странным и подозрительным отсутствие сайта бренда в интернете. Более того, редкий пользователь станет искать товар или услуги в объявлениях в газете или узнавать рекомендации знакомых. Люди будут искать Вас в сети. Наличие современного лендинга с интуитивным интерфейсом сыграет на руку имиджу и узнаваемости Вашей компании.</p>
                    </div>
                </div>
                <div class="intro__text_item_subservice intro__text_item_subservice_four padding_title_60_40 intro__text_item_subservice_four-4">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-7_subservice h3_grad">Уменьшение затрат на рекламу</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Этот пункт вытекает из предыдущего. Вы сможете сократить рекламные расходы, потому что наши специалисты создадут лендинг и добаят базовую оптимизацию, благодаря которой поисковые системы будут видеть Ваш сайт и показывать его пользователям.</p>
                    </div>
                </div>

                <div class="intro__text_item_subservice intro__text_item_subservice_five padding_title_60_40 intro__text_item_subservice_five-5">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="padding_bottom_20 text_underline color-6_subservice h3_grad">Экономия на разработке лендинга</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white width_328_500'>Лендинг – это базовый сайт с простым функционалом. Цена создания лендинга невысокая, по сравнению с разработкой сайта интернет-магазина или сайта-каталога.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<section class="subservice_rules padding_top_130 padding_bottom_130 lending_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">эффективный способ представления компании в интернете</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 subservice_task-title_one">Подойдет ли мне лендинг пейдж под ключ?</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex lending_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Для компаний с большим выбором услуг лендинг не будет лучшим решением. Заказать лендинг эффективнее, чтобы сконцентрировать внимание пользователей на новом товаре или услуге, презентовать новый продукт, продвинуть мероприятие, акции и скорее подходит для разовых продаж. К тому же лендинг практически не продвигается в поиске через seo-продвижение. В долгосрочной перспективе и для повышения имиджа лучше подумать о многостраничном сайте, например, интернет-магазин.</p>
                </div>
            </div>
            <div class='lending_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/smoke.png" alt="" class='lending_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/smoke-1090.png" alt="" class='lending_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/smoke-768.png" alt="" class='lending_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/smoke-375.png" alt="" class='lending_rules_logo_img'>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>