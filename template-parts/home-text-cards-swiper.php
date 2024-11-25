<?php if (have_rows('text_cards')) : ?>
<div class="swiper home-text-cards-swiper">
    <div class="swiper-wrapper bg-lime-300 h-full">
        <?php while (have_rows('text_cards')) : the_row(); ?>
        <?php
        $headline = get_sub_field('headline');
        $description = get_sub_field('description');
        $bg_color = get_sub_field('background_colors');
        ?>
        <div class="swiper-slide !h-full max-w-[600px] !w-home-text-cards-container relative flex justify-center items-end bg-<?php echo $bg_color; ?>-600 flex gap-4 p-4 mx-3 !items-start">
            <div class="w-1/2">
            <h2><?php echo esc_html($headline); ?></h2>
            </div>
            <div class="text-base w-1/2"><?php echo $description; ?></div>
        </div>
        <?php endwhile; ?>
    </div>
</div>
<?php endif; ?>