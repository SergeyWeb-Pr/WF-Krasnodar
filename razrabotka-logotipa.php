<?php
/*
Template Name: Разработка логотипа
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
                <p class="header_link_str_twxt display-none-768">Разработка логотипа</p>
            </div>
            <h1 class="header__title_text header__title_text_subservice_one h1 line-height">Разработка логотипа</h1>
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
        <p class="preview__subtitle padding_bottom_10 p2_white">опредление
        </p>
        <h2 class="preview__title padding_title_60 h2_grad preview__title_subservice">Логотипы на заказ – это</h2>
        <div class="preview__block padding_title_60 padding_52_1440">
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768"><i> Логотипы на заказ – выразите себя с помощью графики.</i>
                            <br><br>
                            Не только компания старается заказать логотип – эта услуга популярна в продвижении личного бренда, среди блогеров, инстаграм-звезд. Тенденцию подхватили и представители других профессий, понимая, что небольшой графический элемент – это простой и эффективный способ сначала привлечь, а потом и задержать внимание, отложиться
                            в памяти потенциального клиента.
                        </p>
                    </div>
                </div>
            </div>
            <div class="text__wrapper">
                <div class="preview__block_text preview__block_text-1">
                    <div class="grad-line"></div>
                    <div class="preview_display_block">
                        <p class="col-text-2--p p3_white margin_30_768">Первый шаг для роста лояльности клиентов – разработка логотипа, и это факт, который стоит принять на уровне аксиомы.
                            <br><br>
                            Выработать стиль можно только если создавать эмблему,
                            сайт, собственный знак. В комплексе элементы срабатывают «точно в цель» и гарантируют отдачу в виде высокой конверсии, узнаваемости, доверия.
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
        <p class="product__list-subtitle p2_black">функция логотипа</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Какую функцию выполняет логотип</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Разработка фирменного логотипа на заказ – это услуга, которая пользуется популярностью везде: в США, странах Европы,
                            в России. Общая тенденция восприятия людьми информации стремится к «клиповости», без знака, лого и бренда невозможность будет продать ни товар, ни услугу – люди просто не будут понимать, почему они должны купить именно в данной компании.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Даже ИП или маленькая компания может заказать логотип
                            в Краснодаре, потому что узнаваемость – проблема не только мегакорпораций, в первую очередь – небольших предприятий, который сражаются на рынке с огромным количеством конкурентов и должны доказывать не только качество предлагаемой продукции, но и выделиться на фоне аналогов, запомниться клиентам. Логотип – основа любого бизнеса.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Заказать логотип компании необходимо для:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Первичной рекламной кампании – перед запуском заказать логотип означает сразу же повысить конверсию на 50-70%, если лого будет хорошо продуман и воздействовать так, как нужно.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Введения нового продукта – так называемый ребрендинг, который тоже делается с помощью заказа у студии специализированной услуги. Ребрендингом занимаются даже корпорации-«монстры», такие как Sony, Apple, Nike, Porsche, поскольку время от времени необходимо «освежать» имидж.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Разработка фирменного логотипа поможет подчеркнуть ценности компании даже при наличии большого количества конкурентов. Простой пример: предприятие занимается изготовлением и продажей одноразовых стаканчиков и другой тары, однако делает ставку на экологичность, биоразлагаемость. Этот нюанс необходимо подчеркнуть в лого, чтобы
                            в целевую аудиторию сразу же попали веганы, эко-активисты и другие люди, которым небезразлично будущее планеты.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Дизайнер может работать с негативом с помощью того же лого, ребрендинга. Примером становится подчеркивание того, что компания отходит от старых принципов в пользу новых. К примеру, всемирно знаменитая сеть закусочных быстрого питания McDonalds проводила ребрендинг, чтобы убрать негатив в виде обвинений в том, что пища вредная, содержит губительные для здоровья добавки. Теперь компания предлагает и «полезное» питание, отметив политику трансформацией лого.
                        </div>
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
        <p class="product__list-subtitle p2_black">наши предложения</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Наши предложения: разработка логотипа</h2>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Распространенная ошибка начинающих бизнесменов – пытаться купить один из готовых стоковых лого, которые действительно продаются по «бросовой» цене, однако
                            и выглядят они «дешево», неинтересно, а главное –
                            не справляются с главной задачей. Точно такие же «паки» приобретают и другие, то есть, теряется важная составляющая логотипа – его неповторимость, уникальность.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Мы предлагаем разработку логотипа по цене, которая остается комфортной и непроблематичной даже для небольшой компании или ИП, зато со следующими гарантиями:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color3">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Уникальность
                        </div>
                        <div class="subservice_task_item">
                            Никаких стоковых картинок, никакой «копипасты», рисуется и отрисовывается с нуля;
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position p7-color2">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Вникаем в работу бизнеса
                        </div>
                        <div class="subservice_task_item">
                            Осознаем на глубинном уровне смыслы и ценности, которые доносим в графическом варианте –
                            логотип будет не просто «красивой картинкой»,
                            а философским концептом;
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color4">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Дизайнеры следят за тенденциями
                        </div>
                        <div class="subservice_task_item ">
                            Флэт, материал дизайн, 3D, псевдо-3D и другие направления: на слуху, могут быть задействованы
                            в изготовлении логотипа;
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position p7-color1">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item-title">
                            Понимания пожеланий
                        </div>
                        <div class="subservice_task_item ">
                            Разработка дизайна логотипа всегда начинается
                            с консультации и понимания пожеланий, целей, особенностей ниши, личных предпочтений заказчика – предлагается обширный и подробно расписанный бриф, который учитывает малейшие пожелания.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">В результате компания получает целый концепт, который можно будет продвигать на уровне рекламы, отталкиваясь
                            от лого как концентрации ценностей, представлений
                            и активов.</p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Вся мощь маркетинговых стратегий открывается после
                            того, как у Вас появляется собственный уникальный логотип. Профессиональная студия подходит к каждому заказу
                            с вниманием, относится с полнейшей ответственностью.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bitrix_media__subtitle padding_top_60 padding_bottom_40">Это позволит неограниченно обыгрывать, интерпретировать, использовать в корпоративной стилистике, такой как:</div>
        <div class="subservice_task_wrapper margin_bottom_60">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Униформа;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Оформление магазинов, торговых точек с использованием логотипа;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Производство сувенирной продукции с логотипом;
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Оформление упаковки с логотипом;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Изготовление визиток с логотипом;
                </div>
                <div class="subservice_task_item subservice_task_item_dot before_dot_color_pink margin_bottom_20">
                    Изготовление сайта, включая анимации, баннеры, рекламные кампании в интернете – Яндексе и Google.
                </div>
            </div>
        </div>
    </div>
</section>

<!--Slider -->
<?php get_template_part('modules/slider'); ?>

<?php get_template_part('modules/form_two'); ?>

<section class="padding_top_130 padding_bottom_150 bitrix_media padding_bottom_media bitrix_media-correct bitrix_media-cor bitrix_media-cordop">
    <div class="container">
        <p class="product__list-subtitle p2_black">дополнительные гарантии</p>
        <h2 class="h2_black subservice_task-title padding_bottom_60">Дополнительные гарантии</h2>
        <div class="bitrix_media__subtitle padding_bottom_40">Студий и дизайнеров много, однако мы предлагаем не только создание логотипа с персонализирован –
            ным под каждого клиента подходом, но и:</div>
        <div class="subservice_task_wrapper">
            <div class="subservice_task_left subservice_task_left_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">01.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Тщательное соблюдение сроков – в отличие
                            от фрилансеров-одиночек, которые могут просто «бросить» проект, ведь их не связывают никакие обязательства, работаем по договору. Соблюдение сроков гарантируется не только на юридическом уровне, но и потому что мы заботимся о собственном имидже.
                        </div>
                    </div>
                </div>

                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number p7_position">02.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item">
                            Студия может позволить себе нанять людей
                            с профильным образованием – дизайнеров, художников. В штате команда дизайнеров, которая обеспечит разработку логотипа на заказ начиная
                            от этапа эскиза и заканчивая анимациями.
                        </div>
                    </div>
                </div>

            </div>

            <div class="subservice_task_right subservice_task_right_new">
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">03.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Полный набор дополнительных услуг – разработаем брендбук на базе логотипа, включив образцы сайта, униформы, сувенирной продукции и т.д.
                        </div>
                    </div>
                </div>
                <div class="subservice_task_item">
                    <p class="p7 subservice_task_number padding_bottom_40 p7_position">04.</p>
                    <div class="subservice_task-wrapper">
                        <div class="subservice_task_item ">
                            Если у Вас уже есть лого, но оно Вам не нравится, предложим переработать, переосмыслить, создать
                            на базе имеющегося нового – проведем полноценный ребрендинг с гарантией более четкого подчеркива –
                            ния смысловых и ценностных особенностей.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro__text_block-two intro__text_block-two_subservice_two">
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Стоимость услуг отрисовки логотипа доступна любому, от ИП до крупного предприятия. Можно заказать ровно то, что нужно прямо сейчас, а потом добавить что-то еще – например, разработку полноценного сайта. </p>
                    </div>
                </div>
            </div>
            <div class="intro__text_item_subservice intro__text_item_subservice_one intro__text_item_subservice_one-1">
                <div class="subservice_rules_wrapper_flex">
                    <div class="grad-line"></div>
                    <div class="subservice_rules_wrapper_flex">
                        <p class="col-text-2 padding_bottom_10 p3_black padding_18_1440 col-text-2_media">Студия работает в удобном для заказчиков режиме. Если
                            у Вас в штате есть дизайнер, можно наладить общение
                            и решить задачу создания логотипа совместно.<br><br>

                            Купите логотип на заказ и превратите его в узнаваемость бренда с повышением прибыли до 50%!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php get_footer() ?>