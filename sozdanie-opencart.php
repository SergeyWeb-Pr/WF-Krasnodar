<?php
/*
Template Name: Создание на OpenCart
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
        <div class="header__title header__title_subservice">
            <div class="header_link_str">
                <div class="header_link_home"></div>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Разработка</p>
                <div class="header_arrow"></div>
                <p class="header_link_str_twxt">Создание сайта</p>
                <div class="header_arrow display-none-768"></div>
                <p class="header_link_str_twxt display-none-768">Создание на OpenCart</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice h1">Создание<br> на OpenCart</h1>
            <p class="header_text p3_black header_text_subservice">Команда агентства «Веб Фокус», кроме всего прочего, занимается разработкой сайтов на OpenCart. Создание на OpenCart – правильное решение для ведения электронной коммерции.</p>
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


<section class="preview padding_bottom_150 padding_top_130 padding_top_114_1440 opencart_preview_media">
    <div class="container container_one_500 opencart-block-gif">
        <div class="concept__img-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_3.gif" alt="" class="concept__img-gif-3">
        </div>
        <div class="margin__40">
            <div>
                <p class="preview__subtitle padding_bottom_10 p2_white">мнение о нас
                </p>
                <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Мнение о разработке сайтов в «Веб Фокус»:</h2>
            </div>
            <div class="concept__img-3_media">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/concept_3.gif" alt="" class="concept__img-gif-3">
            </div>
            <div class="preview__block padding_title_60 padding_52_1440">
                <div class="text__wrapper">
                    <div class="preview__block_text preview__block_text-1">
                        <div class="grad-line"></div>
                        <div class="preview_display_block">
                            <p class="col-text-2--p p3_white margin_30_768">Компания «Веб Фокус» является агентством, которое занимается созданием свежих решений для интернет-бизнеса.
                                Они являются профессионалами в своей сфере и вкладываются
                                в свою работу по максимуму, что и даёт им возможность качественно работать на этом рынке. ООО «Веб Фокус» —
                                это команда хорошо сработавшихся специалистов своего дела!</p>
                        </div>
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

<section class="subservice_rules padding_top_130 padding_bottom_150">
    <div class="container">
        <p class="product__list-subtitle p2_black">преимущества</p>
        <h2 class="subservice_task-title padding_title_60 h2_black padding_top_10 max-width650">Преимуще&shy;ства услуги создание сайта на OpenCart</h2>
        <div class="subservice_rules_inner subservice_rules_inner-new">
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_hand"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Доступные платежи</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Множество платёжных инструментов, которые упростят способы оплаты. Вашим клиентом будут доступны даже WebMoney и LiqPay.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_delivery"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Доставка товара</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">На базе OpenCart будут доступны большинство способов доставки товара до клиента. Как показал опыт с Covid-19, функция доставки набирает популярность
                        в непростое время.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_accounting"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Систематизация учетов</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Своя комфортная систематизация отчётов, которая предоставит возможность следить за динамикой продаж.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_shop"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Управление разными магазинами</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Вы сможете управлять, посредством одной администрации множеством разных магазинов.</p>
                </div>
            </div>
            <div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_language"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Множество языков</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Разнообразие языковых версий даст Вам старт для выведения Вашей компании на рынок зарубежья.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_module"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Модульное построение</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">OpenCart предоставляет своим пользователям крайне комфортную и несущую практический подтекст архитектуру сайта. Модульное построение позволит нашим программистам собрать Ваш сайт с нуля и сделать его комфортным и приятным в использовании. А покупатели, как известно, ценят удобство оформления.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_60">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_team"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Вы не останетесь одни</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Вы не останетесь с проблемами клиентской базы один на один. Эта платформа предоставляет возможность развития.</p>
                </div>
                <div class="subservice_rules_item margin_bottom_16">
                    <svg class="subservice_rules_img margin_bottom_20 margin_bottom_20_768">
                        <use xlink:href="#subservice_rules_bonus"></use>
                    </svg>
                    <p class="h3_black_500 padding_bottom_20 width_461 padding_bottom_20_500">Приятные бонусы для всех</p>
                    <div class='subservice_rules_line margin_bottom_20 margin_bottom_20_500'></div>
                    <p class="p3_black">Другие приятные и полезные, как для заказчика, так и для посетителей и администрации сайта «фишки».</p>
                </div>
            </div>


        </div>
        <div class="subservice_rules_wrapper hidden_768">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">OpenCart является бесплатной и широко распространённой платформой. Наши веб-
                        программисты создают на OpenCart яркие, удобные для посетителя и администратора, продающие продукт магазины.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- display-none упадет js если удалить блок -->

<section class="product__list padding_top_130 padding_bottom_150 padding_top_78_1440 display-none">
    <div class="container container_two">
        <div class="product__list_wrapper">
            <div class="product__list_column product__list_column-1 product__list_column-1_subservice">
                <p class="product__list-subtitle padding_bottom_10 p2_black">преимущества</p>
                <h2 class="product__list-title padding_title_60 h2_black width_390_768">Преимущества сайта-визитки</h2>
                <div class="product__list_item item-num-1 _anim-items padding_bottom_40 active product__list_item_one product__list_item_subservice">
                    <div class="product__list_item-num product__list_item_one">
                        <p class="p7 product__list_item-number product__list_item_one">01.</p>
                    </div>
                    <div class="product__list_item-text product__list_item-text_subservice product__list_item_one">
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_one padding_bottom_20_500">Быстрое расширение клиентской базы</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_one padding_bottom_20_500">Вы расскажите о себе пользователям и зарекомендуете себя с лучшей стороны.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_two padding_bottom_20_500">Улучшение имиджа компании</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_two padding_bottom_20_500">Репутация повысится, вы получите больше доверия со стороны пользователей.</p>
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
                        <p class="h3_black_300 padding_bottom_20 width_103 width_500_768 product__list_item_three padding_bottom_20_500">Новый магнит для клиентов</p>
                        <p class="p3_black padding_bottom_20 width_103 product__list_item_three padding_bottom_20_500">Качественный, продуманный сайт поможет быстрее наращивать клиентскую базу.</p>
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
                            <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440">Главной целью подобного онлайн-ресурса является представление и развитие бизнеса в интернете.</p>
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
                        <p class="col-text-2 col-text-2--p padding_bottom_10 p3_black">Главной целью подобного онлайн-ресурса является представление и развитие бизнеса в интернете.</p>

                    </div>

                </div>
                <div class="portfolio__btn margin_top_40 portfolio__btn_subservice_block">
                    <a href="" class="btn p_btn portfolio__btn_subservice">УЗНАТЬ СТОИМОСТЬ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--form -->
<?php get_template_part('modules/form'); ?>

<section class='padding_top_130 padding_bottom_150 opencart_media'>
    <div class="container ">
        <p class="product__list-subtitle padding_bottom_10 p2_black">что вы получаете</p>
        <h2 class=" padding_title_60 h2_black subservice_task-title max-width700">Отдавая свой проект на реализацию нам, Вы получаете:</h2>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number p7_position'>01.</p>
                    <p class="subservice_task_text p3_black">Команду веб-разработчиков, которые создадут Ваш сайт с нуля на платформе OpenCart.</p>
                </div>

                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number p7_position'>02.</p>
                    <p class="subservice_task_text p3_black">Позитивное и вежливое отношение к Вам в процессе работы.</p>
                </div>

                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number p7_position'>03.</p>
                    <p class="subservice_task_text p3_black ">Гарантированный результата работы, задокументированный в соответствии с текущим законодательством, «прозрачный» процесс, ознакомление с портфолио наших разработчиков.</p>
                </div>
            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number padding_bottom_40 p7_position'>04.</p>
                    <p class="subservice_task_text p3_black">Наши программисты оказывают в дальнейшем техническую поддержку Вашего сайта. Мы избавим Вас от подвисаний, медлительной прогрузки страниц и «падений» сайта.</p>
                </div>

                <div class="subservice_task_item">
                    <p class='p7 subservice_task_number p7_position'>05.</p>
                    <p class="subservice_task_text p3_black">Серьёзное знаковое увеличение продаж Вашего продукта после окончания работы над сайтом.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="intro padding_bottom_90_500  padding_top_130 padding_bottom_150">
    <div class="container container_one">
        <p class="subtitle  p2_white padding_bottom_10">этапы</p>
        <h2 class="intro__title h2_grad padding_title_60_40"> Как агентство<br> «Веб Фокус» это сделает?</h2>
        <div class="intro__text_block_subservice">
            <div class="text__wrapper margin_bottom_40">
                <div class="intro__text width_590">
                    <div class="grad-line"></div>
                    <p class="intro__text-p p3_white padding_left_14_500">Создание на OpenCart подразумевает следующие работы:</p>
                </div>
            </div>
        </div>
        <div class="intro__wrapper">
            <div class="intro__text_block-two intro__text_block-two_subservice">
                <div class="intro__text_item margin_bottom_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-1 intro__text-bullet-1_subservice" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="0" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-1.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_five">Составление ТЗ</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Составление технического задания для веб-программистов вместе с клиентом, постановка задач, которые желательно решить в процессе работы, уточнение сроков и размеров суммы, которую клиент готов потратить на реализацию проекта.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-2" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="400" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-2.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_two">Утверждение структуры</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание сайта на платформе OpenCart, утверждение блоков, доработка отдельных модулей. Дорабатывая
                            и добавляя (или убирая) отдельные модули, мы учитываем способность сайта конкурировать с похожими сайтами
                            и предпочтения нашего клиента.</p>
                    </div>
                </div>
                <div class="intro__text_item margin_bottom_40">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-3" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="800" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-3.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color-15_subservice">Создание дизайна</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Создание веб-дизайна сайта, наложение его на ресурс и утверждение. После чего наши веб-дизайнеры дорабатывают дизайн в соответствии с пожеланиями клиента.</p>
                    </div>
                </div>
                <div class="intro__text_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet-4" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1200" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-4.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_four">Верстка сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>По желанию заказчика происходит адаптация сайта под мобильные устройства на базах разных операционных систем. Адаптация позволяет посетителям с комфортом использовать его как на мобильных устройствах, так и на персональных компьютерах.</p>
                    </div>
                </div>
                <div class="intro__text_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="1600" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-5.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_one">Программирование</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>На этом этапе происходит, собственно, работа веб-программистов и подключение блоков CMS. Затем русификация сервиса, окончание адаптивной верстки и утверждение.</p>
                    </div>
                </div>
                <div class="intro__text_item">
                    <div class="intro__text_item-wrapper">
                        <div class="intro__text-bullet" data-aos="fade-zoom-in" data-aos-easing="ease-in" data-aos-delay="2000" data-aos-offset="0">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/dots-6.svg" alt="" class="intro__dots">
                        </div>
                        <p class="h3_grad padding_bottom_20 text_underline color_rules_sex">Наполнение и тестирование сайта</p>
                        <div class="intro__text-progress margin_bottom_20">
                            <progress class="progress-min" value="0" max="60">
                                <span class="percent-min">0</span>%
                            </progress>
                        </div>
                        <p class='p3_white'>Затем мы формируем семантические ядра страниц, наполняем сайт изображениями, ссылками и текстами. После чего происходит тестирование сайта, окончательная доработка, исправление ошибок и сайт становится готовым к употреблению пользователем.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--reviews -->
<?php get_template_part('modules/reviews'); ?>

<!--form_two -->
<?php get_template_part('modules/form_two'); ?>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<section class="intro intro_subservice padding_bottom_150 padding_top_130">
    <div class="container">
        <p class="intro__subtitle subtitle p2_white">преимущество</p>
        <h2 class="intro__title h2_grad padding_title_60  padding_top_10 width_1139 width_590_768 intro__title_subservice">Преимуще&shy;ства создания представи&shy;тельства в интернете</h2>
        <div class="intro__text_block_subservice">
            <div class="text__wrapper">
                <div class="intro__text width_590">
                    <div class="grad-line"></div>
                    <p class="intro__text-p p3_white padding_left_14_500">Получаете возможность продажи продукта без предварительной закупки и хранения товара на складе
                        (то есть Вы заказываете товар напрямую у поставщика, после
                        того как клиент сделает заказ на сайте). Эта система названа «дрошпингом», её активно используют люди, занимающиеся торговлей в интернете.
                        Для открытия представительства
                        в интернете требуются меньшие затраты, чем для открытия обычного. Вы избавляетесь от аренды помещения, найма персонала, закупки продуктов, ремонта помещения и прочих составляющих.
                        Чтобы интернет-ресурс работал требуется только отладка и техническая поддержка. </p>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="intro__text width_590">
                    <div class="grad-line"></div>
                    <p class='p3_white padding_top_20_768 padding_left_14_500'>В сравнении со стоимостью открытия «реального» магазина
                        и ежемесячной оплатой текущих трудностей стоимость содержания сайта на порядок ниже. Геолокация станет для Вашего магазина пустым звуком. Ввиду систем доставки сайт охватит большую целевую аудиторию, нежели если он будет
                        «в реальности» находится на одном месте.
                        Сайт работает постоянно. Круглые сутки, всю неделю. Он не болеет, принимает заказы автономно, вероятность ошибки в заказе стремится к нулю. Он просто эффективнее среднестатистического продавца, работающего в штатном режиме.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="subservice_rules padding_top_130 padding_bottom_130 open_cart_rules_media">
    <div class="container">
        <p class="product__list-subtitle p2_black">почему мы</p>
        <h2 class="subservice_task-title padding_title_60_40 h2_black padding_top_10 line_height_61 max-width650">Почему Вам стоит выбрать агентство «Веб Фокус»?</h2>

        <div class="subservice_rules_wrapper subservice_rules_wrapper_footer">
            <div class="subservice_rules_wrapper_flex">
                <div class="grad-line margin_right_20_500"></div>
                <div class="subservice_rules_wrapper_flex">
                    <p class="p3_black">Мы даём клиентам 100% гарантии выполнения работы
                        и не уклоняемся от обязательств. Мы укладываемся в сроки
                        и бюджет, предоставленные заказчиком и не требуем отсрочки
                        или дополнительных финансовых вливаний.
                        Наша команда спасёт Вас от излишних тонн ненужной бумаги, поскольку мы используем только необходимые для работы с Вами документы. Мы отвечаем внятно и просто на все возникающие у клиента вопросы в процессе работы с нами и находимся на связи
                        с клиентом постоянно.
                        <br><br>
                        В нашу команду попадают только веб-программисты, обладающие обширными познаниями и навыками в своей сфере, веб-дизайнеры, которые хорошо знают своё дело
                        и с блеском превращают продукт в продающийся, специалисты
                        в сфере рекламы и копирайтеры, пишущие тексты, находящие отклик в сердцах людей, поэтому Вы можете быть уверенны
                        в том, что реализация проекта находится в надёжных руках.
                        На результаты нашей работы Вы можете взглянуть своими глазами в нашем портфолио. Мы работаем с разными клиентами и дорожим своей репутацией.
                    </p>
                </div>
            </div>
            <div class='opencart_rules_logo'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient11.png" alt="" class='opencart_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient11-1090.png" alt="" class='opencart_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient11-768.png" alt="" class='opencart_rules_logo_img'>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/png/gradient11-375.png" alt="" class='opencart_rules_logo_img'>

            </div>

        </div>

    </div>
</section>

<?php get_footer() ?>