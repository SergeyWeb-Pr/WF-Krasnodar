<section class="slider padding_bottom_150 padding_top_130">
    <div class="container container_one">
        <div class="">
            <p class="slider__subtitle p2_black padding_bottom_10">узнайте больше о мире интернет-маркетинга</p>
        </div>
        <h2 class="h2_black padding_title_60">Интересное</h2>
    </div>

    <div class="swiper-container">
        <div class="swiper-wrapper">


            <?php
            $posts = get_posts(array(
                'numberposts' => -1,
                'category'    => 5,
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
                <a href="<?php the_permalink(); ?>" class="swiper-slide swiper-slide-1 slide hends cursor-pull">
                    <?php echo get_the_post_thumbnail(); ?>
                    <div class="shadov cursor-pull"></div>
                    <div href="" class="slider-slide--link  cursor-pull">
                        <div class="slider__wrapper cursor-pull">
                            <p class="slider__item-subtitle p2_white padding_bottom_10 cursor-pull">#<?php the_field('хэштег'); ?></p>
                            <h3 class="slider__item-title h3_white padding_bottom_20 cursor-pull"><?php the_title(); ?></h3>
                            <p class="slider__item-text p3_white padding_bottom_30 cursor-pull"><?php the_field('текст'); ?></p>
                            <svg class="slider_img cursor-pull margin_bottom_40">
                                <use xlink:href="#arrow-slider"></use>
                            </svg>
                        </div>
                    </div>
                </a>
            <?php }

            wp_reset_postdata(); ?>

        </div>
    </div>
    <div class="slider__nav-wrapper padding_top_60">
        <div class="slider__nav">
            <div class="swiper-button-prev hends swiper-button_one"></div>
            <div class="swiper-button-next hends swiper-button-one_two"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>