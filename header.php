<!DOCTYPE html>
<html <?php language_attributes(); ?> class="h-full no-js" data-theme="numero">

<?php get_template_part('head'); ?>

<body <?php body_class('flex flex-col min-h-screen'); ?>>
    <nav class="bg-white border-b">
        <div class="container">
            desktop
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden shadow-lg shadow-primary-400/50" id="mobile-menu">
            mobile
        </div>
    </nav>

    <main class="main-content my-16 flex-1">