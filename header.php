<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebFocus-krasnodar
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--svg -->
<?php get_template_part( 'modules/svg' );?>


<div class="menu__hidden">
        <div class="container container_one_1090">
            <button class="menu__hidden-btn">
                <a href="#" class="link"></a>
                <svg class="menu__closet" width="52" height="52" >
                    <use class="menu__closet-img" xlink:href="#menu_closet"></use>
                </svg>
            </button>
            <!-- <ul  class="submenu">
                <li class="submenu__list">
                    <div class="submenu__wrapper">
                        <a class="submenu__link" href="google.com">Разработка</a>
                        <button class="mobile-btn--up">
                            <svg width="14" height="12" class="btn-arrow--img">
                                <use xlink:href="#btn-arrow"></use>
                            </svg>
                        </button>
                    </div>
                    <ul class="pod_submenu">
                        <li class="pod_submenu-link submenu__link-list">
                            <div class="submenu__wrapper">
                                <a href="#" class="sabmenu__link sabmenu__link-color">Создание сайта</a>
                                <button class="submenu-btn--up">
                                    <svg width="14" height="12" class="submenu-arrow--img">
                                        <use xlink:href="#btn-arrow"></use>
                                    </svg>
                                </button>
                            </div>
                        <ul class="pod_submenu-list ">
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание сайта-визитки</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание лендинга</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание интернет-магазина</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание сайта-каталога</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание информационного сайта</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание персонального сайта</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание промо-сайта</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание корпоративного сайта</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание портала</a>
                            </li>
                            <li class="sabmenu__link sabmenu__link-2 pod_submenu-list-link">
                                <a href="#" class="sabmenu__link link_underline">Разработка государственного сайта</a>
                                <ul class="pod_submenu-list-2">
                                    <li class="sabmenu__link ">
                                        <a href="#" class="sabmenu__link">Сайт для предприятия</a>
                                    </li>
                                    <li class="sabmenu__link pod_submenu-list-link">
                                        <a href="#" class="sabmenu__link">Сайт медицинской компании</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание сайта на Word Press</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание сайта на Битрикс</a>
                            </li>
                            <li class="sabmenu__link pod_submenu-list-link">
                                <a href="#" class="sabmenu__link">Создание сайта на Open Cart</a>
                            </li>
                        </ul></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Создание бизнес-сайта</a></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Доработка сайта</a></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Создание мобильной версии</a></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Внедрение CRM</a></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Поддержка сайта</a></li>
                        <li class="pod_submenu-link submenu__link-list">
                            <a href="#" class="sabmenu__link sabmenu__link-color">Модернизация сайта</a></li>
                    </ul>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">SEO</a>
                </li>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Контекстная реклама</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Дизайн</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Интернет-маркетинг</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Магазин</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">О нас</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Контакты</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Блог</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Портфолио</a>
                </li>
                <li class="submenu__list">
                    <a class="submenu__link" href="#">Частые вопросы</a>
                </li>
            </ul> -->
            <?php 
                    wp_nav_menu( [
                        'theme_location'  => 'MenuOne',
                        'container'       => false,                  
                        'menu_class'      => 'submenu',
                        'echo'            => true,
                        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'           => 0,
                    ] );
                    ?>
        </div>
    </div>
    <div class="all_hidden">

    
