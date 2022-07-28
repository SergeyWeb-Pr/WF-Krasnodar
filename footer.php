<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WebFocus-krasnodar
 */

?>

<footer class="footer bg-gradient padding_top_150 padding_title_60">
        <!-- <div class="footer-bg"> -->
            <div class="container container_one">
                <div class="footer__wrapper">
                    <div class="footer__wrapper_content-block">
                        <div class="footer__logo">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/svg/foote_logo.svg" alt="" class="footer__logo-img">
                        </div>
                        <div class="footer__wrapper-block">
                            <p class="footer__title padding_bottom_40 h4_black">КОНТАКТЫ</p>
                                <div class="footer__wrapper-content">
                                    <div class="footer__link-wrapper">
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">О компании</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">Разработка</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">SEO</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">Контекст</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">SMM</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">Дизайн</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">Другие услуги</a>
                                        <a href="" class="footer__link p5_16_20_black margin_bottom_20">Контакты</a>
                                    </div>
                                    <div class="footer__contact">
                                        <a href="" class="footer__link p5_16_20_black padding_bottom_30 ">info@webfocusgroup.ru</a>
                                        <a href="tel:+7988402-12-12" class="footer__link p5_16_20_black padding_bottom_30 ">+7 (988) 402-12-12</a>
                                        <p class="p5_16_20_black padding_bottom_30 padding_20_500">350020, Краснодарский край,<br>
                                            г. Краснодар, ул. им.Бабушкина,<br>
                                            д.295, офис 84 “Д”</p>
                                        <p class="p5_16_20_black ">354008, Краснодарский край,<br>
                                            г. Сочи, ул. Санаторная, д.46,<br> 
                                            офис 228</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <p class="footer__copirate p2_black">© 2021 ООО “Веб Фокус” Все права на тексты и графику защищены</p>
                    </div>
            </div>
        <!-- </div> -->
    </footer>
    </div>

<?php wp_footer(); ?>

</body>
</html>
