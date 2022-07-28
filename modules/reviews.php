<section class="slider__reviews  padding_top_130 padding_bottom_150">
    <div class="container container_one">
        <div class="slider__reviews_inner">
            <div class="slider_reviews_left">
                <div class="slider_reviews_left_top">
                    <p class="slider_reviews_left_top_text community__subtitle p2_black padding_bottom_10">отзывы наших довольных клиентов</p>
                    <h2 class="slider_reviews_left_top_title padding_title_60 h2_black">Отзывы</h2>
                </div>
                <div class="slider_reviews_left_bottom ">
                    <div class="slider_reviews_left_bottom_hashtag padding_bottom_20">
                        <p class="slider_reviews_left_bottom_hashtag_text p2_black">#Разработка сайта </p>
                        <p class="slider_reviews_left_bottom_hashtag_text p2_black">#SEO-продвижение</p>
                    </div><?php the_field('текст_отзыва'); ?>
                    <h3 class="slider_reviews_left_bottom_name padding_bottom_5 h3_black_500">Екатерина Новикова</h3>
                    <p class="slider_reviews_left_bottom_text p5_16_20_black">Создание сайта hrbel.by</p>
                    <div class="slider__reviews_number">
                        <div class="swiper-pagination-two swiper-pagination-two_block"></div>
                    </div>
                </div>
            </div>
            <div class="slider_reviews_right">
                <div class="swiper swiper-cards swiper-3d swiper-initialized swiper-horizontal">
                    <div class="swiper-wrapper ">
                        <?php
                        $posts = get_posts(array(
                            'numberposts' => -1,
                            'category'    => 4,
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
                            <div class="swiper-slide swiper-slide-one cursor-pull">
                                <div class="slider_reviews_inner_block_img slider_reviews_inner_block_one cursor-pull">
                                    <p class="cursor-pull p3_black"><?php the_field('текст_отзыва'); ?></p>
                                </div>
                            </div>
                        <?php }

                        wp_reset_postdata(); ?>
                    </div>
                </div>
                <div class="slider__nav-wrapper-two">
                    <div class="slider__nav-two">
                        <div class="swiper-button-prev hends swiper-button-two"></div>
                        <div class="swiper-pagination-two_two  swiper-pagination-two_hidden"><span>-</span></div>
                        <div class="swiper-button-next hends swiper-button-two_two"> </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>