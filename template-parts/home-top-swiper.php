<?php if (have_rows('home_top_swiper')) : ?>
    <div class="swiper home-top-swiper">
        <div class="swiper-wrapper">
            <?php while (have_rows('home_top_swiper')) : the_row(); ?>
                <?php
                $text_on_image = get_sub_field('text_on_image');
                $background_image_id = get_sub_field('background_image');
                $background_image_url = wp_get_attachment_image_url($background_image_id, 'full');
                $call_to_action = get_sub_field('call_to_action');
                ?>
                <div class="swiper-slide" style="background-image: url('<?php echo esc_url($background_image_url); ?>');">
                    <div class="swiper-slide-content">
                        <h2><?php echo esc_html($text_on_image); ?></h2>
                        <?php if ($call_to_action) : ?>
                            <a href="<?php echo esc_url($call_to_action['url']); ?>" target="<?php echo esc_attr($call_to_action['target']); ?>">
                                <?php echo esc_html($call_to_action['title']); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
<?php endif; ?>