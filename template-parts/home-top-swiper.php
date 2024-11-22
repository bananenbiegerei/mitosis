<?php if (have_rows('home_top_swiper')) : ?>
    <div class="swiper home-top-swiper h-home-swiper">
        <div class="swiper-wrapper relative">
            <?php while (have_rows('home_top_swiper')) : the_row(); ?>
                <?php
                $text_on_image = get_sub_field('text_on_image');
                $background_image_id = get_sub_field('background_image');
                $attachment_id = get_sub_field('background_image');
                $size = "full";
                $classes = 'absolute top-0 left-0 w-full h-full object-cover z-10';
                $call_to_action = get_sub_field('call_to_action');
                ?>
                <div class="swiper-slide relative flex justify-center items-end">
                        <div class="relative z-30 bg-white/50 p-4 basis-2/3">
                        <h2><?php echo esc_html($text_on_image); ?></h2>
                        <?php if ($call_to_action) : ?>
                            <a class="btn" href="<?php echo esc_url($call_to_action['url']); ?>" target="<?php echo esc_attr($call_to_action['target']); ?>">
                                <?php echo esc_html($call_to_action['title']); ?>
                            </a>
                        <?php endif; ?>
                        </div>
                        <?php
                        echo wp_get_attachment_image($attachment_id, $size, false, array('class' => $classes));
                        ?>

                </div>
            <?php endwhile; ?>
        </div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="bg-red-500">
        <div class="swiper-pagination !relative !bottom-auto !left-auto"></div>
        </div>
    </div>
<?php endif; ?>