<?php if (have_rows('home_top_swiper')) : ?>
<div class="swiper home-top-swiper">
    <div class="swiper-wrapper relative">
        <?php while (have_rows('home_top_swiper')) : the_row(); ?>
        <?php
                $text_on_image = get_sub_field('text_on_image');
                $attachment_id = get_sub_field('background_image');
                $size = "full";
                $classes = 'absolute top-0 left-0 w-full h-full object-cover z-10';
                $call_to_action = get_sub_field('call_to_action');
                ?>
        <div class="swiper-slide relative flex justify-center items-end !h-home-swiper">
            <div class="relative z-30 bg-white p-4 basis-2/3">
                <h2><?php echo esc_html($text_on_image); ?></h2>
                <?php if ($call_to_action) : ?>
                <a class="btn" href="<?php echo esc_url($call_to_action['url']); ?>"
                    target="<?php echo esc_attr($call_to_action['target']); ?>">
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
    <div class="swiper-button-next">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
            <path fill="currentColor" d="m18 6l-1.43 1.393L24.15 15H4v2h20.15l-7.58 7.573L18 26l10-10z" />
        </svg>
    </div>
    <div class="swiper-button-prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 32 32">
            <path fill="currentColor" d="m14 26l1.41-1.41L7.83 17H28v-2H7.83l7.58-7.59L14 6L4 16z" />
        </svg>
    </div>
    <div class="flex justify-center h-8 items-center">
        <div class="swiper-pagination !relative !bottom-auto !left-auto px-4 basis-2/3"></div>
    </div>
</div>
<?php endif; ?>