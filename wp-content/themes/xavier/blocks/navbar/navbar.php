<nav class="navbar navbar-default" role="navigation">
    <div class="navbar__container container">
    <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header navbar__container__header">
          <button type="button" class="navbar-toggle navbar__container__header--button-collapse" data-toggle="collapse" data-target="#menu-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
            <a class="navbar-brand navbar__container__header--brand" href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>
            <?php
                wp_nav_menu( array(
                    'menu'              => 'primary',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'navbar__container__menu navbar-right collapse navbar-collapse',
                    'container_id'      => 'menu-navbar-collapse',
                    'menu_class'        => 'nav navbar-nav navbar__container__menu__list',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
            ?>
    </div>
</nav>