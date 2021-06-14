<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="author" content="Luca Pandolfelli" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark p-md-3" style="background: #222222;">
        <div class="container">
            <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <?php
                wp_nav_menu( array(
                    'theme_location'    => 'main-menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse text-white',
                    'container_id'      => 'navbarSupportedContent',
                    'menu_class'        => 'nav ms-auto navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
            ?>

        </div>
    </nav>
    
