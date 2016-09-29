<nav class="navbar-footer">
    <?php
        wp_nav_menu( array(
            'menu'              => 'primary',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => false,
            'container_id'      => 'menu-footer',
            'menu_class'        => 'nav navbar-nav navbar-footer__list',
            'fallback_cb'       => false
        ));
    ?>
</nav>