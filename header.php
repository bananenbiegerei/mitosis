<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js" data-theme="numero">

<?php get_template_part('head'); ?>

<body <?php body_class('flex flex-col min-h-screen text-black'); ?>>
<header
        x-data="{ lastScroll: 0, direction: 'up' }"
        x-init="$watch('lastScroll', (newValue, oldValue) => direction = newValue > oldValue ? 'down' : 'up')"
        @scroll.window="lastScroll = window.scrollY"
        :class="direction === 'down' ? '-translate-y-full' : 'translate-y-0'"
        class="fixed top-0 left-0 w-full bg-white shadow transition-transform duration-300 z-50"
    >
    <nav class="container flex items-center">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="logo-link">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/mitosis_logo.svg'); ?>" alt="<?php bloginfo('name'); ?>" class="logo">
            </a>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'top',
                'menu_class'     => 'menu horizontal flex-1 justify-end',
                'container'      => false,
            ));
            ?>
        </nav>
    </header>

    <main class="main-content flex-1">